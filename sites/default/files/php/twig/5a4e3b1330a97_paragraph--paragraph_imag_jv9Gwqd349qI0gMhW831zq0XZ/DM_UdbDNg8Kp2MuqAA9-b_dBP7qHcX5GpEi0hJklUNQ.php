<?php

/* themes/stack/templates/paragraph--paragraph_image_cover_block.html.twig */
class __TwigTemplate_2c2e8269c0b02faaf3e74c1ee411b964254b392c95fc2636131442daa1514655 extends Twig_Template
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
        $__internal_38fa8ca23da256e002ec751b7b7e78d4883c97f66818ef76ca7edbaacb73cd1b = $this->env->getExtension("native_profiler");
        $__internal_38fa8ca23da256e002ec751b7b7e78d4883c97f66818ef76ca7edbaacb73cd1b->enter($__internal_38fa8ca23da256e002ec751b7b7e78d4883c97f66818ef76ca7edbaacb73cd1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/stack/templates/paragraph--paragraph_image_cover_block.html.twig"));

        $tags = array("set" => 41, "if" => 42, "block" => 57);
        $filters = array("clean_class" => 50, "trim" => 51, "render" => 51, "without" => 66);
        $functions = array("file_url" => 41);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
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

        // line 41
        $context["bg_img_url"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_paragraph_background_image", array()), "#items", array(), "array"), "entity", array()), "uri", array()), "value", array())));
        // line 42
        if (((isset($context["bg_img_url"]) ? $context["bg_img_url"] : null) != "/")) {
            // line 43
            echo "  ";
            $context["image_class"] = "imagebg";
        } else {
            // line 45
            echo "  ";
            $context["image_class"] = "";
        }
        // line 48
        $context["classes"] = array(0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 50
(isset($context["paragraph"]) ? $context["paragraph"] : null), "bundle", array()))), 2 => trim($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute(        // line 51
(isset($context["paragraph"]) ? $context["paragraph"] : null), "field_paragraph_extra_class", array()), "value", array()))), 3 => "cover", 4 =>         // line 53
(isset($context["image_class"]) ? $context["image_class"] : null), 5 => ((        // line 54
(isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass((isset($context["view_mode"]) ? $context["view_mode"] : null)))) : ("")));
        // line 57
        $this->displayBlock('paragraph', $context, $blocks);
        
        $__internal_38fa8ca23da256e002ec751b7b7e78d4883c97f66818ef76ca7edbaacb73cd1b->leave($__internal_38fa8ca23da256e002ec751b7b7e78d4883c97f66818ef76ca7edbaacb73cd1b_prof);

    }

    public function block_paragraph($context, array $blocks = array())
    {
        $__internal_39f921efbc505531cea58cc62c6a928d8d914a2b6c18d7b26b44f8cda7249692 = $this->env->getExtension("native_profiler");
        $__internal_39f921efbc505531cea58cc62c6a928d8d914a2b6c18d7b26b44f8cda7249692->enter($__internal_39f921efbc505531cea58cc62c6a928d8d914a2b6c18d7b26b44f8cda7249692_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paragraph"));

        // line 58
        echo "  <section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo " ";
        if (trim($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_paragraph_id", array()), "value", array())))) {
            echo " id=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, trim($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_paragraph_id", array()), "value", array()))), "html", null, true));
            echo "\"  ";
        }
        echo "  ";
        if (trim($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_paragraph_data_overlay", array()), "value", array())))) {
            echo " data-overlay=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, trim($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_paragraph_data_overlay", array()), "value", array()))), "html", null, true));
            echo "\" ";
        }
        echo ">
    ";
        // line 59
        if (((isset($context["bg_img_url"]) ? $context["bg_img_url"] : null) != "/")) {
            // line 60
            echo "\t<div class=\"background-image-holder\">
       <img alt=\"background\" src=\"";
            // line 61
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bg_img_url"]) ? $context["bg_img_url"] : null), "html", null, true));
            echo "\" />
    </div>
\t";
        }
        // line 64
        echo "    <div class=\"container ";
        if (trim($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_content_vertical_center", array()), "value", array())))) {
            echo " pos-vertical-center ";
        }
        echo " \">
    ";
        // line 65
        $this->displayBlock('content', $context, $blocks);
        // line 68
        echo "\t</div>
  </section>
";
        
        $__internal_39f921efbc505531cea58cc62c6a928d8d914a2b6c18d7b26b44f8cda7249692->leave($__internal_39f921efbc505531cea58cc62c6a928d8d914a2b6c18d7b26b44f8cda7249692_prof);

    }

    // line 65
    public function block_content($context, array $blocks = array())
    {
        $__internal_251d63cad6f67a52ef28950a6236afeffff1d14f6473fea2453dc96b585c771a = $this->env->getExtension("native_profiler");
        $__internal_251d63cad6f67a52ef28950a6236afeffff1d14f6473fea2453dc96b585c771a->enter($__internal_251d63cad6f67a52ef28950a6236afeffff1d14f6473fea2453dc96b585c771a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "\t
      ";
        // line 66
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "field_paragraph_extra_class", "field_paragraph_background_image", "field_content_vertical_center", "field_paragraph_data_overlay", "field_paragraph_id"), "html", null, true));
        echo "
    ";
        
        $__internal_251d63cad6f67a52ef28950a6236afeffff1d14f6473fea2453dc96b585c771a->leave($__internal_251d63cad6f67a52ef28950a6236afeffff1d14f6473fea2453dc96b585c771a_prof);

    }

    public function getTemplateName()
    {
        return "themes/stack/templates/paragraph--paragraph_image_cover_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 66,  124 => 65,  115 => 68,  113 => 65,  106 => 64,  100 => 61,  97 => 60,  95 => 59,  78 => 58,  66 => 57,  64 => 54,  63 => 53,  62 => 51,  61 => 50,  60 => 48,  56 => 45,  52 => 43,  50 => 42,  48 => 41,);
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
{% set bg_img_url = file_url(content.field_paragraph_background_image['#items'].entity.uri.value) %}
{% if bg_img_url != '/'%}
  {% set image_class = 'imagebg' %}
{% else %}
  {% set image_class = '' %}
{% endif %}
{%
  set classes = [
    'paragraph',
    'paragraph--type--' ~ paragraph.bundle|clean_class,
\tparagraph.field_paragraph_extra_class.value|render|trim,
\t'cover',
\timage_class,
    view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
  ]
%}
{% block paragraph %}
  <section{{ attributes.addClass(classes) }} {% if paragraph.field_paragraph_id.value|render|trim %} id=\"{{ paragraph.field_paragraph_id.value|render|trim }}\"  {% endif %}  {% if paragraph.field_paragraph_data_overlay.value|render|trim %} data-overlay=\"{{ paragraph.field_paragraph_data_overlay.value|render|trim }}\" {% endif %}>
    {% if bg_img_url != '/'%}
\t<div class=\"background-image-holder\">
       <img alt=\"background\" src=\"{{ bg_img_url }}\" />
    </div>
\t{% endif %}
    <div class=\"container {% if paragraph.field_content_vertical_center.value|render|trim %} pos-vertical-center {% endif %} \">
    {% block content %}\t
      {{ content|without('field_paragraph_extra_class','field_paragraph_background_image','field_content_vertical_center','field_paragraph_data_overlay','field_paragraph_id') }}
    {% endblock %}
\t</div>
  </section>
{% endblock paragraph %}
";
    }
}
