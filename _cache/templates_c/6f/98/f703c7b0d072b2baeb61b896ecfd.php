<?php

/* default.html */
class __TwigTemplate_6f98f703c7b0d072b2baeb61b896ecfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
  <meta name=\"description\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "description"), "html", null, true);
        echo "\">
  <meta name=\"author\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "author"), "html", null, true);
        echo "\">
  <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
  <link rel=\"shortcut icon\" href=\"assets/ico/favicon.png\">
  <title>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title"), "html", null, true);
        echo "</title>
    <!-- Bootstrap -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "root"), "html", null, true);
        echo "css/bootstrap.min.css\" rel=\"stylesheet\">
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "root"), "html", null, true);
        echo "css/skriptble.css\" rel=\"stylesheet\">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"assets/js/html5shiv.js\"></script>
    <script src=\"assets/js/respond.min.js\"></script>
    <![endif]-->

</head>
<body>
    <div class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
      <div class=\"container\">
        <div class=\"navbar-header\">
          <a class=\"navbar-brand\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('piecrust')->getUrl(""), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title"), "html", null, true);
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title")) {
            echo " &mdash; ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title"), "html", null, true);
        }
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
            <a href=\"about.html\">About</a>
            </li>
          </ul>
        </div>
      </div> <!-- /container -->
    </div>
    <div class=\"container\">
        ";
        // line 42
        $this->displayBlock('header', $context, $blocks);
        // line 49
        echo "    <section id=\"main\" role=\"main\">
        ";
        // line 50
        $this->displayBlock('main', $context, $blocks);
        // line 57
        echo "    </section>
    <footer>
        ";
        // line 59
        $this->displayBlock('footer', $context, $blocks);
        // line 61
        echo "        <p>";
        echo $this->getAttribute((isset($context["piecrust"]) ? $context["piecrust"] : null), "branding");
        echo "</p>
    </footer>
  </div>
</body>
</html>
";
    }

    // line 42
    public function block_header($context, array $blocks = array())
    {
        // line 43
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title")) {
            // line 44
            echo "        <p class=\"site-title\"><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "root"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title"), "html", null, true);
            echo "</a></p>
        ";
        } else {
            // line 46
            echo "        <h1><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "root"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "title"), "html", null, true);
            echo "</a></h1>
        ";
        }
        // line 48
        echo "        ";
    }

    // line 50
    public function block_main($context, array $blocks = array())
    {
        // line 51
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title")) {
            // line 52
            echo "        <h1 class=\"page-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title"), "html", null, true);
            echo "</h1>
        ";
        }
        // line 54
        echo "
        ";
        // line 55
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        ";
    }

    // line 59
    public function block_footer($context, array $blocks = array())
    {
        // line 60
        echo "        ";
    }

    public function getTemplateName()
    {
        return "default.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 60,  160 => 59,  154 => 55,  151 => 54,  145 => 52,  142 => 51,  139 => 50,  135 => 48,  127 => 46,  119 => 44,  116 => 43,  113 => 42,  102 => 61,  100 => 59,  96 => 57,  94 => 50,  91 => 49,  89 => 42,  63 => 25,  47 => 12,  43 => 11,  38 => 9,  32 => 6,  28 => 5,  22 => 1,);
    }
}
