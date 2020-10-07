<?php

/* ashshop/template/common/designs/hyper_positions_footer_top.twig */
class __TwigTemplate_17f2d4b77ab9bd20e63d6e315239ee36123205ae446247416a85fba3cb9f2b90 extends Twig_Template
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
        if ((isset($context["modules50"]) ? $context["modules50"] : null)) {
            // line 2
            echo "    <div id=\"pos-map\">
        <div class=\"container";
            // line 3
            echo (isset($context["pos_map"]) ? $context["pos_map"] : null);
            echo "\">
            <div class=\"row\">
                ";
            // line 5
            if ((isset($context["modules50"]) ? $context["modules50"] : null)) {
                // line 6
                echo "                        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["modules50"]) ? $context["modules50"] : null));
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
                // line 9
                echo "                ";
            }
            // line 10
            echo "            </div>
        </div>
    </div>
";
        }
        // line 13
        echo " 



";
    }

    public function getTemplateName()
    {
        return "ashshop/template/common/designs/hyper_positions_footer_top.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 13,  49 => 10,  46 => 9,  38 => 7,  31 => 6,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if (modules50) %}*/
/*     <div id="pos-map">*/
/*         <div class="container{{ pos_map }}">*/
/*             <div class="row">*/
/*                 {% if (modules50) %}*/
/*                         {% for module in modules50 %} */
/*                             {{ module }} */
/*                         {% endfor %}*/
/*                 {% endif %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endif %} */
/* */
/* */
/* */
/* */
