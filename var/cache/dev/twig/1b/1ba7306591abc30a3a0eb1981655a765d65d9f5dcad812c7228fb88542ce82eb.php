<?php

/* blog/article.html.twig */
class __TwigTemplate_c0c5892e80cbb58e5aa3b8ebbadd5fe8b481cb349828ddd41a8868ebb3962d87 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/article.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/article.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "See or create articles";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "
    <div class=\"example-wrapper\">
        <h1>Create an article</h1>
        ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), 'form_start');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 12, $this->source); })()), "title", array()), 'row');
        echo "
        ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), "content", array()), 'row');
        echo "
        ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), "category", array()), 'row');
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->source); })()), "tags", array()), 'row');
        echo "
        <button class=\"btn\">";
        // line 16
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_label" does not exist.', 16, $this->source); })()), "Create")) : ("Create")), "html", null, true);
        echo "</button>
        ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->source); })()), 'form_end');
        echo "
    </div>

    <hr>

    <div style=\"padding-top: 5%;\">
    <h1>All articles : </h1>
    ";
        // line 24
        $context["idprec"] = "";
        // line 25
        echo "
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 26, $this->source); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 27
            echo "        ";
            if (((isset($context["idprec"]) || array_key_exists("idprec", $context) ? $context["idprec"] : (function () { throw new Twig_Error_Runtime('Variable "idprec" does not exist.', 27, $this->source); })()) != twig_get_attribute($this->env, $this->source, $context["article"], "id", array()))) {
                // line 28
                echo "
            <div>
            <h2>";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", array()), "html", null, true);
                echo " -</h2>
            <h3>Category : ";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "name", array()), "html", null, true);
                echo "</h3>
            <p>";
                // line 32
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "content", array()), "html", null, true);
                echo "</p>
            <h4>Tags :</h4>
            <ul><li> ";
                // line 34
                if ((twig_get_attribute($this->env, $this->source, $context["article"], "tag", array()) != "")) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tag", array("tag" => twig_get_attribute($this->env, $this->source, $context["article"], "tag", array()))), "html", null, true);
                    echo "\"> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "tag", array()), "html", null, true);
                    echo " </a>";
                }
                echo " </li></ul>
        ";
            } else {
                // line 36
                echo "            <ul><li> <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("tag", array("tag" => twig_get_attribute($this->env, $this->source, $context["article"], "tag", array()))), "html", null, true);
                echo "\"> ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "tag", array()), "html", null, true);
                echo " </a> </li></ul>

        ";
            }
            // line 39
            echo "            </div>

        ";
            // line 41
            $context["idprec"] = twig_get_attribute($this->env, $this->source, $context["article"], "id", array());
            // line 42
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
    <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_home");
        echo "\">
        <p>Back to blog menu.</p>
    </a>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 44,  213 => 43,  199 => 42,  197 => 41,  193 => 39,  184 => 36,  173 => 34,  168 => 32,  164 => 31,  158 => 30,  154 => 28,  151 => 27,  134 => 26,  131 => 25,  129 => 24,  119 => 17,  115 => 16,  111 => 15,  107 => 14,  103 => 13,  99 => 12,  95 => 11,  90 => 8,  81 => 7,  64 => 5,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}See or create articles{% endblock %}

{% block stylesheets %}{% endblock %}

{% block body %}

    <div class=\"example-wrapper\">
        <h1>Create an article</h1>
        {{ form_start(form) }}
        {{ form_row(form.title) }}
        {{ form_row(form.content) }}
        {{ form_row(form.category) }}
        {{ form_row(form.tags) }}
        <button class=\"btn\">{{ button_label|default('Create') }}</button>
        {{ form_end(form) }}
    </div>

    <hr>

    <div style=\"padding-top: 5%;\">
    <h1>All articles : </h1>
    {% set idprec = '' %}

    {% for article in articles %}
        {% if idprec!=article.id %}

            <div>
            <h2>{{ loop.index }} / {{ article.title }} -</h2>
            <h3>Category : {{ article.name }}</h3>
            <p>{{ article.content }}</p>
            <h4>Tags :</h4>
            <ul><li> {% if article.tag!='' %}<a href=\"{{ path('tag',  { tag : article.tag }) }}\"> {{ article.tag }} </a>{% endif %} </li></ul>
        {% else %}
            <ul><li> <a href=\"{{ path('tag',  { tag : article.tag }) }}\"> {{ article.tag }} </a> </li></ul>

        {% endif %}
            </div>

        {% set idprec = article.id %}
    {% endfor %}

    <a href=\"{{ path('blog_home') }}\">
        <p>Back to blog menu.</p>
    </a>
    </div>

{% endblock %}", "blog/article.html.twig", "/home/wilder/PhpstormProjects/SymfonyBlog/blog/templates/blog/article.html.twig");
    }
}
