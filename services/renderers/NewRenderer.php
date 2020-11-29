<?php


namespace app\services\renderers;


class NewRenderer extends TemplateRenderer
{
    public function render($template, $params = [])
    {
        $templatePath = VIEWS_DIR . $template . ".php";
        extract($params);
        include $templatePath;
    }
}