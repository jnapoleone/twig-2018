<?php

/* themes/stack/templates/node--article.html.twig */
class __TwigTemplate_2c27014c3cca9b36e73748262dbb87342ceb37e836d612917b6f84ea44106878 extends Twig_Template
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
        $__internal_07d538f6c606b62412930079991cbb018158cee10510b2866ba62c988030b974 = $this->env->getExtension("native_profiler");
        $__internal_07d538f6c606b62412930079991cbb018158cee10510b2866ba62c988030b974->enter($__internal_07d538f6c606b62412930079991cbb018158cee10510b2866ba62c988030b974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/stack/templates/node--article.html.twig"));

        $tags = array("set" => 69, "if" => 82);
        $filters = array("clean_class" => 71, "date" => 93, "without" => 114);
        $functions = array("file_url" => 80);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class', 'date', 'without'),
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

        // line 69
        $context["classes"] = array(0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 71
(isset($context["node"]) ? $context["node"] : null), "bundle", array()))), 2 => \Drupal\Component\Utility\Html::getClass($this->getAttribute(        // line 72
(isset($context["node"]) ? $context["node"] : null), "bundle", array())), 3 => (($this->getAttribute(        // line 73
(isset($context["node"]) ? $context["node"] : null), "isPromoted", array(), "method")) ? ("is-promoted") : ("")), 4 => (($this->getAttribute(        // line 74
(isset($context["node"]) ? $context["node"] : null), "isSticky", array(), "method")) ? ("is-sticky") : ("")), 5 => (( !$this->getAttribute(        // line 75
(isset($context["node"]) ? $context["node"] : null), "isPublished", array(), "method")) ? ("is-unpublished") : ("")), 6 => ((        // line 76
(isset($context["view_mode"]) ? $context["view_mode"] : null)) ? (\Drupal\Component\Utility\Html::getClass((isset($context["view_mode"]) ? $context["view_mode"] : null))) : ("")), 7 => "clearfix");
        // line 80
        $context["bg_img_url"] = call_user_func_array($this->env->getFunction('file_url')->getCallable(), array($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_background_image", array()), "#items", array(), "array"), "entity", array()), "uri", array()), "value", array())));
        // line 81
        echo "<article";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["classes"]) ? $context["classes"] : null)), "method"), "html", null, true));
        echo ">
\t";
        // line 82
        if (((isset($context["bg_img_url"]) ? $context["bg_img_url"] : null) != "/")) {
            // line 83
            echo "\t\t<div class=\"imagebg text-center height-60\" data-overlay=\"5\">                        
\t\t\t<div class=\"background-image-holder\">
       \t\t\t<img alt=\"background\" src=\"";
            // line 85
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["bg_img_url"]) ? $context["bg_img_url"] : null), "html", null, true));
            echo "\" />
    \t\t</div>
\t\t\t";
            // line 87
            if ((isset($context["display_submitted"]) ? $context["display_submitted"] : null)) {
                // line 88
                echo "            <div class=\"container pos-vertical-center\">
            \t<div class=\"row\">
                \t<div class=\"col-sm-12\">
                    \t<div class=\"article__title\">
                        \t<h1>";
                // line 92
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
                echo "</h1>
                            <span>";
                // line 93
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["node"]) ? $context["node"] : null), "getCreatedTime", array()), "d M Y"), "html", null, true));
                echo " in </span>
                            <span>";
                // line 94
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_blog_category", array()), "html", null, true));
                echo "</span>
                         </div>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
\t\t\t";
            }
            // line 102
            echo "            <div class=\"pos-absolute pos-bottom col-xs-12 text-center\">
            \t<div class=\"article__author\">
                \t";
            // line 104
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["author_picture"]) ? $context["author_picture"] : null), "html", null, true));
            echo "
                    <h6 class=\"type--uppercase\">";
            // line 105
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["author_name"]) ? $context["author_name"] : null), "html", null, true));
            echo "</h6>
                </div>
            </div>
        </div>
        <div class=\"imagebg-content-article\">
        \t<div class=\"container\">
            \t<div class=\"row\">
                    <div class=\"col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2\">
\t\t\t\t\t\t<div class=\"content article__body\">
    \t\t\t\t\t\t";
            // line 114
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "field_blog_category", "field_image", "field_background_image", "comment", "field_video"), "html", null, true));
            echo "
  \t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        } else {
            // line 120
            echo "\t
        <section>
        \t<div class=\"container\">
            \t<div class=\"row\">
                    <div class=\"col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2\">
\t\t\t\t\t\t<div class=\"article__title text-center\">
                        \t<h1>";
            // line 126
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true));
            echo "</h1>
                            ";
            // line 127
            if ((isset($context["display_submitted"]) ? $context["display_submitted"] : null)) {
                echo "<span>";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["node"]) ? $context["node"] : null), "getCreatedTime", array()), "d M Y"), "html", null, true));
                echo " in </span>";
            }
            // line 128
            echo "                            <span>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_blog_category", array()), "html", null, true));
            echo "</span>
                        </div>
                        <!--end article title-->
                        <div class=\"article__body\">
                        \t";
            // line 132
            if ($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_video", array())) {
                // line 133
                echo "\t\t\t\t\t\t\t  <div class=\"field-video border--round\">
\t\t\t\t\t\t\t    ";
                // line 134
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_video", array()), "html", null, true));
                echo "
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t";
            } else {
                // line 137
                echo "\t\t\t\t\t\t\t  ";
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "field_image", array()), "html", null, true));
                echo "
\t\t\t\t\t\t\t";
            }
            // line 139
            echo "\t\t\t\t\t\t\t<div";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => "content"), "method"), "html", null, true));
            echo ">
\t\t\t\t\t\t\t\t";
            // line 140
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, twig_without((isset($context["content"]) ? $context["content"] : null), "field_blog_category", "field_image", "field_background_image", "comment", "field_video", "field_mainmenu_transparent"), "html", null, true));
            echo "
\t\t\t\t\t\t\t</div>
  \t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        }
        // line 147
        echo "\t
\t<div class=\"container\">
       \t<div class=\"row\">
            <div class=\"col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2\">
\t\t\t\t<div class=\"comments\">
\t  \t\t\t\t";
        // line 152
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content"]) ? $context["content"] : null), "comment", array()), "html", null, true));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

</article>
";
        
        $__internal_07d538f6c606b62412930079991cbb018158cee10510b2866ba62c988030b974->leave($__internal_07d538f6c606b62412930079991cbb018158cee10510b2866ba62c988030b974_prof);

    }

    public function getTemplateName()
    {
        return "themes/stack/templates/node--article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 152,  188 => 147,  177 => 140,  172 => 139,  166 => 137,  160 => 134,  157 => 133,  155 => 132,  147 => 128,  141 => 127,  137 => 126,  129 => 120,  119 => 114,  107 => 105,  103 => 104,  99 => 102,  88 => 94,  84 => 93,  80 => 92,  74 => 88,  72 => 87,  67 => 85,  63 => 83,  61 => 82,  56 => 81,  54 => 80,  52 => 76,  51 => 75,  50 => 74,  49 => 73,  48 => 72,  47 => 71,  46 => 69,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to display a node.
 *
 * Available variables:
 * - node: The node entity with limited access to object properties and methods.
     Only \"getter\" methods (method names starting with \"get\", \"has\", or \"is\")
     and a few common methods such as \"id\" and \"label\" are available. Calling
     other methods (such as node.delete) will result in an exception.
 * - label: The title of the node.
 * - content: All node items. Use {{ content }} to print them all,
 *   or print a subset such as {{ content.field_example }}. Use
 *   {{ content|without('field_example') }} to temporarily suppress the printing
 *   of a given child element.
 * - author_picture: The node author user entity, rendered using the \"compact\"
 *   view mode.
 * - metadata: Metadata for this node.
 * - date: Themed creation date field.
 * - author_name: Themed author name field.
 * - url: Direct URL of the current node.
 * - display_submitted: Whether submission information should be displayed.
 * - attributes: HTML attributes for the containing element.
 *   The attributes.class element may contain one or more of the following
 *   classes:
 *   - node: The current template type (also known as a \"theming hook\").
 *   - node--type-[type]: The current node type. For example, if the node is an
 *     \"Article\" it would result in \"node--type-article\". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a
 *     teaser would result in: \"node--view-mode-teaser\", and
 *     full: \"node--view-mode-full\".
 *   The following are controlled through the node publishing options.
 *   - node--promoted: Appears on nodes promoted to the front page.
 *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in
 *     teaser listings.
 *   - node--unpublished: Appears on unpublished nodes visible only to site
 *     admins.
 * - title_attributes: Same as attributes, except applied to the main title
 *   tag that appears in the template.
 * - content_attributes: Same as attributes, except applied to the main
 *   content tag that appears in the template.
 * - author_attributes: Same as attributes, except applied to the author of
 *   the node tag that appears in the template.
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - view_mode: View mode; for example, \"teaser\" or \"full\".
 * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.
 * - page: Flag for the full page state. Will be true if view_mode is 'full'.
 * - readmore: Flag for more state. Will be true if the teaser content of the
 *   node cannot hold the main body content.
 * - logged_in: Flag for authenticated user status. Will be true when the
 *   current user is a logged-in member.
 * - is_admin: Flag for admin user status. Will be true when the current user
 *   is an administrator.
 *
 * @ingroup templates
 *
 * @see template_preprocess_node()
 *
 * @todo Remove the id attribute (or make it a class), because if that gets
 *   rendered twice on a page this is invalid CSS for example: two lists
 *   in different view modes.
 */
#}
{%
  set classes = [
    'node',
    'node--type-' ~ node.bundle|clean_class,
    node.bundle|clean_class,
    node.isPromoted() ? 'is-promoted',
    node.isSticky() ? 'is-sticky',
    not node.isPublished() ? 'is-unpublished',
    view_mode ? view_mode|clean_class,
    'clearfix',
  ]
%}
{% set bg_img_url = file_url(content.field_background_image['#items'].entity.uri.value) %}
<article{{ attributes.addClass(classes) }}>
\t{% if bg_img_url != '/' %}
\t\t<div class=\"imagebg text-center height-60\" data-overlay=\"5\">                        
\t\t\t<div class=\"background-image-holder\">
       \t\t\t<img alt=\"background\" src=\"{{ bg_img_url }}\" />
    \t\t</div>
\t\t\t{% if display_submitted %}
            <div class=\"container pos-vertical-center\">
            \t<div class=\"row\">
                \t<div class=\"col-sm-12\">
                    \t<div class=\"article__title\">
                        \t<h1>{{ label }}</h1>
                            <span>{{ node.getCreatedTime|date('d M Y') }} in </span>
                            <span>{{ content.field_blog_category }}</span>
                         </div>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
\t\t\t{% endif %}
            <div class=\"pos-absolute pos-bottom col-xs-12 text-center\">
            \t<div class=\"article__author\">
                \t{{ author_picture }}
                    <h6 class=\"type--uppercase\">{{ author_name }}</h6>
                </div>
            </div>
        </div>
        <div class=\"imagebg-content-article\">
        \t<div class=\"container\">
            \t<div class=\"row\">
                    <div class=\"col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2\">
\t\t\t\t\t\t<div class=\"content article__body\">
    \t\t\t\t\t\t{{ content|without('field_blog_category','field_image','field_background_image','comment','field_video') }}
  \t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t{% else %}\t
        <section>
        \t<div class=\"container\">
            \t<div class=\"row\">
                    <div class=\"col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2\">
\t\t\t\t\t\t<div class=\"article__title text-center\">
                        \t<h1>{{ label }}</h1>
                            {% if display_submitted %}<span>{{ node.getCreatedTime|date('d M Y') }} in </span>{% endif %}
                            <span>{{ content.field_blog_category }}</span>
                        </div>
                        <!--end article title-->
                        <div class=\"article__body\">
                        \t{% if content.field_video %}
\t\t\t\t\t\t\t  <div class=\"field-video border--round\">
\t\t\t\t\t\t\t    {{ content.field_video }}
\t\t\t\t\t\t\t  </div>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t  {{ content.field_image }}
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<div{{ content_attributes.addClass('content') }}>
\t\t\t\t\t\t\t\t{{ content|without('field_blog_category','field_image','field_background_image','comment','field_video','field_mainmenu_transparent') }}
\t\t\t\t\t\t\t</div>
  \t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t{% endif %}\t
\t<div class=\"container\">
       \t<div class=\"row\">
            <div class=\"col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2\">
\t\t\t\t<div class=\"comments\">
\t  \t\t\t\t{{ content.comment }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>

</article>
";
    }
}
