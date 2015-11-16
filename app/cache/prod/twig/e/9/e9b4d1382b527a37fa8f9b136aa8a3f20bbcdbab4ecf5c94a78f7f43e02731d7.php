<?php

/* CrcReservBundle:Device:index.html.twig */
class __TwigTemplate_e9b4d1382b527a37fa8f9b136aa8a3f20bbcdbab4ecf5c94a78f7f43e02731d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CrcReservBundle:Layout:default.html.twig", "CrcReservBundle:Device:index.html.twig", 1);
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
  <a class=\"btn btn-default\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_device_print_list", array("department" => $this->getAttribute((isset($context["department"]) ? $context["department"] : null), "id", array()))), "html", null, true);
        echo "\">Imprimer la liste</a>
  ";
        // line 9
        if ($this->getAttribute($this->getAttribute((isset($context["department"]) ? $context["department"] : null), "admins", array()), "contains", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())), "method")) {
            // line 10
            echo "  <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_device_create", array("device" => $this->getAttribute($this->getAttribute((isset($context["devices"]) ? $context["devices"] : null), 0, array(), "array"), "id", array()))), "html", null, true);
            echo "\">Ajouter des équipements</a>
";
        }
        // line 12
        echo "<table class=\"table table-hover\" style=\"width:100%;\">
\t<tr>
\t\t<th>Code</th>
\t\t<th>Type</th>
\t\t<th>Statut</th>
\t\t<th>Action</th>
\t</tr>
\t";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["devices"]) ? $context["devices"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["device"]) {
            // line 20
            echo "\t\t
\t\t<tr>
\t\t\t<td>
\t\t\t\t";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "code", array()), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "type", array()), "html", null, true);
            echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 29
            if (($this->getAttribute($context["device"], "missing", array()) == true)) {
                echo "<span class=\"label label-danger\">Perdu</span>
\t\t\t\t";
            } elseif (($this->getAttribute(            // line 30
$context["device"], "working", array()) == false)) {
                echo "<span class=\"label label-warning\">En panne</span>
\t\t\t\t";
            } elseif (($this->getAttribute(            // line 31
$context["device"], "getOnTheGround", array(), "method") == true)) {
                echo "<span class=\"label label-default\">Terrrain</span>
\t\t\t\t";
            } else {
                // line 32
                echo "<span class=\"label label-success\">En stock</span>";
            }
            // line 33
            echo "\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
            // line 35
            if ($this->getAttribute($this->getAttribute((isset($context["department"]) ? $context["department"] : null), "admins", array()), "contains", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())), "method")) {
                // line 36
                echo "\t\t\t\t\t<a class=\"btn btn-default btn-xs\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_device_edit", array("device" => $this->getAttribute($context["device"], "id", array()))), "html", null, true);
                echo "\">Editer</a>
\t\t\t\t\t<a class=\"btn btn-default btn-xs\" href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_device_remove", array("device" => $this->getAttribute($context["device"], "id", array()))), "html", null, true);
                echo "\">Supprimer</a>
\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t<a class=\"btn btn-default btn-xs\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_device_print_label", array("device" => $this->getAttribute($context["device"], "id", array()))), "html", null, true);
            echo "\">Imprimer</a>
\t\t\t\t<a class=\"btn btn-default btn-xs\" href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_device_print_label", array("device" => $this->getAttribute($context["device"], "id", array()), "size" => "small")), "html", null, true);
            echo "\">Small</a>
\t\t\t\t<a class=\"btn btn-default btn-xs\" href=\"";
            // line 41
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
        // line 47
        echo "</table>

";
    }

    public function getTemplateName()
    {
        return "CrcReservBundle:Device:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 47,  122 => 41,  118 => 40,  113 => 39,  108 => 37,  103 => 36,  101 => 35,  97 => 33,  94 => 32,  89 => 31,  85 => 30,  81 => 29,  75 => 26,  69 => 23,  64 => 20,  60 => 19,  51 => 12,  45 => 10,  43 => 9,  39 => 8,  35 => 7,  31 => 5,  28 => 3,  11 => 1,);
    }
}
