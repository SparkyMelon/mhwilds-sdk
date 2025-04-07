<?php

declare(strict_types=1);

namespace MHWilds\Endpoints;

use MHWilds\Models\MotionValue;
use MHWilds\Parameters\ListParameters;

/**
 * @extends Endpoint<MotionValue, ListParameters>
 */
final class MotionValuesEndpoint extends Endpoint
{
    public function getModelClass(): string
    {
        return MotionValue::class;
    }

    public function getResourcePath(): string
    {
        return 'motion-values';
    }
}
