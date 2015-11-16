<?php

/* ZogsUtilsBundle:Form:field_tags.html.twig */
class __TwigTemplate_c6246e8999169daaff00098fe347eb3db1afe4a7545438ef271cfece17a269ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'tags_widget' => array($this, 'block_tags_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('tags_widget', $context, $blocks);
    }

    public function block_tags_widget($context, array $blocks = array())
    {
        // line 4
        echo "    <input ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null), "html", null, true);
        echo "\" data-url-autocomplete=\"";
        echo twig_escape_filter($this->env, (isset($context["ajax_url"]) ? $context["ajax_url"] : null), "html", null, true);
        echo "\" data-prefech=\"";
        echo twig_escape_filter($this->env, (isset($context["prefetch"]) ? $context["prefetch"] : null), "html", null, true);
        echo "\" data-template-empty=\"";
        echo twig_escape_filter($this->env, (isset($context["empty_html"]) ? $context["empty_html"] : null), "html", null, true);
        echo "\" data-template-header=\"";
        echo twig_escape_filter($this->env, (isset($context["header_html"]) ? $context["header_html"] : null), "html", null, true);
        echo "\" data-template-footer=\"";
        echo twig_escape_filter($this->env, (isset($context["footer_html"]) ? $context["footer_html"] : null), "html", null, true);
        echo "\" data-trigger-length=\"";
        echo twig_escape_filter($this->env, (isset($context["trigger_length"]) ? $context["trigger_length"] : null), "html", null, true);
        echo "\"/>
    ";
    }

    public function getTemplateName()
    {
        return "ZogsUtilsBundle:Form:field_tags.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  23 => 3,  20 => 2,);
    }
}
