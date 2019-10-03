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

/* material/index.html.twig */
class __TwigTemplate_b8ae867e402d41c8e7c0fc6460062db070694d8a2484831b0c3d2dbdfd911868 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "material/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "material/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "material/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Liste des produits
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <h1 class=\"text-center\">Liste des matériels</h1>

    <table class=\"table table-striped display\" id=\"table\">


        <thead>
            <tr class=\"text-uppercase\">
                <th scope=\"col\">#</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Prix</th>
                <th scope=\"col\">Quantité</th>
                <th scope=\"col\">Date d'ajout</th>
                <th scope=\"col\" class=\"text-center\">Gestion</th>

            </tr>
        </thead>

        <tbody>
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["materials"]) || array_key_exists("materials", $context) ? $context["materials"] : (function () { throw new RuntimeError('Variable "materials" does not exist.', 27, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["material"]) {
            // line 28
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["material"], "quantity", [], "any", false, false, false, 28) >= 1)) {
                // line 29
                echo "                    <tr>
                        <th scope=\"row\">
                            ";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "id", [], "any", false, false, false, 31), "html", null, true);
                echo "
                        </th>

                        <td>
                            ";
                // line 35
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "name", [], "any", false, false, false, 35), "html", null, true);
                echo "
                        </td>

                        <td>
                            ";
                // line 39
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "price", [], "any", false, false, false, 39), "html", null, true);
                echo "
                            €
                        </td>

                        <td>
                            ";
                // line 44
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "quantity", [], "any", false, false, false, 44), "html", null, true);
                echo "
                        </td>

                        <td>
                            ";
                // line 48
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "createdAt", [], "any", false, false, false, 48), "d-m-Y à H:i"), "html", null, true);
                echo "
                        </td>

                        <td
                            class=\"text-center\">
                            <!-- Bouton voir qui affiche la description du produit -->
                            <button class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#exampleModalCenter_";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "id", [], "any", false, false, false, 54), "html", null, true);
                echo "\">Voir</button>
                            <!-- Lien qui redirige vers le formulaire de modification -->
                            <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update", ["id" => twig_get_attribute($this->env, $this->source, $context["material"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                echo "\" title=\"Redirection vers le formulaire de modification\" class=\"btn btn-success\">Modifier</a>
                            <form method=\"POST\">
                                <input type=\"hidden\" name=\"id\" value=\"";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "id", [], "any", false, false, false, 58), "html", null, true);
                echo "\"/>
                                <button type=\"submit\" class=\"btn btn-primary\">Décrémenter -1</button>
                            </form>
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div class=\"modal fade\" id=\"exampleModalCenter_";
                // line 64
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "id", [], "any", false, false, false, 64), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">

                        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Informations supplémentaires :
                                        <br/>
                                        <strong>";
                // line 71
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "name", [], "any", false, false, false, 71), "html", null, true);
                echo "</strong>
                                    </h5>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\">&times;</span>
                                    </button>
                                </div>
                                <div class=\"modal-body\">
                                    ";
                // line 78
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["material"], "content", [], "any", false, false, false, 78), "html", null, true);
                echo "
                                </div>
                                <div class=\"modal-footer\">
                                    <a href=\"";
                // line 81
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("pdf", ["id" => twig_get_attribute($this->env, $this->source, $context["material"], "id", [], "any", false, false, false, 81)]), "html", null, true);
                echo "\" class=\"btn btn-danger\">Générer le détail du produit au format PDF</a>
                                </div>

                            </div>
                        </div>
                    </div>
                ";
            }
            // line 88
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['material'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "        </tbody>
    </table>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "material/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 89,  215 => 88,  205 => 81,  199 => 78,  189 => 71,  179 => 64,  170 => 58,  165 => 56,  160 => 54,  151 => 48,  144 => 44,  136 => 39,  129 => 35,  122 => 31,  118 => 29,  115 => 28,  111 => 27,  90 => 8,  80 => 7,  69 => 4,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}
    Liste des produits
{% endblock %}

{% block body %}

    <h1 class=\"text-center\">Liste des matériels</h1>

    <table class=\"table table-striped display\" id=\"table\">


        <thead>
            <tr class=\"text-uppercase\">
                <th scope=\"col\">#</th>
                <th scope=\"col\">Nom</th>
                <th scope=\"col\">Prix</th>
                <th scope=\"col\">Quantité</th>
                <th scope=\"col\">Date d'ajout</th>
                <th scope=\"col\" class=\"text-center\">Gestion</th>

            </tr>
        </thead>

        <tbody>
            {% for material in materials %}
                {% if material.quantity >= 1 %}
                    <tr>
                        <th scope=\"row\">
                            {{ material.id }}
                        </th>

                        <td>
                            {{ material.name }}
                        </td>

                        <td>
                            {{ material.price }}
                            €
                        </td>

                        <td>
                            {{ material.quantity }}
                        </td>

                        <td>
                            {{ material.createdAt | date('d-m-Y à H:i') }}
                        </td>

                        <td
                            class=\"text-center\">
                            <!-- Bouton voir qui affiche la description du produit -->
                            <button class=\"btn btn-info\" data-toggle=\"modal\" data-target=\"#exampleModalCenter_{{ material.id }}\">Voir</button>
                            <!-- Lien qui redirige vers le formulaire de modification -->
                            <a href=\"{{ path('update', {'id': material.id}) }}\" title=\"Redirection vers le formulaire de modification\" class=\"btn btn-success\">Modifier</a>
                            <form method=\"POST\">
                                <input type=\"hidden\" name=\"id\" value=\"{{ material.id }}\"/>
                                <button type=\"submit\" class=\"btn btn-primary\">Décrémenter -1</button>
                            </form>
                        </td>
                    </tr>
                    <!-- Modal -->
                    <div class=\"modal fade\" id=\"exampleModalCenter_{{ material.id }}\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\" aria-hidden=\"true\">

                        <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">
                            <div class=\"modal-content\">
                                <div class=\"modal-header\">
                                    <h5 class=\"modal-title\" id=\"exampleModalCenterTitle\">Informations supplémentaires :
                                        <br/>
                                        <strong>{{ material.name }}</strong>
                                    </h5>
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                                        <span aria-hidden=\"true\">&times;</span>
                                    </button>
                                </div>
                                <div class=\"modal-body\">
                                    {{ material.content }}
                                </div>
                                <div class=\"modal-footer\">
                                    <a href=\"{{ path('pdf', {'id': material.id }) }}\" class=\"btn btn-danger\">Générer le détail du produit au format PDF</a>
                                </div>

                            </div>
                        </div>
                    </div>
                {% endif %}
            {% endfor %}
        </tbody>
    </table>


{% endblock %}
", "material/index.html.twig", "E:\\laragon\\www\\exercice_symfony\\templates\\material\\index.html.twig");
    }
}
