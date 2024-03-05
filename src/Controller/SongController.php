<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SongController extends AbstractController
{
    #[Route('/api/song/{id<\d+>}', methods: ['GET'])]
    function getSong(int $id, LoggerInterface $logger): Response
    {
        $logger->info('bonjour');
        $song = [
            'id' => $id,
            'name' => 'Waterfalls',
            'url' => 'http://www.symfonycasts.s3.amazonaws.com/sample.mp3'
        ];
        return $this->json($song);
    }
}
