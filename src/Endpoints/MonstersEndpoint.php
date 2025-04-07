<?php

declare(strict_types=1);

namespace MHWilds\Endpoints;

use MHWilds\Models\Monster;
use MHWilds\Parameters\ListParameters;

/**
 * @extends Endpoint<Monster, ListParameters>
 */
final class MonstersEndpoint extends Endpoint
{
    public function getModelClass(): string
    {
        return Monster::class;
    }

    public function getResourcePath(): string
    {
        return 'monsters';
    }
}
