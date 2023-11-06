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

/* comp/navbar.twig */
class __TwigTemplate_4abafa233993006c8e7d4d803afa2fcb9a541e3e5d6e1d4f82dc5d8f7ebdbbc0 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<nav class=\"navbar navbar-dark bg-primary navbar-expand-md mb-4 shadow-sm\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, route("root"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "app_name", [], "any", false, false, false, 3), "html", null, true);
        echo "</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
            <ul class=\"navbar-nav mr-auto\">
                <li class=\"nav-item\">
                    <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, route("home"), "html", null, true);
        echo "\" class=\"nav-link ";
        echo ((inPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "uri", [], "any", false, false, false, 10), "path", [], "any", false, false, false, 10), "/home")) ? ("active") : (""));
        echo "\"><i class=\"fas fa-fw fa-home\"></i>
                        ";
        // line 11
        echo twig_escape_filter($this->env, lang("home"), "html", null, true);
        echo "
                    </a>
                </li>
                <li class=\"nav-item\">
                    <a href=\"";
        // line 15
        echo twig_escape_filter($this->env, route("upload.web.show"), "html", null, true);
        echo "\" class=\"nav-link ";
        echo ((inPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "uri", [], "any", false, false, false, 15), "path", [], "any", false, false, false, 15), "/upload")) ? ("active") : (""));
        echo "\"><i class=\"fas fa-fw fa-upload\"></i>
                        ";
        // line 16
        echo twig_escape_filter($this->env, lang("upload"), "html", null, true);
        echo "
                    </a>
                </li>
                ";
        // line 19
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "admin"], "method", false, false, false, 19)) {
            // line 20
            echo "                    <li class=\"nav-item\">
                        <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, route("user.index"), "html", null, true);
            echo "\" class=\"nav-link ";
            echo ((inPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "uri", [], "any", false, false, false, 21), "path", [], "any", false, false, false, 21), "/user")) ? ("active") : (""));
            echo "\"><i class=\"fas fa-fw fa-users\"></i>
                            ";
            // line 22
            echo twig_escape_filter($this->env, lang("users"), "html", null, true);
            echo "
                        </a>
                    </li>
                    <li class=\"nav-item\">
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, route("system"), "html", null, true);
            echo "\" class=\"nav-link ";
            echo ((inPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "uri", [], "any", false, false, false, 26), "path", [], "any", false, false, false, 26), "/system")) ? ("active") : (""));
            echo "\"><i class=\"fas fa-fw fa-cog\"></i>
                            ";
            // line 27
            echo twig_escape_filter($this->env, lang("system"), "html", null, true);
            echo "
                        </a>
                    </li>
                ";
        }
        // line 31
        echo "            </ul>
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item dropdown\">
                    <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-fw fa-user\"></i> ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "username"], "method", false, false, false, 35), "html", null, true);
        echo "
                    </a>
                    <div class=\"dropdown-menu shadow-sm\" aria-labelledby=\"userDropdown\">
                        <a class=\"dropdown-item disabled\" href=\"javascript:void(0)\">";
        // line 38
        echo twig_escape_filter($this->env, lang("used"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "current_disk_quota"], "method", false, false, false, 38), "html", null, true);
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "max_disk_quota"], "method", false, false, false, 38)) {
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "max_disk_quota"], "method", false, false, false, 38), "html", null, true);
        }
        echo "</a>
                        ";
        // line 39
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "percent_disk_quota"], "method", false, false, false, 39))) {
            // line 40
            echo "                            <a class=\"dropdown-item disabled\" href=\"javascript:void(0)\">
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: ";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "percent_disk_quota"], "method", false, false, false, 42), "html", null, true);
            echo "%\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "percent_disk_quota"], "method", false, false, false, 42), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "percent_disk_quota"], "method", false, false, false, 42), "html", null, true);
            echo "%</div>
                                </div>
                            </a>
                        ";
        }
        // line 46
        echo "                        
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"";
        // line 48
        echo twig_escape_filter($this->env, route("switchView"), "html", null, true);
        echo "\"><i class=\"fas fa-fw fa-sync\"></i> ";
        echo twig_escape_filter($this->env, lang("switch_to"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (((((null === twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "gallery_view"], "method", false, false, false, 48)) && twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "admin"], "method", false, false, false, 48)) || twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "gallery_view"], "method", false, false, false, 48))) ? (lang("gallery")) : (lang("table"))), "html", null, true);
        echo "</a>
                        
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"";
        // line 51
        echo twig_escape_filter($this->env, route("profile"), "html", null, true);
        echo "\"><i class=\"fas fa-fw fa-user\"></i> ";
        echo twig_escape_filter($this->env, lang("profile"), "html", null, true);
        echo "</a>
                        <a class=\"dropdown-item\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, route("logout"), "html", null, true);
        echo "\"><i class=\"fas fa-fw fa-sign-out-alt\"></i> ";
        echo twig_escape_filter($this->env, lang("logout"), "html", null, true);
        echo "</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "comp/navbar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 52,  162 => 51,  152 => 48,  148 => 46,  137 => 42,  133 => 40,  131 => 39,  121 => 38,  115 => 35,  109 => 31,  102 => 27,  96 => 26,  89 => 22,  83 => 21,  80 => 20,  78 => 19,  72 => 16,  66 => 15,  59 => 11,  53 => 10,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "comp/navbar.twig", "/home/u339165095/domains/irnell.com/public_html/resources/templates/comp/navbar.twig");
    }
}
