<?php

/* default/template/common/buyoneclick.twig */
class __TwigTemplate_eadeef9bbb12033c58e7615e08ba570ddad5f14feebe3e0bb89b5d1d99ad3e0d extends Twig_Template
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
        echo "<div class=\"modal-dialog\">
\t<div class=\"modal-content\">
\t\t<div class=\"modal-header\">
\t\t\t<button class=\"close\" type=\"button\" data-dismiss=\"modal\">×</button>
\t\t\t<h2 id=\"boc_order_title\" class=\"modal-title text-center\">";
        // line 5
        echo (isset($context["buyoneclick_title"]) ? $context["buyoneclick_title"] : null);
        echo "</h2>
\t\t</div>
\t\t<div class=\"modal-body\">
\t\t\t<form id=\"boc_form\" action=\"\" role=\"form\">
\t\t\t\t<fieldset>
\t\t\t\t\t";
        // line 10
        if ((isset($context["buyoneclick_exan_status"]) ? $context["buyoneclick_exan_status"] : null)) {
            // line 11
            echo "\t\t\t\t\t\t<div id=\"source\" style=\"display:none\">
\t\t\t\t\t\t\t<input id=\"sb_first_typ\" class=\"hidden\" type=\"text\" name=\"sb_first_typ\" value=\"\">
\t\t\t\t\t\t\t<input id=\"sb_first_src\" class=\"hidden\" type=\"text\" name=\"sb_first_src\" value=\"\">
\t\t\t\t\t\t\t<input id=\"sb_first_mdm\" class=\"hidden\" type=\"text\" name=\"sb_first_mdm\" value=\"\">
\t\t\t\t\t\t\t<input id=\"sb_first_cmp\" class=\"hidden\" type=\"text\" name=\"sb_first_cmp\" value=\"\">
\t\t\t\t\t\t\t<input id=\"sb_first_cnt\" class=\"hidden\" type=\"text\" name=\"sb_first_cnt\" value=\"\">
\t\t\t\t\t\t\t<input id=\"sb_first_trm\" class=\"hidden\" type=\"text\" name=\"sb_first_trm\" value=\"\">

\t\t\t\t\t\t\t<input id=\"sb_current_typ\" class=\"hidden\" type=\"text\" name=\"sb_current_typ\" value=\"\">
\t\t\t\t\t\t\t<input id=\"sb_current_src\" class=\"hidden\" type=\"text\" name=\"sb_current_src\" value=\"\">
\t\t\t\t\t\t\t<input id=\"sb_current_mdm\" class=\"hidden\" type=\"text\" name=\"sb_current_mdm\" value=\"\">
\t\t\t\t\t\t\t<input id=\"sb_current_cmp\" class=\"hidden\" type=\"text\" name=\"sb_current_cmp\" value=\"\">
\t\t\t\t\t\t\t<input id=\"sb_current_cnt\" class=\"hidden\" type=\"text\" name=\"sb_current_cnt\" value=\"\">
\t\t\t\t\t\t\t<input id=\"sb_current_trm\" class=\"hidden\" type=\"text\" name=\"sb_current_trm\" value=\"\">

\t\t\t\t\t\t\t<input id=\"sb_first_add_fd\" class=\"hidden\" type=\"text\" name=\"sb_first_add_fd\" value=\"\">
\t\t\t\t\t\t\t<input id=\"sb_first_add_ep\" class=\"hidden\" type=\"text\" name=\"sb_first_add_ep\" value=\"\">
\t\t\t\t\t\t\t<input id=\"sb_first_add_rf\" class=\"hidden\" type=\"text\" name=\"sb_first_add_rf\" value=\"\">

\t\t\t\t\t\t\t<input id=\"sb_current_add_fd\" class=\"hidden\" type=\"text\" name=\"sb_current_add_fd\" value=\"\">
\t\t\t\t\t\t\t<input id=\"sb_current_add_ep\" class=\"hidden\" type=\"text\" name=\"sb_current_add_ep\" value=\"\">
\t\t\t\t\t\t\t<input id=\"sb_current_add_rf\" class=\"hidden\" type=\"text\" name=\"sb_current_add_rf\" value=\"\">

\t\t\t\t\t\t\t<input id=\"sb_session_pgs\" class=\"hidden\" type=\"text\" name=\"sb_session_pgs\" value=\"\">
\t\t\t\t\t\t\t<input id=\"sb_session_cpg\" class=\"hidden\" type=\"text\" name=\"sb_session_cpg\" value=\"\">

\t\t\t\t\t\t\t<input id=\"sb_udata_vst\" class=\"hidden\" type=\"text\" name=\"sb_udata_vst\" value=\"\">
\t\t\t\t\t\t\t<input id=\"sb_udata_uip\" class=\"hidden\" type=\"text\" name=\"sb_udata_uip\" value=\"\">
\t\t\t\t\t\t\t<input id=\"sb_udata_uag\" class=\"hidden\" type=\"text\" name=\"sb_udata_uag\" value=\"\">
\t\t\t\t\t\t\t<input id=\"sb_promo_code\" class=\"hidden\" type=\"text\" name=\"sb_promo_code\" value=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 43
        echo "\t\t\t\t\t<div id=\"boc_product_field\" class=\"col-pd-15 col-mb-10\">
\t\t\t\t\t\t<div class=\"row boc_product_info\">
\t\t\t\t\t\t\t";
        // line 45
        if ((isset($context["product"]) ? $context["product"] : null)) {
            // line 46
            echo "\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-3\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 47
            echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "thumb", array());
            echo "\" alt=\"";
            echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array());
            echo "\" title=\"";
            echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array());
            echo "\" class=\"img-responsive\" />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-9 text-right\">
\t\t\t\t\t\t\t\t\t<div class=\"row\" style=\"width: calc(100% + 30px);\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"caption\" style=\"padding-right:1em;\">
\t\t\t\t\t\t\t\t\t\t\t\t<p class=\"h4\" style=\"margin-bottom:0; line-height:1;\">";
            // line 53
            echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "name", array());
            echo "</p>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 54
            if ($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "option", array())) {
                // line 55
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"product_options\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 56
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : null), "option", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 57
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t- <small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 58
                    echo $this->getAttribute($context["option"], "name", array());
                    echo " ";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                    // line 59
                    if ($this->getAttribute($context["option"], "value_price", array())) {
                        echo " (";
                        echo " ";
                        echo $this->getAttribute($context["option"], "value_price_prefix", array());
                        echo " ";
                        echo $this->getAttribute($context["option"], "value_price", array());
                        echo " ";
                        echo ")";
                        echo " ";
                    }
                    // line 60
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 65
            echo "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 col-sm-6\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"h4\" style=\"margin-bottom:0;\">x ";
            // line 68
            echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "quantity", array());
            echo " = ";
            echo $this->getAttribute((isset($context["product"]) ? $context["product"] : null), "total", array());
            echo "</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        } else {
            // line 73
            echo "\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t<p class=\"text-center\">";
            // line 74
            echo (isset($context["text_empty"]) ? $context["text_empty"] : null);
            echo "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 77
        echo "\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 78
        if (((isset($context["stock"]) ? $context["stock"] : null) != "")) {
            // line 79
            echo "\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-xs-12\"><div class=\"text-left text-danger\"><i class=\"fa fa-exclamation-circle\"></i> <strong>";
            // line 80
            echo (isset($context["stock"]) ? $context["stock"] : null);
            echo "</strong></p></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 83
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"col-pd-15\"><hr /></div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"col-pd-15\">
\t\t\t\t\t\t<div style=\"display:none\">
\t\t\t\t\t\t\t<input id=\"boc_product_id\" type=\"text\" name=\"boc_product_id\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 91
        if ((isset($context["buyoneclick_field1_status"]) ? $context["buyoneclick_field1_status"] : null)) {
            // line 92
            echo "\t\t\t\t\t\t\t<div class=\"col-mb-10 input-group";
            echo (((isset($context["buyoneclick_field1_required"]) ? $context["buyoneclick_field1_required"] : null)) ? (" has-warning") : (""));
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-fw fa-user\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"boc_name\" class=\"form-control";
            // line 94
            echo (((isset($context["buyoneclick_field1_required"]) ? $context["buyoneclick_field1_required"] : null)) ? (" required") : (""));
            echo "\" type=\"text\" name=\"boc_name\" placeholder=\"";
            echo (isset($context["buyoneclick_field1_title"]) ? $context["buyoneclick_field1_title"] : null);
            echo "\" value=\"";
            if ((array_key_exists("customer_info", $context) && (($this->getAttribute((isset($context["customer_info"]) ? $context["customer_info"] : null), "firstname", array()) != "") || ($this->getAttribute((isset($context["customer_info"]) ? $context["customer_info"] : null), "lastname", array()) != "")))) {
                echo $this->getAttribute((isset($context["customer_info"]) ? $context["customer_info"] : null), "firstname", array());
                echo " ";
                echo $this->getAttribute((isset($context["customer_info"]) ? $context["customer_info"] : null), "lastname", array());
            }
            echo "\" >
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 97
        echo "\t\t\t\t\t\t";
        if ((isset($context["buyoneclick_field2_status"]) ? $context["buyoneclick_field2_status"] : null)) {
            // line 98
            echo "\t\t\t\t\t\t\t<div class=\"col-mb-10 input-group";
            echo (((isset($context["buyoneclick_field2_required"]) ? $context["buyoneclick_field2_required"] : null)) ? (" has-warning") : (""));
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-fw fa-phone-square\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"boc_phone\" class=\"form-control";
            // line 100
            echo (((isset($context["buyoneclick_field2_required"]) ? $context["buyoneclick_field2_required"] : null)) ? (" required") : (""));
            echo "\" type=\"tel\" name=\"boc_phone\" placeholder=\"";
            if ((isset($context["buyoneclick_validation_type"]) ? $context["buyoneclick_validation_type"] : null)) {
                echo (isset($context["buyoneclick_validation_type"]) ? $context["buyoneclick_validation_type"] : null);
            } else {
                echo (isset($context["buyoneclick_field2_title"]) ? $context["buyoneclick_field2_title"] : null);
            }
            echo "\" ";
            if ((isset($context["buyoneclick_validation_type"]) ? $context["buyoneclick_validation_type"] : null)) {
                echo " data-pattern=\"true\"";
            } else {
                echo " data-pattern=\"false\"";
                echo " ";
            }
            echo " value=\"";
            if ((array_key_exists("customer_info", $context) && ($this->getAttribute((isset($context["customer_info"]) ? $context["customer_info"] : null), "telephone", array()) != ""))) {
                echo $this->getAttribute((isset($context["customer_info"]) ? $context["customer_info"] : null), "telephone", array());
                echo " ";
            }
            echo "\" >
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 103
        echo "\t\t\t\t\t\t";
        if ((isset($context["buyoneclick_field3_status"]) ? $context["buyoneclick_field3_status"] : null)) {
            // line 104
            echo "\t\t\t\t\t\t\t<div class=\"col-mb-10 input-group";
            echo (((isset($context["buyoneclick_field3_required"]) ? $context["buyoneclick_field3_required"] : null)) ? (" has-warning") : (""));
            echo "\">
\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><i class=\"fa fa-fw fa-envelope\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t\t\t\t<input id=\"boc_email\" class=\"form-control";
            // line 106
            echo (((isset($context["buyoneclick_field3_required"]) ? $context["buyoneclick_field3_required"] : null)) ? (" required") : (""));
            echo "\" type=\"email\" name=\"boc_email\" placeholder=\"";
            echo (isset($context["buyoneclick_field3_title"]) ? $context["buyoneclick_field3_title"] : null);
            echo "\" value=\"";
            echo ((((isset($context["customer_info"]) ? $context["customer_info"] : null) && ($this->getAttribute((isset($context["customer_info"]) ? $context["customer_info"] : null), "email", array()) != ""))) ? ($this->getAttribute((isset($context["customer_info"]) ? $context["customer_info"] : null), "email", array())) : (""));
            echo "\" >
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 109
        echo "\t\t\t\t\t\t";
        if ((isset($context["buyoneclick_field4_status"]) ? $context["buyoneclick_field4_status"] : null)) {
            // line 110
            echo "\t\t\t\t\t\t\t<div class=\"col-mb-10 form-group";
            echo (((isset($context["buyoneclick_field4_required"]) ? $context["buyoneclick_field4_required"] : null)) ? (" has-warning") : (""));
            echo "\">
\t\t\t\t\t\t\t\t<textarea id=\"boc_message\" class=\"form-control";
            // line 111
            echo (((isset($context["buyoneclick_field4_required"]) ? $context["buyoneclick_field4_required"] : null)) ? (" required") : (""));
            echo "\" name=\"boc_message\" rows=\"3\" placeholder=\"";
            echo (isset($context["buyoneclick_field4_title"]) ? $context["buyoneclick_field4_title"] : null);
            echo "\" ></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 114
        echo "\t\t\t\t\t\t";
        if ((isset($context["buyoneclick_agree_status"]) ? $context["buyoneclick_agree_status"] : null)) {
            // line 115
            echo "\t\t\t\t\t\t\t<div class=\"col-mb-10 checkbox\">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input id=\"boc_agree\" type=\"checkbox\" name=\"boc_agree\" class=\"required\" value=\"1\"> ";
            // line 117
            echo (isset($context["buyoneclick_text_agree"]) ? $context["buyoneclick_text_agree"] : null);
            echo "
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        }
        // line 121
        echo "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"col-pd-15\"><hr /></div>
\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t<div class=\"col-pd-15\">
\t\t\t\t\t\t<button type=\"submit\" id=\"boc_submit\" class=\"btn btn-lg btn-block btn-primary\" style=\"max-width:250px; margin:0 auto;\" onClick=\"clickAnalyticsSend(); return true;\">";
        // line 126
        echo (isset($context["buyoneclick_button_order"]) ? $context["buyoneclick_button_order"] : null);
        echo "</button>
\t\t\t\t\t</div>
\t\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/common/buyoneclick.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 126,  288 => 121,  281 => 117,  277 => 115,  274 => 114,  266 => 111,  261 => 110,  258 => 109,  248 => 106,  242 => 104,  239 => 103,  215 => 100,  209 => 98,  206 => 97,  192 => 94,  186 => 92,  184 => 91,  174 => 83,  168 => 80,  165 => 79,  163 => 78,  160 => 77,  154 => 74,  151 => 73,  141 => 68,  136 => 65,  132 => 63,  124 => 60,  113 => 59,  107 => 58,  104 => 57,  100 => 56,  97 => 55,  95 => 54,  91 => 53,  78 => 47,  75 => 46,  73 => 45,  69 => 43,  35 => 11,  33 => 10,  25 => 5,  19 => 1,);
    }
}
/* <div class="modal-dialog">*/
/* 	<div class="modal-content">*/
/* 		<div class="modal-header">*/
/* 			<button class="close" type="button" data-dismiss="modal">×</button>*/
/* 			<h2 id="boc_order_title" class="modal-title text-center">{{buyoneclick_title}}</h2>*/
/* 		</div>*/
/* 		<div class="modal-body">*/
/* 			<form id="boc_form" action="" role="form">*/
/* 				<fieldset>*/
/* 					{% if buyoneclick_exan_status %}*/
/* 						<div id="source" style="display:none">*/
/* 							<input id="sb_first_typ" class="hidden" type="text" name="sb_first_typ" value="">*/
/* 							<input id="sb_first_src" class="hidden" type="text" name="sb_first_src" value="">*/
/* 							<input id="sb_first_mdm" class="hidden" type="text" name="sb_first_mdm" value="">*/
/* 							<input id="sb_first_cmp" class="hidden" type="text" name="sb_first_cmp" value="">*/
/* 							<input id="sb_first_cnt" class="hidden" type="text" name="sb_first_cnt" value="">*/
/* 							<input id="sb_first_trm" class="hidden" type="text" name="sb_first_trm" value="">*/
/* */
/* 							<input id="sb_current_typ" class="hidden" type="text" name="sb_current_typ" value="">*/
/* 							<input id="sb_current_src" class="hidden" type="text" name="sb_current_src" value="">*/
/* 							<input id="sb_current_mdm" class="hidden" type="text" name="sb_current_mdm" value="">*/
/* 							<input id="sb_current_cmp" class="hidden" type="text" name="sb_current_cmp" value="">*/
/* 							<input id="sb_current_cnt" class="hidden" type="text" name="sb_current_cnt" value="">*/
/* 							<input id="sb_current_trm" class="hidden" type="text" name="sb_current_trm" value="">*/
/* */
/* 							<input id="sb_first_add_fd" class="hidden" type="text" name="sb_first_add_fd" value="">*/
/* 							<input id="sb_first_add_ep" class="hidden" type="text" name="sb_first_add_ep" value="">*/
/* 							<input id="sb_first_add_rf" class="hidden" type="text" name="sb_first_add_rf" value="">*/
/* */
/* 							<input id="sb_current_add_fd" class="hidden" type="text" name="sb_current_add_fd" value="">*/
/* 							<input id="sb_current_add_ep" class="hidden" type="text" name="sb_current_add_ep" value="">*/
/* 							<input id="sb_current_add_rf" class="hidden" type="text" name="sb_current_add_rf" value="">*/
/* */
/* 							<input id="sb_session_pgs" class="hidden" type="text" name="sb_session_pgs" value="">*/
/* 							<input id="sb_session_cpg" class="hidden" type="text" name="sb_session_cpg" value="">*/
/* */
/* 							<input id="sb_udata_vst" class="hidden" type="text" name="sb_udata_vst" value="">*/
/* 							<input id="sb_udata_uip" class="hidden" type="text" name="sb_udata_uip" value="">*/
/* 							<input id="sb_udata_uag" class="hidden" type="text" name="sb_udata_uag" value="">*/
/* 							<input id="sb_promo_code" class="hidden" type="text" name="sb_promo_code" value="">*/
/* 						</div>*/
/* 					{% endif %}*/
/* 					<div id="boc_product_field" class="col-pd-15 col-mb-10">*/
/* 						<div class="row boc_product_info">*/
/* 							{% if product %}*/
/* 								<div class="col-xs-12 col-sm-3">*/
/* 									<img src="{{product.thumb}}" alt="{{product.name}}" title="{{product.name}}" class="img-responsive" />*/
/* 								</div>*/
/* 								<div class="col-xs-12 col-sm-9 text-right">*/
/* 									<div class="row" style="width: calc(100% + 30px);">*/
/* 										<div class="col-xs-12 col-sm-6">*/
/* 											<div class="caption" style="padding-right:1em;">*/
/* 												<p class="h4" style="margin-bottom:0; line-height:1;">{{product.name}}</p>*/
/* 												{% if product.option %}*/
/* 													<div class="product_options">*/
/* 														{% for option in product.option %}*/
/* 														- <small>*/
/* 															{{option.name}} {{option.value}}*/
/* 															{% if option.value_price %}{{' ('}} {{option.value_price_prefix}} {{option.value_price}} {{')'}} {% endif %}*/
/* 														</small>*/
/* 														<br />*/
/* 														{% endfor %}*/
/* 													</div>*/
/* 												{% endif %}*/
/* 											</div>*/
/* 										</div>*/
/* 										<div class="col-xs-12 col-sm-6">*/
/* 											<div class="h4" style="margin-bottom:0;">x {{product.quantity}} = {{product.total}}</div>*/
/* 										</div>*/
/* 									</div>*/
/* 								</div>*/
/* 							{% else %}*/
/* 								<div class="col-xs-12">*/
/* 									<p class="text-center">{{text_empty}}</p>*/
/* 								</div>*/
/* 							{% endif %}*/
/* 						</div>*/
/* 						{% if stock != '' %}*/
/* 							<div class="row">*/
/* 								<div class="col-xs-12"><div class="text-left text-danger"><i class="fa fa-exclamation-circle"></i> <strong>{{stock}}</strong></p></div>*/
/* 							</div>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 					<div class="clearfix"></div>*/
/* 					<div class="col-pd-15"><hr /></div>*/
/* 					<div class="clearfix"></div>*/
/* 					<div class="col-pd-15">*/
/* 						<div style="display:none">*/
/* 							<input id="boc_product_id" type="text" name="boc_product_id">*/
/* 						</div>*/
/* 						{% if buyoneclick_field1_status %}*/
/* 							<div class="col-mb-10 input-group{{buyoneclick_field1_required ? ' has-warning'}}">*/
/* 								<span class="input-group-addon"><i class="fa fa-fw fa-user" aria-hidden="true"></i></span>*/
/* 								<input id="boc_name" class="form-control{{buyoneclick_field1_required ? ' required'}}" type="text" name="boc_name" placeholder="{{buyoneclick_field1_title}}" value="{% if customer_info is defined and (customer_info.firstname != '' or customer_info.lastname != '') %}{{customer_info.firstname}} {{customer_info.lastname}}{% endif %}" >*/
/* 							</div>*/
/* 						{% endif %}*/
/* 						{% if buyoneclick_field2_status %}*/
/* 							<div class="col-mb-10 input-group{{buyoneclick_field2_required ? ' has-warning'}}">*/
/* 								<span class="input-group-addon"><i class="fa fa-fw fa-phone-square" aria-hidden="true"></i></span>*/
/* 								<input id="boc_phone" class="form-control{{buyoneclick_field2_required ? ' required'}}" type="tel" name="boc_phone" placeholder="{% if buyoneclick_validation_type %}{{buyoneclick_validation_type}}{% else %}{{buyoneclick_field2_title}}{% endif %}" {% if buyoneclick_validation_type %}{{' data-pattern="true"'}}{% else %}{{' data-pattern="false"'}} {% endif %} value="{% if customer_info is defined and customer_info.telephone != '' %}{{customer_info.telephone}} {% endif %}" >*/
/* 							</div>*/
/* 						{% endif %}*/
/* 						{% if buyoneclick_field3_status %}*/
/* 							<div class="col-mb-10 input-group{{buyoneclick_field3_required ? ' has-warning'}}">*/
/* 								<span class="input-group-addon"><i class="fa fa-fw fa-envelope" aria-hidden="true"></i></span>*/
/* 								<input id="boc_email" class="form-control{{buyoneclick_field3_required ? ' required'}}" type="email" name="boc_email" placeholder="{{buyoneclick_field3_title}}" value="{{customer_info and customer_info.email != '' ? customer_info.email}}" >*/
/* 							</div>*/
/* 						{% endif %}*/
/* 						{% if buyoneclick_field4_status %}*/
/* 							<div class="col-mb-10 form-group{{buyoneclick_field4_required ? ' has-warning'}}">*/
/* 								<textarea id="boc_message" class="form-control{{buyoneclick_field4_required ? ' required'}}" name="boc_message" rows="3" placeholder="{{buyoneclick_field4_title}}" ></textarea>*/
/* 							</div>*/
/* 						{% endif %}*/
/* 						{% if buyoneclick_agree_status %}*/
/* 							<div class="col-mb-10 checkbox">*/
/* 								<label>*/
/* 									<input id="boc_agree" type="checkbox" name="boc_agree" class="required" value="1"> {{buyoneclick_text_agree}}*/
/* 								</label>*/
/* 							</div>*/
/* 						{% endif %}*/
/* 					</div>*/
/* 					<div class="clearfix"></div>*/
/* 					<div class="col-pd-15"><hr /></div>*/
/* 					<div class="clearfix"></div>*/
/* 					<div class="col-pd-15">*/
/* 						<button type="submit" id="boc_submit" class="btn btn-lg btn-block btn-primary" style="max-width:250px; margin:0 auto;" onClick="clickAnalyticsSend(); return true;">{{buyoneclick_button_order}}</button>*/
/* 					</div>*/
/* 				</fieldset>*/
/* 			</form>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
