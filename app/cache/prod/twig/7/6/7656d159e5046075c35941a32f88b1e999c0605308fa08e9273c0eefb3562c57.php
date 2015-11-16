<?php

/* CrcReservBundle:Device:missing.html.twig */
class __TwigTemplate_7656d159e5046075c35941a32f88b1e999c0605308fa08e9273c0eefb3562c57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CrcReservBundle:Layout:default.html.twig", "CrcReservBundle:Device:missing.html.twig", 1);
        $this->blocks = array(
            'arianne' => array($this, 'block_arianne'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CrcReservBundle:Layout:default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_arianne($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("arianne", $context, $blocks);
        echo " :: <a href=\"";
        echo $this->env->getExtension('routing')->getPath("crc_reserv_my_reservations");
        echo "\">Mes réservations</a> :: <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_view", array("id" => $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "name", array()), "html", null, true);
        echo "</a> :: <a href=\"\">Signaler manquant</a>
";
    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        // line 9
        echo "<p>&nbsp;</p>
\t";
        // line 10
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comment", array()), 'row', array("label" => "Veuillez décrire pourquoi cet appareil est défectueux :"));
        echo "
\t
\t\t<button type=\"submit\" class=\"btn btn-primary\">Envoyer</button>
\t\t<a class=\"btn btn-default\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_view", array("id" => $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "id", array()))), "html", null, true);
        echo "\">Retour à la reservation</a>

\t";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "


";
    }

    public function getTemplateName()
    {
        return "CrcReservBundle:Device:missing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 17,  62 => 15,  56 => 12,  51 => 10,  48 => 9,  45 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
