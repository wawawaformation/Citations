<?php
/**
 * Composant d'accès à la table authors
 */

require_once __DIR__ . '/pdo.php';
$pdo = getPdo();


/**
* Retourne la liste des auteurs
* @param PDO $pdo connexion à la BDD
* @return array liste des tuples
*/
 function getAuthors(PDO $pdo) : array
 {
    $sql= 'SELECT *, DATE_FORMAT(birthday, "%d/%m/%Y") as naissance_europe, DATE_FORMAT(deathday, "%d/%m/%Y") as deces_europe FROM authors';
    $q = $pdo->query($sql);
    return $q->fetchAll();

 }
 // test unitaire
//var_dump(getAuthors($pdo));
//die;

/**
 * Summary of getOneAuthor
 * @param PDO $pdo connexion à la BDD
 * @param int $id identifiant du tuple
 * @return array|bool 
 */
function getOneAuthor(PDO $pdo, int $id) : array|bool
{
    $sql= 'SELECT *, DATE_FORMAT(birthday, "%d/%m/%Y") as naissance_europe, DATE_FORMAT(deathday, "%d/%m/%Y") as deces_europe FROM authors WHERE id=?';
    $q = $pdo->prepare($sql);
    $q->execute([$id]);
    return $q->fetch();
}

/*var_dump(getOneAuthor($pdo, 1));
var_dump(getOneAuthor($pdo, 7));
die;*/

/**
 * Crée un utilisateur
 * @param PDO $pdo Objet de connexion à la BDD
 * @param array $data données de l'utilisateur
 * @return int identfiant du nouvel utilisateur
 */
function createAuthor(PDO $pdo, array $data) : int|false
{
  
    $sql='INSERT INTO authors(author,biography,birthday,deathday,src) VALUES (:author,:biography,:birthday,:deathday,:src)';
    $q = $pdo->prepare($sql);
    $q->bindValue(':author', $data['author']);
    $q->bindValue(':biography', $data['biography']);
    $q->bindValue(':birthday', $data['birthday']);
    $q->bindValue(':deathday', $data['deathday']);
    $q->bindValue(':src', $data['src']);
    if ($q->execute()){
        return $pdo->lastInsertId();
    }else {return false;}
    
}
//test unitiare
/*var_dump(createAuthor($pdo,[
    'author'=>'Davidov',
    'biography'=>NULL,
    'birthday'=>'1998-01-01',
    'deathday'=>null, 
    'src'=>'zfzifjmog',  
]));
var_dump(createAuthor($pdo,[
'author'=>'Joana',
'bio'=>'elle démonte des pneus',
'birthday'=>'1988-09-09',
'deathday'=>null,
'src'=>'https://joana.lesacteursduweb.fr/images/imgjo.jpg'
]));*/

/**
 * Modifie un auteur
 * @param PDO $pdo Objet de connexion à la BDD
 * @param array $data Les données à modifier
 * @param int $id identifiant de l'utilisateur
 * @return array le tuple modifié
 */
function updateAuthor(PDO $pdo, array $data, int $id) : array|false
{
    $sql='UPDATE authors SET 
    author=:author,
    biography=:biography,
    birthday=:birthday,
    deathday=:deathday,
    src=:src WHERE id=:id';
    $q =$pdo->prepare($sql);
    $q->bindValue(':author',$data['author']);
    $q->bindValue(':src', $data['src']);
    $q->bindValue(':biography', $data['biography']);
    $q->bindValue(':birthday', $data['birthday']);
    $q->bindValue(':deathday', $data['deathday']);
    $q->bindValue(':id',$id, PDO::PARAM_INT);
    if($q->execute()){
        // on retourne l'auteur
        return getOneAuthor($pdo,$id);
    }else {return false;}

}

/*
var_dump(updateAuthor($pdo,[
    'author'=>'JoanaLaffitte',
    'bio'=>'elle démonte ses adversaires',
    'birthday'=>'1988-09-09',
    'deathday'=>null,
    'src'=>'https://joana.lesacteursduweb.fr/images/imgjo.jpg'
    ],9));
*/

/**
 * Supprime un utilisateur
 * @param PDO $pdo Objet de connexion à la BDD
 * @param int $id
 * @return bool
 */
function deleteAuthor(PDO $pdo, int $id) : bool{
    $sql='SELECT COUNT(author) FROM authors WHERE id=?';
    $q = $pdo->prepare($sql);
    $q->execute([$id]);
    if ($q->fetchColumn() == 0){
        return false;
    } 
    
    $sql='DELETE FROM authors WHERE id=?';
    $q = $pdo->prepare($sql);
    return $q->execute([$id]);
}
//test unitaire
//var_dump(deleteAuthor($pdo,3));
//var_dump(getOneAuthor($pdo,3));
//var_dump (getAuthors($pdo));