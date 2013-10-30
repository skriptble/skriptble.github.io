<?php

/* post.html */
class __TwigTemplate_70919ff88a1d6fea6d5a48e145c20810 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("default.html");

        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main($context, array $blocks = array())
    {
        // line 3
        echo "  ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title")) {
            // line 4
            echo "  <h1 class=\"page-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title"), "html", null, true);
            echo "</h1>
  ";
        }
        // line 6
        echo "  <span class=\"post-date\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "date"), "html", null, true);
        echo "</span>

  ";
        // line 8
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "post.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  40 => 6,  34 => 4,  31 => 3,  28 => 2,);
    }
}
