<?php

/* core/themes/classy/templates/field/image.html.twig */
class __TwigTemplate_2e0d704eb200b2974af21ee4f874504283c37dc4ae52e7a1f9cedf96e0700d93 extends Twig_Template
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
        $__internal_18193a7eeb601ae6c6c6bc4ed44d04f3428f90dd309e13e64ef8bd3831030182 = $this->env->getExtension("native_profiler");
        $__internal_18193a7eeb601ae6c6c6bc4ed44d04f3428f90dd309e13e64ef8bd3831030182->enter($__internal_18193a7eeb601ae6c6c6bc4ed44d04f3428f90dd309e13e64ef8bd3831030182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/field/image.html.twig"));

        $tags = array("set" => 14);
        $filters = array("clean_class" => 15);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
                array('clean_class'),
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

        // line 14
        $context["classes"] = array(0 => ((        // line 15
(isset($context["style_name"]) ? $context["style_name"] : null)) ? (("image-style-" . \Drupal\Component\Utility\Html::getClass((isset($context["style_name"]) ? $context["style_name"] : null)))) : ("")));
        // line 18
        echo "<img";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo " />
";
        
        $__internal_18193a7eeb601ae6c6c6bc4ed44d04f3428f90dd309e13e64ef8bd3831030182->leave($__internal_18193a7eeb601ae6c6c6bc4ed44d04f3428f90dd309e13e64ef8bd3831030182_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/field/image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 18,  47 => 15,  46 => 14,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override of an image.
 *
 * Available variables:
 * - attributes: HTML attributes for the img tag.
 * - style_name: (optional) The name of the image style applied.
 *
 * @see template_preprocess_image()
 */
#}
{%
set classes = [
  style_name ? 'image-style-' ~ style_name|clean_class,
]
%}
<img{{ attributes.addClass(classes) }} />
";
    }
}
