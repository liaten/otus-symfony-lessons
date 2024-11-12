<?php
declare(strict_types=1);

namespace App\Controller\Web\PostTweet\v1\Input;

class PostTweetDTO
{
    public function __construct(
        public readonly int $userId,
        public readonly string $text,
        public readonly bool $async = false,
    ) {
    }
}