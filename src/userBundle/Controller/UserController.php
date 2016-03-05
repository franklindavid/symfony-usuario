<?php

namespace userBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function indexAction()
    {
        $em=$this->getDoctrine()->getManager();
		$users=$em->getRepository('userBundle:user')->findAll();
//		$res='Lista de usuarios: <br/>';
//		foreach($users as $user){
//			$res .='usuario: '.$user->getusername(). ' - email: '. $user->getemail().'<br/>';
//		}
//		return new response($res);
		return $this->render('userBundle:user:index.html.twig',array('users'=>$users));
	}
	public function addAction()
    {
        return new response('Bienvenido a mi modulo de agregar usuario');
    }
	public function editAction()
    {
        return new response('Bienvenido a mi modulo de editar usuario');
    }
	public function viewAction($id)
    {
       $repository=$this->getDoctrine()->getRepository('userBundle:user');
		$user=$repository->find($id);
//		$user=$repository->findOneById($id);
//		$user=$repository->findOneByUsername($id);
		return new response('usuario: '.$user->getusername().' con email: '.$user->getemail());
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
