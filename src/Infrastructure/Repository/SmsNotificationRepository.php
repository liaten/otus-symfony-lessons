<?php
declare(strict_types=1);

namespace App\Infrastructure\Repository;


use App\Domain\Entity\SmsNotification;

class SmsNotificationRepository extends AbstractRepository
{
    public function create(SmsNotification $notification): int
    {
        return $this->store($notification);
    }
}