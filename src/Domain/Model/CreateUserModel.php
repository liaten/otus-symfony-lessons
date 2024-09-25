<?php
declare(strict_types=1);

namespace App\Domain\Model;

use App\Domain\ValueObject\CommunicationChannelEnum;
use Symfony\Component\Validator\Constraints as Assert;

class CreateUserModel
{
    public function __construct(
        #[Assert\NotBlank]
        public readonly string                   $login,
        #[Assert\NotBlank]
        #[Assert\When(
            expression: "this.communicationChannel.value === 'phone'",
            constraints: [new Assert\Length(max: 20)]
        )]
        public readonly string                   $communicationMethod,
        public readonly CommunicationChannelEnum $communicationChannel,
    )
    {
    }
}