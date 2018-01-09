<?php

/* themes/stack/templates/block--system-branding-block.html.twig */
class __TwigTemplate_f478210a7db87c87a9da98b49951f824f3104bb713dc1e4ce2eae0eb34605e93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("block--bare.html.twig", "themes/stack/templates/block--system-branding-block.html.twig", 1);
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
        $__internal_2ab71296d88bced28a55ab5ec7341eea3d01c37c9c6933065362ea0d45bdcd26 = $this->env->getExtension("native_profiler");
        $__internal_2ab71296d88bced28a55ab5ec7341eea3d01c37c9c6933065362ea0d45bdcd26->enter($__internal_2ab71296d88bced28a55ab5ec7341eea3d01c37c9c6933065362ea0d45bdcd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/stack/templates/block--system-branding-block.html.twig"));

        $tags = array("if" => 20);
        $filters = array("t" => 21);
        $functions = array("path" => 21);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array('t'),
                array('path')
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
        
        $__internal_2ab71296d88bced28a55ab5ec7341eea3d01c37c9c6933065362ea0d45bdcd26->leave($__internal_2ab71296d88bced28a55ab5ec7341eea3d01c37c9c6933065362ea0d45bdcd26_prof);

    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        $__internal_8822c16c571836b9fc5769ea0820436df40c8d0045adfc966103b6169ca21477 = $this->env->getExtension("native_profiler");
        $__internal_8822c16c571836b9fc5769ea0820436df40c8d0045adfc966103b6169ca21477->enter($__internal_8822c16c571836b9fc5769ea0820436df40c8d0045adfc966103b6169ca21477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 19
        echo "<div class=\"site-branding\">
  ";
        // line 20
        if ((isset($context["site_logo"]) ? $context["site_logo"] : null)) {
            // line 21
            echo "    <a class=\"logo navbar-btn pull-left\" href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" rel=\"home\">
      <img class=\"logo logo-dark\" src=\"";
            // line 22
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_logo"]) ? $context["site_logo"] : null), "html", null, true));
            echo "\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" />
\t  <img class=\"logo logo-light\" src=\"";
            // line 23
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["base_path"]) ? $context["base_path"] : null), "html", null, true));
            echo "themes/stack/logo-light.png\" alt=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" />
    </a>
  ";
        }
        // line 26
        echo "  ";
        if ((isset($context["site_name"]) ? $context["site_name"] : null)) {
            // line 27
            echo "    <a class=\"name navbar-brand\" href=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar($this->env->getExtension('drupal_core')->getPath("<front>")));
            echo "\" title=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Home")));
            echo "\" rel=\"home\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_name"]) ? $context["site_name"] : null), "html", null, true));
            echo "</a>
  ";
        }
        // line 29
        echo "  ";
        if ((isset($context["site_slogan"]) ? $context["site_slogan"] : null)) {
            // line 30
            echo "    <p class=\"navbar-text\">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["site_slogan"]) ? $context["site_slogan"] : null), "html", null, true));
            echo "</p>
  ";
        }
        // line 32
        echo "</div>
";
        
        $__internal_8822c16c571836b9fc5769ea0820436df40c8d0045adfc966103b6169ca21477->leave($__internal_8822c16c571836b9fc5769ea0820436df40c8d0045adfc966103b6169ca21477_prof);

    }

    public function getTemplateName()
    {
        return "themes/stack/templates/block--system-branding-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 32,  106 => 30,  103 => 29,  93 => 27,  90 => 26,  82 => 23,  76 => 22,  69 => 21,  67 => 20,  64 => 19,  58 => 18,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"block--bare.html.twig\" %}
{#
/**
 * @file
 * Default theme implementation for a branding block.
 *
 * Each branding element variable (logo, name, slogan) is only available if
 * enabled in the block configuration.
 *
 * Available variables:
 * - site_logo: Logo for site as defined in Appearance or theme settings.
 * - site_name: Name for site as defined in Site information settings.
 * - site_slogan: Slogan for site as defined in Site information settings.
 *
 * @ingroup templates
 */
#}
{% block content %}
<div class=\"site-branding\">
  {% if site_logo %}
    <a class=\"logo navbar-btn pull-left\" href=\"{{ path('<front>') }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">
      <img class=\"logo logo-dark\" src=\"{{ site_logo }}\" alt=\"{{ 'Home'|t }}\" />
\t  <img class=\"logo logo-light\" src=\"{{ base_path }}themes/stack/logo-light.png\" alt=\"{{ 'Home'|t }}\" />
    </a>
  {% endif %}
  {% if site_name %}
    <a class=\"name navbar-brand\" href=\"{{ path('<front>') }}\" title=\"{{ 'Home'|t }}\" rel=\"home\">{{ site_name }}</a>
  {% endif %}
  {% if site_slogan %}
    <p class=\"navbar-text\">{{ site_slogan }}</p>
  {% endif %}
</div>
{% endblock %}
";
    }
}
