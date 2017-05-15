<?php

/* modular/bottom.html.twig */
class __TwigTemplate_cc713dd3422f14880719ec37bcdc282f76edd8f0c06cfffc6cb2ced3eb0621d7 extends Twig_Template
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
        echo "<section id=\"cta\">
    <header>
        <h2>";
        // line 3
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
        echo "</h2>
        ";
        // line 4
        echo ($context["content"] ?? null);
        echo "
    </header>
    <footer>
        <ul class=\"buttons\">
            ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 9
            echo "                <li><a href=\"";
            echo $this->getAttribute($context["button"], "url", array());
            echo "\" class=\"button ";
            if ($this->getAttribute($context["button"], "class", array())) {
                echo $this->getAttribute($context["button"], "class", array());
            }
            echo "\">";
            echo $this->getAttribute($context["button"], "text", array());
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "        </ul>
    </footer>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/bottom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  38 => 9,  34 => 8,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section id=\"cta\">
    <header>
        <h2>{{page.header.title}}</h2>
        {{ content }}
    </header>
    <footer>
        <ul class=\"buttons\">
            {% for button in page.header.buttons %}
                <li><a href=\"{{ button.url }}\" class=\"button {% if button.class %}{{ button.class }}{% endif %}\">{{ button.text }}</a></li>
            {% endfor %}
        </ul>
    </footer>
</section>", "modular/bottom.html.twig", "/srv/jlandp.com/grav/user/themes/twenty/templates/modular/bottom.html.twig");
    }
}
