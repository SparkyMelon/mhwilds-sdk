<?php

declare(strict_types=1);

namespace MHWilds\Models;

final class Item extends Model
{
    /**
     * @param null|ItemRecipe[] $recipes
     */
    public function __construct(
        public readonly int $id,
        public readonly ?int $gameId,
        public readonly string $name,
        public readonly ?string $description,
        public readonly ?int $rarity,
        public readonly ?int $carryLimit,
        public readonly ?int $value,
        public readonly ?array $recipes
    ) {}
}
