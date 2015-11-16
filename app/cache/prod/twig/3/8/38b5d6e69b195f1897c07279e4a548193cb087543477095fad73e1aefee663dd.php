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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        // line 8
        echo "
\t<div class=\"white-sheet connexion\">
\t\t<div class=\"page-header\">
\t\t  <h1><span class=\"glyphicon glyphicon-star-empty\" aria-hidden=\"true\"></span>Connexion </h1>
\t\t</div>

\t
\t\t";
        // line 15
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 16
            echo "\t\t\t";
            $context["message"] = $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security");
            // line 17
            echo "\t\t\t";
            $this->loadTemplate("ZogsFlashBundle:Notifications:one.html.twig", "FOSUserBundle:Security:login.html.twig", 17)->display(array_merge($context, array("type" => "error", "message" => (isset($context["message"]) ? $context["message"] : null), "animated" => true)));
            echo "\t\t\t    
\t\t";
        } elseif ($this->getAttribute(        // line 18
(isset($context["app"]) ? $context["app"] : null), "user", array())) {
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
        return array (  73 => 39,  71 => 35,  69 => 28,  64 => 24,  62 => 23,  58 => 21,  55 => 20,  52 => 19,  50 => 18,  45 => 17,  42 => 16,  40 => 15,  31 => 8,  28 => 7,  11 => 1,);
    }
}
