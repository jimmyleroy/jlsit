<?php

/* modular/portfolio.html.twig */
class __TwigTemplate_aff2a79007c818cbce683bdecc4aa7bbcd80afa348e271e5f1661f07ffc8d616 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<section class=\"wrapper style3 container special\">

    <header class=\"major\">
        <h2>";
        // line 4
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
        echo "</h2>
    </header>

    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_array_batch($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "portfolio", array()), 2));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 8
            echo "        <div class=\"row\">
            ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["row"]);
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 10
                echo "                <div class=\"6u 12u(narrower)\">
                    <section>
                        <a href=\"";
                // line 12
                echo $this->getAttribute($context["item"], "image_link", array());
                echo "\" class=\"image featured\"><img src=\"";
                echo $this->getAttribute($this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), $this->getAttribute($context["item"], "image", array()), array(), "array"), "url", array());
                echo "\" alt=\"\" /></a>
                        <header>
                            <h3>";
                // line 14
                echo $this->getAttribute($context["item"], "title", array());
                echo "</h3>
                        </header>
                        <p>";
                // line 16
                echo $this->getAttribute($context["item"], "text", array());
                echo "</p>
                    </section>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    <footer class=\"major\">
        <ul class=\"buttons\">
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 26
            echo "                <li><a href=\"";
            echo $this->getAttribute($context["button"], "url", array());
            echo "\" class=\"button\">";
            echo $this->getAttribute($context["button"], "text", array());
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </ul>
    </footer>

</section>    ";
    }

    public function getTemplateName()
    {
        return "modular/portfolio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 28,  83 => 26,  79 => 25,  74 => 22,  67 => 20,  57 => 16,  52 => 14,  45 => 12,  41 => 10,  37 => 9,  34 => 8,  30 => 7,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"wrapper style3 container special\">

    <header class=\"major\">
        <h2>{{ page.header.title }}</h2>
    </header>

    {% for row in page.header.portfolio|batch(2) %}
        <div class=\"row\">
            {% for item in row %}
                <div class=\"6u 12u(narrower)\">
                    <section>
                        <a href=\"{{ item.image_link }}\" class=\"image featured\"><img src=\"{{ page.media[item.image].url }}\" alt=\"\" /></a>
                        <header>
                            <h3>{{ item.title }}</h3>
                        </header>
                        <p>{{ item.text }}</p>
                    </section>
                </div>
            {% endfor %}
        </div>
    {% endfor %}

    <footer class=\"major\">
        <ul class=\"buttons\">
            {% for button in page.header.buttons %}
                <li><a href=\"{{ button.url }}\" class=\"button\">{{ button.text }}</a></li>
            {% endfor %}
        </ul>
    </footer>

</section>    ", "modular/portfolio.html.twig", "/srv/jlandp.com/grav/user/themes/twenty/templates/modular/portfolio.html.twig");
    }
}
