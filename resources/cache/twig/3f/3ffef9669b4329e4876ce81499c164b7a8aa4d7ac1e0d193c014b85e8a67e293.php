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

/* dashboard/system.twig */
class __TwigTemplate_0b5b45947e7a4f750f9954a6158af3aa427e2c7f18d4ff5f29ab64a0c168ec36 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.twig", "dashboard/system.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, lang("system"), "html", null, true);
    }

    // line 5
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->loadTemplate("comp/navbar.twig", "dashboard/system.twig", 6)->display($context);
        // line 7
        echo "    <div class=\"container\">
        ";
        // line 8
        $this->loadTemplate("comp/alert.twig", "dashboard/system.twig", 8)->display($context);
        // line 9
        echo "        <div class=\"row\">
            <div class=\"col-xl-3 col-sm-6 mb-3\">
                <div class=\"card bg-success text-white h-100 shadow-sm\">
                    <div class=\"card-body bg-success\">
                        <div class=\"rotate\">
                            <i class=\"fas fa-users fa-3x\"></i>
                        </div>
                        <h6 class=\"text-uppercase\">";
        // line 16
        echo twig_escape_filter($this->env, lang("users"), "html", null, true);
        echo "</h6>
                        <h1 class=\"display-4 system-tile\">";
        // line 17
        echo twig_escape_filter($this->env, ($context["usersCount"] ?? null), "html", null, true);
        echo "</h1>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-sm-6 mb-3\">
                <div class=\"card bg-danger text-white h-100 shadow-sm\">
                    <div class=\"card-body bg-danger\">
                        <div class=\"rotate\">
                            <i class=\"fas fa-weight fa-3x\"></i>
                        </div>
                        <h6 class=\"text-uppercase\">";
        // line 27
        echo twig_escape_filter($this->env, lang("size"), "html", null, true);
        echo "</h6>
                        <h1 class=\"display-4 system-tile\">";
        // line 28
        echo twig_escape_filter($this->env, ($context["totalSize"] ?? null), "html", null, true);
        echo "</h1>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-sm-6 mb-3\">
                <div class=\"card bg-warning text-white h-100 shadow-sm\">
                    <div class=\"card-body bg-warning\">
                        <div class=\"rotate\">
                            <i class=\"fas fa-upload fa-3x\"></i>
                        </div>
                        <h6 class=\"text-uppercase\">";
        // line 38
        echo twig_escape_filter($this->env, lang("files"), "html", null, true);
        echo "</h6>
                        <h1 class=\"display-4 system-tile\">";
        // line 39
        echo twig_escape_filter($this->env, ($context["mediasCount"] ?? null), "html", null, true);
        echo "</h1>
                    </div>
                </div>
            </div>
            <div class=\"col-xl-3 col-sm-6 mb-3\">
                <div class=\"card bg-dark text-white h-100 shadow-sm\">
                    <div class=\"card-body bg-dark\">
                        <div class=\"rotate\">
                            <i class=\"fas fa-unlink fa-3x\"></i>
                        </div>
                        <h6 class=\"text-uppercase\">";
        // line 49
        echo twig_escape_filter($this->env, lang("orphaned_files"), "html", null, true);
        echo "</h6>
                        <h1 class=\"display-4 system-tile\">";
        // line 50
        echo twig_escape_filter($this->env, ($context["orphanFilesCount"] ?? null), "html", null, true);
        echo "</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-8\">

                <div class=\"card shadow-sm mt-3\">
                    <div class=\"card-header\"><i class=\"fas fa-cog fa-fw\"></i> ";
        // line 59
        echo twig_escape_filter($this->env, lang("system_settings"), "html", null, true);
        echo "</div>
                    <div class=\"card-body\">
                        <form method=\"post\" action=\"";
        // line 61
        echo twig_escape_filter($this->env, route("settings.save"), "html", null, true);
        echo "\">
                            <div class=\"form-group row\">
                                <label for=\"register_enabled\" class=\"col-sm-4 col-form-label\">";
        // line 63
        echo twig_escape_filter($this->env, lang("register_enabled"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-8\">
                                    <input type=\"checkbox\" name=\"register_enabled\" data-toggle=\"toggle\" ";
        // line 65
        echo (((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "register_enabled", [], "any", false, false, false, 65) == "on")) ? ("checked") : (""));
        echo ">
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label for=\"auto_tagging\" class=\"col-sm-4 col-form-label\">";
        // line 69
        echo twig_escape_filter($this->env, lang("auto_tagging"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-8\">
                                    <input type=\"checkbox\" name=\"auto_tagging\" data-toggle=\"toggle\" ";
        // line 71
        echo (((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "auto_tagging", [], "any", false, false, false, 71) == "on")) ? ("checked") : (""));
        echo ">
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label for=\"image_embeds\" class=\"col-sm-4 col-form-label\">";
        // line 75
        echo twig_escape_filter($this->env, lang("image_embeds"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-8\">
                                    <input type=\"checkbox\" name=\"image_embeds\" data-toggle=\"toggle\" ";
        // line 77
        echo (((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "image_embeds", [], "any", false, false, false, 77) == "on")) ? ("checked") : (""));
        echo ">
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label for=\"themes\" class=\"col-sm-4 col-form-label\">";
        // line 81
        echo twig_escape_filter($this->env, lang("theme"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-8\">
                                    <select class=\"form-control\" id=\"themes\" name=\"css\">
                                        <option id=\"theme-load\" selected disabled hidden>";
        // line 84
        echo twig_escape_filter($this->env, lang("click_to_load"), "html", null, true);
        echo "</option>
                                    </select>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label for=\"lang\" class=\"col-sm-4 col-form-label\">";
        // line 89
        echo twig_escape_filter($this->env, lang("enforce_language"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-8\">
                                    <select class=\"form-control\" id=\"lang\" name=\"lang\">
                                        <option value=\"auto\">(";
        // line 92
        echo twig_escape_filter($this->env, lang("auto_set"), "html", null, true);
        echo ")</option>
                                        ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["installed_lang"] ?? null));
        foreach ($context['_seq'] as $context["lang"] => $context["name"]) {
            // line 94
            echo "                                            <option value=\"";
            echo twig_escape_filter($this->env, $context["lang"], "html", null, true);
            echo "\"";
            echo (((($context["forced_lang"] ?? null) == $context["lang"])) ? (" selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "</option>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['lang'], $context['name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "                                    </select>
                                    <small>";
        // line 97
        echo twig_escape_filter($this->env, lang("default_lang_behavior"), "html", null, true);
        echo "</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label for=\"custom_head\" class=\"col-sm-4 col-form-label\">";
        // line 101
        echo twig_escape_filter($this->env, lang("custom_head_html"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-8\">
                                    <textarea name=\"custom_head\" class=\"form-control text-monospace\">";
        // line 103
        echo twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "custom_head", [], "any", false, false, false, 103);
        echo "</textarea>
                                    <small>";
        // line 104
        echo twig_escape_filter($this->env, lang("custom_head_html_hint"), "html", null, true);
        echo "</small>
                                </div>
                            </div>
                            <hr>
                            <div class=\"form-group row\">
                                <label for=\"quota_enabled\" class=\"col-sm-4 col-form-label\">";
        // line 109
        echo twig_escape_filter($this->env, lang("quota_enabled"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-8\">
                                    <input type=\"checkbox\" name=\"quota_enabled\" data-toggle=\"toggle\" ";
        // line 111
        echo (((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "quota_enabled", [], "any", false, false, false, 111) == "on")) ? ("checked") : (""));
        echo " onchange=\"document.getElementById('default_user_quota').toggleAttribute('readonly')\">
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label for=\"default_user_quota\" class=\"col-sm-4 col-form-label\">";
        // line 115
        echo twig_escape_filter($this->env, lang("default_user_quota"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-8\">
                                    <input type=\"text\" class=\"form-control\" id=\"default_user_quota\" name=\"default_user_quota\" pattern=\"[0-9]+[K|M|G|T]\" title=\"512M, 2G, 1T, ...\" placeholder=\"1G\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "default_user_quota", [], "any", false, false, false, 117), "html", null, true);
        echo "\" ";
        echo (((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "quota_enabled", [], "any", false, false, false, 117) == "off")) ? ("readonly") : (""));
        echo ">
                                    <small>512M, 2G, 1T, ...</small>
                                </div>
                            </div>
                            <hr>
                            <div class=\"form-group row\">
                                <label for=\"recaptcha_enabled\" class=\"col-sm-4 col-form-label\">";
        // line 123
        echo twig_escape_filter($this->env, lang("recaptcha_enabled"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-8\">
                                    <input type=\"checkbox\" name=\"recaptcha_enabled\" data-toggle=\"toggle\" ";
        // line 125
        echo (((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "recaptcha_enabled", [], "any", false, false, false, 125) == "on")) ? ("checked") : (""));
        echo " onchange=\"document.getElementById('recaptcha_site_key').toggleAttribute('readonly');document.getElementById('recaptcha_secret_key').toggleAttribute('readonly')\">
                                    <br><small>";
        // line 126
        echo twig_escape_filter($this->env, lang("only_recaptcha_v3"), "html", null, true);
        echo "</small>
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label for=\"recaptcha_site_key\" class=\"col-sm-4 col-form-label\">";
        // line 130
        echo twig_escape_filter($this->env, lang("recaptcha_site_key"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-8\">
                                    <input type=\"text\" class=\"form-control\" id=\"recaptcha_site_key\" name=\"recaptcha_site_key\" value=\"";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "recaptcha_site_key", [], "any", false, false, false, 132), "html", null, true);
        echo "\" ";
        echo (((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "recaptcha_enabled", [], "any", false, false, false, 132) == "off")) ? ("readonly") : (""));
        echo ">
                                </div>
                            </div>
                            <div class=\"form-group row\">
                                <label for=\"recaptcha_secret_key\" class=\"col-sm-4 col-form-label\">";
        // line 136
        echo twig_escape_filter($this->env, lang("recaptcha_secret_key"), "html", null, true);
        echo "</label>
                                <div class=\"col-sm-8\">
                                    <input type=\"text\" class=\"form-control\" id=\"recaptcha_secret_key\" name=\"recaptcha_secret_key\" value=\"";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "recaptcha_secret_key", [], "any", false, false, false, 138), "html", null, true);
        echo "\" ";
        echo (((twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "recaptcha_enabled", [], "any", false, false, false, 138) == "off")) ? ("readonly") : (""));
        echo ">
                                </div>
                            </div>
                            <button type=\"submit\" class=\"btn btn-outline-success float-right mt-3\">
                                <i class=\"fas fa-save fa-fw\"></i> ";
        // line 142
        echo twig_escape_filter($this->env, lang("apply"), "html", null, true);
        echo "
                            </button>
                        </form>
                    </div>
                </div>
                <div class=\"card shadow-sm mt-3\">
                    <div class=\"card-header\"><i class=\"fas fa-cloud-download-alt fa-fw\"></i> ";
        // line 148
        echo twig_escape_filter($this->env, lang("updates"), "html", null, true);
        echo " <span class=\"float-right\">v";
        echo twig_escape_filter($this->env, ($context["PLATFORM_VERSION"] ?? null), "html", null, true);
        echo "</span></div>
                    <div class=\"card-body\">
                        <div class=\"row\">
                            <div class=\"col\">
                                <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-block btn-outline-info checkForUpdatesButton\" data-prerelease=\"false\"><i class=\"fas fa-sync fa-fw\"></i> ";
        // line 153
        echo twig_escape_filter($this->env, lang("check_for_updates"), "html", null, true);
        echo "</button>
                                    <button type=\"button\" class=\"btn btn-outline-info dropdown-toggle dropdown-toggle-split\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                        <span class=\"sr-only\">Toggle Dropdown</span>
                                    </button>
                                    <div class=\"dropdown-menu\">
                                        <a class=\"dropdown-item checkForUpdatesButton\" href=\"javascript:void(0);\" data-prerelease=\"true\">";
        // line 158
        echo twig_escape_filter($this->env, lang("prerelease_channel"), "html", null, true);
        echo "</a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col text-center\"><span class=\"text-muted\" id=\"checkForUpdatesMessage\"></span></div>

                            <div class=\"col\">
                                <form method=\"post\" action=\"";
        // line 165
        echo twig_escape_filter($this->env, route("system.upgrade"), "html", null, true);
        echo "\" onsubmit=\"\$('#modalLoading').modal({backdrop: 'static', keyboard: false})\">
                                    <button type=\"submit\" id=\"doUpgradeButton\" class=\"btn btn-block btn-outline-success\" disabled><i class=\"fas fa-cloud-download-alt fa-fw\"></i> ";
        // line 166
        echo twig_escape_filter($this->env, lang("upgrade"), "html", null, true);
        echo "</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class=\"card-footer text-center\">
                        <a href=\"";
        // line 172
        echo twig_escape_filter($this->env, route("system.changelog"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, lang("show_changelog"), "html", null, true);
        echo "</a>
                    </div>
                </div>
            </div>
            <div class=\"col-md-4 mt-3\">
                <div class=\"card shadow-sm\">
                    <div class=\"card-header\"><i class=\"fab fa-php fa-fw\"></i> ";
        // line 178
        echo twig_escape_filter($this->env, lang("php_info"), "html", null, true);
        echo "</div>
                    <div class=\"card-body\">
                        <strong>PHP Version:</strong> ";
        // line 180
        echo twig_escape_filter($this->env, ($context["php_version"] ?? null), "html", null, true);
        echo "<br>
                        <strong>Max memory usage:</strong> ";
        // line 181
        echo twig_escape_filter($this->env, ($context["max_memory"] ?? null), "html", null, true);
        echo "<br>
                        <strong>Max upload size:</strong>
                        <ul>
                            <li><code>post_max_size</code>: ";
        // line 184
        echo twig_escape_filter($this->env, ($context["post_max_size"] ?? null), "html", null, true);
        echo "</li>
                            <li><code>upload_max_filesize</code>: ";
        // line 185
        echo twig_escape_filter($this->env, ($context["upload_max_filesize"] ?? null), "html", null, true);
        echo "</li>
                        </ul>
                    </div>
                </div>
                <div class=\"card shadow-sm mt-3\">
                    <div class=\"card-header\"><i class=\"fas fa-tools fa-fw\"></i> ";
        // line 190
        echo twig_escape_filter($this->env, lang("maintenance"), "html", null, true);
        echo "</div>
                    <div class=\"card-body\">
                        <a href=\"";
        // line 192
        echo twig_escape_filter($this->env, route("system.deleteOrphanFiles"), "html", null, true);
        echo "\" class=\"btn btn-outline-danger btn-block\"><i class=\"fas fa-broom fa-fw\"></i> ";
        echo twig_escape_filter($this->env, lang("clean_orphaned_uploads"), "html", null, true);
        echo "</a>
                        <a href=\"";
        // line 193
        echo twig_escape_filter($this->env, route("system.recalculateUserQuota"), "html", null, true);
        echo "\" class=\"btn btn-outline-info btn-block\"><i class=\"fas fa-calculator fa-fw\"></i> ";
        echo twig_escape_filter($this->env, lang("recalculate_user_quota"), "html", null, true);
        echo "</a>
                    </div>
                </div>
                <div class=\"card shadow-sm mt-3\">
                    <div class=\"card-header\"><i class=\"fas fa-donate fa-fw\"></i> ";
        // line 197
        echo twig_escape_filter($this->env, lang("donation"), "html", null, true);
        echo "</div>
                    <div class=\"card-body\">
                        <p class=\"text-justify\">";
        // line 199
        echo twig_escape_filter($this->env, lang("donate_text"), "html", null, true);
        echo "</p>
                        <div class=\"text-center\">
                            <a href=\"https://github.com/sponsors/SergiX44\" target=\"_blank\" class=\"text-dark\"><i class=\"fab fa-github-square fa-3x\"></i></a>
                            <a href=\"https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=6RXF8ZGCZBL68&item_name=Support+the+XBackBone+Development&currency_code=EUR&source=url\" target=\"_blank\" class=\"text-warning\"><i class=\"fab fa-cc-paypal fa-3x\"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"modalLoading\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
        <div class=\"modal-dialog modal-sm\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h6 class=\"modal-title\">";
        // line 213
        echo twig_escape_filter($this->env, lang("please_wait"), "html", null, true);
        echo "</h6>
                </div>
                <div class=\"modal-body text-center\">
                    <i class=\"fas fa-10x fa-spinner fa-pulse\"></i>
                </div>
                <div class=\"modal-footer\">
                    ";
        // line 219
        echo twig_escape_filter($this->env, lang("dont_close"), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "dashboard/system.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  467 => 219,  458 => 213,  441 => 199,  436 => 197,  427 => 193,  421 => 192,  416 => 190,  408 => 185,  404 => 184,  398 => 181,  394 => 180,  389 => 178,  378 => 172,  369 => 166,  365 => 165,  355 => 158,  347 => 153,  337 => 148,  328 => 142,  319 => 138,  314 => 136,  305 => 132,  300 => 130,  293 => 126,  289 => 125,  284 => 123,  273 => 117,  268 => 115,  261 => 111,  256 => 109,  248 => 104,  244 => 103,  239 => 101,  232 => 97,  229 => 96,  216 => 94,  212 => 93,  208 => 92,  202 => 89,  194 => 84,  188 => 81,  181 => 77,  176 => 75,  169 => 71,  164 => 69,  157 => 65,  152 => 63,  147 => 61,  142 => 59,  130 => 50,  126 => 49,  113 => 39,  109 => 38,  96 => 28,  92 => 27,  79 => 17,  75 => 16,  66 => 9,  64 => 8,  61 => 7,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "dashboard/system.twig", "/home/u339165095/domains/irnell.com/public_html/resources/templates/dashboard/system.twig");
    }
}
