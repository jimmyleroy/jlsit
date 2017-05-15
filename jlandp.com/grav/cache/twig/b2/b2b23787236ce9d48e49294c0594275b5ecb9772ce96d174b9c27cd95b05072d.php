<?php

/* modular/features.html.twig */
class __TwigTemplate_d3126918a489ae31ac685c191a372418d36010c8d33922a60409a2e3f9a2e5ac extends Twig_Template
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
        echo "<section class=\"wrapper style1 container special\">
    <div class=\"row\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "features", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 4
            echo "            <div class=\"4u 12u(narrower)\">
                <section>
                    ";
            // line 6
            if ($this->getAttribute($context["item"], "icon", array())) {
                // line 7
                echo "                    <span class=\"icon featured fa-";
                echo $this->getAttribute($context["item"], "icon", array());
                echo "\"></span>
                    ";
            }
            // line 9
            echo "                    <header>
                        <h3>";
            // line 10
            echo $this->getAttribute($context["item"], "title", array());
            echo "</h3>
                    </header>
                    <p>";
            // line 12
            echo $this->getAttribute($context["item"], "text", array());
            echo "</p>
                    ";
            // line 13
            if ($this->getAttribute($context["item"], "buttons", array())) {
                // line 14
                echo "                    <footer>
                        <ul class=\"buttons\">
                            ";
                // line 16
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "buttons", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                    // line 17
                    echo "                                <li><a href=\"";
                    echo $this->getAttribute($context["button"], "url", array());
                    echo "\" class=\"button small\">";
                    echo $this->getAttribute($context["button"], "text", array());
                    echo "</a></li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 19
                echo "                        </ul>
                    </footer>
                    ";
            }
            // line 22
            echo "                </section>
            </div> 
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </div>
</section>";
    }

    public function getTemplateName()
    {
        return "modular/features.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 25,  77 => 22,  72 => 19,  61 => 17,  57 => 16,  53 => 14,  51 => 13,  47 => 12,  42 => 10,  39 => 9,  33 => 7,  31 => 6,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<section class=\"wrapper style1 container special\">
    <div class=\"row\">
        {% for item in page.header.features %}
            <div class=\"4u 12u(narrower)\">
                <section>
                    {% if item.icon %}
                    <span class=\"icon featured fa-{{ item.icon }}\"></span>
                    {% endif %}
                    <header>
                        <h3>{{ item.title }}</h3>
                    </header>
                    <p>{{ item.text }}</p>
                    {% if item.buttons %}
                    <footer>
                        <ul class=\"buttons\">
                            {% for button in item.buttons %}
                                <li><a href=\"{{ button.url }}\" class=\"button small\">{{ button.text }}</a></li>
                            {% endfor %}
                        </ul>
                    </footer>
                    {% endif %}
                </section>
            </div> 
        {% endfor %}
    </div>
</section>", "modular/features.html.twig", "/srv/jlandp.com/grav/user/themes/twenty/templates/modular/features.html.twig");
    }
}
