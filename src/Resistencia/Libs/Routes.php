<?php

namespace Resistencia\Libs;

class Routes
{
    private array $routes;
    private string $controller;
    private string $title;
    private string $description;
    private string $keyword;
    private string $og_image;


    public function __construct(array $routes)
    {
        $this->routes = $routes;
    }

    public function loadController(string $uri):array
    {
        if ( isset($this->routes[$uri]) ){

            // TODO: Buscar URI que más se acerca a la actual y extrae los segmentos
            // adicionales como parámetros
            $route_info = $this->routes[$uri];

            # File in charge to handle the page rendering
            $this->controller = $route_info['controller'];

            # Page Title
            $this->title = $route_info['title'];

            # Page Description
            $this->description = $route_info['description'];

            # Page keywords
            $this->keyword = $route_info['keyword'];

            # Page Image for sharing in social media
            $this->og_image = $route_info['og-image'];

        }
    }
}