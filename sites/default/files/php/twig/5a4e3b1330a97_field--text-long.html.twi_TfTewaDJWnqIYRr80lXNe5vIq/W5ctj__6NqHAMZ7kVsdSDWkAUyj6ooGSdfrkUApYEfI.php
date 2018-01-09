<?php

/* core/themes/classy/templates/field/field--text-long.html.twig */
class __TwigTemplate_934e1648c2177de82ee8f80d3938ad51f3f37dba3e22148c22944d23a45ffc11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("field--text.html.twig", "core/themes/classy/templates/field/field--text-long.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "field--text.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1d6bc3572c78f18a8664a08ac96011abca722d8f27fca51f8ab3f435068bdf8b = $this->env->getExtension("native_profiler");
        $__internal_1d6bc3572c78f18a8664a08ac96011abca722d8f27fca51f8ab3f435068bdf8b->enter($__internal_1d6bc3572c78f18a8664a08ac96011abca722d8f27fca51f8ab3f435068bdf8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/field/field--text-long.html.twig"));

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
        
        $__internal_1d6bc3572c78f18a8664a08ac96011abca722d8f27fca51f8ab3f435068bdf8b->leave($__internal_1d6bc3572c78f18a8664a08ac96011abca722d8f27fca51f8ab3f435068bdf8b_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/field/field--text-long.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"field--text.html.twig\" %}
";
    }
}
