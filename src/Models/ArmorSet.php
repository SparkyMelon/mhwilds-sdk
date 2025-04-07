<?php

declare(strict_types=1);

namespace MHWilds\Models;

final class ArmorSet extends Model
{
    /**
     * @param null|Armor[] $pieces
     */
    public function __construct(
        public readonly int $id,
        public readonly ?int $gameId,
        public readonly ?string $name,
        public readonly ?array $pieces,
        public readonly ?ArmorSetBonus $bonus,
        public readonly ?ArmorSetBonus $groupBonus
    ) {}
}
