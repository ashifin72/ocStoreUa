<?php

/* default/template/common/footer.twig */
class __TwigTemplate_a1ab22dad6e63b566c3be786aa9b2f92e6dea593b2fc8d3ecc42c4a9978114a3 extends Twig_Template
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
        echo (isset($context["hyper_positions_footer_top"]) ? $context["hyper_positions_footer_top"] : null);
        echo "
<footer>
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 5
        if ((isset($context["informations"]) ? $context["informations"] : null)) {
            // line 6
            echo "      <div class=\"col-sm-3\">
        <h5>";
            // line 7
            echo (isset($context["text_information"]) ? $context["text_information"] : null);
            echo "</h5>
        <ul class=\"list-unstyled\">
         ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 10
                echo "          <li><a href=\"";
                echo $this->getAttribute($context["information"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "        </ul>
      </div>
      ";
        }
        // line 15
        echo "      <div class=\"col-sm-3\">
        <h5>";
        // line 16
        echo (isset($context["text_service"]) ? $context["text_service"] : null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 18
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\">";
        echo (isset($context["text_contact"]) ? $context["text_contact"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 19
        echo (isset($context["return"]) ? $context["return"] : null);
        echo "\">";
        echo (isset($context["text_return"]) ? $context["text_return"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 20
        echo (isset($context["sitemap"]) ? $context["sitemap"] : null);
        echo "\">";
        echo (isset($context["text_sitemap"]) ? $context["text_sitemap"] : null);
        echo "</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>";
        // line 24
        echo (isset($context["text_extra"]) ? $context["text_extra"] : null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 26
        echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
        echo "\">";
        echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 27
        echo (isset($context["voucher"]) ? $context["voucher"] : null);
        echo "\">";
        echo (isset($context["text_voucher"]) ? $context["text_voucher"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 28
        echo (isset($context["affiliate"]) ? $context["affiliate"] : null);
        echo "\">";
        echo (isset($context["text_affiliate"]) ? $context["text_affiliate"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 29
        echo (isset($context["special"]) ? $context["special"] : null);
        echo "\">";
        echo (isset($context["text_special"]) ? $context["text_special"] : null);
        echo "</a></li>
        </ul>
      </div>
      <div class=\"col-sm-3\">
        <h5>";
        // line 33
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</h5>
        <ul class=\"list-unstyled\">
          <li><a href=\"";
        // line 35
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 36
        echo (isset($context["order"]) ? $context["order"] : null);
        echo "\">";
        echo (isset($context["text_order"]) ? $context["text_order"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 37
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</a></li>
          <li><a href=\"";
        // line 38
        echo (isset($context["newsletter"]) ? $context["newsletter"] : null);
        echo "\">";
        echo (isset($context["text_newsletter"]) ? $context["text_newsletter"] : null);
        echo "</a></li>
        </ul>
      </div>
    </div>
    <hr>
    <p>";
        // line 43
        echo (isset($context["powered"]) ? $context["powered"] : null);
        echo "</p>
  </div>
</footer>
";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 47
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->

\t\t\t\t";
        // line 54
        if ((((isset($context["buyoneclick_status_product"]) ? $context["buyoneclick_status_product"] : null) || (isset($context["buyoneclick_status_category"]) ? $context["buyoneclick_status_category"] : null)) || (isset($context["buyoneclick_status_module"]) ? $context["buyoneclick_status_module"] : null))) {
            // line 55
            echo "\t\t\t\t\t<div id=\"boc_order\" class=\"modal fade\">
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"boc_success\" class=\"modal fade\">
\t\t\t\t\t\t<div class=\"modal-dialog\">
\t\t\t\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t\t\t\t<div class=\"text-center\">";
            // line 61
            echo (isset($context["buyoneclick_success_field"]) ? $context["buyoneclick_success_field"] : null);
            echo "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<script type=\"text/javascript\">
\t\t\t\t\t\t\$('body').on('click', '.boc_order_btn', function(event) {
\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\turl: 'index.php?route=extension/module/buyoneclick/common/buyoneclick/info',
\t\t\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\t\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\t\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t\t\t\t\$(event.target).button('loading');
\t\t\t\t\t\t\t\t\t\$('#boc_order').empty();
\t\t\t\t\t\t\t\t\t\$('#boc_order').append('<div class=\"lds-rolling\"><div></div></div>');
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\t\t\t\$(event.target).button('reset');
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\t\t\t\$('.alert, .text-danger').remove();
\t\t\t\t\t\t\t\t\t\$('.form-group').removeClass('has-error');
\t\t\t\t\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\t\t\t\tif (json['error']['option']) {
\t\t\t\t\t\t\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\t\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));
\t\t\t\t\t\t\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\t\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t\t\t\t\t\t\t}

\t\t\t\t\t\t\t\t\t\t// Highlight any found errors
\t\t\t\t\t\t\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t\$(\"#boc_order\").modal('show');
\t\t\t\t\t\t\t\t\t\t\$('#boc_order').empty();
\t\t\t\t\t\t\t\t\t\t\$('#boc_order').html(json['success']);
\t\t\t\t\t\t\t\t\t\t";
            // line 106
            if ((isset($context["buyoneclick_exan_status"]) ? $context["buyoneclick_exan_status"] : null)) {
                echo " valueData(); ";
            }
            // line 107
            echo "\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\t\tconsole.log(thrownError + \" | \" + xhr.statusText + \" | \" + xhr.responseText);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});
\t\t\t\t\t\t\$('body').on('click', '.boc_order_category_btn', function(event) {
\t\t\t\t\t\t\tvar for_post = {};
\t\t\t\t\t\t\tfor_post.product_id = \$(this).attr('data-product_id');
\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\turl: 'index.php?route=extension/module/buyoneclick/common/buyoneclick/info',
\t\t\t\t\t\t\t\ttype: 'post',
\t\t\t\t\t\t\t\tdata: for_post,
\t\t\t\t\t\t\t\tdataType: 'json',
\t\t\t\t\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\t\t\t\t\$(event.target).button('loading');
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\t\t\t\$(event.target).button('reset');
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\t\t\t\t\$('.alert, .text-danger').remove();
\t\t\t\t\t\t\t\t\t\$('.form-group').removeClass('has-error');
\t\t\t\t\t\t\t\t\tif (json['redirect']) {
\t\t\t\t\t\t\t\t\t\tlocation = json['redirect'];
\t\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\t// console.log(json);
\t\t\t\t\t\t\t\t\t\t\$(\"#boc_order\").modal('show');
\t\t\t\t\t\t\t\t\t\t\$('#boc_order').empty();
\t\t\t\t\t\t\t\t\t\t\$('#boc_order').html(json['success']);
\t\t\t\t\t\t\t\t\t\t";
            // line 138
            if ((isset($context["buyoneclick_exan_status"]) ? $context["buyoneclick_exan_status"] : null)) {
                echo " valueData(); ";
            }
            // line 139
            echo "\t\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\t\tconsole.log(thrownError + \" | \" + xhr.statusText + \" | \" + xhr.responseText);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});
\t\t\t\t\t\t});
\t\t\t\t\t</script>
\t\t\t\t";
        }
        // line 148
        echo "\t\t\t
</body></html>";
    }

    public function getTemplateName()
    {
        return "default/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 148,  275 => 139,  271 => 138,  238 => 107,  234 => 106,  186 => 61,  178 => 55,  176 => 54,  169 => 49,  160 => 47,  156 => 46,  150 => 43,  140 => 38,  134 => 37,  128 => 36,  122 => 35,  117 => 33,  108 => 29,  102 => 28,  96 => 27,  90 => 26,  85 => 24,  76 => 20,  70 => 19,  64 => 18,  59 => 16,  56 => 15,  51 => 12,  40 => 10,  36 => 9,  31 => 7,  28 => 6,  26 => 5,  19 => 1,);
    }
}
/* {{ hyper_positions_footer_top }}*/
/* <footer>*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       {% if informations %}*/
/*       <div class="col-sm-3">*/
/*         <h5>{{ text_information }}</h5>*/
/*         <ul class="list-unstyled">*/
/*          {% for information in informations %}*/
/*           <li><a href="{{ information.href }}">{{ information.title }}</a></li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       </div>*/
/*       {% endif %}*/
/*       <div class="col-sm-3">*/
/*         <h5>{{ text_service }}</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ contact }}">{{ text_contact }}</a></li>*/
/*           <li><a href="{{ return }}">{{ text_return }}</a></li>*/
/*           <li><a href="{{ sitemap }}">{{ text_sitemap }}</a></li>*/
/*         </ul>*/
/*       </div>*/
/*       <div class="col-sm-3">*/
/*         <h5>{{ text_extra }}</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ manufacturer }}">{{ text_manufacturer }}</a></li>*/
/*           <li><a href="{{ voucher }}">{{ text_voucher }}</a></li>*/
/*           <li><a href="{{ affiliate }}">{{ text_affiliate }}</a></li>*/
/*           <li><a href="{{ special }}">{{ text_special }}</a></li>*/
/*         </ul>*/
/*       </div>*/
/*       <div class="col-sm-3">*/
/*         <h5>{{ text_account }}</h5>*/
/*         <ul class="list-unstyled">*/
/*           <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*           <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*           <li><a href="{{ wishlist }}">{{ text_wishlist }}</a></li>*/
/*           <li><a href="{{ newsletter }}">{{ text_newsletter }}</a></li>*/
/*         </ul>*/
/*       </div>*/
/*     </div>*/
/*     <hr>*/
/*     <p>{{ powered }}</p>*/
/*   </div>*/
/* </footer>*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* <!--*/
/* OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.*/
/* Please donate via PayPal to donate@opencart.com*/
/* //-->*/
/* */
/* 				{% if buyoneclick_status_product or buyoneclick_status_category or buyoneclick_status_module %}*/
/* 					<div id="boc_order" class="modal fade">*/
/* 					</div>*/
/* 					<div id="boc_success" class="modal fade">*/
/* 						<div class="modal-dialog">*/
/* 							<div class="modal-content">*/
/* 								<div class="modal-body">*/
/* 									<div class="text-center">{{ buyoneclick_success_field }}</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<script type="text/javascript">*/
/* 						$('body').on('click', '.boc_order_btn', function(event) {*/
/* 							$.ajax({*/
/* 								url: 'index.php?route=extension/module/buyoneclick/common/buyoneclick/info',*/
/* 								type: 'post',*/
/* 								data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),*/
/* 								dataType: 'json',*/
/* 								beforeSend: function() {*/
/* 									$(event.target).button('loading');*/
/* 									$('#boc_order').empty();*/
/* 									$('#boc_order').append('<div class="lds-rolling"><div></div></div>');*/
/* 								},*/
/* 								complete: function() {*/
/* 									$(event.target).button('reset');*/
/* 								},*/
/* 								success: function(json) {*/
/* 									$('.alert, .text-danger').remove();*/
/* 									$('.form-group').removeClass('has-error');*/
/* 									if (json['error']) {*/
/* 										if (json['error']['option']) {*/
/* 											for (i in json['error']['option']) {*/
/* 												var element = $('#input-option' + i.replace('_', '-'));*/
/* 												if (element.parent().hasClass('input-group')) {*/
/* 													element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 												} else {*/
/* 													element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 												}*/
/* 											}*/
/* 										}*/
/* */
/* 										if (json['error']['recurring']) {*/
/* 											$('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');*/
/* 										}*/
/* */
/* 										// Highlight any found errors*/
/* 										$('.text-danger').parent().addClass('has-error');*/
/* 									} else {*/
/* 										$("#boc_order").modal('show');*/
/* 										$('#boc_order').empty();*/
/* 										$('#boc_order').html(json['success']);*/
/* 										{% if buyoneclick_exan_status %} valueData(); {% endif %}*/
/* 									}*/
/* 								},*/
/* 								error: function(xhr, ajaxOptions, thrownError) {*/
/* 									console.log(thrownError + " | " + xhr.statusText + " | " + xhr.responseText);*/
/* 								}*/
/* 							});*/
/* 						});*/
/* 						$('body').on('click', '.boc_order_category_btn', function(event) {*/
/* 							var for_post = {};*/
/* 							for_post.product_id = $(this).attr('data-product_id');*/
/* 							$.ajax({*/
/* 								url: 'index.php?route=extension/module/buyoneclick/common/buyoneclick/info',*/
/* 								type: 'post',*/
/* 								data: for_post,*/
/* 								dataType: 'json',*/
/* 								beforeSend: function() {*/
/* 									$(event.target).button('loading');*/
/* 								},*/
/* 								complete: function() {*/
/* 									$(event.target).button('reset');*/
/* 								},*/
/* 								success: function(json) {*/
/* 									$('.alert, .text-danger').remove();*/
/* 									$('.form-group').removeClass('has-error');*/
/* 									if (json['redirect']) {*/
/* 										location = json['redirect'];*/
/* 									} else {*/
/* 										// console.log(json);*/
/* 										$("#boc_order").modal('show');*/
/* 										$('#boc_order').empty();*/
/* 										$('#boc_order').html(json['success']);*/
/* 										{% if buyoneclick_exan_status %} valueData(); {% endif %}*/
/* 									}*/
/* 								},*/
/* 								error: function(xhr, ajaxOptions, thrownError) {*/
/* 									console.log(thrownError + " | " + xhr.statusText + " | " + xhr.responseText);*/
/* 								}*/
/* 							});*/
/* 						});*/
/* 					</script>*/
/* 				{% endif %}*/
/* 			*/
/* </body></html>*/
