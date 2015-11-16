<?php

/* CrcReservBundle:Device:print_label.html.twig */
class __TwigTemplate_5e126d6e287e273ba75ef6141e1ef6647631dcbf9b42e9e93af55369ec41bb67 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if (((isset($context["size"]) ? $context["size"] : null) == null)) {
            // line 2
            echo "<div style=\"width:24%;margin:17px 2px; padding: 5px;float:left; height:150px; border:1px solid grey; border-radius:10px;text-align:center;\">
\t";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["device"]) ? $context["device"] : null), "type", array()), "html", null, true);
            echo "
\t<div style=\"font-size:16px\">";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["device"]) ? $context["device"] : null), "code", array()), "html", null, true);
            echo "</div>
\t
\t";
            // line 6
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('barcode')->getCallable(), array(array("code" => $this->getAttribute((isset($context["device"]) ? $context["device"] : null), "code", array()), "type" => "c128", "format" => "svg", "width" => 1, "height" => 60))), "html", null, true);
            echo "
\t\t
</div>
";
        }
        // line 10
        echo "
";
        // line 11
        if ((array_key_exists("size", $context) && ((isset($context["size"]) ? $context["size"] : null) == "small"))) {
            // line 12
            echo "<div style=\"width:24%;margin:10px 2px; padding: 5px;float:left; height:100px; border:1px solid grey; border-radius:10px;text-align:center;\">
\t<div style=\"font-size:14px\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["device"]) ? $context["device"] : null), "code", array()), "html", null, true);
            echo "</div>
\t
\t";
            // line 15
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('barcode')->getCallable(), array(array("code" => $this->getAttribute((isset($context["device"]) ? $context["device"] : null), "code", array()), "type" => "c128", "format" => "svg", "width" => 1, "height" => 60))), "html", null, true);
            echo "
\t\t
</div>
";
        }
        // line 19
        echo "
";
        // line 20
        if ((array_key_exists("size", $context) && ((isset($context["size"]) ? $context["size"] : null) == "mini"))) {
            // line 21
            echo "<div style=\"width:18%;margin:17px 2px; padding: 5px;float:left; height:50px; border:1px solid grey; border-radius:10px;text-align:center;\">
\t";
            // line 22
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('barcode')->getCallable(), array(array("code" => $this->getAttribute((isset($context["device"]) ? $context["device"] : null), "code", array()), "type" => "c128", "format" => "svg", "width" => 1, "height" => 30))), "html", null, true);
            echo "
\t<br/><div style=\"font-size:8px;margin-top:-3px;\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["device"]) ? $context["device"] : null), "code", array()), "html", null, true);
            echo "</div>
\t
\t\t
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "CrcReservBundle:Device:print_label.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  68 => 22,  65 => 21,  63 => 20,  60 => 19,  53 => 15,  48 => 13,  45 => 12,  43 => 11,  40 => 10,  33 => 6,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
