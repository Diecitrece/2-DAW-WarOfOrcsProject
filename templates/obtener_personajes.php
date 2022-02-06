<?php
$personajes_info=file_get_contents('listaPersonajes.json');
$personajes_php=json_decode($personajes_info, true);
include "class_personaje.php";
$personajes = array();

foreach($personajes_php as $valor){
        if ($valor['tipo'] == "Humano"){
            $humano = new Humano ($valor['id'] ,$valor['nombre'] ,$valor['dni'] ,$valor['altura'] ,$valor['peso'] ,$valor['imagen'] ,$valor['icono'] ,$valor['descripcion'] ,$valor['tipo'] ,$valor['armas'] ,$valor['inteligencia']);
            array_push($personajes, $humano);
            
        
        }
        if ($valor['tipo'] == "Orco"){
            $orco = new Orco ($valor['id'] ,$valor['nombre'] ,$valor['dni'] ,$valor['altura'] ,$valor['peso'] ,$valor['imagen'] ,$valor['icono'] ,$valor['descripcion'] ,$valor['tipo'] ,$valor['fuerza'] ,$valor['miedo']);
            array_push($personajes, $orco);
        
        }
        if ($valor['tipo'] == "Elfo"){
            $elfo = new Elfo ($valor['id'] ,$valor['nombre'] ,$valor['dni'] ,$valor['altura'] ,$valor['peso'] ,$valor['imagen'] ,$valor['icono'] ,$valor['descripcion'] ,$valor['tipo'] ,$valor['distancia'] ,$valor['velocidad']);
            array_push($personajes, $elfo);
        
        }
        if ($valor['tipo'] == "Enano"){
            $enano = new Enano ($valor['id'] ,$valor['nombre'] ,$valor['dni'] ,$valor['altura'] ,$valor['peso'] ,$valor['imagen'] ,$valor['icono'] ,$valor['descripcion'] ,$valor['tipo'] ,$valor['dureza'] ,$valor['ingenieria']);
            array_push($personajes, $enano);
        
            }
    }
    

?>