<?php

/* CrcReservBundle:Layout:default.html.twig */
class __TwigTemplate_becc6e994e962a9364feb55adb49b227f833f81dd7a6746b4e37bc706c25af95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CrcReservBundle:Layout:default.html.twig", 1);
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
        $__internal_5683a78a82f6679c541f325245f6c6adc81820242d1f22c91cdbc4dde4bda1dd = $this->env->getExtension("native_profiler");
        $__internal_5683a78a82f6679c541f325245f6c6adc81820242d1f22c91cdbc4dde4bda1dd->enter($__internal_5683a78a82f6679c541f325245f6c6adc81820242d1f22c91cdbc4dde4bda1dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CrcReservBundle:Layout:default.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5683a78a82f6679c541f325245f6c6adc81820242d1f22c91cdbc4dde4bda1dd->leave($__internal_5683a78a82f6679c541f325245f6c6adc81820242d1f22c91cdbc4dde4bda1dd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_47ab003ff481e947a27f5008e4a00cf2858e9ec2dcc06aedba23cdfbc23fb645 = $this->env->getExtension("native_profiler");
        $__internal_47ab003ff481e947a27f5008e4a00cf2858e9ec2dcc06aedba23cdfbc23fb645->enter($__internal_47ab003ff481e947a27f5008e4a00cf2858e9ec2dcc06aedba23cdfbc23fb645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        echo "\t

\t<div class=\"container container-centered page-container\">

\t\t<div class=\"page_content\">

\t\t\t<div class=\"arianne\">";
        // line 9
        $this->displayBlock('arianne', $context, $blocks);
        echo "</div>
\t\t\t
\t\t\t<p>&nbsp;</p>
\t\t\t";
        // line 12
        $this->displayBlock('page_content', $context, $blocks);
        // line 14
        echo "
\t\t</div>
\t</div>

";
        
        $__internal_47ab003ff481e947a27f5008e4a00cf2858e9ec2dcc06aedba23cdfbc23fb645->leave($__internal_47ab003ff481e947a27f5008e4a00cf2858e9ec2dcc06aedba23cdfbc23fb645_prof);

    }

    // line 9
    public function block_arianne($context, array $blocks = array())
    {
        $__internal_1f30263fcf08533aa304d96fc164f9d25a1030475c621d350dd85985100c958b = $this->env->getExtension("native_profiler");
        $__internal_1f30263fcf08533aa304d96fc164f9d25a1030475c621d350dd85985100c958b->enter($__internal_1f30263fcf08533aa304d96fc164f9d25a1030475c621d350dd85985100c958b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "arianne"));

        echo "<a class=\"btn-arianne\" href=\"";
        echo $this->env->getExtension('routing')->getPath("crc_reserv_home");
        echo "\">Accueil</a>";
        
        $__internal_1f30263fcf08533aa304d96fc164f9d25a1030475c621d350dd85985100c958b->leave($__internal_1f30263fcf08533aa304d96fc164f9d25a1030475c621d350dd85985100c958b_prof);

    }

    // line 12
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_9ca038e34fd6accf9a9d8e6ebe4d451277162e9e4f23f7f7d9d29d74c2bd9c08 = $this->env->getExtension("native_profiler");
        $__internal_9ca038e34fd6accf9a9d8e6ebe4d451277162e9e4f23f7f7d9d29d74c2bd9c08->enter($__internal_9ca038e34fd6accf9a9d8e6ebe4d451277162e9e4f23f7f7d9d29d74c2bd9c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 13
        echo "\t\t\t";
        
        $__internal_9ca038e34fd6accf9a9d8e6ebe4d451277162e9e4f23f7f7d9d29d74c2bd9c08->leave($__internal_9ca038e34fd6accf9a9d8e6ebe4d451277162e9e4f23f7f7d9d29d74c2bd9c08_prof);

    }

    public function getTemplateName()
    {
        return "CrcReservBundle:Layout:default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 13,  82 => 12,  68 => 9,  57 => 14,  55 => 12,  49 => 9,  36 => 3,  11 => 1,);
    }
}
