<?php
function loadTemplate($template, $templatevars)
{
    extract($templatevars);
    ob_start();
    require $template;
    $output = ob_get_clean();
    return $output;
}

?>