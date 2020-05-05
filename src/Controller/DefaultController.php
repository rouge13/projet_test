<?php


namespace App\Controller;


use App\Repository\JobRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    public function indexAction(UserRepository $userRepository, JobRepository $jobRepository){
        $users = $userRepository->findAll();
        return $this->render('home.html.twig', ["users" => $users]);
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