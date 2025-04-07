<?php

declare(strict_types=1);

namespace MHWilds\Models\Enums;

enum ArmorKind: string
{
    case Head  = 'head';
    case Chest = 'chest';
    case Arms  = 'arms';
    case Waist = 'waist';
    case Legs  = 'legs';
}
