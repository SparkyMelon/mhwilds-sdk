<?php

declare(strict_types=1);

namespace MHWilds\Models;

use MHWilds\Models\Enums\DecorationKind;

final class Decoration extends Model
{
    /**
     * @param SkillRank[] $skills
     */
    public function __construct(
        public readonly int $id,
        public readonly int $gameId,
        public readonly string $name,
        public readonly ?string $description,
        public readonly int $slot,
        public readonly int $rarity,
        public readonly DecorationKind $kind,
        public readonly array $skills,
    ) {}
}