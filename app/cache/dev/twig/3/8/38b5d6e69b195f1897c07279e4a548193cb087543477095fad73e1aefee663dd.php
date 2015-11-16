<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_38b5d6e69b195f1897c07279e4a548193cb087543477095fad73e1aefee663dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":layout:centered.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":layout:centered.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58e2926f9b7b5f36423151d6f3637f9884a9c860fb021ca8df778c3c76b0b18d = $this->env->getExtension("native_profiler");
        $__internal_58e2926f9b7b5f36423151d6f3637f9884a9c860fb021ca8df778c3c76b0b18d->enter($__internal_58e2926f9b7b5f36423151d6f3637f9884a9c860fb021ca8df778c3c76b0b18d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58e2926f9b7b5f36423151d6f3637f9884a9c860fb021ca8df778c3c76b0b18d->leave($__internal_58e2926f9b7b5f36423151d6f3637f9884a9c860fb021ca8df778c3c76b0b18d_prof);

    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_7e4a770b2f5ad5ec1240d6178b57ab5a06a3272deef8bca9f65cf46d03c51e9b = $this->env->getExtension("native_profiler");
        $__internal_7e4a770b2f5ad5ec1240d6178b57ab5a06a3272deef8bca9f65cf46d03c51e9b->enter($__internal_7e4a770b2f5ad5ec1240d6178b57ab5a06a3272deef8bca9f65cf46d03c51e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 8
        echo "
\t<div class=\"white-sheet connexion\">
\t\t<div class=\"page-header\">
\t\t  <h1><span class=\"glyphicon glyphicon-star-empty\" aria-hidden=\"true\"></span>Connexion </h1>
\t\t</div>

\t
\t\t";
        // line 15
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 16
            echo "\t\t\t";
            $context["message"] = $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security");
            // line 17
            echo "\t\t\t";
            $this->loadTemplate("ZogsFlashBundle:Notifications:one.html.twig", "FOSUserBundle:Security:login.html.twig", 17)->display(array_merge($context, array("type" => "error", "message" => (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "animated" => true)));
            echo "\t\t\t    
\t\t";
        } elseif ($this->getAttribute(        // line 18
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 19
            echo "\t\t\t";
            $this->loadTemplate("ZogsFlashBundle:Notifications:one.html.twig", "FOSUserBundle:Security:login.html.twig", 19)->display(array_merge($context, array("type" => "success", "message" => "Vous êtes connecté !", "animated" => false)));
            // line 20
            echo "\t\t";
        }
        // line 21
        echo "\t

\t\t";
        // line 23
        $this->loadTemplate("ZogsUserBundle:Security:login_form.html.twig", "FOSUserBundle:Security:login.html.twig", 23)->display($context);
        // line 24
        echo "


\t\t";
        // line 28
        echo "\t\t";
        // line 35
        echo "\t\t\t";
        // line 39
        echo "\t</div>\t

";
        
        $__internal_7e4a770b2f5ad5ec1240d6178b57ab5a06a3272deef8bca9f65cf46d03c51e9b->leave($__internal_7e4a770b2f5ad5ec1240d6178b57ab5a06a3272deef8bca9f65cf46d03c51e9b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 39,  80 => 35,  78 => 28,  73 => 24,  71 => 23,  67 => 21,  64 => 20,  61 => 19,  59 => 18,  54 => 17,  51 => 16,  49 => 15,  40 => 8,  34 => 7,  11 => 1,);
    }
}
