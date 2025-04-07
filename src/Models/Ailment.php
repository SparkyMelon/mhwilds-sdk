<?php

declare(strict_types=1);

namespace MHWilds\Models;

final class Ailment extends Model
{
    public function __construct(
        public readonly int $id,
        public readonly string $name,
        public readonly Recovery $recovery,
        public readonly Protection $protection
    ) {}
}
