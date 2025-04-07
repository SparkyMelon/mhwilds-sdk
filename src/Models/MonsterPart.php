<?php

declare(strict_types=1);

namespace MHWilds\Models;

final class MonsterPart
{
    public function __construct(
        public readonly int $id,
        public readonly string $name,
        public readonly string $part
    ) {}
}
