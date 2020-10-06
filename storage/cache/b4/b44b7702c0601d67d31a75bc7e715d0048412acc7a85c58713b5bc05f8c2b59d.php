<?php

/* extension/module/buyoneclick.twig */
class __TwigTemplate_373609ca43374bc7adb94fdedb322721d9af1e103910569d4cb1c9ddf4e0ab2f extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
<div id=\"content\">
\t<div class=\"page-header\">
\t\t<div class=\"container-fluid\">
\t\t\t<div class=\"pull-right\">
\t\t\t\t<button type=\"submit\" form=\"form-buyoneclick\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo (isset($context["button_save"]) ? $context["button_save"] : null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
\t\t\t\t<a href=\"";
        // line 7
        echo (isset($context["cancel"]) ? $context["cancel"] : null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo (isset($context["button_cancel"]) ? $context["button_cancel"] : null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a>
\t\t\t</div>
\t\t\t<h1 style=\"display:block;font-size: 20px;\">";
        // line 9
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
            echo "\t\t\t\t\t<li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t\t\t</ul>
\t\t</div>
\t</div>
\t<div class=\"container-fluid\">
\t\t<form action=\"";
        // line 18
        echo (isset($context["action"]) ? $context["action"] : null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-buyoneclick\" class=\"form-horizontal\">
\t\t\t";
        // line 19
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 20
            echo "\t\t\t\t<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
\t\t\t\t</div>
\t\t\t";
        }
        // line 24
        echo "\t\t\t<ul class=\"nav nav-tabs\" style=\"margin-bottom:0;\">
\t\t\t\t<li class=\"active\"><a href=\"#settings_main\" data-toggle=\"tab\">";
        // line 25
        echo (isset($context["settings_main"]) ? $context["settings_main"] : null);
        echo "</a></li>
\t\t\t\t<li><a href=\"#settings_sms\" data-toggle=\"tab\">";
        // line 26
        echo (isset($context["settings_sms"]) ? $context["settings_sms"] : null);
        echo "</a></li>
\t\t\t\t<li><a href=\"#settings_analytics\" data-toggle=\"tab\">";
        // line 27
        echo (isset($context["settings_analytics"]) ? $context["settings_analytics"] : null);
        echo "</a></li>
\t\t\t\t<li><a href=\"#text_tab_help\" data-toggle=\"tab\">";
        // line 28
        echo (isset($context["text_tab_help"]) ? $context["text_tab_help"] : null);
        echo "</a></li>
\t\t\t</ul>
\t\t\t<div class=\"tab-content\">
\t\t\t\t<div id=\"settings_main\" class=\"tab-pane fade in active\">
\t\t\t\t\t<div class=\"col-xs-12\" style=\"border: 1px solid #ddd; border-top: none;\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 34
        echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 37
            echo "\t\t\t\t\t\t\t\t\t";
            $context["cur_language_id"] = $this->getAttribute($context["language"], "language_id", array());
            // line 38
            echo "\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
            // line 39
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"buyoneclick[name][";
            // line 40
            echo (isset($context["cur_language_id"]) ? $context["cur_language_id"] : null);
            echo "]\" placeholder=\"";
            echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
            echo "\" value=\"";
            echo (($this->getAttribute($this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "name", array(), "any", false, true), (isset($context["cur_language_id"]) ? $context["cur_language_id"] : null), array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "name", array()), (isset($context["cur_language_id"]) ? $context["cur_language_id"] : null), array(), "array")) : (""));
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"input-success_type\">";
        // line 46
        echo (isset($context["entry_success_type"]) ? $context["entry_success_type"] : null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<select name=\"buyoneclick[success_type]\" id=\"input-success_type\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
        // line 49
        if (($this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "success_type", array(), "any", true, true) && ($this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "success_type", array()) != "1"))) {
            // line 50
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            echo (isset($context["success_type0"]) ? $context["success_type0"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            // line 51
            echo (isset($context["success_type1"]) ? $context["success_type1"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 53
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            echo (isset($context["success_type0"]) ? $context["success_type0"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            // line 54
            echo (isset($context["success_type1"]) ? $context["success_type1"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        // line 56
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t<p class=\"hidden\">";
        // line 57
        echo (isset($context["success_type_tooltip"]) ? $context["success_type_tooltip"] : null);
        echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">";
        // line 61
        echo (isset($context["entry_success_field"]) ? $context["entry_success_field"] : null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 64
            echo "\t\t\t\t\t\t\t\t\t";
            $context["cur_language_id"] = $this->getAttribute($context["language"], "language_id", array());
            // line 65
            echo "\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><img src=\"language/";
            // line 66
            echo $this->getAttribute($context["language"], "code", array());
            echo "/";
            echo $this->getAttribute($context["language"], "code", array());
            echo ".png\" title=\"";
            echo $this->getAttribute($context["language"], "name", array());
            echo "\" /></span>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"buyoneclick[success_field][";
            // line 67
            echo (isset($context["cur_language_id"]) ? $context["cur_language_id"] : null);
            echo "]\" placeholder=\"";
            echo (isset($context["entry_success_field"]) ? $context["entry_success_field"] : null);
            echo "\" value=\"";
            echo (($this->getAttribute($this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "success_field", array(), "any", false, true), (isset($context["cur_language_id"]) ? $context["cur_language_id"] : null), array(), "array", true, true)) ? ($this->getAttribute($this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "success_field", array()), (isset($context["cur_language_id"]) ? $context["cur_language_id"] : null), array(), "array")) : (""));
            echo "\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "\t\t\t\t\t\t\t\t<p>";
        echo (isset($context["success_field_tooltip"]) ? $context["success_field_tooltip"] : null);
        echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\" style=\"border-top: 1px solid #ccc;\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
        // line 76
        echo (isset($context["field1_title"]) ? $context["field1_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<select name=\"buyoneclick[field1_status]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 79
        if (($this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "field1_status", array()) == "1")) {
            // line 80
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            // line 81
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">";
            // line 82
            echo (isset($context["field_required"]) ? $context["field_required"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute(        // line 83
(isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "field1_status", array()) == "2")) {
            // line 84
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            // line 85
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\" selected=\"selected\">";
            // line 86
            echo (isset($context["field_required"]) ? $context["field_required"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 88
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            // line 89
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">";
            // line 90
            echo (isset($context["field_required"]) ? $context["field_required"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 92
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
        // line 98
        echo (isset($context["field2_title"]) ? $context["field2_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<select name=\"buyoneclick[field2_status]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 101
        if (($this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "field2_status", array()) == "1")) {
            // line 102
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            // line 103
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">";
            // line 104
            echo (isset($context["field_required"]) ? $context["field_required"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute(        // line 105
(isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "field2_status", array()) == "2")) {
            // line 106
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            // line 107
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\" selected=\"selected\">";
            // line 108
            echo (isset($context["field_required"]) ? $context["field_required"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 110
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            // line 111
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">";
            // line 112
            echo (isset($context["field_required"]) ? $context["field_required"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 114
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\" style=\"border: none;\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
        // line 122
        echo (isset($context["field3_title"]) ? $context["field3_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<select name=\"buyoneclick[field3_status]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 125
        if (($this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "field3_status", array()) == "1")) {
            // line 126
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            // line 127
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">";
            // line 128
            echo (isset($context["field_required"]) ? $context["field_required"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute(        // line 129
(isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "field3_status", array()) == "2")) {
            // line 130
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            // line 131
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\" selected=\"selected\">";
            // line 132
            echo (isset($context["field_required"]) ? $context["field_required"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 134
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            // line 135
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">";
            // line 136
            echo (isset($context["field_required"]) ? $context["field_required"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 138
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
        // line 144
        echo (isset($context["field4_title"]) ? $context["field4_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<select name=\"buyoneclick[field4_status]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 147
        if (($this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "field4_status", array()) == "1")) {
            // line 148
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            // line 149
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">";
            // line 150
            echo (isset($context["field_required"]) ? $context["field_required"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute(        // line 151
(isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "field1_status", array()) == "2")) {
            // line 152
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            // line 153
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\" selected=\"selected\">";
            // line 154
            echo (isset($context["field_required"]) ? $context["field_required"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 156
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            // line 157
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"2\">";
            // line 158
            echo (isset($context["field_required"]) ? $context["field_required"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 160
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\" style=\"border: none;\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
        // line 168
        echo (isset($context["agree_title"]) ? $context["agree_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<select name=\"buyoneclick[agree_status]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
        // line 171
        echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["informations"]) ? $context["informations"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
            // line 173
            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["information"], "information_id", array()) == $this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "agree_status", array()))) {
                // line 174
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 176
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo $this->getAttribute($context["information"], "information_id", array());
                echo "\">";
                echo $this->getAttribute($context["information"], "title", array());
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 178
            echo "\t\t\t\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
        // line 185
        echo (isset($context["entry_option_status"]) ? $context["entry_option_status"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<select name=\"buyoneclick[option_status]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 188
        if ($this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "option_status", array())) {
            // line 189
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 190
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 192
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 193
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 195
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\" style=\"border: none;\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
        // line 203
        echo (isset($context["entry_validation_type"]) ? $context["entry_validation_type"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<select name=\"buyoneclick[validation_type]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 206
        if (($this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "validation_type", array()) == (isset($context["value_validation_type1"]) ? $context["value_validation_type1"] : null))) {
            // line 207
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            // line 208
            echo (isset($context["value_validation_type1"]) ? $context["value_validation_type1"] : null);
            echo "\" selected=\"selected\">";
            echo (isset($context["text_validation_type1"]) ? $context["text_validation_type1"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            // line 209
            echo (isset($context["value_validation_type2"]) ? $context["value_validation_type2"] : null);
            echo "\">";
            echo (isset($context["text_validation_type2"]) ? $context["text_validation_type2"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        } elseif (($this->getAttribute(        // line 210
(isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "validation_type", array()) == (isset($context["value_validation_type2"]) ? $context["value_validation_type2"] : null))) {
            // line 211
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            // line 212
            echo (isset($context["value_validation_type1"]) ? $context["value_validation_type1"] : null);
            echo "\">";
            echo (isset($context["text_validation_type1"]) ? $context["text_validation_type1"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            // line 213
            echo (isset($context["value_validation_type2"]) ? $context["value_validation_type2"] : null);
            echo "\" selected=\"selected\">";
            echo (isset($context["text_validation_type2"]) ? $context["text_validation_type2"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 215
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            // line 216
            echo (isset($context["value_validation_type1"]) ? $context["value_validation_type1"] : null);
            echo "\">";
            echo (isset($context["text_validation_type1"]) ? $context["text_validation_type1"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
            // line 217
            echo (isset($context["value_validation_type2"]) ? $context["value_validation_type2"] : null);
            echo "\">";
            echo (isset($context["text_validation_type2"]) ? $context["text_validation_type2"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 219
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
        // line 225
        echo (isset($context["entry_style_status"]) ? $context["entry_style_status"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<select name=\"buyoneclick[style_status]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 228
        if ($this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "style_status", array())) {
            // line 229
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 230
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 232
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 233
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 235
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\" style=\"border: none;\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\">";
        // line 243
        echo (isset($context["text_stock_warning"]) ? $context["text_stock_warning"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<select name=\"buyoneclick[stock_status]\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 246
        if ($this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "stock_status", array())) {
            // line 247
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 248
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 250
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 251
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 253
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\" style=\"border-top: 1px solid #ddd;\">
\t\t\t\t\t\t\t<div class=\"col-sm-4 col-xs-12\">
\t\t\t\t\t\t\t\t<p class=\"text-center h4\" for=\"input-status_product\">";
        // line 264
        echo (isset($context["entry_status_product"]) ? $context["entry_status_product"] : null);
        echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4 col-xs-12\">
\t\t\t\t\t\t\t\t<p class=\"text-center h4\" for=\"input-status_category\" style=\"padding-top:0px;\">";
        // line 267
        echo (isset($context["entry_status_category"]) ? $context["entry_status_category"] : null);
        echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4 col-xs-12\">
\t\t\t\t\t\t\t\t<p class=\"text-center h4\" for=\"input-status_module\" style=\"padding-top:0px;\">";
        // line 270
        echo (isset($context["entry_status_module"]) ? $context["entry_status_module"] : null);
        echo "</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\" style=\"border-top: none; padding-top: 5px;\">
\t\t\t\t\t\t\t<div class=\"col-sm-4 col-xs-12\">
\t\t\t\t\t\t\t\t<select name=\"buyoneclick[status_product]\" id=\"input-status_product\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
        // line 276
        if ($this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "status_product", array())) {
            // line 277
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 278
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 280
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 281
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        // line 283
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4 col-xs-12\">
\t\t\t\t\t\t\t\t<select name=\"buyoneclick[status_category]\" id=\"input-status_category\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
        // line 287
        if ($this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "status_category", array())) {
            // line 288
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 289
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 291
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 292
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        // line 294
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-4 col-xs-12\">
\t\t\t\t\t\t\t\t<select name=\"buyoneclick[status_module]\" id=\"input-status_module\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
        // line 298
        if ($this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "status_module", array())) {
            // line 299
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 300
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 302
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 303
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        // line 305
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"settings_sms\" class=\"tab-pane fade\">
\t\t\t\t\t<!-- SMS settings -->
\t\t\t\t\t<div class=\"col-xs-12\" style=\"border: 1px solid #ddd; border-top: none;\">
\t\t\t\t\t\t<!-- SMS.ru -->
\t\t\t\t\t\t<div class=\"col-sm-12 text-center h2\">";
        // line 314
        echo (isset($context["smsru_form_title"]) ? $context["smsru_form_title"] : null);
        echo "</div>
\t\t\t\t\t\t<div class=\"col-sm-12 text-center h4\" style=\"text-transform:uppercase; padding-bottom:1em;\">";
        // line 315
        echo (isset($context["smsru_form_subtitle"]) ? $context["smsru_form_subtitle"] : null);
        echo "</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"smsru_api\">";
        // line 317
        echo (isset($context["smsru_api_title"]) ? $context["smsru_api_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<input type=\"text\" name=\"buyoneclick[smsru_api]\" value=\"";
        // line 319
        echo $this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "smsru_api", array());
        echo "\" placeholder=\"";
        echo (isset($context["smsru_api_title"]) ? $context["smsru_api_title"] : null);
        echo "\" id=\"smsru_api\" class=\"form-control\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-offset-2 col-sm-10\">
\t\t\t\t\t\t\t\t";
        // line 322
        echo (isset($context["smsru_api_tooltip"]) ? $context["smsru_api_tooltip"] : null);
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\" style=\"border:none;\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"smsru_login\">";
        // line 328
        echo (isset($context["smsru_login_title"]) ? $context["smsru_login_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"buyoneclick[smsru_login]\" value=\"";
        // line 330
        echo $this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "smsru_login", array());
        echo "\" placeholder=\"";
        echo (isset($context["smsru_login_title"]) ? $context["smsru_login_title"] : null);
        echo "\" id=\"smsru_login\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"smsru_password\">";
        // line 336
        echo (isset($context["smsru_password_title"]) ? $context["smsru_password_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"buyoneclick[smsru_password]\" value=\"";
        // line 338
        echo $this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "smsru_password", array());
        echo "\" placeholder=\"";
        echo (isset($context["smsru_password_title"]) ? $context["smsru_password_title"] : null);
        echo "\" id=\"smsru_password\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\" style=\"border:none;\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"smsru_number\">";
        // line 346
        echo (isset($context["smsru_number_title"]) ? $context["smsru_number_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"buyoneclick[smsru_number]\" value=\"";
        // line 348
        echo $this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "smsru_number", array());
        echo "\" placeholder=\"";
        echo (isset($context["smsru_number_title"]) ? $context["smsru_number_title"] : null);
        echo "\" id=\"smsru_number\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-4 col-sm-8\">
\t\t\t\t\t\t\t\t\t\t";
        // line 351
        echo (isset($context["smsru_number_tooltip"]) ? $context["smsru_number_tooltip"] : null);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"smsru_name\">";
        // line 357
        echo (isset($context["smsru_name_title"]) ? $context["smsru_name_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"buyoneclick[smsru_name]\" value=\"";
        // line 359
        echo $this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "smsru_name", array());
        echo "\" placeholder=\"";
        echo (isset($context["smsru_name_title"]) ? $context["smsru_name_title"] : null);
        echo "\" id=\"smsru_name\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-4 col-sm-8\">
\t\t\t\t\t\t\t\t\t\t";
        // line 362
        echo (isset($context["smsru_name_tooltip"]) ? $context["smsru_name_tooltip"] : null);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\" style=\"border:none;\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"smsru_admin_sms\">";
        // line 370
        echo (isset($context["smsru_admin_sms_title"]) ? $context["smsru_admin_sms_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"buyoneclick[smsru_admin_sms]\" value=\"";
        // line 372
        echo $this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "smsru_admin_sms", array());
        echo "\" placeholder=\"";
        echo (isset($context["smsru_admin_sms_title"]) ? $context["smsru_admin_sms_title"] : null);
        echo "\" id=\"smsru_admin_sms\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-4 col-sm-8\">
\t\t\t\t\t\t\t\t\t\t";
        // line 375
        echo (isset($context["smsru_admin_sms_tooltip"]) ? $context["smsru_admin_sms_tooltip"] : null);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"smsru_status\">";
        // line 381
        echo (isset($context["smsru_admin_status_title"]) ? $context["smsru_admin_status_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<select name=\"buyoneclick[smsru_admin_status]\" id=\"smsru_admin_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 384
        if ($this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "smsru_admin_status", array())) {
            // line 385
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 386
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 388
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 389
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 391
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\" style=\"border:none;\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"smsru_client_sms\">";
        // line 399
        echo (isset($context["smsru_client_sms_title"]) ? $context["smsru_client_sms_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"buyoneclick[smsru_client_sms]\" value=\"";
        // line 401
        echo $this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "smsru_client_sms", array());
        echo "\" placeholder=\"";
        echo (isset($context["smsru_client_sms_title"]) ? $context["smsru_client_sms_title"] : null);
        echo "\" id=\"smsru_client_sms\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-4 col-sm-8\">
\t\t\t\t\t\t\t\t\t\t";
        // line 404
        echo (isset($context["smsru_client_sms_tooltip"]) ? $context["smsru_client_sms_tooltip"] : null);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"smsru_client_status\">";
        // line 410
        echo (isset($context["smsru_client_status_title"]) ? $context["smsru_client_status_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<select name=\"buyoneclick[smsru_client_status]\" id=\"smsru_client_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 413
        if ($this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "smsru_client_status", array())) {
            // line 414
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 415
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 417
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 418
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 420
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-4 col-sm-8\">
\t\t\t\t\t\t\t\t\t\t";
        // line 423
        echo (isset($context["smsru_client_status_tooltip"]) ? $context["smsru_client_status_tooltip"] : null);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t<hr style=\"border-color: #000;\" />
\t\t\t\t\t\t<!-- SMSC.ua -->
\t\t\t\t\t\t<div class=\"col-sm-12 text-center h2\" style=\"margin-top:0;\">";
        // line 430
        echo (isset($context["smscua_form_title"]) ? $context["smscua_form_title"] : null);
        echo "</div>
\t\t\t\t\t\t<div class=\"col-sm-12 text-center h4\" style=\"text-transform:uppercase; padding-bottom:1em;\">";
        // line 431
        echo (isset($context["smscua_form_subtitle"]) ? $context["smscua_form_subtitle"] : null);
        echo "</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"smscua_login\">";
        // line 435
        echo (isset($context["smscua_login_title"]) ? $context["smscua_login_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"buyoneclick[smscua_login]\" value=\"";
        // line 437
        echo $this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "smscua_login", array());
        echo "\" placeholder=\"";
        echo (isset($context["smscua_login_title"]) ? $context["smscua_login_title"] : null);
        echo "\" id=\"smscua_login\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"smscua_password\">";
        // line 443
        echo (isset($context["smscua_password_title"]) ? $context["smscua_password_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"buyoneclick[smscua_password]\" value=\"";
        // line 445
        echo $this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "smscua_password", array());
        echo "\" placeholder=\"";
        echo (isset($context["smscua_password_title"]) ? $context["smscua_password_title"] : null);
        echo "\" id=\"smscua_password\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\" style=\"border:none;\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"smscua_number\">";
        // line 453
        echo (isset($context["smscua_number_title"]) ? $context["smscua_number_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"buyoneclick[smscua_number]\" value=\"";
        // line 455
        echo $this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "smscua_number", array());
        echo "\" placeholder=\"";
        echo (isset($context["smscua_number_title"]) ? $context["smscua_number_title"] : null);
        echo "\" id=\"smscua_number\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-4 col-sm-8\">
\t\t\t\t\t\t\t\t\t\t";
        // line 458
        echo (isset($context["smscua_number_tooltip"]) ? $context["smscua_number_tooltip"] : null);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"smscua_name\">";
        // line 464
        echo (isset($context["smscua_name_title"]) ? $context["smscua_name_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"buyoneclick[smscua_name]\" value=\"";
        // line 466
        echo $this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "smscua_name", array());
        echo "\" placeholder=\"";
        echo (isset($context["smscua_name_title"]) ? $context["smscua_name_title"] : null);
        echo "\" id=\"smscua_name\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-4 col-sm-8\">
\t\t\t\t\t\t\t\t\t\t";
        // line 469
        echo (isset($context["smscua_name_tooltip"]) ? $context["smscua_name_tooltip"] : null);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\" style=\"border:none;\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"smscua_admin_sms\">";
        // line 477
        echo (isset($context["smscua_admin_sms_title"]) ? $context["smscua_admin_sms_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"buyoneclick[smscua_admin_sms]\" value=\"";
        // line 479
        echo $this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "smscua_admin_sms", array());
        echo "\" placeholder=\"";
        echo (isset($context["smscua_admin_sms_title"]) ? $context["smscua_admin_sms_title"] : null);
        echo "\" id=\"smscua_admin_sms\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-4 col-sm-8\">
\t\t\t\t\t\t\t\t\t\t";
        // line 482
        echo (isset($context["smscua_admin_sms_tooltip"]) ? $context["smscua_admin_sms_tooltip"] : null);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"smscua_admin_status\">";
        // line 488
        echo (isset($context["smscua_admin_status_title"]) ? $context["smscua_admin_status_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<select name=\"buyoneclick[smscua_admin_status]\" id=\"smscua_admin_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 491
        if ($this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "smscua_admin_status", array())) {
            // line 492
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 493
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 495
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 496
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 498
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\" style=\"border:none;\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"smscua_client_sms\">";
        // line 506
        echo (isset($context["smscua_client_sms_title"]) ? $context["smscua_client_sms_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"buyoneclick[smscua_client_sms]\" value=\"";
        // line 508
        echo $this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "smscua_client_sms", array());
        echo "\" placeholder=\"";
        echo (isset($context["smscua_client_sms_title"]) ? $context["smscua_client_sms_title"] : null);
        echo "\" id=\"smscua_client_sms\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-4 col-sm-8\">
\t\t\t\t\t\t\t\t\t\t";
        // line 511
        echo (isset($context["smscua_client_sms_tooltip"]) ? $context["smscua_client_sms_tooltip"] : null);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-sm-4 control-label\" for=\"smscua_client_status\">";
        // line 517
        echo (isset($context["smscua_client_status_title"]) ? $context["smscua_client_status_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-8\">
\t\t\t\t\t\t\t\t\t\t<select name=\"buyoneclick[smscua_client_status]\" id=\"smscua_client_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 520
        if ($this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "smscua_client_status", array())) {
            // line 521
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 522
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 524
            echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 525
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 527
        echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-sm-offset-4 col-sm-8\">
\t\t\t\t\t\t\t\t\t\t";
        // line 530
        echo (isset($context["smscua_client_status_tooltip"]) ? $context["smscua_client_status_tooltip"] : null);
        echo "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<!-- End SMS settings -->
\t\t\t\t</div>
\t\t\t\t<div id=\"settings_analytics\" class=\"tab-pane fade\">
\t\t\t\t\t<!-- Analytics settings -->
\t\t\t\t\t<div class=\"col-xs-12\" style=\"border: 1px solid #ddd; border-top: none;\">
\t\t\t\t\t\t<!-- Yandex.ru -->
\t\t\t\t\t\t<div class=\"col-sm-12 text-center h2\" style=\"margin:1em auto\">";
        // line 542
        echo (isset($context["ya_form_title"]) ? $context["ya_form_title"] : null);
        echo "</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-md-4 col-sm-12 col-xs-12 text-right\" for=\"ya_counter\">";
        // line 546
        echo (isset($context["ya_counter_title"]) ? $context["ya_counter_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"buyoneclick[ya_counter]\" value=\"";
        // line 548
        echo $this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "ya_counter", array());
        echo "\" placeholder=\"";
        echo (isset($context["ya_counter_title"]) ? $context["ya_counter_title"] : null);
        echo "\" id=\"ya_counter\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-md-4 col-sm-12 col-xs-12 text-right\" for=\"ya_identificator\">";
        // line 554
        echo (isset($context["ya_identificator_title"]) ? $context["ya_identificator_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"buyoneclick[ya_identificator]\" value=\"";
        // line 556
        echo $this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "ya_identificator", array());
        echo "\" placeholder=\"";
        echo (isset($context["ya_identificator_title"]) ? $context["ya_identificator_title"] : null);
        echo "\" id=\"ya_identificator\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\" style=\"border:none;\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-md-4 col-sm-12 col-xs-12 text-right\" for=\"ya_identificator_send\">";
        // line 564
        echo (isset($context["ya_identificator_send_title"]) ? $context["ya_identificator_send_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"buyoneclick[ya_identificator_send]\" value=\"";
        // line 566
        echo $this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "ya_identificator_send", array());
        echo "\" placeholder=\"";
        echo (isset($context["ya_identificator_send_title"]) ? $context["ya_identificator_send_title"] : null);
        echo "\" id=\"ya_identificator_send\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-md-4 col-sm-12 col-xs-12 text-right\" for=\"ya_identificator_success\">";
        // line 572
        echo (isset($context["ya_identificator_success_title"]) ? $context["ya_identificator_success_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"buyoneclick[ya_identificator_success]\" value=\"";
        // line 574
        echo $this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "ya_identificator_success", array());
        echo "\" placeholder=\"";
        echo (isset($context["ya_identificator_success_title"]) ? $context["ya_identificator_success_title"] : null);
        echo "\" id=\"ya_identificator_success\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\" style=\"border:none;\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"ya_target_status\">";
        // line 580
        echo (isset($context["ya_target_status_title"]) ? $context["ya_target_status_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<select name=\"buyoneclick[ya_status]\" id=\"ya_target_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
        // line 583
        if ($this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "ya_status", array())) {
            // line 584
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 585
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 587
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 588
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        // line 590
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t<hr style=\"border-color: #000;\" />
\t\t\t\t\t\t<!-- Google.com -->
\t\t\t\t\t\t<div class=\"col-sm-12 text-center h2\" style=\"margin:1em auto\">";
        // line 595
        echo (isset($context["google_form_title"]) ? $context["google_form_title"] : null);
        echo "</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-md-4 col-sm-12 col-xs-12 text-right\" for=\"google_category_btn\">";
        // line 599
        echo (isset($context["google_category_btn_title"]) ? $context["google_category_btn_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"buyoneclick[google_category_btn]\" value=\"";
        // line 601
        echo $this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "google_category_btn", array());
        echo "\" placeholder=\"";
        echo (isset($context["google_category_btn_title"]) ? $context["google_category_btn_title"] : null);
        echo "\" id=\"google_category_btn\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-md-4 col-sm-12 col-xs-12 text-right\" for=\"google_action_btn\">";
        // line 607
        echo (isset($context["google_action_btn_title"]) ? $context["google_action_btn_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"buyoneclick[google_action_btn]\" value=\"";
        // line 609
        echo $this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "google_action_btn", array());
        echo "\" placeholder=\"";
        echo (isset($context["google_action_btn_title"]) ? $context["google_action_btn_title"] : null);
        echo "\" id=\"google_action_btn\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\" style=\"border:none;\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-md-4 col-sm-12 col-xs-12 text-right\" for=\"google_category_send\">";
        // line 617
        echo (isset($context["google_category_send_title"]) ? $context["google_category_send_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"buyoneclick[google_category_send]\" value=\"";
        // line 619
        echo $this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "google_category_send", array());
        echo "\" placeholder=\"";
        echo (isset($context["google_category_send_title"]) ? $context["google_category_send_title"] : null);
        echo "\" id=\"google_category_send\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-md-4 col-sm-12 col-xs-12 text-right\" for=\"google_action_send\">";
        // line 625
        echo (isset($context["google_action_send_title"]) ? $context["google_action_send_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"buyoneclick[google_action_send]\" value=\"";
        // line 627
        echo $this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "google_action_send", array());
        echo "\" placeholder=\"";
        echo (isset($context["google_action_send_title"]) ? $context["google_action_send_title"] : null);
        echo "\" id=\"google_action_send\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\" style=\"border:none;\">
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-md-4 col-sm-12 col-xs-12 text-right\" for=\"google_category_success\">";
        // line 635
        echo (isset($context["google_category_success_title"]) ? $context["google_category_success_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"buyoneclick[google_category_success]\" value=\"";
        // line 637
        echo $this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "google_category_success", array());
        echo "\" placeholder=\"";
        echo (isset($context["google_category_success_title"]) ? $context["google_category_success_title"] : null);
        echo "\" id=\"google_category_success\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-6 col-xs-12\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<label class=\"col-md-4 col-sm-12 col-xs-12 text-right\" for=\"google_action_success\">";
        // line 643
        echo (isset($context["google_action_success_title"]) ? $context["google_action_success_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8 col-sm-12 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" name=\"buyoneclick[google_action_success]\" value=\"";
        // line 645
        echo $this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "google_action_success", array());
        echo "\" placeholder=\"";
        echo (isset($context["google_action_success_title"]) ? $context["google_action_success_title"] : null);
        echo "\" id=\"google_action_success\" class=\"form-control\" />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\" style=\"border:none;\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"google_target_status\">";
        // line 651
        echo (isset($context["google_target_status_title"]) ? $context["google_target_status_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<select name=\"buyoneclick[google_status]\" id=\"google_target_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
        // line 654
        if ($this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "google_status", array())) {
            // line 655
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 656
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 658
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 659
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        // line 661
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t<hr style=\"border-color: #000;\" />
\t\t\t\t\t\t<!-- Extended analytics -->
\t\t\t\t\t\t<div class=\"col-sm-12 text-center h2\" style=\"margin:1em auto\">";
        // line 666
        echo (isset($context["exan_form_title"]) ? $context["exan_form_title"] : null);
        echo "</div>
\t\t\t\t\t\t<div class=\"form-group\" style=\"border:none;\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\" for=\"exan_status\">";
        // line 668
        echo (isset($context["exan_status_title"]) ? $context["exan_status_title"] : null);
        echo "</label>
\t\t\t\t\t\t\t<div class=\"col-sm-10\">
\t\t\t\t\t\t\t\t<select name=\"buyoneclick[exan_status]\" id=\"exan_status\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t";
        // line 671
        if ($this->getAttribute((isset($context["buyoneclick"]) ? $context["buyoneclick"] : null), "exan_status", array())) {
            // line 672
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\" selected=\"selected\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\">";
            // line 673
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 675
            echo "\t\t\t\t\t\t\t\t\t\t<option value=\"1\">";
            echo (isset($context["text_enabled"]) ? $context["text_enabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t<option value=\"0\" selected=\"selected\">";
            // line 676
            echo (isset($context["text_disabled"]) ? $context["text_disabled"] : null);
            echo "</option>
\t\t\t\t\t\t\t\t\t";
        }
        // line 678
        echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div id=\"text_tab_help\" class=\"tab-pane fade\">
\t\t\t\t\t<div class=\"col-xs-12\" style=\"border: 1px solid #ddd; border-top: none;\">
\t\t\t\t\t\t<div class=\"h4 text-primary\" style=\"margin-bottom:0;\">
\t\t\t\t\t\t\t<strong>";
        // line 686
        echo (isset($context["text_tab_help_title"]) ? $context["text_tab_help_title"] : null);
        echo "</strong>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text_help\" style=\"margin-top:2em;\">";
        // line 688
        echo (isset($context["text_help"]) ? $context["text_help"] : null);
        echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t</div>
\t<script type=\"text/javascript\"><!--
\t\t\$('#language a:first').tab('show');
\t\t\$('#sms_settings a:first').tab('show');
\t\t\$('#analytics_settings a:first').tab('show');
\t\t//-->
\t</script>
</div>
";
        // line 701
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "extension/module/buyoneclick.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1584 => 701,  1568 => 688,  1563 => 686,  1553 => 678,  1548 => 676,  1543 => 675,  1538 => 673,  1533 => 672,  1531 => 671,  1525 => 668,  1520 => 666,  1513 => 661,  1508 => 659,  1503 => 658,  1498 => 656,  1493 => 655,  1491 => 654,  1485 => 651,  1474 => 645,  1469 => 643,  1458 => 637,  1453 => 635,  1440 => 627,  1435 => 625,  1424 => 619,  1419 => 617,  1406 => 609,  1401 => 607,  1390 => 601,  1385 => 599,  1378 => 595,  1371 => 590,  1366 => 588,  1361 => 587,  1356 => 585,  1351 => 584,  1349 => 583,  1343 => 580,  1332 => 574,  1327 => 572,  1316 => 566,  1311 => 564,  1298 => 556,  1293 => 554,  1282 => 548,  1277 => 546,  1270 => 542,  1255 => 530,  1250 => 527,  1245 => 525,  1240 => 524,  1235 => 522,  1230 => 521,  1228 => 520,  1222 => 517,  1213 => 511,  1205 => 508,  1200 => 506,  1190 => 498,  1185 => 496,  1180 => 495,  1175 => 493,  1170 => 492,  1168 => 491,  1162 => 488,  1153 => 482,  1145 => 479,  1140 => 477,  1129 => 469,  1121 => 466,  1116 => 464,  1107 => 458,  1099 => 455,  1094 => 453,  1081 => 445,  1076 => 443,  1065 => 437,  1060 => 435,  1053 => 431,  1049 => 430,  1039 => 423,  1034 => 420,  1029 => 418,  1024 => 417,  1019 => 415,  1014 => 414,  1012 => 413,  1006 => 410,  997 => 404,  989 => 401,  984 => 399,  974 => 391,  969 => 389,  964 => 388,  959 => 386,  954 => 385,  952 => 384,  946 => 381,  937 => 375,  929 => 372,  924 => 370,  913 => 362,  905 => 359,  900 => 357,  891 => 351,  883 => 348,  878 => 346,  865 => 338,  860 => 336,  849 => 330,  844 => 328,  835 => 322,  827 => 319,  822 => 317,  817 => 315,  813 => 314,  802 => 305,  797 => 303,  792 => 302,  787 => 300,  782 => 299,  780 => 298,  774 => 294,  769 => 292,  764 => 291,  759 => 289,  754 => 288,  752 => 287,  746 => 283,  741 => 281,  736 => 280,  731 => 278,  726 => 277,  724 => 276,  715 => 270,  709 => 267,  703 => 264,  690 => 253,  685 => 251,  680 => 250,  675 => 248,  670 => 247,  668 => 246,  662 => 243,  652 => 235,  647 => 233,  642 => 232,  637 => 230,  632 => 229,  630 => 228,  624 => 225,  616 => 219,  609 => 217,  603 => 216,  598 => 215,  591 => 213,  585 => 212,  580 => 211,  578 => 210,  572 => 209,  566 => 208,  561 => 207,  559 => 206,  553 => 203,  543 => 195,  538 => 193,  533 => 192,  528 => 190,  523 => 189,  521 => 188,  515 => 185,  507 => 179,  501 => 178,  493 => 176,  485 => 174,  482 => 173,  478 => 172,  474 => 171,  468 => 168,  458 => 160,  453 => 158,  449 => 157,  444 => 156,  439 => 154,  435 => 153,  430 => 152,  428 => 151,  424 => 150,  420 => 149,  415 => 148,  413 => 147,  407 => 144,  399 => 138,  394 => 136,  390 => 135,  385 => 134,  380 => 132,  376 => 131,  371 => 130,  369 => 129,  365 => 128,  361 => 127,  356 => 126,  354 => 125,  348 => 122,  338 => 114,  333 => 112,  329 => 111,  324 => 110,  319 => 108,  315 => 107,  310 => 106,  308 => 105,  304 => 104,  300 => 103,  295 => 102,  293 => 101,  287 => 98,  279 => 92,  274 => 90,  270 => 89,  265 => 88,  260 => 86,  256 => 85,  251 => 84,  249 => 83,  245 => 82,  241 => 81,  236 => 80,  234 => 79,  228 => 76,  218 => 70,  205 => 67,  197 => 66,  194 => 65,  191 => 64,  187 => 63,  182 => 61,  175 => 57,  172 => 56,  167 => 54,  162 => 53,  157 => 51,  152 => 50,  150 => 49,  144 => 46,  139 => 43,  126 => 40,  118 => 39,  115 => 38,  112 => 37,  108 => 36,  103 => 34,  94 => 28,  90 => 27,  86 => 26,  82 => 25,  79 => 24,  71 => 20,  69 => 19,  65 => 18,  59 => 14,  48 => 12,  44 => 11,  39 => 9,  32 => 7,  28 => 6,  19 => 1,);
    }
}
/* {{ header }}{{ column_left }}*/
/* <div id="content">*/
/* 	<div class="page-header">*/
/* 		<div class="container-fluid">*/
/* 			<div class="pull-right">*/
/* 				<button type="submit" form="form-buyoneclick" data-toggle="tooltip" title="{{ button_save }}" class="btn btn-primary"><i class="fa fa-save"></i></button>*/
/* 				<a href="{{ cancel }}" data-toggle="tooltip" title="{{ button_cancel }}" class="btn btn-default"><i class="fa fa-reply"></i></a>*/
/* 			</div>*/
/* 			<h1 style="display:block;font-size: 20px;">{{ heading_title }}</h1>*/
/* 			<ul class="breadcrumb">*/
/* 				{% for breadcrumb in breadcrumbs %}*/
/* 					<li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/* 				{% endfor %}*/
/* 			</ul>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="container-fluid">*/
/* 		<form action="{{ action }}" method="post" enctype="multipart/form-data" id="form-buyoneclick" class="form-horizontal">*/
/* 			{% if error_warning %}*/
/* 				<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/* 					<button type="button" class="close" data-dismiss="alert">&times;</button>*/
/* 				</div>*/
/* 			{% endif %}*/
/* 			<ul class="nav nav-tabs" style="margin-bottom:0;">*/
/* 				<li class="active"><a href="#settings_main" data-toggle="tab">{{ settings_main }}</a></li>*/
/* 				<li><a href="#settings_sms" data-toggle="tab">{{ settings_sms }}</a></li>*/
/* 				<li><a href="#settings_analytics" data-toggle="tab">{{ settings_analytics }}</a></li>*/
/* 				<li><a href="#text_tab_help" data-toggle="tab">{{ text_tab_help }}</a></li>*/
/* 			</ul>*/
/* 			<div class="tab-content">*/
/* 				<div id="settings_main" class="tab-pane fade in active">*/
/* 					<div class="col-xs-12" style="border: 1px solid #ddd; border-top: none;">*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label">{{ entry_name }}</label>*/
/* 							<div class="col-sm-10">*/
/* 								{% for language in languages %}*/
/* 									{% set cur_language_id = language.language_id %}*/
/* 									<div class="input-group">*/
/* 										<span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/* 										<input type="text" name="buyoneclick[name][{{cur_language_id}}]" placeholder="{{ entry_name }}" value="{{ buyoneclick.name[cur_language_id] is defined ? buyoneclick.name[cur_language_id] }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label" for="input-success_type">{{ entry_success_type }}</label>*/
/* 							<div class="col-sm-10">*/
/* 								<select name="buyoneclick[success_type]" id="input-success_type" class="form-control">*/
/* 									{% if buyoneclick.success_type is defined and buyoneclick.success_type != '1' %}*/
/* 										<option value="0" selected="selected">{{ success_type0 }}</option>*/
/* 										<option value="1">{{ success_type1 }}</option>*/
/* 									{% else %}*/
/* 										<option value="0">{{ success_type0 }}</option>*/
/* 										<option value="1" selected="selected">{{ success_type1 }}</option>*/
/* 									{% endif %}*/
/* 								</select>*/
/* 								<p class="hidden">{{ success_type_tooltip }}</p>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label">{{ entry_success_field }}</label>*/
/* 							<div class="col-sm-10">*/
/* 								{% for language in languages %}*/
/* 									{% set cur_language_id = language.language_id %}*/
/* 									<div class="input-group">*/
/* 										<span class="input-group-addon"><img src="language/{{ language.code }}/{{ language.code }}.png" title="{{ language.name }}" /></span>*/
/* 										<input type="text" name="buyoneclick[success_field][{{cur_language_id}}]" placeholder="{{ entry_success_field }}" value="{{ buyoneclick.success_field[cur_language_id] is defined ? buyoneclick.success_field[cur_language_id] }}" class="form-control" />*/
/* 									</div>*/
/* 								{% endfor %}*/
/* 								<p>{{ success_field_tooltip }}</p>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group" style="border-top: 1px solid #ccc;">*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 									<label class="col-sm-4 control-label">{{ field1_title }}</label>*/
/* 									<div class="col-sm-8">*/
/* 										<select name="buyoneclick[field1_status]" class="form-control">*/
/* 											{% if buyoneclick.field1_status == '1' %}*/
/* 												<option value="0">{{ text_disabled }}</option>*/
/* 												<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 												<option value="2">{{ field_required }}</option>*/
/* 											{% elseif buyoneclick.field1_status == '2' %}*/
/* 												<option value="0">{{ text_disabled }}</option>*/
/* 												<option value="1">{{ text_enabled }}</option>*/
/* 												<option value="2" selected="selected">{{ field_required }}</option>*/
/* 											{% else %}*/
/* 												<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 												<option value="1">{{ text_enabled }}</option>*/
/* 												<option value="2">{{ field_required }}</option>*/
/* 											{% endif %}*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 									<label class="col-sm-4 control-label">{{ field2_title }}</label>*/
/* 									<div class="col-sm-8">*/
/* 										<select name="buyoneclick[field2_status]" class="form-control">*/
/* 											{% if buyoneclick.field2_status == '1' %}*/
/* 												<option value="0">{{ text_disabled }}</option>*/
/* 												<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 												<option value="2">{{ field_required }}</option>*/
/* 											{% elseif buyoneclick.field2_status == '2' %}*/
/* 												<option value="0">{{ text_disabled }}</option>*/
/* 												<option value="1">{{ text_enabled }}</option>*/
/* 												<option value="2" selected="selected">{{ field_required }}</option>*/
/* 											{% else %}*/
/* 												<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 												<option value="1">{{ text_enabled }}</option>*/
/* 												<option value="2">{{ field_required }}</option>*/
/* 											{% endif %}*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group" style="border: none;">*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 									<label class="col-sm-4 control-label">{{ field3_title }}</label>*/
/* 									<div class="col-sm-8">*/
/* 										<select name="buyoneclick[field3_status]" class="form-control">*/
/* 											{% if buyoneclick.field3_status == '1' %}*/
/* 												<option value="0">{{ text_disabled }}</option>*/
/* 												<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 												<option value="2">{{ field_required }}</option>*/
/* 											{% elseif buyoneclick.field3_status == '2' %}*/
/* 												<option value="0">{{ text_disabled }}</option>*/
/* 												<option value="1">{{ text_enabled }}</option>*/
/* 												<option value="2" selected="selected">{{ field_required }}</option>*/
/* 											{% else %}*/
/* 												<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 												<option value="1">{{ text_enabled }}</option>*/
/* 												<option value="2">{{ field_required }}</option>*/
/* 											{% endif %}*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 									<label class="col-sm-4 control-label">{{ field4_title }}</label>*/
/* 									<div class="col-sm-8">*/
/* 										<select name="buyoneclick[field4_status]" class="form-control">*/
/* 											{% if buyoneclick.field4_status == '1' %}*/
/* 												<option value="0">{{ text_disabled }}</option>*/
/* 												<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 												<option value="2">{{ field_required }}</option>*/
/* 											{% elseif buyoneclick.field1_status == '2' %}*/
/* 												<option value="0">{{ text_disabled }}</option>*/
/* 												<option value="1">{{ text_enabled }}</option>*/
/* 												<option value="2" selected="selected">{{ field_required }}</option>*/
/* 											{% else %}*/
/* 												<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 												<option value="1">{{ text_enabled }}</option>*/
/* 												<option value="2">{{ field_required }}</option>*/
/* 											{% endif %}*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group" style="border: none;">*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 									<label class="col-sm-4 control-label">{{ agree_title }}</label>*/
/* 									<div class="col-sm-8">*/
/* 										<select name="buyoneclick[agree_status]" class="form-control">*/
/* 											<option value="0">{{ text_disabled }}</option>*/
/* 											{% for information in informations %}*/
/* 												{% if information.information_id == buyoneclick.agree_status %}*/
/* 													<option value="{{ information.information_id }}" selected="selected">{{ information.title }}</option>*/
/* 												{% else %}*/
/* 													<option value="{{ information.information_id }}">{{ information.title }}</option>*/
/* 												{% endif %}*/
/* 											{% endfor %}*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 									<label class="col-sm-4 control-label">{{ entry_option_status }}</label>*/
/* 									<div class="col-sm-8">*/
/* 										<select name="buyoneclick[option_status]" class="form-control">*/
/* 											{% if buyoneclick.option_status %}*/
/* 												<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 												<option value="0">{{ text_disabled }}</option>*/
/* 											{% else %}*/
/* 												<option value="1">{{ text_enabled }}</option>*/
/* 												<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 											{% endif %}*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group" style="border: none;">*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 									<label class="col-sm-4 control-label">{{ entry_validation_type }}</label>*/
/* 									<div class="col-sm-8">*/
/* 										<select name="buyoneclick[validation_type]" class="form-control">*/
/* 											{% if buyoneclick.validation_type == value_validation_type1 %}*/
/* 												<option value="0">{{ text_disabled }}</option>*/
/* 												<option value="{{ value_validation_type1 }}" selected="selected">{{ text_validation_type1 }}</option>*/
/* 												<option value="{{ value_validation_type2 }}">{{ text_validation_type2 }}</option>*/
/* 											{% elseif buyoneclick.validation_type == value_validation_type2 %}*/
/* 												<option value="0">{{ text_disabled }}</option>*/
/* 												<option value="{{ value_validation_type1 }}">{{ text_validation_type1 }}</option>*/
/* 												<option value="{{ value_validation_type2 }}" selected="selected">{{ text_validation_type2 }}</option>*/
/* 											{% else %}*/
/* 												<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 												<option value="{{ value_validation_type1 }}">{{ text_validation_type1 }}</option>*/
/* 												<option value="{{ value_validation_type2 }}">{{ text_validation_type2 }}</option>*/
/* 											{% endif %}*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 									<label class="col-sm-4 control-label">{{ entry_style_status }}</label>*/
/* 									<div class="col-sm-8">*/
/* 										<select name="buyoneclick[style_status]" class="form-control">*/
/* 											{% if buyoneclick.style_status %}*/
/* 												<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 												<option value="0">{{ text_disabled }}</option>*/
/* 											{% else %}*/
/* 												<option value="1">{{ text_enabled }}</option>*/
/* 												<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 											{% endif %}*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group" style="border: none;">*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 									<label class="col-sm-4 control-label">{{ text_stock_warning }}</label>*/
/* 									<div class="col-sm-8">*/
/* 										<select name="buyoneclick[stock_status]" class="form-control">*/
/* 											{% if buyoneclick.stock_status %}*/
/* 												<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 												<option value="0">{{ text_disabled }}</option>*/
/* 											{% else %}*/
/* 												<option value="1">{{ text_enabled }}</option>*/
/* 												<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 											{% endif %}*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="row" style="border-top: 1px solid #ddd;">*/
/* 							<div class="col-sm-4 col-xs-12">*/
/* 								<p class="text-center h4" for="input-status_product">{{ entry_status_product }}</p>*/
/* 							</div>*/
/* 							<div class="col-sm-4 col-xs-12">*/
/* 								<p class="text-center h4" for="input-status_category" style="padding-top:0px;">{{ entry_status_category }}</p>*/
/* 							</div>*/
/* 							<div class="col-sm-4 col-xs-12">*/
/* 								<p class="text-center h4" for="input-status_module" style="padding-top:0px;">{{ entry_status_module }}</p>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group" style="border-top: none; padding-top: 5px;">*/
/* 							<div class="col-sm-4 col-xs-12">*/
/* 								<select name="buyoneclick[status_product]" id="input-status_product" class="form-control">*/
/* 									{% if buyoneclick.status_product %}*/
/* 										<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 										<option value="0">{{ text_disabled }}</option>*/
/* 									{% else %}*/
/* 										<option value="1">{{ text_enabled }}</option>*/
/* 										<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 									{% endif %}*/
/* 								</select>*/
/* 							</div>*/
/* 							<div class="col-sm-4 col-xs-12">*/
/* 								<select name="buyoneclick[status_category]" id="input-status_category" class="form-control">*/
/* 									{% if buyoneclick.status_category %}*/
/* 										<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 										<option value="0">{{ text_disabled }}</option>*/
/* 									{% else %}*/
/* 										<option value="1">{{ text_enabled }}</option>*/
/* 										<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 									{% endif %}*/
/* 								</select>*/
/* 							</div>*/
/* 							<div class="col-sm-4 col-xs-12">*/
/* 								<select name="buyoneclick[status_module]" id="input-status_module" class="form-control">*/
/* 									{% if buyoneclick.status_module %}*/
/* 										<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 										<option value="0">{{ text_disabled }}</option>*/
/* 									{% else %}*/
/* 										<option value="1">{{ text_enabled }}</option>*/
/* 										<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 									{% endif %}*/
/* 								</select>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div id="settings_sms" class="tab-pane fade">*/
/* 					<!-- SMS settings -->*/
/* 					<div class="col-xs-12" style="border: 1px solid #ddd; border-top: none;">*/
/* 						<!-- SMS.ru -->*/
/* 						<div class="col-sm-12 text-center h2">{{ smsru_form_title }}</div>*/
/* 						<div class="col-sm-12 text-center h4" style="text-transform:uppercase; padding-bottom:1em;">{{ smsru_form_subtitle }}</div>*/
/* 						<div class="form-group">*/
/* 							<label class="col-sm-2 control-label" for="smsru_api">{{ smsru_api_title }}</label>*/
/* 							<div class="col-sm-10">*/
/* 								<input type="text" name="buyoneclick[smsru_api]" value="{{ buyoneclick.smsru_api }}" placeholder="{{ smsru_api_title }}" id="smsru_api" class="form-control" />*/
/* 							</div>*/
/* 							<div class="col-sm-offset-2 col-sm-10">*/
/* 								{{ smsru_api_tooltip }}*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group" style="border:none;">*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 									<label class="col-sm-4 control-label" for="smsru_login">{{ smsru_login_title }}</label>*/
/* 									<div class="col-sm-8">*/
/* 										<input type="text" name="buyoneclick[smsru_login]" value="{{ buyoneclick.smsru_login }}" placeholder="{{ smsru_login_title }}" id="smsru_login" class="form-control" />*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 									<label class="col-sm-4 control-label" for="smsru_password">{{ smsru_password_title }}</label>*/
/* 									<div class="col-sm-8">*/
/* 										<input type="text" name="buyoneclick[smsru_password]" value="{{ buyoneclick.smsru_password }}" placeholder="{{ smsru_password_title }}" id="smsru_password" class="form-control" />*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group" style="border:none;">*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 									<label class="col-sm-4 control-label" for="smsru_number">{{ smsru_number_title }}</label>*/
/* 									<div class="col-sm-8">*/
/* 										<input type="text" name="buyoneclick[smsru_number]" value="{{ buyoneclick.smsru_number }}" placeholder="{{ smsru_number_title }}" id="smsru_number" class="form-control" />*/
/* 									</div>*/
/* 									<div class="col-sm-offset-4 col-sm-8">*/
/* 										{{ smsru_number_tooltip }}*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 									<label class="col-sm-4 control-label" for="smsru_name">{{ smsru_name_title }}</label>*/
/* 									<div class="col-sm-8">*/
/* 										<input type="text" name="buyoneclick[smsru_name]" value="{{ buyoneclick.smsru_name }}" placeholder="{{ smsru_name_title }}" id="smsru_name" class="form-control" />*/
/* 									</div>*/
/* 									<div class="col-sm-offset-4 col-sm-8">*/
/* 										{{ smsru_name_tooltip }}*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group" style="border:none;">*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 									<label class="col-sm-4 control-label" for="smsru_admin_sms">{{ smsru_admin_sms_title }}</label>*/
/* 									<div class="col-sm-8">*/
/* 										<input type="text" name="buyoneclick[smsru_admin_sms]" value="{{ buyoneclick.smsru_admin_sms }}" placeholder="{{ smsru_admin_sms_title }}" id="smsru_admin_sms" class="form-control" />*/
/* 									</div>*/
/* 									<div class="col-sm-offset-4 col-sm-8">*/
/* 										{{ smsru_admin_sms_tooltip }}*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 									<label class="col-sm-4 control-label" for="smsru_status">{{ smsru_admin_status_title }}</label>*/
/* 									<div class="col-sm-8">*/
/* 										<select name="buyoneclick[smsru_admin_status]" id="smsru_admin_status" class="form-control">*/
/* 											{% if buyoneclick.smsru_admin_status %}*/
/* 												<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 												<option value="0">{{ text_disabled }}</option>*/
/* 											{% else %}*/
/* 												<option value="1">{{ text_enabled }}</option>*/
/* 												<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 											{% endif %}*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group" style="border:none;">*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 									<label class="col-sm-4 control-label" for="smsru_client_sms">{{ smsru_client_sms_title }}</label>*/
/* 									<div class="col-sm-8">*/
/* 										<input type="text" name="buyoneclick[smsru_client_sms]" value="{{ buyoneclick.smsru_client_sms }}" placeholder="{{ smsru_client_sms_title }}" id="smsru_client_sms" class="form-control" />*/
/* 									</div>*/
/* 									<div class="col-sm-offset-4 col-sm-8">*/
/* 										{{ smsru_client_sms_tooltip }}*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 									<label class="col-sm-4 control-label" for="smsru_client_status">{{ smsru_client_status_title }}</label>*/
/* 									<div class="col-sm-8">*/
/* 										<select name="buyoneclick[smsru_client_status]" id="smsru_client_status" class="form-control">*/
/* 											{% if buyoneclick.smsru_client_status %}*/
/* 												<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 												<option value="0">{{ text_disabled }}</option>*/
/* 											{% else %}*/
/* 												<option value="1">{{ text_enabled }}</option>*/
/* 												<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 											{% endif %}*/
/* 										</select>*/
/* 									</div>*/
/* 									<div class="col-sm-offset-4 col-sm-8">*/
/* 										{{ smsru_client_status_tooltip }}*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					<hr style="border-color: #000;" />*/
/* 						<!-- SMSC.ua -->*/
/* 						<div class="col-sm-12 text-center h2" style="margin-top:0;">{{ smscua_form_title }}</div>*/
/* 						<div class="col-sm-12 text-center h4" style="text-transform:uppercase; padding-bottom:1em;">{{ smscua_form_subtitle }}</div>*/
/* 						<div class="form-group">*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 									<label class="col-sm-4 control-label" for="smscua_login">{{ smscua_login_title }}</label>*/
/* 									<div class="col-sm-8">*/
/* 										<input type="text" name="buyoneclick[smscua_login]" value="{{ buyoneclick.smscua_login }}" placeholder="{{ smscua_login_title }}" id="smscua_login" class="form-control" />*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 									<label class="col-sm-4 control-label" for="smscua_password">{{ smscua_password_title }}</label>*/
/* 									<div class="col-sm-8">*/
/* 										<input type="text" name="buyoneclick[smscua_password]" value="{{ buyoneclick.smscua_password }}" placeholder="{{ smscua_password_title }}" id="smscua_password" class="form-control" />*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group" style="border:none;">*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 									<label class="col-sm-4 control-label" for="smscua_number">{{ smscua_number_title }}</label>*/
/* 									<div class="col-sm-8">*/
/* 										<input type="text" name="buyoneclick[smscua_number]" value="{{ buyoneclick.smscua_number }}" placeholder="{{ smscua_number_title }}" id="smscua_number" class="form-control" />*/
/* 									</div>*/
/* 									<div class="col-sm-offset-4 col-sm-8">*/
/* 										{{ smscua_number_tooltip }}*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 									<label class="col-sm-4 control-label" for="smscua_name">{{ smscua_name_title }}</label>*/
/* 									<div class="col-sm-8">*/
/* 										<input type="text" name="buyoneclick[smscua_name]" value="{{ buyoneclick.smscua_name }}" placeholder="{{ smscua_name_title }}" id="smscua_name" class="form-control" />*/
/* 									</div>*/
/* 									<div class="col-sm-offset-4 col-sm-8">*/
/* 										{{ smscua_name_tooltip }}*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group" style="border:none;">*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 									<label class="col-sm-4 control-label" for="smscua_admin_sms">{{ smscua_admin_sms_title }}</label>*/
/* 									<div class="col-sm-8">*/
/* 										<input type="text" name="buyoneclick[smscua_admin_sms]" value="{{ buyoneclick.smscua_admin_sms }}" placeholder="{{ smscua_admin_sms_title }}" id="smscua_admin_sms" class="form-control" />*/
/* 									</div>*/
/* 									<div class="col-sm-offset-4 col-sm-8">*/
/* 										{{ smscua_admin_sms_tooltip }}*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 									<label class="col-sm-4 control-label" for="smscua_admin_status">{{ smscua_admin_status_title }}</label>*/
/* 									<div class="col-sm-8">*/
/* 										<select name="buyoneclick[smscua_admin_status]" id="smscua_admin_status" class="form-control">*/
/* 											{% if buyoneclick.smscua_admin_status %}*/
/* 												<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 												<option value="0">{{ text_disabled }}</option>*/
/* 											{% else %}*/
/* 												<option value="1">{{ text_enabled }}</option>*/
/* 												<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 											{% endif %}*/
/* 										</select>*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group" style="border:none;">*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 									<label class="col-sm-4 control-label" for="smscua_client_sms">{{ smscua_client_sms_title }}</label>*/
/* 									<div class="col-sm-8">*/
/* 										<input type="text" name="buyoneclick[smscua_client_sms]" value="{{ buyoneclick.smscua_client_sms }}" placeholder="{{ smscua_client_sms_title }}" id="smscua_client_sms" class="form-control" />*/
/* 									</div>*/
/* 									<div class="col-sm-offset-4 col-sm-8">*/
/* 										{{ smscua_client_sms_tooltip }}*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 									<label class="col-sm-4 control-label" for="smscua_client_status">{{ smscua_client_status_title }}</label>*/
/* 									<div class="col-sm-8">*/
/* 										<select name="buyoneclick[smscua_client_status]" id="smscua_client_status" class="form-control">*/
/* 												{% if buyoneclick.smscua_client_status %}*/
/* 												<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 												<option value="0">{{ text_disabled }}</option>*/
/* 											{% else %}*/
/* 												<option value="1">{{ text_enabled }}</option>*/
/* 												<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 											{% endif %}*/
/* 										</select>*/
/* 									</div>*/
/* 									<div class="col-sm-offset-4 col-sm-8">*/
/* 										{{ smscua_client_status_tooltip }}*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 					<!-- End SMS settings -->*/
/* 				</div>*/
/* 				<div id="settings_analytics" class="tab-pane fade">*/
/* 					<!-- Analytics settings -->*/
/* 					<div class="col-xs-12" style="border: 1px solid #ddd; border-top: none;">*/
/* 						<!-- Yandex.ru -->*/
/* 						<div class="col-sm-12 text-center h2" style="margin:1em auto">{{ ya_form_title }}</div>*/
/* 						<div class="form-group">*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 									<label class="col-md-4 col-sm-12 col-xs-12 text-right" for="ya_counter">{{ ya_counter_title }}</label>*/
/* 									<div class="col-md-8 col-sm-12 col-xs-12">*/
/* 										<input type="text" name="buyoneclick[ya_counter]" value="{{ buyoneclick.ya_counter }}" placeholder="{{ ya_counter_title }}" id="ya_counter" class="form-control" />*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 									<label class="col-md-4 col-sm-12 col-xs-12 text-right" for="ya_identificator">{{ ya_identificator_title }}</label>*/
/* 									<div class="col-md-8 col-sm-12 col-xs-12">*/
/* 										<input type="text" name="buyoneclick[ya_identificator]" value="{{ buyoneclick.ya_identificator }}" placeholder="{{ ya_identificator_title }}" id="ya_identificator" class="form-control" />*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group" style="border:none;">*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 									<label class="col-md-4 col-sm-12 col-xs-12 text-right" for="ya_identificator_send">{{ ya_identificator_send_title }}</label>*/
/* 									<div class="col-md-8 col-sm-12 col-xs-12">*/
/* 										<input type="text" name="buyoneclick[ya_identificator_send]" value="{{ buyoneclick.ya_identificator_send }}" placeholder="{{ ya_identificator_send_title }}" id="ya_identificator_send" class="form-control" />*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 									<label class="col-md-4 col-sm-12 col-xs-12 text-right" for="ya_identificator_success">{{ ya_identificator_success_title }}</label>*/
/* 									<div class="col-md-8 col-sm-12 col-xs-12">*/
/* 										<input type="text" name="buyoneclick[ya_identificator_success]" value="{{ buyoneclick.ya_identificator_success }}" placeholder="{{ ya_identificator_success_title }}" id="ya_identificator_success" class="form-control" />*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group" style="border:none;">*/
/* 							<label class="col-sm-2 control-label" for="ya_target_status">{{ ya_target_status_title }}</label>*/
/* 							<div class="col-sm-10">*/
/* 								<select name="buyoneclick[ya_status]" id="ya_target_status" class="form-control">*/
/* 									{% if buyoneclick.ya_status %}*/
/* 										<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 										<option value="0">{{ text_disabled }}</option>*/
/* 									{% else %}*/
/* 										<option value="1">{{ text_enabled }}</option>*/
/* 										<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 									{% endif %}*/
/* 								</select>*/
/* 							</div>*/
/* 						</div>*/
/* 					<hr style="border-color: #000;" />*/
/* 						<!-- Google.com -->*/
/* 						<div class="col-sm-12 text-center h2" style="margin:1em auto">{{ google_form_title }}</div>*/
/* 						<div class="form-group">*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 									<label class="col-md-4 col-sm-12 col-xs-12 text-right" for="google_category_btn">{{ google_category_btn_title }}</label>*/
/* 									<div class="col-md-8 col-sm-12 col-xs-12">*/
/* 										<input type="text" name="buyoneclick[google_category_btn]" value="{{ buyoneclick.google_category_btn }}" placeholder="{{ google_category_btn_title }}" id="google_category_btn" class="form-control" />*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 									<label class="col-md-4 col-sm-12 col-xs-12 text-right" for="google_action_btn">{{ google_action_btn_title }}</label>*/
/* 									<div class="col-md-8 col-sm-12 col-xs-12">*/
/* 										<input type="text" name="buyoneclick[google_action_btn]" value="{{ buyoneclick.google_action_btn }}" placeholder="{{ google_action_btn_title }}" id="google_action_btn" class="form-control" />*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group" style="border:none;">*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 									<label class="col-md-4 col-sm-12 col-xs-12 text-right" for="google_category_send">{{ google_category_send_title }}</label>*/
/* 									<div class="col-md-8 col-sm-12 col-xs-12">*/
/* 										<input type="text" name="buyoneclick[google_category_send]" value="{{ buyoneclick.google_category_send }}" placeholder="{{ google_category_send_title }}" id="google_category_send" class="form-control" />*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 									<label class="col-md-4 col-sm-12 col-xs-12 text-right" for="google_action_send">{{ google_action_send_title }}</label>*/
/* 									<div class="col-md-8 col-sm-12 col-xs-12">*/
/* 										<input type="text" name="buyoneclick[google_action_send]" value="{{ buyoneclick.google_action_send }}" placeholder="{{ google_action_send_title }}" id="google_action_send" class="form-control" />*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group" style="border:none;">*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 									<label class="col-md-4 col-sm-12 col-xs-12 text-right" for="google_category_success">{{ google_category_success_title }}</label>*/
/* 									<div class="col-md-8 col-sm-12 col-xs-12">*/
/* 										<input type="text" name="buyoneclick[google_category_success]" value="{{ buyoneclick.google_category_success }}" placeholder="{{ google_category_success_title }}" id="google_category_success" class="form-control" />*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 							<div class="col-sm-6 col-xs-12">*/
/* 								<div class="row">*/
/* 									<label class="col-md-4 col-sm-12 col-xs-12 text-right" for="google_action_success">{{ google_action_success_title }}</label>*/
/* 									<div class="col-md-8 col-sm-12 col-xs-12">*/
/* 										<input type="text" name="buyoneclick[google_action_success]" value="{{ buyoneclick.google_action_success }}" placeholder="{{ google_action_success_title }}" id="google_action_success" class="form-control" />*/
/* 									</div>*/
/* 								</div>*/
/* 							</div>*/
/* 						</div>*/
/* 						<div class="form-group" style="border:none;">*/
/* 							<label class="col-sm-2 control-label" for="google_target_status">{{ google_target_status_title }}</label>*/
/* 							<div class="col-sm-10">*/
/* 								<select name="buyoneclick[google_status]" id="google_target_status" class="form-control">*/
/* 									{% if buyoneclick.google_status %}*/
/* 										<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 										<option value="0">{{ text_disabled }}</option>*/
/* 									{% else %}*/
/* 										<option value="1">{{ text_enabled }}</option>*/
/* 										<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 									{% endif %}*/
/* 								</select>*/
/* 							</div>*/
/* 						</div>*/
/* 					<hr style="border-color: #000;" />*/
/* 						<!-- Extended analytics -->*/
/* 						<div class="col-sm-12 text-center h2" style="margin:1em auto">{{ exan_form_title }}</div>*/
/* 						<div class="form-group" style="border:none;">*/
/* 							<label class="col-sm-2 control-label" for="exan_status">{{ exan_status_title }}</label>*/
/* 							<div class="col-sm-10">*/
/* 								<select name="buyoneclick[exan_status]" id="exan_status" class="form-control">*/
/* 									{% if buyoneclick.exan_status %}*/
/* 										<option value="1" selected="selected">{{ text_enabled }}</option>*/
/* 										<option value="0">{{ text_disabled }}</option>*/
/* 									{% else %}*/
/* 										<option value="1">{{ text_enabled }}</option>*/
/* 										<option value="0" selected="selected">{{ text_disabled }}</option>*/
/* 									{% endif %}*/
/* 								</select>*/
/* 							</div>*/
/* 						</div>*/
/* 					</div>*/
/* 				</div>*/
/* 				<div id="text_tab_help" class="tab-pane fade">*/
/* 					<div class="col-xs-12" style="border: 1px solid #ddd; border-top: none;">*/
/* 						<div class="h4 text-primary" style="margin-bottom:0;">*/
/* 							<strong>{{ text_tab_help_title }}</strong>*/
/* 						</div>*/
/* 						<div class="text_help" style="margin-top:2em;">{{ text_help }}</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</form>*/
/* 	</div>*/
/* 	<script type="text/javascript"><!--*/
/* 		$('#language a:first').tab('show');*/
/* 		$('#sms_settings a:first').tab('show');*/
/* 		$('#analytics_settings a:first').tab('show');*/
/* 		//-->*/
/* 	</script>*/
/* </div>*/
/* {{ footer }}*/
