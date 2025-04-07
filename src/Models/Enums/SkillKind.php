<?php

declare(strict_types=1);

namespace MHWilds\Models\Enums;

enum SkillKind: string
{
    case Armor  = 'armor';
    case Weapon = 'weapon';
    case Set    = 'set';
    case Group  = 'group';
}
