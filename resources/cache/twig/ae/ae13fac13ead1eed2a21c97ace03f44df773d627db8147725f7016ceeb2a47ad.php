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

/* dashboard/list.twig */
class __TwigTemplate_527a261dfc96a53e7a6753f82cce830dba75ca2f2e48da73e8076f3c312d4f4a extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.twig", "dashboard/list.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, lang("home"), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->loadTemplate("comp/navbar.twig", "dashboard/list.twig", 6)->display($context);
        // line 7
        echo "    <div class=\"container\">
        ";
        // line 8
        $this->loadTemplate("comp/alert.twig", "dashboard/list.twig", 8)->display($context);
        // line 9
        echo "
        <div class=\"card shadow-sm\">
            <div class=\"card-body\">
                ";
        // line 12
        $this->loadTemplate("dashboard/pager_header.twig", "dashboard/list.twig", 12)->display(twig_array_merge($context, ["path" => "home"]));
        // line 13
        echo "                ";
        if ((twig_length_filter($this->env, ($context["medias"] ?? null)) > 0)) {
            // line 14
            echo "                    <div class=\"row\">
                        <div class=\"col-md-12\">
                            <div class=\"table-responsive\">
                                <table class=\"table table-hover\">
                                    <thead>
                                    <tr>
                                        <th>";
            // line 20
            echo twig_escape_filter($this->env, lang("preview"), "html", null, true);
            echo "</th>
                                        <th>";
            // line 21
            echo twig_escape_filter($this->env, lang("filename"), "html", null, true);
            echo "</th>
                                        <th>";
            // line 22
            echo twig_escape_filter($this->env, lang("size"), "html", null, true);
            echo "</th>
                                        <th>";
            // line 23
            echo twig_escape_filter($this->env, lang("public"), "html", null, true);
            echo "</th>
                                        ";
            // line 24
            if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "admin"], "method", false, false, false, 24)) {
                // line 25
                echo "\t\t\t\t\t\t\t\t\t\t\t<th>";
                echo twig_escape_filter($this->env, lang("owner"), "html", null, true);
                echo "</th>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 27
            echo "                                        <th>";
            echo twig_escape_filter($this->env, lang("date"), "html", null, true);
            echo "</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["medias"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                // line 33
                echo "                                        <tr id=\"media_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "id", [], "any", false, false, false, 33), "html", null, true);
                echo "\" class=\"bulk-selector\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "id", [], "any", false, false, false, 33), "html", null, true);
                echo "\">
                                            <td class=\"text-center\">
                                                ";
                // line 35
                if (isDisplayableImage(twig_get_attribute($this->env, $this->source, $context["media"], "mimetype", [], "any", false, false, false, 35))) {
                    // line 36
                    echo "                                                    ";
                    if ( !(null === twig_get_attribute($this->env, $this->source, $context["media"], "username", [], "any", false, false, false, 36))) {
                        // line 37
                        echo "                                                        <img src=\"";
                        echo twig_escape_filter($this->env, urlFor((((((("/" . twig_get_attribute($this->env, $this->source, $context["media"], "user_code", [], "any", false, false, false, 37)) . "/") . twig_get_attribute($this->env, $this->source, $context["media"], "code", [], "any", false, false, false, 37)) . ".") . twig_get_attribute($this->env, $this->source, $context["media"], "extension", [], "any", false, false, false, 37)) . "/raw?width=84&height=42")), "html", null, true);
                        echo "\" class=\"img-fluid rounded\">
                                                    ";
                    } else {
                        // line 39
                        echo "                                                        <img src=\"";
                        echo twig_escape_filter($this->env, route("upload.raw", ["id" => twig_get_attribute($this->env, $this->source, $context["media"], "id", [], "any", false, false, false, 39)]), "html", null, true);
                        echo "\" class=\"img-fluid rounded\">
                                                    ";
                    }
                    // line 41
                    echo "                                                ";
                } else {
                    // line 42
                    echo "                                                    <i class=\"far ";
                    echo twig_escape_filter($this->env, mime2font(twig_get_attribute($this->env, $this->source, $context["media"], "mimetype", [], "any", false, false, false, 42)), "html", null, true);
                    echo " fa-2x\"></i>
                                                ";
                }
                // line 44
                echo "                                            </td>
                                            <td>
                                                <span class=\"text-maxlen\">";
                // line 46
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "filename", [], "any", false, false, false, 46), "html", null, true);
                echo "</span>
                                                <p>
                                                    ";
                // line 48
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["media"], "tags", [], "any", false, false, false, 48));
                foreach ($context['_seq'] as $context["tag_id"] => $context["tag_name"]) {
                    // line 49
                    echo "                                                        <a href=\"";
                    echo twig_escape_filter($this->env, queryParams(["tag" => $context["tag_id"]]), "html", null, true);
                    echo "\" class=\"badge badge-pill badge-light shadow-sm tag-item mr-1\" data-id=\"";
                    echo twig_escape_filter($this->env, $context["tag_id"], "html", null, true);
                    echo "\" data-media=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "id", [], "any", false, false, false, 49), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $context["tag_name"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["tag_name"], "html", null, true);
                    echo "</a>
                                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['tag_id'], $context['tag_name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "                                                    <a href=\"javascript:void(0)\" class=\"badge badge-pill badge-success shadow-sm tag-add\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "id", [], "any", false, false, false, 51), "html", null, true);
                echo "\"><i class=\"fas fa-plus fa-sm fa-fw\"></i></a>
                                                </p>
                                            </td>
                                            <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "size", [], "any", false, false, false, 54), "html", null, true);
                echo "</td>
                                            <td id=\"published_";
                // line 55
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "id", [], "any", false, false, false, 55), "html", null, true);
                echo "\" class=\"text-center\">
                                                ";
                // line 56
                if (twig_get_attribute($this->env, $this->source, $context["media"], "published", [], "any", false, false, false, 56)) {
                    // line 57
                    echo "                                                    <span class=\"badge badge-success\"><i class=\"fas fa-check\"></i></span>
                                                ";
                } else {
                    // line 59
                    echo "                                                    <span class=\"badge badge-danger\"><i class=\"fas fa-times\"></i></span>
                                                ";
                }
                // line 61
                echo "                                            </td>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 62
                if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "admin"], "method", false, false, false, 62)) {
                    // line 63
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t<td>";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["media"], "username", [], "any", true, true, false, 63)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["media"], "username", [], "any", false, false, false, 63), "<None>")) : ("<None>")), "html", null, true);
                    echo "</td>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 65
                echo "                                            <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "timestamp", [], "any", false, false, false, 65), "d/m/Y H:i:s"), "html", null, true);
                echo "</td>
                                            <td class=\"text-right\">
                                                <div class=\"btn-group\">
                                                    ";
                // line 68
                if ( !(null === twig_get_attribute($this->env, $this->source, $context["media"], "username", [], "any", false, false, false, 68))) {
                    // line 69
                    echo "                                                        <a href=\"";
                    echo twig_escape_filter($this->env, urlFor(((((("/" . twig_get_attribute($this->env, $this->source, $context["media"], "user_code", [], "any", false, false, false, 69)) . "/") . twig_get_attribute($this->env, $this->source, $context["media"], "code", [], "any", false, false, false, 69)) . ".") . twig_get_attribute($this->env, $this->source, $context["media"], "extension", [], "any", false, false, false, 69))), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-outline-secondary\" data-toggle=\"tooltip\" title=\"";
                    echo twig_escape_filter($this->env, lang("open"), "html", null, true);
                    echo "\" target=\"_blank\"><i class=\"fas fa-external-link-alt\"></i></a>
                                                        <a href=\"";
                    // line 70
                    echo twig_escape_filter($this->env, urlFor((((((("/" . twig_get_attribute($this->env, $this->source, $context["media"], "user_code", [], "any", false, false, false, 70)) . "/") . twig_get_attribute($this->env, $this->source, $context["media"], "code", [], "any", false, false, false, 70)) . ".") . twig_get_attribute($this->env, $this->source, $context["media"], "extension", [], "any", false, false, false, 70)) . "/download")), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-outline-primary\" data-toggle=\"tooltip\" title=\"";
                    echo twig_escape_filter($this->env, lang("download"), "html", null, true);
                    echo "\"><i class=\"fas fa-cloud-download-alt\"></i></a>
                                                        <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-outline-success btn-clipboard\" data-toggle=\"tooltip\" title=\"";
                    // line 71
                    echo twig_escape_filter($this->env, lang("copy_link"), "html", null, true);
                    echo "\" data-clipboard-text=\"";
                    echo twig_escape_filter($this->env, urlFor((glue(twig_get_attribute($this->env, $this->source, $context["media"], "user_code", [], "any", false, false, false, 71), twig_get_attribute($this->env, $this->source, $context["media"], "code", [], "any", false, false, false, 71)) . ((($context["copy_raw"] ?? null)) ? (("/raw." . twig_get_attribute($this->env, $this->source, $context["media"], "extension", [], "any", false, false, false, 71))) : (("." . twig_get_attribute($this->env, $this->source, $context["media"], "extension", [], "any", false, false, false, 71)))))), "html", null, true);
                    echo "\"><i class=\"fas fa-link\"></i></a>
                                                    ";
                } else {
                    // line 73
                    echo "                                                        <a href=\"";
                    echo twig_escape_filter($this->env, route("upload.raw", ["id" => twig_get_attribute($this->env, $this->source, $context["media"], "id", [], "any", false, false, false, 73)]), "html", null, true);
                    echo "\" class=\"btn btn-sm btn-outline-dark\" data-toggle=\"tooltip\" title=\"";
                    echo twig_escape_filter($this->env, lang("raw"), "html", null, true);
                    echo "\" target=\"_blank\"><i class=\"fas fa-external-link-alt\"></i></a>
                                                    ";
                }
                // line 75
                echo "                                                    ";
                if (twig_get_attribute($this->env, $this->source, $context["media"], "published", [], "any", false, false, false, 75)) {
                    // line 76
                    echo "                                                        <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-outline-warning publish-toggle\" data-toggle=\"tooltip\" title=\"";
                    echo twig_escape_filter($this->env, lang("hide"), "html", null, true);
                    echo "\" data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "id", [], "any", false, false, false, 76), "html", null, true);
                    echo "\" data-published=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "published", [], "any", false, false, false, 76), "html", null, true);
                    echo "\"><i class=\"fas fa-times-circle\"></i></a>
                                                    ";
                } else {
                    // line 78
                    echo "                                                        <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-outline-info publish-toggle\" data-toggle=\"tooltip\" title=\"";
                    echo twig_escape_filter($this->env, lang("publish"), "html", null, true);
                    echo "\" data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "id", [], "any", false, false, false, 78), "html", null, true);
                    echo "\" data-published=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "published", [], "any", false, false, false, 78), "html", null, true);
                    echo "\"><i class=\"fas fa-check-circle\"></i></a>
                                                    ";
                }
                // line 80
                echo "                                                    <a href=\"javascript:void(0)\" class=\"btn btn-sm btn-outline-danger media-delete\" data-link=\"";
                echo twig_escape_filter($this->env, route("upload.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["media"], "id", [], "any", false, false, false, 80)]), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "id", [], "any", false, false, false, 80), "html", null, true);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, lang("delete"), "html", null, true);
                echo "\"><i class=\"fas fa-trash\"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "                                    </tbody>
                                </table>
                            </div>
                            <div class=\"d-flex justify-content-center\">
                                ";
            // line 89
            $this->loadTemplate("comp/pager.twig", "dashboard/list.twig", 89)->display(twig_array_merge($context, ["path" => "home"]));
            // line 90
            echo "                            </div>
                        </div>
                    </div>
                ";
        } else {
            // line 94
            echo "                    <div class=\"text-center text-muted\"><i>";
            echo twig_escape_filter($this->env, lang("no_media"), "html", null, true);
            echo "</i></div>
                ";
        }
        // line 96
        echo "            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "dashboard/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 96,  311 => 94,  305 => 90,  303 => 89,  297 => 85,  281 => 80,  271 => 78,  261 => 76,  258 => 75,  250 => 73,  243 => 71,  237 => 70,  230 => 69,  228 => 68,  221 => 65,  215 => 63,  213 => 62,  210 => 61,  206 => 59,  202 => 57,  200 => 56,  196 => 55,  192 => 54,  185 => 51,  168 => 49,  164 => 48,  159 => 46,  155 => 44,  149 => 42,  146 => 41,  140 => 39,  134 => 37,  131 => 36,  129 => 35,  121 => 33,  117 => 32,  108 => 27,  102 => 25,  100 => 24,  96 => 23,  92 => 22,  88 => 21,  84 => 20,  76 => 14,  73 => 13,  71 => 12,  66 => 9,  64 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard/list.twig", "/home/u339165095/domains/irnell.com/public_html/resources/templates/dashboard/list.twig");
    }
}
