<?php

declare(strict_types=1);

namespace MHWilds\Models\Enums;

enum SkillKind: string
{
    case ARMOR  = 'armor';
    case WEAPON = 'weapon';
    case SET    = 'set';
    case GROUP  = 'group';
}
