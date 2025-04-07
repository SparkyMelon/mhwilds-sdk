<?php

declare(strict_types=1);

namespace MHWilds\Models;

final class ArmorResistances
{
    public function __construct(
        public readonly int $fire,
        public readonly int $water,
        public readonly int $ice,
        public readonly int $thunder,
        public readonly int $dragon
    ) {}
}
