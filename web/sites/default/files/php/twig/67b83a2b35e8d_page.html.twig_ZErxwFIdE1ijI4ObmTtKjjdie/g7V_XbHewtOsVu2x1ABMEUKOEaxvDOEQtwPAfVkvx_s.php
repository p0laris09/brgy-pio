<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/gen_pio_theme/templates/layout/page.html.twig */
class __TwigTemplate_1b7deadbb54d1ac178ed9f889bc04e29 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'carousel' => [$this, 'block_carousel'],
            'first_section' => [$this, 'block_first_section'],
            'second_section' => [$this, 'block_second_section'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        if ( !(array_key_exists("directory", $context) && CoreExtension::matches("/admin/", ($context["directory"] ?? null)))) {
            // line 2
            yield "  <div class=\"layout-container\">
    
    ";
            // line 5
            yield "    ";
            yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
            // line 8
            yield "


    ";
            // line 12
            yield "    <main id=\"main-content\">
      ";
            // line 13
            yield from $this->unwrap()->yieldBlock('carousel', $context, $blocks);
            // line 16
            yield "
      ";
            // line 17
            yield from $this->unwrap()->yieldBlock('first_section', $context, $blocks);
            // line 20
            yield "
      ";
            // line 21
            yield from $this->unwrap()->yieldBlock('second_section', $context, $blocks);
            // line 24
            yield "
    </main>

    ";
            // line 28
            yield "    ";
            yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
            // line 31
            yield "    
  </div>
";
        } else {
            // line 34
            yield "  ";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["directory"]);        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 6
        yield "      ";
        yield from         $this->loadTemplate("@gen_pio_theme/layout/header.html.twig", "themes/custom/gen_pio_theme/templates/layout/page.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "    ";
        yield from [];
    }

    // line 13
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_carousel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 14
        yield "        ";
        yield from         $this->loadTemplate("@gen_pio_theme/layout/carousel.html.twig", "themes/custom/gen_pio_theme/templates/layout/page.html.twig", 14)->unwrap()->yield($context);
        // line 15
        yield "      ";
        yield from [];
    }

    // line 17
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_first_section(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 18
        yield "        ";
        yield from         $this->loadTemplate("@gen_pio_theme/layout/first-section.html.twig", "themes/custom/gen_pio_theme/templates/layout/page.html.twig", 18)->unwrap()->yield($context);
        // line 19
        yield "      ";
        yield from [];
    }

    // line 21
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_second_section(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 22
        yield "        ";
        yield from         $this->loadTemplate("@gen_pio_theme/layout/second-section.html.twig", "themes/custom/gen_pio_theme/templates/layout/page.html.twig", 22)->unwrap()->yield($context);
        // line 23
        yield "      ";
        yield from [];
    }

    // line 28
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 29
        yield "      ";
        yield from         $this->loadTemplate("@gen_pio_theme/layout/footer.html.twig", "themes/custom/gen_pio_theme/templates/layout/page.html.twig", 29)->unwrap()->yield($context);
        // line 30
        yield "    ";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/gen_pio_theme/templates/layout/page.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  168 => 30,  165 => 29,  158 => 28,  153 => 23,  150 => 22,  143 => 21,  138 => 19,  135 => 18,  128 => 17,  123 => 15,  120 => 14,  113 => 13,  108 => 7,  105 => 6,  98 => 5,  91 => 34,  86 => 31,  83 => 28,  78 => 24,  76 => 21,  73 => 20,  71 => 17,  68 => 16,  66 => 13,  63 => 12,  58 => 8,  55 => 5,  51 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/gen_pio_theme/templates/layout/page.html.twig", "C:\\xampp\\htdocs\\brgy-pio\\web\\themes\\custom\\gen_pio_theme\\templates\\layout\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 1, "block" => 5, "include" => 6);
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block', 'include'],
                [],
                [],
                $this->source
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
