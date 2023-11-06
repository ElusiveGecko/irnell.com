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

/* comp/pager.twig */
class __TwigTemplate_019e5ca09d8046460569b82051d0e25421ab304dd2dc7a51447395f327d2b8fb extends \Twig\Template
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
        if ((($context["previous"] ?? null) || ($context["next"] ?? null))) {
            // line 2
            echo "    <nav>
        <ul class=\"pagination\">
            ";
            // line 4
            if (($context["previous"] ?? null)) {
                // line 5
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 6
                echo twig_escape_filter($this->env, urlFor(((("/" . ($context["path"] ?? null)) . "/page/") . (($context["current_page"] ?? null) - 1)), queryParams()), "html", null, true);
                echo "\"><i class=\"fas fa-angle-left fa-fw\"></i> ";
                echo twig_escape_filter($this->env, lang("pager.previous"), "html", null, true);
                echo "</a>
                </li>
            ";
            } else {
                // line 9
                echo "                <li class=\"page-item disabled\">
                    <a class=\"page-link\" href=\"#\"><i class=\"fas fa-angle-left fa-fw\"></i> ";
                // line 10
                echo twig_escape_filter($this->env, lang("pager.previous"), "html", null, true);
                echo "</a></li>
            ";
            }
            // line 12
            echo "
            ";
            // line 13
            if (($context["next"] ?? null)) {
                // line 14
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 15
                echo twig_escape_filter($this->env, urlFor(((("/" . ($context["path"] ?? null)) . "/page/") . (($context["current_page"] ?? null) + 1)), queryParams()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, lang("pager.next"), "html", null, true);
                echo " <i class=\"fas fa-angle-right fa-fw\"></i></a>
                </li>
            ";
            } else {
                // line 18
                echo "                <li class=\"page-item disabled\"><a class=\"page-link\" href=\"#\">";
                echo twig_escape_filter($this->env, lang("pager.next"), "html", null, true);
                echo " <i class=\"fas fa-angle-right fa-fw\"></i></a></li>
            ";
            }
            // line 20
            echo "        </ul>
    </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "comp/pager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 20,  80 => 18,  72 => 15,  69 => 14,  67 => 13,  64 => 12,  59 => 10,  56 => 9,  48 => 6,  45 => 5,  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "comp/pager.twig", "/home/u339165095/domains/irnell.com/public_html/resources/templates/comp/pager.twig");
    }
}
