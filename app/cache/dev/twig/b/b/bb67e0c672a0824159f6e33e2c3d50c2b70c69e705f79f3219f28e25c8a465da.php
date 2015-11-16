<?php

/* CrcReservBundle:Default:accueil.html.twig */
class __TwigTemplate_bb67e0c672a0824159f6e33e2c3d50c2b70c69e705f79f3219f28e25c8a465da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CrcReservBundle:Layout:default.html.twig", "CrcReservBundle:Default:accueil.html.twig", 1);
        $this->blocks = array(
            'arianne' => array($this, 'block_arianne'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CrcReservBundle:Layout:default.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f7b922c4846ce31bc732521dd9ab67806e7d3c95ebf83d1ba3c2f319197ff18e = $this->env->getExtension("native_profiler");
        $__internal_f7b922c4846ce31bc732521dd9ab67806e7d3c95ebf83d1ba3c2f319197ff18e->enter($__internal_f7b922c4846ce31bc732521dd9ab67806e7d3c95ebf83d1ba3c2f319197ff18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CrcReservBundle:Default:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7b922c4846ce31bc732521dd9ab67806e7d3c95ebf83d1ba3c2f319197ff18e->leave($__internal_f7b922c4846ce31bc732521dd9ab67806e7d3c95ebf83d1ba3c2f319197ff18e_prof);

    }

    // line 3
    public function block_arianne($context, array $blocks = array())
    {
        $__internal_bb1a44f577e196e126365272508b6f28bb7b920946339a861feadd556c7180a3 = $this->env->getExtension("native_profiler");
        $__internal_bb1a44f577e196e126365272508b6f28bb7b920946339a861feadd556c7180a3->enter($__internal_bb1a44f577e196e126365272508b6f28bb7b920946339a861feadd556c7180a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "arianne"));

        // line 4
        echo "
";
        
        $__internal_bb1a44f577e196e126365272508b6f28bb7b920946339a861feadd556c7180a3->leave($__internal_bb1a44f577e196e126365272508b6f28bb7b920946339a861feadd556c7180a3_prof);

    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_5ce7eb05289d5be013736c7620553d159d10a1ce843a28c4759ac7e45ef460c9 = $this->env->getExtension("native_profiler");
        $__internal_5ce7eb05289d5be013736c7620553d159d10a1ce843a28c4759ac7e45ef460c9->enter($__internal_5ce7eb05289d5be013736c7620553d159d10a1ce843a28c4759ac7e45ef460c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 9
        echo "<h1>Bienvenue sur le site de réservation du CRC (en phase de test)</h1>

     ";
        // line 11
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED") == true))) {
            // line 12
            echo "            <h5>Bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo ", voici les composantes disponibles :</h5>
    ";
        } else {
            // line 14
            echo "        <p>
            <i>Veuillez vous <a href='";
            // line 15
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "'>connecter </a> pour accèder aux services.</i>
        </p>
        <p>
            <a class=\"btn btn-primary\" href='";
            // line 18
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "'>Connexion</a>
        </p>
    ";
        }
        // line 21
        echo "
  \t

            <table class=\"table table-striped\">
              <thead>
                <th>Nom</th>
                <th>Logo</th>
                <th>Membres</th>
                <th>Action</th>
              </thead>
  \t\t";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["departments"]) ? $context["departments"] : $this->getContext($context, "departments")));
        foreach ($context['_seq'] as $context["_key"] => $context["dpt"]) {
            // line 32
            echo "
                <tr>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["dpt"], "name", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            if ($this->getAttribute($context["dpt"], "logo", array())) {
                echo "<img class=\"dpt-logo-small\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($context["dpt"], "logo", array()), "getWebPath", array())), "html", null, true);
                echo "\">";
            }
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute($context["dpt"], "members", array())), "html", null, true);
            echo " membres</td>
                    <td>

                    ";
            // line 39
            if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED") == true))) {
                // line 40
                echo "                        ";
                if ($this->getAttribute($context["dpt"], "isMember", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())), "method")) {
                    // line 41
                    echo "                            <a class=\"btn btn-primary\" href='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_device_available", array("department" => $this->getAttribute($context["dpt"], "id", array()))), "html", null, true);
                    echo "'>Réserver</a>
                            <a class=\"btn btn-default\" href='";
                    // line 42
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_department_view_reserv", array("department" => $this->getAttribute($context["dpt"], "id", array()))), "html", null, true);
                    echo "'>Voir les réservations</a>
                            ";
                    // line 43
                    if ($this->getAttribute($context["dpt"], "isAdmin", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())), "method")) {
                        echo "<a class='btn btn-default' href='";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_department_admin", array("id" => $this->getAttribute($context["dpt"], "id", array()))), "html", null, true);
                        echo "'>Administrer</a>";
                    }
                    // line 44
                    echo "                            ";
                    if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                        // line 45
                        echo "                                              <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_department_edit", array("id" => $this->getAttribute($context["dpt"], "id", array()))), "html", null, true);
                        echo "\">Editer</a>
                                              <a href=\"";
                        // line 46
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_department_delete", array("id" => $this->getAttribute($context["dpt"], "id", array()))), "html", null, true);
                        echo "\">Supprimer</a>
                                        ";
                    }
                    // line 48
                    echo "                        ";
                } else {
                    // line 49
                    echo "                              <i>Vous n'êtes pas membre de cette composante</i>
                        ";
                }
                // line 51
                echo "                    ";
            }
            // line 52
            echo "                    </td>
                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dpt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                             ";
        // line 61
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) && ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED") == true))) {
            // line 62
            echo "                                <a class=\"fright clearfix btn btn-primary\" href='";
            echo $this->env->getExtension('routing')->getPath("crc_reserv_my_reservations");
            echo "'>Voir mes réservations</a>
                            ";
        } else {
            // line 64
            echo "                                <a class=\"btn btn-primary\" href='";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "'>Connexion</a>
                            ";
        }
        // line 66
        echo "                            </td>
                    </tr>
      </table>


";
        
        $__internal_5ce7eb05289d5be013736c7620553d159d10a1ce843a28c4759ac7e45ef460c9->leave($__internal_5ce7eb05289d5be013736c7620553d159d10a1ce843a28c4759ac7e45ef460c9_prof);

    }

    public function getTemplateName()
    {
        return "CrcReservBundle:Default:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 66,  187 => 64,  181 => 62,  179 => 61,  172 => 56,  163 => 52,  160 => 51,  156 => 49,  153 => 48,  148 => 46,  143 => 45,  140 => 44,  134 => 43,  130 => 42,  125 => 41,  122 => 40,  120 => 39,  114 => 36,  106 => 35,  102 => 34,  98 => 32,  94 => 31,  82 => 21,  76 => 18,  70 => 15,  67 => 14,  61 => 12,  59 => 11,  55 => 9,  49 => 7,  41 => 4,  35 => 3,  11 => 1,);
    }
}
