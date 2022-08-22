<?php

class Layout
{
    public $base;
    public $title;
    function __construct()
    {
        $this->base = get_template_directory_uri();
        $this->title = "Digital Point";
    }
    function image($filName)
    {
        return $this->base . "/assets/image{$filName}";
    }
    function logo($filName)
    {
        return $this->base . "/assets/logo{$filName}";
    }
    function ico($filName)
    {
        return $this->base . "/assets/icons{$filName}";
    }
    function js($filName)
    {
        return $this->base . "/assets/js{$filName}";
    }
    function linkMenu()
    {
        return [
            ["text" => "Início", "link" => "", "sub" => []],
            ["text" => "Sobre", "link" => "", "sub" => []],
            ["text" => "Serviços", "link" => "", "sub" => [
                [
                    "text" => "Organização Documental",
                    "short" => "Todos o processo de armazenamento e classificação de documentos.",
                    "link" => ""
                ]
            ]],
            ["text" => "Contato", "link" => "", "sub" => []],
        ];
    }
    function linkCopy()
    {
        return [
            ["text" => "Termos", "link" => ""],
            ["text" => "Politica Privacidade", "link" => ""],
            ["text" => "Cookie", "link" => ""],            
        ];
    }
    function social()
    {
        return [
            ["ico" => "/instagram.png", "text" => "Instagram", "link" => ""],
            ["ico" => "/face.png", "text" => "Facebook", "link" => ""],
            ["ico" => "/twitter.png", "text" => "Twitter", "link" => ""],            
        ];
    }
}
