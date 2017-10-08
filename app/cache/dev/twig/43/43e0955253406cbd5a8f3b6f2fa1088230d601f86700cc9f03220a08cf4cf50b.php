<?php

/* form/fields.html.twig */
class __TwigTemplate_319fba2b076352effde59319451f8672811ab6330c75f7c4895e2a30bd0e12eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('form_row', $context, $blocks);
        // line 16
        echo "
";
    }

    // line 2
    public function block_form_row($context, array $blocks = array())
    {
        // line 3
        ob_start();
        // line 4
        echo "    <div class=\"control-group\">
                <div class=\"form-group floating-label-form-group controls\">
        ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
      
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget', array("attr" => array("class" => "form-control")));
        echo "
      <p class=\"help-block text-danger\"></p>
                </div>
    
    </div>
  
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  41 => 8,  36 => 6,  32 => 4,  30 => 3,  27 => 2,  22 => 16,  20 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# empty Twig template #}
{% block form_row %}
{% spaceless %}
    <div class=\"control-group\">
                <div class=\"form-group floating-label-form-group controls\">
        {{ form_label(form) }}
      
        {{ form_widget(form, {'attr': {'class': 'form-control'}}) }}
      <p class=\"help-block text-danger\"></p>
                </div>
    
    </div>
  
{% endspaceless %}
{% endblock form_row %}

", "form/fields.html.twig", "C:\\wamp64\\www\\InsectProject\\app\\Resources\\views\\form\\fields.html.twig");
    }
}
