<?php

namespace Walkeros\MicanastaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $productos = $this->getProductosVariados();

        return $this->render(
            'WalkerosMicanastaBundle:Default:index.html.twig', array(
              'productos' => $productos
            )
        );
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

        $productos = $this->getProductos($categoria, $mes);

        return $this->render(
            'WalkerosMicanastaBundle:Default:index.html.twig', array(
              'productos' => $productos
        ));
    }

    public function getProductosVariados()
    {
        $mes = (int)date('n');
        $ids = array();

        $em = $this->getDoctrine()->getManager();

        $categoriaTA = $em->getRepository('WalkerosMicanastaBundle:Categoria')->findOneByCodigo('TA');
        $categoriaTB = $em->getRepository('WalkerosMicanastaBundle:Categoria')->findOneByCodigo('TB');

        $query = $em->createQuery('
            SELECT 
              p
            FROM 
              WalkerosMicanastaBundle:Producto p LEFT JOIN
              p.estadisticasCurrent ec LEFT JOIN
              ec.categoria ec_c
            WHERE
              ec.mes = :mes AND
              ec.categoria = :categoria
            ORDER BY
              ec.estacionalidad DESC
        ')
        ->setParameter('mes', $mes)
        ->setParameter('categoria', $categoriaTA);

        $productos = $query->getResult();

        foreach($productos as $producto)
        {
            $ids[] = $producto->getId();
        }

        $query = $em->createQuery('
            SELECT 
              p
            FROM 
              WalkerosMicanastaBundle:Producto p LEFT JOIN
              p.estadisticasCurrent ec LEFT JOIN
              ec.categoria ec_c
            WHERE
              ec.mes = :mes AND
              ec.categoria = :categoria
            ORDER BY
              ec.estacionalidad ASC
        ')
        ->setParameter('mes', $mes)
        ->setParameter('categoria', $categoriaTB);

        $productos = $query->getResult();

        foreach($productos as $producto)
        {
            $ids[] = $producto->getId();
        }

        $rand_keys = array_rand($ids, 20);
        $rand_vals = array();

        foreach($rand_keys as $key => $value)
        {
            $rand_vals[] = $ids[$value];
        }

        $query = $em->createQuery('
            SELECT 
              p, ec, ec_c, es, es_c
            FROM 
              WalkerosMicanastaBundle:Producto p LEFT JOIN
              p.estadisticasCurrent ec LEFT JOIN
              ec.categoria ec_c LEFT JOIN
              p.estadisticas es LEFT JOIN
              es.categoria es_c
            WHERE
              p.id in (:ids)
        ')
        ->setParameter('ids', $rand_vals);

        return $query->getResult();
    }

    public function getProductos($categoria, $mes)
    {
        $em = $this->getDoctrine()->getManager();

        $categoria = $em->getRepository('WalkerosMicanastaBundle:Categoria')->findOneByCodigo($categoria);

        $query = $em->createQuery('
            SELECT 
              p, ec, ec_c, es, es_c
            FROM 
              WalkerosMicanastaBundle:Producto p LEFT JOIN
              p.estadisticasCurrent ec LEFT JOIN
              ec.categoria ec_c LEFT JOIN
              p.estadisticas es LEFT JOIN
              es.categoria es_c
            WHERE
              ec.mes = :mes AND
              ec.categoria = :categoria
        ')
        ->setParameter('mes', $mes)
        ->setParameter('categoria', $categoria);

        return $query->getResult();
    }
}
