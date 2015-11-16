<?php

/* ::menu.html.twig */
class __TwigTemplate_6b4e7371cfdd9decb2e2b8858069c8740470d45cb31866e95a85a175838ed389 extends Twig_Template
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
        // line 1
        echo "<nav class=\"navbar navbar-default navbar-static-top menu-desktop\" id=\"menu-desktop\">
    <div class=\"container-fluid\">
        <div class=\"navbar-header\">
            <a class=\"navbar-brand\" href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("crc_reserv_home");
        echo "\">Reservem</a>
        </div>

        <div class=\"collapse navbar-collapse\" id=\"navbar-main\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("crc_reserv_home");
        echo "\">Accueil </a></li>
                ";
        // line 10
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) && ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED") == true))) {
            // line 11
            echo "                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("crc_reserv_my_reservations");
            echo "\">Mes réservations</a></li>
                
                ";
        }
        // line 14
        echo "
                ";
        // line 15
        if ((null === $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
            // line 16
            echo "                 <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"> Connexion</a></li>
                <li><a href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\"> Inscription</a></li>
                ";
        }
        // line 19
        echo "
            </ul>
           
           ";
        // line 22
        if ( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
            // line 23
            echo "            <ul class=\"nav navbar-nav navbar-right\">    
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-expanded=\"false\">";
            // line 25
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array())), "html", null, true);
            echo " :: Mon compte <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\" role=\"menu\">
                        <li><a href=\"";
            // line 27
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">Paramètres</a></li>
                        ";
            // line 28
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 29
                echo "                        <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("sonata_admin_dashboard");
                echo "\"> Administration</a></li>
                        ";
            }
            // line 31
            echo "                        ";
            if ($this->env->getExtension('security')->isGranted("ROLE_PREVIOUS_ADMIN")) {
                // line 32
                echo "                        <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("sonata_admin_dashboard", array("_switch_user" => "_exit"));
                echo "\"> Stop incarnation</a></li>
                        ";
            }
            // line 33
            echo " 
                        <li class=\"divider\"></li>
                        <li><a href=\"";
            // line 35
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"> Déconnexion</a></li>                    
                    </ul>
                </li>               
            </ul>
            ";
        }
        // line 40
        echo "        </div>
                ";
        // line 42
        echo "    </div>
    
</nav>";
    }

    public function getTemplateName()
    {
        return "::menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 42,  109 => 40,  101 => 35,  97 => 33,  91 => 32,  88 => 31,  82 => 29,  80 => 28,  76 => 27,  71 => 25,  67 => 23,  65 => 22,  60 => 19,  55 => 17,  50 => 16,  48 => 15,  45 => 14,  38 => 11,  36 => 10,  32 => 9,  24 => 4,  19 => 1,);
    }
}
