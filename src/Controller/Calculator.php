<?php

namespace App\Controller;


use Symfony\Bridge\Twig\Attribute\Template;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

/** @psalm-api */
class Calculator extends AbstractController
{
    #[Route('/calculator', name: 'calculator')]
    #[Template('calculator.html.twig')]
    public function view(Request $request): array
    {
        $firstNumber = $request->get('firstNumber') ?: 0;
        $secondNumber = $request->get('secondNumber')?: 0;
        $operand = $request->get('operand')?: '';

        $calculator = new \App\Entity\Calculator(
            $firstNumber,
            $secondNumber,
            $operand
        );

        return [
            'firstNumber' => $firstNumber,
            'secondNumber' => $secondNumber,
            'operand' => $operand,
            'result' => $calculator->performCalculation(),
        ];
    }
}
