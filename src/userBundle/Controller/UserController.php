<?php

namespace userBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function indexAction()
    {
        return new response('Bienvenido a mi modulo de usuario');
    }
	public function articlesAction($page)
    {
		return new response('este es mi articulo'.$page);
    }
}
