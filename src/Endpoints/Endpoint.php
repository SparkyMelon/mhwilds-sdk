<?php

declare(strict_types=1);

namespace MHWilds\Endpoints;

use Brick\JsonMapper\JsonMapper;
use Brick\JsonMapper\OnExtraProperties;
use Brick\JsonMapper\OnMissingProperties;
use GuzzleHttp\Exception\GuzzleException;
use MHWilds\Endpoints\Exceptions\EndpointException;
use MHWilds\Models\Model;
use MHWilds\SDK;
use MHWilds\Parameters\ParametersInterface;

/**
 * @template M of Model
 * @template P of ParametersInterface
 */
abstract class Endpoint implements EndpointInterface
{
    public function __construct(
        protected readonly SDK $sdk
    ) {}

    /**
     * @param P $parameters
     * @return M[]
     */
    public function all(?ParametersInterface $parameters = null): array
    {
        if ( ! is_subclass_of($this->getModelClass(), Model::class) ) {
            throw new EndpointException("{$this->getModelClass()} is not a subclass of Model");
        }

        $client = $this->sdk->getClient();

        $queryString = $parameters?->getQueryString();
        $uri = $client->getConfig('base_uri'). "/{$this->getResourcePath()}";
        $uri .= ! is_null( $queryString ) ? "?{$queryString}" : '';

        try {
            $response = $client->get($uri);

            $data    = $response->getBody()->getContents();
            $results = json_decode($data);

            $Models = [];
            foreach ($results as $result) {
                $mapper = new JsonMapper(
                    onExtraProperties: OnExtraProperties::IGNORE,
                    onMissingProperties: OnMissingProperties::SET_NULL
                );
                $Models[] = $mapper->map(json_encode($result), $this->getModelClass());
            }

            return $Models;
        } catch (GuzzleException $e) {
            throw new EndpointException($e->getMessage());
        }
    }

    /**
     * @return M
     */
    public function one(int $id): Model
    {
        throw new \Exception('Not implemented');
    }
}
