<?php

declare(strict_types=1);

namespace MHWilds\Models;

final class Recovery
{
    /**
     * @param string[] $actions
     * @param Item[] $items
     */
    public function __construct(
        public readonly array $actions,
        public readonly array $items
    ) {}
}
