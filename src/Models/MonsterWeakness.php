<?php

declare(strict_types=1);

namespace MHWilds\Models;

use MHWilds\Models\Enums\Effect;
use MHWilds\Models\Enums\Element;
use MHWilds\Models\Enums\Status;
use MHWilds\Models\Enums\WeaknessKind;

final class MonsterWeakness
{
    public function __construct(
        public readonly int $id,
        public readonly int $level,
        public readonly ?string $condition,
        public readonly WeaknessKind $kind,
        public readonly ?Element $element,
        public readonly ?Status $status,
        public readonly ?Effect $effect
    ) {}
}
