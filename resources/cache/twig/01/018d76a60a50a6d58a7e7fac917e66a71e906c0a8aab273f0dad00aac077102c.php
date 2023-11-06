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

/* user/edit.twig */
class __TwigTemplate_abf8e9cc803afb04f0cd38544994e5e96096fd2bc5ad561f6e0d753c011e61e3 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.twig", "user/edit.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, ((($context["profile"] ?? null)) ? (lang("your_profile")) : (lang("user.edit"))), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->loadTemplate("comp/navbar.twig", "user/edit.twig", 6)->display($context);
        // line 7
        echo "    <div class=\"container\">
        ";
        // line 8
        $this->loadTemplate("comp/alert.twig", "user/edit.twig", 8)->display($context);
        // line 9
        echo "        <div class=\"row justify-content-center\">
            <div class=\"col-md-10\">
                <div class=\"card shadow-sm\">
                    ";
        // line 12
        if ( !($context["profile"] ?? null)) {
            // line 13
            echo "                        <div class=\"card-header\">";
            echo twig_escape_filter($this->env, lang("user.edit"), "html", null, true);
            echo "</div>
                    ";
        }
        // line 15
        echo "                    <div class=\"card-body\">
                        <form method=\"post\" action=\"";
        // line 16
        echo twig_escape_filter($this->env, route(((($context["profile"] ?? null)) ? ("profile.update") : ("user.update")), ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 16)]), "html", null, true);
        echo "\">
                            <div class=\"form-group row\">
                                <label for=\"email\" class=\"col-sm-3 col-form-label\">Email</label>
                                <div class=\"col-sm-9\">
                                    <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"email@example.com\" name=\"email\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", [], "any", false, false, false, 20), "html", null, true);
        echo "\" autocomplete=\"off\" required>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label for=\"username\" class=\"col-sm-3 col-form-label\">";
        // line 24
        echo twig_escape_filter($this->env, lang("username"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-9\">
                                    ";
        // line 26
        if (($context["profile"] ?? null)) {
            // line 27
            echo "                                        <input type=\"text\" class=\"form-control disabled\" id=\"username\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 27), "html", null, true);
            echo "\" readonly>
                                    ";
        } else {
            // line 29
            echo "                                        <input type=\"text\" class=\"form-control\" id=\"username\" placeholder=\"";
            echo twig_escape_filter($this->env, lang("username"), "html", null, true);
            echo "\" name=\"username\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", [], "any", false, false, false, 29), "html", null, true);
            echo "\" autocomplete=\"off\" required>
                                    ";
        }
        // line 31
        echo "                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label for=\"password\" class=\"col-sm-3 col-form-label\">";
        // line 34
        echo twig_escape_filter($this->env, lang("password"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-9\">
                                    <input type=\"password\" class=\"form-control\" id=\"password\" placeholder=\"";
        // line 36
        echo twig_escape_filter($this->env, lang("password"), "html", null, true);
        echo "\" name=\"password\" autocomplete=\"off\"";
        echo ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "ldap", [], "any", false, false, false, 36)) ? (" disabled") : (""));
        echo ">
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label for=\"token\" class=\"col-sm-3 col-form-label\">";
        // line 40
        echo twig_escape_filter($this->env, lang("token"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-9\">
                                    <div class=\"input-group\">
                                        <input type=\"text\" id=\"token\" class=\"form-control privacy-blur\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "token", [], "any", false, false, false, 43), "html", null, true);
        echo "\" readonly>
                                        <div class=\"input-group-append\">
                                            <button class=\"btn btn-outline-success btn-clipboard\" type=\"button\" data-clipboard-target=\"#token\"><i class=\"fas fa-fw fa-copy\"></i> ";
        // line 45
        echo twig_escape_filter($this->env, lang("copy"), "html", null, true);
        echo "</button>
                                            <button class=\"btn btn-outline-primary refresh-token\" data-id=\"";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 46), "html", null, true);
        echo "\" type=\"button\"><i class=\"fas fa-fw fa-sync\"></i> ";
        echo twig_escape_filter($this->env, lang("update"), "html", null, true);
        echo "</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label for=\"hide_uploads\" class=\"col-sm-3 col-form-label\">";
        // line 52
        echo twig_escape_filter($this->env, lang("hide_by_default"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-9\">
                                    <input type=\"checkbox\" name=\"hide_uploads\" data-toggle=\"toggle\" ";
        // line 54
        echo ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "hide_uploads", [], "any", false, false, false, 54)) ? ("checked") : (""));
        echo ">
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label for=\"copy_raw\" class=\"col-sm-3 col-form-label\">";
        // line 58
        echo twig_escape_filter($this->env, lang("copy_url_behavior"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-9\">
                                    <input type=\"checkbox\" name=\"copy_raw\" data-toggle=\"toggle\" data-off=\"Default URL\" data-on=\"Raw URL\" data-onstyle=\"primary\" data-offstyle=\"secondary\" ";
        // line 60
        echo ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "copy_raw", [], "any", false, false, false, 60)) ? ("checked") : (""));
        echo ">
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"col-sm-3 col-form-label\">";
        // line 64
        echo twig_escape_filter($this->env, lang("client_config"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-9\">
                                    <div class=\"btn-group\">
                                        <a href=\"";
        // line 67
        echo twig_escape_filter($this->env, route("config.sharex", ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 67)]), "html", null, true);
        echo "\" class=\"btn btn-lg btn-outline-dark\"><i class=\"fas fa-fw fa-download\"></i> ShareX</a>
                                        <a href=\"javascript:alert('";
        // line 68
        echo twig_escape_filter($this->env, lang("copied"), "html", null, true);
        echo "')\" data-clipboard-text=\"";
        echo twig_escape_filter($this->env, route("config.screencloud", ["token" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "token", [], "any", false, false, false, 68)]), "html", null, true);
        echo "\" class=\"btn btn-lg btn-outline-info btn-clipboard\"><i class=\"fas fa-fw fa-download\"></i> Screencloud</a>
                                        <a href=\"";
        // line 69
        echo twig_escape_filter($this->env, route("config.script", ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 69)]), "html", null, true);
        echo "\" class=\"btn btn-lg btn-outline-danger\"><i class=\"fas fa-fw fa-download\"></i> Linux Script</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label class=\"col-sm-3 col-form-label\">";
        // line 74
        echo twig_escape_filter($this->env, lang("export_data"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-9\">
                                    <div class=\"btn-group\">
                                        <a href=\"";
        // line 77
        echo twig_escape_filter($this->env, route("export.data", ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 77)]), "html", null, true);
        echo "\" class=\"btn btn-lg btn-outline-warning\"><i class=\"fas fa-fw fa-file-archive\"></i> ";
        echo twig_escape_filter($this->env, lang("download"), "html", null, true);
        echo "</a>
                                    </div>
                                </div>
                            </div>
                            ";
        // line 81
        if ( !($context["profile"] ?? null)) {
            // line 82
            echo "                                <h6 class=\"text-danger\">";
            echo twig_escape_filter($this->env, lang("danger_zone"), "html", null, true);
            echo "</h6>
                                <hr>

                                <div class=\"form-group row\">
                                    <label for=\"is_admin\" class=\"col-sm-3 col-form-label\">";
            // line 86
            echo twig_escape_filter($this->env, lang("is_admin"), "html", null, true);
            echo "</label>
                                    <div class=\"col-sm-9\">
                                        <input type=\"checkbox\" name=\"is_admin\" data-toggle=\"toggle\" data-off=\"";
            // line 88
            echo twig_escape_filter($this->env, lang("no"), "html", null, true);
            echo "\" data-on=\"";
            echo twig_escape_filter($this->env, lang("yes"), "html", null, true);
            echo "\" ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "is_admin", [], "any", false, false, false, 88)) ? ("checked") : (""));
            echo ">
                                    </div>
                                </div>
                                <div class=\"form-group row\">
                                    <label for=\"is_active\" class=\"col-sm-3 col-form-label\">";
            // line 92
            echo twig_escape_filter($this->env, lang("is_active"), "html", null, true);
            echo "</label>
                                    <div class=\"col-sm-9\">
                                        <input type=\"checkbox\" name=\"is_active\" data-toggle=\"toggle\" data-off=\"";
            // line 94
            echo twig_escape_filter($this->env, lang("no"), "html", null, true);
            echo "\" data-on=\"";
            echo twig_escape_filter($this->env, lang("yes"), "html", null, true);
            echo "\" ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "active", [], "any", false, false, false, 94)) ? ("checked") : (""));
            echo ">
                                    </div>
                                </div>
                                ";
            // line 97
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "ldap", [], "any", false, false, false, 97), "enabled", [], "any", false, false, false, 97)) {
                // line 98
                echo "                                    <div class=\"form-group row\">
                                        <label for=\"ldap\" class=\"col-sm-3 col-form-label\">LDAP Auth</label>
                                        <div class=\"col-sm-9\">
                                            <input type=\"checkbox\" name=\"ldap\" data-toggle=\"toggle\" data-off=\"";
                // line 101
                echo twig_escape_filter($this->env, lang("no"), "html", null, true);
                echo "\" data-on=\"";
                echo twig_escape_filter($this->env, lang("yes"), "html", null, true);
                echo "\" ";
                echo ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "ldap", [], "any", false, false, false, 101)) ? ("checked") : (""));
                echo ">
                                        </div>
                                    </div>
                                ";
            }
            // line 105
            echo "                                ";
            if ((($context["quota_enabled"] ?? null) == "on")) {
                // line 106
                echo "                                    <div class=\"form-group row\">
                                        <label for=\"max_user_quota\" class=\"col-sm-3 col-form-label\">";
                // line 107
                echo twig_escape_filter($this->env, lang("max_user_quota"), "html", null, true);
                echo "</label>
                                        <div class=\"col-sm-9\">
                                            <input type=\"text\" class=\"form-control\" id=\"max_user_quota\" name=\"max_user_quota\" pattern=\"([0-9]+[K|M|G|T])|(\\-1)\" title=\"512M, 2G, 1T, ...\" placeholder=\"1G\" value=\"";
                // line 109
                echo twig_escape_filter($this->env, ($context["max_disk_quota"] ?? null), "html", null, true);
                echo "\" required>
                                            <small>512M, 2G, 1T, ... (-1=∞)</small>
                                        </div>
                                    </div>
                                ";
            }
            // line 114
            echo "                                <div class=\"form-group row\">
                                    <label class=\"col-sm-3 col-form-label\">";
            // line 115
            echo twig_escape_filter($this->env, lang("delete_all"), "html", null, true);
            echo "</label>
                                    <div class=\"col-sm-9\">
                                        <div class=\"btn-group\">
                                            <a href=\"";
            // line 118
            echo twig_escape_filter($this->env, route("user.clear", ["id" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "id", [], "any", false, false, false, 118)]), "html", null, true);
            echo "\" class=\"btn btn-lg btn-outline-danger\"><i class=\"fas fa-fw fa-recycle\"></i> ";
            echo twig_escape_filter($this->env, lang("clear_account"), "html", null, true);
            echo "</a>
                                        </div>
                                    </div>
                                </div>
                            ";
        }
        // line 123
        echo "                            <div class=\"form-group row justify-content-md-end\">
                                <div class=\"col-sm-9\">
                                    <button type=\"submit\" class=\"btn btn-outline-info\">
                                        <i class=\"fas fa-save fa-fw\"></i> ";
        // line 126
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
        return "user/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 126,  322 => 123,  312 => 118,  306 => 115,  303 => 114,  295 => 109,  290 => 107,  287 => 106,  284 => 105,  273 => 101,  268 => 98,  266 => 97,  256 => 94,  251 => 92,  240 => 88,  235 => 86,  227 => 82,  225 => 81,  216 => 77,  210 => 74,  202 => 69,  196 => 68,  192 => 67,  186 => 64,  179 => 60,  174 => 58,  167 => 54,  162 => 52,  151 => 46,  147 => 45,  142 => 43,  136 => 40,  127 => 36,  122 => 34,  117 => 31,  109 => 29,  103 => 27,  101 => 26,  96 => 24,  89 => 20,  82 => 16,  79 => 15,  73 => 13,  71 => 12,  66 => 9,  64 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/edit.twig", "/home/u339165095/domains/irnell.com/public_html/resources/templates/user/edit.twig");
    }
}
