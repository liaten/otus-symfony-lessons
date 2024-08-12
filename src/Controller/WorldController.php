<?php

declare(strict_types=1);

namespace App\Controller;

use App\Domain\Service\GreeterService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class WorldController extends AbstractController
{

    public function __construct(private readonly GreeterService $greeterService)
    {
    }

    public function hello(): Response
    {
        return new Response(
            sprintf("<html lang=\"RU\"><body>%s</body></html>",
                $this->greeterService->greet('world'))
        );
    }

}
