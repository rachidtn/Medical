<?php

namespace YE\MyPlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	$em1 = $this->getDoctrine()->getManager();

        $medecins = $em1->getRepository('YEMyPlatformBundle:medecin')->findAll();

        $em = $this->getDoctrine()->getManager();

        $appointments = $em->getRepository('YEMyPlatformBundle:Appointment')->findAll();


        return $this->render('@YEMyPlatform/Default/index.html.twig', array(
            'medecins' => $medecins, 'appointments' => $appointments,
        ));
       
    }

}
