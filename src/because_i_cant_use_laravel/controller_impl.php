<?php

class Controller
{
    public function action_exists($action)
    {
        return method_exists($this, $action);
    }

    public function call_action($action)
    {
        if ($this->action_exists($action)) {
            return $this->{$action}();
        }
    }

    public function render($view, $data = [])
    {
        extract($data);
    }
}