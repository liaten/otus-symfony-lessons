<?php
declare(strict_types=1);

namespace App\Application\Doctrine\Types;

use App\Domain\ValueObject\CommunicationChannel;
use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\Exception\ValueNotConvertible;
use Doctrine\DBAL\Types\Type;
use RuntimeException;
use function is_string;

class CommunicationChannelType extends Type
{
    public function convertToPHPValue($value, AbstractPlatform $platform): ?CommunicationChannel
    {
        if ($value === null) {
            return null;
        }

        if (is_string($value)) {
            try {
                return CommunicationChannel::fromString($value);
            } catch (RuntimeException) {
            }
        }

        throw ValueNotConvertible::new($value, $this->getName());
    }

    public function getName(): string
    {
        return 'communicationChannel';
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform): ?string
    {
        if ($value === null) {
            return null;
        }

        if ($value instanceof CommunicationChannel) {
            return $value->getValue();
        }

        throw ValueNotConvertible::new($value, $this->getName());
    }

    public function getSQLDeclaration(array $column, AbstractPlatform $platform): string
    {
        return $platform->getStringTypeDeclarationSQL($column);
    }
}