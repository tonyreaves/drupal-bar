<?php

/* themes/mayo/templates/status-messages.html.twig */
class __TwigTemplate_b1fc92ece8ba79e6b273a026c2aba5b22a4a3e6941b410bdb2f67f796a44f330 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'messages' => array($this, 'block_messages'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 26, "if" => 27, "for" => 31, "set" => 33);
        $filters = array("without" => 38, "length" => 45, "first" => 52);
        $functions = array("attach_library" => 28);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'if', 'for', 'set'),
                array('without', 'length', 'first'),
                array('attach_library')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 26
        $this->displayBlock('messages', $context, $blocks);
    }

    public function block_messages($context, array $blocks = array())
    {
        // line 27
        echo "  ";
        if ( !twig_test_empty(($context["message_list"] ?? null))) {
            // line 28
            echo "    ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("mayo/messages"), "html", null, true));
            echo "
    <div id=\"messages\">
      <div class=\"section clearfix\">
";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["message_list"] ?? null));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 32
                echo "  ";
                // line 33
                $context["classes"] = array(0 => "messages", 1 => ("messages--" .                 // line 35
$context["type"]));
                // line 38
                echo "  <div role=\"contentinfo\" aria-label=\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["status_headings"] ?? null), $context["type"], array(), "array"), "html", null, true));
                echo "\"";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "role", "aria-label"), "html", null, true));
                echo ">
    ";
                // line 39
                if (($context["type"] == "error")) {
                    // line 40
                    echo "      <div role=\"alert\">
    ";
                }
                // line 42
                echo "      ";
                if ($this->getAttribute(($context["status_headings"] ?? null), $context["type"], array(), "array")) {
                    // line 43
                    echo "        <h2 class=\"visually-hidden\">";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["status_headings"] ?? null), $context["type"], array(), "array"), "html", null, true));
                    echo "</h2>
      ";
                }
                // line 45
                echo "      ";
                if ((twig_length_filter($this->env, $context["messages"]) > 1)) {
                    // line 46
                    echo "        <ul class=\"messages__list\">
          ";
                    // line 47
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["messages"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 48
                        echo "            <li class=\"messages__item\">";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $context["message"], "html", null, true));
                        echo "</li>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 50
                    echo "        </ul>
      ";
                } else {
                    // line 52
                    echo "        ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_first($this->env, $context["messages"]), "html", null, true));
                    echo "
      ";
                }
                // line 54
                echo "    ";
                if (($context["type"] == "error")) {
                    // line 55
                    echo "      </div>
    ";
                }
                // line 57
                echo "  </div>
  ";
                // line 59
                echo "  ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "removeClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "      </div>
    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "themes/mayo/templates/status-messages.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  139 => 61,  130 => 59,  127 => 57,  123 => 55,  120 => 54,  114 => 52,  110 => 50,  101 => 48,  97 => 47,  94 => 46,  91 => 45,  85 => 43,  82 => 42,  78 => 40,  76 => 39,  69 => 38,  67 => 35,  66 => 33,  64 => 32,  60 => 31,  53 => 28,  50 => 27,  44 => 26,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/mayo/templates/status-messages.html.twig", "/Users/mymac/Desktop/cameron-site/themes/mayo/templates/status-messages.html.twig");
    }
}
