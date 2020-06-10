<?php

namespace App\Controller;

use App\Repository\UserProRepository;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TestMapController extends AbstractController
{

	public function apiAdress($adresse)
	{
		return str_replace(" ", "+", $adresse);
	}

	/**
	 * @Route("/mapTest", name="mapTest")
	 */
	public function index(UserProRepository $pro)
	{
		$client = HttpClient::create();
		$allPros = $pro->findAll();
		for ($i = 0; $i < count($allPros); $i++) {
			if (($allPros[$i]->getSociety() != null)
				&& ($allPros[$i]->getPro()->getAdresse() != null)
			) {
				$pros[] = $allPros[$i];
			}
		}

		$lat = '44.015750';
		$lon = '1.355590';

		$response = $client->request('GET', 'https://api-adresse.data.gouv.fr/reverse/?lon=' . $lon . '&lat=' . $lat);
		$convertedContent = $response->toArray();
		$content = $response->getContent();
		$rue = $convertedContent['features'][0]['properties']['name'];
		$codePostal = $convertedContent['features'][0]['properties']['postcode'];
		$city = $convertedContent['features'][0]['properties']['city'];

		$GPS = [];

		for ($i = 0; $i < count($pros); $i++) {
			$reqPro = $client->request('GET', 'https://api-adresse.data.gouv.fr/search/?q=' . $this->apiAdress($pros[$i]->getPro()->getAdresse()) . '&postcode=' . $pros[$i]->getPro()->getCodepostal());
			$contentPro = $reqPro->toArray();
			$GPS[$i] = $contentPro['features'][0]['geometry']['coordinates'];
		}


		return $this->render('front/test_map/index.html.twig', [
			'controller_name' => 'TestMapController',
			'lat' => $lat,
			'lon' => $lon,
			'rue' => $rue,
			'codePostal' => $codePostal,
			'ville' => $city,
			'content' => $content,
			'pros' => $pros,
			'GPS' => $GPS
		]);
	}
}
