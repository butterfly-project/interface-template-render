<?php

namespace Butterfly\Interfaces\TemplateRender;

/**
 * @author Marat Fakhertdinov <marat.fakhertdinov@gmail.com>
 */
interface IRender
{
    /**
     * Render template with parameters
     *
     * @param string $template template name
     * @param array $parameters template parameters
     * @return string
     */
    public function render($template, array $parameters = array());
}
