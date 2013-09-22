<?php

namespace Walkeros\MicanastaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WalkerosMicanastaBundle:Default:index.html.twig', array());
    }

    public function temporadaAlta()
    {
        $categoria = 'TA'; 
        $hoy = new \DateTime();
        $mes = date('n',$hoy);

        $products = $this->getProducts($categoria, $mes);

        return $this->render(
            'WalkerosMicanastaBundle:Default:index.html.twig', array(
              'products' => $products
        ));

    }

    public function getProducts($categoria, $mes)
    {
        $em = $this->getDoctrine()->getManager();

        $categoria = $em->getRepository('WalkerosMicanasta:Categoria')->findOneByCodigo('TA');

        $query = $em->createQuery('
            SELECT 
              p, e
            FROM 
              WalkerosMicanastaBundle:Producto p LEFT JOIN
              p.estadisticas e
            WHERE
              e.mes = :mes AND
              e.categoria = :categoria
        ')
        ->setParameter('mes', $mes)
        ->setParameter('categoria', $categoria);

        return $query->getResult();
    }
}
