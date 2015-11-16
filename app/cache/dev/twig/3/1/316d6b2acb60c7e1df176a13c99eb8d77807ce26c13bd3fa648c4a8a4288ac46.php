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
        $__internal_65898c9a2c3fd98357a6e3b9f621553385f2ab4e575229e86ce3c94b5275aed7 = $this->env->getExtension("native_profiler");
        $__internal_65898c9a2c3fd98357a6e3b9f621553385f2ab4e575229e86ce3c94b5275aed7->enter($__internal_65898c9a2c3fd98357a6e3b9f621553385f2ab4e575229e86ce3c94b5275aed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CrcReservBundle:Reservation:recap.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65898c9a2c3fd98357a6e3b9f621553385f2ab4e575229e86ce3c94b5275aed7->leave($__internal_65898c9a2c3fd98357a6e3b9f621553385f2ab4e575229e86ce3c94b5275aed7_prof);

    }

    // line 3
    public function block_arianne($context, array $blocks = array())
    {
        $__internal_48ad6df9c081b8fe1a4ad43256e9edcadb4ee5a7ceeb44e944493f7e0fefe140 = $this->env->getExtension("native_profiler");
        $__internal_48ad6df9c081b8fe1a4ad43256e9edcadb4ee5a7ceeb44e944493f7e0fefe140->enter($__internal_48ad6df9c081b8fe1a4ad43256e9edcadb4ee5a7ceeb44e944493f7e0fefe140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "arianne"));

        // line 4
        echo "\t";
        $this->displayParentBlock("arianne", $context, $blocks);
        echo " :: <a href=\"";
        echo $this->env->getExtension('routing')->getPath("crc_reserv_my_reservations");
        echo "\">Mes réservations</a> :: <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_view", array("id" => $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "name", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_48ad6df9c081b8fe1a4ad43256e9edcadb4ee5a7ceeb44e944493f7e0fefe140->leave($__internal_48ad6df9c081b8fe1a4ad43256e9edcadb4ee5a7ceeb44e944493f7e0fefe140_prof);

    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_1ce94b5ef6a719634a9bab206da87a5f486bfee4ed9d2f96398190dfbb607621 = $this->env->getExtension("native_profiler");
        $__internal_1ce94b5ef6a719634a9bab206da87a5f486bfee4ed9d2f96398190dfbb607621->enter($__internal_1ce94b5ef6a719634a9bab206da87a5f486bfee4ed9d2f96398190dfbb607621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 10
        echo "<h2>Résumé de la réservation</h2>

  \t<p>
  \t\t<strong>Titre:</strong> ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "name", array()), "html", null, true);
        echo "<br>
  \t\t<strong>Status:</strong>";
        // line 14
        if (($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "ongoing", array()) == true)) {
            // line 15
            echo "\t\t\t\t\t\t\t<span class=\"label label-default\">Sur le terrain</span>\t\t\t\t\t\t
\t\t\t\t\t";
        } else {
            // line 17
            echo "\t\t\t\t\t\t";
            if (($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "confirmed", array()) == true)) {
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
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "getDateBegin", array(), "method"), "full", "none"), "html", null, true);
        echo "<br>
  \t\t<strong>Date fin:</strong> ";
        // line 25
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "getDateEnd", array(), "method"), "full", "none"), "html", null, true);
        echo "<br>
  \t\t<strong>Description:</strong> ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "comment", array()), "html", null, true);
        echo "<br>
  \t\t<strong>Nombre d'équipements:</strong> ";
        // line 27
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "devices", array())), "html", null, true);
        echo "
  \t</p>

  \t";
        // line 30
        if (($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "confirmed", array()) == false)) {
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
        echo "\" class=\"btn btn-default\">Retour</a>

\t\t";
        // line 39
        if (($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "user", array()) == $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            echo "\t\t
\t  \t\t";
            // line 40
            if (($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "ongoing", array()) == false)) {
                // line 41
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_add_devices", array("id" => $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info\">Ajouter des équipements</a>
\t  \t\t<a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_takeout", array("id" => $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-warning\">Sortir les équipements</a>
\t\t\t<a href=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_cancel", array("id" => $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">Annuler la réservation</a>
\t\t\t";
            } else {
                // line 45
                echo "\t\t  \t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_extend", array("id" => $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-info\">Prolonger la réservation</a>
\t\t  \t<a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_return", array("id" => $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">Retourner les équipements</a>
\t  \t\t";
            }
            // line 48
            echo "\t  \t";
        }
        // line 49
        echo "
  \t<table class=\"table\">
  \t\t<th>Equipement</th>
  \t\t<th>Code ID</th>
  \t\t<th>A retourner le</th>
  \t\t<th>Action</th>
  \t\t";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "devices", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["device"]) {
            // line 56
            echo "\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "type", array()), "html", null, true);
            echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "code", array()), "html", null, true);
            echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 64
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "getDateEnd", array(), "method"), "full", "none"), "html", null, true);
            echo "
\t\t\t\t</td>
\t\t\t\t
\t\t\t\t<td>
\t\t\t\t\t";
            // line 68
            if (($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "user", array()) == $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
                // line 69
                echo "\t\t\t\t\t\t";
                if (($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "confirmed", array()) == false)) {
                    // line 70
                    echo "\t\t\t\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_cancel_device", array("device" => $this->getAttribute($context["device"], "id", array()), "reservation" => $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-default btn-xs\">Annuler</a>
\t\t\t\t\t\t";
                }
                // line 72
                echo "\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_replace_device_missing", array("device" => $this->getAttribute($context["device"], "id", array()), "reservation" => $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-xs\">Signaler manquant</a>
\t\t\t\t\t\t<a href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_notify_device", array("device" => $this->getAttribute($context["device"], "id", array()), "reservation" => $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "id", array()), "redirect" => "crc_reserv_replace_device_missing")), "html", null, true);
                echo "\" class=\"btn btn-xs\">Signaler défectueux</a>
\t\t\t\t\t";
            }
            // line 75
            echo "\t\t\t\t</td>
\t\t\t</tr>
\t\t\t
  \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['device'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "  \t\t
  \t</table>

  

";
        
        $__internal_1ce94b5ef6a719634a9bab206da87a5f486bfee4ed9d2f96398190dfbb607621->leave($__internal_1ce94b5ef6a719634a9bab206da87a5f486bfee4ed9d2f96398190dfbb607621_prof);

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
        return array (  228 => 79,  219 => 75,  214 => 73,  209 => 72,  203 => 70,  200 => 69,  198 => 68,  191 => 64,  185 => 61,  179 => 58,  175 => 56,  171 => 55,  163 => 49,  160 => 48,  155 => 46,  150 => 45,  145 => 43,  141 => 42,  136 => 41,  134 => 40,  130 => 39,  125 => 37,  121 => 35,  115 => 31,  113 => 30,  107 => 27,  103 => 26,  99 => 25,  95 => 24,  92 => 23,  89 => 22,  85 => 20,  81 => 18,  78 => 17,  74 => 15,  72 => 14,  68 => 13,  63 => 10,  57 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
