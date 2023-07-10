<?php

namespace App\Controller;

use App\Entity\Properties;
use Doctrine\ORM\EntityManagerInterface;
use Redis;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Cache\CacheInterface;

class MyTestController extends AbstractController
{
    /**
     * @Route("/my/test", name="app_my_test")
     */
    public function index(EntityManagerInterface $em, Request $request, CacheInterface $cache): Response
    {
        $session = $request->getSession();
        //$session->set('testowa-sesja','testowa-wartosc');

        $all = $request->getSession()->all();

        $cookie = Cookie::create('name-cookie')
            ->withValue('John')
            ->withExpires(strtotime('2050-01-01'));

        $response = new Response();
        $response->headers->setCookie($cookie);
        //$response->send();

        /**
         * cache redis
         */

        $redis = new Redis();
        $redis->connect('mycache');
        //$redis->set('my-redis-test','test');

        /**
         * cache redis databse
         */

        $q = $em->createQuery("SELECT p FROM " . Properties::class . " p ")
            ->enableResultCache(86400,'my-properties-cache-redis')
            ->execute();

        return $this->render('my_test/index.html.twig', [
            'controller_name' => 'MyTestController',
            'session' => $session->get('testowa-sesja', 'brak danych'),
            'cookie' => $request->cookies->get('name-cookie'),
            'redis' => $redis->get('my-redis-test'),
            'my_variable' => getenv('MY_VARIABLE'),
            'my_param' => $this->getParameter('my_parameter') . '--- ' . $this->getParameter('my_parameter_env')
        ], $response);
    }

    public function getProperties(EntityManagerInterface $em): Response
    {
        $repo = $em->getRepository(Properties::class);
        $props = $repo->findAll();

        return $this->render('my_test/properties.html.twig', [
            'props' => $props,
        ]);
    }
}
