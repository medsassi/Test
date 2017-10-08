<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_906036eaec7a72d6777c0cc00340607546036c81fe302f20a6a14af171440787 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
  <h1 class=\"mt-5\">Register</h1>

<form action=\"";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
    ";
        // line 6
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "form/fields.html.twig"));
        // line 7
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
   
    <div>
        <input type=\"submit\"  class=\"btn btn-success btn-lg\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Register", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
    
   
</form>

    
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  32 => 7,  30 => 6,  24 => 5,  19 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

  <h1 class=\"mt-5\">Register</h1>

<form action=\"{{ path('fos_user_registration_register') }}\" {{ form_enctype(form) }} method=\"POST\" class=\"fos_user_registration_register\">
    {% form_theme form 'form/fields.html.twig' %}
    {{ form_widget(form) }}
   
    <div>
        <input type=\"submit\"  class=\"btn btn-success btn-lg\" value=\"{{ 'Register'|trans }}\" />
    </div>
    
   
</form>

    
", "FOSUserBundle:Registration:register_content.html.twig", "C:\\wamp64\\www\\InsectProject\\app/Resources/FOSUserBundle/views/Registration/register_content.html.twig");
    }
}
