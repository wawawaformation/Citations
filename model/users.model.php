<?php
/**
 * Composant d'accès aux données de la table users
 * @author DWWM bègles
 * @license GPL v3
 */

require_once 'pdo.php';
$pdo = getPdo();

/**
 * Retourne la liste des utilisateurs
 * @param PDO $pdo connexion à la BDD
 * @return array les tuples des utilisateurs
 */
function getUsers(PDO $pdo): array
{
  $sql = 'SELECT * FROM users';
  $q = $pdo->query($sql);
  return $q->fetchAll();
}
//var_dump(getUsers($pdo));
//die;

/**
 * Retourne un utilisateur
 * @param PDO $pdo connexion à la BDD
 * @param int $id identifiant de l'utilisateur
 * @return array tuple de l'utilisateur
 */
function getUserById(PDO $pdo, int $id): array
{
  $sql = 'SELECT *, DATE_FORMAT(created_at, "%d/%m/%Y à %H:%i") as created  FROM users WHERE id= ?';
  $q = $pdo->prepare($sql);
  $q->execute([$id]);
  return $q->fetch();
}


/**
 * Crée un utilisateur
 * @param PDO $pdo connexion à la BDD
 * @param array $data données de l'utilisateur
 * @return int identifiant du tuple créé
 */
function createUser(PDO $pdo, array $data): int
{
  $sql = 'INSERT INTO users (firstname, lastname, mail, password, token) 
          VALUES (:firstname, :lastname, :mail, :password, :token)';
  $q = $pdo->prepare($sql);
  $q->bindValue(':firstname', $data['firstname']);
  $q->bindValue(':lastname', $data['lastname']);
  $q->bindValue(':mail', $data['mail']);
  $q->bindValue(':password', $data['password']);
  $q->bindValue(':token', $data['token']);
  $q->execute();

  return $pdo->lastInsertId();
}


/**
 * Modifie un tuple
 * @param PDO $pdo connexion à la BDD
 * @param array $data les donnees à modifier
 * @param int $id identifiant de l'utilisateur à modifier
 * @return array le tuple modifié
 */
function updateUser(PDO $pdo, array $data, int $id): array{
  $sql = 'UPDATE users 
          SET firstname = :firstname, lastname = :lastname, mail = :mail, password = :password, token = :token
          WHERE id= :id ';
  $q = $pdo->prepare($sql);
  $q->bindValue(':firstname', $data['firstname']);
  $q->bindValue(':lastname', $data['lastname']);
  $q->bindValue(':mail', $data['mail']);
  $q->bindValue(':password', $data['password']);
  $q->bindValue(':token', $data['token']);
  $q->bindValue(':id', $id);
  $q->execute();
  return [];

}


/**
 * Supprime un utilisateur
 * @param PDO $pdo connexion à la BDD
 * @param int $id identifiant de la ligne à supprimer
 * @return bool
 */
function deleteUser(PDO $pdo, int $id): bool
{
  $sql = 'DELETE FROM users WHERE id= :id ';
  $q = $pdo->prepare($sql);
  $q->bindValue(':id', $id);
  return $q->execute();

}

/**
 * Retourne un mot de passe depuis le mail
 * @param PDO $pdo connexion à la BDD
 * @param string $mail le mail (unique)
 * @return string|null le mot de passe (null si l'utilisateurs n'existe pas)
 */
function getPassword(PDO $pdo, string $mail): string|null
{
  $sql = 'SELECT password FROM users WHERE mail = :mail';
  $q = $pdo->prepare($sql);
  $q->bindValue(':mail', $mail);
  return $q->execute();
}


/**
 * 
 * @param string $mail le mail (unique)
 * @return array tableau contenant : id, firstname, lastname, mail
 */
function getProfile(PDO $pdo, string $mail): array
{

}




/**
 * REnvoie le token d'un utilisateur
 * @param PDO $pdo connexion à la BDD
 * @param string $mail le mail (unique de l'utilisateur)
 * @return string|null 
 */
function getToken(PDO $pdo, string $mail): string|null
{

}

/**
 * Inserer un token 
 * @param PDO $pdo connexion à la BDD
 * @param string $mail identifie l'utilisateur
 * @param string $token
 * @return boolean
 */
function createToken(string $mail, string $token): bool
{

}

/**
 * Supprime le token d'un utilisateur
 * @param PDO $pdo connexion à la BDD
 * @param string $mail identifie l'utilisateur
 * @return bool
 */
function deleteToken(PDO $pdo, string $mail): bool
{

}