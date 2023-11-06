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

/* base.twig */
class __TwigTemplate_f8fc80a8dbe9f4a0eab07bc6b37f07c6564a0e42b36cdb79eb9c1d9c50b9d557 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'meta' => [$this, 'block_meta'],
            'head' => [$this, 'block_head'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["current_lang"] ?? null), "html", null, true);
        echo "\">
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo " | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "app_name", [], "any", false, false, false, 4), "html", null, true);
        echo "</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["config"] ?? null), "app_name", [], "any", false, false, false, 7), "html", null, true);
        echo " - Proudly powered by XBackBone.\">
    <link rel=\"apple-touch-icon\" sizes=\"180x180\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, asset("/static/images/apple-touch-icon.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"32x32\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, asset("/static/images/favicon-32x32.png"), "html", null, true);
        echo "\">
    <link rel=\"icon\" type=\"image/png\" sizes=\"16x16\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, asset("/static/images/favicon-16x16.png"), "html", null, true);
        echo "\">
    <link rel=\"manifest\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, asset("/static/images/site.webmanifest"), "html", null, true);
        echo "\">
    <link rel=\"mask-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, asset("/static/images/safari-pinned-tab.svg"), "html", null, true);
        echo "\" color=\"#5bbad5\">
    <link rel=\"shortcut icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, asset("/static/images/favicon.ico"), "html", null, true);
        echo "\">
    <meta name=\"msapplication-TileColor\" content=\"#603cba\">
    <meta name=\"msapplication-config\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, asset("/static/images/browserconfig.xml"), "html", null, true);
        echo "\">
    <meta name=\"theme-color\" content=\"#ffffff\">
    <link rel=\"preload\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, asset("/static/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" as=\"style\">
    <link rel=\"preload\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, asset("/static/fontawesome/css/all.min.css"), "html", null, true);
        echo "\" as=\"style\">
    <link rel=\"preload\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, asset("/static/app/app.css"), "html", null, true);
        echo "\" as=\"style\">
    <link rel=\"preload\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, asset("/static/jquery/jquery.min.js"), "html", null, true);
        echo "\" as=\"script\">
    <link rel=\"preload\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, asset("/static/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\" as=\"script\">
    <link rel=\"preload\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, asset("/static/app/app.js"), "html", null, true);
        echo "\" as=\"script\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, asset("/static/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, asset("/static/fontawesome/css/all.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, asset("/static/highlightjs/styles/monokai.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, asset("/static/plyr/plyr.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 27
        echo twig_escape_filter($this->env, asset("/static/dropzone/dropzone.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, asset("/static/bootstrap/css/bootstrap4-toggle.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, asset("/static/app/app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        // line 30
        $this->displayBlock('meta', $context, $blocks);
        // line 37
        echo "    <script>
        window.AppConfig = {
            'base_url': '";
        // line 39
        echo twig_escape_filter($this->env, urlFor(), "html", null, true);
        echo "',
            'max_upload_size': ";
        // line 40
        echo twig_escape_filter($this->env, ($context["maxUploadSize"] ?? null), "html", null, true);
        echo ",
            'lang': {'publish': '";
        // line 41
        echo twig_escape_filter($this->env, lang("publish"), "html", null, true);
        echo "', 'hide': '";
        echo twig_escape_filter($this->env, lang("hide"), "html", null, true);
        echo "', 'dropzone': '";
        echo twig_escape_filter($this->env, lang("drop_to_upload"), "html", null, true);
        echo "'}
        }
    </script>
    ";
        // line 44
        $this->displayBlock('head', $context, $blocks);
        // line 45
        echo "    ";
        echo ($context["customHead"] ?? null);
        echo "
</head>
<body class=\"bg-light\">
";
        // line 48
        $this->displayBlock('content', $context, $blocks);
        // line 49
        $this->displayBlock('footer', $context, $blocks);
        // line 54
        echo "<script src=\"";
        echo twig_escape_filter($this->env, asset("/static/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 55
        echo twig_escape_filter($this->env, asset("/static/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, asset("/static/highlightjs/highlight.pack.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, asset("/static/highlightjs/highlightjs-line-numbers.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 58
        echo twig_escape_filter($this->env, asset("/static/clipboardjs/clipboard.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, asset("/static/plyr/plyr.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, asset("/static/dropzone/dropzone.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, asset("/static/bootstrap/js/bootstrap4-toggle.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 62
        echo twig_escape_filter($this->env, asset("/static/app/app.js"), "html", null, true);
        echo "\"></script>
<script>
    hljs.initHighlightingOnLoad();
    hljs.initLineNumbersOnLoad({
        singleLine: true
    });
</script>
";
        // line 69
        $this->displayBlock('js', $context, $blocks);
        // line 70
        echo "</body>
</html>";
    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Default";
    }

    // line 30
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "        <meta id=\"embed-title\" property=\"og:title\" content=\"";
        $this->displayBlock("title", $context, $blocks);
        echo "\">
        <meta id=\"discord\" name=\"twitter:image\" content=\"";
        // line 32
        echo twig_escape_filter($this->env, asset("/static/images/favicon-32x32.png"), "html", null, true);
        echo "\">
        <meta id=\"image-src\" name=\"twitter:image:src\" content=\"";
        // line 33
        echo twig_escape_filter($this->env, asset("/static/images/favicon-32x32.png"), "html", null, true);
        echo "\">
        <meta id=\"embed-image\" property=\"og:image\" content=\"";
        // line 34
        echo twig_escape_filter($this->env, asset("/static/images/favicon-32x32.png"), "html", null, true);
        echo "\">
        <meta id=\"embed-desc\" property=\"og:description\" content=\"Proudly powered by XBackBone\">
    ";
    }

    // line 44
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 48
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 49
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 50
        echo "    <div class=\"container-fluid footer\" style=\"display: none; font-size: 0.8rem\">
        <div class=\"text-muted\">Proudly powered by <a href=\"https://sergix44.github.io/XBackBone/\">XBackBone";
        // line 51
        if (twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "get", [0 => "admin"], "method", false, false, false, 51)) {
            echo " v";
            echo twig_escape_filter($this->env, ($context["PLATFORM_VERSION"] ?? null), "html", null, true);
        }
        echo "</a> — <i class=\"fas fa-fw fa-balance-scale\"></i> AGPL v3.0</div>
    </div>
";
    }

    // line 69
    public function block_js($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 69,  282 => 51,  279 => 50,  275 => 49,  269 => 48,  263 => 44,  256 => 34,  252 => 33,  248 => 32,  243 => 31,  239 => 30,  232 => 4,  227 => 70,  225 => 69,  215 => 62,  211 => 61,  207 => 60,  203 => 59,  199 => 58,  195 => 57,  191 => 56,  187 => 55,  182 => 54,  180 => 49,  178 => 48,  171 => 45,  169 => 44,  159 => 41,  155 => 40,  151 => 39,  147 => 37,  145 => 30,  141 => 29,  137 => 28,  133 => 27,  129 => 26,  125 => 25,  121 => 24,  117 => 23,  113 => 22,  109 => 21,  105 => 20,  101 => 19,  97 => 18,  93 => 17,  88 => 15,  83 => 13,  79 => 12,  75 => 11,  71 => 10,  67 => 9,  63 => 8,  59 => 7,  51 => 4,  46 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.twig", "/home/u339165095/domains/irnell.com/public_html/resources/templates/base.twig");
    }
}
