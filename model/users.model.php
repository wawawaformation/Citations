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
  // test pour voir le message d'erreur 
  //return 0;
}


/**
 * Modifie un tuple
 * @param PDO $pdo connexion à la BDD
 * @param array $data les donnees à modifier
 * @param int $id identifiant de l'utilisateur à modifier
 * @return array le tuple modifié
 */
function updateUser(PDO $pdo, array $data, int $id): array
{
  $sql = 'UPDATE users 
          SET firstname = :firstname, lastname = :lastname, mail = :mail, token = :token
          WHERE id= :id ';
  $q = $pdo->prepare($sql);
  $q->bindValue(':firstname', $data['firstname']);
  $q->bindValue(':lastname', $data['lastname']);
  $q->bindValue(':mail', $data['mail']);
  //on enlève le mot de passe du formulaire
  //$q->bindValue(':password', $data['password']);
  $q->bindValue(':token', $data['token']);
  $q->bindValue(':id', $id);
  $success = $q->execute();
  //rajout des code en cas de succes (attention au conflit en les cles (different nom chez quotes))
  if ($success) {
    return [
      'code' => 'success',
      'text' => 'Mise à jour de l\'utilisateur réussi.'
    ];
  } else {
    return [
      'code' => "danger",
      'text' => 'Mise à jour de l\'utilisateur non réussi.'
    ];
  }

}
/**
 * Modifie mot de passe utilisateur
 *
 * @param PDO $pdo connexion à la BDD
 * @param array $data les donnees à modifier
 * @param integer $id identifiant de l'utilisateur à modifier
 * @return array
 */
function updatePassword(PDO $pdo, array $data, int $id): array 
{
$sql = 'UPDATE users 
          SET password= :password;
          WHERE id= :id ';
  $q = $pdo->prepare($sql);
  $q->bindValue(':password', $data['password']);
  $q->bindValue(':id', $id);
  $success = $q->execute();
  //rajout des code en cas de succes (attention au conflit en les cles (different nom chez quotes))
  if ($success) {
    return [
      'code' => 'success',
      'text' => 'Mise à jour du profil réussi.'
    ];
  } else {
    return [
      'code' => "danger",
      'text' => 'Mise à jour du profil non réussi.'
    ];
  }

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
  $q->execute();

  return $q->fetchColumn();
}


/**
 * 
 * @param string $mail le mail (unique)
 * @return array tableau contenant : id, firstname, lastname, mail
 */
function getProfile(PDO $pdo, string $mail): array|false
{
  $sql = 'SELECT id, mail, firstname, lastname FROM users WHERE mail=?';
  $q = $pdo->prepare($sql);
  $q->execute([$mail]);
  return $q->fetch();
}




/**
 * REnvoie le token d'un utilisateur
 * @param PDO $pdo connexion à la BDD
 * @param string $mail le mail (unique de l'utilisateur)
 * @return string|null 
 */
function getToken(PDO $pdo, string $mail): string|null
{
  $sql = 'SELECT token FROM users WHERE mail= ?';
  $q = $pdo->prepare($sql);
  $q->execute([$mail]);
  return $q->fetchColumn();
}

/**
 * Inserer un token 
 * @param PDO $pdo connexion à la BDD
 * @param string $mail identifie l'utilisateur
 * @param string $token
 * @return boolean
 */
function createToken(PDO $pdo, string $mail, string $token): bool
{
  //a mettre dans le controlleur pour generer le $token aleatoirement, quand profile sera crée
  //$p = new OAuthProvider();
  //$token = $p->generateToken(8);
  $sql = 'UPDATE users SET token=:token WHERE mail=:mail';
  $q = $pdo->prepare($sql);
  $q->bindValue(':token', $token);
  $q->bindValue(':mail', $mail);
  return $q->execute();


}

/**
 * Supprime le token d'un utilisateur
 * @param PDO $pdo connexion à la BDD
 * @param string $mail identifie l'utilisateur
 * @return bool
 */
function deleteToken(PDO $pdo, string $mail): bool
{
  // update le token a null pour le supprime https://stackoverflow.com/questions/23334085/php-delete-specific-column-value-from-sql-table
  $sql = 'UPDATE users SET token=NULL WHERE mail=:mail';
  $q = $pdo->prepare($sql);
  $q->bindValue(':mail', $mail);
  return $q->execute();
}