<?php
declare(strict_types=1);

namespace App\Domain\DTO;

class AddFollowersDTO
{
    public function __construct(
        public readonly int $userId,
        public readonly string $followerLogin,
        public readonly int $count
    ) {
    }
}