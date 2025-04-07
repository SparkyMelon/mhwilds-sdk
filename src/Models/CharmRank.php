<?php

declare(strict_types=1);

namespace MHWilds\Models;

final class CharmRank
{
    /**
     * @param SkillRank[] $skills
     */
    public function __construct(
        public readonly int $id,
        public readonly string $name,
        public readonly ?string $description,
        public readonly ?int $level,
        public readonly ?int $rarity,
        public readonly ?array $skills,
        public readonly ?CharmRankCrafting $crafting
    ) {}
}
