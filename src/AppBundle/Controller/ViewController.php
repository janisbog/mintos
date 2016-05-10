<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ViewController extends Controller
{
    /**
     * @Route("/index", name="index")
     */
    public function indexAction()
    {
        
        $em = $this->getDoctrine()
                   ->getEntityManager();
        
        $loans = $em->createQueryBuilder()
                    ->select('l')
                    ->from('AppBundle:Loans',  'l')
                    ->getQuery()
                    ->getResult();
        return $this->render('AppBundle:View:index.html.twig', array(
            'loans' => $loans
        ));
    }

}
