<?php

declare(strict_types=1);

namespace MHWilds\Models;

final class CharmRankCrafting
{
    /**
     * @param CraftingCost[] $materials
     */
    public function __construct(
        public readonly bool $craftable,
        public readonly int $zennyCost,
        public readonly array $materials
    ) {}
}
