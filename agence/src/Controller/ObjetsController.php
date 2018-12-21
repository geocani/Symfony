<?php
// Se situer dans le nameSpace
namespace App\Controller; 
// Charge les services
use App\Entity\Objet;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response; 
use Symfony\Component\Routing\Annotation\Route;


// Controler
class ObjetsController extends AbstractController
{
    /**
     * @Route("/objets", name="objets.index")
     * @return Response
     */

    public function index(): Response
    {
        
        $objet = new Objet();
        $objet->setTitle('Objet un')
            ->setPrix(20)
            ->setInfo("Info de l'objet un")
            ->setTaille(30)
            ->setPoids(500);
        $em = $this->getDoctrine()->getManager();
        $em->persist($objet);
        $em->flush();
        return $this->render('objets/index.html.twig');
    }
}