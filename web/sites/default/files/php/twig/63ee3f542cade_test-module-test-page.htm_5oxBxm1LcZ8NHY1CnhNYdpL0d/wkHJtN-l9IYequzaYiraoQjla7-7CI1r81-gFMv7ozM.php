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

/* modules/test_module/templates/test-module-test-page.html.twig */
class __TwigTemplate_f44cd1f61f92cd5bd6b07fee67a45601e25bc0c50c1456c2bf98a71fa00e3483 extends \Twig\Template
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
        // line 1
        echo "<div class=\"info_block\">
  <div>
    <label>";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Informative Text:"));
        echo "</label>
    <div class=\"text_block\">";
        // line 4
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["text_field"] ?? null), 4, $this->source), "html", null, true);
        echo "</div>
  </div>

  <div>
    <label>";
        // line 8
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Integer number: "));
        echo "</label><span>";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["integer_field"] ?? null), 8, $this->source), "html", null, true);
        echo "</span>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "modules/test_module/templates/test-module-test-page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 8,  47 => 4,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "modules/test_module/templates/test-module-test-page.html.twig", "/app/web/modules/test_module/templates/test-module-test-page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("t" => 3, "escape" => 4);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['t', 'escape'],
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
