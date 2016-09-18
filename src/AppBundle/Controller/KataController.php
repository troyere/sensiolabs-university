<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;

class KataController extends Controller
{
    /**
     * @Route("/kata/xml", name="kata_xml")
     */
    public function kataXmlAction(Request $request)
    {
        $url = 'https://en.wikipedia.org/wiki/Wikipedia:Picture_of_the_day';

        $this->get('xml_reader')->readWebPage($url);

        die('end');
    }

}
