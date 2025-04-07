<?php

declare(strict_types=1);

namespace MHWilds\Parameters;

final class ListParameters implements ParametersInterface
{
    public function __construct(
        private readonly ?int $limit = null,
        private readonly ?int $offset = null,
        private readonly ?int $query = null
    ) {}

    public function getQueryString(): string
    {
        $params = [];

        if (!is_null($this->limit)) {
            $params['limit'] = $this->limit;
        }

        if (!is_null($this->offset)) {
            $params['offset'] = $this->offset;
        }

        if (!is_null($this->query)) {
            $params['q'] = $this->query;
        }

        return http_build_query($params);
    }
}
