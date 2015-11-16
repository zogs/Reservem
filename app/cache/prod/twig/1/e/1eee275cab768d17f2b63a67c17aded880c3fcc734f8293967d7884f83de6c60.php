<?php

/* CrcReservBundle:Reservation:availables.html.twig */
class __TwigTemplate_1eee275cab768d17f2b63a67c17aded880c3fcc734f8293967d7884f83de6c60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CrcReservBundle:Layout:default.html.twig", "CrcReservBundle:Reservation:availables.html.twig", 1);
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

    // line 4
    public function block_arianne($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->displayParentBlock("arianne", $context, $blocks);
        echo " :: <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_device_available", array("department" => $this->getAttribute((isset($context["department"]) ? $context["department"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["department"]) ? $context["department"] : null), "name", array()), "html", null, true);
        echo "</a> :: <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_reserver", array("department" => $this->getAttribute((isset($context["department"]) ? $context["department"] : null), "id", array()))), "html", null, true);
        echo "\">Créneau</a> :: <a href=\"\">Disponibilité</a>
";
    }

    // line 8
    public function block_page_content($context, array $blocks = array())
    {
        // line 11
        echo "<h2>Nombres d'équipements disponibles</h2>

\t";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "

\t<table class=\"table table-hover\" style=\"width:100%\">
\t\t";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["availables"]) ? $context["availables"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["devices"]) {
            // line 17
            echo "\t\t<tr>
\t\t\t<td>
\t\t\t\t";
            // line 19
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $context["devices"]), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo " 
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<input type=\"text\" name=\"reservation_devices_number[";
            // line 22
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "]\">\t\t\t\t
\t\t\t</td>
\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['devices'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t</table>


\t";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "name", array()), 'row');
        echo "

\t";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "comment", array()), 'row');
        echo "

\t<div class=\"hide\">
\t\t";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date_begin", array()), 'widget');
        echo "
\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date_end", array()), 'widget');
        echo "
\t</div>
\t

\t
\t<input type=\"submit\" class=\"btn btn-primary fright\">
\t<a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("crc_reserv_home");
        echo "\" class=\"btn btn-default fright\">Retour à l'accueil</a>

\t";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "


";
    }

    public function getTemplateName()
    {
        return "CrcReservBundle:Reservation:availables.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 43,  113 => 41,  104 => 35,  100 => 34,  94 => 31,  89 => 29,  84 => 26,  74 => 22,  66 => 19,  62 => 17,  58 => 16,  52 => 13,  48 => 11,  45 => 8,  32 => 5,  29 => 4,  11 => 1,);
    }
}
