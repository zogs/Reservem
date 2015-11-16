<?php

/* :layout:centered.html.twig */
class __TwigTemplate_59aae1acefc9acc034d7d306c3c121006bd09573eafcb3ededb332fc472b3e17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":layout:centered.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'arianne' => array($this, 'block_arianne'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        echo "\t

\t<div class=\"container container-centered page-container\">

\t\t<div class=\"page_content\">

\t\t\t<p>";
        // line 9
        $this->displayBlock('arianne', $context, $blocks);
        echo "</p>
\t\t\t
\t\t\t";
        // line 11
        $this->displayBlock('page_content', $context, $blocks);
        // line 13
        echo "
\t\t</div>
\t</div>

";
    }

    // line 9
    public function block_arianne($context, array $blocks = array())
    {
        echo ":: ";
    }

    // line 11
    public function block_page_content($context, array $blocks = array())
    {
        // line 12
        echo "\t\t\t";
    }

    public function getTemplateName()
    {
        return ":layout:centered.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  61 => 11,  55 => 9,  47 => 13,  45 => 11,  40 => 9,  30 => 3,  11 => 1,);
    }
}
