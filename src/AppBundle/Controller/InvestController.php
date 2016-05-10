<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Loans;

class InvestController extends Controller
{
    /**
     * @Route("/invest/{loanID}", name="invest")
     */
    public function investAction($loanID)
    {
        $loan = $this->getDoctrine()
        ->getRepository('AppBundle:Loans')
        ->find($loanID);
         
        return $this->render('AppBundle:Invest:invest.html.twig', array(
            "loan" => $loan
        ));
    }

}
