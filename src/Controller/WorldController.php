<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class WorldController
{

    public function hello(): Response
    {
        return new Response('<html lang="en"><body><h1><b>Hello,</b> <i>world</i>!</h1></body></html>');
    }

}