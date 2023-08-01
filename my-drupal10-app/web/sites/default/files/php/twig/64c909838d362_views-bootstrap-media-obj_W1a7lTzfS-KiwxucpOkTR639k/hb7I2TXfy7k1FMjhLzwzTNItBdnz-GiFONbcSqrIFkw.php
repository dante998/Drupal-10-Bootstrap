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

/* modules/contrib/views_bootstrap/templates/views-bootstrap-media-object.html.twig */
class __TwigTemplate_f82e5cb8ab64c416f234bdcfbc4cbb88 extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
<div";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 3), 3, $this->source), "html", null, true);
        echo " id=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["id"] ?? null), 3, $this->source), "html", null, true);
        echo "\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["row"]) {
            // line 5
            echo "<div class=\"media\">
        ";
            // line 6
            if (twig_get_attribute($this->env, $this->source, $context["row"], "image", [], "any", false, false, true, 6)) {
                // line 7
                echo "            ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "image", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
                echo "
        ";
            }
            // line 9
            echo "        <div class=\"media-body\">
            ";
            // line 10
            if (twig_get_attribute($this->env, $this->source, $context["row"], "heading", [], "any", false, false, true, 10)) {
                // line 11
                echo "                ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "heading", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
                echo "
            ";
            }
            // line 13
            echo "
            ";
            // line 14
            if (twig_get_attribute($this->env, $this->source, $context["row"], "body", [], "any", false, false, true, 14)) {
                // line 15
                echo "                ";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["row"], "body", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
                echo "
            ";
            }
            // line 17
            echo "        </div>
    </div>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "modules/contrib/views_bootstrap/templates/views-bootstrap-media-object.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 20,  85 => 17,  79 => 15,  77 => 14,  74 => 13,  68 => 11,  66 => 10,  63 => 9,  57 => 7,  55 => 6,  52 => 5,  48 => 4,  42 => 3,  39 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# @todo: add more control to images and positoning #}

<div{{ attributes.addClass(classes) }} id=\"{{ id }}\">
    {% for key, row in rows -%}
    <div class=\"media\">
        {% if row.image %}
            {{ row.image }}
        {% endif %}
        <div class=\"media-body\">
            {% if row.heading %}
                {{ row.heading }}
            {% endif %}

            {% if row.body %}
                {{ row.body }}
            {% endif %}
        </div>
    </div>
    {%- endfor %}
</div>", "modules/contrib/views_bootstrap/templates/views-bootstrap-media-object.html.twig", "/app/web/modules/contrib/views_bootstrap/templates/views-bootstrap-media-object.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 4, "if" => 6);
        static $filters = array("escape" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
