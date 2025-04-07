<?php

declare(strict_types=1);

namespace MHWilds;

use GuzzleHttp\Client;
use MHWilds\Endpoints;

final class SDK
{
    private Client $client;

    public function __construct(string $url) {
        $this->client = new Client(['base_uri' => $url]);
    }

    public function getClient(): Client
    {
        return $this->client;
    }

    public function ailments(): Endpoints\AilmentsEndpoint
    {
        return new Endpoints\AilmentsEndpoint($this);
    }

    public function armor(): Endpoints\ArmorEndpoint
    {
        return new Endpoints\ArmorEndpoint($this);
    }

    public function armorSets(): Endpoints\ArmorSetsEndpoint
    {
        return new Endpoints\ArmorSetsEndpoint($this);
    }

    public function charms(): Endpoints\CharmsEndpoint
    {
        return new Endpoints\CharmsEndpoint($this);
    }

    public function decorations(): Endpoints\DecorationsEndpoint
    {
        return new Endpoints\DecorationsEndpoint($this);
    }

    public function items(): Endpoints\ItemsEndpoint
    {
        return new Endpoints\ItemsEndpoint($this);
    }
    
    public function locations(): Endpoints\LocationsEndpoint
    {
        return new Endpoints\LocationsEndpoint($this);
    }

    public function monsters(): Endpoints\MonstersEndpoint
    {
        return new Endpoints\MonstersEndpoint($this);
    }

    public function skills(): Endpoints\SkillsEndpoint
    {
        return new Endpoints\SkillsEndpoint($this);
    }

    public function motionValues(): Endpoints\MotionValuesEndpoint
    {
        return new Endpoints\MotionValuesEndpoint($this);
    }
}
