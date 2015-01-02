<?php
 
namespace Controller;
 
Class Main extends \Mturjak\Controller
{
    public function index()
    {
        $this->render("test", array("title" => $this->data->message, "name" => "Home"));
    }
 
    public function test($title)
    {
        $this->render("test", array("title" => ucfirst($title), "name" => "Test"));

    }

    public function notFound($callable = null)
		{
		    $this->render('error', array(), 404);
		}
}