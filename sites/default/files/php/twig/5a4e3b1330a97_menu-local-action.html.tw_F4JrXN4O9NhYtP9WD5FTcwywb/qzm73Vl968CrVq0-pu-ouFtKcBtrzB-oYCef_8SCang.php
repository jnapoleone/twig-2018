<?php

/* core/themes/classy/templates/navigation/menu-local-action.html.twig */
class __TwigTemplate_ef7c1944d2e60ab951e4b768fe499a3697c56cee441f4b12830ef7cbf42fa0b0 extends Twig_Template
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
        $__internal_e5280b9ccb76440668873661b674ae016a0ee21a1ffbfbd760ffbbc42c31e983 = $this->env->getExtension("native_profiler");
        $__internal_e5280b9ccb76440668873661b674ae016a0ee21a1ffbfbd760ffbbc42c31e983->enter($__internal_e5280b9ccb76440668873661b674ae016a0ee21a1ffbfbd760ffbbc42c31e983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/navigation/menu-local-action.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
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

        // line 13
        echo "<li";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true));
        echo "</li>
";
        
        $__internal_e5280b9ccb76440668873661b674ae016a0ee21a1ffbfbd760ffbbc42c31e983->leave($__internal_e5280b9ccb76440668873661b674ae016a0ee21a1ffbfbd760ffbbc42c31e983_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/navigation/menu-local-action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for a single local action link.
 *
 * Available variables:
 * - attributes: HTML attributes for the wrapper element.
 * - link: A rendered link element.
 *
 * @see template_preprocess_menu_local_action()
 */
#}
<li{{ attributes }}>{{ link }}</li>
";
    }
}
