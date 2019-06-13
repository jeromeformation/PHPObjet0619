<?php
namespace src\Entity;

class User
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $role;

    /**
     * Initialisation des propriétés de l'utilisateur à la construction de l'objet
     * @param string $username
     * @param string $email
     * @param string $password
     * @param string|null $role
     */
    public function __construct(
        ?string $username = '',
        ?string $email = '',
        ?string $password = '',
        ?string $role = ''
    ) {
        $this->username = $username;
        $this->email = $email;
        $this->setPassword($password);
        $this->role = $role;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Ajoute et hash le mot de passe
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        // Hashage
        $hash = password_hash($password, PASSWORD_BCRYPT);
        // Stockage
        $this->password = $hash;
    }

    /**
     * Récupère le nom d'utilisateur, l'email et le mot de passe
     * Prépare la requête SQL pour le "INSERT INTO"
     * @return string
     */
    public function getStrParamsSQL(): string
    {
        // On crée un tableau avec les 3 propriétés
        $tab = [
            htmlentities($this->username),
            htmlentities($this->email),
            htmlentities($this->password),
            htmlentities($this->role)
        ];
        // On crée une chaîne de caractères séparés de virgules et les quotes simples
        $str = implode("','", $tab);
        // On a ajoute une quote simple au début et une à la fin
        // On retourne l'ensemble
        return "'" . $str . "'";
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @param string $role
     */
    public function setRole(string $role): void
    {
        $this->role = $role;
    }


}