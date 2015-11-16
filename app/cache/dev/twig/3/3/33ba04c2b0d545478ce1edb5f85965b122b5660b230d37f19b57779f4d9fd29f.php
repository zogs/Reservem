<?php

/* ::base.html.twig */
class __TwigTemplate_33ba04c2b0d545478ce1edb5f85965b122b5660b230d37f19b57779f4d9fd29f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navbar' => array($this, 'block_navbar'),
            'flash' => array($this, 'block_flash'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
            'document_ready' => array($this, 'block_document_ready'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8d0c4ebef6e489fae0e7ba6ac35aad1dc53be132b7d0386f2750f458847e441f = $this->env->getExtension("native_profiler");
        $__internal_8d0c4ebef6e489fae0e7ba6ac35aad1dc53be132b7d0386f2750f458847e441f->enter($__internal_8d0c4ebef6e489fae0e7ba6ac35aad1dc53be132b7d0386f2750f458847e441f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\">

    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"description\"content=\"\" />
        <meta name=\"keywords\" content=\"\" />
        <meta name=\"robots\" content=\"index,follow\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=3\">
        <meta http-equip=\"cache-control\" content=\"no-cache\">

        <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo " 

    </head>


    <body>

        <div class=\"html-container\"> ";
        // line 38
        echo "        

            ";
        // line 40
        $this->displayBlock('navbar', $context, $blocks);
        // line 44
        echo "

            <div class=\"container-fluid container-main\">

                ";
        // line 48
        $this->displayBlock('flash', $context, $blocks);
        // line 51
        echo "
                ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "            </div>

            ";
        // line 56
        $this->displayBlock('footer', $context, $blocks);
        // line 59
        echo "

        </div> ";
        // line 62
        echo "


        ";
        // line 65
        $this->displayBlock('javascripts', $context, $blocks);
        // line 91
        echo "

        <script type=\"text/javascript\">
            \$(document).ready(function() {
                ";
        // line 95
        $this->displayBlock('document_ready', $context, $blocks);
        // line 96
        echo "            });
        </script>
    </body>
</html>
";
        
        $__internal_8d0c4ebef6e489fae0e7ba6ac35aad1dc53be132b7d0386f2750f458847e441f->leave($__internal_8d0c4ebef6e489fae0e7ba6ac35aad1dc53be132b7d0386f2750f458847e441f_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_b98e6b11820d7ddb468aa054f7bea3a5a715454239158462a87b735a6e8afb37 = $this->env->getExtension("native_profiler");
        $__internal_b98e6b11820d7ddb468aa054f7bea3a5a715454239158462a87b735a6e8afb37->enter($__internal_b98e6b11820d7ddb468aa054f7bea3a5a715454239158462a87b735a6e8afb37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Reservation UB";
        
        $__internal_b98e6b11820d7ddb468aa054f7bea3a5a715454239158462a87b735a6e8afb37->leave($__internal_b98e6b11820d7ddb468aa054f7bea3a5a715454239158462a87b735a6e8afb37_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_550f802c635df7fb67f3da655f4febd7ae6cacddf63e91b84a4344e231cd4d58 = $this->env->getExtension("native_profiler");
        $__internal_550f802c635df7fb67f3da655f4febd7ae6cacddf63e91b84a4344e231cd4d58->enter($__internal_550f802c635df7fb67f3da655f4febd7ae6cacddf63e91b84a4344e231cd4d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "           ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "25d0ce2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_25d0ce2_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/25d0ce2_select2_1.css");
            // line 28
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "25d0ce2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_25d0ce2_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/25d0ce2_bootstrap-tagsinput_2.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "25d0ce2_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_25d0ce2_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/25d0ce2_jquery.datetimepicker_3.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "25d0ce2_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_25d0ce2_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/25d0ce2_ui.dropdownchecklist.standalone_4.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "25d0ce2_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_25d0ce2_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/25d0ce2_jquery.mmenu_5.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "25d0ce2_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_25d0ce2_5") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/25d0ce2_footer-distributed-with-contact-form_6.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "25d0ce2_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_25d0ce2_6") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/25d0ce2_bootstrap_7.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "25d0ce2_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_25d0ce2_7") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/25d0ce2_default_8.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
            // asset "25d0ce2_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_25d0ce2_8") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/25d0ce2_style_9.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        } else {
            // asset "25d0ce2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_25d0ce2") : $this->env->getExtension('asset')->getAssetUrl("_controller/css/25d0ce2.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" />
            ";
        }
        unset($context["asset_url"]);
        // line 29
        echo "  
        ";
        
        $__internal_550f802c635df7fb67f3da655f4febd7ae6cacddf63e91b84a4344e231cd4d58->leave($__internal_550f802c635df7fb67f3da655f4febd7ae6cacddf63e91b84a4344e231cd4d58_prof);

    }

    // line 40
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_b7ec5ab98ff0b5ed0f5258fcd199612ed25f543af19c2c7fb0d311d550887bf6 = $this->env->getExtension("native_profiler");
        $__internal_b7ec5ab98ff0b5ed0f5258fcd199612ed25f543af19c2c7fb0d311d550887bf6->enter($__internal_b7ec5ab98ff0b5ed0f5258fcd199612ed25f543af19c2c7fb0d311d550887bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        echo "              
                ";
        // line 41
        $this->loadTemplate("::menu.html.twig", "::base.html.twig", 41)->display($context);
        // line 42
        echo "                ";
        // line 43
        echo "            ";
        
        $__internal_b7ec5ab98ff0b5ed0f5258fcd199612ed25f543af19c2c7fb0d311d550887bf6->leave($__internal_b7ec5ab98ff0b5ed0f5258fcd199612ed25f543af19c2c7fb0d311d550887bf6_prof);

    }

    // line 48
    public function block_flash($context, array $blocks = array())
    {
        $__internal_627e618c342b6a72bd41b0a0f720c1388c8f9a10fc248ac8b2e1e2da4726e467 = $this->env->getExtension("native_profiler");
        $__internal_627e618c342b6a72bd41b0a0f720c1388c8f9a10fc248ac8b2e1e2da4726e467->enter($__internal_627e618c342b6a72bd41b0a0f720c1388c8f9a10fc248ac8b2e1e2da4726e467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash"));

        // line 49
        echo "                    ";
        echo $this->env->getExtension('zogs_flashbag_extension')->renderAll();
        echo "
                ";
        
        $__internal_627e618c342b6a72bd41b0a0f720c1388c8f9a10fc248ac8b2e1e2da4726e467->leave($__internal_627e618c342b6a72bd41b0a0f720c1388c8f9a10fc248ac8b2e1e2da4726e467_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_3bb1eb1b37284ff5914c582ec6d1f40dd60f9ad2f72760ba1a2dc3ed7c858361 = $this->env->getExtension("native_profiler");
        $__internal_3bb1eb1b37284ff5914c582ec6d1f40dd60f9ad2f72760ba1a2dc3ed7c858361->enter($__internal_3bb1eb1b37284ff5914c582ec6d1f40dd60f9ad2f72760ba1a2dc3ed7c858361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "                ";
        
        $__internal_3bb1eb1b37284ff5914c582ec6d1f40dd60f9ad2f72760ba1a2dc3ed7c858361->leave($__internal_3bb1eb1b37284ff5914c582ec6d1f40dd60f9ad2f72760ba1a2dc3ed7c858361_prof);

    }

    // line 56
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6499d563bcb40a6d3a60d835b2c88d819f203e1129d64fdfa28194c047416893 = $this->env->getExtension("native_profiler");
        $__internal_6499d563bcb40a6d3a60d835b2c88d819f203e1129d64fdfa28194c047416893->enter($__internal_6499d563bcb40a6d3a60d835b2c88d819f203e1129d64fdfa28194c047416893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 57
        echo "                ";
        $this->loadTemplate("CrcReservBundle:Layout:footer.html.twig", "::base.html.twig", 57)->display($context);
        // line 58
        echo "            ";
        
        $__internal_6499d563bcb40a6d3a60d835b2c88d819f203e1129d64fdfa28194c047416893->leave($__internal_6499d563bcb40a6d3a60d835b2c88d819f203e1129d64fdfa28194c047416893_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_97811f4c9c97cdcd7c4a64370f6ec454ebdb0e696bb759385eeeede170adcdc1 = $this->env->getExtension("native_profiler");
        $__internal_97811f4c9c97cdcd7c4a64370f6ec454ebdb0e696bb759385eeeede170adcdc1->enter($__internal_97811f4c9c97cdcd7c4a64370f6ec454ebdb0e696bb759385eeeede170adcdc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 66
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "954944e_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_954944e_0") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/compiled/base_jquery_1.11.min_1.js");
            // line 88
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "954944e_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_954944e_1") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/compiled/base_jquery-ui.min_2.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "954944e_2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_954944e_2") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/compiled/base_ui.dropdownchecklist-1.4-min_3.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "954944e_3"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_954944e_3") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/compiled/base_php_functions_4.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "954944e_4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_954944e_4") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/compiled/base_handlebars-v2.0.0_5.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "954944e_5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_954944e_5") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/compiled/base_typeahead.bundle_6.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "954944e_6"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_954944e_6") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/compiled/base_select2.min_7.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "954944e_7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_954944e_7") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/compiled/base_select2_locale_fr_8.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "954944e_8"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_954944e_8") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/compiled/base_bootstrap-tagsinput_9.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "954944e_9"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_954944e_9") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/compiled/base_jquery.datetimepicker_10.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "954944e_10"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_954944e_10") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/compiled/base_jquery.timeago_11.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "954944e_11"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_954944e_11") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/compiled/base_jquery.mmenu.min_12.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "954944e_12"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_954944e_12") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/compiled/base_utils_13.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "954944e_13"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_954944e_13") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/compiled/base_bootstrap_14.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "954944e_14"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_954944e_14") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/compiled/base_part_15_userbundle_1.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "954944e_15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_954944e_15") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/compiled/base_part_16_worldbundle_1.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "954944e_16"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_954944e_16") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/compiled/base_jquery.scannerdetection_17.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
            // asset "954944e_17"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_954944e_17") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/compiled/base_main_18.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "954944e"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_954944e") : $this->env->getExtension('asset')->getAssetUrl("_controller/js/compiled/base.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 90
        echo "        ";
        
        $__internal_97811f4c9c97cdcd7c4a64370f6ec454ebdb0e696bb759385eeeede170adcdc1->leave($__internal_97811f4c9c97cdcd7c4a64370f6ec454ebdb0e696bb759385eeeede170adcdc1_prof);

    }

    // line 95
    public function block_document_ready($context, array $blocks = array())
    {
        $__internal_8a8138f0c25ef2d263306bcb379ae46c164a614e662c085d8f4f428e574c8dd7 = $this->env->getExtension("native_profiler");
        $__internal_8a8138f0c25ef2d263306bcb379ae46c164a614e662c085d8f4f428e574c8dd7->enter($__internal_8a8138f0c25ef2d263306bcb379ae46c164a614e662c085d8f4f428e574c8dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "document_ready"));

        
        $__internal_8a8138f0c25ef2d263306bcb379ae46c164a614e662c085d8f4f428e574c8dd7->leave($__internal_8a8138f0c25ef2d263306bcb379ae46c164a614e662c085d8f4f428e574c8dd7_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  406 => 95,  399 => 90,  283 => 88,  278 => 66,  272 => 65,  265 => 58,  262 => 57,  256 => 56,  249 => 53,  243 => 52,  233 => 49,  227 => 48,  220 => 43,  218 => 42,  216 => 41,  208 => 40,  200 => 29,  138 => 28,  133 => 16,  127 => 15,  115 => 13,  104 => 96,  102 => 95,  96 => 91,  94 => 65,  89 => 62,  85 => 59,  83 => 56,  79 => 54,  77 => 52,  74 => 51,  72 => 48,  66 => 44,  64 => 40,  60 => 38,  51 => 30,  49 => 15,  44 => 13,  30 => 1,);
    }
}
