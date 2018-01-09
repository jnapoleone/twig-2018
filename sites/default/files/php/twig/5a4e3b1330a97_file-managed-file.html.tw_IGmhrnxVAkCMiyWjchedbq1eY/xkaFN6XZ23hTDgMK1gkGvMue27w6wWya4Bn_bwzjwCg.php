<?php

/* core/themes/classy/templates/content-edit/file-managed-file.html.twig */
class __TwigTemplate_6a4d63e9754c78e0dfe12c8d845f939a4e67f0e1db375da862a1b9ca0ab26f47 extends Twig_Template
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
        $__internal_45a786072e83a975b4ce91c5e312dfb025e70a2db08efe7aab5ad59a10306378 = $this->env->getExtension("native_profiler");
        $__internal_45a786072e83a975b4ce91c5e312dfb025e70a2db08efe7aab5ad59a10306378->enter($__internal_45a786072e83a975b4ce91c5e312dfb025e70a2db08efe7aab5ad59a10306378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/content-edit/file-managed-file.html.twig"));

        $tags = array("set" => 15);
        $filters = array();
        $functions = array("attach_library" => 13);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set'),
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

        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->attachLibrary("classy/file"), "html", null, true));
        echo "
";
        // line 15
        $context["classes"] = array(0 => "js-form-managed-file", 1 => "form-managed-file");
        // line 20
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
  ";
        // line 21
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["element"]) ? $context["element"] : null), "html", null, true));
        echo "
</div>
";
        
        $__internal_45a786072e83a975b4ce91c5e312dfb025e70a2db08efe7aab5ad59a10306378->leave($__internal_45a786072e83a975b4ce91c5e312dfb025e70a2db08efe7aab5ad59a10306378_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/content-edit/file-managed-file.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 21,  52 => 20,  50 => 15,  46 => 13,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to display a file form widget.
 *
 * Available variables:
 * - element: Form element for the file upload.
 * - attributes: HTML attributes for the containing element.
 *
 * @see template_preprocess_file_managed_file()
 */
#}
{{ attach_library('classy/file') }}
{%
  set classes = [
    'js-form-managed-file',
    'form-managed-file',
  ]
%}
<div{{ attributes.addClass(classes) }}>
  {{ element }}
</div>
";
    }
}
