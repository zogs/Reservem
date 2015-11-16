<?php

/* :Form:buttons.html.twig */
class __TwigTemplate_5eed6bcc14239449cef048454b69fadd9a91b55fd17713e0aa7a3bc1d550d18e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'button_row' => array($this, 'block_button_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('button_row', $context, $blocks);
    }

    public function block_button_row($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "    <div class=\"control-group\" id=\"control-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "vars", array()), "name", array()), "html", null, true);
        echo "\">      \t
        <label for=\"\" class=\"control-label\"></label>
        <div class=\"controls\">
        \t";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "          \t    
        </div>        
    </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return ":Form:buttons.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  29 => 3,  26 => 2,  20 => 1,);
    }
}
