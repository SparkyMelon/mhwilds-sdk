<?php

declare(strict_types=1);

namespace MHWilds\Endpoints;

interface EndpointInterface
{
    public function getModelClass(): string;

    public function getResourcePath(): string;
}
