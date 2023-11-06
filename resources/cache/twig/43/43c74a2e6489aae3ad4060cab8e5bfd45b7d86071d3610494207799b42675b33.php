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

/* user/index.twig */
class __TwigTemplate_60b8214522b7a94f12ee534e5cccc20b2c74df838cbfeecf4f8629bec8132d43 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.twig", "user/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, lang("users"), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->loadTemplate("comp/navbar.twig", "user/index.twig", 6)->display($context);
        // line 7
        echo "    <div class=\"container\">
        ";
        // line 8
        $this->loadTemplate("comp/alert.twig", "user/index.twig", 8)->display($context);
        // line 9
        echo "        <div class=\"card shadow-sm\">
            <div class=\"card-body\">
                <div class=\"text-right\">
                    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, route("user.create"), "html", null, true);
        echo "\" class=\"btn btn-outline-success mb-3\"><i class=\"fas fa-plus\"></i> ";
        echo twig_escape_filter($this->env, lang("user.create"), "html", null, true);
        echo "</a>
                </div>
                <div class=\"table-responsive\">
                    <table class=\"table table-hover\">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Email</th>
                            <th>";
        // line 20
        echo twig_escape_filter($this->env, lang("username"), "html", null, true);
        echo "</th>
                            <th>";
        // line 21
        echo twig_escape_filter($this->env, lang("user_code"), "html", null, true);
        echo "</th>
                            <th>";
        // line 22
        echo twig_escape_filter($this->env, lang("used_space"), "html", null, true);
        echo "</th>
                            <th>";
        // line 23
        echo twig_escape_filter($this->env, lang("active"), "html", null, true);
        echo "</th>
                            ";
        // line 24
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "ldap", [], "any", false, false, false, 24), "enabled", [], "any", false, false, false, 24)) {
            // line 25
            echo "                                <th>";
            echo twig_escape_filter($this->env, lang("LDAP"), "html", null, true);
            echo "</th>
                            ";
        }
        // line 27
        echo "                            <th>";
        echo twig_escape_filter($this->env, lang("admin"), "html", null, true);
        echo "</th>
                            <th>";
        // line 28
        echo twig_escape_filter($this->env, lang("reg_date"), "html", null, true);
        echo "</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 34
            echo "                            <tr>
                                <td>#";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
                                <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 36), "html", null, true);
            echo "</td>
                                <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 37), "html", null, true);
            echo "</td>
                                <td>
                                    <pre>";
            // line 39
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["user"], "user_code", [], "any", true, true, false, 39)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["user"], "user_code", [], "any", false, false, false, 39), lang("none"))) : (lang("none"))), "html", null, true);
            echo "</pre>
                                </td>
                                <td>";
            // line 41
            echo twig_escape_filter($this->env, humanFileSize(twig_get_attribute($this->env, $this->source, $context["user"], "current_disk_quota", [], "any", false, false, false, 41)), "html", null, true);
            if ((($context["quota_enabled"] ?? null) == "on")) {
                echo "/";
                (((twig_get_attribute($this->env, $this->source, $context["user"], "max_disk_quota", [], "any", false, false, false, 41) > 0)) ? (print (twig_escape_filter($this->env, humanFileSize(twig_get_attribute($this->env, $this->source, $context["user"], "max_disk_quota", [], "any", false, false, false, 41)), "html", null, true))) : (print ("∞")));
            }
            echo "</td>
                                <td class=\"text-center\">
                                    ";
            // line 43
            if (twig_get_attribute($this->env, $this->source, $context["user"], "active", [], "any", false, false, false, 43)) {
                // line 44
                echo "                                        <span class=\"badge badge-success\"><i class=\"fas fa-check\"></i></span>
                                    ";
            } else {
                // line 46
                echo "                                        <span class=\"badge badge-danger\"><i class=\"fas fa-times\"></i></span>
                                    ";
            }
            // line 48
            echo "                                </td>
                                ";
            // line 49
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "ldap", [], "any", false, false, false, 49), "enabled", [], "any", false, false, false, 49)) {
                // line 50
                echo "                                    <td class=\"text-center\">
                                        ";
                // line 51
                if (twig_get_attribute($this->env, $this->source, $context["user"], "ldap", [], "any", false, false, false, 51)) {
                    // line 52
                    echo "                                            <span class=\"badge badge-success\"><i class=\"fas fa-check\"></i></span>
                                        ";
                } else {
                    // line 54
                    echo "                                            <span class=\"badge badge-danger\"><i class=\"fas fa-times\"></i></span>
                                        ";
                }
                // line 56
                echo "                                    </td>
                                ";
            }
            // line 58
            echo "                                <td class=\"text-center\">
                                    ";
            // line 59
            if (twig_get_attribute($this->env, $this->source, $context["user"], "is_admin", [], "any", false, false, false, 59)) {
                // line 60
                echo "                                        <span class=\"badge badge-success\"><i class=\"fas fa-check\"></i></span>
                                    ";
            } else {
                // line 62
                echo "                                        <span class=\"badge badge-danger\"><i class=\"fas fa-times\"></i></span>
                                    ";
            }
            // line 64
            echo "                                </td>
                                <td>
                                    ";
            // line 66
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "registration_date", [], "any", false, false, false, 66), "d/m/Y H:i:s"), "html", null, true);
            echo "
                                </td>
                                <td class=\"text-right\">
                                    <div class=\"btn-group\">
                                        <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, route("user.edit", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            echo "\" class=\"btn btn-outline-warning\" data-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, lang("edit"), "html", null, true);
            echo "\"><i class=\"fas fa-pencil-alt\"></i></a>
                                        <a href=\"javascript:void(0)\" class=\"btn btn-outline-danger user-delete\" data-link=\"";
            // line 71
            echo twig_escape_filter($this->env, route("user.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 71)]), "html", null, true);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, lang("delete"), "html", null, true);
            echo "\"><i class=\"fas fa-trash\"></i></a>
                                    </div>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                        </tbody>
                    </table>
                </div>
                <div class=\"d-flex justify-content-center\">
                    ";
        // line 80
        $this->loadTemplate("comp/pager.twig", "user/index.twig", 80)->display(twig_array_merge($context, ["path" => "users"]));
        // line 81
        echo "                </div>
            </div>
        </div>
    </div>
    ";
        // line 85
        $this->loadTemplate("comp/modal_delete.twig", "user/index.twig", 85)->display($context);
    }

    public function getTemplateName()
    {
        return "user/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 85,  238 => 81,  236 => 80,  230 => 76,  217 => 71,  211 => 70,  204 => 66,  200 => 64,  196 => 62,  192 => 60,  190 => 59,  187 => 58,  183 => 56,  179 => 54,  175 => 52,  173 => 51,  170 => 50,  168 => 49,  165 => 48,  161 => 46,  157 => 44,  155 => 43,  146 => 41,  141 => 39,  136 => 37,  132 => 36,  128 => 35,  125 => 34,  121 => 33,  113 => 28,  108 => 27,  102 => 25,  100 => 24,  96 => 23,  92 => 22,  88 => 21,  84 => 20,  71 => 12,  66 => 9,  64 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "user/index.twig", "/home/u339165095/domains/irnell.com/public_html/resources/templates/user/index.twig");
    }
}
