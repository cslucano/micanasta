<?php

namespace Walkeros\MicanastaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->temporadaAltaAction();
    }

    public function temporadaAltaAction()
    {
        $categoria = 'TA'; 

        return $this->renderizar($categoria);
    }

    public function temporadaBajaAction()
    {
        $categoria = 'TB'; 

        return $this->renderizar($categoria);
    }

    public function inexistenteAction()
    {
        $categoria = 'IN'; 

        return $this->renderizar($categoria);
    }

    public function renderizar($categoria)
    {
        $mes = (int)date('n');

        $productos = $this->getProducts($categoria, $mes);

        return $this->render(
            'WalkerosMicanastaBundle:Default:index.html.twig', array(
              'productos' => $productos
        ));
    }

    public function getProducts($categoria, $mes)
    {
        $em = $this->getDoctrine()->getManager();

        $categoria = $em->getRepository('WalkerosMicanastaBundle:Categoria')->findOneByCodigo($categoria);

        $query = $em->createQuery('
            SELECT 
              p, e, c
            FROM 
              WalkerosMicanastaBundle:Producto p LEFT JOIN
              p.estadisticas e LEFT JOIN
              e.categoria c 
            WHERE
              e.categoria = :categoria
        ')
        //->setParameter('mes', $mes)
        ->setParameter('categoria', $categoria);

        return $query->getResult();
    }
}
