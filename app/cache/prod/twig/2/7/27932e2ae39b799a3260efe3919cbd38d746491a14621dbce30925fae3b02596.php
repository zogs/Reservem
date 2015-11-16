<?php

/* ZogsWorldBundle:Form:location_selectboxs.html.twig */
class __TwigTemplate_27932e2ae39b799a3260efe3919cbd38d746491a14621dbce30925fae3b02596 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'location_selectboxs_widget' => array($this, 'block_location_selectboxs_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('location_selectboxs_widget', $context, $blocks);
    }

    public function block_location_selectboxs_widget($context, array $blocks = array())
    {
        // line 2
        echo "     ";
        ob_start();
        // line 3
        echo "        ";
        $context["url"] = $this->env->getExtension('routing')->getPath("world_nextlevel");
        // line 4
        echo "
\t\t ";
        // line 5
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "id", array()), 'widget', array("id" => "location_id_field"));
        echo "
        
         ";
        // line 7
        $this->loadTemplate("ZogsWorldBundle:Form:location_selectbox.html.twig", "ZogsWorldBundle:Form:location_selectboxs.html.twig", 7)->display(array_merge($context, array("form" => $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "country", array()), "level" => "country")));
        // line 8
        echo "         ";
        $this->loadTemplate("ZogsWorldBundle:Form:location_selectbox.html.twig", "ZogsWorldBundle:Form:location_selectboxs.html.twig", 8)->display(array_merge($context, array("form" => $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "region", array()), "level" => "region")));
        // line 9
        echo "         ";
        $this->loadTemplate("ZogsWorldBundle:Form:location_selectbox.html.twig", "ZogsWorldBundle:Form:location_selectboxs.html.twig", 9)->display(array_merge($context, array("form" => $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "departement", array()), "level" => "departement")));
        // line 10
        echo "         ";
        $this->loadTemplate("ZogsWorldBundle:Form:location_selectbox.html.twig", "ZogsWorldBundle:Form:location_selectboxs.html.twig", 10)->display(array_merge($context, array("form" => $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "district", array()), "level" => "district")));
        // line 11
        echo "         ";
        $this->loadTemplate("ZogsWorldBundle:Form:location_selectbox.html.twig", "ZogsWorldBundle:Form:location_selectboxs.html.twig", 11)->display(array_merge($context, array("form" => $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "division", array()), "level" => "division")));
        // line 12
        echo "         ";
        $this->loadTemplate("ZogsWorldBundle:Form:location_selectbox.html.twig", "ZogsWorldBundle:Form:location_selectboxs.html.twig", 12)->display(array_merge($context, array("form" => $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "city", array()), "level" => "city")));
        // line 13
        echo "
     ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "ZogsWorldBundle:Form:location_selectboxs.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  54 => 12,  51 => 11,  48 => 10,  45 => 9,  42 => 8,  40 => 7,  35 => 5,  32 => 4,  29 => 3,  26 => 2,  20 => 1,);
    }
}
