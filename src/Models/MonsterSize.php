<?php

declare(strict_types=1);

namespace MHWilds\Models;

final class MonsterSize
{
    public function __construct(
        public readonly float $base,
        public readonly float $mini,
        public readonly float $silver,
        public readonly float $gold
    ) {}
}
