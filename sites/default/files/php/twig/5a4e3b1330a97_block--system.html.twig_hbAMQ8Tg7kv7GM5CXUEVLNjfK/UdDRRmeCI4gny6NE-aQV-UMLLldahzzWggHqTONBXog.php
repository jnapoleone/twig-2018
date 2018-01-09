<?php

/* themes/bootstrap/templates/block/block--system.html.twig */
class __TwigTemplate_8fbd4ebf6771bab7b098a5d2acd6447e789bd3a1564b8472821e9c5e298b5d82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("block--bare.html.twig", "themes/bootstrap/templates/block/block--system.html.twig", 9);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "block--bare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c68abd8e9979f59f1db9e422d131704749f955dc2a58ecf86f7ae284d8a8dae = $this->env->getExtension("native_profiler");
        $__internal_5c68abd8e9979f59f1db9e422d131704749f955dc2a58ecf86f7ae284d8a8dae->enter($__internal_5c68abd8e9979f59f1db9e422d131704749f955dc2a58ecf86f7ae284d8a8dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/block/block--system.html.twig"));

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
        
        $__internal_5c68abd8e9979f59f1db9e422d131704749f955dc2a58ecf86f7ae284d8a8dae->leave($__internal_5c68abd8e9979f59f1db9e422d131704749f955dc2a58ecf86f7ae284d8a8dae_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/block/block--system.html.twig";
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
 * Theme override for system blocks.
 *
 * @ingroup templates
 */
#}
{% extends \"block--bare.html.twig\" %}
";
    }
}
