<?php
namespace App\Model;

class User {

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
    private $mail;




    /**
     * @var string
     */
    private $password;




    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }




public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }








/*public function insertUsers(string $username,string $email,string $password): ?string 
{
$this->username= strip_tags($username) ;
$this->email= strip_tags($email) ;
$this->password= strip_tags($password) ;

$pdo= Connection :: getPdo() ;
$req= $bdd->prepare('INSERT INTO user(username, email,password) VALUES (:username, :email,:password)') ;
$req->execute(array(':username'=>$this->username, ':email'=>$this->email, ':password'=>$this->password)) ;
$req->closeCursor() ;



}*/













}