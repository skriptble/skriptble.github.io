<?php

/* post.html */
class __TwigTemplate_349310042d90c3610646cd9e1180c337 extends Twig_Template
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
        // line 7
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "author")) {
            // line 8
            echo "  <div>By: <span class=\"byline\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "author"), "html", null, true);
            echo "</span></div>
  ";
        }
        // line 10
        echo "
  ";
        // line 11
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
        return array (  56 => 11,  53 => 10,  47 => 8,  45 => 7,  40 => 6,  34 => 4,  31 => 3,  28 => 2,);
    }
}
