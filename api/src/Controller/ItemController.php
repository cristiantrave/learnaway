<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class ItemController
{
    /**
     * @Route("/api/items", methods={"GET","HEAD"})
     */
    public function listItems()
    {
        $items = array(
            0 => array(
                "sourceItem" => "Hola Mundo!", 
                "translationItem" => "Hello World!"
                )
        );

        $response = new JsonResponse($items);
        $response->setStatusCode(Response::HTTP_OK);

        return $response;
    }
}
