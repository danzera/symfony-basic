<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
// include this to allow us to specify routes directly in the file here
use Symfony\Component\Routing\Annotation\Route;

// can share route configuration for every route in the controller
// ==> full square route is /shape/square/{side}
// route names will be a combination of the name specified here
//   and the name specified for the individual route
/**
 * @Route("/shape", name="shape_")
 */
class ShapeController {

	// this special type of comment specifies our route for us along with the 'use' statement above
	/**
	 * @Route("/square/{side}", name="square")
	 */
	function square($side) {
		return new Response(
			'<html><body>The area of a suqare with sides of '.$side.' equals '.($side * $side).'</html></body>'
		);
	}
}
