<?php

/* CrcReservBundle:Reservation:return.html.twig */
class __TwigTemplate_afda409812a5ed403d266148994975fe2a94ebec7d1d17c674f4cad443174e10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CrcReservBundle:Layout:default.html.twig", "CrcReservBundle:Reservation:return.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_return", array("id" => $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "id", array()))), "html", null, true);
        echo "\">Retourner les équipements</a>
";
    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        // line 10
        echo "<h2>Retourner des équipements</h2>
  \t
  \t<h3>Veuillez scanner les équipements suivants :</h3>

\t<form action=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_return", array("id" => $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">

\t<input type=\"text\" id=\"barcode\" name=\"barcode\" data-reservation-id=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "id", array()), "html", null, true);
        echo "\" data-action=\"return\" data-url=\"";
        echo $this->env->getExtension('routing')->getPath("crc_reserv_device_return");
        echo "\" data-completed-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("crc_reserv_return_complete", array("id" => $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "id", array()))), "html", null, true);
        echo "\">
  \t<div id=\"ajax-error\" class=\"hide\"></div>

  \t<table class=\"table\">
  \t\t
  \t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "devices", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["device"]) {
            // line 22
            echo "  \t\t\t";
            if (($this->getAttribute($context["device"], "getOnTheGround", array(), "method") == true)) {
                // line 23
                echo "\t\t\t<tr id=\"device-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "id", array()), "html", null, true);
                echo "\">
\t\t\t\t<td>
\t\t\t\t\t";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "code", array()), "html", null, true);
                echo "
\t\t\t\t</td>\t\t\t\t
\t\t\t\t<td>
\t\t\t\t\t<label for=\"device[";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "id", array()), "html", null, true);
                echo "]\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["device"], "type", array()), "html", null, true);
                echo "</label>
\t\t\t\t</td>\t
\t\t\t\t<td>
\t\t\t\t\t";
                // line 32
                echo "\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_return_device_missing", array("device" => $this->getAttribute($context["device"], "id", array()), "reservation" => $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-xs\">Signaler manquant</a>\t\t\t\t\t
\t\t\t\t\t<a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_notify_device", array("device" => $this->getAttribute($context["device"], "id", array()), "reservation" => $this->getAttribute((isset($context["reservation"]) ? $context["reservation"] : null), "id", array()), "redirect" => "crc_reserv_return_device_defected")), "html", null, true);
                echo "\" class=\"btn btn-xs\">Signaler défectueux</a>
\t\t\t\t</td>\t\t\t
\t\t\t</tr>
\t\t\t";
            }
            // line 36
            echo "\t
\t\t\t
  \t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['device'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "  \t\t
  \t</table>

  \t
  \t

  \t</form>

";
    }

    public function getTemplateName()
    {
        return "CrcReservBundle:Reservation:return.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 38,  112 => 36,  105 => 33,  100 => 32,  92 => 28,  86 => 25,  80 => 23,  77 => 22,  73 => 21,  61 => 16,  56 => 14,  50 => 10,  47 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
