<?php

/* CrcReservBundle:Device:availables.html.twig */
class __TwigTemplate_6bd71bec9fb1c0f4dbd6c4459295e5be1924d4efe1a19554255ed370e9a4c7b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CrcReservBundle:Layout:default.html.twig", "CrcReservBundle:Device:availables.html.twig", 1);
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
        echo "</a>
";
    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        // line 10
        echo "<h1>Listes des équipements disponibles</h1>
<table class=\"table table-hover\" style=\"width:100%;\">
\t<tr>
\t\t<th></th>
\t\t<th>En Panne</th>
\t\t<th>Manquante</th>
\t\t<th>Reservation en cours</th>
\t\t<th><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_device_index", array("department" => $this->getAttribute((isset($context["department"]) ? $context["department"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">Voir tout les équipements</a></th>
\t</tr>
\t
\t";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["devices"]) ? $context["devices"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["device"]) {
            // line 21
            echo "\t\t
\t\t<tr>
\t\t\t<td>
\t\t\t\t";
            // line 24
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $context["device"]), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $context["type"], "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 27
            $context["nb"] = 0;
            // line 28
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["device"]);
            foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                // line 29
                echo "\t\t\t\t\t";
                if (($this->getAttribute($context["d"], "working", array()) == 0)) {
                    // line 30
                    echo "\t\t\t\t\t\t";
                    $context["nb"] = ((isset($context["nb"]) ? $context["nb"] : null) + 1);
                    // line 31
                    echo "\t\t\t\t\t";
                }
                // line 32
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "\t\t\t\t<span class=\"label label-danger\">";
            echo twig_escape_filter($this->env, (isset($context["nb"]) ? $context["nb"] : null), "html", null, true);
            echo " unités</span>
\t\t\t</td>
\t\t\t<td>
\t\t\t";
            // line 36
            $context["nb"] = 0;
            // line 37
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["device"]);
            foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                // line 38
                echo "\t\t\t\t\t";
                if (($this->getAttribute($context["d"], "missing", array()) == 1)) {
                    // line 39
                    echo "\t\t\t\t\t\t";
                    $context["nb"] = ((isset($context["nb"]) ? $context["nb"] : null) + 1);
                    // line 40
                    echo "\t\t\t\t\t";
                }
                // line 41
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "\t\t\t\t<span class=\"label label-warning\">";
            echo twig_escape_filter($this->env, (isset($context["nb"]) ? $context["nb"] : null), "html", null, true);
            echo " unités</span>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 45
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) ? $context["reservations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["reser"]) {
                // line 46
                echo "\t\t\t\t<p>
\t\t\t\t";
                // line 47
                if ($this->getAttribute($context["reser"], "hasDeviceType", array(0 => $context["type"]), "method")) {
                    // line 48
                    echo "\t\t\t\t\t
\t\t\t\t\t<span class=\"label label-default\">";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute($context["reser"], "countDevicesType", array(0 => $context["type"]), "method"), "html", null, true);
                    echo " unités</span>

\t\t\t\t";
                }
                // line 52
                echo "
\t\t\t\tréservés 
\t\t\t\tdu ";
                // line 54
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["reser"], "getDateBegin", array(), "method"), "short", "none"), "html", null, true);
                echo "
\t\t\t\tau ";
                // line 55
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["reser"], "getDateEnd", array(), "method"), "short", "none"), "html", null, true);
                echo "

\t\t\t\tpar <strong>";
                // line 57
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["reser"], "user", array()), "username", array())), "html", null, true);
                echo "</strong>
\t\t\t\t</p>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reser'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "
\t\t\t\t";
            // line 61
            if (twig_test_empty((isset($context["reservations"]) ? $context["reservations"] : null))) {
                // line 62
                echo "\t\t\t\t\t<i>Aucune</i>
\t\t\t\t";
            }
            // line 64
            echo "\t\t\t</td>
\t\t\t<td>
\t\t\t\t<a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_device_index", array("department" => $this->getAttribute((isset($context["department"]) ? $context["department"] : null), "id", array()), "type" => $this->getAttribute($this->getAttribute($context["device"], 0, array(), "array"), "slug", array()))), "html", null, true);
            echo "\" class=\"btn btn-default\">Voir la liste</a>
\t\t\t</td>

\t\t
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['device'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "</table>

<a class=\"btn btn-primary btn-large fright clearfix\" href=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_reserver", array("department" => $this->getAttribute((isset($context["department"]) ? $context["department"] : null), "id", array()))), "html", null, true);
        echo "\">Commencer une réservation</a>

<a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("crc_reserv_home");
        echo "\" class=\"btn btn-default fleft\">Retour à l'accueil</a>

";
    }

    public function getTemplateName()
    {
        return "CrcReservBundle:Device:availables.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 76,  205 => 74,  201 => 72,  189 => 66,  185 => 64,  181 => 62,  179 => 61,  176 => 60,  167 => 57,  162 => 55,  158 => 54,  154 => 52,  148 => 49,  145 => 48,  143 => 47,  140 => 46,  136 => 45,  129 => 42,  123 => 41,  120 => 40,  117 => 39,  114 => 38,  109 => 37,  107 => 36,  100 => 33,  94 => 32,  91 => 31,  88 => 30,  85 => 29,  80 => 28,  78 => 27,  70 => 24,  65 => 21,  61 => 20,  55 => 17,  46 => 10,  43 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
