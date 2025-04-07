<?php

declare(strict_types=1);

namespace MHWilds\Models;

final class ArmorSetBonus
{
    /**
     * @param null|ArmorSetBonusRank[] $ranks
     */
    public function __construct(
        public readonly int $id,
        public readonly Skill $skill,
        public readonly ?array $ranks
    ) {}
}
