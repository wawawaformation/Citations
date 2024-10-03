<?php
/**
 * Composant d'accès aux données de la table users
 * @author DWWM bègles
 * @license GPL v3
 */



/**
 * Retourne la liste des utilisateurs
 * @param PDO $pdo connexion à la BDD
 * @return array les tuples des utilisateurs
 */
function getUsers(PDO $pdo) : array
{

}


/**
 * Retourne un utilisateur
 * @param PDO $pdo connexion à la BDD
 * @param int $id identifiant de l'utilisateur
 * @return array tuple de l'utilisateur
 */
function getUserById(PDO $pdo, int $id) : array
{

}


/**
 * Crée un utilisateur
 * @param PDO $pdo connexion à la BDD
 * @param array $data données de l'utilisateur
 * @return int identifiant du tuple créé
 */
function createUser(PDO $pdo, array $data) : int
{

}


/**
 * Modifie un tuple
 * @param PDO $pdo connexion à la BDD
 * @param array $data les donnees à modifier
 * @param int $id identifiant de l'utilisateur à modifier
 * @return array le tuple modifié
 */
function updateUser(PDO $pdo, array $data, int $id) : array
{

}


/**
 * Supprime un utilisateur
 * @param PDO $pdo connexion à la BDD
 * @param int $id identifiant de la ligne à supprimer
 * @return bool
 */
function deleteUser(PDO $pdo, int $id) : bool
{

}

/**
 * Retourne un mot de passe depuis le mail
 * @param PDO $pdo connexion à la BDD
 * @param string $mail le mail (unique)
 * @return string|null le mot de passe (null si l'utilisateurs n'existe pas)
 */
function getPassword(PDO $pdo, tring $mail) : string|null
{

}


/**
 * 
 * @param string $mail le mail (unique)
 * @return array tableau contenant : id, firstname, lastname, mail
 */
function getProfile(PDO $pdo, string $mail) : array
{

}




/**
 * REnvoie le token d'un utilisateur
 * @param PDO $pdo connexion à la BDD
 * @param string $mail le mail (unique de l'utilisateur)
 * @return string|null 
 */
function getToken(PDO $pdo, string $mail) : string|null
{

}

/**
 * Inserer un token 
 * @param PDO $pdo connexion à la BDD
 * @param string $mail identifie l'utilisateur
 * @param string $token
 * @return boolean
 */
function createToken(string $mail, string $token) : bool
{
    
}

/**
 * Supprime le token d'un utilisateur
 * @param PDO $pdo connexion à la BDD
 * @param string $mail identifie l'utilisateur
 * @return bool
 */
function deleteToken(PDO $pdo,string $mail) : bool
{

}