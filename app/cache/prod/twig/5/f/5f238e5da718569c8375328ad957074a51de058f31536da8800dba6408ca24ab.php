<?php

/* ZogsFlashBundle:Notifications:one.html.twig */
class __TwigTemplate_5f238e5da718569c8375328ad957074a51de058f31536da8800dba6408ca24ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        echo "
";
        // line 5
        if (((isset($context["type"]) ? $context["type"] : null) == "error")) {
            // line 6
            echo "\t";
            $context["type"] = "danger";
        }
        // line 8
        echo "
<div class=\"alert alert-";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo " alert-dismissible\" role=\"alert\">
\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
\t<div class=\"alert-container\">
\t\t<div class=\"alert-content\">
\t\t\t<table>
\t\t\t\t<tr>
\t\t\t\t\t<td>
\t\t\t\t\t\t<span class=\"alert-message\">\t\t\t\t\t\t\t
\t\t\t\t\t\t\t";
        // line 17
        echo (isset($context["message"]) ? $context["message"] : null);
        echo "\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</span>    
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t</table>\t\t\t\t
\t\t\t<div class=\"alert-progress\"></div>\t\t\t\t\t
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "ZogsFlashBundle:Notifications:one.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 17,  31 => 9,  28 => 8,  24 => 6,  22 => 5,  19 => 3,);
    }
}
