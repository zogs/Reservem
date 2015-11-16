<?php

/* :Form:field.html.twig */
class __TwigTemplate_3e5b3c2e8f27c74b9357c0d2807fef92eecf83e948004bd3ba82852179079a3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'file_widget' => array($this, 'block_file_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('file_widget', $context, $blocks);
    }

    public function block_file_widget($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "
    ";
        // line 4
        if ( !(null === (isset($context["image_url"]) ? $context["image_url"] : null))) {
            // line 5
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl((isset($context["image_url"]) ? $context["image_url"] : null)), "html", null, true);
            echo "\" alt=\"avatar\" />
    ";
        }
        // line 7
        echo "    ";
        $this->displayBlock("form_widget", $context, $blocks);
        echo "

    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return ":Form:field.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  34 => 5,  32 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }
}
