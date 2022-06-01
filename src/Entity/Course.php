<?php

namespace App\Entity;

use App\Repository\CourseRepository; //Importando o repository da classe
use Doctrine\ORM\Mapping as ORM; //Importando a ORM Doctrine

//OBS: Muitas das características são bem parecidas com o JPA do Java
#[ORM\Entity(repositoryClass: CourseRepository::class)] //Aqui diz a entidade que vai ser baseada no banco de dados
class Course
{
    #[ORM\Id] //Chave primária da tabela
    #[ORM\GeneratedValue] //Auto incremento
    #[ORM\Column(type: 'integer')] //Tipo do coluna da tabela
    private $id;

    #[ORM\Column(type: 'string', length: 255)] //Tipo string e tamanho de 255
    private $name;

    #[ORM\Column(type: 'string', length: 255)]
    private $description;

    #[ORM\Column(type: 'datetime_immutable')] //Tipo Date
    private $createdAt;

    #[ORM\Column(type: 'datetime_immutable')]
    private $updatedAt;

    #[ORM\Column(type: 'string', length: 255)]
    private $slug;

    //Getters e Setters da classe
    public function getId(): ?int //Retorna um inteiro ou NULL
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self //Geralmente retorno de SET é void, porém como consta SELF é "Retornar ele mesmo"
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeImmutable $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }
}
