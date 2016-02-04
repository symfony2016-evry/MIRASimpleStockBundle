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
	public function racineAction($valeur , $radical){
		$url=$this->get('router')->
			generate('sym16_simple_stock_homepage',
			array('name' => 'Jean Eudes'));
		return new RedirectResponse($url);
	}
	public function modifierAction(){
		$url=$this->get('router')->
			generate('sym16_simple_stock_homepage',
			array('name' => 'Jean Eudes'));
		return new RedirectResponse($url);
	}
	public function supprimerAction(){
		$url=$this->get('router')->
			generate('sym16_simple_stock_homepage',
			array('name' => 'Jean Eudes'));
		return new RedirectResponse($url);
	}

    //lister un tableau (constuit en dur dans cette fonction, en vérité proviendra d'une BDD)
    public function listerAction() {
	// contruction de la première ligne du tableau (ligne d'intitulé)
	$listColnames = array('ID', 'Libellé', 'Prix HT', 'Prix TTC');
	// construction des autres lignes du tableau
	$listEntities = array( 
		array('id'=> '3', 'Vis',		'100',	'120'),		// un article : son id, son label, ses prix HT et TTC
		array('id'=> '4', 'Ecrou', 		'50', 	'60'),		// un autre article : idem
		array('id'=> '7', 'Rondelle',	'10', 	'12'));		// un autre article : idem
    $path=array(
		'mod'=>	'sym16_simple_stock_modifier',	// le chemin qui traitera l'action modifier
		'supr'=>'sym16_simple_stock_supprimer');// le chemin qui traitera l'action supprimer

		return $this->render(
		'SYM16SimpleStockBundle:RAMIPremierControleur:lister.html.twig',
		array('listColnames' => $listColnames, 'listEntities'=> $listEntities, 'path'=>$path)
        );
    }

}

