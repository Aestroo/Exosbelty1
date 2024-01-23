<?php

class Home extends Controller{
    public function index(){
        $this->view("templates/header");
        $this->view("home/index");
        $this->view("templates/footer");
    }

    public function group(){
        $this->view("templates/header");
        $this->view("home/groupproject");
        $this->view("templates/footer");
    }
    public function solo(){
        $this->view("templates/header");
        $this->view("home/soloproject");
        $this->view("templates/footer");
    }
    public function complited(){
        $this->view("templates/header");
        $this->view("home/complitedtask");
        $this->view("templates/footer");
    }
}