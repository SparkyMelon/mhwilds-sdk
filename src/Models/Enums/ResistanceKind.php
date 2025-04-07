<?php

declare(strict_types=1);

namespace MHWilds\Models\Enums;

enum ResistanceKind: string
{
    case Element = 'element';
    case Status  = 'status';
    case Effect  = 'effect';
}
