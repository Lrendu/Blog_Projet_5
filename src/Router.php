<?php

    namespace Routeur;

    use ..\Exceptions\RouteNotFoundException;

    class Routeur
    {
        private array $routes;

            public function register(string $path, callable $action): void
            {
                $this->routes[$path] = $action;
            }

            public function resolve(string $uri): mixed
            {
                $action = explode('?', $uri)[0];
                $action = $this->routes[$path] ?? null;

                if (!is_callable($action)) {
                    throw new RouteNotFoundException()
                }

                return $action();
            }
    }