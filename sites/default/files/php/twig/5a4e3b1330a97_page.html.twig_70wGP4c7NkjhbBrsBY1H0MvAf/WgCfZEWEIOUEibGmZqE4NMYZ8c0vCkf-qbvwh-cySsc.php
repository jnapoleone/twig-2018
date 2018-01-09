<?php

/* themes/stack/templates/page.html.twig */
class __TwigTemplate_ba3f7ca4ef490e6c8903ce4c0961447e08adf9a456d7e5fed7f01f538f8fc1ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'header_first' => array($this, 'block_header_first'),
            'header_second' => array($this, 'block_header_second'),
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'highlighted' => array($this, 'block_highlighted'),
            'breadcrumb' => array($this, 'block_breadcrumb'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fb45887cac8b358a9c822049effce021e0aa0f87b3d0922115927a029ed2eab9 = $this->env->getExtension("native_profiler");
        $__internal_fb45887cac8b358a9c822049effce021e0aa0f87b3d0922115927a029ed2eab9->enter($__internal_fb45887cac8b358a9c822049effce021e0aa0f87b3d0922115927a029ed2eab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/stack/templates/page.html.twig"));

        $tags = array("set" => 59, "if" => 62, "block" => 81);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array(),
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

        // line 59
        $context["container"] = (($this->getAttribute($this->getAttribute((isset($context["theme"]) ? $context["theme"] : null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 60
        echo "
  <a id=\"top\"></a>
";
        // line 62
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "user_left", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "user_right", array()))) {
            // line 63
            echo "\t<div class=\"nav-utility\">
\t  ";
            // line 64
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "user_left", array())) {
                // line 65
                echo "\t  <div class=\"module left\">
\t    ";
                // line 66
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "user_left", array()), "html", null, true));
                echo "
\t  </div>
      ";
            }
            // line 69
            echo "       
\t  ";
            // line 70
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "user_right", array())) {
                // line 71
                echo "\t  <div class=\"module right\">
\t    ";
                // line 72
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "user_right", array()), "html", null, true));
                echo "
\t  </div>
      ";
            }
            // line 75
            echo "\t</div>
    ";
        }
        // line 77
        echo "\t
";
        // line 79
        echo "<div class=\"nav-container\">
  ";
        // line 80
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "branding", array()))) {
            // line 81
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 133
        echo "</div>

";
        // line 136
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_first", array())) {
            // line 137
            echo "<div class=\"header-wrapper\">
  <div role=\"header\" class=\"header-container ";
            // line 138
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
            echo " \">
    <div class=\"row\">

      ";
            // line 142
            echo "\t  
\t   ";
            // line 144
            $context["header_first_classes"] = array(0 => (($this->getAttribute(            // line 145
(isset($context["page"]) ? $context["page"] : null), "header_second", array())) ? ("col-sm-9") : ("")), 1 => ((twig_test_empty($this->getAttribute(            // line 146
(isset($context["page"]) ? $context["page"] : null), "header_second", array()))) ? ("col-sm-12") : ("")));
            // line 149
            echo "\t  
      ";
            // line 150
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_first", array())) {
                // line 151
                echo "        ";
                $this->displayBlock('header_first', $context, $blocks);
                // line 156
                echo "      ";
            }
            // line 157
            echo "\t  
\t  ";
            // line 159
            echo "      ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_second", array())) {
                // line 160
                echo "        ";
                $this->displayBlock('header_second', $context, $blocks);
                // line 165
                echo "      ";
            }
            // line 166
            echo "\t  
\t</div>
  </div>
</div>
";
        }
        // line 172
        echo "
";
        // line 174
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array())) {
            // line 175
            echo "<div class=\"title-wrapper\">
      ";
            // line 177
            echo "      ";
            $this->displayBlock('title', $context, $blocks);
            // line 179
            echo "\t 
</div>
";
        }
        // line 183
        echo "
";
        // line 185
        $this->displayBlock('main', $context, $blocks);
        // line 261
        echo "
";
        // line 262
        if ((((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_fouth", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()))) {
            // line 263
            $this->displayBlock('footer', $context, $blocks);
        }
        
        $__internal_fb45887cac8b358a9c822049effce021e0aa0f87b3d0922115927a029ed2eab9->leave($__internal_fb45887cac8b358a9c822049effce021e0aa0f87b3d0922115927a029ed2eab9_prof);

    }

    // line 81
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_3cd39aa212bc0e7cc9fbe535e92e3db39b6332ef07ab781c441249f9263181dc = $this->env->getExtension("native_profiler");
        $__internal_3cd39aa212bc0e7cc9fbe535e92e3db39b6332ef07ab781c441249f9263181dc->enter($__internal_3cd39aa212bc0e7cc9fbe535e92e3db39b6332ef07ab781c441249f9263181dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 82
        echo "    ";
        // line 83
        $context["navbar_classes"] = array(0 =>         // line 84
(isset($context["mainmenu_class"]) ? $context["mainmenu_class"] : null), 1 =>         // line 85
(isset($context["mainmenu_transparent"]) ? $context["mainmenu_transparent"] : null));
        // line 88
        echo "  
    <div class=\"bar bar--sm visible-xs\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-xs-3 col-sm-2\">
\t        ";
        // line 93
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "branding", array()), "html", null, true));
        echo "
          </div>
          <div class=\"col-xs-9 col-sm-10 text-right\">
            <a href=\"#\" class=\"hamburger-toggle\" data-toggle-class=\"#menu1;hidden-xs\">
              <i class=\"icon icon--sm stack-interface stack-menu\"></i>
            </a>
          </div>
        </div>
        <!--end of row-->
      </div>
      <!--end of container-->
    </div>
    <!--end bar-->
\t
\t<nav id=\"menu1\" class=\"bar bar--sm bar-1 hidden-xs hidden-sm ";
        // line 107
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["mainmenu_class"]) ? $context["mainmenu_class"] : null), "html", null, true));
        echo " ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["mainmenu_transparent"]) ? $context["mainmenu_transparent"] : null), "html", null, true));
        echo "\" ";
        if ((isset($context["mainmenu_sticky"]) ? $context["mainmenu_sticky"] : null)) {
            echo " data-scroll-class='360px:pos-fixed' ";
        }
        echo ">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-1 col-sm-2 hidden-xs\">
            <div class=\"bar__module\">
              ";
        // line 112
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "branding", array()), "html", null, true));
        echo "
            </div>
            <!--end module-->
          </div>
\t\t  
\t\t  
\t\t  ";
        // line 118
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 119
            echo "          <div class=\"col-md-11 col-sm-12 text-right text-left-xs text-left-sm\">
            <div class=\"bar__module\">
\t\t\t  ";
            // line 121
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
\t        </div>
          </div>
          ";
        }
        // line 124
        echo " 
\t  
\t    </div>
      </div>
    </nav>
\t  
\t  
  ";
        
        $__internal_3cd39aa212bc0e7cc9fbe535e92e3db39b6332ef07ab781c441249f9263181dc->leave($__internal_3cd39aa212bc0e7cc9fbe535e92e3db39b6332ef07ab781c441249f9263181dc_prof);

    }

    // line 151
    public function block_header_first($context, array $blocks = array())
    {
        $__internal_b4ba9f600ba87c0a67e31095ae65f6e9441a75d942ec8be634277fc7f1433b29 = $this->env->getExtension("native_profiler");
        $__internal_b4ba9f600ba87c0a67e31095ae65f6e9441a75d942ec8be634277fc7f1433b29->enter($__internal_b4ba9f600ba87c0a67e31095ae65f6e9441a75d942ec8be634277fc7f1433b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_first"));

        // line 152
        echo "          <div ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["header_first_classes"]) ? $context["header_first_classes"] : null)), "method"), "html", null, true));
        echo " role=\"headingfirst\">
            ";
        // line 153
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_first", array()), "html", null, true));
        echo "
          </div>
        ";
        
        $__internal_b4ba9f600ba87c0a67e31095ae65f6e9441a75d942ec8be634277fc7f1433b29->leave($__internal_b4ba9f600ba87c0a67e31095ae65f6e9441a75d942ec8be634277fc7f1433b29_prof);

    }

    // line 160
    public function block_header_second($context, array $blocks = array())
    {
        $__internal_855914e84190369d7dfdea43e501bb17c90b365b445fc9f89e16e77912c3416b = $this->env->getExtension("native_profiler");
        $__internal_855914e84190369d7dfdea43e501bb17c90b365b445fc9f89e16e77912c3416b->enter($__internal_855914e84190369d7dfdea43e501bb17c90b365b445fc9f89e16e77912c3416b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_second"));

        // line 161
        echo "          <div class=\"col-sm-3\" role=\"headingsecond\">
            ";
        // line 162
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_second", array()), "html", null, true));
        echo "
          </div>
        ";
        
        $__internal_855914e84190369d7dfdea43e501bb17c90b365b445fc9f89e16e77912c3416b->leave($__internal_855914e84190369d7dfdea43e501bb17c90b365b445fc9f89e16e77912c3416b_prof);

    }

    // line 177
    public function block_title($context, array $blocks = array())
    {
        $__internal_a2e15cd84c57ea1a96948024ff5e2c80d14bbd3924d1f6ac1a6d848d9662997e = $this->env->getExtension("native_profiler");
        $__internal_a2e15cd84c57ea1a96948024ff5e2c80d14bbd3924d1f6ac1a6d848d9662997e->enter($__internal_a2e15cd84c57ea1a96948024ff5e2c80d14bbd3924d1f6ac1a6d848d9662997e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 178
        echo "          ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title", array()), "html", null, true));
        echo "
      ";
        
        $__internal_a2e15cd84c57ea1a96948024ff5e2c80d14bbd3924d1f6ac1a6d848d9662997e->leave($__internal_a2e15cd84c57ea1a96948024ff5e2c80d14bbd3924d1f6ac1a6d848d9662997e_prof);

    }

    // line 185
    public function block_main($context, array $blocks = array())
    {
        $__internal_d90434205a8e74fc6add582a8688f9f914471baa9ae11c55a039ab3cbec0f959 = $this->env->getExtension("native_profiler");
        $__internal_d90434205a8e74fc6add582a8688f9f914471baa9ae11c55a039ab3cbec0f959->enter($__internal_d90434205a8e74fc6add582a8688f9f914471baa9ae11c55a039ab3cbec0f959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 186
        echo "  <div role=\"main\" id=\"main-container\" class=\"main-container ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
        echo " js-quickedit-main-content\">
\t
\t<div class=\"row\">
      ";
        // line 190
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) {
            // line 191
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 196
            echo "      ";
        }
        // line 197
        echo "
      ";
        // line 199
        echo "      ";
        // line 200
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 201
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 202
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 203
(isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())))) ? ("col-sm-8") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 204
(isset($context["page"]) ? $context["page"] : null), "sidebar_first", array())) && twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 207
        echo "      <div";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">

        ";
        // line 210
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array())) {
            // line 211
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 214
            echo "        ";
        }
        // line 215
        echo "
        ";
        // line 217
        echo "        ";
        if ((isset($context["breadcrumb"]) ? $context["breadcrumb"] : null)) {
            // line 218
            echo "          ";
            $this->displayBlock('breadcrumb', $context, $blocks);
            // line 221
            echo "        ";
        }
        // line 222
        echo "
        ";
        // line 224
        echo "\t\t";
        if ((isset($context["title"]) ? $context["title"] : null)) {
            // line 225
            echo "          <h1";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["title_attributes"]) ? $context["title_attributes"] : null), "addClass", array(0 => "page-header"), "method"), "html", null, true));
            echo ">";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true));
            echo "</h1>
        ";
        }
        // line 227
        echo "\t\t";
        // line 228
        echo "\t\t
        ";
        // line 230
        echo "        ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 231
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 234
            echo "        ";
        }
        // line 235
        echo "
        ";
        // line 237
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 238
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 241
            echo "        ";
        }
        // line 242
        echo "
        ";
        // line 244
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 248
        echo "      </div>

      ";
        // line 251
        echo "      ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array())) {
            // line 252
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 257
            echo "      ";
        }
        // line 258
        echo "    </div>
  </div>
";
        
        $__internal_d90434205a8e74fc6add582a8688f9f914471baa9ae11c55a039ab3cbec0f959->leave($__internal_d90434205a8e74fc6add582a8688f9f914471baa9ae11c55a039ab3cbec0f959_prof);

    }

    // line 191
    public function block_sidebar_first($context, array $blocks = array())
    {
        $__internal_205346d902777e4f81a980159b0046a7dc03a7e8f501507102149d02f79f4f42 = $this->env->getExtension("native_profiler");
        $__internal_205346d902777e4f81a980159b0046a7dc03a7e8f501507102149d02f79f4f42->enter($__internal_205346d902777e4f81a980159b0046a7dc03a7e8f501507102149d02f79f4f42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_first"));

        // line 192
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 193
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
        
        $__internal_205346d902777e4f81a980159b0046a7dc03a7e8f501507102149d02f79f4f42->leave($__internal_205346d902777e4f81a980159b0046a7dc03a7e8f501507102149d02f79f4f42_prof);

    }

    // line 211
    public function block_highlighted($context, array $blocks = array())
    {
        $__internal_9b555e0e600b20bd0bac172717170448ecdc067bfd2d510e5046a9442858d262 = $this->env->getExtension("native_profiler");
        $__internal_9b555e0e600b20bd0bac172717170448ecdc067bfd2d510e5046a9442858d262->enter($__internal_9b555e0e600b20bd0bac172717170448ecdc067bfd2d510e5046a9442858d262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "highlighted"));

        // line 212
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
        
        $__internal_9b555e0e600b20bd0bac172717170448ecdc067bfd2d510e5046a9442858d262->leave($__internal_9b555e0e600b20bd0bac172717170448ecdc067bfd2d510e5046a9442858d262_prof);

    }

    // line 218
    public function block_breadcrumb($context, array $blocks = array())
    {
        $__internal_3b936294691fb40cc85f20d329c5bf17af712d70a733238bcffc135fc5fab7d2 = $this->env->getExtension("native_profiler");
        $__internal_3b936294691fb40cc85f20d329c5bf17af712d70a733238bcffc135fc5fab7d2->enter($__internal_3b936294691fb40cc85f20d329c5bf17af712d70a733238bcffc135fc5fab7d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "breadcrumb"));

        // line 219
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["breadcrumb"]) ? $context["breadcrumb"] : null), "html", null, true));
        echo "
          ";
        
        $__internal_3b936294691fb40cc85f20d329c5bf17af712d70a733238bcffc135fc5fab7d2->leave($__internal_3b936294691fb40cc85f20d329c5bf17af712d70a733238bcffc135fc5fab7d2_prof);

    }

    // line 231
    public function block_action_links($context, array $blocks = array())
    {
        $__internal_06fa48da99d842d36809c96a97b0b75fd32e4d0050c3d3b3d15b0d4129724fdd = $this->env->getExtension("native_profiler");
        $__internal_06fa48da99d842d36809c96a97b0b75fd32e4d0050c3d3b3d15b0d4129724fdd->enter($__internal_06fa48da99d842d36809c96a97b0b75fd32e4d0050c3d3b3d15b0d4129724fdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "action_links"));

        // line 232
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
        echo "</ul>
          ";
        
        $__internal_06fa48da99d842d36809c96a97b0b75fd32e4d0050c3d3b3d15b0d4129724fdd->leave($__internal_06fa48da99d842d36809c96a97b0b75fd32e4d0050c3d3b3d15b0d4129724fdd_prof);

    }

    // line 238
    public function block_help($context, array $blocks = array())
    {
        $__internal_5f6e2ccafbea25ae7bdaab476b3c0903bd714f7640dc99c8f264fdc28122fdec = $this->env->getExtension("native_profiler");
        $__internal_5f6e2ccafbea25ae7bdaab476b3c0903bd714f7640dc99c8f264fdc28122fdec->enter($__internal_5f6e2ccafbea25ae7bdaab476b3c0903bd714f7640dc99c8f264fdc28122fdec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        // line 239
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
          ";
        
        $__internal_5f6e2ccafbea25ae7bdaab476b3c0903bd714f7640dc99c8f264fdc28122fdec->leave($__internal_5f6e2ccafbea25ae7bdaab476b3c0903bd714f7640dc99c8f264fdc28122fdec_prof);

    }

    // line 244
    public function block_content($context, array $blocks = array())
    {
        $__internal_b05e21ac783f174c0f0bf509da7e65175895b13103bf3d2d1e0d45e8956777bc = $this->env->getExtension("native_profiler");
        $__internal_b05e21ac783f174c0f0bf509da7e65175895b13103bf3d2d1e0d45e8956777bc->enter($__internal_b05e21ac783f174c0f0bf509da7e65175895b13103bf3d2d1e0d45e8956777bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 245
        echo "          <a id=\"main-content\"></a>
          ";
        // line 246
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        ";
        
        $__internal_b05e21ac783f174c0f0bf509da7e65175895b13103bf3d2d1e0d45e8956777bc->leave($__internal_b05e21ac783f174c0f0bf509da7e65175895b13103bf3d2d1e0d45e8956777bc_prof);

    }

    // line 252
    public function block_sidebar_second($context, array $blocks = array())
    {
        $__internal_5118762e0dd50f998d1c3f4fc19cea74b34227db3eaa79d5d982f7c38d4bd03e = $this->env->getExtension("native_profiler");
        $__internal_5118762e0dd50f998d1c3f4fc19cea74b34227db3eaa79d5d982f7c38d4bd03e->enter($__internal_5118762e0dd50f998d1c3f4fc19cea74b34227db3eaa79d5d982f7c38d4bd03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_second"));

        // line 253
        echo "          <aside id=\"sidebar-second\" class=\"col-sm-4 hidden-sm\" role=\"complementary\">
            ";
        // line 254
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
        
        $__internal_5118762e0dd50f998d1c3f4fc19cea74b34227db3eaa79d5d982f7c38d4bd03e->leave($__internal_5118762e0dd50f998d1c3f4fc19cea74b34227db3eaa79d5d982f7c38d4bd03e_prof);

    }

    // line 263
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e107c8b084d60442c9f8947c8dd7118a66347fd4bf02153d8c5948a96ec404b3 = $this->env->getExtension("native_profiler");
        $__internal_e107c8b084d60442c9f8947c8dd7118a66347fd4bf02153d8c5948a96ec404b3->enter($__internal_e107c8b084d60442c9f8947c8dd7118a66347fd4bf02153d8c5948a96ec404b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 264
        echo "<footer class=\"footer-1 bg-dark\" role=\"contentinfo\">
\t<!-- postscript -->
\t";
        // line 266
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_fouth", array()))) {
            // line 267
            echo "    <div id=\"postscript\" class=\"postscript row\">
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 postscript_first\">
            ";
            // line 269
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_first", array()), "html", null, true));
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 postscript_second\">
            ";
            // line 272
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_second", array()), "html", null, true));
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 postscript_third\">
            ";
            // line 275
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_third", array()), "html", null, true));
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 postscript_fouth\">
            ";
            // line 278
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_fouth", array()), "html", null, true));
            echo "
          </div>
    </div>
    ";
        }
        // line 282
        echo "\t
    ";
        // line 283
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 284
            echo "\t<div class=\"row\">
\t  ";
            // line 285
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
\t</div>
\t";
        }
        // line 288
        echo "</footer>
";
        
        $__internal_e107c8b084d60442c9f8947c8dd7118a66347fd4bf02153d8c5948a96ec404b3->leave($__internal_e107c8b084d60442c9f8947c8dd7118a66347fd4bf02153d8c5948a96ec404b3_prof);

    }

    public function getTemplateName()
    {
        return "themes/stack/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  642 => 288,  636 => 285,  633 => 284,  631 => 283,  628 => 282,  621 => 278,  615 => 275,  609 => 272,  603 => 269,  599 => 267,  597 => 266,  593 => 264,  587 => 263,  577 => 254,  574 => 253,  568 => 252,  559 => 246,  556 => 245,  550 => 244,  540 => 239,  534 => 238,  524 => 232,  518 => 231,  508 => 219,  502 => 218,  492 => 212,  486 => 211,  476 => 193,  473 => 192,  467 => 191,  458 => 258,  455 => 257,  452 => 252,  449 => 251,  445 => 248,  442 => 244,  439 => 242,  436 => 241,  433 => 238,  430 => 237,  427 => 235,  424 => 234,  421 => 231,  418 => 230,  415 => 228,  413 => 227,  405 => 225,  402 => 224,  399 => 222,  396 => 221,  393 => 218,  390 => 217,  387 => 215,  384 => 214,  381 => 211,  378 => 210,  372 => 207,  370 => 204,  369 => 203,  368 => 202,  367 => 201,  366 => 200,  364 => 199,  361 => 197,  358 => 196,  355 => 191,  352 => 190,  345 => 186,  339 => 185,  329 => 178,  323 => 177,  313 => 162,  310 => 161,  304 => 160,  294 => 153,  289 => 152,  283 => 151,  269 => 124,  262 => 121,  258 => 119,  256 => 118,  247 => 112,  233 => 107,  216 => 93,  209 => 88,  207 => 85,  206 => 84,  205 => 83,  203 => 82,  197 => 81,  189 => 263,  187 => 262,  184 => 261,  182 => 185,  179 => 183,  174 => 179,  171 => 177,  168 => 175,  166 => 174,  163 => 172,  156 => 166,  153 => 165,  150 => 160,  147 => 159,  144 => 157,  141 => 156,  138 => 151,  136 => 150,  133 => 149,  131 => 146,  130 => 145,  129 => 144,  126 => 142,  120 => 138,  117 => 137,  115 => 136,  111 => 133,  107 => 81,  105 => 80,  102 => 79,  99 => 77,  95 => 75,  89 => 72,  86 => 71,  84 => 70,  81 => 69,  75 => 66,  72 => 65,  70 => 64,  67 => 63,  65 => 62,  61 => 60,  59 => 59,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Navigation:
 * - breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title: The page title, for use in the actual content.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - messages: Status and error messages. Should be displayed prominently.
 * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - action_links: Actions local to the page, such as \"Add menu\" on the menu
 *   administration interface.
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the navigation region.
 * - page.navigation_collapsible: Items for the navigation (collapsible) region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 *
 * @ingroup templates
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
{% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}

  <a id=\"top\"></a>
{% if page.user_left or page.user_right %}
\t<div class=\"nav-utility\">
\t  {% if page.user_left %}
\t  <div class=\"module left\">
\t    {{ page.user_left }}
\t  </div>
      {% endif %}
       
\t  {% if page.user_right %}
\t  <div class=\"module right\">
\t    {{ page.user_right }}
\t  </div>
      {% endif %}
\t</div>
    {% endif %}
\t
{# Navbar #}
<div class=\"nav-container\">
  {% if page.navigation or page.navigation_collapsible or page.branding %}
  {% block navbar %}
    {%
      set navbar_classes = [
\t\tmainmenu_class,
\t\tmainmenu_transparent,
      ]
    %}
  
    <div class=\"bar bar--sm visible-xs\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-xs-3 col-sm-2\">
\t        {{ page.branding }}
          </div>
          <div class=\"col-xs-9 col-sm-10 text-right\">
            <a href=\"#\" class=\"hamburger-toggle\" data-toggle-class=\"#menu1;hidden-xs\">
              <i class=\"icon icon--sm stack-interface stack-menu\"></i>
            </a>
          </div>
        </div>
        <!--end of row-->
      </div>
      <!--end of container-->
    </div>
    <!--end bar-->
\t
\t<nav id=\"menu1\" class=\"bar bar--sm bar-1 hidden-xs hidden-sm {{ mainmenu_class }} {{ mainmenu_transparent }}\" {% if mainmenu_sticky %} data-scroll-class='360px:pos-fixed' {% endif %}>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-md-1 col-sm-2 hidden-xs\">
            <div class=\"bar__module\">
              {{ page.branding }}
            </div>
            <!--end module-->
          </div>
\t\t  
\t\t  
\t\t  {% if page.navigation_collapsible %}
          <div class=\"col-md-11 col-sm-12 text-right text-left-xs text-left-sm\">
            <div class=\"bar__module\">
\t\t\t  {{ page.navigation_collapsible }}
\t        </div>
          </div>
          {% endif %} 
\t  
\t    </div>
      </div>
    </nav>
\t  
\t  
  {% endblock %}
{% endif %}
</div>

{# Header #}
{% if page.header_first  %}
<div class=\"header-wrapper\">
  <div role=\"header\" class=\"header-container {{ container }} \">
    <div class=\"row\">

      {# Header First #}
\t  
\t   {%
        set header_first_classes = [
          page.header_second ? 'col-sm-9',
          page.header_second is empty  ? 'col-sm-12'
        ]
      %}
\t  
      {% if page.header_first %}
        {% block header_first %}
          <div {{ attributes.addClass(header_first_classes) }} role=\"headingfirst\">
            {{ page.header_first }}
          </div>
        {% endblock %}
      {% endif %}
\t  
\t  {# Header Second #}
      {% if page.header_second %}
        {% block header_second %}
          <div class=\"col-sm-3\" role=\"headingsecond\">
            {{ page.header_second }}
          </div>
        {% endblock %}
      {% endif %}
\t  
\t</div>
  </div>
</div>
{% endif %}
{# End Header #}

{# Title #}
{% if page.title  %}
<div class=\"title-wrapper\">
      {# Title #}
      {% block title %}
          {{ page.title }}
      {% endblock %}\t 
</div>
{% endif %}
{# End Title #}

{# Main #}
{% block main %}
  <div role=\"main\" id=\"main-container\" class=\"main-container {{ container }} js-quickedit-main-content\">
\t
\t<div class=\"row\">
      {# Sidebar First #}
      {% if page.sidebar_first %}
        {% block sidebar_first %}
          <aside class=\"col-sm-3\" role=\"complementary\">
            {{ page.sidebar_first }}
          </aside>
        {% endblock %}
      {% endif %}

      {# Content #}
      {%
        set content_classes = [
          page.sidebar_first and page.sidebar_second ? 'col-sm-6',
          page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',
          page.sidebar_second and page.sidebar_first is empty ? 'col-sm-8',
          page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-12'
        ]
      %}
      <div{{ content_attributes.addClass(content_classes) }}>

        {# Highlighted #}
        {% if page.highlighted %}
          {% block highlighted %}
            <div class=\"highlighted\">{{ page.highlighted }}</div>
          {% endblock %}
        {% endif %}

        {# Breadcrumbs #}
        {% if breadcrumb %}
          {% block breadcrumb %}
            {{ breadcrumb }}
          {% endblock %}
        {% endif %}

        {# Title #}
\t\t{% if title %}
          <h1{{ title_attributes.addClass('page-header') }}>{{ title }}</h1>
        {% endif %}
\t\t{# Title #}
\t\t
        {# Action Links #}
        {% if action_links %}
          {% block action_links %}
            <ul class=\"action-links\">{{ action_links }}</ul>
          {% endblock %}
        {% endif %}

        {# Help #}
        {% if page.help %}
          {% block help %}
            {{ page.help }}
          {% endblock %}
        {% endif %}

        {# Content #}
        {% block content %}
          <a id=\"main-content\"></a>
          {{ page.content }}
        {% endblock %}
      </div>

      {# Sidebar Second #}
      {% if page.sidebar_second %}
        {% block sidebar_second %}
          <aside id=\"sidebar-second\" class=\"col-sm-4 hidden-sm\" role=\"complementary\">
            {{ page.sidebar_second }}
          </aside>
        {% endblock %}
      {% endif %}
    </div>
  </div>
{% endblock %}

{% if page.postscript_first or page.postscript_second or page.postscript_third or page.postscript_fouth or page.footer %}
{% block footer %}
<footer class=\"footer-1 bg-dark\" role=\"contentinfo\">
\t<!-- postscript -->
\t{% if page.postscript_first or page.postscript_second or page.postscript_third or page.postscript_fouth %}
    <div id=\"postscript\" class=\"postscript row\">
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 postscript_first\">
            {{ page.postscript_first }}
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 postscript_second\">
            {{ page.postscript_second }}
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 postscript_third\">
            {{ page.postscript_third }}
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 postscript_fouth\">
            {{ page.postscript_fouth }}
          </div>
    </div>
    {% endif %}
\t
    {% if page.footer %}
\t<div class=\"row\">
\t  {{ page.footer }}
\t</div>
\t{% endif %}
</footer>
{% endblock %}
{% endif %}
";
    }
}
