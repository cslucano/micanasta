<?php

namespace Walkeros\MicanastaBundle\Controller;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Query\Expr\Andx;
use Doctrine\ORM\Query\Expr\Join;
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

        /** @var EntityManager $em */
        $em = $this->getDoctrine()->getManager();

        $qb = $em->createQueryBuilder();

        $qb
            ->select('p','e', 'c')
            ->from('WalkerosMicanastaBundle:Producto', 'p')
            ->join(
                'p.estadisticasCurrent',
                'e',
                Join::WITH,
                $qb->expr()->eq('e.mes',':mes')
            )
            ->join('e.categoria', 'c')
            ->setParameter(':mes', $mes)
        ;

        return $qb->getQuery()->getResult();
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
