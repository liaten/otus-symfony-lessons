<?php

declare(strict_types=1);

namespace App\Domain\Service;

class GreeterService
{
    private string $greet;

    public function __construct(string $greet)
    {
        $this->greet = $greet;
    }

    public function greet(string $name): string
    {
        return sprintf('%s, %s!',
            $this->greet,
            $name
        );
    }
}
