<?php

require_once 'Twig/Autoloader.php';

Twig_Autoloader::register();

class TwigWrapper
{
  protected $loader;
  protected $twig;
  protected $template;
  protected $filename;
  protected $data;
  
  public function __construct($template_directory, $filename)
  {
    $this->loader = new Twig_Loader_Filesystem($template_directory);
    $this->twig = new Twig_Environment($this->loader);
    
    $this->filename = $filename;
    $this->data = array();
  }
  
  public function assign($key, $value)
  {
    $this->data[$key] = $value;
  }
  
  public function fetch()
  {
    $this->template = $this->twig->loadTemplate($this->filename);
    return $this->template->render($this->data);
  }
  
  public function display()
  {
    $this->template = $this->twig->loadTemplate($this->filename);
    $this->template->display($this->data);
  }
}

?>
