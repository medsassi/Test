<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_0c3651f2ed16c6835ce1fa1181a6bf8f88106807032ee323d4fa789afe0c40b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "     <h1 class=\"mt-5\">Login</h1>
";
        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 10
        echo "
<form action=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
    <div class=\"control-group\">
                <div class=\"form-group floating-label-form-group controls\">
                   <label for=\"username\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                   <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"username\" required=\"required\" />
                  <p class=\"help-block text-danger\"></p>
                </div>
              </div>
    
    <div class=\"control-group\">
                <div class=\"form-group floating-label-form-group controls\">
                  <label for=\"password\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                  <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"password\" />
                  <p class=\"help-block text-danger\"></p>
                </div>
              </div>
    
    
     <div class=\"form-group\">
                <button type=\"submit\" class=\"btn btn-success btn-lg\" id=\"_submit\" name=\"_submi\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\">Login </button >
              </div>
     
    
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 31,  69 => 23,  59 => 16,  55 => 15,  49 => 12,  45 => 11,  42 => 10,  36 => 8,  34 => 7,  31 => 6,  28 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
     <h1 class=\"mt-5\">Login</h1>
{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    <div class=\"control-group\">
                <div class=\"form-group floating-label-form-group controls\">
                   <label for=\"username\">{{ 'security.login.username'|trans }}</label>
                   <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" class=\"form-control\" placeholder=\"username\" required=\"required\" />
                  <p class=\"help-block text-danger\"></p>
                </div>
              </div>
    
    <div class=\"control-group\">
                <div class=\"form-group floating-label-form-group controls\">
                  <label for=\"password\">{{ 'security.login.password'|trans }}</label>
                  <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-control\" placeholder=\"password\" />
                  <p class=\"help-block text-danger\"></p>
                </div>
              </div>
    
    
     <div class=\"form-group\">
                <button type=\"submit\" class=\"btn btn-success btn-lg\" id=\"_submit\" name=\"_submi\" value=\"{{ 'security.login.submit'|trans }}\">Login </button >
              </div>
     
    
</form>
{% endblock fos_user_content %}
", "FOSUserBundle:Security:login.html.twig", "C:\\wamp64\\www\\InsectProject\\app/Resources/FOSUserBundle/views/Security/login.html.twig");
    }
}
