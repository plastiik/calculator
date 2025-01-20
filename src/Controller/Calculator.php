<?php

namespace App\Controller;

use Symfony\Bridge\Twig\Attribute\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsCsrfTokenValid;

/** @psalm-api */
class Calculator extends AbstractController
{
    #[Route('/calculator', name: 'view')]
    #[Template('calculator.html.twig')]
    public function view(): array
    {
        return ['test' => 'test'];
    }

    #[Route('/calculate', name: 'calculate')]
    #[IsCsrfTokenValid('calculate', tokenKey: 'token')]
    public function calculate(): array
    {
        return ['test' => 'test'];
    }
}
