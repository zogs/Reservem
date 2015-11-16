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
        $__internal_da71e950a6a1565dc97cfe35746af741f0edaa464cc3381b2bb13249d98d7b30 = $this->env->getExtension("native_profiler");
        $__internal_da71e950a6a1565dc97cfe35746af741f0edaa464cc3381b2bb13249d98d7b30->enter($__internal_da71e950a6a1565dc97cfe35746af741f0edaa464cc3381b2bb13249d98d7b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CrcReservBundle:Device:availables.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da71e950a6a1565dc97cfe35746af741f0edaa464cc3381b2bb13249d98d7b30->leave($__internal_da71e950a6a1565dc97cfe35746af741f0edaa464cc3381b2bb13249d98d7b30_prof);

    }

    // line 3
    public function block_arianne($context, array $blocks = array())
    {
        $__internal_2bb902ddede04adf882fcbf0a4524ab035a54d513516d873da486fed018b5c25 = $this->env->getExtension("native_profiler");
        $__internal_2bb902ddede04adf882fcbf0a4524ab035a54d513516d873da486fed018b5c25->enter($__internal_2bb902ddede04adf882fcbf0a4524ab035a54d513516d873da486fed018b5c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "arianne"));

        // line 4
        echo "\t";
        $this->displayParentBlock("arianne", $context, $blocks);
        echo " :: <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_device_available", array("department" => $this->getAttribute((isset($context["department"]) ? $context["department"] : $this->getContext($context, "department")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["department"]) ? $context["department"] : $this->getContext($context, "department")), "name", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_2bb902ddede04adf882fcbf0a4524ab035a54d513516d873da486fed018b5c25->leave($__internal_2bb902ddede04adf882fcbf0a4524ab035a54d513516d873da486fed018b5c25_prof);

    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_453a4ba44d09979f7a905f9b78f37b09fff1154a249fbf853201a4c74435e5a2 = $this->env->getExtension("native_profiler");
        $__internal_453a4ba44d09979f7a905f9b78f37b09fff1154a249fbf853201a4c74435e5a2->enter($__internal_453a4ba44d09979f7a905f9b78f37b09fff1154a249fbf853201a4c74435e5a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_device_index", array("department" => $this->getAttribute((isset($context["department"]) ? $context["department"] : $this->getContext($context, "department")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">Voir tout les équipements</a></th>
\t</tr>
\t
\t";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["devices"]) ? $context["devices"] : $this->getContext($context, "devices")));
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
                    $context["nb"] = ((isset($context["nb"]) ? $context["nb"] : $this->getContext($context, "nb")) + 1);
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
            echo twig_escape_filter($this->env, (isset($context["nb"]) ? $context["nb"] : $this->getContext($context, "nb")), "html", null, true);
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
                    $context["nb"] = ((isset($context["nb"]) ? $context["nb"] : $this->getContext($context, "nb")) + 1);
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
            echo twig_escape_filter($this->env, (isset($context["nb"]) ? $context["nb"] : $this->getContext($context, "nb")), "html", null, true);
            echo " unités</span>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 45
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) ? $context["reservations"] : $this->getContext($context, "reservations")));
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
            if (twig_test_empty((isset($context["reservations"]) ? $context["reservations"] : $this->getContext($context, "reservations")))) {
                // line 62
                echo "\t\t\t\t\t<i>Aucune</i>
\t\t\t\t";
            }
            // line 64
            echo "\t\t\t</td>
\t\t\t<td>
\t\t\t\t<a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_device_index", array("department" => $this->getAttribute((isset($context["department"]) ? $context["department"] : $this->getContext($context, "department")), "id", array()), "type" => $this->getAttribute($this->getAttribute($context["device"], 0, array(), "array"), "slug", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_reserver", array("department" => $this->getAttribute((isset($context["department"]) ? $context["department"] : $this->getContext($context, "department")), "id", array()))), "html", null, true);
        echo "\">Commencer une réservation</a>

<a href=\"";
        // line 76
        echo $this->env->getExtension('routing')->getPath("crc_reserv_home");
        echo "\" class=\"btn btn-default fleft\">Retour à l'accueil</a>

";
        
        $__internal_453a4ba44d09979f7a905f9b78f37b09fff1154a249fbf853201a4c74435e5a2->leave($__internal_453a4ba44d09979f7a905f9b78f37b09fff1154a249fbf853201a4c74435e5a2_prof);

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
        return array (  225 => 76,  220 => 74,  216 => 72,  204 => 66,  200 => 64,  196 => 62,  194 => 61,  191 => 60,  182 => 57,  177 => 55,  173 => 54,  169 => 52,  163 => 49,  160 => 48,  158 => 47,  155 => 46,  151 => 45,  144 => 42,  138 => 41,  135 => 40,  132 => 39,  129 => 38,  124 => 37,  122 => 36,  115 => 33,  109 => 32,  106 => 31,  103 => 30,  100 => 29,  95 => 28,  93 => 27,  85 => 24,  80 => 21,  76 => 20,  70 => 17,  61 => 10,  55 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
