<?php

/**
 * @Entity @Table(name="Generos")
*/
use Doctrine\Common\Collections\ArrayCollection;

class Generos{
    
    /** @Id @Column(type="integer") @GeneratedValue **/
    private $id;
    
    /** @Column(type="string",length=50) **/
    private $genero;
    
    /** @ManyToMany(targetEntity="Usuario", mappedBy="gustos") **/
    private $usuario;
    
    public function __construct(){
        $this->usuario = new ArrayCollection();
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getGenero(){
        return $this->genero;
    }
    
    public function adicionarUser($user){
        $this->usuario[] = $user;
    }
}

