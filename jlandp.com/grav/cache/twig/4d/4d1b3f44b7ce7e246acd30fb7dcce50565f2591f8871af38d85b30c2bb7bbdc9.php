<?php

/* partials/header.html.twig */
class __TwigTemplate_96e916751829261c639ab5fa42cac64b7efe24ae488d1d3fa3d7ce1497bcfac8 extends Twig_Template
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
        echo "<header id=\"header\" class=\"";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "header_class", array());
        echo "\">
    <h1 id=\"logo\"><a href=\"";
        // line 2
        echo ($context["base_url_absolute"] ?? null);
        echo "\">";
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "logo", array()), "text1", array());
        echo " <span>";
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "logo", array()), "text2", array());
        echo "</span></a></h1>
    <nav id=\"nav\">
        <ul class=\"submenu\">
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 6
            echo "                ";
            if ($this->getAttribute($context["page"], "visible", array())) {
                // line 7
                echo "                    ";
                $context["current_page"] = ((($this->getAttribute($context["page"], "active", array()) || $this->getAttribute($context["page"], "activeChild", array()))) ? ("current") : (""));
                // line 8
                echo "                    <li class=\"";
                echo ($context["current_page"] ?? null);
                echo "\">
                        <a href=\"";
                // line 9
                echo $this->getAttribute($context["page"], "url", array());
                echo "\">
                            ";
                // line 10
                echo $this->getAttribute($context["page"], "menu", array());
                echo "
                        </a>
                    </li>
                ";
            }
            // line 14
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "menu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["mitem"]) {
            // line 16
            echo "                <li>
                    <a href=\"";
            // line 17
            echo $this->getAttribute($context["mitem"], "link", array());
            echo "\">";
            echo $this->getAttribute($context["mitem"], "text", array());
            echo "</a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mitem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "            <!-- <li class=\"submenu\">
                <a href=\"\">Submenu</a>
                <ul>
                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "submenu", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["submenu"]) {
            // line 24
            echo "                        <li><a href=\"";
            echo $this->getAttribute($context["submenu"], "link", array());
            echo "\">";
            echo $this->getAttribute($context["submenu"], "text", array());
            echo "</a></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['submenu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                </ul>
            </li> -->
            ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "buttons", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
            // line 29
            echo "                <!-- <li><a href=\"";
            echo $this->getAttribute($context["button"], "link", array());
            echo "\" class=\"button special\">";
            echo $this->getAttribute($context["button"], "text", array());
            echo "</a></li> -->
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </ul>
    </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "partials/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 31,  113 => 29,  109 => 28,  105 => 26,  94 => 24,  90 => 23,  85 => 20,  74 => 17,  71 => 16,  66 => 15,  60 => 14,  53 => 10,  49 => 9,  44 => 8,  41 => 7,  38 => 6,  34 => 5,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<header id=\"header\" class=\"{{ page.header.header_class }}\">
    <h1 id=\"logo\"><a href=\"{{ base_url_absolute }}\">{{ site.logo.text1 }} <span>{{ site.logo.text2 }}</span></a></h1>
    <nav id=\"nav\">
        <ul class=\"submenu\">
            {% for page in pages.children %}
                {% if page.visible %}
                    {% set current_page = (page.active or page.activeChild) ? 'current' : '' %}
                    <li class=\"{{ current_page }}\">
                        <a href=\"{{ page.url }}\">
                            {{ page.menu }}
                        </a>
                    </li>
                {% endif %}
            {% endfor %}
            {% for mitem in site.menu %}
                <li>
                    <a href=\"{{ mitem.link }}\">{{ mitem.text }}</a>
                </li>
            {% endfor %}
            <!-- <li class=\"submenu\">
                <a href=\"\">Submenu</a>
                <ul>
                    {% for submenu in site.submenu %}
                        <li><a href=\"{{ submenu.link }}\">{{ submenu.text }}</a></li>
                    {% endfor %}
                </ul>
            </li> -->
            {% for button in site.buttons %}
                <!-- <li><a href=\"{{ button.link }}\" class=\"button special\">{{ button.text }}</a></li> -->
            {% endfor %}
        </ul>
    </nav>
</header>", "partials/header.html.twig", "/srv/jlandp.com/grav/user/themes/twenty/templates/partials/header.html.twig");
    }
}
