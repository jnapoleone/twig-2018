<?php

/* core/themes/classy/templates/field/field--text-with-summary.html.twig */
class __TwigTemplate_f3ca86e2cc96ec2effde8884cc28581d9df535da29d4e849e34f44cf83368241 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("field--text.html.twig", "core/themes/classy/templates/field/field--text-with-summary.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "field--text.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e82c19b3e34fb8f2084cc5db2a91d18b256fbac4c8c3177d6eba6fe5e43e1544 = $this->env->getExtension("native_profiler");
        $__internal_e82c19b3e34fb8f2084cc5db2a91d18b256fbac4c8c3177d6eba6fe5e43e1544->enter($__internal_e82c19b3e34fb8f2084cc5db2a91d18b256fbac4c8c3177d6eba6fe5e43e1544_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "core/themes/classy/templates/field/field--text-with-summary.html.twig"));

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
        
        $__internal_e82c19b3e34fb8f2084cc5db2a91d18b256fbac4c8c3177d6eba6fe5e43e1544->leave($__internal_e82c19b3e34fb8f2084cc5db2a91d18b256fbac4c8c3177d6eba6fe5e43e1544_prof);

    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/field/field--text-with-summary.html.twig";
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
