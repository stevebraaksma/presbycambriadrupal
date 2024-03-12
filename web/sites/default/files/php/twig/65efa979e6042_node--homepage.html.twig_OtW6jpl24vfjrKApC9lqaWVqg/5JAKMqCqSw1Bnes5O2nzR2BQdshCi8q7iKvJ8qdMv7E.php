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

/* themes/starterkitminimal/templates/content/node--homepage.html.twig */
class __TwigTemplate_f57dd7b8101882273218b7546409aea2 extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 71
        $context["classes"] = ["homepage-content-type", "node", ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source,         // line 74
($context["node"] ?? null), "bundle", [], "any", false, false, true, 74), 74, $this->source))), ((twig_get_attribute($this->env, $this->source,         // line 75
($context["node"] ?? null), "isPromoted", [], "method", false, false, true, 75)) ? ("node--promoted") : ("")), ((twig_get_attribute($this->env, $this->source,         // line 76
($context["node"] ?? null), "isSticky", [], "method", false, false, true, 76)) ? ("node--sticky") : ("")), (( !twig_get_attribute($this->env, $this->source,         // line 77
($context["node"] ?? null), "isPublished", [], "method", false, false, true, 77)) ? ("node--unpublished") : ("")), ((        // line 78
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null), 78, $this->source)))) : (""))];
        // line 81
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->attachLibrary("starterkitminimal/node"), "html", null, true);
        echo "


<article";
        // line 84
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 84), 84, $this->source), "html", null, true);
        echo ">

";
        // line 116
        echo "
<h1>Here is where to put the page</h1>

<p>divider</p>
";
        // line 120
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_textfield1", [], "any", false, false, true, 120), 120, $this->source), "html", null, true);
        echo "
";
        // line 121
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content"] ?? null), "field_textfield2", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
        echo "



";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["node", "view_mode", "attributes", "content"]);    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "themes/starterkitminimal/templates/content/node--homepage.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  67 => 121,  63 => 120,  57 => 116,  52 => 84,  46 => 81,  44 => 78,  43 => 77,  42 => 76,  41 => 75,  40 => 74,  39 => 71,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/starterkitminimal/templates/content/node--homepage.html.twig", "/var/www/html/web/themes/starterkitminimal/templates/content/node--homepage.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 71);
        static $filters = array("clean_class" => 74, "escape" => 81);
        static $functions = array("attach_library" => 81);

        try {
            $this->sandbox->checkSecurity(
                ['set'],
                ['clean_class', 'escape'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
