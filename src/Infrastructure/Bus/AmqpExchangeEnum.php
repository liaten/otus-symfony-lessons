<?php
declare(strict_types=1);

namespace App\Infrastructure\Bus;


enum AmqpExchangeEnum: string
{
    case AddFollowers = 'add_followers';
    case PublishTweet = 'publish_tweet';
    case SendNotification = 'send_notification';
    case UpdateFeed = 'update_feed';
}