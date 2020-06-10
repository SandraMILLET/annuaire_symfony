<?php

namespace App\Controller;
use App\Entity\Company;
use App\Repository\CompanyRepository;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class GpscompanyController extends AbstractController
{
    public function apiAdress($address)
	{
		return str_replace(" ", "+", $address);
	}

	/**
	 * @Route("/gpscompany", name="gpscompany")
	 */
	public function index(CompanyRepository $company)
	{
		$client = HttpClient::create();
		$allcompany = $company->findAll();
		for ($i = 0; $i < count($allcompany); $i++) {
			if (($allcompany[$i]->getSociety() != null)
				&& ($allcompany[$i]->getAddress() != null)
			) {
				$companies[] = $allcompany[$i];
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

		for ($i = 0; $i < count($companies); $i++) {
			$reqCompany = $client->request('GET', 'https://api-adresse.data.gouv.fr/search/?q=' . $this->apiAdress($companies[$i]->getAddress()) . '&postcode=' . $companies[$i]->getCodepostal());
			$contentPro = $reqCompany->toArray();
			$GPS[$i] = $contentPro['features'][0]['geometry']['coordinates'];
		}


		return $this->render('gpscompany/index.html.twig', [
			'controller_name' => 'GpscompanyController',
			'lat' => $lat,
			'lon' => $lon,
			'rue' => $rue,
			'codePostal' => $codePostal,
			'ville' => $city,
			'content' => $content,
			'companies' => $companies,
			'GPS' => $GPS
		]);
	}
}