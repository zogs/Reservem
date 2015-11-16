<?php

/* CrcReservBundle:Reservation:view.html.twig */
class __TwigTemplate_ab2cbb8dd1a4290b0fd3fa74cde3f4dab1fcad09b71759c36f9736bb83cab7be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CrcReservBundle:Layout:default.html.twig", "CrcReservBundle:Reservation:view.html.twig", 1);
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
        $__internal_873b0ed945875525dad1d59718352c66a1a23f9ab7110e63f559e3a2a72ae5bf = $this->env->getExtension("native_profiler");
        $__internal_873b0ed945875525dad1d59718352c66a1a23f9ab7110e63f559e3a2a72ae5bf->enter($__internal_873b0ed945875525dad1d59718352c66a1a23f9ab7110e63f559e3a2a72ae5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CrcReservBundle:Reservation:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_873b0ed945875525dad1d59718352c66a1a23f9ab7110e63f559e3a2a72ae5bf->leave($__internal_873b0ed945875525dad1d59718352c66a1a23f9ab7110e63f559e3a2a72ae5bf_prof);

    }

    // line 3
    public function block_arianne($context, array $blocks = array())
    {
        $__internal_88a06e89b83392c66170c30e55454c0b7639f9ff0c44e8bac522a3dc787f004f = $this->env->getExtension("native_profiler");
        $__internal_88a06e89b83392c66170c30e55454c0b7639f9ff0c44e8bac522a3dc787f004f->enter($__internal_88a06e89b83392c66170c30e55454c0b7639f9ff0c44e8bac522a3dc787f004f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "arianne"));

        // line 4
        echo "\t";
        $this->displayParentBlock("arianne", $context, $blocks);
        echo " :: <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_department_view_reserv", array("department" => $this->getAttribute($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "department", array()), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "department", array()), "name", array()), "html", null, true);
        echo "</a> :: <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_view", array("id" => $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "name", array()), "html", null, true);
        echo "</a>
";
        
        $__internal_88a06e89b83392c66170c30e55454c0b7639f9ff0c44e8bac522a3dc787f004f->leave($__internal_88a06e89b83392c66170c30e55454c0b7639f9ff0c44e8bac522a3dc787f004f_prof);

    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_8692eb176fea04e1a95c889511c8ded627d493c69ae73510e15a57ed26c13a15 = $this->env->getExtension("native_profiler");
        $__internal_8692eb176fea04e1a95c889511c8ded627d493c69ae73510e15a57ed26c13a15->enter($__internal_8692eb176fea04e1a95c889511c8ded627d493c69ae73510e15a57ed26c13a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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

\t<p>
\t\t<a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("crc_reserv_my_reservations");
        echo "\" class=\"btn btn-default\">Retour</a>


  \t<table class=\"table\">
  \t\t<th>Equipement</th>
  \t\t<th>Code ID</th>
  \t\t<th>A retourner le</th>
  \t\t";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "devices", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["device"]) {
            // line 39
            echo "\t\t\t<tr>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "type", array()), "html", null, true);
            echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "code", array()), "html", null, true);
            echo "
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 47
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : $this->getContext($context, "reservation")), "getDateEnd", array(), "method"), "full", "none"), "html", null, true);
            echo "
\t\t\t\t</td>
\t\t\t
\t\t\t</tr>
\t\t\t
  \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['device'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "  \t\t
  \t</table>

  

";
        
        $__internal_8692eb176fea04e1a95c889511c8ded627d493c69ae73510e15a57ed26c13a15->leave($__internal_8692eb176fea04e1a95c889511c8ded627d493c69ae73510e15a57ed26c13a15_prof);

    }

    public function getTemplateName()
    {
        return "CrcReservBundle:Reservation:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 53,  146 => 47,  140 => 44,  134 => 41,  130 => 39,  126 => 38,  116 => 31,  109 => 27,  105 => 26,  101 => 25,  97 => 24,  94 => 23,  91 => 22,  87 => 20,  83 => 18,  80 => 17,  76 => 15,  74 => 14,  70 => 13,  65 => 10,  59 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
