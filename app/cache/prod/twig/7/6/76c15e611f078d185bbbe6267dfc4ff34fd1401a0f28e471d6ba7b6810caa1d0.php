<?php

/* CrcReservBundle:Reservation:list.html.twig */
class __TwigTemplate_76c15e611f078d185bbbe6267dfc4ff34fd1401a0f28e471d6ba7b6810caa1d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CrcReservBundle:Layout:default.html.twig", "CrcReservBundle:Reservation:list.html.twig", 1);
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
        echo "\">Mes réservations</a>
";
    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        // line 9
        echo "<h1>Listes de mes réservations</h1>
<table class=\"table table-hover\" style=\"width:100%;\">
\t<tr>
\t\t<th>Nom</th>
\t\t<th>Status</th>
\t\t<th>Début</th>
\t\t<th>A rendre le</th>
\t\t<th>Description</th>
\t\t<th>Actions</th>
\t</tr>
\t
\t";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) ? $context["reservations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 21
            echo "\t\t
\t\t<tr>
\t\t\t<td>
\t\t\t\t";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["reservation"], "name", array()), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>\t\t\t\t
\t\t\t\t";
            // line 27
            if (($this->getAttribute($context["reservation"], "active", array()) == false)) {
                // line 28
                echo "\t\t\t\t\t<span class=\"label label-default\">Deleted</span>
\t\t\t\t";
            } else {
                // line 30
                echo "\t\t\t\t\t";
                if (($this->getAttribute($context["reservation"], "ongoing", array()) == true)) {
                    // line 31
                    echo "\t\t\t\t\t\t<span class=\"label label-success\">En cours</span>
\t\t\t\t\t";
                } else {
                    // line 33
                    echo "\t\t\t\t\t\t";
                    if (($this->getAttribute($context["reservation"], "confirmed", array()) == true)) {
                        // line 34
                        echo "\t\t\t\t\t\t\t<span class=\"label label-info\">Confirmé</span>
\t\t\t\t\t\t";
                    }
                    // line 36
                    echo "\t\t\t\t\t";
                }
                // line 37
                echo "\t\t\t\t";
            }
            // line 38
            echo "\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 40
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["reservation"], "getDateBegin", array(), "method"), "full", "none"), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 43
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["reservation"], "getDateEnd", array(), "method"), "full", "none"), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>\t\t\t\t
\t\t\t\t<i><small>";
            // line 46
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["reservation"], "devices", array())), "html", null, true);
            echo " équipements au total</small></i>
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_view", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-info\">Voir la réservation</a>
\t\t\t\t";
            // line 50
            if (($this->getAttribute($context["reservation"], "ongoing", array()) == true)) {
                // line 51
                echo "\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_extend", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-warning\">Prolonger</a>
\t\t\t\t\t<a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_return", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-danger\">Retourner les équipements</a>
\t\t\t\t";
            } else {
                // line 54
                echo "\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_takeout", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-warning\">Sortir les équipements</a>
\t\t\t\t\t<a href=\"";
                // line 55
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_cancel", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
                echo "\" title=\"Supprimer la réservation\" class=\"btn btn-sm btn-default\"> Annuler</a>
\t\t\t\t";
            }
            // line 57
            echo "\t\t\t</td>

\t\t
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "
\t";
        // line 63
        if (twig_test_empty((isset($context["reservations"]) ? $context["reservations"] : null))) {
            // line 64
            echo "\t\t<tr>
\t\t\t<td colspan=\"6\"><i>Vous n'avez pas de réservation de prévue...</i></td>
\t\t</tr>
\t";
        }
        // line 68
        echo "</table>


<a class=\"btn btn-default\" href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("crc_reserv_home");
        echo "\">Retour à l'accueil</a>

";
    }

    public function getTemplateName()
    {
        return "CrcReservBundle:Reservation:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 71,  167 => 68,  161 => 64,  159 => 63,  156 => 62,  146 => 57,  141 => 55,  136 => 54,  131 => 52,  126 => 51,  124 => 50,  120 => 49,  114 => 46,  108 => 43,  102 => 40,  98 => 38,  95 => 37,  92 => 36,  88 => 34,  85 => 33,  81 => 31,  78 => 30,  74 => 28,  72 => 27,  66 => 24,  61 => 21,  57 => 20,  44 => 9,  41 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
