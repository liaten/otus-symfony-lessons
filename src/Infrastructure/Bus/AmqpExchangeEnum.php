<?php
declare(strict_types=1);

namespace App\Infrastructure\Bus;

enum AmqpExchangeEnum: string
{
    case AddFollowers = 'add_followers';
}