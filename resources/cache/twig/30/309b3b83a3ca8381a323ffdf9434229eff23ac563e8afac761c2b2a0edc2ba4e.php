<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* auth/login.twig */
class __TwigTemplate_e41b7cc9707305214894039214fcc51bf9763ef7ab288f3fb833e1fd331d523b extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.twig", "auth/login.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, lang("login"), "html", null, true);
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <style>
        html {
            height: 100%;
        }
        body {
            height: 100%;
            display: -ms-flexbox;
            display: -webkit-box;
            display: flex;
            -ms-flex-align: center;
            -ms-flex-pack: center;
            -webkit-box-align: center;
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;
            padding-bottom: 40px;
            margin-bottom: 0;
        }
    </style>
";
    }

    // line 27
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    <div class=\"container-fluid\">
        <form class=\"form-signin\" method=\"post\" action=\"";
        // line 29
        echo twig_escape_filter($this->env, route("login"), "html", null, true);
        echo "\">
            <div class=\"row text-center\">
                <div class=\"col-md-12\">
                    <h1 class=\"h3 mb-3 font-weight-normal\">";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "app_name", [], "any", false, false, false, 32), "html", null, true);
        echo "</h1>
                    ";
        // line 33
        $this->loadTemplate("comp/alert.twig", "auth/login.twig", 33)->display($context);
        // line 34
        echo "                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
        // line 38
        if ( !(null === ($context["recaptcha_site_key"] ?? null))) {
            // line 39
            echo "                        <input type=\"hidden\" name=\"recaptcha_token\" id=\"recaptcha_token\">
                    ";
        }
        // line 41
        echo "                    <label for=\"username\" class=\"sr-only\">";
        echo twig_escape_filter($this->env, lang("login.username"), "html", null, true);
        echo "</label>
                    <input type=\"text\" id=\"username\" class=\"form-control first\" placeholder=\"";
        // line 42
        echo twig_escape_filter($this->env, lang("login.username"), "html", null, true);
        echo "\" name=\"username\" required autofocus>
                    <label for=\"password\" class=\"sr-only\">";
        // line 43
        echo twig_escape_filter($this->env, lang("password"), "html", null, true);
        echo "</label>
                    <input type=\"password\" id=\"password\" class=\"form-control last\" placeholder=\"";
        // line 44
        echo twig_escape_filter($this->env, lang("password"), "html", null, true);
        echo "\" name=\"password\" required>
                    <div class=\"d-flex justify-content-between\">
                        <div class=\"form-check\">
                            <input type=\"checkbox\" name=\"remember\" class=\"form-check-input float-left\" id=\"remember\">
                            <label class=\"form-check-label\" for=\"remember\">";
        // line 48
        echo twig_escape_filter($this->env, lang("remember_me"), "html", null, true);
        echo "</label>
                        </div>
                        <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, route("recover"), "html", null, true);
        echo "\" class=\"\">";
        echo twig_escape_filter($this->env, lang("password_recovery"), "html", null, true);
        echo "</a>
                    </div>
                </div>
            </div>
            <div class=\"row mt-2\">
                <div class=\"col-md-12\">
                    <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">";
        // line 56
        echo twig_escape_filter($this->env, lang("login"), "html", null, true);
        echo "</button>
                    ";
        // line 57
        if ((($context["register_enabled"] ?? null) == "on")) {
            // line 58
            echo "                    <div class=\"text-center mt-2\">
                        ";
            // line 59
            echo twig_escape_filter($this->env, lang("no_account"), "html", null, true);
            echo " <a href=\"";
            echo twig_escape_filter($this->env, route("register.show"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, lang("register"), "html", null, true);
            echo "</a>.
                    </div>
                    ";
        }
        // line 62
        echo "                </div>
            </div>
        </form>
    </div>
";
    }

    // line 68
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 69
        echo "    ";
        if ( !(null === ($context["recaptcha_site_key"] ?? null))) {
            // line 70
            echo "        ";
            $this->loadTemplate("comp/recaptcha.twig", "auth/login.twig", 70)->display($context);
            // line 71
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "auth/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 71,  184 => 70,  181 => 69,  177 => 68,  169 => 62,  159 => 59,  156 => 58,  154 => 57,  150 => 56,  139 => 50,  134 => 48,  127 => 44,  123 => 43,  119 => 42,  114 => 41,  110 => 39,  108 => 38,  102 => 34,  100 => 33,  96 => 32,  90 => 29,  87 => 28,  83 => 27,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "auth/login.twig", "/home/u339165095/domains/irnell.com/public_html/resources/templates/auth/login.twig");
    }
}
