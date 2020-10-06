<?php

/* default/template/common/header.twig */
class __TwigTemplate_5d854cc4f16ba8c63cf5782d2d6bc4bc30b6ba7c9d5b4e772f38a1b29b0afa9e extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir=\"";
        // line 3
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie8\"><![endif]-->
<!--[if IE 9 ]><html dir=\"";
        // line 4
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\" class=\"ie9\"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir=\"";
        // line 6
        echo (isset($context["direction"]) ? $context["direction"] : null);
        echo "\" lang=\"";
        echo (isset($context["lang"]) ? $context["lang"] : null);
        echo "\">
<!--<![endif]-->
<head>
<meta charset=\"UTF-8\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<title>";
        // line 12
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "</title>
";
        // line 13
        if ((isset($context["robots"]) ? $context["robots"] : null)) {
            // line 14
            echo "<meta name=\"robots\" content=\"";
            echo (isset($context["robots"]) ? $context["robots"] : null);
            echo "\" />
";
        }
        // line 16
        echo "<base href=\"";
        echo (isset($context["base"]) ? $context["base"] : null);
        echo "\" />
";
        // line 17
        if ((isset($context["description"]) ? $context["description"] : null)) {
            // line 18
            echo "<meta name=\"description\" content=\"";
            echo (isset($context["description"]) ? $context["description"] : null);
            echo "\" />
";
        }
        // line 20
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            // line 21
            echo "<meta name=\"keywords\" content=\"";
            echo (isset($context["keywords"]) ? $context["keywords"] : null);
            echo "\" />
";
        }
        // line 23
        echo "<meta property=\"og:title\" content=\"";
        echo (isset($context["title"]) ? $context["title"] : null);
        echo "\" />
<meta property=\"og:type\" content=\"website\" />
<meta property=\"og:url\" content=\"";
        // line 25
        echo (isset($context["og_url"]) ? $context["og_url"] : null);
        echo "\" />
";
        // line 26
        if ((isset($context["og_image"]) ? $context["og_image"] : null)) {
            // line 27
            echo "<meta property=\"og:image\" content=\"";
            echo (isset($context["og_image"]) ? $context["og_image"] : null);
            echo "\" />
";
        } else {
            // line 29
            echo "<meta property=\"og:image\" content=\"";
            echo (isset($context["logo"]) ? $context["logo"] : null);
            echo "\" />
";
        }
        // line 31
        echo "<meta property=\"og:site_name\" content=\"";
        echo (isset($context["name"]) ? $context["name"] : null);
        echo "\" />
<script src=\"catalog/view/javascript/jquery/jquery-2.1.1.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" media=\"screen\" />
<script src=\"catalog/view/javascript/bootstrap/js/bootstrap.min.js\" type=\"text/javascript\"></script>
<link href=\"catalog/view/javascript/font-awesome/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700\" rel=\"stylesheet\" type=\"text/css\" />
<link href=\"catalog/view/theme/default/stylesheet/stylesheet.css\" rel=\"stylesheet\">
";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["styles"]) ? $context["styles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 39
            echo "<link href=\"";
            echo $this->getAttribute($context["style"], "href", array());
            echo "\" type=\"text/css\" rel=\"";
            echo $this->getAttribute($context["style"], "rel", array());
            echo "\" media=\"";
            echo $this->getAttribute($context["style"], "media", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["scripts"]) ? $context["scripts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 42
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "<script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["links"]) ? $context["links"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 46
            echo "<link href=\"";
            echo $this->getAttribute($context["link"], "href", array());
            echo "\" rel=\"";
            echo $this->getAttribute($context["link"], "rel", array());
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["analytics"]) ? $context["analytics"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 49
            echo $context["analytic"];
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "
\t\t\t\t";
        // line 52
        if ((((isset($context["buyoneclick_status_product"]) ? $context["buyoneclick_status_product"] : null) || (isset($context["buyoneclick_status_category"]) ? $context["buyoneclick_status_category"] : null)) || (isset($context["buyoneclick_status_module"]) ? $context["buyoneclick_status_module"] : null))) {
            // line 53
            echo "\t\t\t\t\t<script src=\"catalog/view/javascript/buyoneclick.js\" type=\"text/javascript\"></script>
\t\t\t\t\t<script>
\t\t\t\t\t\tfunction clickAnalytics(){
\t\t\t\t\t\t\tconsole.log('clickAnalytics');
\t\t\t\t\t\t\t";
            // line 57
            if ((((((isset($context["buyoneclick_ya_status"]) ? $context["buyoneclick_ya_status"] : null) && array_key_exists("buyoneclick_ya_counter", $context)) && ((isset($context["buyoneclick_ya_counter"]) ? $context["buyoneclick_ya_counter"] : null) != "")) && array_key_exists("buyoneclick_ya_identificator", $context)) && ((isset($context["buyoneclick_ya_identificator"]) ? $context["buyoneclick_ya_identificator"] : null) != ""))) {
                // line 58
                echo "\t\t\t\t\t\t\t\tyaCounter";
                echo (isset($context["buyoneclick_ya_counter"]) ? $context["buyoneclick_ya_counter"] : null);
                echo ".reachGoal('";
                echo (isset($context["buyoneclick_ya_identificator"]) ? $context["buyoneclick_ya_identificator"] : null);
                echo "');
\t\t\t\t\t\t\t";
            }
            // line 60
            echo "\t\t\t\t\t\t\t";
            if ((((((isset($context["buyoneclick_google_status"]) ? $context["buyoneclick_google_status"] : null) && array_key_exists("buyoneclick_google_category_btn", $context)) && ((isset($context["buyoneclick_google_category_btn"]) ? $context["buyoneclick_google_category_btn"] : null) != "")) && array_key_exists("buyoneclick_google_action_btn", $context)) && ((isset($context["buyoneclick_google_action_btn"]) ? $context["buyoneclick_google_action_btn"] : null) != ""))) {
                // line 61
                echo "\t\t\t\t\t\t\t\tga('send', 'event', '";
                echo (isset($context["buyoneclick_google_category_btn"]) ? $context["buyoneclick_google_category_btn"] : null);
                echo "', '";
                echo (isset($context["buyoneclick_google_action_btn"]) ? $context["buyoneclick_google_action_btn"] : null);
                echo "');
\t\t\t\t\t\t\t\tgtag('event', '";
                // line 62
                echo (isset($context["buyoneclick_google_action_btn"]) ? $context["buyoneclick_google_action_btn"] : null);
                echo "', {'event_category': '";
                echo (isset($context["buyoneclick_google_category_btn"]) ? $context["buyoneclick_google_category_btn"] : null);
                echo "'});
\t\t\t\t\t\t\t";
            }
            // line 64
            echo "\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\tfunction clickAnalyticsSend(){
\t\t\t\t\t\t\tconsole.log('clickAnalyticsSend');
\t\t\t\t\t\t\t";
            // line 68
            if ((((((isset($context["buyoneclick_ya_status"]) ? $context["buyoneclick_ya_status"] : null) && array_key_exists("buyoneclick_ya_counter", $context)) && ((isset($context["buyoneclick_ya_counter"]) ? $context["buyoneclick_ya_counter"] : null) != "")) && array_key_exists("buyoneclick_ya_identificator_send", $context)) && ((isset($context["buyoneclick_ya_identificator_send"]) ? $context["buyoneclick_ya_identificator_send"] : null) != ""))) {
                // line 69
                echo "\t\t\t\t\t\t\t\tyaCounter";
                echo (isset($context["buyoneclick_ya_counter"]) ? $context["buyoneclick_ya_counter"] : null);
                echo ".reachGoal('";
                echo (isset($context["buyoneclick_ya_identificator_send"]) ? $context["buyoneclick_ya_identificator_send"] : null);
                echo "');
\t\t\t\t\t\t\t";
            }
            // line 71
            echo "\t\t\t\t\t\t\t";
            if ((((((isset($context["buyoneclick_google_status"]) ? $context["buyoneclick_google_status"] : null) && array_key_exists("buyoneclick_google_category_send", $context)) && ((isset($context["buyoneclick_google_category_send"]) ? $context["buyoneclick_google_category_send"] : null) != "")) && array_key_exists("buyoneclick_google_action_send", $context)) && ((isset($context["buyoneclick_google_action_send"]) ? $context["buyoneclick_google_action_send"] : null) != ""))) {
                // line 72
                echo "\t\t\t\t\t\t\t\tga('send', 'event', '";
                echo (isset($context["buyoneclick_google_category_send"]) ? $context["buyoneclick_google_category_send"] : null);
                echo "', '";
                echo (isset($context["buyoneclick_google_action_send"]) ? $context["buyoneclick_google_action_send"] : null);
                echo "');
\t\t\t\t\t\t\t\tgtag('event', '";
                // line 73
                echo (isset($context["buyoneclick_google_action_send"]) ? $context["buyoneclick_google_action_send"] : null);
                echo "', {'event_category': '";
                echo (isset($context["buyoneclick_google_category_send"]) ? $context["buyoneclick_google_category_send"] : null);
                echo "'});
\t\t\t\t\t\t\t";
            }
            // line 75
            echo "\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t\tfunction clickAnalyticsSuccess(){
\t\t\t\t\t\t\tconsole.log('clickAnalyticsSuccess');
\t\t\t\t\t\t\t";
            // line 79
            if ((((((isset($context["buyoneclick_ya_status"]) ? $context["buyoneclick_ya_status"] : null) && array_key_exists("buyoneclick_ya_counter", $context)) && ((isset($context["buyoneclick_ya_counter"]) ? $context["buyoneclick_ya_counter"] : null) != "")) && array_key_exists("buyoneclick_ya_identificator_success", $context)) && ((isset($context["buyoneclick_ya_identificator_success"]) ? $context["buyoneclick_ya_identificator_success"] : null) != ""))) {
                // line 80
                echo "\t\t\t\t\t\t\t\tyaCounter";
                echo (isset($context["buyoneclick_ya_counter"]) ? $context["buyoneclick_ya_counter"] : null);
                echo ".reachGoal('";
                echo (isset($context["buyoneclick_ya_identificator_success"]) ? $context["buyoneclick_ya_identificator_success"] : null);
                echo "');
\t\t\t\t\t\t\t";
            }
            // line 82
            echo "\t\t\t\t\t\t\t";
            if ((((((isset($context["buyoneclick_google_status"]) ? $context["buyoneclick_google_status"] : null) && array_key_exists("buyoneclick_google_category_success", $context)) && ((isset($context["buyoneclick_google_category_success"]) ? $context["buyoneclick_google_category_success"] : null) != "")) && array_key_exists("buyoneclick_google_action_success", $context)) && ((isset($context["buyoneclick_google_action_success"]) ? $context["buyoneclick_google_action_success"] : null) != ""))) {
                // line 83
                echo "\t\t\t\t\t\t\t\tga('send', 'event', '";
                echo (isset($context["buyoneclick_google_category_success"]) ? $context["buyoneclick_google_category_success"] : null);
                echo "', '";
                echo (isset($context["buyoneclick_google_action_success"]) ? $context["buyoneclick_google_action_success"] : null);
                echo "');
\t\t\t\t\t\t\t\tgtag('event', '";
                // line 84
                echo (isset($context["buyoneclick_google_action_success"]) ? $context["buyoneclick_google_action_success"] : null);
                echo "', {'event_category': '";
                echo (isset($context["buyoneclick_google_category_success"]) ? $context["buyoneclick_google_category_success"] : null);
                echo "'});
\t\t\t\t\t\t\t";
            }
            // line 86
            echo "\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t</script>
\t\t\t\t\t\t";
            // line 89
            if ((isset($context["buyoneclick_validation_type"]) ? $context["buyoneclick_validation_type"] : null)) {
                // line 90
                echo "\t\t\t\t\t\t\t<script src=\"catalog/view/javascript/jquery.mask.min.js\" type=\"text/javascript\"></script>
\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\t\$(document).ready(function(){
\t\t\t\t\t\t\t\t\t\$('#boc_phone').mask('";
                // line 93
                echo (isset($context["buyoneclick_validation_type"]) ? $context["buyoneclick_validation_type"] : null);
                echo "');
\t\t\t\t\t\t\t\t});
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t";
            }
            // line 97
            echo "\t\t\t\t\t\t";
            if ((isset($context["buyoneclick_exan_status"]) ? $context["buyoneclick_exan_status"] : null)) {
                // line 98
                echo "\t\t\t\t\t\t\t<script src=\"catalog/view/javascript/sourcebuster.min.js\" type=\"text/javascript\"></script>
\t\t\t\t\t\t\t<script>
\t\t\t\t\t\t\t\tsbjs.init({
\t\t\t\t\t\t\t\t\tcallback: placeData
\t\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\tfunction placeData(sb) {
\t\t\t\t\t\t\t\t\t\$sb_first_typ\t\t= sb.first.typ;
\t\t\t\t\t\t\t\t\t\$sb_first_src\t\t= sb.first.src;
\t\t\t\t\t\t\t\t\t\$sb_first_mdm\t\t= sb.first.mdm;
\t\t\t\t\t\t\t\t\t\$sb_first_cmp\t\t= sb.first.cmp;
\t\t\t\t\t\t\t\t\t\$sb_first_cnt\t\t= sb.first.cnt;
\t\t\t\t\t\t\t\t\t\$sb_first_trm\t\t= sb.first.trm;

\t\t\t\t\t\t\t\t\t\$sb_curr_typ\t\t= sb.current.typ;
\t\t\t\t\t\t\t\t\t\$sb_curr_src\t\t= sb.current.src;
\t\t\t\t\t\t\t\t\t\$sb_curr_mdm\t\t= sb.current.mdm;
\t\t\t\t\t\t\t\t\t\$sb_curr_cmp\t\t= sb.current.cmp;
\t\t\t\t\t\t\t\t\t\$sb_curr_cnt\t\t= sb.current.cnt;
\t\t\t\t\t\t\t\t\t\$sb_curr_trm\t\t= sb.current.trm;

\t\t\t\t\t\t\t\t\t\$sb_first_add_fd\t= sb.first_add.fd;
\t\t\t\t\t\t\t\t\t\$sb_first_add_ep\t= sb.first_add.ep;
\t\t\t\t\t\t\t\t\t\$sb_first_add_rf\t= sb.first_add.rf;

\t\t\t\t\t\t\t\t\t\$sb_curr_add_fd\t\t= sb.current_add.fd;
\t\t\t\t\t\t\t\t\t\$sb_curr_add_ep\t\t= sb.current_add.ep;
\t\t\t\t\t\t\t\t\t\$sb_curr_add_rf\t\t= sb.current_add.rf;

\t\t\t\t\t\t\t\t\t\$sb_session_pgs\t\t= sb.session.pgs;
\t\t\t\t\t\t\t\t\t\$sb_session_cpg\t\t= sb.session.cpg;

\t\t\t\t\t\t\t\t\t\$sb_udata_vst\t\t= sb.udata.vst;
\t\t\t\t\t\t\t\t\t\$sb_udata_uip\t\t= sb.udata.uip;
\t\t\t\t\t\t\t\t\t\$sb_udata_uag\t\t= sb.udata.uag;

\t\t\t\t\t\t\t\t\t\$sb_promo_code\t\t= sb.promo.code;
\t\t\t\t\t\t\t\t};

\t\t\t\t\t\t\t\tfunction valueData() {
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_first_typ').value\t= \$sb_first_typ;
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_first_src').value\t= \$sb_first_src;
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_first_mdm').value\t= \$sb_first_mdm;
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_first_cmp').value\t= \$sb_first_cmp;
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_first_cnt').value\t= \$sb_first_cnt;
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_first_trm').value\t= \$sb_first_trm;

\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_current_typ').value\t = \$sb_curr_typ;
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_current_src').value\t = \$sb_curr_src;
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_current_mdm').value\t = \$sb_curr_mdm;
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_current_cmp').value\t = \$sb_curr_cmp;
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_current_cnt').value\t = \$sb_curr_cnt;
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_current_trm').value\t = \$sb_curr_trm;

\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_first_add_fd').value\t= \$sb_first_add_fd;
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_first_add_ep').value\t= \$sb_first_add_ep;
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_first_add_rf').value\t= \$sb_first_add_rf;

\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_current_add_fd').value = \$sb_curr_add_fd;
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_current_add_ep').value = \$sb_curr_add_ep;
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_current_add_rf').value = \$sb_curr_add_rf;

\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_session_pgs').value\t = \$sb_session_pgs;
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_session_cpg').value\t = \$sb_session_cpg;

\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_udata_vst').value\t= \$sb_udata_vst;
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_udata_uip').value\t= \$sb_udata_uip;
\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_udata_uag').value\t= \$sb_udata_uag;

\t\t\t\t\t\t\t\t\tdocument.getElementById('sb_promo_code').value\t = \$sb_promo_code;
\t\t\t\t\t\t\t\t};
\t\t\t\t\t\t\t</script>
\t\t\t\t\t\t";
            }
            // line 171
            echo "\t\t\t\t\t\t";
            if ((isset($context["buyoneclick_style_status"]) ? $context["buyoneclick_style_status"] : null)) {
                // line 172
                echo "\t\t\t\t\t\t\t<link href=\"catalog/view/theme/default/stylesheet/buyoneclick.css\" rel=\"stylesheet\">
\t\t\t\t\t\t";
            }
            // line 174
            echo "\t\t\t\t\t\t<style type=\"text/css\">
\t\t\t\t\t\t\t@keyframes lds-rolling {
\t\t\t\t\t\t\t\t0% {
\t\t\t\t\t\t\t\t\t-webkit-transform: translate(-50%, -50%) rotate(0deg);
\t\t\t\t\t\t\t\t\ttransform: translate(-50%, -50%) rotate(0deg);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t100% {
\t\t\t\t\t\t\t\t\t-webkit-transform: translate(-50%, -50%) rotate(360deg);
\t\t\t\t\t\t\t\t\ttransform: translate(-50%, -50%) rotate(360deg);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t@-webkit-keyframes lds-rolling {
\t\t\t\t\t\t\t\t0% {
\t\t\t\t\t\t\t\t\t-webkit-transform: translate(-50%, -50%) rotate(0deg);
\t\t\t\t\t\t\t\t\ttransform: translate(-50%, -50%) rotate(0deg);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t100% {
\t\t\t\t\t\t\t\t\t-webkit-transform: translate(-50%, -50%) rotate(360deg);
\t\t\t\t\t\t\t\t\ttransform: translate(-50%, -50%) rotate(360deg);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.lds-rolling {
\t\t\t\t\t\t\t\tposition: relative;
\t\t\t\t\t\t\t\ttext-align: center;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.lds-rolling div, .lds-rolling div:after {
\t\t\t\t\t\t\t\tposition: absolute;
\t\t\t\t\t\t\t\twidth: 160px;
\t\t\t\t\t\t\t\theight: 160px;
\t\t\t\t\t\t\t\tborder: 20px solid #bbcedd;
\t\t\t\t\t\t\t\tborder-top-color: transparent;
\t\t\t\t\t\t\t\tborder-radius: 50%;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.lds-rolling div {
\t\t\t\t\t\t\t\t-webkit-animation: lds-rolling 1s linear infinite;
\t\t\t\t\t\t\t\tanimation: lds-rolling 1s linear infinite;
\t\t\t\t\t\t\t\ttop: 100px;
\t\t\t\t\t\t\t\tleft: 100px;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.lds-rolling div:after {
\t\t\t\t\t\t\t\t-webkit-transform: rotate(90deg);
\t\t\t\t\t\t\t\ttransform: rotate(90deg);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.lds-rolling {
\t\t\t\t\t\t\t\twidth: 200px !important;
\t\t\t\t\t\t\t\theight: 200px !important;
\t\t\t\t\t\t\t\t-webkit-transform: translate(-100px, -100px) scale(1) translate(100px, 100px);
\t\t\t\t\t\t\t\ttransform: translate(-100px, -100px) scale(1) translate(100px, 100px);
\t\t\t\t\t\t\t\tmargin: 0 auto;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.col-pd-15 {
\t\t\t\t\t\t\t\tpadding-left:15px;
\t\t\t\t\t\t\t\tpadding-right:15px;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.col-mb-10 {
\t\t\t\t\t\t\t\tmargin-bottom:10px;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t#boc_order hr {
\t\t\t\t\t\t\t\tmargin-top:0px;
\t\t\t\t\t\t\t\tmargin-bottom:15px;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.boc_product_info > div {
\t\t\t\t\t\t\t\tline-height: 120px;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.boc_product_info > div > img {
\t\t\t\t\t\t\t\tmax-height: 120px;
\t\t\t\t\t\t\t\tmargin: 0 auto;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t.boc_product_info > div > img, .boc_product_info > div > div, .boc_product_info > div > p {
\t\t\t\t\t\t\t\tdisplay: inline-block;
\t\t\t\t\t\t\t\tline-height: normal;
\t\t\t\t\t\t\t\tvertical-align: middle;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t#boc_order .checkbox {
\t\t\t\t\t\t\t\tmargin-top: 0;
\t\t\t\t\t\t\t\tpadding: 0 10px;
\t\t\t\t\t\t\t\tborder: 1px solid transparent;
\t\t\t\t\t\t\t\tborder-radius: 6px;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t#boc_order .checkbox.has-error {
\t\t\t\t\t\t\t\tborder-color: #a94442;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t@media (max-width: 767px) {
\t\t\t\t\t\t\t\t.boc_product_info > div {
\t\t\t\t\t\t\t\t\tline-height:normal;
\t\t\t\t\t\t\t\t\ttext-align:center;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t</style>
\t\t\t\t";
        }
        // line 264
        echo "\t\t\t
</head>
<body>
<nav id=\"top\">
  <div class=\"container\">";
        // line 268
        echo (isset($context["currency"]) ? $context["currency"] : null);
        echo "
    ";
        // line 269
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "
\t";
        // line 270
        echo (isset($context["blog_menu"]) ? $context["blog_menu"] : null);
        echo "
    <div id=\"top-links\" class=\"nav pull-right\">
      <ul class=\"list-inline\">
        <li><a href=\"";
        // line 273
        echo (isset($context["contact"]) ? $context["contact"] : null);
        echo "\"><i class=\"fa fa-phone\"></i></a> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["telephone"]) ? $context["telephone"] : null);
        echo "</span></li>
        <li class=\"dropdown\"><a href=\"";
        // line 274
        echo (isset($context["account"]) ? $context["account"] : null);
        echo "\" title=\"";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["text_account"]) ? $context["text_account"] : null);
        echo "</span> <span class=\"caret\"></span></a>
          <ul class=\"dropdown-menu dropdown-menu-right\">
            ";
        // line 276
        if ((isset($context["logged"]) ? $context["logged"] : null)) {
            // line 277
            echo "            <li><a href=\"";
            echo (isset($context["account"]) ? $context["account"] : null);
            echo "\">";
            echo (isset($context["text_account"]) ? $context["text_account"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 278
            echo (isset($context["order"]) ? $context["order"] : null);
            echo "\">";
            echo (isset($context["text_order"]) ? $context["text_order"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 279
            echo (isset($context["transaction"]) ? $context["transaction"] : null);
            echo "\">";
            echo (isset($context["text_transaction"]) ? $context["text_transaction"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 280
            echo (isset($context["download"]) ? $context["download"] : null);
            echo "\">";
            echo (isset($context["text_download"]) ? $context["text_download"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 281
            echo (isset($context["logout"]) ? $context["logout"] : null);
            echo "\">";
            echo (isset($context["text_logout"]) ? $context["text_logout"] : null);
            echo "</a></li>
            ";
        } else {
            // line 283
            echo "            <li><a href=\"";
            echo (isset($context["register"]) ? $context["register"] : null);
            echo "\">";
            echo (isset($context["text_register"]) ? $context["text_register"] : null);
            echo "</a></li>
            <li><a href=\"";
            // line 284
            echo (isset($context["login"]) ? $context["login"] : null);
            echo "\">";
            echo (isset($context["text_login"]) ? $context["text_login"] : null);
            echo "</a></li>
            ";
        }
        // line 286
        echo "          </ul>
        </li>
        <li><a href=\"";
        // line 288
        echo (isset($context["wishlist"]) ? $context["wishlist"] : null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "\"><i class=\"fa fa-heart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["text_wishlist"]) ? $context["text_wishlist"] : null);
        echo "</span></a></li>
        <li><a href=\"";
        // line 289
        echo (isset($context["shopping_cart"]) ? $context["shopping_cart"] : null);
        echo "\" title=\"";
        echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
        echo "\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["text_shopping_cart"]) ? $context["text_shopping_cart"] : null);
        echo "</span></a></li>
        <li><a href=\"";
        // line 290
        echo (isset($context["checkout"]) ? $context["checkout"] : null);
        echo "\" title=\"";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "\"><i class=\"fa fa-share\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
        echo (isset($context["text_checkout"]) ? $context["text_checkout"] : null);
        echo "</span></a></li>
      </ul>
    </div>
  </div>
</nav>
<header>
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-sm-4\">
\t\t<div id=\"logo\">
          ";
        // line 300
        if ((isset($context["logo"]) ? $context["logo"] : null)) {
            // line 301
            echo "            ";
            if (((isset($context["home"]) ? $context["home"] : null) == (isset($context["og_url"]) ? $context["og_url"] : null))) {
                // line 302
                echo "              <img src=\"";
                echo (isset($context["logo"]) ? $context["logo"] : null);
                echo "\" title=\"";
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "\" alt=\"";
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "\" class=\"img-responsive\" />
            ";
            } else {
                // line 304
                echo "              <a href=\"";
                echo (isset($context["home"]) ? $context["home"] : null);
                echo "\"><img src=\"";
                echo (isset($context["logo"]) ? $context["logo"] : null);
                echo "\" title=\"";
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "\" alt=\"";
                echo (isset($context["name"]) ? $context["name"] : null);
                echo "\" class=\"img-responsive\" /></a>
            ";
            }
            // line 306
            echo "          ";
        } else {
            // line 307
            echo "            <h1><a href=\"";
            echo (isset($context["home"]) ? $context["home"] : null);
            echo "\">";
            echo (isset($context["name"]) ? $context["name"] : null);
            echo "</a></h1>
          ";
        }
        // line 309
        echo "\t\t</div>
      </div>
      <div class=\"col-sm-5\">";
        // line 311
        echo (isset($context["search"]) ? $context["search"] : null);
        echo "</div>
      <div class=\"col-sm-3\">";
        // line 312
        echo (isset($context["cart"]) ? $context["cart"] : null);
        echo "</div>
    </div>
  </div>
</header>
";
        // line 316
        echo (isset($context["menu"]) ? $context["menu"] : null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  648 => 316,  641 => 312,  637 => 311,  633 => 309,  625 => 307,  622 => 306,  610 => 304,  600 => 302,  597 => 301,  595 => 300,  578 => 290,  570 => 289,  562 => 288,  558 => 286,  551 => 284,  544 => 283,  537 => 281,  531 => 280,  525 => 279,  519 => 278,  512 => 277,  510 => 276,  501 => 274,  495 => 273,  489 => 270,  485 => 269,  481 => 268,  475 => 264,  383 => 174,  379 => 172,  376 => 171,  301 => 98,  298 => 97,  291 => 93,  286 => 90,  284 => 89,  279 => 86,  272 => 84,  265 => 83,  262 => 82,  254 => 80,  252 => 79,  246 => 75,  239 => 73,  232 => 72,  229 => 71,  221 => 69,  219 => 68,  213 => 64,  206 => 62,  199 => 61,  196 => 60,  188 => 58,  186 => 57,  180 => 53,  178 => 52,  175 => 51,  167 => 49,  163 => 48,  152 => 46,  148 => 45,  145 => 44,  136 => 42,  132 => 41,  119 => 39,  115 => 38,  104 => 31,  98 => 29,  92 => 27,  90 => 26,  86 => 25,  80 => 23,  74 => 21,  72 => 20,  66 => 18,  64 => 17,  59 => 16,  53 => 14,  51 => 13,  47 => 12,  36 => 6,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if IE]><![endif]-->*/
/* <!--[if IE 8 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie8"><![endif]-->*/
/* <!--[if IE 9 ]><html dir="{{ direction }}" lang="{{ lang }}" class="ie9"><![endif]-->*/
/* <!--[if (gt IE 9)|!(IE)]><!-->*/
/* <html dir="{{ direction }}" lang="{{ lang }}">*/
/* <!--<![endif]-->*/
/* <head>*/
/* <meta charset="UTF-8" />*/
/* <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* <title>{{ title }}</title>*/
/* {% if robots %}*/
/* <meta name="robots" content="{{ robots }}" />*/
/* {% endif %}*/
/* <base href="{{ base }}" />*/
/* {% if description %}*/
/* <meta name="description" content="{{ description }}" />*/
/* {% endif %}*/
/* {% if keywords %}*/
/* <meta name="keywords" content="{{ keywords }}" />*/
/* {% endif %}*/
/* <meta property="og:title" content="{{ title }}" />*/
/* <meta property="og:type" content="website" />*/
/* <meta property="og:url" content="{{ og_url }}" />*/
/* {% if og_image %}*/
/* <meta property="og:image" content="{{ og_image }}" />*/
/* {% else %}*/
/* <meta property="og:image" content="{{ logo }}" />*/
/* {% endif %}*/
/* <meta property="og:site_name" content="{{ name }}" />*/
/* <script src="catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>*/
/* <link href="catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />*/
/* <script src="catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>*/
/* <link href="catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />*/
/* <link href="//fonts.googleapis.com/css?family=Open+Sans:400,400i,300,700" rel="stylesheet" type="text/css" />*/
/* <link href="catalog/view/theme/default/stylesheet/stylesheet.css" rel="stylesheet">*/
/* {% for style in styles %}*/
/* <link href="{{ style.href }}" type="text/css" rel="{{ style.rel }}" media="{{ style.media }}" />*/
/* {% endfor %}*/
/* {% for script in scripts %}*/
/* <script src="{{ script }}" type="text/javascript"></script>*/
/* {% endfor %}*/
/* <script src="catalog/view/javascript/common.js" type="text/javascript"></script>*/
/* {% for link in links %}*/
/* <link href="{{ link.href }}" rel="{{ link.rel }}" />*/
/* {% endfor %}*/
/* {% for analytic in analytics %}*/
/* {{ analytic }}*/
/* {% endfor %}*/
/* */
/* 				{% if buyoneclick_status_product or buyoneclick_status_category or buyoneclick_status_module %}*/
/* 					<script src="catalog/view/javascript/buyoneclick.js" type="text/javascript"></script>*/
/* 					<script>*/
/* 						function clickAnalytics(){*/
/* 							console.log('clickAnalytics');*/
/* 							{% if buyoneclick_ya_status and buyoneclick_ya_counter is defined and buyoneclick_ya_counter != '' and buyoneclick_ya_identificator is defined and buyoneclick_ya_identificator != '' %}*/
/* 								yaCounter{{ buyoneclick_ya_counter }}.reachGoal('{{ buyoneclick_ya_identificator }}');*/
/* 							{% endif %}*/
/* 							{% if buyoneclick_google_status and buyoneclick_google_category_btn is defined and buyoneclick_google_category_btn != '' and buyoneclick_google_action_btn is defined and buyoneclick_google_action_btn != '' %}*/
/* 								ga('send', 'event', '{{ buyoneclick_google_category_btn }}', '{{ buyoneclick_google_action_btn }}');*/
/* 								gtag('event', '{{ buyoneclick_google_action_btn }}', {'event_category': '{{ buyoneclick_google_category_btn }}'});*/
/* 							{% endif %}*/
/* 							return true;*/
/* 						}*/
/* 						function clickAnalyticsSend(){*/
/* 							console.log('clickAnalyticsSend');*/
/* 							{% if buyoneclick_ya_status and buyoneclick_ya_counter is defined and buyoneclick_ya_counter != '' and buyoneclick_ya_identificator_send is defined and buyoneclick_ya_identificator_send != '' %}*/
/* 								yaCounter{{ buyoneclick_ya_counter }}.reachGoal('{{ buyoneclick_ya_identificator_send }}');*/
/* 							{% endif %}*/
/* 							{% if buyoneclick_google_status and buyoneclick_google_category_send is defined and buyoneclick_google_category_send != '' and buyoneclick_google_action_send is defined and buyoneclick_google_action_send != '' %}*/
/* 								ga('send', 'event', '{{ buyoneclick_google_category_send }}', '{{ buyoneclick_google_action_send }}');*/
/* 								gtag('event', '{{ buyoneclick_google_action_send }}', {'event_category': '{{ buyoneclick_google_category_send }}'});*/
/* 							{% endif %}*/
/* 							return true;*/
/* 						}*/
/* 						function clickAnalyticsSuccess(){*/
/* 							console.log('clickAnalyticsSuccess');*/
/* 							{% if buyoneclick_ya_status and buyoneclick_ya_counter is defined and buyoneclick_ya_counter != '' and buyoneclick_ya_identificator_success is defined and buyoneclick_ya_identificator_success != '' %}*/
/* 								yaCounter{{ buyoneclick_ya_counter }}.reachGoal('{{ buyoneclick_ya_identificator_success }}');*/
/* 							{% endif %}*/
/* 							{% if buyoneclick_google_status and buyoneclick_google_category_success is defined and buyoneclick_google_category_success != '' and buyoneclick_google_action_success is defined and buyoneclick_google_action_success != '' %}*/
/* 								ga('send', 'event', '{{ buyoneclick_google_category_success }}', '{{ buyoneclick_google_action_success }}');*/
/* 								gtag('event', '{{ buyoneclick_google_action_success }}', {'event_category': '{{ buyoneclick_google_category_success }}'});*/
/* 							{% endif %}*/
/* 							return true;*/
/* 						}*/
/* 					</script>*/
/* 						{% if buyoneclick_validation_type %}*/
/* 							<script src="catalog/view/javascript/jquery.mask.min.js" type="text/javascript"></script>*/
/* 							<script>*/
/* 								$(document).ready(function(){*/
/* 									$('#boc_phone').mask('{{ buyoneclick_validation_type }}');*/
/* 								});*/
/* 							</script>*/
/* 						{% endif %}*/
/* 						{% if buyoneclick_exan_status %}*/
/* 							<script src="catalog/view/javascript/sourcebuster.min.js" type="text/javascript"></script>*/
/* 							<script>*/
/* 								sbjs.init({*/
/* 									callback: placeData*/
/* 								});*/
/* */
/* 								function placeData(sb) {*/
/* 									$sb_first_typ		= sb.first.typ;*/
/* 									$sb_first_src		= sb.first.src;*/
/* 									$sb_first_mdm		= sb.first.mdm;*/
/* 									$sb_first_cmp		= sb.first.cmp;*/
/* 									$sb_first_cnt		= sb.first.cnt;*/
/* 									$sb_first_trm		= sb.first.trm;*/
/* */
/* 									$sb_curr_typ		= sb.current.typ;*/
/* 									$sb_curr_src		= sb.current.src;*/
/* 									$sb_curr_mdm		= sb.current.mdm;*/
/* 									$sb_curr_cmp		= sb.current.cmp;*/
/* 									$sb_curr_cnt		= sb.current.cnt;*/
/* 									$sb_curr_trm		= sb.current.trm;*/
/* */
/* 									$sb_first_add_fd	= sb.first_add.fd;*/
/* 									$sb_first_add_ep	= sb.first_add.ep;*/
/* 									$sb_first_add_rf	= sb.first_add.rf;*/
/* */
/* 									$sb_curr_add_fd		= sb.current_add.fd;*/
/* 									$sb_curr_add_ep		= sb.current_add.ep;*/
/* 									$sb_curr_add_rf		= sb.current_add.rf;*/
/* */
/* 									$sb_session_pgs		= sb.session.pgs;*/
/* 									$sb_session_cpg		= sb.session.cpg;*/
/* */
/* 									$sb_udata_vst		= sb.udata.vst;*/
/* 									$sb_udata_uip		= sb.udata.uip;*/
/* 									$sb_udata_uag		= sb.udata.uag;*/
/* */
/* 									$sb_promo_code		= sb.promo.code;*/
/* 								};*/
/* */
/* 								function valueData() {*/
/* 									document.getElementById('sb_first_typ').value	= $sb_first_typ;*/
/* 									document.getElementById('sb_first_src').value	= $sb_first_src;*/
/* 									document.getElementById('sb_first_mdm').value	= $sb_first_mdm;*/
/* 									document.getElementById('sb_first_cmp').value	= $sb_first_cmp;*/
/* 									document.getElementById('sb_first_cnt').value	= $sb_first_cnt;*/
/* 									document.getElementById('sb_first_trm').value	= $sb_first_trm;*/
/* */
/* 									document.getElementById('sb_current_typ').value	 = $sb_curr_typ;*/
/* 									document.getElementById('sb_current_src').value	 = $sb_curr_src;*/
/* 									document.getElementById('sb_current_mdm').value	 = $sb_curr_mdm;*/
/* 									document.getElementById('sb_current_cmp').value	 = $sb_curr_cmp;*/
/* 									document.getElementById('sb_current_cnt').value	 = $sb_curr_cnt;*/
/* 									document.getElementById('sb_current_trm').value	 = $sb_curr_trm;*/
/* */
/* 									document.getElementById('sb_first_add_fd').value	= $sb_first_add_fd;*/
/* 									document.getElementById('sb_first_add_ep').value	= $sb_first_add_ep;*/
/* 									document.getElementById('sb_first_add_rf').value	= $sb_first_add_rf;*/
/* */
/* 									document.getElementById('sb_current_add_fd').value = $sb_curr_add_fd;*/
/* 									document.getElementById('sb_current_add_ep').value = $sb_curr_add_ep;*/
/* 									document.getElementById('sb_current_add_rf').value = $sb_curr_add_rf;*/
/* */
/* 									document.getElementById('sb_session_pgs').value	 = $sb_session_pgs;*/
/* 									document.getElementById('sb_session_cpg').value	 = $sb_session_cpg;*/
/* */
/* 									document.getElementById('sb_udata_vst').value	= $sb_udata_vst;*/
/* 									document.getElementById('sb_udata_uip').value	= $sb_udata_uip;*/
/* 									document.getElementById('sb_udata_uag').value	= $sb_udata_uag;*/
/* */
/* 									document.getElementById('sb_promo_code').value	 = $sb_promo_code;*/
/* 								};*/
/* 							</script>*/
/* 						{% endif %}*/
/* 						{% if buyoneclick_style_status %}*/
/* 							<link href="catalog/view/theme/default/stylesheet/buyoneclick.css" rel="stylesheet">*/
/* 						{% endif %}*/
/* 						<style type="text/css">*/
/* 							@keyframes lds-rolling {*/
/* 								0% {*/
/* 									-webkit-transform: translate(-50%, -50%) rotate(0deg);*/
/* 									transform: translate(-50%, -50%) rotate(0deg);*/
/* 								}*/
/* 								100% {*/
/* 									-webkit-transform: translate(-50%, -50%) rotate(360deg);*/
/* 									transform: translate(-50%, -50%) rotate(360deg);*/
/* 								}*/
/* 							}*/
/* 							@-webkit-keyframes lds-rolling {*/
/* 								0% {*/
/* 									-webkit-transform: translate(-50%, -50%) rotate(0deg);*/
/* 									transform: translate(-50%, -50%) rotate(0deg);*/
/* 								}*/
/* 								100% {*/
/* 									-webkit-transform: translate(-50%, -50%) rotate(360deg);*/
/* 									transform: translate(-50%, -50%) rotate(360deg);*/
/* 								}*/
/* 							}*/
/* 							.lds-rolling {*/
/* 								position: relative;*/
/* 								text-align: center;*/
/* 							}*/
/* 							.lds-rolling div, .lds-rolling div:after {*/
/* 								position: absolute;*/
/* 								width: 160px;*/
/* 								height: 160px;*/
/* 								border: 20px solid #bbcedd;*/
/* 								border-top-color: transparent;*/
/* 								border-radius: 50%;*/
/* 							}*/
/* 							.lds-rolling div {*/
/* 								-webkit-animation: lds-rolling 1s linear infinite;*/
/* 								animation: lds-rolling 1s linear infinite;*/
/* 								top: 100px;*/
/* 								left: 100px;*/
/* 							}*/
/* 							.lds-rolling div:after {*/
/* 								-webkit-transform: rotate(90deg);*/
/* 								transform: rotate(90deg);*/
/* 							}*/
/* 							.lds-rolling {*/
/* 								width: 200px !important;*/
/* 								height: 200px !important;*/
/* 								-webkit-transform: translate(-100px, -100px) scale(1) translate(100px, 100px);*/
/* 								transform: translate(-100px, -100px) scale(1) translate(100px, 100px);*/
/* 								margin: 0 auto;*/
/* 							}*/
/* 							.col-pd-15 {*/
/* 								padding-left:15px;*/
/* 								padding-right:15px;*/
/* 							}*/
/* 							.col-mb-10 {*/
/* 								margin-bottom:10px;*/
/* 							}*/
/* 							#boc_order hr {*/
/* 								margin-top:0px;*/
/* 								margin-bottom:15px;*/
/* 							}*/
/* 							.boc_product_info > div {*/
/* 								line-height: 120px;*/
/* 							}*/
/* 							.boc_product_info > div > img {*/
/* 								max-height: 120px;*/
/* 								margin: 0 auto;*/
/* 							}*/
/* 							.boc_product_info > div > img, .boc_product_info > div > div, .boc_product_info > div > p {*/
/* 								display: inline-block;*/
/* 								line-height: normal;*/
/* 								vertical-align: middle;*/
/* 							}*/
/* 							#boc_order .checkbox {*/
/* 								margin-top: 0;*/
/* 								padding: 0 10px;*/
/* 								border: 1px solid transparent;*/
/* 								border-radius: 6px;*/
/* 							}*/
/* 							#boc_order .checkbox.has-error {*/
/* 								border-color: #a94442;*/
/* 							}*/
/* 							@media (max-width: 767px) {*/
/* 								.boc_product_info > div {*/
/* 									line-height:normal;*/
/* 									text-align:center;*/
/* 								}*/
/* 							}*/
/* 						</style>*/
/* 				{% endif %}*/
/* 			*/
/* </head>*/
/* <body>*/
/* <nav id="top">*/
/*   <div class="container">{{ currency }}*/
/*     {{ language }}*/
/* 	{{ blog_menu }}*/
/*     <div id="top-links" class="nav pull-right">*/
/*       <ul class="list-inline">*/
/*         <li><a href="{{ contact }}"><i class="fa fa-phone"></i></a> <span class="hidden-xs hidden-sm hidden-md">{{ telephone }}</span></li>*/
/*         <li class="dropdown"><a href="{{ account }}" title="{{ text_account }}" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_account }}</span> <span class="caret"></span></a>*/
/*           <ul class="dropdown-menu dropdown-menu-right">*/
/*             {% if logged %}*/
/*             <li><a href="{{ account }}">{{ text_account }}</a></li>*/
/*             <li><a href="{{ order }}">{{ text_order }}</a></li>*/
/*             <li><a href="{{ transaction }}">{{ text_transaction }}</a></li>*/
/*             <li><a href="{{ download }}">{{ text_download }}</a></li>*/
/*             <li><a href="{{ logout }}">{{ text_logout }}</a></li>*/
/*             {% else %}*/
/*             <li><a href="{{ register }}">{{ text_register }}</a></li>*/
/*             <li><a href="{{ login }}">{{ text_login }}</a></li>*/
/*             {% endif %}*/
/*           </ul>*/
/*         </li>*/
/*         <li><a href="{{ wishlist }}" id="wishlist-total" title="{{ text_wishlist }}"><i class="fa fa-heart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_wishlist }}</span></a></li>*/
/*         <li><a href="{{ shopping_cart }}" title="{{ text_shopping_cart }}"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_shopping_cart }}</span></a></li>*/
/*         <li><a href="{{ checkout }}" title="{{ text_checkout }}"><i class="fa fa-share"></i> <span class="hidden-xs hidden-sm hidden-md">{{ text_checkout }}</span></a></li>*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/* </nav>*/
/* <header>*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-sm-4">*/
/* 		<div id="logo">*/
/*           {% if logo %}*/
/*             {% if home == og_url %}*/
/*               <img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" />*/
/*             {% else %}*/
/*               <a href="{{ home }}"><img src="{{ logo }}" title="{{ name }}" alt="{{ name }}" class="img-responsive" /></a>*/
/*             {% endif %}*/
/*           {% else %}*/
/*             <h1><a href="{{ home }}">{{ name }}</a></h1>*/
/*           {% endif %}*/
/* 		</div>*/
/*       </div>*/
/*       <div class="col-sm-5">{{ search }}</div>*/
/*       <div class="col-sm-3">{{ cart }}</div>*/
/*     </div>*/
/*   </div>*/
/* </header>*/
/* {{ menu }}*/
/* */
