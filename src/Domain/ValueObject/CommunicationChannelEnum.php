<?php
declare(strict_types=1);

namespace App\Domain\ValueObject;

enum CommunicationChannelEnum: string
{
    case Email = 'email';
    case Phone = 'phone';
}