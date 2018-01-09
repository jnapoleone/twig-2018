<?php

/* core/modules/system/templates/block--system-messages-block.html.twig */
class __TwigTemplate_377b995655a0488cd760223f6540288a37340d64b4a22366ee2793d67985cd9f extends Twig_Template
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
        $__internal_d585ebe4b9273e620341e5a6c764eb89d1c97b89e7b39825198ae5497c238c3f = $this->env->getExtension("native_profiler");
        $__internal_d585ebe4b9273e620341e5a6c764eb89d1c97b89e7b39825198ae5497c238c3f->enter($__internal_d585ebe4b9273e620341e5a6c764eb89d1c97b89e7b39825198ae5497c238c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/modules/system/templates/block--system-messages-block.html.twig"));

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

        // line 15
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
";
        
        $__internal_d585ebe4b9273e620341e5a6c764eb89d1c97b89e7b39825198ae5497c238c3f->leave($__internal_d585ebe4b9273e620341e5a6c764eb89d1c97b89e7b39825198ae5497c238c3f_prof);

    }

    public function getTemplateName()
    {
        return "core/modules/system/templates/block--system-messages-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 15,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation for the messages block.
 *
 * Removes wrapper elements from block so that empty block does not appear when
 * there are no messages.
 *
 * Available variables:
 * - content: The content of this block.
 *
 * @ingroup themeable
 */
#}
{{ content }}
";
    }
}
