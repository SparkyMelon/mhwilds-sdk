<?php

declare(strict_types=1);

namespace MHWilds\Models;

final class ArmorCrafting
{
    /**
     * @param CraftingCost[] $materials
     */
    public function __construct(
        public readonly int $id,
        public readonly int $zennyCost,
        public readonly array $materials
    ) {}
}
