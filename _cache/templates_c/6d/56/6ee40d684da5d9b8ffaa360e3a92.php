<?php

/* default.html */
class __TwigTemplate_6d566ee40d684da5d9b8ffaa360e3a92 extends Twig_Template
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
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title")) {
            echo " &mdash; ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title"), "html", null, true);
        }
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
    ";
        // line 22
        $this->env->loadTemplate("menu.html")->display($context);
        // line 23
        echo "      <header>
        ";
        // line 24
        $this->displayBlock('header', $context, $blocks);
        // line 26
        echo "      </header>
      <section id=\"main\" role=\"main\">
        ";
        // line 28
        $this->displayBlock('main', $context, $blocks);
        // line 35
        echo "      </section>
      <footer>
        ";
        // line 37
        $this->displayBlock('footer', $context, $blocks);
        // line 39
        echo "        <p>";
        echo $this->getAttribute((isset($context["piecrust"]) ? $context["piecrust"] : null), "branding");
        echo "</p>
      </footer>
    </div>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"http://code.jquery.com/jquery.js\"></script>
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "root"), "html", null, true);
        echo "js/bootstrap.js\"></script>
    ";
        // line 47
        echo $this->getAttribute((isset($context["piecrust"]) ? $context["piecrust"] : null), "debug_info");
        echo "
  </body>
</html>
";
    }

    // line 24
    public function block_header($context, array $blocks = array())
    {
        // line 25
        echo "        ";
    }

    // line 28
    public function block_main($context, array $blocks = array())
    {
        // line 29
        echo "        ";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title")) {
            // line 30
            echo "        <h1 class=\"page-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title"), "html", null, true);
            echo "</h1>
        ";
        }
        // line 32
        echo "
        ";
        // line 33
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
        ";
    }

    // line 37
    public function block_footer($context, array $blocks = array())
    {
        // line 38
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
        return array (  137 => 38,  134 => 37,  128 => 33,  125 => 32,  119 => 30,  116 => 29,  113 => 28,  109 => 25,  106 => 24,  98 => 47,  94 => 46,  83 => 39,  81 => 37,  77 => 35,  75 => 28,  71 => 26,  69 => 24,  66 => 23,  64 => 22,  51 => 12,  47 => 11,  38 => 9,  32 => 6,  28 => 5,  22 => 1,);
    }
}
