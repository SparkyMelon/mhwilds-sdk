<?php

declare(strict_types=1);

namespace MHWilds\Models;

final class ArmorDefense
{
    public function __construct(
        public readonly int $base,
        public readonly int $max
    ) {}
}
