<?php

declare(strict_types=1);

namespace MHWilds\Models;

use MHWilds\Models\Enums\SkillKind;

final class Skill extends Model
{
    /**
     * @param null|SkillRank[] $ranks
     */
    public function __construct(
        public readonly int $id,
        public readonly string $name,
        public readonly ?string $description,
        public readonly ?array $ranks,
        public readonly ?SkillKind $kind
    ) {}
}
