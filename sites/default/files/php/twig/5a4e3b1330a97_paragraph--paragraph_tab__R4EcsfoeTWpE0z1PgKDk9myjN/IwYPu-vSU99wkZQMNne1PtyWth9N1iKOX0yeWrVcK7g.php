<?php

/* themes/stack/templates/paragraph--paragraph_tab_item.html.twig */
class __TwigTemplate_ff4f5754c00645d92151c64fed22c6c4b7e4f6efbfb67e56d1840efbd3fe6a3e extends Twig_Template
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
        $__internal_b5732727f792a95824d2c6b6bec69ca6ba4fdcf462368e4ffe8d750ca6b3a34d = $this->env->getExtension("native_profiler");
        $__internal_b5732727f792a95824d2c6b6bec69ca6ba4fdcf462368e4ffe8d750ca6b3a34d->enter($__internal_b5732727f792a95824d2c6b6bec69ca6ba4fdcf462368e4ffe8d750ca6b3a34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/stack/templates/paragraph--paragraph_tab_item.html.twig"));

        $tags = array();
        $filters = array("trim" => 42, "render" => 42, "striptags" => 43, "without" => 46);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array('trim', 'render', 'striptags', 'without'),
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

        // line 41
        echo "
\t\t\t<div class=\"tab__title ";
        // line 42
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, trim($this->env->getExtension('drupal_core')->renderVar($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_paragraph_extra_class", array()), "value", array()))), "html", null, true));
        echo "\">
\t\t\t\t";
        // line 43
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, strip_tags($this->getAttribute($this->getAttribute((isset($context["paragraph"]) ? $context["paragraph"] : null), "field_paragraph_tab_title", array()), "value", array())), "html", null, true));
        echo "
\t\t\t</div>
\t\t\t<div class=\"tab__content\">
\t\t\t\t";
        // line 46
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "field_paragraph_tab_title", "field_paragraph_extra_class"), "html", null, true));
        echo "
\t\t\t</div>
";
        
        $__internal_b5732727f792a95824d2c6b6bec69ca6ba4fdcf462368e4ffe8d750ca6b3a34d->leave($__internal_b5732727f792a95824d2c6b6bec69ca6ba4fdcf462368e4ffe8d750ca6b3a34d_prof);

    }

    public function getTemplateName()
    {
        return "themes/stack/templates/paragraph--paragraph_tab_item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 46,  53 => 43,  49 => 42,  46 => 41,);
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

\t\t\t<div class=\"tab__title {{ paragraph.field_paragraph_extra_class.value|render|trim }}\">
\t\t\t\t{{ paragraph.field_paragraph_tab_title.value|striptags }}
\t\t\t</div>
\t\t\t<div class=\"tab__content\">
\t\t\t\t{{ content|without('field_paragraph_tab_title','field_paragraph_extra_class') }}
\t\t\t</div>
";
    }
}
