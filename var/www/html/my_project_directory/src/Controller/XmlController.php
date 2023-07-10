<?php

namespace App\Controller;

use DOMDocument;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use XMLReader;

class XmlController extends AbstractController
{
    /**
     * @Route("/xml", name="app_xml")
     */
    public function index(): Response
    {
        $xmlReader = new XMLReader();
        $xmlReader->open('oferty.xml');

        while ($xmlReader->read()) {
            if ($xmlReader->localName == "dzial") {
                $node = $xmlReader->expand();
                $xmlDOM = new DomDocument();
                $dom = $xmlDOM->importNode($node, true);
                $xmlDOM->appendChild($dom);
                $simplexml = simplexml_import_dom($xmlDOM);
                $tab = (string)$simplexml->attributes()['tab'];
                $type = (string)$simplexml->attributes()['typ'];
                $properties = $simplexml->xpath('oferta');

                //list($props) = $properties;

                foreach ($properties as $property) {
                    $id = (string)$property->id;
                    $price = (string)$property->cena;
                    $props[$tab][$type][$id] = [
                      'id' => $id,
                      'price' => $price,
                      'params' => []
                    ];
                    $params = $property->param;
                    foreach ($params as $param) {
                        $name = $param->attributes()['nazwa'];
                        $props[$tab][$type][$id]['params'][(string)$name] = (string)$param;
                    }
                }
            }
        }

        echo"<PRE>";
        var_dump($props);
        echo"</PRE>";


        var_dump('end');die();

        return $this->render('xml/index.html.twig', [
            'controller_name' => 'XmlController',
        ]);
    }
}
