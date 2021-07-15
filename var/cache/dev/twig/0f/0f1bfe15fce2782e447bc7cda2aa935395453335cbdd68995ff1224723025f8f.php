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

/* NBAdminBundle:bien:edit.html.twig */
class __TwigTemplate_24bb6675d693657533f157816582de46d11ae4c71fa3da72305737ed649ae1c7 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "NBAdminBundle:bien:edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "NBAdminBundle:bien:edit.html.twig"));

        $this->parent = $this->loadTemplate("NBAdminBundle::layout.html.twig", "NBAdminBundle:bien:edit.html.twig", 1);
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

        echo " Ajouter un bien immobilier ";
        
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
            ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', ["attr" => ["class" => "form-box"]]);
        echo "

            ";
        // line 11
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
            <!-- /.box-header -->
            <div class=\"ms-panel-body\">
                <blockquote>
                    <p>Veuillez remplir les champs ci-dessous pour ajouter un nouveau bien.<br>
                        Certaines informations sont reprises à titre indicatif dans la fiche produit et le flyer électronique.</p>
                </blockquote>

                <div class=\"nav-tabs-custom \">
                    <ul class=\"nav nav-tabs d-flex nav-justified mb-4\">
                        <li class=\"active\"><a href=\"#tab_1\" data-toggle=\"tab\"><b>INFORMATIONS GENERALES</b></a></li>
                        <li><a href=\"#tab_2\" data-toggle=\"tab\"><b>INFORMATIONS COMPLEMENTAIRES</b></a></li>
                        <li><a href=\"#tab_3\" data-toggle=\"tab\"><b>PHOTO</b></a></li>

                        <li class=\"pull-right\"><a href=\"#\" class=\"text-muted\"><i class=\"fa fa-gear\"></i></a></li>
                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"tab_1\">
                            <h4 class=\"form-box-header\">Informations generales</h4>

                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "proprietaire", []), 'label', ["label" => "Proprietaire *"]);
        echo "

                                    ";
        // line 36
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "proprietaire", []), 'errors');
        echo "
                                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "proprietaire", []), 'widget', ["attr" => ["class" => "form-control type", "placeholder" => "Autres informations"]]);
        echo "
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typeDeBien", []), 'label', ["label" => "Type de bien *"]);
        echo "

                                    ";
        // line 45
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typeDeBien", []), 'errors');
        echo "
                                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typeDeBien", []), 'widget', ["attr" => ["class" => "form-control type", "placeholder" => "Autres informations"]]);
        echo "
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "identifiant", []), 'label', ["label" => "Identifiant *"]);
        echo "

                                    ";
        // line 54
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "identifiant", []), 'errors');
        echo "
                                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "identifiant", []), 'widget', ["attr" => ["class" => "form-control type", "placeholder" => ""]]);
        echo "
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", []), 'label', ["label" => "Adresse *"]);
        echo "

                                    ";
        // line 63
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", []), 'errors');
        echo "
                                    ";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresse", []), 'widget', ["attr" => ["class" => "form-control type", "placeholder" => ""]]);
        echo "
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "batiment", []), 'label', ["label" => "Batiment "]);
        echo "

                                    ";
        // line 72
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "batiment", []), 'errors');
        echo "
                                    ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "batiment", []), 'widget', ["attr" => ["class" => "form-control type", "placeholder" => ""]]);
        echo "
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "escalier", []), 'label', ["label" => "Escalier"]);
        echo "

                                    ";
        // line 81
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "escalier", []), 'errors');
        echo "
                                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "escalier", []), 'widget', ["attr" => ["class" => "form-control type", "placeholder" => ""]]);
        echo "
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "etage", []), 'label', ["label" => "Etage"]);
        echo "

                                    ";
        // line 90
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "etage", []), 'errors');
        echo "
                                    ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "etage", []), 'widget', ["attr" => ["class" => "form-control type", "placeholder" => ""]]);
        echo "
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numPorte", []), 'label', ["label" => "N° de porte"]);
        echo "

                                    ";
        // line 99
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numPorte", []), 'errors');
        echo "
                                    ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "numPorte", []), 'widget', ["attr" => ["class" => "form-control type", "placeholder" => ""]]);
        echo "
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", []), 'label', ["label" => "Ville"]);
        echo "

                                    ";
        // line 108
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", []), 'errors');
        echo "
                                    ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", []), 'widget', ["attr" => ["class" => "form-control type", "placeholder" => ""]]);
        echo "
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quartier", []), 'label', ["label" => "Quartier"]);
        echo "

                                    ";
        // line 117
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quartier", []), 'errors');
        echo "
                                    ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "quartier", []), 'widget', ["attr" => ["class" => "form-control type", "placeholder" => ""]]);
        echo "
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "codePostal", []), 'label', ["label" => "Code postal"]);
        echo "

                                    ";
        // line 126
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "codePostal", []), 'errors');
        echo "
                                    ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "codePostal", []), 'widget', ["attr" => ["class" => "form-control type", "placeholder" => ""]]);
        echo "
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "superficie", []), 'label', ["label" => "Superficie m²"]);
        echo "

                                    ";
        // line 135
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "superficie", []), 'errors');
        echo "
                                    ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "superficie", []), 'widget', ["attr" => ["class" => "form-control type", "placeholder" => ""]]);
        echo "
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbreDePiece", []), 'label', ["label" => "Nombre de pièce"]);
        echo "

                                    ";
        // line 144
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbreDePiece", []), 'errors');
        echo "
                                    ";
        // line 145
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbreDePiece", []), 'widget', ["attr" => ["class" => "form-control type", "placeholder" => ""]]);
        echo "
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbreDeChambre", []), 'label', ["label" => "Nombre de chambre"]);
        echo "

                                    ";
        // line 153
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbreDeChambre", []), 'errors');
        echo "
                                    ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nbreDeChambre", []), 'widget', ["attr" => ["class" => "form-control type", "placeholder" => ""]]);
        echo "
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "anneeDeConstruction", []), 'label', ["label" => "Annee de construction"]);
        echo "

                                    ";
        // line 162
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "anneeDeConstruction", []), 'errors');
        echo "
                                    ";
        // line 163
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "anneeDeConstruction", []), 'widget', ["attr" => ["class" => "form-control type", "placeholder" => ""]]);
        echo "
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    ";
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", []), 'label', ["label" => "Description"]);
        echo "

                                    ";
        // line 171
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", []), 'errors');
        echo "
                                    ";
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "description", []), 'widget', ["attr" => ["class" => "form-control type", "placeholder" => ""]]);
        echo "
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    ";
        // line 177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "note", []), 'label', ["label" => "Note"]);
        echo "

                                    ";
        // line 180
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "note", []), 'errors');
        echo "
                                    ";
        // line 181
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "note", []), 'widget', ["attr" => ["class" => "form-control type", "placeholder" => ""]]);
        echo "
                                </div>
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                        <div class=\"tab-pane\" id=\"tab_2\">
                            <h4 class=\"form-box-header\">Informations locatives</h4>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    ";
        // line 190
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typeDeLocationPropose", []), 'label', ["label" => "Type de location proposé"]);
        echo "

                                    ";
        // line 193
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typeDeLocationPropose", []), 'errors');
        echo "
                                    ";
        // line 194
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typeDeLocationPropose", []), 'widget', ["attr" => ["class" => "form-control type", "placeholder" => ""]]);
        echo "
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    ";
        // line 199
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dureeMinimaleDeLocation", []), 'label', ["label" => "Durée minimale de location"]);
        echo "

                                    ";
        // line 202
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dureeMinimaleDeLocation", []), 'errors');
        echo "
                                    ";
        // line 203
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dureeMinimaleDeLocation", []), 'widget', ["attr" => ["class" => "form-control type", "placeholder" => ""]]);
        echo "
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    ";
        // line 208
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "loyerHc", []), 'label', ["label" => "Loyer HC"]);
        echo "

                                    ";
        // line 211
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "loyerHc", []), 'errors');
        echo "
                                    ";
        // line 212
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "loyerHc", []), 'widget', ["attr" => ["class" => "form-control type", "placeholder" => ""]]);
        echo "
                                    <span class=\"help-block\">Montant repris à titre indicatif dans la page de création de location et la fiche produit.</span>

                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    ";
        // line 219
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "charge", []), 'label', ["label" => "Charges"]);
        echo "

                                    ";
        // line 222
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "charge", []), 'errors');
        echo "
                                    ";
        // line 223
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "charge", []), 'widget', ["attr" => ["class" => "form-control type", "placeholder" => ""]]);
        echo "
                                    <span class=\"help-block\">Montant repris à titre indicatif dans la page de création de location et la fiche produit.</span>
                                </div>
                            </div>
                            <h4 class=\"form-box-header\">Informations complémentaires</h4>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    ";
        // line 230
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typeHabitat", []), 'label', ["label" => "Type d'habitat"]);
        echo "

                                    ";
        // line 233
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typeHabitat", []), 'errors');
        echo "
                                    ";
        // line 234
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "typeHabitat", []), 'widget', ["attr" => ["class" => "minimal", "placeholder" => ""]]);
        echo "
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    ";
        // line 239
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "regimeJuridique", []), 'label', ["label" => "Regime juridique de l'immeuble"]);
        echo "

                                    ";
        // line 242
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "regimeJuridique", []), 'errors');
        echo "
                                    ";
        // line 243
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "regimeJuridique", []), 'widget', ["attr" => ["class" => " minimal", "placeholder" => ""]]);
        echo "
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    ";
        // line 248
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "designationsDesParties", []), 'label', ["label" => "Désignation des parties et des équipements"]);
        echo "

                                    ";
        // line 251
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "designationsDesParties", []), 'errors');
        echo "
                                    ";
        // line 252
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "designationsDesParties", []), 'widget', ["attr" => ["class" => " minimal", "placeholder" => ""]]);
        echo "
                                </div>
                            </div>
                            <h4 class=\"form-box-header\">Centre d'impôts</h4>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    ";
        // line 258
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomDuCentreImpot", []), 'label', ["label" => "Nom du centre d'impôt"]);
        echo "

                                    ";
        // line 261
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomDuCentreImpot", []), 'errors');
        echo "
                                    ";
        // line 262
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nomDuCentreImpot", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => ""]]);
        echo "
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    ";
        // line 267
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresses", []), 'label', ["label" => "Adresse"]);
        echo "

                                    ";
        // line 270
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresses", []), 'errors');
        echo "
                                    ";
        // line 271
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "adresses", []), 'widget', ["attr" => ["class" => "form-control", "placeholder" => ""]]);
        echo "
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    ";
        // line 276
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", []), 'label', ["label" => "Ville"]);
        echo "

                                    ";
        // line 279
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", []), 'errors');
        echo "
                                    ";
        // line 280
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "ville", []), 'widget', ["attr" => ["class" => " form-control", "placeholder" => ""]]);
        echo "
                                </div>
                            </div>

                        </div>

                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>




            </div>
            <div class=\"box-footer\">
                <input type=\"submit\" class=\"btn btn-success\" value=\"Sauvegarder\">
                <input type=\"button\" class=\"btn\" value=\"Annuler\" >

            </div>
        </div>
        ";
        // line 301
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        echo "

        ";
        // line 304
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "NBAdminBundle:bien:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  630 => 304,  625 => 301,  601 => 280,  596 => 279,  591 => 276,  583 => 271,  578 => 270,  573 => 267,  565 => 262,  560 => 261,  555 => 258,  546 => 252,  541 => 251,  536 => 248,  528 => 243,  523 => 242,  518 => 239,  510 => 234,  505 => 233,  500 => 230,  490 => 223,  485 => 222,  480 => 219,  470 => 212,  465 => 211,  460 => 208,  452 => 203,  447 => 202,  442 => 199,  434 => 194,  429 => 193,  424 => 190,  412 => 181,  407 => 180,  402 => 177,  394 => 172,  389 => 171,  384 => 168,  376 => 163,  371 => 162,  366 => 159,  358 => 154,  353 => 153,  348 => 150,  340 => 145,  335 => 144,  330 => 141,  322 => 136,  317 => 135,  312 => 132,  304 => 127,  299 => 126,  294 => 123,  286 => 118,  281 => 117,  276 => 114,  268 => 109,  263 => 108,  258 => 105,  250 => 100,  245 => 99,  240 => 96,  232 => 91,  227 => 90,  222 => 87,  214 => 82,  209 => 81,  204 => 78,  196 => 73,  191 => 72,  186 => 69,  178 => 64,  173 => 63,  168 => 60,  160 => 55,  155 => 54,  150 => 51,  142 => 46,  137 => 45,  132 => 42,  124 => 37,  119 => 36,  114 => 33,  88 => 11,  83 => 8,  79 => 6,  70 => 5,  52 => 3,  30 => 1,);
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

{% block title %} Ajouter un bien immobilier {% endblock %}

{% block content %}
    <div class=\"col-md-12\">
        <div class=\"ms-panel\">
            {{ form_start(form, {'attr':{'class':'form-box'}}) }}

            {# Les erreurs générales du formulaire. #}
            {{ form_errors(form) }}
            <!-- /.box-header -->
            <div class=\"ms-panel-body\">
                <blockquote>
                    <p>Veuillez remplir les champs ci-dessous pour ajouter un nouveau bien.<br>
                        Certaines informations sont reprises à titre indicatif dans la fiche produit et le flyer électronique.</p>
                </blockquote>

                <div class=\"nav-tabs-custom \">
                    <ul class=\"nav nav-tabs d-flex nav-justified mb-4\">
                        <li class=\"active\"><a href=\"#tab_1\" data-toggle=\"tab\"><b>INFORMATIONS GENERALES</b></a></li>
                        <li><a href=\"#tab_2\" data-toggle=\"tab\"><b>INFORMATIONS COMPLEMENTAIRES</b></a></li>
                        <li><a href=\"#tab_3\" data-toggle=\"tab\"><b>PHOTO</b></a></li>

                        <li class=\"pull-right\"><a href=\"#\" class=\"text-muted\"><i class=\"fa fa-gear\"></i></a></li>
                    </ul>
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"tab_1\">
                            <h4 class=\"form-box-header\">Informations generales</h4>

                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    {{ form_label(form.proprietaire, \"Proprietaire *\") }}

                                    {# Affichage des erreurs pour ce champ précis. #}
                                    {{ form_errors(form.proprietaire) }}
                                    {{ form_widget(form.proprietaire, {'attr': {'class': 'form-control type', 'placeholder' : 'Autres informations' }}) }}
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    {{ form_label(form.typeDeBien, \"Type de bien *\") }}

                                    {# Affichage des erreurs pour ce champ précis. #}
                                    {{ form_errors(form.typeDeBien) }}
                                    {{ form_widget(form.typeDeBien, {'attr': {'class': 'form-control type', 'placeholder' : 'Autres informations' }}) }}
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    {{ form_label(form.identifiant, \"Identifiant *\") }}

                                    {# Affichage des erreurs pour ce champ précis. #}
                                    {{ form_errors(form.identifiant) }}
                                    {{ form_widget(form.identifiant, {'attr': {'class': 'form-control type', 'placeholder' : '' }}) }}
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    {{ form_label(form.adresse, \"Adresse *\") }}

                                    {# Affichage des erreurs pour ce champ précis. #}
                                    {{ form_errors(form.adresse) }}
                                    {{ form_widget(form.adresse, {'attr': {'class': 'form-control type', 'placeholder' : '' }}) }}
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    {{ form_label(form.batiment, \"Batiment \") }}

                                    {# Affichage des erreurs pour ce champ précis. #}
                                    {{ form_errors(form.batiment) }}
                                    {{ form_widget(form.batiment, {'attr': {'class': 'form-control type', 'placeholder' : '' }}) }}
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    {{ form_label(form.escalier, \"Escalier\") }}

                                    {# Affichage des erreurs pour ce champ précis. #}
                                    {{ form_errors(form.escalier) }}
                                    {{ form_widget(form.escalier, {'attr': {'class': 'form-control type', 'placeholder' : '' }}) }}
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    {{ form_label(form.etage, \"Etage\") }}

                                    {# Affichage des erreurs pour ce champ précis. #}
                                    {{ form_errors(form.etage) }}
                                    {{ form_widget(form.etage, {'attr': {'class': 'form-control type', 'placeholder' : '' }}) }}
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    {{ form_label(form.numPorte, \"N° de porte\") }}

                                    {# Affichage des erreurs pour ce champ précis. #}
                                    {{ form_errors(form.numPorte) }}
                                    {{ form_widget(form.numPorte, {'attr': {'class': 'form-control type', 'placeholder' : '' }}) }}
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    {{ form_label(form.ville, \"Ville\") }}

                                    {# Affichage des erreurs pour ce champ précis. #}
                                    {{ form_errors(form.ville) }}
                                    {{ form_widget(form.ville, {'attr': {'class': 'form-control type', 'placeholder' : '' }}) }}
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    {{ form_label(form.quartier, \"Quartier\") }}

                                    {# Affichage des erreurs pour ce champ précis. #}
                                    {{ form_errors(form.quartier) }}
                                    {{ form_widget(form.quartier, {'attr': {'class': 'form-control type', 'placeholder' : '' }}) }}
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    {{ form_label(form.codePostal, \"Code postal\") }}

                                    {# Affichage des erreurs pour ce champ précis. #}
                                    {{ form_errors(form.codePostal) }}
                                    {{ form_widget(form.codePostal, {'attr': {'class': 'form-control type', 'placeholder' : '' }}) }}
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    {{ form_label(form.superficie, \"Superficie m²\") }}

                                    {# Affichage des erreurs pour ce champ précis. #}
                                    {{ form_errors(form.superficie) }}
                                    {{ form_widget(form.superficie, {'attr': {'class': 'form-control type', 'placeholder' : '' }}) }}
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    {{ form_label(form.nbreDePiece, \"Nombre de pièce\") }}

                                    {# Affichage des erreurs pour ce champ précis. #}
                                    {{ form_errors(form.nbreDePiece) }}
                                    {{ form_widget(form.nbreDePiece, {'attr': {'class': 'form-control type', 'placeholder' : '' }}) }}
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    {{ form_label(form.nbreDeChambre, \"Nombre de chambre\") }}

                                    {# Affichage des erreurs pour ce champ précis. #}
                                    {{ form_errors(form.nbreDeChambre) }}
                                    {{ form_widget(form.nbreDeChambre, {'attr': {'class': 'form-control type', 'placeholder' : '' }}) }}
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    {{ form_label(form.anneeDeConstruction, \"Annee de construction\") }}

                                    {# Affichage des erreurs pour ce champ précis. #}
                                    {{ form_errors(form.anneeDeConstruction) }}
                                    {{ form_widget(form.anneeDeConstruction, {'attr': {'class': 'form-control type', 'placeholder' : '' }}) }}
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    {{ form_label(form.description, \"Description\") }}

                                    {# Affichage des erreurs pour ce champ précis. #}
                                    {{ form_errors(form.description) }}
                                    {{ form_widget(form.description, {'attr': {'class': 'form-control type', 'placeholder' : '' }}) }}
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    {{ form_label(form.note, \"Note\") }}

                                    {# Affichage des erreurs pour ce champ précis. #}
                                    {{ form_errors(form.note) }}
                                    {{ form_widget(form.note, {'attr': {'class': 'form-control type', 'placeholder' : '' }}) }}
                                </div>
                            </div>
                        </div>
                        <!-- /.tab-pane -->
                        <div class=\"tab-pane\" id=\"tab_2\">
                            <h4 class=\"form-box-header\">Informations locatives</h4>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    {{ form_label(form.typeDeLocationPropose, \"Type de location proposé\") }}

                                    {# Affichage des erreurs pour ce champ précis. #}
                                    {{ form_errors(form.typeDeLocationPropose) }}
                                    {{ form_widget(form.typeDeLocationPropose, {'attr': {'class': 'form-control type', 'placeholder' : '' }}) }}
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    {{ form_label(form.dureeMinimaleDeLocation, \"Durée minimale de location\") }}

                                    {# Affichage des erreurs pour ce champ précis. #}
                                    {{ form_errors(form.dureeMinimaleDeLocation) }}
                                    {{ form_widget(form.dureeMinimaleDeLocation, {'attr': {'class': 'form-control type', 'placeholder' : '' }}) }}
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    {{ form_label(form.loyerHc, \"Loyer HC\") }}

                                    {# Affichage des erreurs pour ce champ précis. #}
                                    {{ form_errors(form.loyerHc) }}
                                    {{ form_widget(form.loyerHc, {'attr': {'class': 'form-control type', 'placeholder' : '' }}) }}
                                    <span class=\"help-block\">Montant repris à titre indicatif dans la page de création de location et la fiche produit.</span>

                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    {{ form_label(form.charge, \"Charges\") }}

                                    {# Affichage des erreurs pour ce champ précis. #}
                                    {{ form_errors(form.charge) }}
                                    {{ form_widget(form.charge, {'attr': {'class': 'form-control type', 'placeholder' : '' }}) }}
                                    <span class=\"help-block\">Montant repris à titre indicatif dans la page de création de location et la fiche produit.</span>
                                </div>
                            </div>
                            <h4 class=\"form-box-header\">Informations complémentaires</h4>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    {{ form_label(form.typeHabitat, \"Type d'habitat\") }}

                                    {# Affichage des erreurs pour ce champ précis. #}
                                    {{ form_errors(form.typeHabitat) }}
                                    {{ form_widget(form.typeHabitat, {'attr': {'class': 'minimal', 'placeholder' : '' }}) }}
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    {{ form_label(form.regimeJuridique, \"Regime juridique de l'immeuble\") }}

                                    {# Affichage des erreurs pour ce champ précis. #}
                                    {{ form_errors(form.regimeJuridique) }}
                                    {{ form_widget(form.regimeJuridique, {'attr': {'class': ' minimal', 'placeholder' : '' }}) }}
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    {{ form_label(form.designationsDesParties, \"Désignation des parties et des équipements\") }}

                                    {# Affichage des erreurs pour ce champ précis. #}
                                    {{ form_errors(form.designationsDesParties) }}
                                    {{ form_widget(form.designationsDesParties, {'attr': {'class': ' minimal', 'placeholder' : '' }}) }}
                                </div>
                            </div>
                            <h4 class=\"form-box-header\">Centre d'impôts</h4>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    {{ form_label(form.nomDuCentreImpot, \"Nom du centre d'impôt\") }}

                                    {# Affichage des erreurs pour ce champ précis. #}
                                    {{ form_errors(form.nomDuCentreImpot) }}
                                    {{ form_widget(form.nomDuCentreImpot, {'attr': {'class': 'form-control', 'placeholder' : '' }}) }}
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    {{ form_label(form.adresses, \"Adresse\") }}

                                    {# Affichage des erreurs pour ce champ précis. #}
                                    {{ form_errors(form.adresses) }}
                                    {{ form_widget(form.adresses, {'attr': {'class': 'form-control', 'placeholder' : '' }}) }}
                                </div>
                            </div>
                            <div class=\"form-box-content\">
                                <div class=\"form-group control-group\">
                                    {{ form_label(form.ville, \"Ville\") }}

                                    {# Affichage des erreurs pour ce champ précis. #}
                                    {{ form_errors(form.ville) }}
                                    {{ form_widget(form.ville, {'attr': {'class': ' form-control', 'placeholder' : '' }}) }}
                                </div>
                            </div>

                        </div>

                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>




            </div>
            <div class=\"box-footer\">
                <input type=\"submit\" class=\"btn btn-success\" value=\"Sauvegarder\">
                <input type=\"button\" class=\"btn\" value=\"Annuler\" >

            </div>
        </div>
        {{ form_rest(form) }}

        {# Fermeture de la balise <form> du formulaire HTML #}
        {{ form_end(form) }}
    </div>

{% endblock %}", "NBAdminBundle:bien:edit.html.twig", "/Applications/XAMPP/xamppfiles/htdocs/louanse/src/NB/AdminBundle/Resources/views/bien/edit.html.twig");
    }
}
