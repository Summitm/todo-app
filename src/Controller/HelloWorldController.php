<?php
    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class HelloWorldController
    {
        /**
         * @Route("/morning/message")
        */
        public function greetings(): Response
        {
            $message = "Hello World from the Symfony side!";

            return new Response("<html><body><em>".$message."</em></body></html>");
        }
    }
?>