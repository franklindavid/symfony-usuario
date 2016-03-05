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
	public function addAction()
    {
        return new response('Bienvenido a mi modulo de agregar usuario');
    }
	public function editAction()
    {
        return new response('Bienvenido a mi modulo de editar usuario');
    }
	public function viewAction()
    {
        return new response('Bienvenido a mi modulo de ver usuario');
    }
	public function deleteAction()
    {
        return new response('Bienvenido a mi modulo de eliminar usuario');
    }
	
//	public function articlesAction($page)
//    {
//		return new response('este es mi articulo'.$page);
//    } //controller con parametro
}
