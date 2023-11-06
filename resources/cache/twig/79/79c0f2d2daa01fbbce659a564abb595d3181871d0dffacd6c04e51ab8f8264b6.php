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

/* dashboard/pager_header.twig */
class __TwigTemplate_f0b09dad5088850cf48341cc483540cf46da26aff6272be86a8de3193fed5986 extends \Twig\Template
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
        echo "<div class=\"row\">
    <div class=\"col-md-4 mb-3 d-flex justify-content-between justify-content-md-start\">
        <form method=\"get\" action=\"";
        // line 3
        echo twig_escape_filter($this->env, route("home"), "html", null, true);
        echo "\" class=\"mr-1\">
            <div class=\"input-group\">
                <input type=\"text\" name=\"search\" class=\"form-control\" placeholder=\"";
        // line 5
        echo twig_escape_filter($this->env, lang("dotted_search"), "html", null, true);
        echo "\" aria-label=\"";
        echo twig_escape_filter($this->env, lang("dotted_search"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, param(($context["request"] ?? null), "search", ""), "html", null, true);
        echo "\">
                <div class=\"input-group-append\">
                    <button type=\"submit\" class=\"btn btn-outline-secondary\"><i class=\"fas fa-search\"></i></button>
                </div>
            </div>
        </form>
        <div class=\"dropdown\">
            <button class=\"btn btn-outline-dark dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\">
                <i class=\"fas fa-tags\"></i>
            </button>
            <div class=\"dropdown-menu\" id=\"dropdown-tag-list\" style=\"max-height: 250px; overflow: auto\">
                ";
        // line 16
        if (twig_test_empty(($context["tags"] ?? null))) {
            // line 17
            echo "                    <h6 class=\"dropdown-header\">";
            echo twig_escape_filter($this->env, lang("no_tags"), "html", null, true);
            echo "</h6>
                ";
        } else {
            // line 19
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["tags"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 20
                echo "                        <a class=\"dropdown-item ";
                echo ((((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "queryParams", [], "any", false, false, false, 20)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["tag"] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 20))) ? ("active") : (""));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, queryParams(["tag" => twig_get_attribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 20)]), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "id", [], "any", false, false, false, 20), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tag"], "name", [], "any", false, false, false, 20), "html", null, true);
                echo "</a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "                ";
        }
        // line 23
        echo "            </div>
        </div>
    </div>
    <div class=\"col-md-4 d-flex justify-content-center\">
        ";
        // line 27
        $this->loadTemplate("comp/pager.twig", "dashboard/pager_header.twig", 27)->display($context);
        // line 28
        echo "    </div>
    <div class=\"col-md-4 mb-3 d-flex justify-content-md-end justify-content-between\">
        <div class=\"btn-group mr-1\">
            <div class=\"btn-group\">
                <button class=\"btn btn-outline-primary dropdown-toggle\" type=\"button\" id=\"dropdownOrder\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    ";
        // line 33
        echo twig_escape_filter($this->env, lang("order_by"), "html", null, true);
        echo "
                </button>
                <div class=\"dropdown-menu shadow-sm\" aria-labelledby=\"dropdownMenuButton\">
                    <a class=\"dropdown-item\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, queryParams(["sort" => "time"]), "html", null, true);
        echo "\"><i class=\"fas fa-calendar-alt fa-fw\"></i> ";
        echo twig_escape_filter($this->env, lang("time"), "html", null, true);
        echo "</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, queryParams(["sort" => "name"]), "html", null, true);
        echo "\"><i class=\"fas fa-font fa-fw\"></i> ";
        echo twig_escape_filter($this->env, lang("name"), "html", null, true);
        echo "</a>
                    <a class=\"dropdown-item\" href=\"";
        // line 38
        echo twig_escape_filter($this->env, queryParams(["sort" => "size"]), "html", null, true);
        echo "\"><i class=\"fas fa-weight-hanging fa-fw\"></i> ";
        echo twig_escape_filter($this->env, lang("size"), "html", null, true);
        echo "</a>
                </div>
            </div>
            <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, queryParams(["order" => ((((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "queryParams", [], "any", false, false, false, 41)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["order"] ?? null) : null) === "ASC")) ? ("DESC") : ("ASC"))]), "html", null, true);
        echo "\" class=\"btn btn-outline-info\">
                <i class=\"fas ";
        // line 42
        echo ((((($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["request"] ?? null), "queryParams", [], "any", false, false, false, 42)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["order"] ?? null) : null) === "ASC")) ? ("fa-sort-amount-up") : ("fa-sort-amount-down"));
        echo "\"></i>
            </a>
        </div>
        <a href=\"javascript:void(0)\" id=\"bulk-delete\" class=\"btn btn-outline-danger disabled\" data-toggle=\"tooltip\" title=\"";
        // line 45
        echo twig_escape_filter($this->env, lang("delete_selected"), "html", null, true);
        echo "\"><i class=\"fas fa-trash\"></i></a>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "dashboard/pager_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 45,  140 => 42,  136 => 41,  128 => 38,  122 => 37,  116 => 36,  110 => 33,  103 => 28,  101 => 27,  95 => 23,  92 => 22,  77 => 20,  72 => 19,  66 => 17,  64 => 16,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard/pager_header.twig", "/home/u339165095/domains/irnell.com/public_html/resources/templates/dashboard/pager_header.twig");
    }
}
