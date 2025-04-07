<?php

declare(strict_types=1);

namespace MHWilds\Endpoints;

use MHWilds\Models\Armor;
use MHWilds\Parameters\ListParameters;

/**
 * @extends Endpoint<Armor, ListParameters>
 */
final class ArmorEndpoint extends Endpoint
{
    public function getModelClass(): string
    {
        return Armor::class;
    }

    public function getResourcePath(): string
    {
        return 'armor';
    }
}
