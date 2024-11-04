<?php
declare(strict_types=1);

namespace App\Domain\Model;

use DateTime;

class TweetModel
{
    public function __construct(
        public readonly int $id,
        public readonly string $author,
        public readonly string $text,
        public readonly DateTime $createdAt,
    ) {
    }
}