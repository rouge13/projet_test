<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    public function indexAction(){
        $userName = 'Julien';
        return $this->render('home.html.twig', ["name" => $userName]);
    }

    public function nameAction($name)
    {
        return $this->render('name.html.twig', ["myName" => $name]);
    }

    public function aboutAction()
    {
        $fruits = [
            ["name"=>"berry", "price"=>8, "allergy"=>['pollen', 'autre chose']],
            ["name"=>"coconut", "price"=>12]
        ];
        return $this->render('about.html.twig',["fruits"=>$fruits]);
    }
}