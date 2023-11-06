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

/* dashboard/grid.twig */
class __TwigTemplate_5ae9deed31354c3348df9b407e81ac61ef4c26d8e5e481713196a21a4cad495c extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.twig", "dashboard/grid.twig", 1);
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
        $this->loadTemplate("comp/navbar.twig", "dashboard/grid.twig", 6)->display($context);
        // line 7
        echo "    <div class=\"container\">
        ";
        // line 8
        $this->loadTemplate("comp/alert.twig", "dashboard/grid.twig", 8)->display($context);
        // line 9
        echo "        ";
        $this->loadTemplate("dashboard/pager_header.twig", "dashboard/grid.twig", 9)->display(twig_array_merge($context, ["path" => "home"]));
        // line 10
        echo "        ";
        if ((twig_length_filter($this->env, ($context["medias"] ?? null)) > 0)) {
            // line 11
            echo "            <div class=\"row\">
                ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["medias"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
                // line 13
                echo "                    <div class=\"col-md-4 bulk-selector\" id=\"media_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "id", [], "any", false, false, false, 13), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "id", [], "any", false, false, false, 13), "html", null, true);
                echo "\">
                        <div class=\"card mb-4 shadow-sm\">
                            <div class=\"card-body image-card p-0\">
                                <div class=\"overlay\">
                                    <div class=\"overlay-rows\">
                                        <div class=\"overlay-rows-top\">
                                            <div class=\"pl-3 pt-2d5\"><span class=\"badge badge-dark shadow-lg\">";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "size", [], "any", false, false, false, 19), "html", null, true);
                echo "</span></div>
                                            <div class=\"text-right pr-3 pt-2d5\">
                                                <div class=\"btn-group shadow-lg\">
                                                    <button type=\"button\" class=\"btn btn-sm btn-success btn-clipboard\" data-toggle=\"tooltip\" title=\"";
                // line 22
                echo twig_escape_filter($this->env, lang("copy_link"), "html", null, true);
                echo "\" data-clipboard-text=\"";
                echo twig_escape_filter($this->env, urlFor((glue(twig_get_attribute($this->env, $this->source, $context["media"], "user_code", [], "any", false, false, false, 22), twig_get_attribute($this->env, $this->source, $context["media"], "code", [], "any", false, false, false, 22)) . ((($context["copy_raw"] ?? null)) ? (("/raw." . twig_get_attribute($this->env, $this->source, $context["media"], "extension", [], "any", false, false, false, 22))) : (("." . twig_get_attribute($this->env, $this->source, $context["media"], "extension", [], "any", false, false, false, 22)))))), "html", null, true);
                echo "\">
                                                        <i class=\"fas fa-link\"></i>
                                                    </button>
                                                    <a href=\"";
                // line 25
                echo twig_escape_filter($this->env, urlFor((((((("/" . twig_get_attribute($this->env, $this->source, $context["media"], "user_code", [], "any", false, false, false, 25)) . "/") . twig_get_attribute($this->env, $this->source, $context["media"], "code", [], "any", false, false, false, 25)) . ".") . twig_get_attribute($this->env, $this->source, $context["media"], "extension", [], "any", false, false, false, 25)) . "/download")), "html", null, true);
                echo "\" class=\"btn btn-sm btn-secondary\" data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, lang("download"), "html", null, true);
                echo "\"><i class=\"fas fa-cloud-download-alt\"></i></a>
                                                    ";
                // line 26
                if (twig_get_attribute($this->env, $this->source, $context["media"], "published", [], "any", false, false, false, 26)) {
                    // line 27
                    echo "                                                        <a class=\"btn btn-sm btn-warning publish-toggle\" data-toggle=\"tooltip\" title=\"";
                    echo twig_escape_filter($this->env, lang("hide"), "html", null, true);
                    echo "\" data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "id", [], "any", false, false, false, 27), "html", null, true);
                    echo "\" data-published=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "published", [], "any", false, false, false, 27), "html", null, true);
                    echo "\"><i class=\"fas fa-times-circle\"></i></a>
                                                    ";
                } else {
                    // line 29
                    echo "                                                        <a class=\"btn btn-sm btn-info publish-toggle\" data-toggle=\"tooltip\" title=\"";
                    echo twig_escape_filter($this->env, lang("publish"), "html", null, true);
                    echo "\" data-id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "id", [], "any", false, false, false, 29), "html", null, true);
                    echo "\" data-published=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "published", [], "any", false, false, false, 29), "html", null, true);
                    echo "\"><i class=\"fas fa-check-circle\"></i></a>
                                                    ";
                }
                // line 31
                echo "                                                    <button type=\"button\" class=\"btn btn-sm btn-danger media-delete\" data-link=\"";
                echo twig_escape_filter($this->env, route("upload.delete", ["id" => twig_get_attribute($this->env, $this->source, $context["media"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "id", [], "any", false, false, false, 31), "html", null, true);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, lang("delete"), "html", null, true);
                echo "\">
                                                        <i class=\"fas fa-trash\"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <a class=\"btn btn-link btn-block text-light overlay-rows-center\" href=\"";
                // line 37
                echo twig_escape_filter($this->env, urlFor(((((("/" . twig_get_attribute($this->env, $this->source, $context["media"], "user_code", [], "any", false, false, false, 37)) . "/") . twig_get_attribute($this->env, $this->source, $context["media"], "code", [], "any", false, false, false, 37)) . ".") . twig_get_attribute($this->env, $this->source, $context["media"], "extension", [], "any", false, false, false, 37))), "html", null, true);
                echo "\" target=\"_blank\">
                                            <div>
                                                <i class=\"fas fa-external-link-alt fa-2x text-shadow-link\"></i>
                                            </div>
                                        </a>
                                        <div class=\"overlay-rows-bottom pl-3 pr-3 pb-1\">
                                            ";
                // line 43
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["media"], "tags", [], "any", false, false, false, 43));
                foreach ($context['_seq'] as $context["tag_id"] => $context["tag_name"]) {
                    // line 44
                    echo "                                                <a href=\"";
                    echo twig_escape_filter($this->env, queryParams(["tag" => $context["tag_id"]]), "html", null, true);
                    echo "\" class=\"badge badge-pill badge-light shadow-sm tag-item mr-1\" data-id=\"";
                    echo twig_escape_filter($this->env, $context["tag_id"], "html", null, true);
                    echo "\" data-media=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "id", [], "any", false, false, false, 44), "html", null, true);
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
                // line 46
                echo "                                            <a href=\"javascript:void(0);\" class=\"badge badge-pill badge-success shadow-sm tag-add mr-1\" data-id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "id", [], "any", false, false, false, 46), "html", null, true);
                echo "\"><i class=\"fas fa-plus fa-sm fa-fw\"></i></a>
                                        </div>
                                    </div>
                                </div>
                                ";
                // line 50
                if (isDisplayableImage(twig_get_attribute($this->env, $this->source, $context["media"], "mimetype", [], "any", false, false, false, 50))) {
                    // line 51
                    echo "                                    <div class=\"content-image\" style=\"background-image: url(";
                    echo twig_escape_filter($this->env, urlFor((((((("/" . twig_get_attribute($this->env, $this->source, $context["media"], "user_code", [], "any", false, false, false, 51)) . "/") . twig_get_attribute($this->env, $this->source, $context["media"], "code", [], "any", false, false, false, 51)) . ".") . twig_get_attribute($this->env, $this->source, $context["media"], "extension", [], "any", false, false, false, 51)) . "/raw?height=267")), "html", null, true);
                    echo ");\"></div>
                                ";
                } else {
                    // line 53
                    echo "                                    <div class=\"text-center\" style=\"font-size: 178px;\"><i class=\"far ";
                    echo twig_escape_filter($this->env, mime2font(twig_get_attribute($this->env, $this->source, $context["media"], "mimetype", [], "any", false, false, false, 53)), "html", null, true);
                    echo " mb-4 mt-4\"></i></div>
                                ";
                }
                // line 55
                echo "                            </div>
                            <div class=\"card-footer d-flex justify-content-between\">
                                <span class=\"user-title\" title=\"";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "filename", [], "any", false, false, false, 57), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "filename", [], "any", false, false, false, 57), "html", null, true);
                echo "</span>
                                <small>";
                // line 58
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["media"], "timestamp", [], "any", false, false, false, 58), "d/m/Y H:i"), "html", null, true);
                echo "</small>
                            </div>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "            </div>
            <div class=\"d-flex justify-content-center\">
                ";
            // line 65
            $this->loadTemplate("comp/pager.twig", "dashboard/grid.twig", 65)->display(twig_array_merge($context, ["path" => "home"]));
            // line 66
            echo "            </div>
        ";
        } else {
            // line 68
            echo "            <div class=\"text-center text-muted\"><i>";
            echo twig_escape_filter($this->env, lang("no_media"), "html", null, true);
            echo "</i></div>
        ";
        }
        // line 70
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "dashboard/grid.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 70,  230 => 68,  226 => 66,  224 => 65,  220 => 63,  209 => 58,  203 => 57,  199 => 55,  193 => 53,  187 => 51,  185 => 50,  177 => 46,  160 => 44,  156 => 43,  147 => 37,  133 => 31,  123 => 29,  113 => 27,  111 => 26,  105 => 25,  97 => 22,  91 => 19,  79 => 13,  75 => 12,  72 => 11,  69 => 10,  66 => 9,  64 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard/grid.twig", "/home/u339165095/domains/irnell.com/public_html/resources/templates/dashboard/grid.twig");
    }
}
