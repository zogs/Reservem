<?php

/* CrcReservBundle:Reservation:range.html.twig */
class __TwigTemplate_2d3920f5f7dcfcedae32b930dda721123e0ec1e085a119b4150de877d8bff91a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CrcReservBundle:Layout:default.html.twig", "CrcReservBundle:Reservation:range.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_device_available", array("department" => $this->getAttribute((isset($context["department"]) ? $context["department"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["department"]) ? $context["department"] : null), "name", array()), "html", null, true);
        echo "</a> :: <a href=\"\">Réserver</a>
";
    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        // line 9
        echo "<h2>Choisissez un créneau de réservation</h2>
  \t<p>&nbsp;</p>
  \t
\t";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

\t\t";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date_begin", array()), 'row');
        echo "

\t\t";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date_end", array()), 'row');
        echo "

\t\t<button type=\"submit\" class='btn btn-primary fright'>Continuer</button>

\t";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "

";
    }

    public function getTemplateName()
    {
        return "CrcReservBundle:Reservation:range.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 20,  61 => 16,  56 => 14,  51 => 12,  46 => 9,  43 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
