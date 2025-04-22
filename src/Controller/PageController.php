<?php


namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;

// Création de la classe HomeController
class PageController {


	// Ajout d'une fonction nommée Home (méthode) qui exécute un var_dump
	// Définition d'une route, soit le chemin d'accès (url) à "/"
	// Quand un utilisateur demande l'url "/", la fonction est appelée
	#[Route('/', name:"home")]
	public function home() {
		var_dump('Page accueil'); die;
	}

	#[Route('/contact', name:"contact")]
	public function contact() {
		var_dump('Page de contact'); die;
	}

	#[Route('/a-propos', name:"a-propos")]
	public function propos() {
		var_dump('Page à propos de'); die;
	}

}