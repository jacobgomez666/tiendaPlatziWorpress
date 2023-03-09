<?php

// Funcion iniciar Templaate
function initTemplate(){

    //Agrega una miniatura del post. como una captura en miniatura del post
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}

// HOOK que recibe dos parametros, el segundo parametro es el nombre de nuestra funcion

add_action('after_setup_theme', 'initTemplate');

// Librerias
// Aniadeindo boostrap a nuetro tema con el CDN de Bootstrap
// Para eso usamos la funcion assets() con wp_register_style el
// cual recibe 5 parametros, 
//1.- nombre o handle propio como referencia,
//2.- source o URL,
//3.- Dependencias
//4.- Version
//5.- Media ( resolucion en que se va a ejecutar)
function assets(){
    wp_register_style( "bootstrap", "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", " ", "4.4.1","all" );
    wp_register_style( "montserrat", "https://fonts.googleapis.com/css?family=Montserrat&display=swap", " ", "1.0", "all");

    // ejecutamos nuestro archivo styel.css con la funcion wp_enqueue_style()
    // el cual recibe 2 argumentos [handele, get)styllesheet() llama al archivo css que tenemos]
    wp_enqueue_style( "estilos", get_stylesheet_uri(), array("bootstrap", "montserrat"), "1.0", "all" );


}



//HOOK
//1er argumento indica donde queremos que se cargue y segundo el enombre de la funcion
add_action('wp_enqueue_scripts', 'assets');