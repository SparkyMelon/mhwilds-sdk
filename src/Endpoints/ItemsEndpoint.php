<?php

declare(strict_types=1);

namespace MHWilds\Endpoints;

use MHWilds\Models\Item;
use MHWilds\Parameters\ListParameters;

/**
 * @extends Endpoint<Item, ListParameters>
 */
final class ItemsEndpoint extends Endpoint
{
    public function getModelClass(): string
    {
        return Item::class;
    }

    public function getResourcePath(): string
    {
        return 'items';
    }
}
