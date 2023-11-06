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

/* upload/web.twig */
class __TwigTemplate_b8dca7226ee1fb58e974e7fc250267dea6f82f0fec3577f56fc705958f0309ce extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.twig", "upload/web.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, lang("upload"), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->loadTemplate("comp/navbar.twig", "upload/web.twig", 6)->display($context);
        // line 7
        echo "    <div class=\"container\">
        ";
        // line 8
        $this->loadTemplate("comp/alert.twig", "upload/web.twig", 8)->display($context);
        // line 9
        echo "        <div class=\"alert alert-success alert-permanent\">
            ";
        // line 10
        echo twig_escape_filter($this->env, lang("upload_max_file_size", [0 => ($context["max_file_size"] ?? null)]), "html", null, true);
        echo "
        </div>
        <div class=\"card shadow-sm\">
            <div class=\"card-body\">
                <div class=\"row mb-3\">
                    <div class=\"col-10\">
                        <div class=\"progress h-100\">
                            <div class=\"progress-bar progress-bar-animated progress-bar-striped\" style=\"width: 0;\" id=\"uploadProgess\"></div>
                        </div>
                    </div>
                    <div class=\"col-2 text-center\">
                        <button type=\"button\" class=\"btn btn-sm btn-outline-danger btn-block\" onclick=\"Dropzone.instances[0].removeAllFiles(true)\" data-toggle=\"tooltip\" title=\"";
        // line 21
        echo twig_escape_filter($this->env, lang("cancel"), "html", null, true);
        echo "\"><i class=\"fas fa-times\"></i></button>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col\">
                        <form action=\"";
        // line 26
        echo twig_escape_filter($this->env, route("upload.web"), "html", null, true);
        echo "\" method=\"post\" id=\"upload-dropzone\" class=\"dropzone\">
                            <div class=\"fallback\">
                                <input name=\"file\" type=\"file\" multiple>
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
        return "upload/web.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 26,  83 => 21,  69 => 10,  66 => 9,  64 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "upload/web.twig", "/home/u339165095/domains/irnell.com/public_html/resources/templates/upload/web.twig");
    }
}
