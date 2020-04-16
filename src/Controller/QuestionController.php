<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Some text!');
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug)
    {
        $answers = [
            'blabla',
            'bloblo',
            'blibli'
        ];
        return $this->render('question/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => $answers
        ]);
        return new Response(sprintf(
            'future page to show something!, "%s"',
            ucwords(str_replace('-', ' ', $slug))
        ));
    }
}