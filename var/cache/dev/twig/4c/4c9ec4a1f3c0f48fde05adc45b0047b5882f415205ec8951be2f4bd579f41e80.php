<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* pdf/material_information.html.twig */
class __TwigTemplate_2774e82548c5d20755a82158ef3a5cf0bcfb61430754ba90a70c9cc56b4b26ca extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/material_information.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/material_information.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Détail du produit - PDF</title>
    </head>
    <body>
        <h2>Détail du produit</h2>


        <b>Identifiant :</b>
        ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11), "html", null, true);
        echo "
        <br/>
        <b>Nom :</b>


        ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
        echo "
        <br/>
        <b>Description :</b>


        ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 21, $this->source); })()), "content", [], "any", false, false, false, 21), "html", null, true);
        echo "
        <br/>
        <b>Prix :</b>


        ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 26, $this->source); })()), "price", [], "any", false, false, false, 26), "html", null, true);
        echo "
        €

        <br/>
        <b>Quantité :</b>


        ";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 33, $this->source); })()), "quantity", [], "any", false, false, false, 33), "html", null, true);
        echo "
        <br/>
        <b>Date d'ajout :</b>

        ";
        // line 37
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["material"]) || array_key_exists("material", $context) ? $context["material"] : (function () { throw new RuntimeError('Variable "material" does not exist.', 37, $this->source); })()), "createdAt", [], "any", false, false, false, 37), "d-m-Y à H:i"), "html", null, true);
        echo "
        <br/>


    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "pdf/material_information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 37,  89 => 33,  79 => 26,  71 => 21,  63 => 16,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <title>Détail du produit - PDF</title>
    </head>
    <body>
        <h2>Détail du produit</h2>


        <b>Identifiant :</b>
        {{ material.id }}
        <br/>
        <b>Nom :</b>


        {{ material.name }}
        <br/>
        <b>Description :</b>


        {{ material.content }}
        <br/>
        <b>Prix :</b>


        {{ material.price }}
        €

        <br/>
        <b>Quantité :</b>


        {{ material.quantity }}
        <br/>
        <b>Date d'ajout :</b>

        {{ material.createdAt | date(\"d-m-Y à H:i\") }}
        <br/>


    </body>
</html>
", "pdf/material_information.html.twig", "E:\\laragon\\www\\exercice_symfony\\templates\\pdf\\material_information.html.twig");
    }
}
