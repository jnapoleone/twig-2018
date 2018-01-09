<?php

/* themes/stack/templates/block.html.twig */
class __TwigTemplate_07295e26429d55fbb07ed8c65042cda5af34d687d89b5160b5228c4e70e74c45 extends Twig_Template
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
        $__internal_4aba6160ca412f8eb8130ff0a325bce0cafb8df3c052c86e92d566ae9ed0d8eb = $this->env->getExtension("native_profiler");
        $__internal_4aba6160ca412f8eb8130ff0a325bce0cafb8df3c052c86e92d566ae9ed0d8eb->enter($__internal_4aba6160ca412f8eb8130ff0a325bce0cafb8df3c052c86e92d566ae9ed0d8eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/stack/templates/block.html.twig"));

        $tags = array("set" => 49, "if" => 59, "block" => 64);
        $filters = array("clean_class" => 51);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class'),
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

        // line 49
        $context["classes"] = array(0 => "block", 1 => ("block-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 51
(isset($context["configuration"]) ? $context["configuration"] : null), "provider", array()))), 2 => ("block-" . \Drupal\Component\Utility\Html::getClass(        // line 52
(isset($context["plugin_id"]) ? $context["plugin_id"] : null))), 3 => "clearfix");
        // line 56
        echo "<div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
<div class=\"block-inner\">
  ";
        // line 58
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_prefix"]) ? $context["title_prefix"] : null), "html", null, true));
        echo "
  ";
        // line 59
        if ((isset($context["label"]) ? $context["label"] : null)) {
            // line 60
            echo "    <h2";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "block-title"), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</h2>
  ";
        }
        // line 62
        echo "  ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title_suffix"]) ? $context["title_suffix"] : null), "html", null, true));
        echo "

  ";
        // line 64
        $this->displayBlock('content', $context, $blocks);
        // line 67
        echo "</div>
</div>

";
        
        $__internal_4aba6160ca412f8eb8130ff0a325bce0cafb8df3c052c86e92d566ae9ed0d8eb->leave($__internal_4aba6160ca412f8eb8130ff0a325bce0cafb8df3c052c86e92d566ae9ed0d8eb_prof);

    }

    // line 64
    public function block_content($context, array $blocks = array())
    {
        $__internal_790222f32ac0e4f9d52ac2b5f4d1f0aab9ae7f5124f188163d578605e8c2eebc = $this->env->getExtension("native_profiler");
        $__internal_790222f32ac0e4f9d52ac2b5f4d1f0aab9ae7f5124f188163d578605e8c2eebc->enter($__internal_790222f32ac0e4f9d52ac2b5f4d1f0aab9ae7f5124f188163d578605e8c2eebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 65
        echo "    ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["content"]) ? $context["content"] : null), "html", null, true));
        echo "
  ";
        
        $__internal_790222f32ac0e4f9d52ac2b5f4d1f0aab9ae7f5124f188163d578605e8c2eebc->leave($__internal_790222f32ac0e4f9d52ac2b5f4d1f0aab9ae7f5124f188163d578605e8c2eebc_prof);

    }

    public function getTemplateName()
    {
        return "themes/stack/templates/block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 65,  89 => 64,  79 => 67,  77 => 64,  71 => 62,  63 => 60,  61 => 59,  57 => 58,  51 => 56,  49 => 52,  48 => 51,  47 => 49,);
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
{%
  set classes = [
    'block',
    'block-' ~ configuration.provider|clean_class,
    'block-' ~ plugin_id|clean_class,
    'clearfix',
  ]
%}
<div{{ attributes.addClass(classes) }}>
<div class=\"block-inner\">
  {{ title_prefix }}
  {% if label %}
    <h2{{ title_attributes.addClass('block-title') }}>{{ label }}</h2>
  {% endif %}
  {{ title_suffix }}

  {% block content %}
    {{ content }}
  {% endblock %}
</div>
</div>

";
    }
}
