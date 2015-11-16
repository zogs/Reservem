<?php

/* :Form:fields.html.twig */
class __TwigTemplate_8ed306fdab28f23442f44166e2cb45ac7463ebd4459e2c2fc4a1751186d735a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_row', $context, $blocks);
    }

    public function block_form_row($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "    <div class=\"control-group ";
        if (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "valid", array()) == false)) {
            echo "control-error";
        }
        echo " ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array(), "any", true, true)) {
            if (twig_in_filter("hide", $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "attr", array()), "class", array()))) {
                echo "hide";
            }
        }
        echo "\" id=\"control-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "name", array()), "html", null, true);
        echo "\">      \t
        ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'label', array("label_attr" => array("class" => "control-label")) + (twig_test_empty($_label_ = $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "label", array())) ? array() : array("label" => $_label_)));
        echo "
        <div class=\"controls\">
            ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "attr", array()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 7
            echo "                ";
            if (($context["key"] == "data-icon")) {
                // line 8
                echo "        \t   <i class=\"icon-form icon-";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"></i>
               ";
            }
            // line 10
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "          

        \t";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "  
        \t
            ";
        // line 15
        if (($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "valid", array()) == false)) {
            // line 16
            echo "                <div class=\"help-inline help-error\">";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
            echo "</div>      
            ";
        } else {
            // line 17
            echo "\t
                <div class=\"helper help-inline help-error hide\"></div>
            ";
        }
        // line 20
        echo "        </div>        
    </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return ":Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  90 => 20,  85 => 17,  79 => 16,  77 => 15,  72 => 13,  68 => 11,  62 => 10,  56 => 8,  53 => 7,  49 => 6,  44 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }
}
