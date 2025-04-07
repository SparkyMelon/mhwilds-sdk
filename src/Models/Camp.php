<?php

declare(strict_types=1);

namespace MHWilds\Models;

use MHWilds\Models\Enums\Risk;

final class Camp
{
    public function __construct(
        public readonly int $id,
        public readonly string $name,
        public readonly int $zone,
        public readonly int $floor,
        public readonly Risk $risk,
        public readonly Position $position,
    ) {}
}
