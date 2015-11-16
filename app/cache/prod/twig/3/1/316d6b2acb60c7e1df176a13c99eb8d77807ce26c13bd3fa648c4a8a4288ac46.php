<?php

/* CrcReservBundle:Reservation:recap.html.twig */
class __TwigTemplate_316d6b2acb60c7e1df176a13c99eb8d77807ce26c13bd3fa648c4a8a4288ac46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CrcReservBundle:Layout:default.html.twig", "CrcReservBundle:Reservation:recap.html.twig", 1);
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
        echo "</a>
";
    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        // line 10
        echo "<h2>Résumé de la réservation</h2>

  \t<p>
  \t\t<strong>Titre:</strong> ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "name", array()), "html", null, true);
        echo "<br>
  \t\t<strong>Status:</strong>";
        // line 14
        if (($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "ongoing", array()) == true)) {
            // line 15
            echo "\t\t\t\t\t\t\t<span class=\"label label-default\">Sur le terrain</span>\t\t\t\t\t\t
\t\t\t\t\t";
        } else {
            // line 17
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "confirmed", array()) == true)) {
                // line 18
                echo "\t\t\t\t\t\t\t<span class=\"label label-info\">Confirmé</span>
\t\t\t\t\t\t";
            } else {
                // line 20
                echo "\t\t\t\t\t\t\t<span class=\"label label-warning\">Non confirmé</span>
\t\t\t\t\t\t";
            }
            // line 22
            echo "\t\t\t\t\t";
        }
        // line 23
        echo "\t\t\t\t\t<br>
  \t\t<strong>Date début:</strong> ";
        // line 24
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "getDateBegin", array(), "method"), "full", "none"), "html", null, true);
        echo "<br>
  \t\t<strong>Date fin:</strong> ";
        // line 25
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "getDateEnd", array(), "method"), "full", "none"), "html", null, true);
        echo "<br>
  \t\t<strong>Description:</strong> ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "comment", array()), "html", null, true);
        echo "<br>
  \t\t<strong>Nombre d'équipements:</strong> ";
        // line 27
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "devices", array())), "html", null, true);
        echo "
  \t</p>

  \t";
        // line 30
        if (($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "confirmed", array()) == false)) {
            // line 31
            echo "  \t<p>
  \t\t<i>Vous pouvez toujours ajouter des équipements, mais attention, tant que la réservation n'est pas confirmé, les équipements ne sont pas réservés et peuvent être utilisés par un autre utilisateur ! </i>
  \t</p>
  \t";
        }
        // line 35
        echo "
\t<p>
\t\t<a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("crc_reserv_my_reservations");
        echo "\" class=\"btn btn-default\">Retour</a>\t\t
  \t\t";
        // line 38
        if (($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "ongoing", array()) == false)) {
            // line 39
            echo "\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_add_devices", array("id" => $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info\">Ajouter des équipements</a>
  \t\t<a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_takeout", array("id" => $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">Sortir les équipements</a>
\t\t<a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_cancel", array("id" => $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">Annuler la réservation</a>
\t\t";
        } else {
            // line 43
            echo "\t  \t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_extend", array("id" => $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info\">Prolonger la réservation</a>
\t  \t<a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_return", array("id" => $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\">Retourner les équipements</a>
  \t\t";
        }
        // line 46
        echo "\t  

  \t<table class=\"table\">
  \t\t<th>Equipement</th>
  \t\t<th>Code ID</th>
  \t\t<th>A retourner le</th>
  \t\t<th>Action</th>
  \t\t";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "devices", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["device"]) {
            // line 54
            echo "\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "type", array()), "html", null, true);
            echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "code", array()), "html", null, true);
            echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 62
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "getDateEnd", array(), "method"), "full", "none"), "html", null, true);
            echo "
\t\t\t\t</td>
\t\t\t\t
\t\t\t\t<td>
\t\t\t\t\t";
            // line 66
            if (($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "confirmed", array()) == false)) {
                // line 67
                echo "\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_cancel_device", array("device" => $this->getAttribute($context["device"], "id", array()), "reservation" => $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default btn-xs\">Annuler</a>
\t\t\t\t\t";
            }
            // line 69
            echo "\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_replace_device_missing", array("device" => $this->getAttribute($context["device"], "id", array()), "reservation" => $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-xs\">Signaler manquant</a>
\t\t\t\t\t<a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_notify_device", array("device" => $this->getAttribute($context["device"], "id", array()), "reservation" => $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "id", array()), "redirect" => "crc_reserv_replace_device_missing")), "html", null, true);
            echo "\" class=\"btn btn-xs\">Signaler défectueux</a>
\t\t\t\t</td>
\t\t\t</tr>
\t\t\t
  \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['device'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "  \t\t
  \t</table>

  

";
    }

    public function getTemplateName()
    {
        return "CrcReservBundle:Reservation:recap.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 75,  189 => 70,  184 => 69,  178 => 67,  176 => 66,  169 => 62,  163 => 59,  157 => 56,  153 => 54,  149 => 53,  140 => 46,  135 => 44,  130 => 43,  125 => 41,  121 => 40,  116 => 39,  114 => 38,  110 => 37,  106 => 35,  100 => 31,  98 => 30,  92 => 27,  88 => 26,  84 => 25,  80 => 24,  77 => 23,  74 => 22,  70 => 20,  66 => 18,  63 => 17,  59 => 15,  57 => 14,  53 => 13,  48 => 10,  45 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
