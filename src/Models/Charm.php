<?php

declare(strict_types=1);

namespace MHWilds\Models;

final class Charm extends Model
{
    /**
     * @param CharmRank[] $ranks
     */
    public function __construct(
        public readonly int $id,
        public readonly int $gameId,
        public readonly array $ranks
    ) {}
}
