<?php
namespace src\Utilities;

class FormValidator
{
    /**
     * Verification de la clef dans la superglobale POST et renvoi
     * de l'éventuel message d'erreur à afficher dans l'HTML (texte)
     * @param string $key La clef située dans $_POST
     * @param int $max Le nombre de caractères maximum autorisé
     * @return string L'éventuel message d'erreur
     */
    public static function checkPostText(string $key, int $max): string
    {
        // On teste l'existence et la non-nullité
        if (!array_key_exists($key, $_POST) || empty($_POST[$key])) {
            $message = "Merci de saisir une valeur";
            // On teste la valeur max
        } elseif (strlen($_POST[$key]) > $max) {
            $message = "La valeur saisie est trop longue (max $max caractères)";
        }
        // On retourne l'éventuel message ou une chaîne de caractères vide
        return $message ?? '';
    }

    /**
     * Verification de la clef dans la superglobale POST et renvoi
     * de l'éventuel message d'erreur à afficher dans l'HTML (nombres)
     * @param string $key La clef dans $_POST
     * @param float $min Valeur mini autorisée
     * @param float $max Valueur maxi autorisée
     * @param bool $isFloat Est-ce un nombre à virgule ? (intval, floatval)
     * @return string L'éventuel message d'erreur
     */
    public static function checkPostNumber(string $key, float $min, float $max, bool $isFloat = true): string
    {
        //// Existence
        if (!array_key_exists($key, $_POST) || $_POST[$key] === '' || is_null($_POST[$key])) {
            $message = "Veuillez saisir une valeur";
        } elseif (!is_numeric($_POST[$key])) {
            $message = "La valeur saisir doit être un nombre";
        } else {
            if ($isFloat) {
                $_POST[$key] = floatval($_POST[$key]);
            } else {
                $_POST[$key] = intval($_POST[$key]);
            }
            //// Valeur mini (0)
            if ($_POST[$key] < $min) {
                $message = "La valeur doit être supérieur à $min";
            }
            //// Valeur maxi (10 millions)
            if ($_POST[$key] > $max) {
                $message = "La valeur doit être inférieur à $max";
            }
        }
        return $message ?? "";
    }

    /**
     * Vérification d'un input de type "date", retour du message d'erreur
     * @param string $key La clef dans $_POST
     * @return string Eventuel message d'erreur
     */
    public static function checkPostDate(string $key): string
    {
        if (!array_key_exists($key, $_POST) || $_POST[$key] === '') {
            $message = "Merci de saisir la date";
        } else {
            // On décompose la date de création en 3 parties
            $tabCreatedAt = explode('-', $_POST[$key]);
            // On vérifie qu'on a bien les 3 composantes de la date
            if (
                sizeof($tabCreatedAt) !== 3 ||
                !checkdate($tabCreatedAt[1], $tabCreatedAt[2], $tabCreatedAt[0])
            ) {
                $message = "Il faut saisir une date valide!";
            }
        }
        return $message ?? "";
    }

    public static function sanitizeRadio(string $key): void
    {
        if (!array_key_exists($key, $_POST)) {
            $_POST[$key] = false;
        } else {
            $_POST[$key] = true;
        }
    }

}


