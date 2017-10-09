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
        $context["currentPath"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"));
        // line 43
        echo "    
        ";
        // line 44
        if ( !$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 45
            echo "             
             <a class=\"navbar-brand\" href=\"#\">Start Bootstrap</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto\">
               ";
            // line 52
            if (((isset($context["currentPath"]) ? $context["currentPath"] : $this->getContext($context, "currentPath")) == "/InsectProject/web/app_dev.php/home")) {
                // line 53
                echo "            <li class=\"nav-item active\">
                ";
            } else {
                // line 55
                echo "                   <li class=\"nav-item\"> 
                ";
            }
            // line 56
            echo " 
              <a class=\"nav-link\" href=\"";
            // line 57
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_insect_homepage");
            echo "\">Home
                <span class=\"sr-only\"> (current)</span> 
              </a>
            </li>
              ";
            // line 61
            if (((isset($context["currentPath"]) ? $context["currentPath"] : $this->getContext($context, "currentPath")) == "/InsectProject/web/app_dev.php/login")) {
                // line 62
                echo "            <li class=\"nav-item active\">
                ";
            } else {
                // line 64
                echo "                   <li class=\"nav-item\"> 
                ";
            }
            // line 65
            echo " 
              <a class=\"nav-link\" href=\"";
            // line 66
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Login
              </a>
              
            </li>
              ";
            // line 70
            if (((isset($context["currentPath"]) ? $context["currentPath"] : $this->getContext($context, "currentPath")) == "/InsectProject/web/app_dev.php/register/")) {
                // line 71
                echo "            <li class=\"nav-item active\">
                ";
            } else {
                // line 73
                echo "                   <li class=\"nav-item\"> 
                ";
            }
            // line 74
            echo " 
              <a class=\"nav-link\" href=\"";
            // line 75
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">Register</a>
            </li>
           
          </ul>
        </div>
            ";
        } else {
            // line 81
            echo "                 <a class=\"navbar-brand\" href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
             <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto\">
              ";
            // line 87
            if (((isset($context["currentPath"]) ? $context["currentPath"] : $this->getContext($context, "currentPath")) == "/InsectProject/web/app_dev.php/home")) {
                // line 88
                echo "            <li class=\"nav-item active\">
                ";
            } else {
                // line 90
                echo "                   <li class=\"nav-item\"> 
                ";
            }
            // line 92
            echo "              <a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_insect_homepage");
            echo "\">Home
                <span class=\"sr-only\">(current)</span>
              </a>
            </li>
              ";
            // line 96
            if (((isset($context["currentPath"]) ? $context["currentPath"] : $this->getContext($context, "currentPath")) == "/InsectProject/web/app_dev.php/listRequest")) {
                // line 97
                echo "            <li class=\"nav-item active\">
                ";
            } else {
                // line 99
                echo "                   <li class=\"nav-item\"> 
                ";
            }
            // line 101
            echo "              <a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_insect_listRequest");
            echo "\">Requests</a>
            </li>
              ";
            // line 103
            if (((isset($context["currentPath"]) ? $context["currentPath"] : $this->getContext($context, "currentPath")) == "/InsectProject/web/app_dev.php/listInsect")) {
                // line 104
                echo "            <li class=\"nav-item active\">
                ";
            } else {
                // line 106
                echo "                   <li class=\"nav-item\"> 
                ";
            }
            // line 108
            echo "              <a class=\"nav-link\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("project_insect_list");
            echo "\">Friends</a>
            </li>
            <li class=\"nav-item\">
              <a class=\"nav-link\" href=\"";
            // line 111
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">logout</a>
            </li>
          </ul>
        </div>    
            ";
        }
        // line 115
        echo "  
      </div>
    </nav>

    <!-- Page Content -->
    
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-12 text-center\">
        
         
          ";
        // line 126
        $this->displayBlock('content', $context, $blocks);
        // line 128
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

    // line 126
    public function block_content($context, array $blocks = array())
    {
        // line 127
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
        return array (  290 => 127,  287 => 126,  280 => 16,  276 => 15,  272 => 14,  269 => 13,  266 => 12,  260 => 10,  256 => 9,  250 => 7,  247 => 6,  221 => 128,  219 => 126,  206 => 115,  198 => 111,  191 => 108,  187 => 106,  183 => 104,  181 => 103,  175 => 101,  171 => 99,  167 => 97,  165 => 96,  157 => 92,  153 => 90,  149 => 88,  147 => 87,  137 => 81,  128 => 75,  125 => 74,  121 => 73,  117 => 71,  115 => 70,  108 => 66,  105 => 65,  101 => 64,  97 => 62,  95 => 61,  88 => 57,  85 => 56,  81 => 55,  77 => 53,  75 => 52,  66 => 45,  64 => 44,  61 => 43,  59 => 42,  34 => 19,  31 => 12,  29 => 6,  22 => 1,);
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
       
{% set currentPath = path(app.request.attributes.get('_route') )%}
    
        {% if not app.user %}
             
             <a class=\"navbar-brand\" href=\"#\">Start Bootstrap</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
          <span class=\"navbar-toggler-icon\"></span>
        </button>
        <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">
          <ul class=\"navbar-nav ml-auto\">
               {% if currentPath == '/InsectProject/web/app_dev.php/home' %}
            <li class=\"nav-item active\">
                {% else %}
                   <li class=\"nav-item\"> 
                {% endif %} 
              <a class=\"nav-link\" href=\"{{ path('project_insect_homepage')}}\">Home
                <span class=\"sr-only\"> (current)</span> 
              </a>
            </li>
              {% if currentPath == '/InsectProject/web/app_dev.php/login' %}
            <li class=\"nav-item active\">
                {% else %}
                   <li class=\"nav-item\"> 
                {% endif %} 
              <a class=\"nav-link\" href=\"{{ path('fos_user_security_login')}}\">Login
              </a>
              
            </li>
              {% if currentPath == '/InsectProject/web/app_dev.php/register/' %}
            <li class=\"nav-item active\">
                {% else %}
                   <li class=\"nav-item\"> 
                {% endif %} 
              <a class=\"nav-link\" href=\"{{ path('fos_user_registration_register')}}\">Register</a>
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
              {% if currentPath == '/InsectProject/web/app_dev.php/home' %}
            <li class=\"nav-item active\">
                {% else %}
                   <li class=\"nav-item\"> 
                {% endif %}
              <a class=\"nav-link\" href=\"{{ path('project_insect_homepage')}}\">Home
                <span class=\"sr-only\">(current)</span>
              </a>
            </li>
              {% if currentPath == '/InsectProject/web/app_dev.php/listRequest' %}
            <li class=\"nav-item active\">
                {% else %}
                   <li class=\"nav-item\"> 
                {% endif %}
              <a class=\"nav-link\" href=\"{{ path('project_insect_listRequest')}}\">Requests</a>
            </li>
              {% if currentPath == '/InsectProject/web/app_dev.php/listInsect' %}
            <li class=\"nav-item active\">
                {% else %}
                   <li class=\"nav-item\"> 
                {% endif %}
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
