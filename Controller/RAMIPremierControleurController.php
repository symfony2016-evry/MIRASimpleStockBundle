<?php

//src/SYM16/SimpleStockBundle/Controller/MonPremierControleurController.php

namespace SYM16\SimpleStockBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RAMIPremierControleurController extends Controller
{
	public function iLikeAction($verbe){
		return new Response("J'aime beaucoup ".$verbe." !");
	}
	public function produitAction($chiffre1 , $chiffre2){
		$resultat=$chiffre1*$chiffre2;
		//return new Response("Le produit de ".$chiffre1." par ".$chiffre2." est de ".$resultat);
		return $this->render(
			'SYM16SimpleStockBundle:RAMIPremierControleur:produit.html.twig',
			array('chiffre1' => $chiffre1 , 'chiffre2' => $chiffre2 , 'resultat' => $resultat)
		);
	}
}

