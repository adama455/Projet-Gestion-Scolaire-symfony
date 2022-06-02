<?php

namespace App\Entity;

use App\Entity\Personne;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
// HERITAGE:::::::::::::::::::
// Les Entités RP,AC et Etudiant Hérite de User ***************
#[ORM\InheritanceType("JOINED")]
#[ORM\DiscriminatorColumn(name:"role",type: "string")]
#[ORM\DiscriminatorMap(["rp" => "RP","ac" => "AC", "etudiant" =>"Etudiant"])]
class User extends Personne
{
    #[ORM\Column(type: 'string', length: 150)]
    protected $login;

    #[ORM\Column(type: 'string', length: 100)]
    protected $password;

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

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
}
