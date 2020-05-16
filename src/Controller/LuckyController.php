<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

// need to extend AbstractController to use Twig templating
class LuckyController extends AbstractController {
	// generate a random integer in the range 0-100
	public function number() {
		$number = random_int(0, 100);

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
