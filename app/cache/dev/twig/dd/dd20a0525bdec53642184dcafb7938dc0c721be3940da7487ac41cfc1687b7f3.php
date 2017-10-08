<?php

/* ProjectInsectBundle:Home:layout.html.twig */
class __TwigTemplate_8ef8cb72afadf80b0110dd404e1b3af895c0df8b50e97fcc187faf81e5209d52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheet' => array($this, 'block_stylesheet'),
            'javascript' => array($this, 'block_javascript'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>Bare - Start Bootstrap Template</title>
        ";
        // line 6
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascript', $context, $blocks);
        // line 19
        echo "   
        

    <!-- Custom styles for this template -->
    <style>
      body {
        padding-top: 54px;
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }

    </style>
    
    </head>
    <body>
       
      <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
      <div class=\"container\">
       
        ";
        // line 42
        if ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 43
            echo "             <a class=\"navbar-brand\" href=\"#\">Start Bootstrap</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item active\">
              <a class=\"nav-link\" href=\"";
            // line 50
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_insect_homepage");
            echo "\">Home
                <span class=\"sr-only\">(current)</span>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
            // line 55
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Login</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">Register</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Contact</a>
            </li>
          </ul>
        </div>
            ";
        } else {
            // line 66
            echo "                 <a class=\"navbar-brand\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
             <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item active\">
              <a class=\"nav-link\" href=\"";
            // line 73
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_insect_homepage");
            echo "\">Home
                <span class=\"sr-only\">(current)</span>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
            // line 78
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_insect_listRequest");
            echo "\">Requests</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
            // line 81
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_insect_list");
            echo "\">Friends</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
            // line 84
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">logout</a>
            </li>
          </ul>
        </div>    
            ";
        }
        // line 88
        echo "  
      </div>
    </nav>

    <!-- Page Content -->
    
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
        
         
          ";
        // line 99
        $this->displayBlock('content', $context, $blocks);
        // line 101
        echo "        </div>
      </div>
        
      
   

        
    </div>
    
   
    
        
        
        
        
            
        
            
            
    </body>
   
</html>
";
    }

    // line 6
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 7
        echo "             <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("css/freelancer.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
            <!-- Bootstrap core CSS -->
             <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
             <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\"/>
        ";
    }

    // line 12
    public function block_javascript($context, array $blocks = array())
    {
        // line 13
        echo "             <!-- Bootstrap core JavaScript -->
            <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("jquery/jquery.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>  
            <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("popper/popper.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>  
            <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>  
 
        ";
    }

    // line 99
    public function block_content($context, array $blocks = array())
    {
        // line 100
        echo "              ";
    }

    public function getTemplateName()
    {
        return "ProjectInsectBundle:Home:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 100,  215 => 99,  208 => 16,  204 => 15,  200 => 14,  197 => 13,  194 => 12,  188 => 10,  184 => 9,  178 => 7,  175 => 6,  149 => 101,  147 => 99,  134 => 88,  126 => 84,  120 => 81,  114 => 78,  106 => 73,  95 => 66,  84 => 58,  78 => 55,  70 => 50,  61 => 43,  59 => 42,  34 => 19,  31 => 12,  29 => 6,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>Bare - Start Bootstrap Template</title>
        {% block stylesheet %}
             <link href=\"{{ asset('css/freelancer.min.css')}}\" rel=\"stylesheet\" type=\"text/css\"/>
            <!-- Bootstrap core CSS -->
             <link href=\"{{ asset('bootstrap/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\"/>
             <link href=\"{{ asset('css/font-awesome.css')}}\" rel=\"stylesheet\" type=\"text/css\"/>
        {% endblock %}
        {% block javascript %}
             <!-- Bootstrap core JavaScript -->
            <script src=\"{{ asset('jquery/jquery.min.js')}}\" type=\"text/javascript\"></script>  
            <script src=\"{{ asset('popper/popper.min.js')}}\" type=\"text/javascript\"></script>  
            <script src=\"{{ asset('bootstrap/js/bootstrap.min.js')}}\" type=\"text/javascript\"></script>  
 
        {% endblock %}
   
        

    <!-- Custom styles for this template -->
    <style>
      body {
        padding-top: 54px;
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }

    </style>
    
    </head>
    <body>
       
      <!-- Navigation -->
    <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\">
      <div class=\"container\">
       
        {% if not app.user %}
             <a class=\"navbar-brand\" href=\"#\">Start Bootstrap</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item active\">
              <a class=\"nav-link\" href=\"{{ path('project_insect_homepage')}}\">Home
                <span class=\"sr-only\">(current)</span>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('fos_user_security_login')}}\">Login</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('fos_user_registration_register')}}\">Register</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"#\">Contact</a>
            </li>
          </ul>
        </div>
            {% else %}
                 <a class=\"navbar-brand\" href=\"#\">{{app.user.username }}</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
             <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto\">
            <li class=\"nav-item active\">
              <a class=\"nav-link\" href=\"{{ path('project_insect_homepage')}}\">Home
                <span class=\"sr-only\">(current)</span>
              </a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('project_insect_listRequest')}}\">Requests</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('project_insect_list')}}\">Friends</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"{{ path('fos_user_security_logout')}}\">logout</a>
            </li>
          </ul>
        </div>    
            {% endif %}  
      </div>
    </nav>

    <!-- Page Content -->
    
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
        
         
          {%  block content  %}
              {% endblock content %}
        </div>
      </div>
        
      
   

        
    </div>
    
   
    
        
        
        
        
            
        
            
            
    </body>
   
</html>
", "ProjectInsectBundle:Home:layout.html.twig", "C:\\wamp64\\www\\InsectProject\\src\\Project\\InsectBundle/Resources/views/Home/layout.html.twig");
    }
}
