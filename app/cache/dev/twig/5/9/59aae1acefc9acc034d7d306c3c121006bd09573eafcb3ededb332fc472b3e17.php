<?php

/* :layout:centered.html.twig */
class __TwigTemplate_59aae1acefc9acc034d7d306c3c121006bd09573eafcb3ededb332fc472b3e17 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", ":layout:centered.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'arianne' => array($this, 'block_arianne'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c1de27369a8a0c70d6648580480182b572701237fef0a6e50c80659a063a96e = $this->env->getExtension("native_profiler");
        $__internal_2c1de27369a8a0c70d6648580480182b572701237fef0a6e50c80659a063a96e->enter($__internal_2c1de27369a8a0c70d6648580480182b572701237fef0a6e50c80659a063a96e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":layout:centered.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c1de27369a8a0c70d6648580480182b572701237fef0a6e50c80659a063a96e->leave($__internal_2c1de27369a8a0c70d6648580480182b572701237fef0a6e50c80659a063a96e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4bff9c0ac19dde23f543752d7703275027f3fd9e2a51ef51198daed617f8159 = $this->env->getExtension("native_profiler");
        $__internal_a4bff9c0ac19dde23f543752d7703275027f3fd9e2a51ef51198daed617f8159->enter($__internal_a4bff9c0ac19dde23f543752d7703275027f3fd9e2a51ef51198daed617f8159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "\t

\t<div class=\"container container-centered page-container\">

\t\t<div class=\"page_content\">

\t\t\t<p>";
        // line 9
        $this->displayBlock('arianne', $context, $blocks);
        echo "</p>
\t\t\t
\t\t\t";
        // line 11
        $this->displayBlock('page_content', $context, $blocks);
        // line 13
        echo "
\t\t</div>
\t</div>

";
        
        $__internal_a4bff9c0ac19dde23f543752d7703275027f3fd9e2a51ef51198daed617f8159->leave($__internal_a4bff9c0ac19dde23f543752d7703275027f3fd9e2a51ef51198daed617f8159_prof);

    }

    // line 9
    public function block_arianne($context, array $blocks = array())
    {
        $__internal_929b32c16eb7c16c459367f06c504491d3daadf011313de4e2452edb6d6fbc36 = $this->env->getExtension("native_profiler");
        $__internal_929b32c16eb7c16c459367f06c504491d3daadf011313de4e2452edb6d6fbc36->enter($__internal_929b32c16eb7c16c459367f06c504491d3daadf011313de4e2452edb6d6fbc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "arianne"));

        echo ":: ";
        
        $__internal_929b32c16eb7c16c459367f06c504491d3daadf011313de4e2452edb6d6fbc36->leave($__internal_929b32c16eb7c16c459367f06c504491d3daadf011313de4e2452edb6d6fbc36_prof);

    }

    // line 11
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_b6e68f9545dfe89ec9c6ab8a62b037d0d512019d30da49f11a8d44d8af0494ef = $this->env->getExtension("native_profiler");
        $__internal_b6e68f9545dfe89ec9c6ab8a62b037d0d512019d30da49f11a8d44d8af0494ef->enter($__internal_b6e68f9545dfe89ec9c6ab8a62b037d0d512019d30da49f11a8d44d8af0494ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 12
        echo "\t\t\t";
        
        $__internal_b6e68f9545dfe89ec9c6ab8a62b037d0d512019d30da49f11a8d44d8af0494ef->leave($__internal_b6e68f9545dfe89ec9c6ab8a62b037d0d512019d30da49f11a8d44d8af0494ef_prof);

    }

    public function getTemplateName()
    {
        return ":layout:centered.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 12,  79 => 11,  67 => 9,  56 => 13,  54 => 11,  49 => 9,  36 => 3,  11 => 1,);
    }
}
