<?php

// Définition du chemin de ce fichier ; OBLIGATOIRE - doit représenter le chemin du fichier ; en remplaçant le dossier "src" par "App"
namespace App\Controller;

// Remplace le require. Indique le namespace de la class à utiliser. Symfony & composer réalisent le require automatiquement. 
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// Création de la classe HomeController
class PageController {


	// Ajout d'une fonction nommée Home (méthode) qui exécute un var_dump
	// Définition d'une route, soit le chemin d'accès (url) à "/"
	// Quand un utilisateur demande l'url "/", la fonction est appelée
	#[Route('/', name:"home")]
	public function home() {
		// j'utilise la classe Response de Symfony
		// pour renvoyer une réponse HTTP, incluant HTML et un status HTTP 200
		return new Response("<p>Accueil</p>", 200);
	}

	#[Route('/contact', name:"contact")]
	public function contact() {
		return new Response("<p>Contact</p>", 200);
	}

	#[Route('/a-propos', name:"a-propos")]
	public function propos() {
		return new Response("<p>A propos de</p>", 200);
	}

}
