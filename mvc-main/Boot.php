<?php

class Boot {
    protected $controller = 'HomeController';
    protected $action = 'index';
    protected $params = [];

    public function __construct() {
        $url = $this->parseUrl();
        if (file_exists('apps/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }
        require_once 'apps/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        if (isset($url[1]) && method_exists($this->controller, $url[1])) {
            $this->action = $url[1];
            unset($url[1]);
        }
        $this->params = $url ? array_values($url) : [];
        call_user_func_array([$this->controller, $this->action], $this->params);
    }

    public function parseUrl() {
        if (isset($_GET['r'])) {
            return explode('/', filter_var(rtrim($_GET['r'], '/'), FILTER_SANITIZE_URL));
        }
        return [$this->controller];
    }
}
