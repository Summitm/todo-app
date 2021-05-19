<?php
namespace App\Controller;

// use package/bundle
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController
{
    /**
    * @Route("/lucky/number") 
    */
    public function generateLuckyNum(): Response
    {
        $number = random_int(2, 100);

        return new Response("<html><body>Lucky number is: ".$number."</body></html>");
    }
}

?>