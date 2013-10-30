<?php

/* menu.html */
class __TwigTemplate_232c0e28eeaebc6d1280deb2e14247f4 extends Twig_Template
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
        // line 1
        echo "    <div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <a class=\"navbar-brand\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('piecrust')->getUrl(""), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title"), "html", null, true);
        echo "</a>
          <button class=\"navbar-toggle collapsed\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar-main\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        </div>
        <div class=\"navbar-collapse collapse\" id=\"navbar-main\">
          <ul class=\"nav navbar-nav\">
            <li>
              <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('piecrust')->getUrl("resume"), "html", null, true);
        echo "\">Resume</a>
            </li>
          </ul>
        </div>
      </div> <!-- /container -->
    </div>
    <div class=\"container\">

";
    }

    public function getTemplateName()
    {
        return "menu.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 14,  24 => 4,  19 => 1,);
    }
}
