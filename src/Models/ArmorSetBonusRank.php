<?php

declare(strict_types=1);

namespace MHWilds\Models;

final class ArmorSetBonusRank
{
    public function __construct(
        public readonly int $id,
        public readonly int $pieces,
        public readonly SkillRank $skill
    ) {}
}
