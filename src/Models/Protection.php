<?php

declare(strict_types=1);

namespace MHWilds\Models;

final class Protection
{
    /**
     * @param Item[] $items
     * @param Skill[] $skills
     */
    public function __construct(
        public readonly array $items,
        public readonly array $skills
    ) {}
}