<?php

/* {# inline_template_start #}<div class="field-plugin-summary">{{ summary|safe_join("<br />") }}</div> */
class __TwigTemplate_f821c77039c217f90bf7a8f976486c27a1fbd3d077f048bd0be538f78a56fbe7 extends Twig_Template
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
        $__internal_375325f7b337fa335179fdeb270e3b8d2b0fd9c547c092a3afa06a7117758e0a = $this->env->getExtension("native_profiler");
        $__internal_375325f7b337fa335179fdeb270e3b8d2b0fd9c547c092a3afa06a7117758e0a->enter($__internal_375325f7b337fa335179fdeb270e3b8d2b0fd9c547c092a3afa06a7117758e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "{# inline_template_start #}<div class=\"field-plugin-summary\">{{ summary|safe_join(\"<br />\") }}</div>"));

        $tags = array();
        $filters = array("safe_join" => 1);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('safe_join'),
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

        // line 1
        echo "<div class=\"field-plugin-summary\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->safeJoin($this->env, (isset($context["summary"]) ? $context["summary"] : null), "<br />")));
        echo "</div>";
        
        $__internal_375325f7b337fa335179fdeb270e3b8d2b0fd9c547c092a3afa06a7117758e0a->leave($__internal_375325f7b337fa335179fdeb270e3b8d2b0fd9c547c092a3afa06a7117758e0a_prof);

    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"field-plugin-summary\">{{ summary|safe_join(\"<br />\") }}</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 1,);
    }

    public function getSource()
    {
        return "{# inline_template_start #}<div class=\"field-plugin-summary\">{{ summary|safe_join(\"<br />\") }}</div>";
    }
}
