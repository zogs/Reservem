<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_417b19549ef51e52b436c09e8d1ac51d294499a7b31b8963c662168169ad2fc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_796cc3599525148bdcef28c6d50e8ece7587ba122059f4194a3c468af2f56190 = $this->env->getExtension("native_profiler");
        $__internal_796cc3599525148bdcef28c6d50e8ece7587ba122059f4194a3c468af2f56190->enter($__internal_796cc3599525148bdcef28c6d50e8ece7587ba122059f4194a3c468af2f56190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_796cc3599525148bdcef28c6d50e8ece7587ba122059f4194a3c468af2f56190->leave($__internal_796cc3599525148bdcef28c6d50e8ece7587ba122059f4194a3c468af2f56190_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a2b56f90df6d1f1b1a996a5678c72451ed35f74cbb106b51bb6ba26680efe37a = $this->env->getExtension("native_profiler");
        $__internal_a2b56f90df6d1f1b1a996a5678c72451ed35f74cbb106b51bb6ba26680efe37a->enter($__internal_a2b56f90df6d1f1b1a996a5678c72451ed35f74cbb106b51bb6ba26680efe37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a2b56f90df6d1f1b1a996a5678c72451ed35f74cbb106b51bb6ba26680efe37a->leave($__internal_a2b56f90df6d1f1b1a996a5678c72451ed35f74cbb106b51bb6ba26680efe37a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5dd65913a9a16c2b298174d8d50ff7864b0ca9db393ceb936cad5b8debec03fd = $this->env->getExtension("native_profiler");
        $__internal_5dd65913a9a16c2b298174d8d50ff7864b0ca9db393ceb936cad5b8debec03fd->enter($__internal_5dd65913a9a16c2b298174d8d50ff7864b0ca9db393ceb936cad5b8debec03fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5dd65913a9a16c2b298174d8d50ff7864b0ca9db393ceb936cad5b8debec03fd->leave($__internal_5dd65913a9a16c2b298174d8d50ff7864b0ca9db393ceb936cad5b8debec03fd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0fe8c74b9aab46f9098e239bf9720f088a672c9acdddd5e76b4e883363680d5 = $this->env->getExtension("native_profiler");
        $__internal_c0fe8c74b9aab46f9098e239bf9720f088a672c9acdddd5e76b4e883363680d5->enter($__internal_c0fe8c74b9aab46f9098e239bf9720f088a672c9acdddd5e76b4e883363680d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_c0fe8c74b9aab46f9098e239bf9720f088a672c9acdddd5e76b4e883363680d5->leave($__internal_c0fe8c74b9aab46f9098e239bf9720f088a672c9acdddd5e76b4e883363680d5_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
