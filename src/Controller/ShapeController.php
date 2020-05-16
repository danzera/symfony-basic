<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
// include this to allow us to specify routes directly in the file here
use Symfony\Component\Routing\Annotation\Route;

class ShapeController {

	// this special type of comment specifies our route for us along with the 'use' statement above
	/**
	 * @Route("/square")
	 */
	function square($side = 4) {
		return new Response(
			'<html><body>The area of a suqare with sides of '.$side.' equals '.($side * $side).'</html></body>'
		);
	}
}
