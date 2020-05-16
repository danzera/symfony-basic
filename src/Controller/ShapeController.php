<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
// include this to allow us to specify routes directly in the file here
use Symfony\Component\Routing\Annotation\Route;
// include this to access the Request object
use Symfony\Component\HttpFoundation\Request;

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
	function square($side, Request $request) {
		// route details are available via the Request object
		$allAttributes = $request->attributes->all(); // all request attributes
		$routeName = $request->attributes->get('_route'); // specificy request attributes
		$routeParameters = $request->attributes->get('_route_params');
		// print the route attributes to the browser console
		echo "<script>console.log(".json_encode($allAttributes).");</script>";


		return new Response(
			'<html>
				<body>
					<h1>You hit the route '.$routeName.'.</h1>
					<p>The area of a suqare with sides of '.$side.' equals '.($side * $side).'</p>
				</body>
			</html>'
		);
	}
}
