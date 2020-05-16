<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
// include this for Twig templating
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
// may include when using generateUrl()
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

// need to extend AbstractController to use Twig templating
class LuckyController extends AbstractController {
	// generate a random integer in the range 0-100
	public function number() {
		$number = random_int(0, 100);

		// can use this function to dynamically generate the URL of a route
		// 2nd and 3rd params are optional
		// 2nd specifies an associative array of route params, if any params are not part of the route definition, they are included in the generated URL as a query string
		// 3rd generates different types of URLs, default is ABSOLUTE_PATH if the param is omitted
		$shapePage = $this->generateUrl('shape_square', ['side' => 11], UrlGeneratorInterface::ABSOLUTE_PATH);
		echo $shapePage;

		// returning HTML without using templating
		// return new Response(
			// '<html><body>Lucky number: '.$number.'</body></html>'
		// );

		// returning HTML with Twig templating
		// Twigs render function takes a file name, relative to the templates/ directory
		// it also takes an associative array for injecting variables into the template
		return $this->render('lucky/number.html.twig', [
			'number' => $number
		]);
	}

}
