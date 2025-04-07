<?php

declare(strict_types=1);

namespace MHWilds\Models;

use MHWilds\Models\Enums\DamageKind;
// use MHWilds\Models\Enums\WeaponKind;

final class MotionValue extends Model
{
    /**
     * @param int[] $hits
     */
    public function __construct(
        public readonly int $id,
        public readonly string $name,
        public readonly string $weapon, // TODO: WeaponKind enum
        public readonly DamageKind $damage,
        public readonly int $stun,
        public readonly int $exhaust,
        public readonly array $hits
    ) {}
}
