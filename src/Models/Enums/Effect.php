<?php

declare(strict_types=1);

namespace MHWilds\Models\Enums;

enum Effect: string
{
    case Noise   = 'noise';
    case Flash   = 'flash';
    case Stun    = 'stun';
    case Exhaust = 'exhaust';
}
