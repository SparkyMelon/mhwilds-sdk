<?php

declare(strict_types=1);

namespace MHWilds\Models;

final class CraftingCost
{
    public function __construct(
        public readonly int $quantity,
        public readonly Item $item
    ) {}
}
