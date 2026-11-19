<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* themes/custom/student_portal_theme/templates/page.html.twig */
class __TwigTemplate_a27ca78cb67797f18ed9a0cc9ae1192a extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        $this->sandbox = $env->getExtension(SandboxExtension::class)->getChecker();
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "
<div class=\"layout-container\">

  <header class=\"site-header\">
    ";
        // line 5
        $context["portal_name"] = "My Learning Portal";
        // line 6
        yield "      <h1>";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["portal_name"] ?? null), "html", null, true);
        yield "</h1>
  </header>

  <section class=\"welcome-section\">
    ";
        // line 10
        $context["welcome_message"] = "Welcome to My Student Portal!";
        // line 11
        yield "    <p>";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["welcome_message"] ?? null), "html", null, true);
        yield "</p>
  </section>

<section class=\"admission-section\">

  ";
        // line 16
        if ((($tmp = ($context["logged_in"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 17
            yield "    <h2>Admissions are Open!</h2>
    <p>Welcome, Administrator! You can now manage admissions.</p>
  ";
        } else {
            // line 20
            yield "    <h2>Admissions are Closed!</h2>
    <p>Please log in to access admission management.</p>
  ";
        }
        // line 23
        yield "
</section>
";
        // line 26
        yield "
<section class=\"student-section\">
\t<h2>Our Student</h2>

  ";
        // line 30
        $context["students"] = [["id" => 101, "name" => "Rahul", "class" => "4th", "age" => 9, "city" => "Hyderabad", "email" => "rahul@example.com", "status" => "Active"], ["id" => 102, "name" => "Priya", "class" => "5th", "age" => 10, "city" => "Tirupati", "email" => "priya@example.com", "status" => "inactive"], ["id" => 103, "name" => "Kiran", "class" => "6th", "age" => "8", "city" => "Vijayawada", "email" => "kiran@example.com", "status" => "Active"], ["id" => 104, "name" => "Sneha", "class" => "4th", "age" => 10, "city" => "Hyderabad", "email" => "sneha@example.com", "status" => "inactive"], ["id" => 105, "name" => "Arjun", "class" => "5th", "age" => 8, "city" => "Chennai", "email" => "arjun@example.com", "status" => "inactive"]];
        // line 37
        yield "  <p>Total Students: ";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["students"] ?? null)), "html", null, true);
        yield "</p>
  <div class=\"student-list\">

    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["students"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 41
            yield "
      <div class=\"student-card\">

        
        <h3>";
            // line 45
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["student"], "name", [], "any", false, false, true, 45)), "html", null, true);
            yield "</h3>
        <p><strong>ID : </strong> ";
            // line 46
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, true, 46), "html", null, true);
            yield "</p>
        <p><strong>Class : </strong> ";
            // line 47
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["student"], "class", [], "any", false, false, true, 47), "html", null, true);
            yield "</p>
        <p><strong>Age : </strong> ";
            // line 48
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["student"], "age", [], "any", false, false, true, 48), "html", null, true);
            yield "</p>
        <p><strong>City : </strong> ";
            // line 49
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["student"], "city", [], "any", false, false, true, 49), "html", null, true);
            yield "</p>
        <p><strong>Email : </strong>";
            // line 50
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["student"], "email", [], "any", false, false, true, 50), "html", null, true);
            yield "</p> 
        ";
            // line 51
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["student"], "status", [], "any", false, false, true, 51) == "Active")) {
                // line 52
                yield "          <p>Student status : </p><p class=\"student-status active\">Active</p>
        ";
            } else {
                // line 54
                yield "          <p>Student status : </p><p class=\"student-status inactive\">Inactive</p>
        ";
            }
            // line 56
            yield "
      </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['student'], $context['_parent']);
        $context = array_intersect_key($context, $_parent);
        $context += $_parent;
        // line 60
        yield "
  </div>

</section>




  <section class=\"features-section\">
    <h2>Our Services</h2>

    <div class=\"feature-card\">
      <h3>Student Directory</h3>
      <p>View the list of students.</p>
    </div>

    <div class=\"feature-card\">
      <h3>Student Profiles</h3>
      <p>Explore individual student details.</p>
    </div>

    <div class=\"feature-card\">
      <h3>Contact Us</h3>
      <p>Get in touch with our team.</p>
    </div>

  </section>

  <main class=\"site-main\">

  </main>

  <footer class=\"site-footer\">
    <p>Learning Drupal 11 and Twig</p>
    ";
        // line 94
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 94), "html", null, true);
        yield "
  </footer>

</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["logged_in", "page"]);        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/student_portal_theme/templates/page.html.twig";
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
    public function getDefaultEscapeStrategy(): string|false
    {
        return "html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  193 => 94,  157 => 60,  147 => 56,  143 => 54,  139 => 52,  137 => 51,  133 => 50,  129 => 49,  125 => 48,  121 => 47,  117 => 46,  113 => 45,  107 => 41,  103 => 40,  96 => 37,  94 => 30,  88 => 26,  84 => 23,  79 => 20,  74 => 17,  72 => 16,  63 => 11,  61 => 10,  53 => 6,  51 => 5,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/student_portal_theme/templates/page.html.twig", "/var/www/html/web/themes/custom/student_portal_theme/templates/page.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 5, "if" => 16, "for" => 40];
        static $filters = ["escape" => 6, "length" => 37, "upper" => 45];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "if", 2 => "for"],
                [0 => "escape", 1 => "length", 2 => "upper"],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            } elseif ($e instanceof SecurityNotAllowedTestError && isset($tests[$e->getTestName()])) {
                $e->setTemplateLine($tests[$e->getTestName()]);
            }

            throw $e;
        }

    }
}
