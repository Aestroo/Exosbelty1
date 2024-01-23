<?php
class Login extends Controller{
    public function index(){
        $this->view("templates/header");
        $this->view("Login/index");
        $this->view("templates/footer");
    }
    public function signin(){
        $this->view("templates/header");
        $this->view("Login/register");
        $this->view("templates/footer");
    }
}