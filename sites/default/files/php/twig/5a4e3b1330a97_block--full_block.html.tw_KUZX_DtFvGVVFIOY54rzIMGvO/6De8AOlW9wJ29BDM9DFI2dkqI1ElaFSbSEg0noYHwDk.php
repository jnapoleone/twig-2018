<?php

/* themes/stack/templates/block--full_block.html.twig */
class __TwigTemplate_b07dbd5edb299b88cac32339e677a8b04649d124e27d89b88780561257481fb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d2f63cda6b6ccf545e100d6f9a119aab6318fc701cfed1dba1876227c8423f42 = $this->env->getExtension("native_profiler");
        $__internal_d2f63cda6b6ccf545e100d6f9a119aab6318fc701cfed1dba1876227c8423f42->enter($__internal_d2f63cda6b6ccf545e100d6f9a119aab6318fc701cfed1dba1876227c8423f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/stack/templates/block--full_block.html.twig"));

        $tags = array("set" => 49, "if" => 50, "block" => 80);
        $filters = array("clean_class" => 58, "lower" => 60, "replace" => 60, "striptags" => 60, "render" => 60, "without" => 81);
        $functions = array("file_url" => 49);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 'lower', 'replace', 'striptags', 'render', 'without'),
                array('file_url')
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

        // line 48
        echo "
";
        // line 49
        $context["bg_img_url"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_block_background_image", array()), "#items", array(), "array"), "entity", array()), "uri", array()), "value", array())));
        // line 50
        if (((isset($context["bg_img_url"]) ? $context["bg_img_url"] : null) != "/")) {
            // line 51
            echo "  ";
            $context["image_class"] = "imagebg";
        } else {
            // line 53
            echo "  ";
            $context["image_class"] = "";
        }
        // line 56
        $context["classes"] = array(0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 58
(isset($context["configuration"]) ? $context["configuration"] : null), "provider", array()))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 59
(isset($context["plugin_id"]) ? $context["plugin_id"] : null))), 3 => twig_lower_filter($this->env, twig_replace_filter(strip_tags($this->env->getExtension('drupal_core')->renderVar($this->getAttribute(        // line 60
(isset($context["content"]) ? $context["content"] : null), "field_block_extra_class", array()))), array("
" => ""))), 4 => "clearfix", 5 =>         // line 62
(isset($context["image_class"]) ? $context["image_class"] : null));
        // line 65
        echo "<section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo "  id=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_replace_filter(strip_tags($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_block_id", array()))), array("
" => "", " " => "")), "html", null, true));
        echo "\" ";
        if (twig_replace_filter(strip_tags($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_block_data_overlay", array()))), array("
" => "", " " => ""))) {
            echo " data-overlay=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_replace_filter(strip_tags($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_block_data_overlay", array()))), array("
" => "", " " => "")), "html", null, true));
            echo "\" ";
        }
        echo " >

  <div class=\"block-inner\">
    ";
        // line 68
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
    ";
        // line 69
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "
  </div>
  
  ";
        // line 72
        if (((isset($context["bg_img_url"]) ? $context["bg_img_url"] : null) != "/")) {
            // line 73
            echo "\t<div class=\"background-image-holder\">
       <img alt=\"background\" src=\"";
            // line 74
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bg_img_url"]) ? $context["bg_img_url"] : null), "html", null, true));
            echo "\" />
    </div>
  ";
        }
        // line 77
        echo "  ";
        if (twig_replace_filter(strip_tags($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_block_container", array()))), array("
" => "", " " => ""))) {
            // line 78
            echo "    <div class=\"container ";
            if ((twig_lower_filter($this->env, twig_replace_filter(strip_tags($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_content_vertical_center", array()))), array("
" => "", " " => ""))) == "on")) {
                echo " pos-vertical-center ";
            }
            echo " \">
  ";
        }
        // line 80
        echo "    ";
        $this->displayBlock('content', $context, $blocks);
        // line 83
        echo "\t
  ";
        // line 84
        if (twig_replace_filter(strip_tags($this->env->getExtension('drupal_core')->renderVar($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_block_container", array()))), array("
" => "", " " => ""))) {
            echo " </div> ";
        }
        // line 85
        echo "</section>






";
        
        $__internal_d2f63cda6b6ccf545e100d6f9a119aab6318fc701cfed1dba1876227c8423f42->leave($__internal_d2f63cda6b6ccf545e100d6f9a119aab6318fc701cfed1dba1876227c8423f42_prof);

    }

    // line 80
    public function block_content($context, array $blocks = array())
    {
        $__internal_d89c2291a072a6888256816668882d4c9c88422dfba7230788a15d61dc8b2f71 = $this->env->getExtension("native_profiler");
        $__internal_d89c2291a072a6888256816668882d4c9c88422dfba7230788a15d61dc8b2f71->enter($__internal_d89c2291a072a6888256816668882d4c9c88422dfba7230788a15d61dc8b2f71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 81
        echo "      ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "field_block_extra_class", "field_block_background_image", "field_content_vertical_center", "field_block_data_overlay", "field_block_id", "field_block_container"), "html", null, true));
        echo "
    ";
        
        $__internal_d89c2291a072a6888256816668882d4c9c88422dfba7230788a15d61dc8b2f71->leave($__internal_d89c2291a072a6888256816668882d4c9c88422dfba7230788a15d61dc8b2f71_prof);

    }

    public function getTemplateName()
    {
        return "themes/stack/templates/block--full_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 81,  146 => 80,  132 => 85,  127 => 84,  124 => 83,  121 => 80,  112 => 78,  108 => 77,  102 => 74,  99 => 73,  97 => 72,  91 => 69,  87 => 68,  69 => 65,  67 => 62,  65 => 60,  64 => 59,  63 => 58,  62 => 56,  58 => 53,  54 => 51,  52 => 50,  50 => 49,  47 => 48,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a block.
 *
 * Available variables:
 * - \$block->subject: Block title.
 * - \$content: Block content.
 * - \$block->module: Module that generated the block.
 * - \$block->delta: An ID for the block, unique within each module.
 * - \$block->region: The block region embedding the current block.
 * - \$classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable \$classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - block: The current template type, i.e., \"theming hook\".
 *   - block-[module]: The module generating the block. For example, the user
 *     module is responsible for handling the default user navigation block. In
 *     that case the class would be 'block-user'.
 * - \$title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - \$title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Helper variables:
 * - \$classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable \$classes.
 * - \$block_zebra: Outputs 'odd' and 'even' dependent on each block region.
 * - \$zebra: Same output as \$block_zebra but independent of any block region.
 * - \$block_id: Counter dependent on each block region.
 * - \$id: Same output as \$block_id but independent of any block region.
 * - \$is_front: Flags true when presented in the front page.
 * - \$logged_in: Flags true when the current user is a logged-in member.
 * - \$is_admin: Flags true when the current user is an administrator.
 * - \$block_html_id: A valid HTML ID and guaranteed unique.
 *
 * @ingroup templates
 *
 * @see bootstrap_preprocess_block()
 * @see template_preprocess()
 * @see template_preprocess_block()
 * @see bootstrap_process_block()
 * @see template_process()
 */
#}

{% set bg_img_url = file_url(content.field_block_background_image['#items'].entity.uri.value) %}
{% if bg_img_url != '/'%}
  {% set image_class = 'imagebg' %}
{% else %}
  {% set image_class = '' %}
{% endif %}
{%
  set classes = [
    'block',
    'block-' ~ configuration.provider|clean_class,
    'block-' ~ plugin_id|clean_class,
\tcontent.field_block_extra_class|render|striptags|replace({\"\\n\":\"\"})|lower,
    'clearfix',
\timage_class,
  ]
%}
<section{{ attributes.addClass(classes) }}  id=\"{{ content.field_block_id|render|striptags|replace({\"\\n\":\"\", \" \":\"\"}) }}\" {% if content.field_block_data_overlay|render|striptags|replace({\"\\n\":\"\", \" \":\"\"}) %} data-overlay=\"{{ content.field_block_data_overlay|render|striptags|replace({\"\\n\":\"\", \" \":\"\"}) }}\" {% endif %} >

  <div class=\"block-inner\">
    {{ title_prefix }}
    {{ title_suffix }}
  </div>
  
  {% if bg_img_url != '/' %}
\t<div class=\"background-image-holder\">
       <img alt=\"background\" src=\"{{ bg_img_url }}\" />
    </div>
  {% endif %}
  {% if content.field_block_container|render|striptags|replace({\"\\n\":\"\", \" \":\"\"}) %}
    <div class=\"container {% if content.field_content_vertical_center|render|striptags|replace({\"\\n\":\"\", \" \":\"\"})|lower == 'on' %} pos-vertical-center {% endif %} \">
  {% endif %}
    {% block content %}
      {{ content|without('field_block_extra_class','field_block_background_image','field_content_vertical_center','field_block_data_overlay','field_block_id','field_block_container') }}
    {% endblock %}
\t
  {% if content.field_block_container|render|striptags|replace({\"\\n\":\"\", \" \":\"\"}) %} </div> {% endif %}
</section>






";
    }
}
