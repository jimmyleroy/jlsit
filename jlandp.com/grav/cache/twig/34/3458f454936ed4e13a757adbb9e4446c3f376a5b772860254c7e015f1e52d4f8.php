<?php

/* partials/base.html.twig */
class __TwigTemplate_7dbbe84e5651ed1f2fe359dc74c3af31d401a3c85815f26cb09913a0dbb991cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 23
        echo "    </head>
    <body class=\"";
        // line 24
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_class", array());
        echo "\">

        ";
        // line 26
        $this->displayBlock('header', $context, $blocks);
        // line 29
        echo "
        ";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('footer', $context, $blocks);
        // line 37
        echo "
        ";
        // line 38
        $this->displayBlock('javascripts', $context, $blocks);
        // line 53
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "

    </body>
</html>
";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <meta charset=\"utf-8\" />
        <title>";
        // line 6
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo $this->getAttribute(($context["header"] ?? null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "</title>
        ";
        // line 7
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 7)->display($context);
        // line 8
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 9
        echo ($context["theme_url"] ?? null);
        echo "/images/favicon.png\" />

        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 20
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "

        ";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "                ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://assets/css/main.css"), "method");
        // line 13
        echo "                ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) == 8))) {
            // line 14
            echo "                    ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://assets/css/ie8.css"), "method");
            // line 15
            echo "                ";
        }
        // line 16
        echo "                ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) == 9))) {
            // line 17
            echo "                    ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://assets/css/ie9.css"), "method");
            // line 18
            echo "                ";
        }
        // line 19
        echo "        ";
    }

    // line 26
    public function block_header($context, array $blocks = array())
    {
        // line 27
        echo "            ";
        $this->loadTemplate("partials/header.html.twig", "partials/base.html.twig", 27)->display($context);
        // line 28
        echo "        ";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        // line 31
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 32
        echo "        ";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
    }

    // line 34
    public function block_footer($context, array $blocks = array())
    {
        // line 35
        echo "            ";
        $this->loadTemplate("partials/footer.html.twig", "partials/base.html.twig", 35)->display($context);
        // line 36
        echo "        ";
    }

    // line 38
    public function block_javascripts($context, array $blocks = array())
    {
        // line 39
        echo "            ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) == 8))) {
            // line 40
            echo "                 ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/js/ie/html5shiv.js"), "method");
            // line 41
            echo "            ";
        }
        // line 42
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "add", array(0 => "jquery", 1 => 101), "method");
        // line 43
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/js/jquery.dropotron.min.js"), "method");
        // line 44
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/js/jquery.scrolly.min.js"), "method");
        // line 45
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/js/jquery.scrollgress.min.js"), "method");
        // line 46
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/js/skel.min.js"), "method");
        // line 47
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/js/util.js"), "method");
        // line 48
        echo "            ";
        if ((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) == 8))) {
            // line 49
            echo "                 ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/js/ie/respond.min.js"), "method");
            // line 50
            echo "            ";
        }
        // line 51
        echo "            ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://assets/js/main.js"), "method");
        // line 52
        echo "        ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 52,  204 => 51,  201 => 50,  198 => 49,  195 => 48,  192 => 47,  189 => 46,  186 => 45,  183 => 44,  180 => 43,  177 => 42,  174 => 41,  171 => 40,  168 => 39,  165 => 38,  161 => 36,  158 => 35,  155 => 34,  150 => 31,  146 => 32,  143 => 31,  140 => 30,  136 => 28,  133 => 27,  130 => 26,  126 => 19,  123 => 18,  120 => 17,  117 => 16,  114 => 15,  111 => 14,  108 => 13,  105 => 12,  102 => 11,  94 => 20,  92 => 11,  87 => 9,  84 => 8,  82 => 7,  74 => 6,  71 => 5,  68 => 4,  58 => 53,  56 => 38,  53 => 37,  51 => 34,  48 => 33,  46 => 30,  43 => 29,  41 => 26,  36 => 24,  33 => 23,  31 => 4,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    {% block head %}
        <meta charset=\"utf-8\" />
        <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
        {% include 'partials/metadata.html.twig' %}
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ theme_url }}/images/favicon.png\" />

        {% block stylesheets %}
                {% do assets.addCss('theme://assets/css/main.css') %}
                {% if browser.getBrowser == 'msie' and browser.getVersion == 8 %}
                    {% do assets.addCss('theme://assets/css/ie8.css') %}
                {% endif %}
                {% if browser.getBrowser == 'msie' and browser.getVersion == 9 %}
                    {% do assets.addCss('theme://assets/css/ie9.css') %}
                {% endif %}
        {% endblock %}
        {{ assets.css() }}

        {% endblock head%}
    </head>
    <body class=\"{{ page.header.body_class }}\">

        {% block header %}
            {% include 'partials/header.html.twig' %}
        {% endblock %}

        {% block body %}
            {% block content %}{% endblock %}
        {% endblock %}

        {% block footer %}
            {% include 'partials/footer.html.twig' %}
        {% endblock %}

        {% block javascripts %}
            {% if browser.getBrowser == 'msie' and browser.getVersion == 8 %}
                 {% do assets.addJs('theme://assets/js/ie/html5shiv.js') %}
            {% endif %}
            {% do assets.add('jquery',101) %}
            {% do assets.addJs('theme://assets/js/jquery.dropotron.min.js') %}
            {% do assets.addJs('theme://assets/js/jquery.scrolly.min.js') %}
            {% do assets.addJs('theme://assets/js/jquery.scrollgress.min.js') %}
            {% do assets.addJs('theme://assets/js/skel.min.js') %}
            {% do assets.addJs('theme://assets/js/util.js') %}
            {% if browser.getBrowser == 'msie' and browser.getVersion == 8 %}
                 {% do assets.addJs('theme://assets/js/ie/respond.min.js') %}
            {% endif %}
            {% do assets.addJs('theme://assets/js/main.js') %}
        {% endblock %}
        {{ assets.js() }}

    </body>
</html>
", "partials/base.html.twig", "/srv/jlandp.com/grav/user/themes/twenty/templates/partials/base.html.twig");
    }
}
