<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\UserInterface;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/test", name="test")
     */
    public function testAction(Request $request)
    {
        $a = array (1 => "A", "B", "C");
        $a[1] = "A";
        $a[] = "B";
        $a[] = "C";
        print_r($a);die;
    }

    /**
     * @Route("/hello", name="hello")
     */
    public function helloAction(Request $request)
    {
        $tab = array('foo', 'key' => 'bar', 'baz', 36);

        var_dump(array_values(array('foo', 'key' => 'bar', 'baz', 36)), '--------');

        var_dump($tab[array_rand($tab)]);die;
    }
    
}
