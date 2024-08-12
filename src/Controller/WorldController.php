<?php

declare(strict_types=1);

namespace App\Controller;

use App\Domain\Service\FormatService;
use App\Domain\Service\GreeterService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class WorldController extends AbstractController
{

    public function __construct(
        private readonly FormatService  $formatService,
        private readonly GreeterService $greeterService
    )
    {
    }

    public function hello(): Response
    {
        $result = $this->formatService->format($this->greeterService->greet('Jesus Christ'));
        return new Response(
            sprintf("<html lang=\"RU\"><body>%s</body></html>",
                $result
            )
        );
    }

}
