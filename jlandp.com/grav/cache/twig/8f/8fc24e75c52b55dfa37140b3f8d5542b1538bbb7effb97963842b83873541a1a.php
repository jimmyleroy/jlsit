<?php

/* partials/footer.html.twig */
class __TwigTemplate_36ac6b860352bb78ec0d07159ad9a860a2490b6e8e22877daf1595d3d9ceba58 extends Twig_Template
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
        echo "<footer id=\"footer\">

    <ul class=\"icons\">
        ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["site"] ?? null), "social", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 5
            echo "             <li><a href=\"";
            echo $this->getAttribute($context["item"], "url", array());
            echo "\" class=\"icon circle fa-";
            echo $this->getAttribute($context["item"], "icon", array());
            echo "\"><span class=\"label\">";
            echo $this->getAttribute($context["item"], "label", array());
            echo "</span></a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    </ul>

    <ul class=\"copyright\">
        <li>&copy; ";
        // line 10
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "copyright", array()), "line1", array());
        echo "</li><li>";
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "copyright", array()), "line2", array());
        echo " <a href=\"";
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "copyright", array()), "url", array());
        echo "\">";
        echo $this->getAttribute($this->getAttribute(($context["site"] ?? null), "copyright", array()), "url_label", array());
        echo "</a></li>
    </ul>
    
</footer>";
    }

    public function getTemplateName()
    {
        return "partials/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  41 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<footer id=\"footer\">

    <ul class=\"icons\">
        {% for item in site.social %}
             <li><a href=\"{{ item.url }}\" class=\"icon circle fa-{{ item.icon }}\"><span class=\"label\">{{ item.label }}</span></a></li>
        {% endfor %}
    </ul>

    <ul class=\"copyright\">
        <li>&copy; {{ site.copyright.line1 }}</li><li>{{ site.copyright.line2 }} <a href=\"{{ site.copyright.url }}\">{{ site.copyright.url_label }}</a></li>
    </ul>
    
</footer>", "partials/footer.html.twig", "/srv/jlandp.com/grav/user/themes/twenty/templates/partials/footer.html.twig");
    }
}
