<?php

/* @webprofiler/Collector/extensions.html.twig */
class __TwigTemplate_d93609104fff23bf437e1239d7cca03db4dac554527b3b4b1bd67ccd96f4126b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5532ebdb60b1dda9f234432e7181c2abba08b6b133cd0eff09ccb88ada83894 = $this->env->getExtension("native_profiler");
        $__internal_d5532ebdb60b1dda9f234432e7181c2abba08b6b133cd0eff09ccb88ada83894->enter($__internal_d5532ebdb60b1dda9f234432e7181c2abba08b6b133cd0eff09ccb88ada83894_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@webprofiler/Collector/extensions.html.twig"));

        $tags = array("block" => 1, "set" => 2, "if" => 7);
        $filters = array("t" => 4, "default" => 22);
        $functions = array("url" => 3);

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('block', 'set', 'if'),
                array('t', 'default'),
                array('url')
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

        // line 1
        $this->displayBlock('toolbar', $context, $blocks);
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_d5532ebdb60b1dda9f234432e7181c2abba08b6b133cd0eff09ccb88ada83894->leave($__internal_d5532ebdb60b1dda9f234432e7181c2abba08b6b133cd0eff09ccb88ada83894_prof);

    }

    // line 1
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_493772875a722d2e4de551a2a2f5dc6a3a7926f465b859469863e725763cc07e = $this->env->getExtension("native_profiler");
        $__internal_493772875a722d2e4de551a2a2f5dc6a3a7926f465b859469863e725763cc07e->enter($__internal_493772875a722d2e4de551a2a2f5dc6a3a7926f465b859469863e725763cc07e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "    <a href=\"";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->env->getExtension('drupal_core')->getUrl("webprofiler.dashboard", array("profile" => (isset($context["token"]) ? $context["token"] : null)), array("fragment" => "drupal_extension")), "html", null, true));
        echo "\"
       title=\"";
        // line 4
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Extensions")));
        echo "\">
        <img width=\"20\" height=\"28\" alt=\"";
        // line 5
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Extensions")));
        echo "\"
             src=\"data:image/png;base64,";
        // line 6
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "icon", array()), "html", null, true));
        echo "\"/>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status";
        // line 7
        if ((150 < $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "countExtensions", array()))) {
            echo " sf-toolbar-status-yellow";
        }
        echo "\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "getExtensionsCount", array()), "html", null, true));
        echo "</span>
    </a>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "    ";
        ob_start();
        // line 11
        echo "    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 12
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Active Modules")));
        echo "</b>
        <span>";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "getModulesCount", array()), "html", null, true));
        echo "</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>";
        // line 16
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Active Themes")));
        echo "</b>
        <span>";
        // line 17
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["collector"]) ? $context["collector"] : null), "getThemesCount", array()), "html", null, true));
        echo "</span>
    </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 20
        echo "
    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">";
        // line 22
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : null), "")) : ("")), "html", null, true));
        echo "</div>
        <div class=\"sf-toolbar-info\">";
        // line 23
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((array_key_exists("text", $context)) ? (_twig_default_filter((isset($context["text"]) ? $context["text"] : null), "")) : ("")), "html", null, true));
        echo "</div>
    </div>
";
        
        $__internal_493772875a722d2e4de551a2a2f5dc6a3a7926f465b859469863e725763cc07e->leave($__internal_493772875a722d2e4de551a2a2f5dc6a3a7926f465b859469863e725763cc07e_prof);

    }

    // line 27
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cbc46464983ab07a4d19657807d635ea98a299bc23737961f4534e87360e43db = $this->env->getExtension("native_profiler");
        $__internal_cbc46464983ab07a4d19657807d635ea98a299bc23737961f4534e87360e43db->enter($__internal_cbc46464983ab07a4d19657807d635ea98a299bc23737961f4534e87360e43db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 28
        echo "    <script id=\"drupal_extension\" type=\"text/template\">
        <h2 class=\"panel__title\">";
        // line 29
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Extensions")));
        echo "</h2>
        <div class=\"tabs\">
            <input class=\"tabs__radio\" type=\"radio\" id=\"modules\" name=\"tabs\" checked/>
            <input class=\"tabs__radio\" type=\"radio\" id=\"themes\" name=\"tabs\"/>
            <ul class=\"tabs__tabs list--inline\">
                <li><label class=\"tabs__label\" for=\"modules\">";
        // line 34
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Modules")));
        echo "</label></li>
                <li><label class=\"tabs__label\" for=\"themes\">";
        // line 35
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Themes")));
        echo "</label></li>
            </ul>

            <div class=\"tabs__panels\">
                <div class=\"tabs__panel\">
                    <div class=\"panel__container\">
                        <table class=\"table--compact\">
                            <thead>
                            <tr>
                                <th>";
        // line 44
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Name")));
        echo "</th>
                                <th>";
        // line 45
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Path")));
        echo "</th>
                                <th>";
        // line 46
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Info file")));
        echo "</th>
                            </tr>
                            </thead>
                            <tbody>
                            <% _.each( data.drupal_extension.modules, function( value, key ){ %>
                            <% if(value.public_type == 'module') { %>
                            <tr>
                                <td><%- key %></td>
                                <td><%- value.public_path %></td>
                                <td><%= Drupal.webprofiler.helpers.classLink({\"file\" :
                                    data.drupal_extension.installation_path + value.public_pathname, \"class\":
                                    value.public_pathname, \"line\": 0}) %>
                                </td>
                            </tr>
                            <% } %>
                            <% }); %>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class=\"tabs__panel\">
                    <div class=\"panel__container\">
                        <table class=\"table--compact\">
                            <thead>
                            <tr>
                                <th>";
        // line 72
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Name")));
        echo "</th>
                                <th>";
        // line 73
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Path")));
        echo "</th>
                                <th>";
        // line 74
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Info file")));
        echo "</th>
                            </tr>
                            </thead>
                            <tbody>
                            <% _.each( data.drupal_extension.themes, function( value, key ){ %>
                            <tr>
                                <td><%- key %></td>
                                <td><%- value.public_path %></td>
                                <td><%= Drupal.webprofiler.helpers.classLink({\"file\" :
                                    data.drupal_extension.installation_path + value.public_pathname, \"class\":
                                    value.public_pathname, \"line\": 0}) %>
                                </td>
                            </tr>
                            <% }); %>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </script>
";
        
        $__internal_cbc46464983ab07a4d19657807d635ea98a299bc23737961f4534e87360e43db->leave($__internal_cbc46464983ab07a4d19657807d635ea98a299bc23737961f4534e87360e43db_prof);

    }

    public function getTemplateName()
    {
        return "@webprofiler/Collector/extensions.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  218 => 74,  214 => 73,  210 => 72,  181 => 46,  177 => 45,  173 => 44,  161 => 35,  157 => 34,  149 => 29,  146 => 28,  140 => 27,  130 => 23,  126 => 22,  122 => 20,  116 => 17,  112 => 16,  106 => 13,  102 => 12,  99 => 11,  96 => 10,  86 => 7,  82 => 6,  78 => 5,  74 => 4,  69 => 3,  66 => 2,  60 => 1,  53 => 27,  50 => 26,  48 => 1,);
    }

    public function getSource()
    {
        return "{% block toolbar %}
    {% set icon %}
    <a href=\"{{ url(\"webprofiler.dashboard\", {profile: token}, {fragment: 'drupal_extension'}) }}\"
       title=\"{{ 'Extensions'|t }}\">
        <img width=\"20\" height=\"28\" alt=\"{{ 'Extensions'|t }}\"
             src=\"data:image/png;base64,{{ collector.icon }}\"/>
        <span class=\"sf-toolbar-info-piece-additional sf-toolbar-status{% if 150 < collector.countExtensions %} sf-toolbar-status-yellow{% endif %}\">{{ collector.getExtensionsCount }}</span>
    </a>
    {% endset %}
    {% set text %}
    <div class=\"sf-toolbar-info-piece\">
        <b>{{ 'Active Modules'|t }}</b>
        <span>{{ collector.getModulesCount }}</span>
    </div>
    <div class=\"sf-toolbar-info-piece\">
        <b>{{ 'Active Themes'|t }}</b>
        <span>{{ collector.getThemesCount }}</span>
    </div>
    {% endset %}

    <div class=\"sf-toolbar-block\">
        <div class=\"sf-toolbar-icon\">{{ icon|default('') }}</div>
        <div class=\"sf-toolbar-info\">{{ text|default('') }}</div>
    </div>
{% endblock %}

{% block panel %}
    <script id=\"drupal_extension\" type=\"text/template\">
        <h2 class=\"panel__title\">{{ 'Extensions'|t }}</h2>
        <div class=\"tabs\">
            <input class=\"tabs__radio\" type=\"radio\" id=\"modules\" name=\"tabs\" checked/>
            <input class=\"tabs__radio\" type=\"radio\" id=\"themes\" name=\"tabs\"/>
            <ul class=\"tabs__tabs list--inline\">
                <li><label class=\"tabs__label\" for=\"modules\">{{ 'Modules'|t }}</label></li>
                <li><label class=\"tabs__label\" for=\"themes\">{{ 'Themes'|t }}</label></li>
            </ul>

            <div class=\"tabs__panels\">
                <div class=\"tabs__panel\">
                    <div class=\"panel__container\">
                        <table class=\"table--compact\">
                            <thead>
                            <tr>
                                <th>{{ 'Name'|t }}</th>
                                <th>{{ 'Path'|t }}</th>
                                <th>{{ 'Info file'|t }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <% _.each( data.drupal_extension.modules, function( value, key ){ %>
                            <% if(value.public_type == 'module') { %>
                            <tr>
                                <td><%- key %></td>
                                <td><%- value.public_path %></td>
                                <td><%= Drupal.webprofiler.helpers.classLink({\"file\" :
                                    data.drupal_extension.installation_path + value.public_pathname, \"class\":
                                    value.public_pathname, \"line\": 0}) %>
                                </td>
                            </tr>
                            <% } %>
                            <% }); %>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class=\"tabs__panel\">
                    <div class=\"panel__container\">
                        <table class=\"table--compact\">
                            <thead>
                            <tr>
                                <th>{{ 'Name'|t }}</th>
                                <th>{{ 'Path'|t }}</th>
                                <th>{{ 'Info file'|t }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <% _.each( data.drupal_extension.themes, function( value, key ){ %>
                            <tr>
                                <td><%- key %></td>
                                <td><%- value.public_path %></td>
                                <td><%= Drupal.webprofiler.helpers.classLink({\"file\" :
                                    data.drupal_extension.installation_path + value.public_pathname, \"class\":
                                    value.public_pathname, \"line\": 0}) %>
                                </td>
                            </tr>
                            <% }); %>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </script>
{% endblock %}
";
    }
}
