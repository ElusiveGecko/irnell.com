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

/* upload/public.twig */
class __TwigTemplate_26e758ac3ae1f846c51117912d0693b5a2f5b2f151157db5608255667d8c8695 extends \Twig\Template
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
            'meta' => [$this, 'block_meta'],
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
        $this->parent = $this->loadTemplate("base.twig", "upload/public.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "filename", [], "any", false, false, false, 3), "html", null, true);
    }

    // line 5
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        if ((($context["type"] ?? null) == "image")) {
            // line 7
            echo "        <link rel=\"preload\" href=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "/raw\" as=\"";
            echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
            echo "\">
    ";
        }
    }

    // line 11
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 12
        echo "    <meta name=\"twitter:card\" content=\"summary_large_image\">
    <meta property=\"og:type\" content=\"website\"/>
    <meta id=\"embed-title\" property=\"og:title\" content=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "filename", [], "any", false, false, false, 14), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "size", [], "any", false, false, false, 14), "html", null, true);
        echo ")\">
    <meta id=\"embed-desc\" property=\"og:description\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, lang("date"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "timestamp", [], "any", false, false, false, 15), "html", null, true);
        echo "\">
    ";
        // line 16
        if ((($context["type"] ?? null) == "image")) {
            // line 17
            echo "        <meta id=\"embed-image\" property=\"og:image\" content=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "/raw\">
        <meta id=\"discord\" name=\"twitter:image\" content=\"";
            // line 18
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "/raw\">
        <meta id=\"image-src\" name=\"twitter:image:src\" content=\"";
            // line 19
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "/raw\">
    ";
        } elseif ((        // line 20
($context["type"] ?? null) == "video")) {
            // line 21
            echo "        <meta name=\"twitter:card\" content=\"player\" />
        <meta name=\"twitter:title\" content=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "filename", [], "any", false, false, false, 22), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "size", [], "any", false, false, false, 22), "html", null, true);
            echo ")\" />
        <meta name=\"twitter:image\" content=\"0\" />
        <meta name=\"twitter:player:stream\" content=\"";
            // line 24
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "/raw\" />
        <meta name=\"twitter:player:width\" content=\"720\" />
        <meta name=\"twitter:player:height\" content=\"480\" />
        <meta name=\"twitter:player:stream:content_type\" content=\"";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "mimetype", [], "any", false, false, false, 27), "html", null, true);
            echo "\" />

        <meta property=\"og:url\" content=\"";
            // line 29
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "/raw\" />
        <meta property=\"og:video\" content=\"";
            // line 30
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "/raw\" />
        <meta property=\"og:video:secure_url\" content=\"";
            // line 31
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "/raw\" />
        <meta property=\"og:video:type\" content=\"";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "mimetype", [], "any", false, false, false, 32), "html", null, true);
            echo "\" />
        <meta property=\"og:video:width\" content=\"720\" />
        <meta property=\"og:video:height\" content=\"480\" />
        <meta property=\"og:image\" content=\"0\" />
    ";
        }
    }

    // line 39
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "    <nav class=\"navbar navbar-dark bg-primary navbar-expand-md mb-4\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"";
        // line 42
        echo twig_escape_filter($this->env, route("root"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "app_name", [], "any", false, false, false, 42), "html", null, true);
        echo "</a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarCollapse\" aria-controls=\"navbarCollapse\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                <span class=\"navbar-toggler-icon\"></span>
            </button>
            <div class=\"collapse navbar-collapse\" id=\"navbarCollapse\">
                <div class=\"ml-auto\">
                    <a href=\"javascript:void(0)\" class=\"btn btn-success my-2 my-sm-0 btn-clipboard\" data-toggle=\"tooltip\" title=\"";
        // line 48
        echo twig_escape_filter($this->env, lang("copy_link"), "html", null, true);
        echo "\" data-clipboard-text=\"";
        echo twig_escape_filter($this->env, urlFor((glue(twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "user_code", [], "any", false, false, false, 48), twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "code", [], "any", false, false, false, 48)) . ((($context["copy_raw"] ?? null)) ? (("/raw." . twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "extension", [], "any", false, false, false, 48))) : (("." . twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "extension", [], "any", false, false, false, 48)))))), "html", null, true);
        echo "\"><i class=\"fas fa-link fa-lg fa-fw\"></i></a>
                    <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "/raw\" class=\"btn btn-secondary my-2 my-sm-0\" data-toggle=\"tooltip\" title=\"";
        echo twig_escape_filter($this->env, lang("raw"), "html", null, true);
        echo "\"><i class=\"fas fa-file-alt fa-lg fa-fw\"></i></a>
                    <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "/download\" class=\"btn btn-warning my-2 my-sm-0\" data-toggle=\"tooltip\" title=\"";
        echo twig_escape_filter($this->env, lang("download"), "html", null, true);
        echo "\"><i class=\"fas fa-cloud-download-alt fa-lg fa-fw\"></i></a>
                    ";
        // line 51
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "logged"], "method", false, false, false, 51)) {
            // line 52
            echo "                        <a href=\"javascript:void(0)\" class=\"btn btn-danger my-2 my-sm-0 public-delete\" data-link=\"";
            echo twig_escape_filter($this->env, route("upload.delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "mediaId", [], "any", false, false, false, 52)]), "html", null, true);
            echo "\" data-toggle=\"tooltip\" title=\"";
            echo twig_escape_filter($this->env, lang("delete"), "html", null, true);
            echo "\"><i class=\"fas fa-trash fa-lg fa-fw\"></i></a>
                    ";
        }
        // line 54
        echo "                </div>
            </div>
        </div>
    </nav>
    <div class=\"container-fluid\">
        ";
        // line 59
        $this->loadTemplate("comp/alert.twig", "upload/public.twig", 59)->display($context);
        // line 60
        echo "        <div class=\"row\">
            <div class=\"col-md-12 justify-content-center\">
                ";
        // line 62
        if ( !(null === ($context["delete_token"] ?? null))) {
            // line 63
            echo "                    <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "/delete/";
            echo twig_escape_filter($this->env, ($context["delete_token"] ?? null), "html", null, true);
            echo "\">
                        <div class=\"text-center mb-4\">
                            <p>";
            // line 65
            echo twig_escape_filter($this->env, lang("public.delete_text"), "html", null, true);
            echo "</p>
                            <div class=\"btn-group\">
                                <button type=\"submit\" class=\"btn btn-danger\"><i class=\"fas fa-trash\"></i> ";
            // line 67
            echo twig_escape_filter($this->env, lang("yes"), "html", null, true);
            echo "</button>
                                <a href=\"";
            // line 68
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-secondary\">";
            echo twig_escape_filter($this->env, lang("no"), "html", null, true);
            echo "</a>
                            </div>
                        </div>
                    </form>
                ";
        }
        // line 73
        echo "                ";
        $context["typeMatched"] = false;
        // line 74
        echo "                ";
        if ((($context["type"] ?? null) === "image")) {
            // line 75
            echo "                    ";
            $context["typeMatched"] = true;
            // line 76
            echo "                    <div class=\"row mb-2\">
                        <div class=\"col-md-12\">
                            <img src=\"";
            // line 78
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "/raw\" class=\"img-thumbnail rounded mx-auto d-block\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "filename", [], "any", false, false, false, 78), "html", null, true);
            echo "\">
                        </div>
                    </div>
                ";
        } elseif ((        // line 81
($context["type"] ?? null) === "text")) {
            // line 82
            echo "                    ";
            $context["typeMatched"] = true;
            // line 83
            echo "                    <div class=\"row mb-2\">
                        <div class=\"col-md-12\">
                            <pre><code>";
            // line 85
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "text", [], "any", false, false, false, 85), "html", null, true);
            echo "</code></pre>
                        </div>
                    </div>
                ";
        } elseif ((        // line 88
($context["type"] ?? null) === "audio")) {
            // line 89
            echo "                    ";
            $context["typeMatched"] = true;
            // line 90
            echo "                    <div class=\"media-player media-audio\">
                        <audio id=\"player\" autoplay controls loop preload=\"auto\">
                            <source src=\"";
            // line 92
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "/raw\" type=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "mimetype", [], "any", false, false, false, 92), "html", null, true);
            echo "\">
                            Your browser does not support HTML5 audio.
                            <a href=\"";
            // line 94
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "/download\" class=\"btn btn-dark btn-lg\"><i class=\"fas fa-cloud-download-alt fa-fw\"></i> Download</a>
                        </audio>
                    </div>
                ";
        } elseif ((        // line 97
($context["type"] ?? null) === "video")) {
            // line 98
            echo "                    ";
            $context["typeMatched"] = true;
            // line 99
            echo "                    <div class=\"media-player\">
                        <video id=\"player\" autoplay controls loop preload=\"auto\">
                            <source src=\"";
            // line 101
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "/raw\" type=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "mimetype", [], "any", false, false, false, 101), "html", null, true);
            echo "\">
                            Your browser does not support HTML5 video.
                            <a href=\"";
            // line 103
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "/download\" class=\"btn btn-dark btn-lg\"><i class=\"fas fa-cloud-download-alt fa-fw\"></i> Download</a>
                        </video>
                    </div>
                ";
        } elseif ((twig_get_attribute($this->env, $this->source,         // line 106
($context["media"] ?? null), "mimetype", [], "any", false, false, false, 106) === "application/pdf")) {
            // line 107
            echo "                    ";
            $context["typeMatched"] = true;
            // line 108
            echo "                    <object type=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "mimetype", [], "any", false, false, false, 108), "html", null, true);
            echo "\" data=\"";
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "/raw\" class=\"pdf-viewer\">
                        Your browser does not support PDF previews.
                        <a href=\"";
            // line 110
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "/download\" class=\"btn btn-dark btn-lg\"><i class=\"fas fa-cloud-download-alt fa-fw\"></i> Download</a>
                    </object>
                ";
        }
        // line 113
        echo "                ";
        if ( !($context["typeMatched"] ?? null)) {
            // line 114
            echo "                    <div class=\"text-center\">
                        <div class=\"row mb-3\">
                            <div class=\"col-md-12\">
                                <i class=\"far ";
            // line 117
            echo twig_escape_filter($this->env, mime2font(twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "mimetype", [], "any", false, false, false, 117)), "html", null, true);
            echo " fa-10x\"></i>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                <b>";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "filename", [], "any", false, false, false, 122), "html", null, true);
            echo "</b>
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-md-12\">
                                ";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "size", [], "any", false, false, false, 127), "html", null, true);
            echo "
                            </div>
                        </div>
                        ";
            // line 130
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "tags", [], "any", false, false, false, 130))) {
                // line 131
                echo "                            <div class=\"row mt-1 mb-2\">
                                <div class=\"col-md-12 text-center\">
                                    ";
                // line 133
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "tags", [], "any", false, false, false, 133));
                foreach ($context['_seq'] as $context["tag_id"] => $context["tag_name"]) {
                    // line 134
                    echo "                                        <span class=\"badge badge-pill badge-primary shadow-sm mr-1\" title=\"";
                    echo twig_escape_filter($this->env, $context["tag_name"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["tag_name"], "html", null, true);
                    echo "</span>
                                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['tag_id'], $context['tag_name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 136
                echo "                                </div>
                            </div>
                        ";
            }
            // line 139
            echo "                        <div class=\"row mt-3\">
                            <div class=\"col-md-12\">
                                <a href=\"";
            // line 141
            echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
            echo "/download\" class=\"btn btn-dark btn-lg\"><i class=\"fas fa-cloud-download-alt fa-fw\"></i> Download</a>
                            </div>
                        </div>
                    </div>
                ";
        } else {
            // line 146
            echo "                    <div class=\"row mt-1\">
                        <div class=\"col-md-12 text-center\">
                            ";
            // line 148
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "filename", [], "any", false, false, false, 148), "html", null, true);
            echo "
                        </div>
                    </div>
                    ";
            // line 151
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "tags", [], "any", false, false, false, 151))) {
                // line 152
                echo "                        <div class=\"row mt-2\">
                            <div class=\"col-md-12 text-center\">
                                ";
                // line 154
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "tags", [], "any", false, false, false, 154));
                foreach ($context['_seq'] as $context["tag_id"] => $context["tag_name"]) {
                    // line 155
                    echo "                                    <span class=\"badge badge-pill badge-primary shadow-sm mr-1\" title=\"";
                    echo twig_escape_filter($this->env, $context["tag_name"], "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["tag_name"], "html", null, true);
                    echo "</span>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['tag_id'], $context['tag_name'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 157
                echo "                            </div>
                        </div>
                    ";
            }
            // line 160
            echo "                ";
        }
        // line 161
        echo "            </div>
        </div>
    </div>
    ";
        // line 164
        $this->loadTemplate("comp/modal_delete.twig", "upload/public.twig", 164)->display($context);
    }

    public function getTemplateName()
    {
        return "upload/public.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  453 => 164,  448 => 161,  445 => 160,  440 => 157,  429 => 155,  425 => 154,  421 => 152,  419 => 151,  413 => 148,  409 => 146,  401 => 141,  397 => 139,  392 => 136,  381 => 134,  377 => 133,  373 => 131,  371 => 130,  365 => 127,  357 => 122,  349 => 117,  344 => 114,  341 => 113,  335 => 110,  327 => 108,  324 => 107,  322 => 106,  316 => 103,  309 => 101,  305 => 99,  302 => 98,  300 => 97,  294 => 94,  287 => 92,  283 => 90,  280 => 89,  278 => 88,  272 => 85,  268 => 83,  265 => 82,  263 => 81,  255 => 78,  251 => 76,  248 => 75,  245 => 74,  242 => 73,  232 => 68,  228 => 67,  223 => 65,  215 => 63,  213 => 62,  209 => 60,  207 => 59,  200 => 54,  192 => 52,  190 => 51,  184 => 50,  178 => 49,  172 => 48,  161 => 42,  157 => 40,  153 => 39,  143 => 32,  139 => 31,  135 => 30,  131 => 29,  126 => 27,  120 => 24,  113 => 22,  110 => 21,  108 => 20,  104 => 19,  100 => 18,  95 => 17,  93 => 16,  87 => 15,  81 => 14,  77 => 12,  73 => 11,  63 => 7,  60 => 6,  56 => 5,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "upload/public.twig", "/home/u339165095/domains/irnell.com/public_html/resources/templates/upload/public.twig");
    }
}
