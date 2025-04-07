<?php

declare(strict_types=1);

namespace MHWilds\Models\Enums;

enum Status: string
{
    case Poison      = 'poison';
    case Sleep       = 'sleep';
    case Paralysis   = 'paralysis';
    case Stun        = 'stun';
    case Blastblight = 'blastblight';
}
