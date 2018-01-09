<?php

/* themes/stack/templates/paragraph--paragraph_tabs.html.twig */
class __TwigTemplate_41f05d5357dd07fc217d55062098427ec82e9bfbabd0e7978bdbd65646294c4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'paragraph' => array($this, 'block_paragraph'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17c664a93df5bda6eb2034bd1f71cbc640d288f6680be91bed1e318b9f350bd4 = $this->env->getExtension("native_profiler");
        $__internal_17c664a93df5bda6eb2034bd1f71cbc640d288f6680be91bed1e318b9f350bd4->enter($__internal_17c664a93df5bda6eb2034bd1f71cbc640d288f6680be91bed1e318b9f350bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/stack/templates/paragraph--paragraph_tabs.html.twig"));

        $tags = array("set" => 42, "block" => 51, "if" => 52);
        $filters = array("clean_class" => 44, "trim" => 45, "render" => 45, "striptags" => 52, "lower" => 52, "without" => 54);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'block', 'if'),
                array('clean_class', 'trim', 'render', 'striptags', 'lower', 'without'),
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

        // line 42
        $context["classes"] = array(0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 44
(isset($context["paragraph"]) ? $context["paragraph"] : null), "bundle", array()))), 2 => trim($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute(        // line 45
(isset($context["paragraph"]) ? $context["paragraph"] : null), "field_paragraph_extra_class", array()), "value", array()))), 3 => ((        // line 46
(isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass((isset($context["view_mode"]) ? $context["view_mode"] : null)))) : ("")), 4 => "tabs-container", 5 => ("tabs--" . trim($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute(        // line 48
(isset($context["paragraph"]) ? $context["paragraph"] : null), "field_paragraph_tab_direction", array()), "value", array())))));
        // line 51
        $this->displayBlock('paragraph', $context, $blocks);
        
        $__internal_17c664a93df5bda6eb2034bd1f71cbc640d288f6680be91bed1e318b9f350bd4->leave($__internal_17c664a93df5bda6eb2034bd1f71cbc640d288f6680be91bed1e318b9f350bd4_prof);

    }

    public function block_paragraph($context, array $blocks = array())
    {
        $__internal_adc42e2f314991caa81cf2402b932822b11906033533ea25dd2d151298bcfe88 = $this->env->getExtension("native_profiler");
        $__internal_adc42e2f314991caa81cf2402b932822b11906033533ea25dd2d151298bcfe88->enter($__internal_adc42e2f314991caa81cf2402b932822b11906033533ea25dd2d151298bcfe88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "paragraph"));

        // line 52
        echo "  <div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo " ";
        if (trim($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_paragraph_id", array()), "value", array())))) {
            echo " id=\"";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_paragraph_id", array()), "value", array())), "html", null, true));
            echo "\"  ";
        }
        echo " data-content-align=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_lower_filter($this->env, trim($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_paragraph_tabcontent_align", array()), "value", array())))), "html", null, true));
        echo "\"  >
\t  <ul class=\"tabs\">
        ";
        // line 54
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "field_paragraph_extra_class", "field_paragraph_tab_direction", "field_paragraph_tabcontent_align", "field_paragraph_id"), "html", null, true));
        echo "
      </ul>
\t</div>
  </div>
";
        
        $__internal_adc42e2f314991caa81cf2402b932822b11906033533ea25dd2d151298bcfe88->leave($__internal_adc42e2f314991caa81cf2402b932822b11906033533ea25dd2d151298bcfe88_prof);

    }

    public function getTemplateName()
    {
        return "themes/stack/templates/paragraph--paragraph_tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 54,  65 => 52,  53 => 51,  51 => 48,  50 => 46,  49 => 45,  48 => 44,  47 => 42,);
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
\t'tabs-container',
\t'tabs--' ~ paragraph.field_paragraph_tab_direction.value|render|trim,
  ]
%}
{% block paragraph %}
  <div{{ attributes.addClass(classes) }} {% if paragraph.field_paragraph_id.value|render|trim %} id=\"{{ paragraph.field_paragraph_id.value|striptags }}\"  {% endif %} data-content-align=\"{{ paragraph.field_paragraph_tabcontent_align.value|render|trim|lower }}\"  >
\t  <ul class=\"tabs\">
        {{ content|without('field_paragraph_extra_class','field_paragraph_tab_direction','field_paragraph_tabcontent_align','field_paragraph_id') }}
      </ul>
\t</div>
  </div>
{% endblock paragraph %}
";
    }
}
