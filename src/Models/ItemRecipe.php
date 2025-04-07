<?php

declare(strict_types=1);

namespace MHWilds\Models;

final class ItemRecipe
{
    /**
     * @param Item[] $inputs
     */
    public function __construct(
        public readonly int $id,
        public readonly int $amount,
        public readonly array $inputs
    ) {}
}
