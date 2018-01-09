<?php

/* themes/stack/templates/menu--main.html.twig */
class __TwigTemplate_4c3763cd24f69e845592f89b540c16c5e64acc7d3dd18489cd3ea331dc73df5a extends Twig_Template
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
        $__internal_02e8738be9fdf478145c089b5ad668a709e3ef79cc6425f992a605d01139df12 = $this->env->getExtension("native_profiler");
        $__internal_02e8738be9fdf478145c089b5ad668a709e3ef79cc6425f992a605d01139df12->enter($__internal_02e8738be9fdf478145c089b5ad668a709e3ef79cc6425f992a605d01139df12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/stack/templates/menu--main.html.twig"));

        $tags = array("import" => 18, "macro" => 26, "if" => 28, "for" => 38, "set" => 40);
        $filters = array();
        $functions = array("link" => 50);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('import', 'macro', 'if', 'for', 'set'),
                array(),
                array('link')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 18
        $context["menus"] = $this;
        // line 19
        echo "
";
        // line 24
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links((isset($context["items"]) ? $context["items"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), 0)));
        echo "

";
        
        $__internal_02e8738be9fdf478145c089b5ad668a709e3ef79cc6425f992a605d01139df12->leave($__internal_02e8738be9fdf478145c089b5ad668a709e3ef79cc6425f992a605d01139df12_prof);

    }

    // line 26
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_f140c4d87021e367abcb42ad0eda72fbd897c5ce6c34e9e7e7eac9ef06f65b11 = $this->env->getExtension("native_profiler");
            $__internal_f140c4d87021e367abcb42ad0eda72fbd897c5ce6c34e9e7e7eac9ef06f65b11->enter($__internal_f140c4d87021e367abcb42ad0eda72fbd897c5ce6c34e9e7e7eac9ef06f65b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "menu_links"));

            // line 27
            echo "  ";
            $context["menus"] = $this;
            // line 28
            echo "  ";
            if ((isset($context["items"]) ? $context["items"] : null)) {
                // line 29
                echo "    ";
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    // line 30
                    echo "      <ul class=\"menu-horizontal\">
    ";
                } else {
                    // line 32
                    echo "\t  <div class=\"dropdown__container\">
         <div class=\"container\">
           <div class=\"row\">
             <div class=\"dropdown__content col-md-2 col-sm-4\">
      <ul class=\"menu-vertical text-left\">
    ";
                }
                // line 38
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 39
                    echo "      ";
                    // line 40
                    $context["item_classes"] = array(0 => (($this->getAttribute(                    // line 41
$context["item"], "is_expanded", array())) ? ("expanded ") : ("")), 1 => (($this->getAttribute(                    // line 42
$context["item"], "is_expanded", array())) ? ("dropdown") : ("")), 2 => (($this->getAttribute(                    // line 43
$context["item"], "is_expanded", array())) ? ("has-dropdown") : ("")), 3 => (($this->getAttribute(                    // line 44
$context["item"], "in_active_trail", array())) ? ("active") : ("")));
                    // line 47
                    echo "      ";
                    if ((((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0) && $this->getAttribute($context["item"], "is_expanded", array()))) {
                        // line 48
                        echo "        <li";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => (isset($context["item_classes"]) ? $context["item_classes"] : null)), "method"), "html", null, true));
                        echo ">
        
\t\t";
                        // line 50
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array()), array("class" => array(0 => "dropdown__trigger"), "data-target" => array(0 => "#"), "data-toggle" => array(0 => "dropdown"))), "html", null, true));
                        echo "
      ";
                    } else {
                        // line 52
                        echo "        <li";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => (isset($context["item_classes"]) ? $context["item_classes"] : null)), "method"), "html", null, true));
                        echo ">
        ";
                        // line 53
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getLink($this->getAttribute($context["item"], "title", array()), $this->getAttribute($context["item"], "url", array()), array("class" => array(0 => "dropdown__trigger"))), "html", null, true));
                        echo "
      ";
                    }
                    // line 55
                    echo "      ";
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 56
                        echo "        ";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($context["menus"]->getmenu_links($this->getAttribute($context["item"], "below", array()), $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "removeClass", array(0 => "nav", 1 => "navbar-nav"), "method"), ((isset($context["menu_level"]) ? $context["menu_level"] : null) + 1))));
                        echo "
      ";
                    }
                    // line 58
                    echo "      </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "    ";
                if (((isset($context["menu_level"]) ? $context["menu_level"] : null) == 0)) {
                    // line 61
                    echo "      </ul>
    ";
                } else {
                    // line 63
                    echo "\t          </ul>
\t        </div>
\t      </div>
\t    </div>
\t  </div>
    ";
                }
                // line 69
                echo "  ";
            }
            
            $__internal_f140c4d87021e367abcb42ad0eda72fbd897c5ce6c34e9e7e7eac9ef06f65b11->leave($__internal_f140c4d87021e367abcb42ad0eda72fbd897c5ce6c34e9e7e7eac9ef06f65b11_prof);

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
        return "themes/stack/templates/menu--main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 69,  159 => 63,  155 => 61,  152 => 60,  145 => 58,  139 => 56,  136 => 55,  131 => 53,  126 => 52,  121 => 50,  115 => 48,  112 => 47,  110 => 44,  109 => 43,  108 => 42,  107 => 41,  106 => 40,  104 => 39,  99 => 38,  91 => 32,  87 => 30,  84 => 29,  81 => 28,  78 => 27,  61 => 26,  51 => 24,  48 => 19,  46 => 18,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *
 * @ingroup templates
 */
#}
{% import _self as menus %}

{#
  We call a macro which calls itself to render the full tree.
  @see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{{ menus.menu_links(items, attributes, 0) }}

{% macro menu_links(items, attributes, menu_level) %}
  {% import _self as menus %}
  {% if items %}
    {% if menu_level == 0 %}
      <ul class=\"menu-horizontal\">
    {% else %}
\t  <div class=\"dropdown__container\">
         <div class=\"container\">
           <div class=\"row\">
             <div class=\"dropdown__content col-md-2 col-sm-4\">
      <ul class=\"menu-vertical text-left\">
    {% endif %}
    {% for item in items %}
      {%
        set item_classes = [
          item.is_expanded ? 'expanded ',
          item.is_expanded ? 'dropdown',
\t\t  item.is_expanded ? 'has-dropdown',
          item.in_active_trail ? 'active',
        ]
      %}
      {% if menu_level == 0 and item.is_expanded %}
        <li{{ item.attributes.addClass(item_classes) }}>
        
\t\t{{ link(item.title, item.url, { 'class':['dropdown__trigger'], 'data-target':['#'], 'data-toggle':['dropdown']}) }}
      {% else %}
        <li{{ item.attributes.addClass(item_classes) }}>
        {{ link(item.title, item.url, { 'class':['dropdown__trigger']}) }}
      {% endif %}
      {% if item.below %}
        {{ menus.menu_links(item.below, attributes.removeClass('nav', 'navbar-nav'), menu_level + 1) }}
      {% endif %}
      </li>
    {% endfor %}
    {% if menu_level == 0 %}
      </ul>
    {% else %}
\t          </ul>
\t        </div>
\t      </div>
\t    </div>
\t  </div>
    {% endif %}
  {% endif %}
{% endmacro %}
";
    }
}
