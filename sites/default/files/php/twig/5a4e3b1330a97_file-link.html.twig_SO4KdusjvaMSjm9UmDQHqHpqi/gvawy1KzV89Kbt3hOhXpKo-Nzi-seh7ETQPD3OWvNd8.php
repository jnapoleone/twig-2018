<?php

/* core/themes/classy/templates/field/file-link.html.twig */
class __TwigTemplate_60da106cca32ec7956318196074f757332bee539ca6f6f3146e9aa04395becca extends Twig_Template
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
        $__internal_13a5bdae7e438b57c5649f27a1d446e9c3e9c419aa8e194c9fb4f3dba84e5094 = $this->env->getExtension("native_profiler");
        $__internal_13a5bdae7e438b57c5649f27a1d446e9c3e9c419aa8e194c9fb4f3dba84e5094->enter($__internal_13a5bdae7e438b57c5649f27a1d446e9c3e9c419aa8e194c9fb4f3dba84e5094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/field/file-link.html.twig"));

        $tags = array();
        $filters = array();
        $functions = array("attach_library" => 14);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array('attach_library')
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
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("classy/file"), "html", null, true));
        echo "
<span";
        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["attributes"]) ? $context["attributes"] : null), "html", null, true));
        echo ">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true));
        echo " ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["link"]) ? $context["link"] : null), "html", null, true));
        echo "</span>
";
        
        $__internal_13a5bdae7e438b57c5649f27a1d446e9c3e9c419aa8e194c9fb4f3dba84e5094->leave($__internal_13a5bdae7e438b57c5649f27a1d446e9c3e9c419aa8e194c9fb4f3dba84e5094_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/field/file-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 15,  46 => 14,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for a link to a file.
 *
 * Available variables:
 * - attributes: The HTML attributes for the containing element.
 * - link: A link to the file.
 * - icon: The icon image representing the file type.
 *
 * @see template_preprocess_file_link()
 */
#}
{{ attach_library('classy/file') }}
<span{{ attributes }}>{{ icon }} {{ link }}</span>
";
    }
}
