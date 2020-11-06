<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky", name="lucky")
     */

     public function index(): Response
     {
         return $this->render('lucky/index.html.twig', [
             'controller_name' => 'LuckyController',
         ]);
     }
    public function number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);

        // return new Response(
        //     '<html><body>Lucky number: '.$number.'</body></html>'
        //     // not use ; on end of line
        // );
    }
}
