<?php


namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

// Création de la classe HomeController
class HomeController {


	// Ajout d'une fonction nommée Home (méthode) qui exécute un var_dump
	// Définition d'une route, soit le chemin d'accès (url) à "/"
	// Quand un utilisateur demande l'url "/", la fonction est appelée
	#[Route('/', name:"home")]
	public function home() {
		var_dump('Page accueil'); die;
	}

}