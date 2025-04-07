<?php

declare(strict_types=1);

namespace MHWilds\Models\Enums;

enum DamageKind: string
{
    case Severing   = 'severing';
    case Blunt      = 'blunt';
    case Projectile = 'projectile';
}
