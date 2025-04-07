<?php

declare(strict_types=1);

namespace MHWilds\Models;

use MHWilds\Models\Enums\MonsterKind;
use MHWilds\Models\Enums\Species;

final class Monster extends Model
{
    /**
     * @param Location[] $locations
     * @param MonsterResistance[] $resistances
     * @param MonsterWeakness[] $weaknesses
     * @param MonsterReward[] $rewards
     * @param MonsterPart[] $breakableParts
     */
    public function __construct(
        public readonly int $id,
        public readonly int $gameId,
        public readonly MonsterKind $kind,
        public readonly Species $species,
        public readonly string $name,
        public readonly MonsterSize $size,
        public readonly string $description,
        public readonly string $features,
        public readonly string $tips,
        public readonly int $baseHealth,
        public readonly array $locations,
        public readonly array $resistances,
        public readonly array $weaknesses,
        public readonly array $rewards,
        public readonly array $breakableParts
    ) {}
}
