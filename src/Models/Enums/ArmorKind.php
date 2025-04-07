<?php

declare(strict_types=1);

namespace MHWilds\Models\Enums;

enum ArmorKind: string
{
    case HEAD  = 'head';
    case CHEST = 'chest';
    case ARMS  = 'arms';
    case WAIST = 'waist';
    case LEGS  = 'legs';
}
