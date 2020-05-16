<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LuckyController {
	// generate a random integer in the range 0-100
	public function number() {
		$number = random_int(0, 100);

		return new Response(
			'<html><body>Lucky number: '.$number.'</body></html>'
		);
	}

}
