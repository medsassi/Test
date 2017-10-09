<?php

/* ProjectInsectBundle:Insect:InsectList.html.twig */
class __TwigTemplate_30c32075a1036c8f7ee236e2a9c6e73007c24f61df3564681a054982145bfd4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("ProjectInsectBundle:Home:layout.html.twig", "ProjectInsectBundle:Insect:InsectList.html.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProjectInsectBundle:Home:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        echo "  
      <h1>friends</h1>
<table class=\"table table-hover\">
       
        <tbody>
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 10
            echo "            <tr>
                <td>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            echo "</td>
                <td> 
                    <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_insect_deleteFriend", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">
                      delete
                    </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "        
";
    }

    public function getTemplateName()
    {
        return "ProjectInsectBundle:Insect:InsectList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 19,  49 => 13,  44 => 11,  41 => 10,  37 => 9,  28 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"ProjectInsectBundle:Home:layout.html.twig\" %}
 
 {% block content %}  
      <h1>friends</h1>
<table class=\"table table-hover\">
       
        <tbody>
        {% for entity in entities %}
            <tr>
                <td>{{ entity.username }}</td>
                <td> 
                    <a href=\"{{ path('project_insect_deleteFriend', { 'id': entity.id }) }}\">
                      delete
                    </a>
                </td>
            </tr>
        {% endfor %}
        
{% endblock %}", "ProjectInsectBundle:Insect:InsectList.html.twig", "C:\\wamp64\\www\\InsectProject\\src\\Project\\InsectBundle/Resources/views/Insect/InsectList.html.twig");
    }
}
