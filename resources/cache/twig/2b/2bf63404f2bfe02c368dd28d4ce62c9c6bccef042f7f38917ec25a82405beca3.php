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

/* auth/recover_mail.twig */
class __TwigTemplate_5ada159b92e234e4604aed8bc877797ff1c3aa89700eedca7b142ead5fb8d0af extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.twig", "auth/recover_mail.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, lang("password_recovery"), "html", null, true);
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
        echo twig_escape_filter($this->env, route("recover.mail"), "html", null, true);
        echo "\">
            ";
        // line 30
        if ( !(null === ($context["recaptcha_site_key"] ?? null))) {
            // line 31
            echo "                <input type=\"hidden\" name=\"recaptcha_token\" id=\"recaptcha_token\">
            ";
        }
        // line 33
        echo "            <div class=\"row text-center\">
                <div class=\"col-md-12\">
                    <h1 class=\"h3 mb-3 font-weight-normal\">";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "app_name", [], "any", false, false, false, 35), "html", null, true);
        echo "</h1>
                    ";
        // line 36
        $this->loadTemplate("comp/alert.twig", "auth/recover_mail.twig", 36)->display($context);
        // line 37
        echo "                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <label for=\"email\" class=\"sr-only\">";
        // line 41
        echo twig_escape_filter($this->env, lang("email"), "html", null, true);
        echo "</label>
                    <input type=\"email\" id=\"email\" class=\"form-control\" placeholder=\"mail@example.com\" name=\"email\" required autofocus>
                </div>
            </div>
            <div class=\"row mt-2\">
                <div class=\"col-md-12\">
                    <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">";
        // line 47
        echo twig_escape_filter($this->env, lang("password_recovery"), "html", null, true);
        echo "</button>
                    <div class=\"text-center mt-2\">
                        <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, route("login.show"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, lang("cancel"), "html", null, true);
        echo "</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
";
    }

    // line 56
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 57
        echo "    ";
        if ( !(null === ($context["recaptcha_site_key"] ?? null))) {
            // line 58
            echo "        ";
            $this->loadTemplate("comp/recaptcha.twig", "auth/recover_mail.twig", 58)->display($context);
            // line 59
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "auth/recover_mail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 59,  150 => 58,  147 => 57,  143 => 56,  130 => 49,  125 => 47,  116 => 41,  110 => 37,  108 => 36,  104 => 35,  100 => 33,  96 => 31,  94 => 30,  90 => 29,  87 => 28,  83 => 27,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "auth/recover_mail.twig", "/home/u339165095/domains/irnell.com/public_html/resources/templates/auth/recover_mail.twig");
    }
}
