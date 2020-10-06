<?php

/* default/template/common/designs/hyper_positions_top_content.twig */
class __TwigTemplate_9e832bfdef6b22ebc27038c07fd8e47e203a29f7202f2752d16f313774909cf7 extends Twig_Template
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
        // line 1
        echo "<!-- SLIDER - 1 blocks -->
";
        // line 2
        if ((isset($context["modules5"]) ? $context["modules5"] : null)) {
            echo " 
    <div id=\"pos-slider\">
        <div class=\"container";
            // line 4
            echo (isset($context["pos_sliders"]) ? $context["pos_sliders"] : null);
            echo "\">
            <div class=\"row\">
                ";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["modules5"]) ? $context["modules5"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                echo " 
                    ";
                // line 7
                echo $context["module"];
                echo " 
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo " 
            </div>
        </div>
    </div>
";
        }
        // line 12
        echo " 

";
    }

    public function getTemplateName()
    {
        return "default/template/common/designs/hyper_positions_top_content.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 12,  46 => 8,  38 => 7,  32 => 6,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <!-- SLIDER - 1 blocks -->*/
/* {% if (modules5) %} */
/*     <div id="pos-slider">*/
/*         <div class="container{{ pos_sliders }}">*/
/*             <div class="row">*/
/*                 {% for module in modules5 %} */
/*                     {{ module }} */
/*                 {% endfor %} */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endif %} */
/* */
/* */
