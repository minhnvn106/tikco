<?php

/* themes/contrib/newsplus_lite/templates/node--article.html.twig */
class __TwigTemplate_b292811dd6c15183a21ebb378887bfcf6cc41f9d2e9da19f5b6043a2bffc1172 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 65
        $this->parent = $this->loadTemplate("node.html.twig", "themes/contrib/newsplus_lite/templates/node--article.html.twig", 65);
        $this->blocks = array(
            'node_side' => array($this, 'block_node_side'),
            'meta_area' => array($this, 'block_meta_area'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "node.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 69, "trans" => 78);
        $filters = array();
        $functions = array("attach_library" => 67);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'trans'),
                array(),
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

        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 66
    public function block_node_side($context, array $blocks = array())
    {
        // line 67
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("newsplus_lite/node-features"), "html", null, true));
        echo "
  <div class=\"node-side\">
    ";
        // line 69
        if (($context["display_submitted"] ?? null)) {
            // line 70
            echo "      <div class=\"user-info\">
        ";
            // line 71
            if (($context["author_picture"] ?? null)) {
                // line 72
                echo "          <div class=\"user-picture\">
            <span";
                // line 73
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_attributes"] ?? null), "html", null, true));
                echo ">
              ";
                // line 74
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["author_picture"] ?? null), "html", null, true));
                echo "
            </span>
          </div>
        ";
            }
            // line 78
            echo "        <div class=\"user-name\">";
            echo t("By @author_name", array("@author_name" => ($context["author_name"] ?? null), ));
            echo "</div>
        ";
            // line 79
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["metadata"] ?? null), "html", null, true));
            echo "
      </div>
    ";
        }
        // line 82
        echo "    <div id=\"affix\">
      <div class=\"submitted-info\">
        <div class=\"submitted-info-item\">
          ";
        // line 85
        echo t("Published", array());
        // line 86
        echo "          <span>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["posted_ago"] ?? null), "html", null, true));
        echo " ";
        echo t("ago", array());
        echo "</span>
        </div>
        <div class=\"submitted-info-item\">
          ";
        // line 89
        echo t("Last updated", array());
        // line 90
        echo "          <span>";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["changed_ago"] ?? null), "html", null, true));
        echo " ";
        echo t("ago", array());
        echo "</span>
        </div>
      </div>
    </div>
  </div>
";
    }

    // line 96
    public function block_meta_area($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "themes/contrib/newsplus_lite/templates/node--article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 96,  111 => 90,  109 => 89,  100 => 86,  98 => 85,  93 => 82,  87 => 79,  82 => 78,  75 => 74,  71 => 73,  68 => 72,  66 => 71,  63 => 70,  61 => 69,  56 => 67,  53 => 66,  11 => 65,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/contrib/newsplus_lite/templates/node--article.html.twig", "C:\\xampp\\htdocs\\project\\themes\\contrib\\newsplus_lite\\templates\\node--article.html.twig");
    }
}
