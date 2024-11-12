<?php
declare(strict_types=1);

namespace App\Domain\Bus;

use App\Domain\DTO\SendNotificationDTO;

interface SendNotificationBusInterface
{
    public function sendNotification(SendNotificationDTO $sendNotificationDTO): bool;
}