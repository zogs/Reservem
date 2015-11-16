<?php

/* CrcReservBundle:Department:view_reservations.html.twig */
class __TwigTemplate_038116680f4defbfb93b38e7ee78c8358d1f57d8ea5e2df88fe20261148dbfa5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CrcReservBundle:Layout:default.html.twig", "CrcReservBundle:Department:view_reservations.html.twig", 1);
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
        $__internal_3deec7aa3e2ede46d32493ee0872e3ddf22dfa95a8de45decea7be77888c39e2 = $this->env->getExtension("native_profiler");
        $__internal_3deec7aa3e2ede46d32493ee0872e3ddf22dfa95a8de45decea7be77888c39e2->enter($__internal_3deec7aa3e2ede46d32493ee0872e3ddf22dfa95a8de45decea7be77888c39e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CrcReservBundle:Department:view_reservations.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3deec7aa3e2ede46d32493ee0872e3ddf22dfa95a8de45decea7be77888c39e2->leave($__internal_3deec7aa3e2ede46d32493ee0872e3ddf22dfa95a8de45decea7be77888c39e2_prof);

    }

    // line 3
    public function block_arianne($context, array $blocks = array())
    {
        $__internal_caee56d65c05a05252b91d3e4f3e2ead05823503eb307a4a2e535fdac63f5a87 = $this->env->getExtension("native_profiler");
        $__internal_caee56d65c05a05252b91d3e4f3e2ead05823503eb307a4a2e535fdac63f5a87->enter($__internal_caee56d65c05a05252b91d3e4f3e2ead05823503eb307a4a2e535fdac63f5a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "arianne"));

        // line 4
        echo "\t";
        $this->displayParentBlock("arianne", $context, $blocks);
        echo " :: <a href=\"";
        echo $this->env->getExtension('routing')->getPath("crc_reserv_home");
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["department"]) ? $context["department"] : $this->getContext($context, "department")), "name", array()), "html", null, true);
        echo "</a> :: <a href=\"\">Les réservations</a>
";
        
        $__internal_caee56d65c05a05252b91d3e4f3e2ead05823503eb307a4a2e535fdac63f5a87->leave($__internal_caee56d65c05a05252b91d3e4f3e2ead05823503eb307a4a2e535fdac63f5a87_prof);

    }

    // line 8
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_3dccabf915518ae424846f0135c0060ad874818e5eb80fafb8d4b9c6cd472e5f = $this->env->getExtension("native_profiler");
        $__internal_3dccabf915518ae424846f0135c0060ad874818e5eb80fafb8d4b9c6cd472e5f->enter($__internal_3dccabf915518ae424846f0135c0060ad874818e5eb80fafb8d4b9c6cd472e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 10
        echo "<h1>";
        if ($this->getAttribute((isset($context["department"]) ? $context["department"] : $this->getContext($context, "department")), "logo", array())) {
            echo "<img class=\"dpt-logo-small\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["department"]) ? $context["department"] : $this->getContext($context, "department")), "logo", array()), "getWebPath", array())), "html", null, true);
            echo "\">";
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["department"]) ? $context["department"] : $this->getContext($context, "department")), "name", array()), "html", null, true);
        echo "</h1>


<h3>Réservation en cours</h3>
<ul class=\"nav nav-tabs\" id=\"reservation-list\">
  <li class=\"active\"><a href=\"#reserv-en-cours\" data-toggle=\"tab\">En cours</a></li>
  <li><a href=\"#reserv-tocome\" data-toggle=\"tab\">Prévu</a></li>
  <li><a href=\"#reserv-ancienne\" data-toggle=\"tab\">Ancienne</a></li>
</ul>
<div class=\"tab-content\">
\t<div class=\"tab-pane active\" id=\"reserv-en-cours\">
\t\t<table class=\"table table-striped table-bordered\">
\t\t\t";
        // line 22
        $context["i"] = 0;
        // line 23
        echo "\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) ? $context["reservations"] : $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 24
            echo "\t\t\t\t";
            if (($this->getAttribute($context["r"], "ongoing", array()) == true)) {
                // line 25
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "name", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>par ";
                // line 27
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "user", array()), "username", array())), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 28
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["r"], "devices", array())), "html", null, true);
                echo " équipements<br><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_view", array("id" => $this->getAttribute($context["r"], "id", array()))), "html", null, true);
                echo "\">Voir les équipements</a></td>
\t\t\t\t\t<td>du ";
                // line 29
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["r"], "dateBegin", array()), "full", "none"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>au ";
                // line 30
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["r"], "dateEnd", array()), "full", "none"), "html", null, true);
                echo "</td>
\t\t\t\t</tr>
\t\t\t\t";
                // line 32
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 33
                echo "\t\t\t\t";
            }
            // line 34
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "\t\t\t";
        if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 0)) {
            echo "\t\t
\t\t\t<tr>
\t\t\t\t<td><i>Pas de réservation en cours...</td>
\t\t\t</tr>
\t\t\t";
        }
        // line 40
        echo "\t\t</table>\t
\t</div>
\t<div class=\"tab-pane\" id=\"reserv-tocome\">
\t\t<table class=\"table table-striped table-bordered\">
\t\t\t";
        // line 44
        $context["i"] = 0;
        // line 45
        echo "\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) ? $context["reservations"] : $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 46
            echo "\t\t\t\t";
            if ((($this->getAttribute($context["r"], "confirmed", array()) == true) && ($this->getAttribute($context["r"], "ongoing", array()) == false))) {
                // line 47
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "name", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>par ";
                // line 49
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "user", array()), "username", array())), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 50
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["r"], "devices", array())), "html", null, true);
                echo " équipements<br><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_view", array("id" => $this->getAttribute($context["r"], "id", array()))), "html", null, true);
                echo "\">Voir les équipements</a></td>
\t\t\t\t\t<td>du ";
                // line 51
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["r"], "dateBegin", array()), "full", "none"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>au ";
                // line 52
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["r"], "dateEnd", array()), "full", "none"), "html", null, true);
                echo "</td>
\t\t\t\t</tr>
\t\t\t\t";
                // line 54
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 55
                echo "\t\t\t\t";
            }
            // line 56
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "\t\t\t";
        if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 0)) {
            echo "\t\t
\t\t\t<tr>
\t\t\t\t<td><i>Pas de réservation en cours...</td>
\t\t\t</tr>
\t\t\t";
        }
        // line 62
        echo "\t\t</table>\t
\t</div>
\t<div class=\"tab-pane\" id=\"reserv-ancienne\">
\t\t<table class=\"table table-striped table-bordered\">
\t\t\t";
        // line 66
        $context["i"] = 0;
        // line 67
        echo "\t\t\t";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) ? $context["reservations"] : $this->getContext($context, "reservations")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 68
            echo "\t\t\t\t";
            if (($this->getAttribute($context["r"], "active", array()) == false)) {
                // line 69
                echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "name", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>par ";
                // line 71
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "user", array()), "username", array())), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>";
                // line 72
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["r"], "devices", array())), "html", null, true);
                echo " équipements<br><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_view", array("id" => $this->getAttribute($context["r"], "id", array()))), "html", null, true);
                echo "\">Voir les équipements</a></td>
\t\t\t\t\t<td>du ";
                // line 73
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["r"], "dateBegin", array()), "full", "none"), "html", null, true);
                echo "</td>
\t\t\t\t\t<td>au ";
                // line 74
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["r"], "dateEnd", array()), "full", "none"), "html", null, true);
                echo "</td>
\t\t\t\t</tr>
\t\t\t\t";
                // line 76
                $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
                // line 77
                echo "\t\t\t\t";
            }
            // line 78
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "\t\t\t";
        if (((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) == 0)) {
            echo "\t\t
\t\t\t<tr>
\t\t\t\t<td><i>Pas de réservation en cours...</td>
\t\t\t</tr>
\t\t\t";
        }
        // line 84
        echo "\t\t</table>\t\t
\t</div>
</div>
<a class=\"btn   btn-primary\" href='";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_device_available", array("department" => $this->getAttribute((isset($context["department"]) ? $context["department"] : $this->getContext($context, "department")), "id", array()))), "html", null, true);
        echo "'>Faire une réservation</a>


";
        
        $__internal_3dccabf915518ae424846f0135c0060ad874818e5eb80fafb8d4b9c6cd472e5f->leave($__internal_3dccabf915518ae424846f0135c0060ad874818e5eb80fafb8d4b9c6cd472e5f_prof);

    }

    public function getTemplateName()
    {
        return "CrcReservBundle:Department:view_reservations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 87,  263 => 84,  254 => 79,  248 => 78,  245 => 77,  243 => 76,  238 => 74,  234 => 73,  228 => 72,  224 => 71,  220 => 70,  217 => 69,  214 => 68,  209 => 67,  207 => 66,  201 => 62,  192 => 57,  186 => 56,  183 => 55,  181 => 54,  176 => 52,  172 => 51,  166 => 50,  162 => 49,  158 => 48,  155 => 47,  152 => 46,  147 => 45,  145 => 44,  139 => 40,  130 => 35,  124 => 34,  121 => 33,  119 => 32,  114 => 30,  110 => 29,  104 => 28,  100 => 27,  96 => 26,  93 => 25,  90 => 24,  85 => 23,  83 => 22,  61 => 10,  55 => 8,  41 => 4,  35 => 3,  11 => 1,);
    }
}
