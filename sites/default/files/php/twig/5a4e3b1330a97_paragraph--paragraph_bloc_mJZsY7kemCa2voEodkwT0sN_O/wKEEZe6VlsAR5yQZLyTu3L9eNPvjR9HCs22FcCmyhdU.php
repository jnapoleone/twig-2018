<?php

/* themes/stack/templates/paragraph--paragraph_block.html.twig */
class __TwigTemplate_75f27336ee2efbd18f63aa092faac479440206ebca84d11ca6ee12f3576474dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'paragraph' => array($this, 'block_paragraph'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_40003c99d1ddf525eacf72fea465247c28a9bf705ecd3037fafc2447c9dfe843 = $this->env->getExtension("native_profiler");
        $__internal_40003c99d1ddf525eacf72fea465247c28a9bf705ecd3037fafc2447c9dfe843->enter($__internal_40003c99d1ddf525eacf72fea465247c28a9bf705ecd3037fafc2447c9dfe843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/stack/templates/paragraph--paragraph_block.html.twig"));

        $tags = array("set" => 42, "block" => 50, "if" => 53);
        $filters = array("clean_class" => 44, "trim" => 45, "render" => 45, "without" => 56);
        $functions = array("file_url" => 49);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'block', 'if'),
                array('clean_class', 'trim', 'render', 'without'),
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

        // line 42
        $context["classes"] = array(0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 44
(isset($context["paragraph"]) ? $context["paragraph"] : null), "bundle", array()))), 2 => trim($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute(        // line 45
(isset($context["paragraph"]) ? $context["paragraph"] : null), "field_paragraph_extra_class", array()), "value", array()))), 3 => ((        // line 46
(isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass((isset($context["view_mode"]) ? $context["view_mode"] : null)))) : ("")));
        // line 49
        $context["bg_img_url"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_paragraph_background_image", array()), "#items", array(), "array"), "entity", array()), "uri", array()), "value", array())));
        // line 50
        $this->displayBlock('paragraph', $context, $blocks);
        
        $__internal_40003c99d1ddf525eacf72fea465247c28a9bf705ecd3037fafc2447c9dfe843->leave($__internal_40003c99d1ddf525eacf72fea465247c28a9bf705ecd3037fafc2447c9dfe843_prof);

    }

    public function block_paragraph($context, array $blocks = array())
    {
        $__internal_a5223176f040983563ebd692acbdbcc18c61e1b8a69cb97954d78636053639de = $this->env->getExtension("native_profiler");
        $__internal_a5223176f040983563ebd692acbdbcc18c61e1b8a69cb97954d78636053639de->enter($__internal_a5223176f040983563ebd692acbdbcc18c61e1b8a69cb97954d78636053639de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paragraph"));

        // line 51
        echo "

  <section";
        // line 53
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo " ";
        if (trim($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_paragraph_id", array()), "value", array())))) {
            echo " id=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, trim($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_paragraph_id", array()), "value", array()))), "html", null, true));
            echo "\"  ";
        }
        echo " ";
        if (trim($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_data_gradient_bg", array()), "value", array())))) {
            echo " data-gradient-bg=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, trim($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_data_gradient_bg", array()), "value", array()))), "html", null, true));
            echo "\" ";
        }
        echo " >
    <div class=\"container ";
        // line 54
        if (trim($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_content_vertical_center", array()), "value", array())))) {
            echo " pos-vertical-center ";
        }
        echo " \">
    ";
        // line 55
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "\t</div>
  </section>
";
        
        $__internal_a5223176f040983563ebd692acbdbcc18c61e1b8a69cb97954d78636053639de->leave($__internal_a5223176f040983563ebd692acbdbcc18c61e1b8a69cb97954d78636053639de_prof);

    }

    // line 55
    public function block_content($context, array $blocks = array())
    {
        $__internal_93a8cab864830ab469dc08b22bc537080306bd1bb35ccb54992dd859ce4cdc4d = $this->env->getExtension("native_profiler");
        $__internal_93a8cab864830ab469dc08b22bc537080306bd1bb35ccb54992dd859ce4cdc4d->enter($__internal_93a8cab864830ab469dc08b22bc537080306bd1bb35ccb54992dd859ce4cdc4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "\t
      ";
        // line 56
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "field_paragraph_extra_class", "field_content_vertical_center", "field_paragraph_id", "field_data_gradient_bg"), "html", null, true));
        echo "
    ";
        
        $__internal_93a8cab864830ab469dc08b22bc537080306bd1bb35ccb54992dd859ce4cdc4d->leave($__internal_93a8cab864830ab469dc08b22bc537080306bd1bb35ccb54992dd859ce4cdc4d_prof);

    }

    public function getTemplateName()
    {
        return "themes/stack/templates/paragraph--paragraph_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 56,  104 => 55,  95 => 58,  93 => 55,  87 => 54,  71 => 53,  67 => 51,  55 => 50,  53 => 49,  51 => 46,  50 => 45,  49 => 44,  48 => 42,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a paragraph.
 *
 * Available variables:
 * - paragraph: Full paragraph entity.
 *   Only method names starting with \"get\", \"has\", or \"is\" and a few common
 *   methods such as \"id\", \"label\", and \"bundle\" are available. For example:
 *   - paragraph.getCreatedTime() will return the paragraph creation timestamp.
 *   - paragraph.id(): The paragraph ID.
 *   - paragraph.bundle(): The type of the paragraph, for example, \"image\" or \"text\".
 *   - paragraph.getOwnerId(): The user ID of the paragraph author.
 *   See Drupal\\paragraphs\\Entity\\Paragraph for a full list of public properties
 *   and methods for the paragraph object.
 * - content: All paragraph items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - paragraphs: The current template type (also known as a \"theming hook\").
 *   - paragraphs--type-[type]: The current paragraphs type. For example, if the paragraph is an
 *     \"Image\" it would result in \"paragraphs--type--image\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - paragraphs--view-mode--[view_mode]: The View Mode of the paragraph; for example, a
 *     preview would result in: \"paragraphs--view-mode--preview\", and
 *     default: \"paragraphs--view-mode--default\".
 * - view_mode: View mode; for example, \"preview\" or \"full\".
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @see template_preprocess_paragraph()
 *
 * @ingroup themeable
 */
#}
{%
  set classes = [
    'paragraph',
    'paragraph--type--' ~ paragraph.bundle|clean_class,
\tparagraph.field_paragraph_extra_class.value|render|trim,
    view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
  ]
%}
{% set bg_img_url = file_url(content.field_paragraph_background_image['#items'].entity.uri.value) %}
{% block paragraph %}


  <section{{ attributes.addClass(classes) }} {% if paragraph.field_paragraph_id.value|render|trim %} id=\"{{ paragraph.field_paragraph_id.value|render|trim }}\"  {% endif %} {% if paragraph.field_data_gradient_bg.value|render|trim %} data-gradient-bg=\"{{ paragraph.field_data_gradient_bg.value|render|trim }}\" {% endif %} >
    <div class=\"container {% if paragraph.field_content_vertical_center.value|render|trim %} pos-vertical-center {% endif %} \">
    {% block content %}\t
      {{ content|without('field_paragraph_extra_class','field_content_vertical_center','field_paragraph_id','field_data_gradient_bg') }}
    {% endblock %}
\t</div>
  </section>
{% endblock paragraph %}
";
    }
}
