<?php

/* CrcReservBundle:Layout:default.html.twig */
class __TwigTemplate_becc6e994e962a9364feb55adb49b227f833f81dd7a6746b4e37bc706c25af95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CrcReservBundle:Layout:default.html.twig", 1);
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

\t\t\t<div class=\"arianne\">";
        // line 9
        $this->displayBlock('arianne', $context, $blocks);
        echo "</div>
\t\t\t
\t\t\t<p>&nbsp;</p>
\t\t\t";
        // line 12
        $this->displayBlock('page_content', $context, $blocks);
        // line 14
        echo "
\t\t</div>
\t</div>

";
    }

    // line 9
    public function block_arianne($context, array $blocks = array())
    {
        echo "<a class=\"btn-arianne\" href=\"";
        echo $this->env->getExtension('routing')->getPath("crc_reserv_home");
        echo "\">Accueil</a>";
    }

    // line 12
    public function block_page_content($context, array $blocks = array())
    {
        // line 13
        echo "\t\t\t";
    }

    public function getTemplateName()
    {
        return "CrcReservBundle:Layout:default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  64 => 12,  56 => 9,  48 => 14,  46 => 12,  40 => 9,  30 => 3,  11 => 1,);
    }
}
