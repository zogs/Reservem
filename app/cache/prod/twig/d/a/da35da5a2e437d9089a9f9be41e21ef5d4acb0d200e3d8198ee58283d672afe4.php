<?php

/* CrcReservBundle:Reservation:extend.html.twig */
class __TwigTemplate_da35da5a2e437d9089a9f9be41e21ef5d4acb0d200e3d8198ee58283d672afe4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CrcReservBundle:Layout:default.html.twig", "CrcReservBundle:Reservation:extend.html.twig", 1);
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
        echo "    ";
        $this->displayParentBlock("arianne", $context, $blocks);
        echo " :: <a href=\"";
        echo $this->env->getExtension('routing')->getPath("crc_reserv_my_reservations");
        echo "\">Mes réservations</a> :: <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_view", array("id" => $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "name", array()), "html", null, true);
        echo "</a> :: <a href=\"\">Etendre</a>
";
    }

    // line 8
    public function block_page_content($context, array $blocks = array())
    {
        // line 10
        echo "<h2>Prolonger la réservation</h2>
  \t
  \t<h3>Vous allez prolonger la réservation pour tous les équipements suivants.</h3>
  \t<ul>
  \t\t<li>Si vous voulez prolonger <strong>uniquement certains </strong>équipements, merci de <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_return", array("id" => $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "id", array()))), "html", null, true);
        echo "\">retourner les autres avant.</a></li>
  \t\t<li>La prolongation <strong>peut échouer</strong> si des équipements ont été reservés durant la même période.</li>
  \t</ul>

  \t<p>
\t\t<a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_view", array("id" => $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-xs btn-default\">Retour à la réservation</a>\t\t  
  \t</p>

  \t<table class=\"table table-condensed\">
  \t\t
  \t\t";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "devices", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["device"]) {
            // line 25
            echo "\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "code", array()), "html", null, true);
            echo "
\t\t\t\t</td>\t\t\t\t
\t\t\t\t<td>
\t\t\t\t\t<label for=\"device[";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "id", array()), "html", null, true);
            echo "]\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "type", array()), "html", null, true);
            echo "</label>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "description", array()), "html", null, true);
            echo "
\t\t\t\t</td>\t\t\t\t
\t\t\t</tr>
\t\t\t
  \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['device'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "  \t\t
  \t</table>

  \t<h3>Prolonger jusqu'au :</h3>
\t
\t";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start');
        echo "
  \t";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "date_end", array()), 'row');
        echo "
  \t";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
  \t
\t
";
    }

    public function getTemplateName()
    {
        return "CrcReservBundle:Reservation:extend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 44,  114 => 43,  110 => 42,  103 => 37,  92 => 33,  84 => 30,  78 => 27,  74 => 25,  70 => 24,  62 => 19,  54 => 14,  48 => 10,  45 => 8,  32 => 4,  29 => 3,  11 => 1,);
    }
}
