<?php
/**
 * Composant d'accès à la table Quotes
 */

 require_once __DIR__ . '/pdo.php';
 $pdo = getPdo();

/**
 * Retourne la liste des citations (tuples)
 * @param PDO $pdo Objet de connexion à la BDD
 * @return array Liste des citations
 */
function getQuotes(PDO $pdo) : array
{
    $sql = "SELECT quotes.id as id_quotes, quotes.quote, quotes.explanation, authors.author FROM quotes LEFT JOIN authors ON quotes.authors_id = authors.id ";
    $q = $pdo->query($sql);
    $quotes = $q->fetchAll();

    return $quotes;
}

/**
 * Retourne une citation
 * @param PDO $pdo Objet de connexion à la BDD
 * @param int $id identifiant du tuple
 * @return array une citation
 */
function getOneQuote(PDO $pdo, int $id) : array|false
{
    $sql = "SELECT *, authors.author FROM quotes  LEFT JOIN authors ON quotes.authors_id = authors.id  WHERE quotes.id = ? ";
    $q = $pdo->prepare($sql);
    $q->execute([$id]);

    $oneQuote = $q->fetch();

    return $oneQuote;
}


/**
 * Crée une citation
 * @param PDO $pdo Objet de connexion à la BDD
 * @param array $data données de la citation
 * @return int identifiant de la citation créée
 */
function createQuote(PDO $pdo, array $data) : int
{
    $sql = "INSERT INTO quotes (quote, explanation, authors_id) VALUES (:quote, :explanation, :authors_id)";
    $q = $pdo->prepare($sql);

    $values = [
        'quote' => $data['quote'],
        'explanation' => $data['explanation'],
        'authors_id' => $data['authors_id'],
    ];

    try {
        $q->execute($values);
        return $pdo->lastInsertId();
    } catch (PDOException $e) {
        // Gérer l'erreur
        echo "Erreur lors de l'insertion : " . $e->getMessage();
        return 0; // ou un autre code d'erreur
    }
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
    $sql = "UPDATE quotes SET quote = :quote, explanation = :explanation, authors_id = :authors_id WHERE quotes.id = :id";
    $q = $pdo->prepare($sql);
    $q->bindValue(':quote', $data['quote']);
    $q->bindValue(':authors_id', $data['authors_id']);
    $q->bindValue(':explanation', $data['explanation']);
    $q->bindValue(':id', $id, PDO::PARAM_INT);

    $success = $q->execute();

    if ($success) {
        return [
            'status' => true,
            'message' => 'La citation a été mise à jour avec succès.'
        ];
    } else {
        return [
            'status'=> false,
            'message'=> 'Échec de la mise à jour de la citation.'
            ];
    }
}






/**
 * Supprime une citation
 * @param PDO $pdo
 * @param int $id
 * @return bool
 */
function deleteQuote(PDO $pdo, int $id) : bool
{
    $sql = "DELETE FROM quotes WHERE id = ?";
    $q = $pdo->prepare($sql);
    $success = $q->execute([$id]);
    return ($success);
}


//var_dump(getOneQuote($pdo, 2));