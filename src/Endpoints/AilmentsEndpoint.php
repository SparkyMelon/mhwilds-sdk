<?php

declare(strict_types=1);

namespace MHWilds\Endpoints;

use MHWilds\Models\Ailment;
use MHWilds\Parameters\ListParameters;

/**
 * @extends Endpoint<Ailment, ListParameters>
 */
final class AilmentsEndpoint extends Endpoint
{
    public function getModelClass(): string
    {
        return Ailment::class;
    }

    public function getResourcePath(): string
    {
        return 'ailments';
    }
}
