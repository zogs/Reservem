<?php

/* ZogsUserBundle:Security:login_form.html.twig */
class __TwigTemplate_29697da1d9141d1753bf55c5265f8cc748a96aacb39b565add23e6c9d970e170 extends Twig_Template
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
        $__internal_0dd5e70c6d5400f3c7c11a3e7d0f0439835077f477d2d8ef4e965bd62deda8b6 = $this->env->getExtension("native_profiler");
        $__internal_0dd5e70c6d5400f3c7c11a3e7d0f0439835077f477d2d8ef4e965bd62deda8b6->enter($__internal_0dd5e70c6d5400f3c7c11a3e7d0f0439835077f477d2d8ef4e965bd62deda8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ZogsUserBundle:Security:login_form.html.twig"));

        // line 1
        echo "
";
        // line 3
        echo "
<form class=\"form form-ws label-hidden w50 fleft form-register\" action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">\t

\t
\t    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />\t

\t\t<p class=\"intro\"></p>

\t\t<div class=\"control-group\">
\t    \t<label class=\"control-label\" for=\"username\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t    \t<div class=\"controls\">
\t    \t\t<i class=\"icon-form icon-user\"></i>
\t    \t\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" placeholder=\"Nom d'utilisateur\" />    \t\t
\t    \t</div>
\t\t\t
\t\t</div>

\t\t<div class=\"control-group\">
\t\t\t<label class=\"control-label\" for=\"password\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
\t\t\t<div class=\"controls\">
\t\t\t\t<i class=\"icon-form icon-lock\"></i>
\t\t\t\t<input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" placeholder=\"Mot de passe\" />\t\t\t
\t\t\t</div>
\t\t\t
\t\t</div>

\t\t<div class=\"control-group\" style=\"margin-top:10px\">
\t\t    <label class=\"control-label\"></label>\t\t
\t\t    <div class=\"controls\">
\t\t    \t<label for=\"remember_me\" class=\"radio\">
\t\t    \t\t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
\t\t    \t\t<span>";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</span>
\t\t    \t</label>
\t\t    </div>
\t\t</div>

\t\t<div class=\"control-group control-submit\">\t  
\t\t\t<label class=\"control-label\"></label>\t  \t\t    
\t\t    <button type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary\" ><strong>";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</strong></button>
\t\t    <a class=\"btn btn-info\" href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\"><strong>Pas encore inscrit ?</strong></a>\t    \t\t\t
\t\t\t<a class=\"btn btn-warning\" href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\"><strong>Mot de passe oublié ?</strong></a>\t    \t\t\t\t\t\t
\t\t</div>

\t\t";
        // line 46
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method") != $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"))) {
            echo "   
\t\t    <input type=\"hidden\" name=\"_target_path\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "headers", array()), "get", array(0 => "referer"), "method"), "html", null, true);
            echo "\" />   
\t\t";
        }
        // line 49
        echo "\t\t
\t    
</form>

\t";
        
        $__internal_0dd5e70c6d5400f3c7c11a3e7d0f0439835077f477d2d8ef4e965bd62deda8b6->leave($__internal_0dd5e70c6d5400f3c7c11a3e7d0f0439835077f477d2d8ef4e965bd62deda8b6_prof);

    }

    public function getTemplateName()
    {
        return "ZogsUserBundle:Security:login_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 49,  101 => 47,  97 => 46,  91 => 43,  87 => 42,  83 => 41,  73 => 34,  57 => 21,  48 => 15,  42 => 12,  34 => 7,  28 => 4,  25 => 3,  22 => 1,);
    }
}
