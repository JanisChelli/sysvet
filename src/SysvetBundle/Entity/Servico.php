<?php

namespace SysvetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="servicos")
 */
class Servico {
   
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\Length(
     *      min = 3,
     *      max = 50,
     *      minMessage = "O nome deve ter pelo menos {{ limit }} characters",
     *      maxMessage = "O nome deve ter no máximo {{ limit }} characters"
     * )
     * @Assert\NotBlank(
     * message = "O nome não pode ficar vazio"
     * )
     */
    private $nome;
    
    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank()
     */
    private $descricao;
    
    /**
     * @ORM\Column(type="decimal", scale=2)
     * @Assert\NotBlank()
     */
    private $preco;
    

    public function __toString() {
        return $this->nome . " -> ". $this->preco;
    }

        /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return Servico
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return Servico
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set preco
     *
     * @param string $preco
     *
     * @return Servico
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;

        return $this;
    }

    /**
     * Get preco
     *
     * @return string
     */
    public function getPreco()
    {
        return $this->preco;
    }
}
