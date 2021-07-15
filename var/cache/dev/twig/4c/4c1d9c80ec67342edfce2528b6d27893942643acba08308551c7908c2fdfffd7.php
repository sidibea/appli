<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* NBAdminBundle:bien:index.html.twig */
class __TwigTemplate_11361b523a4fb159ff3037223377a568392a257161ce719f74e5b863ecb9b208 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "NBAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "NBAdminBundle:bien:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "NBAdminBundle:bien:index.html.twig"));

        $this->parent = $this->loadTemplate("NBAdminBundle::layout.html.twig", "NBAdminBundle:bien:index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " Liste des agents immobiliers ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"col-md-12\">
        <div class=\"ms-panel\">
            <div class=\"ms-panel-header\">
                <div class=\"d-flex justify-content-between\">
                    <div class=\"ms-header-text\">
                        <h6>Liste des agents Immobiliers</h6>
                    </div>
                    <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_bien_new");
        echo "\" class=\"ms-btn ms-btn-icon btn-primary ms-graph-metrics\"><i class=\"fa fa-plus\"></i> </a>
                </div>
            </div>
            <div class=\"ms-panel-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\">
                        <thead>
                        <tr>
                            <th scope=\"col\">#</th>
                            <th scope=\"col\">Identifiants</th>
                            <th scope=\"col\">Type</th>
                            <th scope=\"col\">Agence</th>
                            <th scope=\"col\">Statut</th>
                            <th scope=\"col\">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["list"] ?? $this->getContext($context, "list")));
        foreach ($context['_seq'] as $context["_key"] => $context["a"]) {
            // line 31
            echo "                            <tr>
                                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "id", []), "html", null, true);
            echo "</td>
                                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "identifiant", []), "html", null, true);
            echo "</td>
                                <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["a"], "typeDeBien", []), "html", null, true);
            echo "</td>
                                <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["a"], "proprietaire", []), "nom", []), "html", null, true);
            echo "</td>
                                <td>Libre</td>
                                <td>
                                    <a class=\"ms-btn-icon btn-square btn-primary\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_bien_edit", ["id" => $this->getAttribute($context["a"], "id", [])]), "html", null, true);
            echo "\"><i class=\"fa fa-pencil-alt\"></i> </a>
                                    <a onclick=\"return confirm('Etes vous sur de vouloir supprimer cet element ?')\"  class=\"ms-btn-icon btn-square btn-danger\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_agent_delete", ["id" => $this->getAttribute($context["a"], "id", [])]), "html", null, true);
            echo "\"><i class=\"fa fa-trash\"></i> </a>
                                    <a   class=\"ms-btn-icon btn-square btn-success\" href=\"\"><i class=\"fa fa-eye\"></i> </a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['a'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "NBAdminBundle:bien:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 44,  137 => 39,  133 => 38,  127 => 35,  123 => 34,  119 => 33,  115 => 32,  112 => 31,  108 => 30,  88 => 13,  79 => 6,  70 => 5,  52 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"NBAdminBundle::layout.html.twig\" %}

{% block title %} Liste des agents immobiliers {% endblock %}

{% block content %}
    <div class=\"col-md-12\">
        <div class=\"ms-panel\">
            <div class=\"ms-panel-header\">
                <div class=\"d-flex justify-content-between\">
                    <div class=\"ms-header-text\">
                        <h6>Liste des agents Immobiliers</h6>
                    </div>
                    <a href=\"{{ path('admin_bien_new') }}\" class=\"ms-btn ms-btn-icon btn-primary ms-graph-metrics\"><i class=\"fa fa-plus\"></i> </a>
                </div>
            </div>
            <div class=\"ms-panel-body\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered\">
                        <thead>
                        <tr>
                            <th scope=\"col\">#</th>
                            <th scope=\"col\">Identifiants</th>
                            <th scope=\"col\">Type</th>
                            <th scope=\"col\">Agence</th>
                            <th scope=\"col\">Statut</th>
                            <th scope=\"col\">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        {% for a in list %}
                            <tr>
                                <td>{{ a.id }}</td>
                                <td>{{ a.identifiant }}</td>
                                <td>{{ a.typeDeBien }}</td>
                                <td>{{ a.proprietaire.nom }}</td>
                                <td>Libre</td>
                                <td>
                                    <a class=\"ms-btn-icon btn-square btn-primary\" href=\"{{ path('admin_bien_edit', { 'id': a.id }) }}\"><i class=\"fa fa-pencil-alt\"></i> </a>
                                    <a onclick=\"return confirm('Etes vous sur de vouloir supprimer cet element ?')\"  class=\"ms-btn-icon btn-square btn-danger\" href=\"{{ path('admin_agent_delete', { 'id': a.id }) }}\"><i class=\"fa fa-trash\"></i> </a>
                                    <a   class=\"ms-btn-icon btn-square btn-success\" href=\"\"><i class=\"fa fa-eye\"></i> </a>
                                </td>
                            </tr>
                        {% endfor %}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "NBAdminBundle:bien:index.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/louanse/src/NB/AdminBundle/Resources/views/bien/index.html.twig");
    }
}
