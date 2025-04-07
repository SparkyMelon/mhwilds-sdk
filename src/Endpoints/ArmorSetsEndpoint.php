<?php

declare(strict_types=1);

namespace MHWilds\Endpoints;

use MHWilds\Models\ArmorSet;
use MHWilds\Parameters\ListParameters;

/**
 * @extends Endpoint<ArmorSet, ListParameters>
 */
final class ArmorSetsEndpoint extends Endpoint
{
    public function getModelClass(): string
    {
        return ArmorSet::class;
    }

    public function getResourcePath(): string
    {
        return 'armor/sets';
    }
}
