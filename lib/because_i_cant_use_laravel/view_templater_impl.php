<?php

class View {
    public function render($view, $data = []) {
        extract($data);
        require "views/{$view}.php";
    }

    public function render_template($template, $data = []) {
        require "views/{$template}.php";
    }

    public function render_template_with_layout($template, $data = []) {
        require "views/layout.php";
    }

    public function render_template_with_layout_with_partial($template, $data = []) {
        require "views/layout.php";
    }
}