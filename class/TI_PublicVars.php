<?php
  namespace RTI;

  trait PublicVars {
    private $vars = array();    
    public function __get($key) { return $this->vars[$key];  }
    public function __set($name, $value) { $this->vars[$name] = $value; }
  }
  