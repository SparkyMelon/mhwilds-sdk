<?php

declare(strict_types=1);

namespace MHWilds\Endpoints;

use MHWilds\Models\Decoration;
use MHWilds\Parameters\ListParameters;

/**
 * @extends Endpoint<Decoration, ListParameters>
 */
final class DecorationsEndpoint extends Endpoint
{
    public function getModelClass(): string
    {
        return Decoration::class;
    }

    public function getResourcePath(): string
    {
        return 'decorations';
    }
}
