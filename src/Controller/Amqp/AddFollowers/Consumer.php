<?php
declare(strict_types=1);

namespace App\Controller\Amqp\AddFollowers;

use App\Application\RabbitMq\AbstractConsumer;
use App\Controller\Amqp\AddFollowers\Input\Message;
use App\Domain\Entity\User;
use App\Domain\Service\FollowerService;
use App\Domain\Service\UserService;

class Consumer extends AbstractConsumer
{
    public function __construct(
        private readonly UserService $userService,
        private readonly FollowerService $followerService,
    )
    {
    }

    protected function getMessageClass(): string
    {
        return Message::class;
    }

    protected function handle($message): int
    {
        $userId = $message->userId;
        $user = $this->userService->findUserById($userId);
        if (!($user instanceof User)) {
            return $this->reject(sprintf('User ID %s was not found', $userId));
        }

        $this->followerService->addFollowersSync($user, $message->followerLogin, $message->count);

        return self::MSG_ACK;
    }
}