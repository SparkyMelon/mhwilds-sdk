<?php

declare(strict_types=1);

namespace MHWilds\Models\Enums;

enum Risk: string
{
    case Safe      = 'safe';
    case Insecure  = 'insecure';
    case Dangerous = 'dangerous';
}
