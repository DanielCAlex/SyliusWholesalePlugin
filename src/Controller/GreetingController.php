<?php

declare(strict_types=1);

namespace SkyBoundtech\SyliusWholesalePlugin\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

final class GreetingController extends AbstractController
{
    public function staticallyGreetAction(?string $name): Response
    {
        return $this->render('@SyliusWholesalePlugin/static_greeting.html.twig', ['greeting' => $this->getGreeting($name)]);
    }

    public function dynamicallyGreetAction(?string $name): Response
    {
        return $this->render('@SyliusWholesalePlugin/dynamic_greeting.html.twig', ['greeting' => $this->getGreeting($name)]);
    }

    private function getGreeting(?string $name): string
    {
        switch ($name) {
            case null:
                return 'Hello!';
            case 'Lionel Richie':
                return 'Hello, is it me you\'re looking for?';
            default:
                return sprintf('Hello, %s!', $name);
        }
    }
}
