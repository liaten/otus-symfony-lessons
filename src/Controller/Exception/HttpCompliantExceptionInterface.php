<?php
declare(strict_types=1);

namespace App\Controller\Exception;

interface HttpCompliantExceptionInterface
{
    public function getHttpCode(): int;

    public function getHttpResponseBody(): string;
}