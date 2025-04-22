<?php

// Définition du chemin de ce fichier ; OBLIGATOIRE - doit représenter le chemin du fichier ; en remplaçant le dossier "src" par "App"
namespace App\Controller;

// Remplace le require. Indique le namespace de la class à utiliser. Symfony & composer réalisent le require automatiquement. 
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// Création de la classe HomeController
class ArticleController extends AbstractController {


	// Ajout d'une fonction nommée Home (méthode) qui exécute un var_dump
	// Définition d'une route, soit le chemin d'accès (url) à "/"
	// Quand un utilisateur demande l'url "/", la fonction est appelée
	#[Route('/list-articles', name:"list-articles")]
	public function listArticles() {
        // return new Response("<p>Liste</p>", 200);
        
        // j'utilise la méthode render
		// qui permet de récupérer un fichier de views twig
		// de le transformer en HTML
		// et de la renvoyer en response HTTP avec un status 200
		return $this->render('list-articles.html.twig');
	}

	#[Route('/create-articles', name:"create-articles")]
	public function createArticles() {
        return $this->render('create-articles.html.twig');
	}

	#[Route('/delete-articles', name:"delete-articles")]
	public function deleteArticles() {
        return $this->render('delete-articles.html.twig');
	}

}