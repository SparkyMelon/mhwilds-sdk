<?php

declare(strict_types=1);

namespace MHWilds\Models;

use MHWilds\Models\Enums\Rank;
use MHWilds\Models\Enums\ArmorKind;

final class Armor extends Model
{
    /**
     * @param int[] $slots
     * @param SkillRank[] $skills
     */
    public function __construct(
        public readonly int $id,
        public readonly string $name,
        public readonly ?string $description,
        public readonly ArmorKind $kind,
        public readonly Rank $rank,
        public readonly int $rarity,
        public readonly ArmorDefense $defense,
        public readonly ArmorResistances $resistances,
        public readonly array $slots,
        public readonly array $skills,
        public readonly ArmorSet $armorSet,
        public readonly ArmorCrafting $crafting
    ) {}
}
