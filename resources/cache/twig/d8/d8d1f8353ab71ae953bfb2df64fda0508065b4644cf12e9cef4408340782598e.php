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

/* user/create.twig */
class __TwigTemplate_8204422749ce572a428afdac810e8e75868c4719a2203b63d7ac75ce12b8398a extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
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
        $this->parent = $this->loadTemplate("base.twig", "user/create.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, lang("user.create"), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->loadTemplate("comp/navbar.twig", "user/create.twig", 6)->display($context);
        // line 7
        echo "    <div class=\"container\">
        ";
        // line 8
        $this->loadTemplate("comp/alert.twig", "user/create.twig", 8)->display($context);
        // line 9
        echo "        <div class=\"row justify-content-center\">
            <div class=\"col-md-10\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-header\">";
        // line 12
        echo twig_escape_filter($this->env, lang("user.create"), "html", null, true);
        echo "</div>
                    <div class=\"card-body\">
                        <form method=\"post\" action=\"";
        // line 14
        echo twig_escape_filter($this->env, route("user.store"), "html", null, true);
        echo "\">
                            <div class=\"form-group row\">
                                <label for=\"email\" class=\"col-sm-3 col-form-label\">E-Mail</label>
                                <div class=\"col-sm-9\">
                                    <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"email@example.com\" name=\"email\" autocomplete=\"off\" required>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label for=\"email\" class=\"col-sm-3 col-form-label\">";
        // line 22
        echo twig_escape_filter($this->env, lang("username"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-9\">
                                    <input type=\"text\" class=\"form-control\" id=\"username\" placeholder=\"";
        // line 24
        echo twig_escape_filter($this->env, lang("username"), "html", null, true);
        echo "\" name=\"username\" autocomplete=\"off\" required >
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label for=\"password\" class=\"col-sm-3 col-form-label\">";
        // line 28
        echo twig_escape_filter($this->env, lang("password"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-9\">
                                    <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"";
        // line 30
        echo twig_escape_filter($this->env, lang("password"), "html", null, true);
        echo "\" name=\"password\" autocomplete=\"off\">
                                    <small>";
        // line 31
        echo twig_escape_filter($this->env, lang("user_create_password"), "html", null, true);
        echo "</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label for=\"hide_uploads\" class=\"col-sm-3 col-form-label\">";
        // line 35
        echo twig_escape_filter($this->env, lang("hide_by_default"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-9\">
                                    <input type=\"checkbox\" name=\"hide_uploads\" data-toggle=\"toggle\">
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label for=\"copy_raw\" class=\"col-sm-3 col-form-label\">";
        // line 41
        echo twig_escape_filter($this->env, lang("copy_url_behavior"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-9\">
                                    <input type=\"checkbox\" name=\"copy_raw\" data-toggle=\"toggle\" data-off=\"Default URL\" data-on=\"Raw URL\" data-onstyle=\"primary\" data-offstyle=\"secondary\">
                                </div>
                            </div>
                            ";
        // line 46
        if ((($context["quota_enabled"] ?? null) == "on")) {
            // line 47
            echo "                            <div class=\"form-group row\">
                                <label for=\"max_user_quota\" class=\"col-sm-3 col-form-label\">";
            // line 48
            echo twig_escape_filter($this->env, lang("max_user_quota"), "html", null, true);
            echo "</label>
                                <div class=\"col-sm-9\">
                                    <input type=\"text\" class=\"form-control\" id=\"max_user_quota\" name=\"max_user_quota\" pattern=\"([0-9]+[K|M|G|T])|(\\-1)\" title=\"512M, 2G, 1T, ...\" placeholder=\"1G\" value=\"";
            // line 50
            echo twig_escape_filter($this->env, ($context["default_user_quota"] ?? null), "html", null, true);
            echo "\" required>
                                    <small>512M, 2G, 1T, ... (-1=∞)</small>
                                </div>
                            </div>
                            ";
        }
        // line 55
        echo "                            <div class=\"form-group row\">
                                <label for=\"is_admin\" class=\"col-sm-3 col-form-label\">";
        // line 56
        echo twig_escape_filter($this->env, lang("is_admin"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-9\">
                                    <input type=\"checkbox\" name=\"is_admin\" data-toggle=\"toggle\" data-off=\"";
        // line 58
        echo twig_escape_filter($this->env, lang("no"), "html", null, true);
        echo "\" data-on=\"";
        echo twig_escape_filter($this->env, lang("yes"), "html", null, true);
        echo "\">
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label for=\"is_active\" class=\"col-sm-3 col-form-label\">";
        // line 62
        echo twig_escape_filter($this->env, lang("is_active"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-9\">
                                    <input type=\"checkbox\" name=\"is_active\" data-toggle=\"toggle\" data-off=\"";
        // line 64
        echo twig_escape_filter($this->env, lang("no"), "html", null, true);
        echo "\" data-on=\"";
        echo twig_escape_filter($this->env, lang("yes"), "html", null, true);
        echo "\" checked>
                                </div>
                            </div>
                            <hr>
                            <div class=\"form-group row\">
                                <label for=\"send_notification\" class=\"col-sm-3 col-form-label\">";
        // line 69
        echo twig_escape_filter($this->env, lang("send_notification"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-9\">
                                    <input type=\"checkbox\" name=\"send_notification\" data-toggle=\"toggle\" data-onstyle=\"info\" data-off=\"";
        // line 71
        echo twig_escape_filter($this->env, lang("no"), "html", null, true);
        echo "\" data-on=\"";
        echo twig_escape_filter($this->env, lang("yes"), "html", null, true);
        echo "\">
                                </div>
                            </div>
                            <div class=\"form-group row justify-content-md-end\">
                                <div class=\"col-sm-9\">
                                    <button type=\"submit\" class=\"btn btn-outline-success\">
                                        <i class=\"fas fa-save fa-fw\"></i> ";
        // line 77
        echo twig_escape_filter($this->env, lang("save"), "html", null, true);
        echo "
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "user/create.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 77,  187 => 71,  182 => 69,  172 => 64,  167 => 62,  158 => 58,  153 => 56,  150 => 55,  142 => 50,  137 => 48,  134 => 47,  132 => 46,  124 => 41,  115 => 35,  108 => 31,  104 => 30,  99 => 28,  92 => 24,  87 => 22,  76 => 14,  71 => 12,  66 => 9,  64 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/create.twig", "/home/u339165095/domains/irnell.com/public_html/resources/templates/user/create.twig");
    }
}
