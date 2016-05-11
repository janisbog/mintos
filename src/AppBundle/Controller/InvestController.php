<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Loans;
use Symfony\Component\HttpFoundation\Request;

class InvestController extends Controller
{
    /**
     * @Route("/invest/{loanID}", name="invest")
     */
    public function investAction(Request $request, $loanID)
    {
        
        $loan = $this->getDoctrine()
        ->getRepository('AppBundle:Loans')
        ->find($loanID);
        $form = $this->createForm('AppBundle\Form\InvestType');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var Comment $comment */
            $comment = $form->getData();
            $comment->setAmount($this->getUser()->getEmail());
            $comment->setPost($post);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($comment);
            $entityManager->flush();

            return $this->redirectToRoute('invest', array('loanID' => $loanID));
        }
        
        return $this->render('AppBundle:Invest:invest.html.twig', array(
            "loan" => $loan,
            'form' => $form->createView(),
        ));
    }

}
