<?php

/**
 * @Entity @Table(name="Usuario")
 */
use Doctrine\Common\Collections\ArrayCollection;

class Usuario{

    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /** @Column(type="string",length=50) **/
    protected $nombre;

    /** @Column(type="string",length=80) **/
    protected $correo;

    /** @Column(type="string") **/
    protected $contrasena;

    /** @ManyToMany(targetEntity="Generos", inversedBy="usuario") **/
    protected $gustos;

    public function __construct(){
        $this->gustos = new ArrayCollection();
    }

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function getContrasena() {
        return $this->contrasena;
    }

    public function setNombre($name) {
        $this->nombre = $name;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }

    public function setContrasena($contrasena) {
        $this->contrasena = $contrasena;
    }

    public function agregarGusto($gusto) {
        $gusto->adicionarUser($this);
        $this->gustos[] = $gusto;
    }

    public function getGustos() {
        return $this->gustos;
    }
    
}
