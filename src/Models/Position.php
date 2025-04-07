<?php

declare(strict_types=1);

namespace MHWilds\Models;

final class Position
{
    public function __construct(
        public readonly float $x,
        public readonly float $y,
        public readonly float $z
    ) {}
}
