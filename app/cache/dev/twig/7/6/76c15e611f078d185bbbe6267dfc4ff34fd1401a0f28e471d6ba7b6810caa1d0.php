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
        $__internal_90f965b4506a48f58c2b67040dbc60b05e148af4859ae689c3e271c1c1502ea9 = $this->env->getExtension("native_profiler");
        $__internal_90f965b4506a48f58c2b67040dbc60b05e148af4859ae689c3e271c1c1502ea9->enter($__internal_90f965b4506a48f58c2b67040dbc60b05e148af4859ae689c3e271c1c1502ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CrcReservBundle:Reservation:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90f965b4506a48f58c2b67040dbc60b05e148af4859ae689c3e271c1c1502ea9->leave($__internal_90f965b4506a48f58c2b67040dbc60b05e148af4859ae689c3e271c1c1502ea9_prof);

    }

    // line 3
    public function block_arianne($context, array $blocks = array())
    {
        $__internal_094759def28064aa1715eab22d99d6c1c6e9e4aad99b1203022a588194504b66 = $this->env->getExtension("native_profiler");
        $__internal_094759def28064aa1715eab22d99d6c1c6e9e4aad99b1203022a588194504b66->enter($__internal_094759def28064aa1715eab22d99d6c1c6e9e4aad99b1203022a588194504b66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "arianne"));

        // line 4
        echo "\t";
        $this->displayParentBlock("arianne", $context, $blocks);
        echo " :: <a href=\"";
        echo $this->env->getExtension('routing')->getPath("crc_reserv_my_reservations");
        echo "\">Mes réservations</a>
";
        
        $__internal_094759def28064aa1715eab22d99d6c1c6e9e4aad99b1203022a588194504b66->leave($__internal_094759def28064aa1715eab22d99d6c1c6e9e4aad99b1203022a588194504b66_prof);

    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_f1eb4d5031b524040fda23da3d37448c5184ab60dd76e12c341cc3d5c1e3bb7b = $this->env->getExtension("native_profiler");
        $__internal_f1eb4d5031b524040fda23da3d37448c5184ab60dd76e12c341cc3d5c1e3bb7b->enter($__internal_f1eb4d5031b524040fda23da3d37448c5184ab60dd76e12c341cc3d5c1e3bb7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) ? $context["reservations"] : $this->getContext($context, "reservations")));
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_edit", array("id" => $this->getAttribute($context["reservation"], "id", array()))), "html", null, true);
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
        if (twig_test_empty((isset($context["reservations"]) ? $context["reservations"] : $this->getContext($context, "reservations")))) {
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
        
        $__internal_f1eb4d5031b524040fda23da3d37448c5184ab60dd76e12c341cc3d5c1e3bb7b->leave($__internal_f1eb4d5031b524040fda23da3d37448c5184ab60dd76e12c341cc3d5c1e3bb7b_prof);

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
        return array (  187 => 71,  182 => 68,  176 => 64,  174 => 63,  171 => 62,  161 => 57,  156 => 55,  151 => 54,  146 => 52,  141 => 51,  139 => 50,  135 => 49,  129 => 46,  123 => 43,  117 => 40,  113 => 38,  110 => 37,  107 => 36,  103 => 34,  100 => 33,  96 => 31,  93 => 30,  89 => 28,  87 => 27,  81 => 24,  76 => 21,  72 => 20,  59 => 9,  53 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
