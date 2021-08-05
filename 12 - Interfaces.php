<?php

// Interfaces servem pra definir um modelo a ser usado por outras classes.

interface Crud {
    public function create($data);
    public function read();
    public function update();
    public function delete();

}

class Noticias implements Crud {


    public function create($data){
        // Lógica para criar uma notícia
    }

    public function read(){
        // Lógica para ler a notícia
    }

    public function update(){
        // Lógica para atualizar a notícia
    }

    public function delete(){
        // Lógica para excluir a notícia
    }
}
