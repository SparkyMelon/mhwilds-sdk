<?php

declare(strict_types=1);

namespace MHWilds\Endpoints;

use MHWilds\Models\Charm;
use MHWilds\Parameters\ListParameters;

/**
 * @extends Endpoint<Charm, ListParameters>
 */
final class CharmsEndpoint extends Endpoint
{
    public function getModelClass(): string
    {
        return Charm::class;
    }

    public function getResourcePath(): string
    {
        return 'charms';
    }
}
