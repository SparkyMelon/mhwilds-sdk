<?php

declare(strict_types=1);

namespace MHWilds\Models\Enums;

enum Rank: string
{
    case Low = 'low';
    case High = 'high';
    case Master = 'master';
}
