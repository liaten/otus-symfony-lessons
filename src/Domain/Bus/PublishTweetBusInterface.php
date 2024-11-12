<?php
declare(strict_types=1);

namespace App\Domain\Bus;

use App\Domain\Model\TweetModel;

interface PublishTweetBusInterface
{
    public function sendPublishTweetMessage(TweetModel $tweetModel): bool;
}