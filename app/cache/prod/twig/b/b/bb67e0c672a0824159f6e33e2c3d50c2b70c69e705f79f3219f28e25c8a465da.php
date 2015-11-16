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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_arianne($context, array $blocks = array())
    {
        // line 4
        echo "
";
    }

    // line 7
    public function block_page_content($context, array $blocks = array())
    {
        // line 9
        echo "<h1>Bienvenue sur le site de réservation du CRC (en phase de test)</h1>

     ";
        // line 11
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) && ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED") == true))) {
            // line 12
            echo "            <h5>Bonjour ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable((isset($context["departments"]) ? $context["departments"] : null));
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
            if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) && ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED") == true))) {
                // line 40
                echo "                        ";
                if ($this->getAttribute($context["dpt"], "isMember", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())), "method")) {
                    // line 41
                    echo "                            <a class=\"btn btn-primary\" href='";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_device_available", array("department" => $this->getAttribute($context["dpt"], "id", array()))), "html", null, true);
                    echo "'>Réserver</a>
                            ";
                    // line 42
                    if ($this->getAttribute($context["dpt"], "isAdmin", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())), "method")) {
                        echo "<a class='btn btn-default' href='";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_department_admin", array("id" => $this->getAttribute($context["dpt"], "id", array()))), "html", null, true);
                        echo "'>Administrer</a>";
                    }
                    // line 43
                    echo "                            ";
                    if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                        // line 44
                        echo "                                              <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_department_edit", array("id" => $this->getAttribute($context["dpt"], "id", array()))), "html", null, true);
                        echo "\">Editer</a>
                                              <a href=\"";
                        // line 45
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("crc_reserv_department_delete", array("id" => $this->getAttribute($context["dpt"], "id", array()))), "html", null, true);
                        echo "\">Supprimer</a>
                                        ";
                    }
                    // line 47
                    echo "                        ";
                } else {
                    // line 48
                    echo "                              <i>Vous n'êtes pas membre de cette composante</i>
                        ";
                }
                // line 50
                echo "                    ";
            }
            // line 51
            echo "                    </td>
                </tr>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dpt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                             ";
        // line 60
        if (( !(null === $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) && ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED") == true))) {
            // line 61
            echo "                                <a class=\"fright clearfix btn btn-primary\" href='";
            echo $this->env->getExtension('routing')->getPath("crc_reserv_my_reservations");
            echo "'>Voir mes réservations</a>
                            ";
        } else {
            // line 63
            echo "                                <a class=\"btn btn-primary\" href='";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "'>Connexion</a>
                            ";
        }
        // line 65
        echo "                            </td>
                    </tr>
      </table>


";
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
        return array (  174 => 65,  168 => 63,  162 => 61,  160 => 60,  153 => 55,  144 => 51,  141 => 50,  137 => 48,  134 => 47,  129 => 45,  124 => 44,  121 => 43,  115 => 42,  110 => 41,  107 => 40,  105 => 39,  99 => 36,  91 => 35,  87 => 34,  83 => 32,  79 => 31,  67 => 21,  61 => 18,  55 => 15,  52 => 14,  46 => 12,  44 => 11,  40 => 9,  37 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
