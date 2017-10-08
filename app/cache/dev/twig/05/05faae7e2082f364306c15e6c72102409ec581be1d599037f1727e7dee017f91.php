<?php

/* ProjectInsectBundle:Home:home.html.twig */
class __TwigTemplate_b64ddc9df98877b2dba7e49716933e4f234160bd25fb708a862636501cd04d3b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("ProjectInsectBundle:Home:layout.html.twig", "ProjectInsectBundle:Home:home.html.twig", 2);
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
             
            ";
        // line 6
        if ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 7
            echo "                 <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
          <h1 class=\"mt-5\">A Bootstrap 4 Starter Template</h1>
          <p class=\"lead\">Complete with pre-defined file paths and responsive navigation!</p>
          <ul class=\"list-unstyled\">
            <li>Bootstrap 4.0.0-beta</li>
            <li>jQuery 3.2.1</li>
          </ul>
          ";
        } else {
            // line 17
            echo "              </br>
                            </br>

           <form action=\"";
            // line 20
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_insect_search");
            echo "\" method=\"post\">
               
                <div class=\"input-group\">
                 <input type=\"text\" name=\"search \"class=\"form-control-lg\" placeholder=\"Search insect\">
                    <div class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"submit\">
                    <i class=\"fa fa-search fa-2x\" aria-hidden=\"true\"></i>
                    </button>
                    </div>
                    </div>
            </form>
          ";
        }
        // line 32
        echo "        </div>
      </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ProjectInsectBundle:Home:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 32,  53 => 20,  48 => 17,  36 => 7,  34 => 6,  28 => 4,  11 => 2,);
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
             
            {% if not app.user %}
                 <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
          <h1 class=\"mt-5\">A Bootstrap 4 Starter Template</h1>
          <p class=\"lead\">Complete with pre-defined file paths and responsive navigation!</p>
          <ul class=\"list-unstyled\">
            <li>Bootstrap 4.0.0-beta</li>
            <li>jQuery 3.2.1</li>
          </ul>
          {% else %}
              </br>
                            </br>

           <form action=\"{{ path(\"project_insect_search\") }}\" method=\"post\">
               
                <div class=\"input-group\">
                 <input type=\"text\" name=\"search \"class=\"form-control-lg\" placeholder=\"Search insect\">
                    <div class=\"input-group-btn\">
                    <button class=\"btn btn-default\" type=\"submit\">
                    <i class=\"fa fa-search fa-2x\" aria-hidden=\"true\"></i>
                    </button>
                    </div>
                    </div>
            </form>
          {% endif %}
        </div>
      </div>
    </div>
{% endblock %}     
    ", "ProjectInsectBundle:Home:home.html.twig", "C:\\wamp64\\www\\InsectProject\\src\\Project\\InsectBundle/Resources/views/Home/home.html.twig");
    }
}
