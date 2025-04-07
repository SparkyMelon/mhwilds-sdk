<?php

declare(strict_types=1);

namespace MHWilds\Endpoints;

use MHWilds\Models\Location;
use MHWilds\Parameters\ListParameters;

/**
 * @extends Endpoint<Location, ListParameters>
 */
final class LocationsEndpoint extends Endpoint
{
    public function getModelClass(): string
    {
        return Location::class;
    }

    public function getResourcePath(): string
    {
        return 'locations';
    }
}
