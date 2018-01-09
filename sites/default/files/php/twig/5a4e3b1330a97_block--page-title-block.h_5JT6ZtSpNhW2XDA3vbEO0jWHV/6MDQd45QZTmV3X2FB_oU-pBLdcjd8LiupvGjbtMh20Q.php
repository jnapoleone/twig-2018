<?php

/* themes/bootstrap/templates/block/block--page-title-block.html.twig */
class __TwigTemplate_66623574805b24f96c3f69f2dba25cbcee145f826adaf014bcb2a8b3ba21551e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("block--bare.html.twig", "themes/bootstrap/templates/block/block--page-title-block.html.twig", 9);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "block--bare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6fb434c7ed80a19b5a44386f66342ff44b19bbbd02fbc9379b527ff2ab46c46d = $this->env->getExtension("native_profiler");
        $__internal_6fb434c7ed80a19b5a44386f66342ff44b19bbbd02fbc9379b527ff2ab46c46d->enter($__internal_6fb434c7ed80a19b5a44386f66342ff44b19bbbd02fbc9379b527ff2ab46c46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/block/block--page-title-block.html.twig"));

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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fb434c7ed80a19b5a44386f66342ff44b19bbbd02fbc9379b527ff2ab46c46d->leave($__internal_6fb434c7ed80a19b5a44386f66342ff44b19bbbd02fbc9379b527ff2ab46c46d_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/block/block--page-title-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 9,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override for page title block.
 *
 * @ingroup templates
 */
#}
{% extends \"block--bare.html.twig\" %}
";
    }
}
