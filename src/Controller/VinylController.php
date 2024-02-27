<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController
{
    #[Route("/")]
    function homepage(): Response
    {
        return new Response("Bonjour <strong>Wael DSI21G2 !</strong> <br><img src='https://media.licdn.com/dms/image/D4E03AQF9APyb0saIYg/profile-displayphoto-shrink_800_800/0/1688684069098?e=2147483647&v=beta&t=8pIA51gFo0tpJWkZqk1u5jG0olDxzFyj96SuUGrPOZQ' width=200/>");
    }
    #[Route("/browser/{slug}")]
    function browse(string $slug = null): Response
    {
        if ($slug) {
            $title = "Genre : " . u(str_replace("-", " ", $slug))->title(true);
        } else {
            $title = "All Genre";
        }

        return new Response($title);
    }
}
