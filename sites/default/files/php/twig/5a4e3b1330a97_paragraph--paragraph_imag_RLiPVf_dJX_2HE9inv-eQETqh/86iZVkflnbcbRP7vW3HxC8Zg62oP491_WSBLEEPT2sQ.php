<?php

/* themes/stack/templates/paragraph--paragraph_image_bg_block.html.twig */
class __TwigTemplate_f91a354983cea5132508322ccb68f94778b50f4e1c6bf20a7288d38e60cd71c9 extends Twig_Template
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
        $__internal_2cc6cd145c877658eca5300dcce1e6e36ebda2ba67535eca91c61786f9ac684b = $this->env->getExtension("native_profiler");
        $__internal_2cc6cd145c877658eca5300dcce1e6e36ebda2ba67535eca91c61786f9ac684b->enter($__internal_2cc6cd145c877658eca5300dcce1e6e36ebda2ba67535eca91c61786f9ac684b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/stack/templates/paragraph--paragraph_image_bg_block.html.twig"));

        $tags = array("set" => 42, "if" => 43, "block" => 58);
        $filters = array("clean_class" => 51, "trim" => 52, "render" => 52, "striptags" => 59, "without" => 67);
        $functions = array("file_url" => 42);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 'trim', 'render', 'striptags', 'without'),
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
        echo "
";
        // line 42
        $context["bg_img_url"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_paragraph_background_image", array()), "#items", array(), "array"), "entity", array()), "uri", array()), "value", array())));
        // line 43
        if (((isset($context["bg_img_url"]) ? $context["bg_img_url"] : null) != "/")) {
            // line 44
            echo "  ";
            $context["image_class"] = "imagebg";
        } else {
            // line 46
            echo "  ";
            $context["image_class"] = "";
        }
        // line 49
        $context["classes"] = array(0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 51
(isset($context["paragraph"]) ? $context["paragraph"] : null), "bundle", array()))), 2 => trim($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute(        // line 52
(isset($context["paragraph"]) ? $context["paragraph"] : null), "field_paragraph_extra_class", array()), "value", array()))), 3 =>         // line 53
(isset($context["image_class"]) ? $context["image_class"] : null), 4 => ((        // line 54
(isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass((isset($context["view_mode"]) ? $context["view_mode"] : null)))) : ("")));
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('paragraph', $context, $blocks);
        
        $__internal_2cc6cd145c877658eca5300dcce1e6e36ebda2ba67535eca91c61786f9ac684b->leave($__internal_2cc6cd145c877658eca5300dcce1e6e36ebda2ba67535eca91c61786f9ac684b_prof);

    }

    public function block_paragraph($context, array $blocks = array())
    {
        $__internal_a766cde38923b59efe330abe78b604a06f3df48793c96ab96915ca8eb2aeeb46 = $this->env->getExtension("native_profiler");
        $__internal_a766cde38923b59efe330abe78b604a06f3df48793c96ab96915ca8eb2aeeb46->enter($__internal_a766cde38923b59efe330abe78b604a06f3df48793c96ab96915ca8eb2aeeb46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paragraph"));

        // line 59
        echo "  <section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo " ";
        if (trim($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_paragraph_id", array()), "value", array())))) {
            echo " id=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_paragraph_id", array()), "value", array())), "html", null, true));
            echo "\"  ";
        }
        echo "  ";
        if (trim($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_paragraph_data_overlay", array()), "value", array())))) {
            echo " data-overlay=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_paragraph_data_overlay", array()), "value", array())), "html", null, true));
            echo "\" ";
        }
        echo " ";
        if (trim($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_data_gradient_bg", array()), "value", array())))) {
            echo " data-gradient-bg=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_data_gradient_bg", array()), "value", array())), "html", null, true));
            echo "\" ";
        }
        echo " >
    ";
        // line 60
        if (((isset($context["bg_img_url"]) ? $context["bg_img_url"] : null) != "/")) {
            // line 61
            echo "\t<div class=\"background-image-holder\">
       <img alt=\"background\" src=\"";
            // line 62
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bg_img_url"]) ? $context["bg_img_url"] : null), "html", null, true));
            echo "\" />
    </div>
\t";
        }
        // line 65
        echo "    <div class=\"container ";
        if (trim($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_content_vertical_center", array()), "value", array())))) {
            echo " pos-vertical-center ";
        }
        echo " \">
    ";
        // line 66
        $this->displayBlock('content', $context, $blocks);
        // line 69
        echo "\t</div>
  </section>
";
        
        $__internal_a766cde38923b59efe330abe78b604a06f3df48793c96ab96915ca8eb2aeeb46->leave($__internal_a766cde38923b59efe330abe78b604a06f3df48793c96ab96915ca8eb2aeeb46_prof);

    }

    // line 66
    public function block_content($context, array $blocks = array())
    {
        $__internal_26f0f0c8392ab2452a6abf72415afa6d332f0242e310261040470668e425de11 = $this->env->getExtension("native_profiler");
        $__internal_26f0f0c8392ab2452a6abf72415afa6d332f0242e310261040470668e425de11->enter($__internal_26f0f0c8392ab2452a6abf72415afa6d332f0242e310261040470668e425de11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "\t
      ";
        // line 67
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "field_paragraph_extra_class", "field_paragraph_background_image", "field_content_vertical_center", "field_paragraph_data_overlay", "field_paragraph_id", "field_data_gradient_bg"), "html", null, true));
        echo "
    ";
        
        $__internal_26f0f0c8392ab2452a6abf72415afa6d332f0242e310261040470668e425de11->leave($__internal_26f0f0c8392ab2452a6abf72415afa6d332f0242e310261040470668e425de11_prof);

    }

    public function getTemplateName()
    {
        return "themes/stack/templates/paragraph--paragraph_image_bg_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 67,  136 => 66,  127 => 69,  125 => 66,  118 => 65,  112 => 62,  109 => 61,  107 => 60,  84 => 59,  72 => 58,  69 => 57,  67 => 54,  66 => 53,  65 => 52,  64 => 51,  63 => 49,  59 => 46,  55 => 44,  53 => 43,  51 => 42,  48 => 41,);
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
\timage_class,
    view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
  ]
%}

{% block paragraph %}
  <section{{ attributes.addClass(classes) }} {% if paragraph.field_paragraph_id.value|render|trim %} id=\"{{ paragraph.field_paragraph_id.value|striptags }}\"  {% endif %}  {% if paragraph.field_paragraph_data_overlay.value|render|trim %} data-overlay=\"{{ paragraph.field_paragraph_data_overlay.value|striptags }}\" {% endif %} {% if paragraph.field_data_gradient_bg.value|render|trim %} data-gradient-bg=\"{{ paragraph.field_data_gradient_bg.value|striptags }}\" {% endif %} >
    {% if bg_img_url != '/' %}
\t<div class=\"background-image-holder\">
       <img alt=\"background\" src=\"{{ bg_img_url }}\" />
    </div>
\t{% endif %}
    <div class=\"container {% if paragraph.field_content_vertical_center.value|render|trim %} pos-vertical-center {% endif %} \">
    {% block content %}\t
      {{ content|without('field_paragraph_extra_class','field_paragraph_background_image','field_content_vertical_center','field_paragraph_data_overlay','field_paragraph_id','field_data_gradient_bg') }}
    {% endblock %}
\t</div>
  </section>
{% endblock paragraph %}
";
    }
}
