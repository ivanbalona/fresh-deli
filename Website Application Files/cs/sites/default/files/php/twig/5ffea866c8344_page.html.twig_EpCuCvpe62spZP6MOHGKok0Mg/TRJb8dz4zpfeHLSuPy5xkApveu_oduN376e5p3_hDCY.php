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

/* themes/tara/templates/layout/page.html.twig */
class __TwigTemplate_9e58c2af716da89d147027acb7d8427d598c5919eede02d74ccfa2c68911c878 extends \Twig\Template
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
        // line 52
        $this->loadTemplate("@tara/template-parts/header.html.twig", "themes/tara/templates/layout/page.html.twig", 52)->display($context);
        // line 53
        $this->loadTemplate("@tara/template-parts/breadcrumb_region.html.twig", "themes/tara/templates/layout/page.html.twig", 53)->display($context);
        // line 54
        $this->loadTemplate("@tara/template-parts/highlighted.html.twig", "themes/tara/templates/layout/page.html.twig", 54)->display($context);
        // line 55
        echo "<div id=\"main-wrapper\" class=\"main-wrapper\">
  <div class=\"container\">
\t\t<a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 58
        echo "    <main id=\"main\" class=\"page-content\">
      ";
        // line 59
        $this->loadTemplate("@tara/template-parts/content_top.html.twig", "themes/tara/templates/layout/page.html.twig", 59)->display($context);
        // line 60
        echo "      ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 60), 60, $this->source), "html", null, true);
        echo "
      ";
        // line 61
        $this->loadTemplate("@tara/template-parts/content_bottom.html.twig", "themes/tara/templates/layout/page.html.twig", 61)->display($context);
        // line 62
        echo "    </main>
    ";
        // line 63
        $this->loadTemplate("@tara/template-parts/left_sidebar.html.twig", "themes/tara/templates/layout/page.html.twig", 63)->display($context);
        // line 64
        echo "    ";
        $this->loadTemplate("@tara/template-parts/right_sidebar.html.twig", "themes/tara/templates/layout/page.html.twig", 64)->display($context);
        // line 65
        echo "  </div> ";
        // line 66
        echo "</div>";
        // line 67
        $this->loadTemplate("@tara/template-parts/footer.html.twig", "themes/tara/templates/layout/page.html.twig", 67)->display($context);
    }

    public function getTemplateName()
    {
        return "themes/tara/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 67,  71 => 66,  69 => 65,  66 => 64,  64 => 63,  61 => 62,  59 => 61,  54 => 60,  52 => 59,  49 => 58,  45 => 55,  43 => 54,  41 => 53,  39 => 52,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/tara/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\cs\\themes\\tara\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("include" => 52);
        static $filters = array("escape" => 60);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['include'],
                ['escape'],
                []
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
