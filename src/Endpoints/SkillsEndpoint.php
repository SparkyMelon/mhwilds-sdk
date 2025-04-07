<?php

declare(strict_types=1);

namespace MHWilds\Endpoints;

use MHWilds\Models\Skill;
use MHWilds\Parameters\ListParameters;

/**
 * @extends Endpoint<Skill, ListParameters>
 */
final class SkillsEndpoint extends Endpoint
{
    public function getModelClass(): string
    {
        return Skill::class;
    }

    public function getResourcePath(): string
    {
        return 'skills';
    }
}
