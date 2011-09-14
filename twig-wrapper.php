<?php

require_once 'Twig/Autoloader.php';

Twig_Autoloader::register();

class TwigWrapper
{
  private $loader;
  private $twig;
  private $template;
  private $data;
  
  public function __construct($template_directory, $filename)
  {
    $this->loader = new Twig_Loader_Filesystem($template_directory);
    $this->twig = new Twig_Environment($this->loader);
    $this->template = $this->twig->loadTemplate($filename);
    
    $this->data = array();
  }
  
  public function assign($key, $value)
  {
    $this->data[$key] = $value;
  }
  
  public function display()
  {
    $this->template->display($this->data);
  }
}

?>
