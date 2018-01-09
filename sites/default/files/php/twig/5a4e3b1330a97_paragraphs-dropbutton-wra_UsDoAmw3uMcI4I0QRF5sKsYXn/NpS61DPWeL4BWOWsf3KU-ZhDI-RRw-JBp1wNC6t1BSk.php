<?php

/* modules/paragraphs/templates/paragraphs-dropbutton-wrapper.html.twig */
class __TwigTemplate_af5b4718a1e4cdb90d3fef5a2c927ff9652333487c7aefd51115e2c9977fe823 extends Twig_Template
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
        $__internal_2dbb79a90de8df418b048e2961f3418f9ed5e92d6d42843c8672fababdf8c1ce = $this->env->getExtension("native_profiler");
        $__internal_2dbb79a90de8df418b048e2961f3418f9ed5e92d6d42843c8672fababdf8c1ce->enter($__internal_2dbb79a90de8df418b048e2961f3418f9ed5e92d6d42843c8672fababdf8c1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "modules/paragraphs/templates/paragraphs-dropbutton-wrapper.html.twig"));

        $tags = array("if" => 15, "spaceless" => 16);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'spaceless'),
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

        // line 15
        if ((isset($context["children"]) ? $context["children"] : null)) {
            // line 16
            echo "  ";
            ob_start();
            // line 17
            echo "    <div class=\"paragraphs-dropbutton-wrapper\">
      ";
            // line 18
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["children"]) ? $context["children"] : null), "html", null, true));
            echo "
    </div>
  ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        }
        
        $__internal_2dbb79a90de8df418b048e2961f3418f9ed5e92d6d42843c8672fababdf8c1ce->leave($__internal_2dbb79a90de8df418b048e2961f3418f9ed5e92d6d42843c8672fababdf8c1ce_prof);

    }

    public function getTemplateName()
    {
        return "modules/paragraphs/templates/paragraphs-dropbutton-wrapper.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 18,  51 => 17,  48 => 16,  46 => 15,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation for a paragraphs dropbutton wrapper.
 *
 * Available variables:
 * - children: Contains the child elements of the paragraphs dropbutton menu.
 *
 * @see template_preprocess()
 * @see template_preprocess_paragraphs_dropbutton_wrapper()
 *
 * @ingroup themeable
 */
#}
{% if children %}
  {% spaceless %}
    <div class=\"paragraphs-dropbutton-wrapper\">
      {{ children }}
    </div>
  {% endspaceless %}
{% endif %}
";
    }
}
