<?php
declare(strict_types=1);

namespace App\Domain\Entity;

interface HasMetaTimestampsInterface
{
    public function setCreatedAt(): void;

    public function setUpdatedAt(): void;
}