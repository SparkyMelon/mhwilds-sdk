<?php

declare(strict_types=1);

namespace MHWilds\Models;

use MHWilds\Models\Enums\Rank;
use MHWilds\Models\Enums\RewardConditionKind;

final class RewardCondition
{
    public function __construct(
        public readonly RewardConditionKind $kind,
        public readonly Rank $rank,
        public readonly int $quantity,
        public readonly int $chance,
        public readonly ?string $part // TODO: This is an enum-like, how should this be handled?
    ) {}
}
