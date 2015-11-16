<?php

/* CrcReservBundle:Department:admin.html.twig */
class __TwigTemplate_d016b1825db40b1a7ef330fa931c7dad063117aca030ea8d84ffe7b317c09294 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CrcReservBundle:Layout:default.html.twig", "CrcReservBundle:Department:admin.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_department_admin", array("id" => $this->getAttribute((isset($context["department"]) ? $context["department"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["department"]) ? $context["department"] : null), "name", array()), "html", null, true);
        echo "</a> :: <a href=\"\">Administration</a>
";
    }

    // line 8
    public function block_page_content($context, array $blocks = array())
    {
        // line 10
        echo "<h1>";
        if ($this->getAttribute((isset($context["department"]) ? $context["department"] : null), "logo", array())) {
            echo "<img class=\"dpt-logo-small\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute((isset($context["department"]) ? $context["department"] : null), "logo", array()), "getWebPath", array())), "html", null, true);
            echo "\">";
        }
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["department"]) ? $context["department"] : null), "name", array()), "html", null, true);
        echo "</h1>

  <h3>Liste des équipements</h3>
  <p>
  \t<a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_device_index", array("department" => $this->getAttribute((isset($context["department"]) ? $context["department"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">Voir tous les équipements</a>
  \t<a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_device_stock", array("department" => $this->getAttribute((isset($context["department"]) ? $context["department"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">Voir le stock</a>
  \t<a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_device_onfield", array("department" => $this->getAttribute((isset($context["department"]) ? $context["department"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">Voir les sorties</a>
  \t<a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("crc_reserv_device_create");
        echo "\" class=\"btn btn-primary \" >Ajouter des équipements</a>
  </p>
<table class=\"table table-striped table-bordered\" style=\"width:100%;\">
\t<tr>
\t\t<th>Type</th>
\t\t<th>En tout</th>
\t\t<th>En Panne</th>
\t\t<th>Manquante</th>
\t\t<th>Reservation en cours</th>
\t\t<th></th>
\t</tr>
\t
\t";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["devices"]) ? $context["devices"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["device"]) {
            // line 30
            echo "\t\t";
            if ( !twig_test_empty($context["device"])) {
                // line 31
                echo "\t\t<tr>
\t\t\t<td>
\t\t\t\t";
                // line 33
                echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
                // line 36
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $context["device"]), "html", null, true);
                echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
                // line 39
                $context["nb"] = 0;
                // line 40
                echo "\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["device"]);
                foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                    // line 41
                    echo "\t\t\t\t\t";
                    if (($this->getAttribute($context["d"], "working", array()) == 0)) {
                        // line 42
                        echo "\t\t\t\t\t\t";
                        $context["nb"] = ((isset($context["nb"]) ? $context["nb"] : null) + 1);
                        // line 43
                        echo "\t\t\t\t\t";
                    }
                    // line 44
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["nb"]) ? $context["nb"] : null), "html", null, true);
                echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t";
                // line 48
                $context["nb"] = 0;
                // line 49
                echo "\t\t\t\t";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($context["device"]);
                foreach ($context['_seq'] as $context["_key"] => $context["d"]) {
                    // line 50
                    echo "\t\t\t\t\t";
                    if (($this->getAttribute($context["d"], "missing", array()) == 1)) {
                        // line 51
                        echo "\t\t\t\t\t\t";
                        $context["nb"] = ((isset($context["nb"]) ? $context["nb"] : null) + 1);
                        // line 52
                        echo "\t\t\t\t\t";
                    }
                    // line 53
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['d'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "\t\t\t\t";
                echo twig_escape_filter($this->env, (isset($context["nb"]) ? $context["nb"] : null), "html", null, true);
                echo "
\t\t\t</td>
\t\t\t<td>
\t\t\t\t";
                // line 57
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) ? $context["reservations"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["reser"]) {
                    // line 58
                    echo "\t\t\t\t<p>
\t\t\t\t\t<small>
\t\t\t\t";
                    // line 60
                    if ($this->getAttribute($context["reser"], "hasDeviceType", array(0 => $context["type"]), "method")) {
                        // line 61
                        echo "\t\t\t\t\t
\t\t\t\t\t";
                        // line 62
                        echo twig_escape_filter($this->env, $this->getAttribute($context["reser"], "countDevicesType", array(0 => $context["type"]), "method"), "html", null, true);
                        echo " unités

\t\t\t\t";
                    }
                    // line 65
                    echo "
\t\t\t\tpar ";
                    // line 66
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["reser"], "user", array()), "username", array()), "html", null, true);
                    echo "

\t\t\t\tdu ";
                    // line 68
                    echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["reser"], "getDateBegin", array(), "method"), "short", "none"), "html", null, true);
                    echo "
\t\t\t\t--> ";
                    // line 69
                    echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["reser"], "getDateEnd", array(), "method"), "short", "none"), "html", null, true);
                    echo "
\t\t\t\t\t</small>
\t\t\t\t</p>
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reser'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 73
                echo "
\t\t\t\t";
                // line 74
                if (twig_test_empty((isset($context["reservations"]) ? $context["reservations"] : null))) {
                    // line 75
                    echo "\t\t\t\t\t<i>Aucune</i>
\t\t\t\t";
                }
                // line 77
                echo "\t\t\t</td>
\t\t\t<td>
\t\t\t\t<a href=\"";
                // line 79
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_device_index", array("department" => $this->getAttribute((isset($context["department"]) ? $context["department"] : null), "id", array()), "type" => $this->getAttribute($this->getAttribute($context["device"], 0, array(), "array"), "slug", array()))), "html", null, true);
                echo "\" class=\"btn btn-default btn-xs\">Voir ces équipements</a>
\t\t\t\t<a class=\"btn btn-primary btn-xs\" href=\"";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_device_create", array("device" => $this->getAttribute($this->getAttribute($context["device"], 0, array(), "array"), "id", array()))), "html", null, true);
                echo "\">En ajouter</a>
\t\t\t</td>\t
\t\t</tr>
\t\t";
            }
            // line 84
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['device'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 85
        echo "</table>




<h3>Réservation en cours</h3>
<ul class=\"nav nav-tabs\" id=\"reservation-list\">
  <li class=\"active\"><a href=\"#reserv-en-cours\" data-toggle=\"tab\">En cours</a></li>
  <li><a href=\"#reserv-ancienne\" data-toggle=\"tab\">Ancienne</a></li>
</ul>
<div class=\"tab-content\">
\t<div class=\"tab-pane active\" id=\"reserv-en-cours\">
\t<table class=\"table table-striped table-bordered\">
\t\t";
        // line 98
        if ( !twig_test_empty((isset($context["reservations"]) ? $context["reservations"] : null))) {
            // line 99
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) ? $context["reservations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
                // line 100
                echo "\t\t\t<tr>
\t\t\t\t<td>";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "name", array()), "html", null, true);
                echo "</td>
\t\t\t\t<td>par ";
                // line 102
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["r"], "user", array()), "username", array())), "html", null, true);
                echo "</td>
\t\t\t\t<td>";
                // line 103
                echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["r"], "devices", array())), "html", null, true);
                echo " équipements</td>
\t\t\t\t<td>du ";
                // line 104
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["r"], "dateBegin", array()), "full", "none"), "html", null, true);
                echo "</td>
\t\t\t\t<td>au ";
                // line 105
                echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["r"], "dateEnd", array()), "full", "none"), "html", null, true);
                echo "</td>
\t\t\t</tr>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 108
            echo "\t\t";
        } else {
            // line 109
            echo "\t\t\t<tr>
\t\t\t\t<td><i>Pas de réservation en cours...</td>
\t\t\t</tr>
\t\t";
        }
        // line 113
        echo "\t</table>\t
\t</div>
\t<div class=\"tab-pane\" id=\"reserv-ancienne\">
\t\t<table class=\"table table-stripped\">
\t\t\t<tr>
\t\t\t\t<td><i>Pas de réservation anciennes...</td>
\t\t\t</tr>
\t\t</table>\t


\t</div>
</div>
<a class=\"btn   btn-primary\" href='";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_device_available", array("department" => $this->getAttribute((isset($context["department"]) ? $context["department"] : null), "id", array()))), "html", null, true);
        echo "'>Faire une réservation</a>



<h3>Liste des utilisateurs</h3>
<ul class=\"nav nav-tabs\" id=\"member-list\">
  <li class=\"active\"><a href=\"#users-list\" data-toggle=\"tab\">Utilisateurs</a></li>
  <li><a href=\"#admins-list\" data-toggle=\"tab\">Administrateurs</a></li>
</ul>
<div class=\"tab-content\">
\t<div class=\"tab-pane active\" id=\"users-list\">
\t\t<table class=\"table table-striped table-bordered\">
\t\t\t";
        // line 137
        if ( !twig_test_empty($this->getAttribute((isset($context["department"]) ? $context["department"] : null), "members", array()))) {
            // line 138
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["department"]) ? $context["department"] : null), "members", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 139
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                // line 140
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["user"], "username", array())), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>enregistré depuis le ";
                // line 141
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "registerSince", array()), "d-m-Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
                // line 143
                if ($this->getAttribute($this->getAttribute((isset($context["department"]) ? $context["department"] : null), "admins", array()), "contains", array(0 => $context["user"]), "method")) {
                    // line 144
                    echo "\t\t\t\t\t\t\t\t<span class=\"label label-default\">Administrateur</span>
\t\t\t\t\t\t\t";
                } else {
                    // line 146
                    echo "\t\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-default \" href=\"\">Promouvoir</a>
\t\t\t\t\t\t\t";
                }
                // line 148
                echo "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-default\" href=\"\">Editer</a>
\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-danger\" href=\"\">Supprimer</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 155
            echo "\t\t\t";
        }
        // line 156
        echo "\t\t</table>
\t</div>
\t<div class=\"tab-pane\" id=\"admins-list\">
\t\t<table class=\"table table-stripped\">
\t\t\t";
        // line 160
        if ( !twig_test_empty($this->getAttribute((isset($context["department"]) ? $context["department"] : null), "admins", array()))) {
            // line 161
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["department"]) ? $context["department"] : null), "admins", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 162
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                // line 163
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["user"], "username", array())), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>enregistré depuis le ";
                // line 164
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "registerSince", array()), "d-m-Y"), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-default\" href=\"\">Editer</a>
\t\t\t\t\t\t\t<a class=\"btn btn-xs btn-danger\" href=\"\">Supprimer</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            echo "\t\t\t";
        }
        // line 172
        echo "\t\t</table>
\t</div>
</div>
<a class=\"btn   btn-primary\" href=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_department_adduser", array("department" => $this->getAttribute((isset($context["department"]) ? $context["department"] : null), "id", array()))), "html", null, true);
        echo "\">Ajouter un utilisateur d'une autre composante</a>
<a class=\"btn   btn-primary\" href=''>Inviter un utilisateur extérieur</a>




";
    }

    public function getTemplateName()
    {
        return "CrcReservBundle:Department:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  412 => 175,  407 => 172,  404 => 171,  391 => 164,  387 => 163,  384 => 162,  379 => 161,  377 => 160,  371 => 156,  368 => 155,  356 => 148,  352 => 146,  348 => 144,  346 => 143,  341 => 141,  337 => 140,  334 => 139,  329 => 138,  327 => 137,  312 => 125,  298 => 113,  292 => 109,  289 => 108,  280 => 105,  276 => 104,  272 => 103,  268 => 102,  264 => 101,  261 => 100,  256 => 99,  254 => 98,  239 => 85,  233 => 84,  226 => 80,  222 => 79,  218 => 77,  214 => 75,  212 => 74,  209 => 73,  199 => 69,  195 => 68,  190 => 66,  187 => 65,  181 => 62,  178 => 61,  176 => 60,  172 => 58,  168 => 57,  161 => 54,  155 => 53,  152 => 52,  149 => 51,  146 => 50,  141 => 49,  139 => 48,  132 => 45,  126 => 44,  123 => 43,  120 => 42,  117 => 41,  112 => 40,  110 => 39,  104 => 36,  98 => 33,  94 => 31,  91 => 30,  87 => 29,  72 => 17,  68 => 16,  64 => 15,  60 => 14,  46 => 10,  43 => 8,  32 => 4,  29 => 3,  11 => 1,);
    }
}
