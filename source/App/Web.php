<?php

namespace Source\App;

use League\Plates\Engine;

class Web
{
    private $view;

    public function __construct()
    {
        $this->view = new Engine(CONF_VIEW_WEB,'php');
    }

    public function home() : void
    {

        echo $this->view->render("home");
    }

    public function solution() : void
    {
        echo $this->view->render("solution");
    }
    
    public function projects()
    {
        echo $this->view->render("projects");
    }

    public function videos() 
    {
        echo $this->view->render("videos");
    }

    public function audioevideo() 
    {
        echo $this->view->render("audioevideo");
    }

    public function fibaro() 
    {
        echo $this->view->render("fibaro");
    }

    public function monitoramento() 
    {
        echo $this->view->render("monitoramento");
    }

    public function touchlight() 
    {
        echo $this->view->render("touchlight");
    }
}