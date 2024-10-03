<?php
/**
 * Composant d'accès à la table authors
 */


/**
* Retourne la liste des auteurs
* @param PDO $pdo connexion à la BDD
* @return array liste des tuples
*/
 function getAuthors(PDO $pdo) : array
 {

 }


/**
 * Summary of getOneAuthor
 * @param PDO $pdo connexion à la BDD
 * @param int $id identifiant du tuple
 * @return array
 */
function getOneAuthor(PDO $pdo, int $id) : array
{

}


/**
 * Crée un utilisateur
 * @param PDO $pdo Objet de connexion à la BDD
 * @param array $data données de l'utilisateur
 * @return int identfiant du nouvel utilisateur
 */
function createAuthor(PDO $pdo, array $data) : int
{

}


/**
 * Modifie un auteur
 * @param PDO $pdo Objet de connexion à la BDD
 * @param array $data Les données à modifier
 * @param int $id identifiant de l'utilisateur
 * @return array le tuple modifié
 */
function updateAuthor(PDO $pdo, array $data, int $id) : array
{

}


/**
 * Supprime un utilisateur
 * @param PDO $pdo Objet de connexion à la BDD
 * @param int $id
 * @return bool
 */
function deleteAuthor(PDO $pdo, int $id) : bool{

}