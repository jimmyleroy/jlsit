<?php

/* modular.html.twig */
class __TwigTemplate_abbaac0c527484aa28f898897d3f2e3839f5d585f03f54c4f7089ec78d957891 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "modular.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["show_onpage_menu"] = (($this->getAttribute(($context["header"] ?? null), "onpage_menu", array()) == true) || (null === $this->getAttribute(($context["header"] ?? null), "onpage_menu", array())));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 10
            echo "        ";
            if (($this->getAttribute($context["module"], "menu", array()) == "before_article")) {
                // line 11
                echo "            ";
                echo $this->getAttribute($context["module"], "content", array());
                echo "
        ";
            }
            // line 13
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    <article id=\"main\">
        
        ";
        // line 16
        if ((($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "subtitle", array()) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "description", array())) || $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "icon", array()))) {
            // line 17
            echo "            <header class=\"special container\">
                <span class=\"icon fa-";
            // line 18
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "icon", array());
            echo "\"></span>
                <h2>";
            // line 19
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "subtitle", array());
            echo "</h2>
                <p>";
            // line 20
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "description", array());
            echo "</p>
            </header>
        ";
        }
        // line 23
        echo "
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 25
            echo "            ";
            if ((($this->getAttribute($context["module"], "menu", array()) != "before_article") && ($this->getAttribute($context["module"], "menu", array()) != "after_article"))) {
                // line 26
                echo "                ";
                echo $this->getAttribute($context["module"], "content", array());
                echo "
            ";
            }
            // line 28
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </article>
    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 31
            echo "        ";
            if (($this->getAttribute($context["module"], "menu", array()) == "after_article")) {
                // line 32
                echo "            ";
                echo $this->getAttribute($context["module"], "content", array());
                echo "
        ";
            }
            // line 34
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 4
    public function getpageLinkName($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            echo twig_replace_filter(twig_lower_filter($this->env, ($context["text"] ?? null)), array(" " => "_"));
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "modular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 4,  119 => 34,  113 => 32,  110 => 31,  106 => 30,  103 => 29,  97 => 28,  91 => 26,  88 => 25,  84 => 24,  81 => 23,  75 => 20,  71 => 19,  67 => 18,  64 => 17,  62 => 16,  58 => 14,  52 => 13,  46 => 11,  43 => 10,  39 => 9,  34 => 8,  31 => 7,  27 => 1,  25 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}

{% set show_onpage_menu = header.onpage_menu == true or header.onpage_menu is null %}
{% macro pageLinkName(text) %}{{ text|lower|replace({' ':'_'}) }}{% endmacro %}


{% block content %}
    {{ page.content }}
    {% for module in page.collection() %}
        {% if module.menu == 'before_article' %}
            {{ module.content }}
        {% endif %}
    {% endfor %}
    <article id=\"main\">
        
        {% if page.header.subtitle or page.header.description or page.header.icon %}
            <header class=\"special container\">
                <span class=\"icon fa-{{ page.header.icon }}\"></span>
                <h2>{{ page.header.subtitle }}</h2>
                <p>{{ page.header.description }}</p>
            </header>
        {% endif %}

        {% for module in page.collection() %}
            {% if module.menu != 'before_article' and module.menu != 'after_article' %}
                {{ module.content }}
            {% endif %}
        {% endfor %}
    </article>
    {% for module in page.collection() %}
        {% if module.menu == 'after_article' %}
            {{ module.content }}
        {% endif %}
    {% endfor %}
{% endblock %}
", "modular.html.twig", "/srv/jlandp.com/grav/user/themes/twenty/templates/modular.html.twig");
    }
}
