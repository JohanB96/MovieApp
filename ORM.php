<?php

require_once "vendor/autoload.php";
include "Clases/Usuario.php";
include "Clases/Generos.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array("Clases");
$isDevMode = false;

// the connection configuration
$dbParams = array(
    'driver'   => 'pdo_mysql',
    'user'     => 'johanb',
    'password' => '',
    'dbname'   => 'movies',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);


/*$user = new Usuario();
$user->setNombre("Test2");
$user->setCorreo("test2");
$user->setContrasena("test2");


$gustos = array(2,3,4);
foreach ($gustos as $gustoId) {
    $gusto = $entityManager->find("Generos", $gustoId);
    $user->agregarGusto($gusto);
}


$entityManager->persist($user);
$entityManager->flush();

$usuarios = $entityManager->getRepository("Usuario")->findAll();
echo "Cantidad de usuarios ".count($usuarios)."\n";
foreach ($usuarios as $user) {
    echo "Usuarios ".$user->getId() . " - ".$user->getNombre()."\n";
}
*/
