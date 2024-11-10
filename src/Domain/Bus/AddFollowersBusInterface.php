<?php
declare(strict_types=1);

namespace App\Domain\Bus;

use App\Domain\DTO\AddFollowersDTO;

interface AddFollowersBusInterface
{
    public function sendAddFollowersMessage(AddFollowersDTO $addFollowersDTO);
}