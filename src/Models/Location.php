<?php

declare(strict_types=1);

namespace MHWilds\Models;

final class Location extends Model
{
    /**
     * @param null|Camp[] $camps
     */
    public function __construct(
        public readonly int $id,
        public readonly int $gameId,
        public readonly string $name,
        public readonly int $zoneCount,
        public readonly ?array $camps
    ) {}
}
