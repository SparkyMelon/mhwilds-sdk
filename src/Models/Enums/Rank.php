<?php

declare(strict_types=1);

namespace MHWilds\Models\Enums;

enum Rank: string
{
    case LOW = 'low';
    case HIGH = 'high';
    case MASTER = 'master';
}
