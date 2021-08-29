<?php
class Views{

    public const SITE_URL = "http://localhost/mvctate/";
    public const SITE_NAME = "Heavenly Tech";
    /**
     * Render a view file
     * 
     * @param string $name the vile file
     * 
     * @param $args = [] for data value as an array
     * 
     * @return view
     */

    public function render($name, $args = []){
        // $siteName = self::SITE_NAME;
        // $this->SITE_URL = "http://localhost/mvctate/";
        extract($args, EXTR_SKIP);
        require "views/$name";
    }

    public function renderTemplate($template, $args =[]){
        static $twig =null;
        if($twig === null){
            $loader = new \Twig\Loader\FilesystemLoader('views');
            $twig = new \Twig\Environment($loader);
        }
        echo $twig->render($template, $args);
    }
}