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

/* card/index.html.twig */
class __TwigTemplate_8e47a71653096e4c4fab1884fd98989f120f0f5cf4f036c6b165f894a37762c4 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "card/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "card/index.html.twig", 1);
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

        echo "Card index";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
    <h1>Card index</h1><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_new");
        echo "\" class=\"btn btn-lg btn-outline-primary\">Create new</a>

    <div class=\"card-deck mb-3 text-center wrapper\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cards"]) || array_key_exists("cards", $context) ? $context["cards"] : (function () { throw new RuntimeError('Variable "cards" does not exist.', 10, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 11
            echo "        <div class=\"card mb-4 shadow-sm\">
        <div class=\"card-header\">
            <h4 class=\"my-0 font-weight-normal\">
                ";
            // line 14
            if (twig_get_attribute($this->env, $this->source, $context["card"], "Type", [], "any", false, false, false, 14)) {
                // line 15
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["card"], "Type", [], "any", false, false, false, 15), "TypeName", [], "any", false, false, false, 15), "html", null, true);
                echo "
                ";
            }
            // line 17
            echo "            </h4>
        </div>
        <div class=\"card-body\">
            <h1 class=\"card-title pricing-card-title\">";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "Name", [], "any", false, false, false, 20), "html", null, true);
            echo " <small class=\"text-muted\">[ ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "Id", [], "any", false, false, false, 20), "html", null, true);
            echo " ]</small></h1>
            <div class=\"list-unstyled mt-3 mb-4\">
                <div class=\"cardImage\"><img src=\"\" ></div>
                <div class=\"cardFooter\">
                    <div class=\"cardNumber\" style=\"color:blue\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "Healthpoint", [], "any", false, false, false, 24), "html", null, true);
            echo " HP</div>
                    <div class=\"cardNumber\" style=\"color:red\">";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "Attack", [], "any", false, false, false, 25), "html", null, true);
            echo " ATK</div>
                    <div class=\"cardNumber\" style=\"color:green\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "Cost", [], "any", false, false, false, 26), "html", null, true);
            echo " MANA</div>
                </div>
            </div>
            <div class=\"d-flex\">
            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_show", ["id" => twig_get_attribute($this->env, $this->source, $context["card"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" class=\"btn btn-lg btn-outline-primary w-50\">Voir la carte</a>
            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["card"], "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\" class=\"btn btn-lg btn-outline-primary w-50\">Modifier la carte</a>
            </div>
        </div>
        </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 36
            echo "                <tr>
                    <td colspan=\"6\">No records found</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "    </div>

<!--
    <h1>Card index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Attack</th>
                <th>Healthpoint</th>
                <th>Defense</th>
                <th>Type</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cards"]) || array_key_exists("cards", $context) ? $context["cards"] : (function () { throw new RuntimeError('Variable "cards" does not exist.', 58, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 59
            echo "            <tr>
                <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "id", [], "any", false, false, false, 60), "html", null, true);
            echo "</td>
                <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "Name", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "Attack", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "Healthpoint", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                <td>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["card"], "Defense", [], "any", false, false, false, 64), "html", null, true);
            echo "</td>
                <td>
                ";
            // line 66
            if (twig_get_attribute($this->env, $this->source, $context["card"], "Type", [], "any", false, false, false, 66)) {
                // line 67
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["card"], "Type", [], "any", false, false, false, 67), "TypeName", [], "any", false, false, false, 67), "html", null, true);
                echo "
                ";
            }
            // line 68
            echo "</td>
                <td>
                    <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_show", ["id" => twig_get_attribute($this->env, $this->source, $context["card"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("card_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["card"], "id", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 75
            echo "            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "        </tbody>
    </table>
-->
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "card/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 79,  241 => 75,  232 => 71,  228 => 70,  224 => 68,  218 => 67,  216 => 66,  211 => 64,  207 => 63,  203 => 62,  199 => 61,  195 => 60,  192 => 59,  187 => 58,  167 => 40,  158 => 36,  148 => 31,  144 => 30,  137 => 26,  133 => 25,  129 => 24,  120 => 20,  115 => 17,  109 => 15,  107 => 14,  102 => 11,  97 => 10,  91 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Card index{% endblock %}

{% block body %}
<div class=\"container\">
    <h1>Card index</h1><a href=\"{{ path('card_new') }}\" class=\"btn btn-lg btn-outline-primary\">Create new</a>

    <div class=\"card-deck mb-3 text-center wrapper\">
            {% for card in cards %}
        <div class=\"card mb-4 shadow-sm\">
        <div class=\"card-header\">
            <h4 class=\"my-0 font-weight-normal\">
                {% if card.Type %}
                {{ card.Type.TypeName }}
                {% endif %}
            </h4>
        </div>
        <div class=\"card-body\">
            <h1 class=\"card-title pricing-card-title\">{{ card.Name }} <small class=\"text-muted\">[ {{ card.Id }} ]</small></h1>
            <div class=\"list-unstyled mt-3 mb-4\">
                <div class=\"cardImage\"><img src=\"\" ></div>
                <div class=\"cardFooter\">
                    <div class=\"cardNumber\" style=\"color:blue\">{{ card.Healthpoint }} HP</div>
                    <div class=\"cardNumber\" style=\"color:red\">{{ card.Attack }} ATK</div>
                    <div class=\"cardNumber\" style=\"color:green\">{{ card.Cost }} MANA</div>
                </div>
            </div>
            <div class=\"d-flex\">
            <a href=\"{{ path('card_show', {'id': card.id}) }}\" class=\"btn btn-lg btn-outline-primary w-50\">Voir la carte</a>
            <a href=\"{{ path('card_edit', {'id': card.id}) }}\" class=\"btn btn-lg btn-outline-primary w-50\">Modifier la carte</a>
            </div>
        </div>
        </div>
            {% else %}
                <tr>
                    <td colspan=\"6\">No records found</td>
                </tr>
            {% endfor %}
    </div>

<!--
    <h1>Card index</h1>

    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Attack</th>
                <th>Healthpoint</th>
                <th>Defense</th>
                <th>Type</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        {% for card in cards %}
            <tr>
                <td>{{ card.id }}</td>
                <td>{{ card.Name }}</td>
                <td>{{ card.Attack }}</td>
                <td>{{ card.Healthpoint }}</td>
                <td>{{ card.Defense }}</td>
                <td>
                {% if card.Type %}
                {{ card.Type.TypeName }}
                {% endif %}</td>
                <td>
                    <a href=\"{{ path('card_show', {'id': card.id}) }}\">show</a>
                    <a href=\"{{ path('card_edit', {'id': card.id}) }}\">edit</a>
                </td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"6\">no records found</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
-->
</div>
{% endblock %}

", "card/index.html.twig", "/Applications/MAMP/htdocs/SymfonyMars4/templates/card/index.html.twig");
    }
}
