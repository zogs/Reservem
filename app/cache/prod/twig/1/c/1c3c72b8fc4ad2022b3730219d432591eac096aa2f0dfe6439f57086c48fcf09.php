<?php

/* CrcReservBundle:Reservation:takeout.html.twig */
class __TwigTemplate_1c3c72b8fc4ad2022b3730219d432591eac096aa2f0dfe6439f57086c48fcf09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CrcReservBundle:Layout:default.html.twig", "CrcReservBundle:Reservation:takeout.html.twig", 1);
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
        echo "</a> :: <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_takeout", array("id" => $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "id", array()))), "html", null, true);
        echo "\">Sortir les équipements</a>
";
    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        // line 10
        echo "<h2>Sortir des équipements</h2>
  \t
  \t<h3>Veuillez scanner les équipements suivant avant de les sortir du stock</h3>

\t<form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_takeout", array("id" => $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">

  \t<input type=\"text\" id=\"barcode\" name=\"barcode\" data-reservation-id=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "id", array()), "html", null, true);
        echo "\" data-action=\"takeout\" data-url=\"";
        echo $this->env->getExtension('routing')->getPath("crc_reserv_device_takeout");
        echo "\" data-completed-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("crc_reserv_takeout_complete", array("id" => $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "id", array()))), "html", null, true);
        echo "\">
  \t<div id=\"ajax-error\" class=\"hide\"></div>
  \t<table class=\"table\">
  \t\t<tr>
  \t\t\t<th></th>
  \t\t\t<th>Code d'identification</th>
  \t\t\t<th>Type d'équipement</th>
  \t\t\t<th>Description</th>
  \t\t</tr>

  \t\t";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "devices", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["device"]) {
            // line 27
            echo "\t\t\t<tr id=\"device-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "id", array()), "html", null, true);
            echo "\" class=\"";
            if (($this->getAttribute($context["device"], "getOnTheGround", array(), "method") == true)) {
                echo "success";
            }
            echo "\">
\t\t\t\t<td>
\t\t\t\t\t";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "code", array()), "html", null, true);
            echo "
\t\t\t\t\t";
            // line 30
            if (($this->getAttribute($context["device"], "getOnTheGround", array(), "method") == true)) {
                echo "<label class=\"label label-success\">Déjà sorti</label>";
            }
            echo "\t\t\t\t\t
\t\t\t\t</td>\t\t\t\t
\t\t\t\t<td>
\t\t\t\t\t<label for=\"device[";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "id", array()), "html", null, true);
            echo "]\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "type", array()), "html", null, true);
            echo "</label>
\t\t\t\t</td>
\t\t\t\t<td>
\t\t\t\t\t";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "description", array()), "html", null, true);
            echo "
\t\t\t\t</td>\t
\t\t\t\t<td>
\t\t\t\t\t";
            // line 39
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('barcode')->getCallable(), array(array("code" => $this->getAttribute($context["device"], "code", array()), "type" => "c128", "format" => "svg", "height" => 30))), "html", null, true);
            echo "
\t\t\t\t</td>\t\t\t
\t\t\t</tr>
\t\t\t
  \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['device'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "  \t\t
  \t</table>

  \t<input type=\"submit\" value=\"Confirmer\" class=\"btn btn-primary\">

  \t</form>

";
    }

    public function getTemplateName()
    {
        return "CrcReservBundle:Reservation:takeout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 43,  118 => 39,  112 => 36,  104 => 33,  96 => 30,  92 => 29,  82 => 27,  78 => 26,  61 => 16,  56 => 14,  50 => 10,  47 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
