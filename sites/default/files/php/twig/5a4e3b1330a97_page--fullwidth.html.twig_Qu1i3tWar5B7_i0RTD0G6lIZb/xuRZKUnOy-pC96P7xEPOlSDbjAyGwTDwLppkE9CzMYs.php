<?php

/* themes/stack/templates/page--fullwidth.html.twig */
class __TwigTemplate_357f97caa105f1d0487f7405ed8c24f759c1c826be3f021b87f838a976623c18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'header_first' => array($this, 'block_header_first'),
            'header_second' => array($this, 'block_header_second'),
            'main' => array($this, 'block_main'),
            'action_links' => array($this, 'block_action_links'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7fe52daa1306db3c6d60bcb425418905327dc56602e7472b0cbdeb1530d6eb47 = $this->env->getExtension("native_profiler");
        $__internal_7fe52daa1306db3c6d60bcb425418905327dc56602e7472b0cbdeb1530d6eb47->enter($__internal_7fe52daa1306db3c6d60bcb425418905327dc56602e7472b0cbdeb1530d6eb47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "themes/stack/templates/page--fullwidth.html.twig"));

        $tags = array("set" => 59, "if" => 63, "block" => 82);
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
        // line 63
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "user_left", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "user_right", array()))) {
            // line 64
            echo "\t<div class=\"nav-utility\">
\t  ";
            // line 65
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "user_left", array())) {
                // line 66
                echo "\t  <div class=\"module left\">
\t    ";
                // line 67
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "user_left", array()), "html", null, true));
                echo "
\t  </div>
      ";
            }
            // line 70
            echo "       
\t  ";
            // line 71
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "user_right", array())) {
                // line 72
                echo "\t  <div class=\"module right\">
\t    ";
                // line 73
                echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "user_right", array()), "html", null, true));
                echo "
\t  </div>
      ";
            }
            // line 76
            echo "\t</div>
    ";
        }
        // line 78
        echo "\t
";
        // line 80
        echo "<div class=\"nav-container\">
  ";
        // line 81
        if ((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "branding", array()))) {
            // line 82
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 134
        echo "</div>

";
        // line 137
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_first", array())) {
            // line 138
            echo "<div class=\"header-wrapper\">
  <div role=\"header\" class=\"header-container ";
            // line 139
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["container"]) ? $context["container"] : null), "html", null, true));
            echo " \">
    <div class=\"row\">

      ";
            // line 143
            echo "\t  
\t   ";
            // line 145
            $context["header_first_classes"] = array(0 => (($this->getAttribute(            // line 146
(isset($context["page"]) ? $context["page"] : null), "header_second", array())) ? ("col-sm-9") : ("")), 1 => ((twig_test_empty($this->getAttribute(            // line 147
(isset($context["page"]) ? $context["page"] : null), "header_second", array()))) ? ("col-sm-12") : ("")));
            // line 150
            echo "\t  
      ";
            // line 151
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_first", array())) {
                // line 152
                echo "        ";
                $this->displayBlock('header_first', $context, $blocks);
                // line 157
                echo "      ";
            }
            // line 158
            echo "\t  
\t  ";
            // line 160
            echo "      ";
            if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_second", array())) {
                // line 161
                echo "        ";
                $this->displayBlock('header_second', $context, $blocks);
                // line 166
                echo "      ";
            }
            // line 167
            echo "\t  
\t</div>
  </div>
</div>
";
        }
        // line 173
        echo "
";
        // line 175
        $this->displayBlock('main', $context, $blocks);
        // line 202
        echo "

";
        // line 204
        if ((((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_fouth", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()))) {
            // line 205
            $this->displayBlock('footer', $context, $blocks);
        }
        // line 233
        echo "
";
        
        $__internal_7fe52daa1306db3c6d60bcb425418905327dc56602e7472b0cbdeb1530d6eb47->leave($__internal_7fe52daa1306db3c6d60bcb425418905327dc56602e7472b0cbdeb1530d6eb47_prof);

    }

    // line 82
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_b5a9d3faa322b040a19ea7d7251cb8e22732e7e6a50fa7cae4222dc2074ab59b = $this->env->getExtension("native_profiler");
        $__internal_b5a9d3faa322b040a19ea7d7251cb8e22732e7e6a50fa7cae4222dc2074ab59b->enter($__internal_b5a9d3faa322b040a19ea7d7251cb8e22732e7e6a50fa7cae4222dc2074ab59b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 83
        echo "    ";
        // line 84
        $context["navbar_classes"] = array(0 =>         // line 85
(isset($context["mainmenu_class"]) ? $context["mainmenu_class"] : null), 1 =>         // line 86
(isset($context["mainmenu_transparent"]) ? $context["mainmenu_transparent"] : null));
        // line 89
        echo "  
    <div class=\"bar bar--sm visible-xs\">
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"col-xs-3 col-sm-2\">
\t        ";
        // line 94
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
\t<nav id=\"menu1\" class=\"bar bar--sm bar-1 hidden-xs hiddem-sm ";
        // line 108
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
        // line 113
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "branding", array()), "html", null, true));
        echo "
            </div>
            <!--end module-->
          </div>
\t\t  
\t\t  
\t\t  ";
        // line 119
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array())) {
            // line 120
            echo "          <div class=\"col-md-11 col-sm-12 text-right text-left-xs text-left-sm\">
            <div class=\"bar__module\">
\t\t\t  ";
            // line 122
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "navigation_collapsible", array()), "html", null, true));
            echo "
\t        </div>
          </div>
          ";
        }
        // line 125
        echo " 
\t  
\t    </div>
      </div>
    </nav>
\t  
\t  
  ";
        
        $__internal_b5a9d3faa322b040a19ea7d7251cb8e22732e7e6a50fa7cae4222dc2074ab59b->leave($__internal_b5a9d3faa322b040a19ea7d7251cb8e22732e7e6a50fa7cae4222dc2074ab59b_prof);

    }

    // line 152
    public function block_header_first($context, array $blocks = array())
    {
        $__internal_c5d64b5c1ad21206ed0803445fcfe7065955a2a504c96a8b93a0ec2e6b8a6e90 = $this->env->getExtension("native_profiler");
        $__internal_c5d64b5c1ad21206ed0803445fcfe7065955a2a504c96a8b93a0ec2e6b8a6e90->enter($__internal_c5d64b5c1ad21206ed0803445fcfe7065955a2a504c96a8b93a0ec2e6b8a6e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_first"));

        // line 153
        echo "          <div ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "addClass", array(0 => (isset($context["header_first_classes"]) ? $context["header_first_classes"] : null)), "method"), "html", null, true));
        echo " role=\"headingfirst\">
            ";
        // line 154
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_first", array()), "html", null, true));
        echo "
          </div>
        ";
        
        $__internal_c5d64b5c1ad21206ed0803445fcfe7065955a2a504c96a8b93a0ec2e6b8a6e90->leave($__internal_c5d64b5c1ad21206ed0803445fcfe7065955a2a504c96a8b93a0ec2e6b8a6e90_prof);

    }

    // line 161
    public function block_header_second($context, array $blocks = array())
    {
        $__internal_9a3ded3d9f30e7d0f2a1a396bc679fa0d83daf5d5e9eeae59ded61a3f2b6cf5a = $this->env->getExtension("native_profiler");
        $__internal_9a3ded3d9f30e7d0f2a1a396bc679fa0d83daf5d5e9eeae59ded61a3f2b6cf5a->enter($__internal_9a3ded3d9f30e7d0f2a1a396bc679fa0d83daf5d5e9eeae59ded61a3f2b6cf5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_second"));

        // line 162
        echo "          <div class=\"col-sm-3\" role=\"headingsecond\">
            ";
        // line 163
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header_second", array()), "html", null, true));
        echo "
          </div>
        ";
        
        $__internal_9a3ded3d9f30e7d0f2a1a396bc679fa0d83daf5d5e9eeae59ded61a3f2b6cf5a->leave($__internal_9a3ded3d9f30e7d0f2a1a396bc679fa0d83daf5d5e9eeae59ded61a3f2b6cf5a_prof);

    }

    // line 175
    public function block_main($context, array $blocks = array())
    {
        $__internal_e390856ba600fe55744f841fdef971ddd67d58f9480b75218506be8b3b7183b8 = $this->env->getExtension("native_profiler");
        $__internal_e390856ba600fe55744f841fdef971ddd67d58f9480b75218506be8b3b7183b8->enter($__internal_e390856ba600fe55744f841fdef971ddd67d58f9480b75218506be8b3b7183b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 176
        echo "  <div role=\"main\" id=\"main-container\" class=\"main-container js-quickedit-main-content\">
      <div";
        // line 177
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["content_attributes"]) ? $context["content_attributes"] : null), "addClass", array(0 => (isset($context["content_classes"]) ? $context["content_classes"] : null)), "method"), "html", null, true));
        echo ">
\t\t
        ";
        // line 180
        echo "        ";
        if ((isset($context["action_links"]) ? $context["action_links"] : null)) {
            // line 181
            echo "          ";
            $this->displayBlock('action_links', $context, $blocks);
            // line 184
            echo "        ";
        }
        // line 185
        echo "
        ";
        // line 187
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array())) {
            // line 188
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 191
            echo "        ";
        }
        // line 192
        echo "
        ";
        // line 194
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 198
        echo "      </div>

  </div>
";
        
        $__internal_e390856ba600fe55744f841fdef971ddd67d58f9480b75218506be8b3b7183b8->leave($__internal_e390856ba600fe55744f841fdef971ddd67d58f9480b75218506be8b3b7183b8_prof);

    }

    // line 181
    public function block_action_links($context, array $blocks = array())
    {
        $__internal_6dbfe4c269d1ead1482ee2f4c60cef47693a854c011826aac6e37311bb2963b6 = $this->env->getExtension("native_profiler");
        $__internal_6dbfe4c269d1ead1482ee2f4c60cef47693a854c011826aac6e37311bb2963b6->enter($__internal_6dbfe4c269d1ead1482ee2f4c60cef47693a854c011826aac6e37311bb2963b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "action_links"));

        // line 182
        echo "            <ul class=\"action-links\">";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["action_links"]) ? $context["action_links"] : null), "html", null, true));
        echo "</ul>
          ";
        
        $__internal_6dbfe4c269d1ead1482ee2f4c60cef47693a854c011826aac6e37311bb2963b6->leave($__internal_6dbfe4c269d1ead1482ee2f4c60cef47693a854c011826aac6e37311bb2963b6_prof);

    }

    // line 188
    public function block_help($context, array $blocks = array())
    {
        $__internal_81c6289e42b40af828de667371538aa16e711729d82d3f758baf3504400c7af7 = $this->env->getExtension("native_profiler");
        $__internal_81c6289e42b40af828de667371538aa16e711729d82d3f758baf3504400c7af7->enter($__internal_81c6289e42b40af828de667371538aa16e711729d82d3f758baf3504400c7af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "help"));

        // line 189
        echo "            ";
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
          ";
        
        $__internal_81c6289e42b40af828de667371538aa16e711729d82d3f758baf3504400c7af7->leave($__internal_81c6289e42b40af828de667371538aa16e711729d82d3f758baf3504400c7af7_prof);

    }

    // line 194
    public function block_content($context, array $blocks = array())
    {
        $__internal_46646deef61e66d59244d04fbf782adfde783d7c6ecf0d5e9d6fd8c87f510184 = $this->env->getExtension("native_profiler");
        $__internal_46646deef61e66d59244d04fbf782adfde783d7c6ecf0d5e9d6fd8c87f510184->enter($__internal_46646deef61e66d59244d04fbf782adfde783d7c6ecf0d5e9d6fd8c87f510184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 195
        echo "          <a id=\"main-content\"></a>
          ";
        // line 196
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
        ";
        
        $__internal_46646deef61e66d59244d04fbf782adfde783d7c6ecf0d5e9d6fd8c87f510184->leave($__internal_46646deef61e66d59244d04fbf782adfde783d7c6ecf0d5e9d6fd8c87f510184_prof);

    }

    // line 205
    public function block_footer($context, array $blocks = array())
    {
        $__internal_197b391f039eece880be0483154570f8804707a153a330166b7e846e888fe726 = $this->env->getExtension("native_profiler");
        $__internal_197b391f039eece880be0483154570f8804707a153a330166b7e846e888fe726->enter($__internal_197b391f039eece880be0483154570f8804707a153a330166b7e846e888fe726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 206
        echo "<footer class=\"footer-1 bg-dark\" role=\"contentinfo\">
\t<!-- postscript -->
\t";
        // line 208
        if (((($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_first", array()) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_second", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_third", array())) || $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_fouth", array()))) {
            // line 209
            echo "    <div id=\"postscript\" class=\"postscript row\">
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 postscript_first\">
            ";
            // line 211
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_first", array()), "html", null, true));
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 postscript_second\">
            ";
            // line 214
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_second", array()), "html", null, true));
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 postscript_third\">
            ";
            // line 217
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_third", array()), "html", null, true));
            echo "
          </div>
          <div class=\"col-lg-3 col-md-3 col-sm-12 col-xs-12 postscript_fouth\">
            ";
            // line 220
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "postscript_fouth", array()), "html", null, true));
            echo "
          </div>
    </div>
    ";
        }
        // line 224
        echo "\t
    ";
        // line 225
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 226
            echo "\t<div class=\"row\">
\t  ";
            // line 227
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
\t</div>
\t";
        }
        // line 230
        echo "</footer>
";
        
        $__internal_197b391f039eece880be0483154570f8804707a153a330166b7e846e888fe726->leave($__internal_197b391f039eece880be0483154570f8804707a153a330166b7e846e888fe726_prof);

    }

    public function getTemplateName()
    {
        return "themes/stack/templates/page--fullwidth.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  463 => 230,  457 => 227,  454 => 226,  452 => 225,  449 => 224,  442 => 220,  436 => 217,  430 => 214,  424 => 211,  420 => 209,  418 => 208,  414 => 206,  408 => 205,  399 => 196,  396 => 195,  390 => 194,  380 => 189,  374 => 188,  364 => 182,  358 => 181,  348 => 198,  345 => 194,  342 => 192,  339 => 191,  336 => 188,  333 => 187,  330 => 185,  327 => 184,  324 => 181,  321 => 180,  316 => 177,  313 => 176,  307 => 175,  297 => 163,  294 => 162,  288 => 161,  278 => 154,  273 => 153,  267 => 152,  253 => 125,  246 => 122,  242 => 120,  240 => 119,  231 => 113,  217 => 108,  200 => 94,  193 => 89,  191 => 86,  190 => 85,  189 => 84,  187 => 83,  181 => 82,  173 => 233,  170 => 205,  168 => 204,  164 => 202,  162 => 175,  159 => 173,  152 => 167,  149 => 166,  146 => 161,  143 => 160,  140 => 158,  137 => 157,  134 => 152,  132 => 151,  129 => 150,  127 => 147,  126 => 146,  125 => 145,  122 => 143,  116 => 139,  113 => 138,  111 => 137,  107 => 134,  103 => 82,  101 => 81,  98 => 80,  95 => 78,  91 => 76,  85 => 73,  82 => 72,  80 => 71,  77 => 70,  71 => 67,  68 => 66,  66 => 65,  63 => 64,  61 => 63,  56 => 60,  54 => 59,);
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
\t<nav id=\"menu1\" class=\"bar bar--sm bar-1 hidden-xs hiddem-sm {{ mainmenu_class }} {{ mainmenu_transparent }}\" {% if mainmenu_sticky %} data-scroll-class='360px:pos-fixed' {% endif %}>
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

{# Main #}
{% block main %}
  <div role=\"main\" id=\"main-container\" class=\"main-container js-quickedit-main-content\">
      <div{{ content_attributes.addClass(content_classes) }}>
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
