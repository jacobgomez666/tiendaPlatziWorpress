<?php

// Funcion iniciar Templaate
function initTemplate(){

    //Agrega una miniatura del post. como una captura en miniatura del post
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}

// HOOK que recibe dos parametros, el segundo parametro es el nombre de nuestra funcion

add_action('after_setup_theme', 'initTemplate');  