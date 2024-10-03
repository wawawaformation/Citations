<?php
/**
 * Composant d'accès à la table Quotes
 */

/**
 * Retourne la liste des citations (tuples)
 * @param PDO $pdo Objet de connexion à la BDD
 * @return array Liste des citations
 */
function getQuotes(PDO $pdo) : array
{

}

/**
 * Retourne une citation
 * @param PDO $pdo Objet de connexion à la BDD
 * @param int $id identifiant du tuple
 * @return array une citation
 */
function getOneQuote(PDO $pdo, int $id) : array
{

}


/**
 * Crée une citation
 * @param PDO $pdo Objet de connexion à la BDD
 * @param array $data données de la citation
 * @return int identifiant de la citation créée
 */
function createQuote(PDO $pdo, array $data) : int
{

}


/**
 * Modifie une citation
 * @param PDO $pdo Objet de connexion à la BDD
 * @param array $data les infos à modifier
 * @param int $id identifiant du tuple à modifier
 * @return array tuple modifié
 */
function updateQuote(PDO $pdo, array $data, int $id) : array
{

}


/**
 * Supprime une citation
 * @param PDO $pdo
 * @param int $id
 * @return bool
 */
function deleteQuote(PDO $pdo, int $id) : bool
{

}