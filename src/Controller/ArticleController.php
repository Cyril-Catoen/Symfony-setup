<?php

// Définition du chemin de ce fichier ; OBLIGATOIRE - doit représenter le chemin du fichier ; en remplaçant le dossier "src" par "App"
namespace App\Controller;

// Remplace le require. Indique le namespace de la class à utiliser. Symfony & composer réalisent le require automatiquement. 
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// Création de la classe HomeController
class ArticleController {


	// Ajout d'une fonction nommée Home (méthode) qui exécute un var_dump
	// Définition d'une route, soit le chemin d'accès (url) à "/"
	// Quand un utilisateur demande l'url "/", la fonction est appelée
	#[Route('/list-articles', name:"list-articles")]
	public function listArticles() {
        return new Response("<p>Liste</p>", 200);
	}

	#[Route('/create-articles', name:"create-articles")]
	public function createArticles() {
        return new Response("<p>Créer un article</p>", 200);
	}

	#[Route('/delete-articles', name:"delete-articles")]
	public function deleteArticles() {
        return new Response("<p>Supprimer un article</p>", 200);
	}

}