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

/* comp/modal_delete.twig */
class __TwigTemplate_0e02ba9768503d26115b2aa4b4e240ba51db0ff94cbb8b16d2418f8718a16690 extends \Twig\Template
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
        echo "<div class=\"modal fade\" id=\"modalDelete\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-sm\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\">";
        // line 5
        echo twig_escape_filter($this->env, lang("confirm"), "html", null, true);
        echo "</h5>
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                    <span aria-hidden=\"true\">&times;</span>
                </button>
            </div>
            <div class=\"modal-body\">
                <p>";
        // line 11
        echo twig_escape_filter($this->env, lang("confirm_string"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"modal-footer\">
                <a href=\"#\" class=\"btn btn-danger\" id=\"modalDelete-link\"><i class=\"fas fa-trash fa-fw\"></i> ";
        // line 14
        echo twig_escape_filter($this->env, lang("delete"), "html", null, true);
        echo "</a>
                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">";
        // line 15
        echo twig_escape_filter($this->env, lang("no"), "html", null, true);
        echo "</button>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "comp/modal_delete.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 15,  58 => 14,  52 => 11,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "comp/modal_delete.twig", "/home/u339165095/domains/irnell.com/public_html/resources/templates/comp/modal_delete.twig");
    }
}
