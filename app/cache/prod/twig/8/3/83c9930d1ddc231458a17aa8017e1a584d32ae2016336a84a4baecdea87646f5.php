<?php

/* CrcReservBundle:Device:on_field.html.twig */
class __TwigTemplate_83c9930d1ddc231458a17aa8017e1a584d32ae2016336a84a4baecdea87646f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CrcReservBundle:Layout:default.html.twig", "CrcReservBundle:Device:on_field.html.twig", 1);
        $this->blocks = array(
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
    public function block_page_content($context, array $blocks = array())
    {
        // line 5
        echo "<h1>Listes des équipements</h1>

  <a class=\"btn btn-default\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
        echo "\">Retour</a>

<table class=\"table table-hover\" style=\"width:100%;\">
\t<tr>
\t\t<th>Code</th>
\t\t<th>Type</th>
\t\t<th>Statut</th>
\t\t<th>Réservation en cours</th>
\t\t<th>Réservation prévus</th>
\t\t<th>Action</th>
\t</tr>
\t";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["devices"]) ? $context["devices"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["device"]) {
            // line 19
            echo "\t\t
\t\t<tr>
\t\t\t<td>
\t\t\t\t";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "code", array()), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "type", array()), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t<span class=\"label label-default\">Sur le terrain</span>
\t\t\t\t";
            // line 29
            if (($this->getAttribute($context["device"], "missing", array()) == true)) {
                echo "<span class=\"label label-danger\">Perdu</span>";
            }
            // line 30
            echo "\t\t\t\t";
            if (($this->getAttribute($context["device"], "working", array()) == false)) {
                echo "<span class=\"label label-warning\">En panne</span>";
            }
            // line 31
            echo "\t\t\t\t
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 34
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["device"], "reservations", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["reserv"]) {
                // line 35
                echo "\t\t\t\t\t";
                if (($this->getAttribute($context["reserv"], "ongoing", array()) == true)) {
                    // line 36
                    echo "\t\t\t\t\tNom de la réservation: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["reserv"], "name", array()), "html", null, true);
                    echo "<br>
\t\t\t\t\tMembre : ";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reserv"], "user", array()), "username", array()), "html", null, true);
                    echo "<br>
\t\t\t\t\tDescription: ";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute($context["reserv"], "comment", array()), "html", null, true);
                    echo "<br>\t\t\t\t\t
\t\t\t\t\t";
                }
                // line 40
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reserv'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 43
            if ($this->getAttribute($this->getAttribute((isset($context["department"]) ? $context["department"] : null), "admins", array()), "contains", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())), "method")) {
                // line 44
                echo "\t\t\t\t\t<a class=\"btn btn-default btn-xs\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_device_edit", array("device" => $this->getAttribute($context["device"], "id", array()))), "html", null, true);
                echo "\">Editer</a>
\t\t\t\t\t<a class=\"btn btn-default btn-xs\" href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_device_remove", array("device" => $this->getAttribute($context["device"], "id", array()))), "html", null, true);
                echo "\">Supprimer</a>
\t\t\t\t";
            }
            // line 47
            echo "\t\t\t\t<a class=\"btn btn-default btn-xs\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_device_print_label", array("device" => $this->getAttribute($context["device"], "id", array()))), "html", null, true);
            echo "\">Imprimer</a>
\t\t\t\t<a class=\"btn btn-default btn-xs\" href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_device_print_label", array("device" => $this->getAttribute($context["device"], "id", array()), "size" => "small")), "html", null, true);
            echo "\">Small</a>
\t\t\t\t<a class=\"btn btn-default btn-xs\" href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_device_print_label", array("device" => $this->getAttribute($context["device"], "id", array()), "size" => "mini")), "html", null, true);
            echo "\">Mini</a>
\t\t\t</td>

\t\t
\t\t</tr>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['device'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "</table>

";
    }

    public function getTemplateName()
    {
        return "CrcReservBundle:Device:on_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 55,  137 => 49,  133 => 48,  128 => 47,  123 => 45,  118 => 44,  116 => 43,  112 => 41,  106 => 40,  101 => 38,  97 => 37,  92 => 36,  89 => 35,  85 => 34,  80 => 31,  75 => 30,  71 => 29,  64 => 25,  58 => 22,  53 => 19,  49 => 18,  35 => 7,  31 => 5,  28 => 3,  11 => 1,);
    }
}
