<?php

/**
 * Renvoie un objet PDO
 * @param string $dsn destination
 * @param string $user utilisateur de la base de données
 * @param string $password mot de pas de l'utilisateur de la base de données
 * @return PDO l'objet PDO de connexion à la base de données
 */
function getPdo(
    string $dsn = 'mysql:host=127.0.0.1:3306;dbname=quotes',
    string $user = 'root',
    string $password = ''
): PDO {
    try {
        $db = new PDO($dsn, $user, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $db;
    } catch (PDOException $e) {
        die('Probleme avec la base de données : ' . $e->getMessage());
    }


}

//test unitaire
//var_dump(getPdo());