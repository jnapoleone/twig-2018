<?php

/* themes/stack/templates/paragraph--paragraph_image_block.html.twig */
class __TwigTemplate_8caa28aa7942c19f805410066aa68bdea11afded91517279911921d4fdac9c00 extends Twig_Template
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
        $__internal_d5b8c7b9aa59ea1b4d9fddc411cec4fef39c30d3f734d0d4c8da00377e8f7d87 = $this->env->getExtension("native_profiler");
        $__internal_d5b8c7b9aa59ea1b4d9fddc411cec4fef39c30d3f734d0d4c8da00377e8f7d87->enter($__internal_d5b8c7b9aa59ea1b4d9fddc411cec4fef39c30d3f734d0d4c8da00377e8f7d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/stack/templates/paragraph--paragraph_image_block.html.twig"));

        $tags = array("if" => 41, "set" => 42, "block" => 58);
        $filters = array("lower" => 41, "replace" => 41, "striptags" => 41, "clean_class" => 50, "trim" => 51, "render" => 51, "without" => 71);
        $functions = array("file_url" => 57);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'set', 'block'),
                array('lower', 'replace', 'striptags', 'clean_class', 'trim', 'render', 'without'),
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
        if ((twig_lower_filter($this->env, twig_replace_filter(strip_tags($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_paragraph_image_position", array()), "value", array())), array("
" => "", " " => ""))) == "right")) {
            echo " 
";
            // line 42
            $context["switch"] = "switchable switchable--switch";
        } else {
            // line 44
            $context["switch"] = "switchable";
        }
        // line 46
        echo "
";
        // line 48
        $context["classes"] = array(0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 50
(isset($context["paragraph"]) ? $context["paragraph"] : null), "bundle", array()))), 2 => trim($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute(        // line 51
(isset($context["paragraph"]) ? $context["paragraph"] : null), "field_paragraph_extra_class", array()), "value", array()))), 3 => "imageblock", 4 =>         // line 53
(isset($context["switch"]) ? $context["switch"] : null), 5 => ((        // line 54
(isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass((isset($context["view_mode"]) ? $context["view_mode"] : null)))) : ("")));
        // line 57
        $context["img_url"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_paragraph_image", array()), "#items", array(), "array"), "entity", array()), "uri", array()), "value", array())));
        // line 58
        $this->displayBlock('paragraph', $context, $blocks);
        
        $__internal_d5b8c7b9aa59ea1b4d9fddc411cec4fef39c30d3f734d0d4c8da00377e8f7d87->leave($__internal_d5b8c7b9aa59ea1b4d9fddc411cec4fef39c30d3f734d0d4c8da00377e8f7d87_prof);

    }

    public function block_paragraph($context, array $blocks = array())
    {
        $__internal_26a8327e32c6a20b85f3174cbc062ff2656fc30fb51055a25c6d2fc6334acc32 = $this->env->getExtension("native_profiler");
        $__internal_26a8327e32c6a20b85f3174cbc062ff2656fc30fb51055a25c6d2fc6334acc32->enter($__internal_26a8327e32c6a20b85f3174cbc062ff2656fc30fb51055a25c6d2fc6334acc32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paragraph"));

        // line 59
        echo "  <section";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo " ";
        if (trim($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_paragraph_id", array()), "value", array())))) {
            echo " id=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, trim($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_paragraph_id", array()), "value", array()))), "html", null, true));
            echo "\"  ";
        }
        echo "  >
    ";
        // line 60
        if ((isset($context["img_url"]) ? $context["img_url"] : null)) {
            // line 61
            echo "\t<div class=\"imageblock__content col-md-6 col-sm-4 pos-right\">
\t<div class=\"background-image-holder\">
       <img alt=\"background\" src=\"";
            // line 63
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["img_url"]) ? $context["img_url"] : null), "html", null, true));
            echo "\" />
    </div>
\t</div>
\t";
        }
        // line 67
        echo "    <div class=\"container\">
\t  <div class=\"row\">
\t    <div class=\"col-md-5 col-sm-7\">
          ";
        // line 70
        $this->displayBlock('content', $context, $blocks);
        // line 73
        echo "\t\t</div>
      </div>
\t</div>
  </section>
";
        
        $__internal_26a8327e32c6a20b85f3174cbc062ff2656fc30fb51055a25c6d2fc6334acc32->leave($__internal_26a8327e32c6a20b85f3174cbc062ff2656fc30fb51055a25c6d2fc6334acc32_prof);

    }

    // line 70
    public function block_content($context, array $blocks = array())
    {
        $__internal_c067802ea244544b531c4966443695aa0941264be3864a5f10b6ad4e33ecdb03 = $this->env->getExtension("native_profiler");
        $__internal_c067802ea244544b531c4966443695aa0941264be3864a5f10b6ad4e33ecdb03->enter($__internal_c067802ea244544b531c4966443695aa0941264be3864a5f10b6ad4e33ecdb03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo "\t
            ";
        // line 71
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "field_paragraph_extra_class", "field_paragraph_image", "field_paragraph_image_position", "field_paragraph_id"), "html", null, true));
        echo "
          ";
        
        $__internal_c067802ea244544b531c4966443695aa0941264be3864a5f10b6ad4e33ecdb03->leave($__internal_c067802ea244544b531c4966443695aa0941264be3864a5f10b6ad4e33ecdb03_prof);

    }

    public function getTemplateName()
    {
        return "themes/stack/templates/paragraph--paragraph_image_block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 71,  124 => 70,  113 => 73,  111 => 70,  106 => 67,  99 => 63,  95 => 61,  93 => 60,  82 => 59,  70 => 58,  68 => 57,  66 => 54,  65 => 53,  64 => 51,  63 => 50,  62 => 48,  59 => 46,  56 => 44,  53 => 42,  48 => 41,);
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
{% if paragraph.field_paragraph_image_position.value|striptags|replace({\"\\n\":\"\", \" \":\"\"})|lower == 'right' %} 
{%  set switch = \"switchable switchable--switch\" %}
{% else %}
{%  set switch = \"switchable\" %}
{% endif %}

{%
  set classes = [
    'paragraph',
    'paragraph--type--' ~ paragraph.bundle|clean_class,
\tparagraph.field_paragraph_extra_class.value|render|trim,
\t'imageblock',
\tswitch,
    view_mode ? 'paragraph--view-mode--' ~ view_mode|clean_class,
  ]
%}
{% set img_url = file_url(content.field_paragraph_image['#items'].entity.uri.value) %}
{% block paragraph %}
  <section{{ attributes.addClass(classes) }} {% if paragraph.field_paragraph_id.value|render|trim %} id=\"{{ paragraph.field_paragraph_id.value|render|trim }}\"  {% endif %}  >
    {% if img_url %}
\t<div class=\"imageblock__content col-md-6 col-sm-4 pos-right\">
\t<div class=\"background-image-holder\">
       <img alt=\"background\" src=\"{{ img_url }}\" />
    </div>
\t</div>
\t{% endif %}
    <div class=\"container\">
\t  <div class=\"row\">
\t    <div class=\"col-md-5 col-sm-7\">
          {% block content %}\t
            {{ content|without('field_paragraph_extra_class','field_paragraph_image','field_paragraph_image_position','field_paragraph_id') }}
          {% endblock %}
\t\t</div>
      </div>
\t</div>
  </section>
{% endblock paragraph %}
";
    }
}
