<?php

namespace Eliecer\SimulacionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class CuadradoController extends Controller
{
	public function indexAction()
	{
		// formateando un saludo basico
		return new Response('<html><body>Bienvenido al modulo de Cuadrados Medios</body></html>');
	}
}
