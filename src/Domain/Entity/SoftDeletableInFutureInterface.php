<?php
declare(strict_types=1);

namespace App\Domain\Entity;

use DateInterval;

interface SoftDeletableInFutureInterface
{
    public function setDeletedAtInFuture(DateInterval $dateInterval): void;
}