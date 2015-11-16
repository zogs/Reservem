<?php

/* CrcReservBundle:Layout:footer.html.twig */
class __TwigTemplate_8089aae390624166d28b12f52942a87cc7963574ae80492a235c5388063392eb extends Twig_Template
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
        // line 1
        echo "<footer class=\"main-footer footer-distributed\">

\t<div class=\"footer-left\">
\t\t
\t\t<p class=\"footer-company-name\">Reservem v";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["app_version"]) ? $context["app_version"] : null), "html", null, true);
        echo "  - Université de Bourgogne Franche Compté &copy; 2015</p>
\t\t
\t</div>

\t<div class=\"footer-right\">

\t\t

\t</div>

</footer>";
    }

    public function getTemplateName()
    {
        return "CrcReservBundle:Layout:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 5,  19 => 1,);
    }
}
