<?php

/* ProjectInsectBundle:Friendship:list.html.twig */
class __TwigTemplate_44ad6c065be9b241357ffca094f2c53ca33bb6cc44a95b5d34c89e0d86b024e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ProjectInsectBundle:Home:layout.html.twig", "ProjectInsectBundle:Friendship:list.html.twig", 1);
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>friends request</h1>

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
                <ul>
                    <li>
                      <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_insect_addFriend", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">accept</a>
                    </li>
                    <li>
                      <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_insect_deleteRequest", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">refuse</a>  
                    </li>
                </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "        </tbody>
    </table>

    ";
    }

    public function getTemplateName()
    {
        return "ProjectInsectBundle:Friendship:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 24,  58 => 18,  52 => 15,  45 => 11,  42 => 10,  38 => 9,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"ProjectInsectBundle:Home:layout.html.twig\" %}
 
 {% block content %}
    <h1>friends request</h1>

  <table class=\"table table-hover\">
      
        <tbody>
        {% for entity in entities %}
            <tr>
                <td>{{ entity.username }}</td>
                 <td>
                <ul>
                    <li>
                      <a href=\"{{ path('project_insect_addFriend', { 'id': entity.id }) }}\">accept</a>
                    </li>
                    <li>
                      <a href=\"{{ path('project_insect_deleteRequest', { 'id': entity.id }) }}\">refuse</a>  
                    </li>
                </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    {% endblock %}
", "ProjectInsectBundle:Friendship:list.html.twig", "C:\\wamp64\\www\\InsectProject\\src\\Project\\InsectBundle/Resources/views/Friendship/list.html.twig");
    }
}
