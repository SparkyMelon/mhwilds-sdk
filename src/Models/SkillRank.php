<?php

declare(strict_types=1);

namespace MHWilds\Models;

final class SkillRank
{
    public function __construct(
        public readonly int $id,
        public readonly ?string $description,
        public readonly int $level
    ) {}
}
