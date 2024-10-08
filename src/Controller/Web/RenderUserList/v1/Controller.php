<?php
declare(strict_types=1);

namespace App\Controller\Web\RenderUserList\v1;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class Controller extends AbstractController
{
    public function __construct(private readonly Manager $userManager)
    {
    }

    #[Route(path: '/api/v1/get-user-list', methods: ['GET'])]
    public function __invoke(): Response
    {
        $this->denyAccessUnlessGranted('ROLE_GET_LIST');

        return $this->render('user-table.twig', ['users' => $this->userManager->getUserListData()]);
    }
}