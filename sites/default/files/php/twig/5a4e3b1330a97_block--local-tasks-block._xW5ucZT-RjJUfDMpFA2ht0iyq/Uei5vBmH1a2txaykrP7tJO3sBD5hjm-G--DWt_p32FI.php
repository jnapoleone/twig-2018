<?php

/* themes/bootstrap/templates/block/block--local-tasks-block.html.twig */
class __TwigTemplate_0c166f49bfec93a85f8525964d8ee7de0f75f318d4eb2f4d2bab7afaa522b1d0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block--bare.html.twig", "themes/bootstrap/templates/block/block--local-tasks-block.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "block--bare.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec522abf69c8e245e0a111444610e0375c82c8d86a9982356c8fe4101568b615 = $this->env->getExtension("native_profiler");
        $__internal_ec522abf69c8e245e0a111444610e0375c82c8d86a9982356c8fe4101568b615->enter($__internal_ec522abf69c8e245e0a111444610e0375c82c8d86a9982356c8fe4101568b615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/bootstrap/templates/block/block--local-tasks-block.html.twig"));

        $tags = array("if" => 11);
        $filters = array("t" => 12);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
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
        
        $__internal_ec522abf69c8e245e0a111444610e0375c82c8d86a9982356c8fe4101568b615->leave($__internal_ec522abf69c8e245e0a111444610e0375c82c8d86a9982356c8fe4101568b615_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_6ee9bead2650de2356b9aca8356ade79e42fd86d814222103a743e60b9270e8d = $this->env->getExtension("native_profiler");
        $__internal_6ee9bead2650de2356b9aca8356ade79e42fd86d814222103a743e60b9270e8d->enter($__internal_6ee9bead2650de2356b9aca8356ade79e42fd86d814222103a743e60b9270e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "  ";
        if ((isset($context["content"]) ? $context["content"] : null)) {
            // line 12
            echo "    <nav class=\"tabs\" role=\"navigation\" aria-label=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Tabs")));
            echo "\">
      ";
            // line 13
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
            echo "
    </nav>
  ";
        }
        
        $__internal_6ee9bead2650de2356b9aca8356ade79e42fd86d814222103a743e60b9270e8d->leave($__internal_6ee9bead2650de2356b9aca8356ade79e42fd86d814222103a743e60b9270e8d_prof);

    }

    public function getTemplateName()
    {
        return "themes/bootstrap/templates/block/block--local-tasks-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 13,  67 => 12,  64 => 11,  58 => 10,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"block--bare.html.twig\" %}
{#
/**
 * @file
 * Theme override for tabs.
 *
 * @ingroup templates
 */
#}
{% block content %}
  {% if content %}
    <nav class=\"tabs\" role=\"navigation\" aria-label=\"{{ 'Tabs'|t }}\">
      {{ content }}
    </nav>
  {% endif %}
{% endblock %}
";
    }
}
