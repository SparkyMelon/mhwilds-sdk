<?php

declare(strict_types=1);

namespace MHWilds\Models;

use MHWilds\Models\Enums\Effect;
use MHWilds\Models\Enums\Element;
use MHWilds\Models\Enums\ResistanceKind;
use MHWilds\Models\Enums\Status;

final class MonsterResistance
{
    public function __construct(
        public readonly int $id,
        public readonly ?string $condition,
        public readonly ResistanceKind $kind,
        public readonly ?Element $element,
        public readonly ?Status $status,
        public readonly ?Effect $effect
    ) {}
}
