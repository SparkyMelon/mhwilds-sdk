<?php

declare(strict_types=1);

namespace MHWilds\Models;

final class MonsterReward
{
    /**
     * @param RewardCondition[] $conditions
     */
    public function __construct(
        public readonly Item $item,
        public readonly array $conditions
    ) {}
}