<?php

/* SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig */
class __TwigTemplate_b787a8679ac8ceb956a0a1696f7bbd670c8df7495ff087614289690f005622c0 extends Twig_Template
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
        // line 11
        echo "

";
        // line 18
        echo "
";
        // line 20
        echo "
";
        // line 21
        $context["associationadmin"] = $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "associationadmin");
        // line 22
        echo "
<!-- edit many association -->

<script type=\"text/javascript\">

    ";
        // line 32
        echo "    var field_dialog_form_list_link_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = function(event) {
        initialize_popup_";
        // line 33
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 38
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list_link] handle link click in a list');

        var element = jQuery(this).parents('#field_dialog_";
        // line 40
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " .sonata-ba-list-field');

        // the user does not click on a row column
        if (element.length == 0) {
            // make a recursive call (ie: reset the filter)
            jQuery.ajax({
                type: 'GET',
                url: jQuery(this).attr('href'),
                dataType: 'html',
                success: function(html) {
                    Admin.log('[";
        // line 50
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list_link] callback success, attach valid js event');

                    field_dialog_content_";
        // line 52
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 53
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();
                }
            });

            return;
        }

        jQuery('#";
        // line 60
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "').val(element.attr('objectId'));
        jQuery('#";
        // line 61
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "').trigger('change');

        field_dialog_";
        // line 63
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".modal('hide');
    }

    // this function handle action on the modal list when inside a selected list
    var field_dialog_form_list_handle_action_";
        // line 67
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "  =  function() {

        Admin.log('[";
        // line 69
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list_handle_action] attaching valid js event');

        Admin.add_filters(field_dialog_";
        // line 71
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

        // capture the submit event to make an ajax call, ie : POST data to the
        // related create admin
        jQuery('a', field_dialog_";
        // line 75
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").on('click', field_dialog_form_list_link_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
        jQuery('form', field_dialog_";
        // line 76
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").on('submit', function(event) {
            event.preventDefault();

            var form = jQuery(this);

            Admin.log('[";
        // line 81
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list_handle_action] catching submit event, sending ajax request');

            jQuery(form).ajaxSubmit({
                type: form.attr('method'),
                url: form.attr('action'),
                dataType: 'html',
                data: {_xml_http_request: true},
                success: function(html) {

                    Admin.log('[";
        // line 90
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list_handle_action] form submit success, restoring event');

                    field_dialog_content_";
        // line 92
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(html);
                    field_dialog_form_list_handle_action_";
        // line 93
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();
                }
            });
        });
    }

    // handle the list link
    var field_dialog_form_list_";
        // line 100
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = function(event) {

        initialize_popup_";
        // line 102
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 107
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list] open the list modal');

        var a = jQuery(this);

        field_dialog_content_";
        // line 111
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html('');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 119
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_list] retrieving the list content');

                // populate the popup container
                field_dialog_content_";
        // line 122
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(html);

                field_dialog_title_";
        // line 124
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(\"";
        echo $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "label"), array(), $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "translationdomain"));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 126
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

                field_dialog_form_list_handle_action_";
        // line 128
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

                // open the dialog in modal mode
                field_dialog_";
        // line 131
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 133
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
            }
        });
    };

    // handle the add link
    var field_dialog_form_add_";
        // line 139
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = function(event) {
        initialize_popup_";
        // line 140
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

        event.preventDefault();
        event.stopPropagation();

        var a = jQuery(this);

        field_dialog_content_";
        // line 147
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html('');

        Admin.log('[";
        // line 149
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_add] add link action');

        // retrieve the form element from the related admin generator
        jQuery.ajax({
            url: a.attr('href'),
            dataType: 'html',
            success: function(html) {

                Admin.log('[";
        // line 157
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_add] ajax success', field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

                // populate the popup container
                field_dialog_content_";
        // line 160
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(html);
                field_dialog_title_";
        // line 161
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(\"";
        echo $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "label"), array(), $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "translationdomain"));
        echo "\");

                Admin.shared_setup(field_dialog_";
        // line 163
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

                // capture the submit event to make an ajax call, ie : POST data to the
                // related create admin
                jQuery('a', field_dialog_";
        // line 167
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").on('click', field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
                jQuery('form', field_dialog_";
        // line 168
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").on('submit', field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

                // open the dialog in modal mode
                field_dialog_";
        // line 171
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".modal();

                Admin.setup_list_modal(field_dialog_";
        // line 173
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
            }
        });
    };

    // handle the post data
    var field_dialog_form_action_";
        // line 179
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = function(event) {

        var element = jQuery(this);

        // return if the link is an anchor inside the same page
        if (this.nodeName == 'A' && (element.attr('href').length == 0 || element.attr('href')[0] == '#')) {
            return;
        }

        event.preventDefault();
        event.stopPropagation();

        Admin.log('[";
        // line 191
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_action] action catch', this);

        initialize_popup_";
        // line 193
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

        if (this.nodeName == 'FORM') {
            var url  = element.attr('action');
            var type = element.attr('method');
        } else if (this.nodeName == 'A') {
            var url  = element.attr('href');
            var type = 'GET';
        } else {
            alert('unexpected element : @' + this.nodeName + '@');
            return;
        }

        if (element.hasClass('sonata-ba-action')) {
            Admin.log('[";
        // line 207
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_action] reserved action stop catch all events');
            return;
        }

        var data = {
            _xml_http_request: true
        }

        var form = jQuery(this);

        Admin.log('[";
        // line 217
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_action] execute ajax call');

        // the ajax post
        jQuery(form).ajaxSubmit({
            url: url,
            type: type,
            data: data,
            success: function(data) {
                Admin.log('[";
        // line 225
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog_form_action] ajax success');

                // if the crud action return ok, then the element has been added
                // so the widget container must be refresh with the last option available
                if (typeof data != 'string' && data.result == 'ok') {
                    field_dialog_";
        // line 230
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".modal('hide');

                    ";
        // line 232
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit") == "list")) {
            // line 233
            echo "                        ";
            // line 237
            echo "                        jQuery('#";
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').val(data.objectId);
                        jQuery('#";
            // line 238
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').change();

                    ";
        } else {
            // line 241
            echo "
                        // reload the form element
                        jQuery('#field_widget_";
            // line 243
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').closest('form').ajaxSubmit({
                            url: '";
            // line 244
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_retrieve_form_element", array("elementId" => (isset($context["id"]) ? $context["id"] : null), "subclass" => $this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "getActiveSubclassCode", array(), "method"), "objectId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "id", array(0 => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "subject")), "method"), "uniqid" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "uniqid"), "code" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "admin"), "root"), "code")));
            // line 250
            echo "',
                            data: {_xml_http_request: true },
                            dataType: 'html',
                            type: 'POST',
                            success: function(html) {
                                jQuery('#field_container_";
            // line 255
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').replaceWith(html);
                                var newElement = jQuery('#";
            // line 256
            echo (isset($context["id"]) ? $context["id"] : null);
            echo " [value=\"' + data.objectId + '\"]');
                                if (newElement.is(\"input\")) {
                                    newElement.attr('checked', 'checked');
                                } else {
                                    newElement.attr('selected', 'selected');
                                }

                                jQuery('#field_container_";
            // line 263
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').trigger('sonata-admin-append-form-element');
                            }
                        });

                    ";
        }
        // line 268
        echo "
                    return;
                }

                // otherwise, display form error
                field_dialog_content_";
        // line 273
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ".html(data);

                Admin.shared_setup(field_dialog_";
        // line 275
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

                // reattach the event
                jQuery('form', field_dialog_";
        // line 278
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ").submit(field_dialog_form_action_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
            }
        });

        return false;
    }

    var field_dialog_";
        // line 285
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "         = false;
    var field_dialog_content_";
        // line 286
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = false;
    var field_dialog_title_";
        // line 287
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "   = false;

    function initialize_popup_";
        // line 289
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "() {
        // initialize component
        if (!field_dialog_";
        // line 291
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ") {
            field_dialog_";
        // line 292
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "         = jQuery(\"#field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\");
            field_dialog_content_";
        // line 293
        echo (isset($context["id"]) ? $context["id"] : null);
        echo " = jQuery(\".modal-body\", \"#field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\");
            field_dialog_title_";
        // line 294
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "   = jQuery(\".modal-title\", \"#field_dialog_";
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "\");

            // move the dialog as a child of the root element, nested form breaks html ...
            jQuery(document.body).append(field_dialog_";
        // line 297
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");

            Admin.log('[";
        // line 299
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "|field_dialog] move dialog container as a document child');
        }
    }

    ";
        // line 306
        echo "    // this function initialize the popup
    // this can be only done this way has popup can be cascaded
    function start_field_dialog_form_add_";
        // line 308
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "(link) {

        // remove the html event
        link.onclick = null;

        initialize_popup_";
        // line 313
        echo (isset($context["id"]) ? $context["id"] : null);
        echo "();

        // add the jQuery event to the a element
        jQuery(link)
            .click(field_dialog_form_add_";
        // line 317
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ")
            .trigger('click')
        ;

        return false;
    }

    if (field_dialog_";
        // line 324
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ") {
        Admin.shared_setup(field_dialog_";
        // line 325
        echo (isset($context["id"]) ? $context["id"] : null);
        echo ");
    }

    ";
        // line 328
        if (($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "edit") == "list")) {
            // line 329
            echo "        ";
            // line 332
            echo "        // this function initialize the popup
        // this can be only done this way has popup can be cascaded
        function start_field_dialog_form_list_";
            // line 334
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "(link) {

            link.onclick = null;

            initialize_popup_";
            // line 338
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "();

            // add the jQuery event to the a element
            jQuery(link)
                .click(field_dialog_form_list_";
            // line 342
            echo (isset($context["id"]) ? $context["id"] : null);
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function remove_selected_element_";
            // line 349
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "(link) {

            link.onclick = null;

            jQuery(link)
                .click(field_remove_element_";
            // line 354
            echo (isset($context["id"]) ? $context["id"] : null);
            echo ")
                .trigger('click')
            ;

            return false;
        }

        function field_remove_element_";
            // line 361
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "(event) {
            event.preventDefault();

            if (jQuery('#";
            // line 364
            echo (isset($context["id"]) ? $context["id"] : null);
            echo " option').get(0)) {
                jQuery('#";
            // line 365
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').attr('selectedIndex', '-1').children(\"option:selected\").attr(\"selected\", false);
            }

            jQuery('#";
            // line 368
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').val('');
            jQuery('#";
            // line 369
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').trigger('change');

            return false;
        }
        ";
            // line 376
            echo "
        // update the label
        jQuery('#";
            // line 378
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').on('change', function(event) {

            Admin.log('[";
            // line 380
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "] update the label');

            jQuery('#field_widget_";
            // line 382
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').html(\"<span><img src=\\\"";
            echo $this->env->getExtension('assets')->getAssetUrl("bundles/sonataadmin/ajax-loader.gif");
            echo "\\\" style=\\\"vertical-align: middle; margin-right: 10px\\\"/>";
            echo $this->env->getExtension('translator')->trans("loading_information", array(), "SonataAdminBundle");
            echo "</span>\");
            jQuery.ajax({
                type: 'GET',
                url: '";
            // line 385
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_short_object_information", array("objectId" => "OBJECT_ID", "uniqid" => $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "uniqid"), "code" => $this->getAttribute((isset($context["associationadmin"]) ? $context["associationadmin"] : null), "code"), "linkParameters" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["sonata_admin"]) ? $context["sonata_admin"] : null), "field_description"), "options"), "link_parameters")));
            // line 390
            echo "'.replace('OBJECT_ID', jQuery(this).val()),
                dataType: 'html',
                success: function(html) {
                    jQuery('#field_widget_";
            // line 393
            echo (isset($context["id"]) ? $context["id"] : null);
            echo "').html(html);
                }
            });
        });

    ";
        }
        // line 399
        echo "

</script>
<!-- / edit many association -->

";
    }

    public function getTemplateName()
    {
        return "SonataDoctrineORMAdminBundle:CRUD:edit_orm_many_association_script.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  676 => 385,  666 => 382,  641 => 368,  635 => 365,  631 => 364,  615 => 354,  540 => 308,  529 => 299,  524 => 297,  504 => 292,  500 => 291,  495 => 289,  482 => 285,  452 => 268,  434 => 256,  400 => 233,  344 => 193,  310 => 171,  296 => 167,  226 => 131,  215 => 126,  358 => 139,  347 => 134,  301 => 117,  251 => 101,  228 => 88,  213 => 82,  1102 => 321,  1096 => 318,  1086 => 376,  1079 => 374,  1076 => 372,  1054 => 369,  1037 => 368,  1035 => 367,  1033 => 366,  1023 => 359,  1003 => 344,  974 => 321,  968 => 318,  958 => 310,  941 => 307,  918 => 305,  915 => 304,  905 => 300,  901 => 299,  895 => 296,  872 => 284,  863 => 281,  859 => 280,  855 => 279,  851 => 278,  831 => 271,  825 => 269,  818 => 267,  813 => 265,  810 => 264,  799 => 258,  790 => 254,  788 => 253,  784 => 251,  781 => 250,  766 => 248,  763 => 247,  760 => 246,  757 => 245,  755 => 244,  724 => 233,  721 => 232,  682 => 227,  677 => 226,  674 => 225,  611 => 211,  585 => 200,  561 => 171,  549 => 167,  542 => 189,  534 => 186,  531 => 185,  525 => 182,  517 => 179,  514 => 178,  491 => 174,  489 => 167,  475 => 163,  466 => 159,  460 => 157,  454 => 156,  450 => 155,  426 => 148,  420 => 146,  417 => 243,  414 => 144,  411 => 143,  376 => 129,  369 => 125,  366 => 123,  351 => 135,  345 => 117,  325 => 110,  319 => 124,  316 => 107,  307 => 105,  280 => 94,  172 => 59,  1080 => 340,  1074 => 338,  1068 => 336,  1066 => 335,  1064 => 334,  1060 => 370,  1051 => 332,  1048 => 331,  1036 => 326,  1030 => 324,  1024 => 322,  1022 => 321,  1020 => 320,  1016 => 319,  1010 => 318,  1007 => 317,  995 => 312,  983 => 308,  981 => 307,  979 => 323,  975 => 305,  971 => 304,  963 => 302,  957 => 301,  946 => 296,  942 => 295,  939 => 294,  930 => 287,  924 => 285,  921 => 284,  908 => 278,  902 => 276,  900 => 275,  897 => 274,  888 => 270,  884 => 267,  879 => 264,  876 => 263,  843 => 257,  837 => 272,  826 => 247,  824 => 246,  812 => 238,  808 => 263,  806 => 234,  804 => 233,  801 => 232,  797 => 229,  795 => 228,  793 => 255,  791 => 226,  789 => 225,  786 => 224,  774 => 212,  754 => 208,  751 => 206,  748 => 205,  745 => 203,  742 => 202,  739 => 200,  737 => 199,  732 => 238,  728 => 192,  726 => 191,  723 => 190,  717 => 186,  714 => 185,  704 => 230,  701 => 180,  699 => 179,  696 => 178,  692 => 399,  690 => 174,  687 => 229,  683 => 393,  673 => 165,  671 => 224,  668 => 163,  663 => 160,  661 => 380,  658 => 158,  654 => 216,  652 => 376,  649 => 153,  645 => 369,  643 => 149,  640 => 148,  636 => 145,  629 => 141,  627 => 140,  624 => 139,  617 => 135,  609 => 129,  594 => 205,  592 => 126,  589 => 124,  579 => 332,  576 => 196,  574 => 195,  570 => 112,  567 => 173,  565 => 324,  562 => 108,  556 => 104,  550 => 101,  548 => 313,  539 => 96,  536 => 306,  477 => 82,  465 => 77,  463 => 158,  439 => 71,  429 => 149,  425 => 64,  412 => 60,  397 => 55,  394 => 54,  373 => 46,  370 => 45,  357 => 37,  339 => 191,  323 => 125,  295 => 11,  290 => 7,  275 => 330,  260 => 104,  255 => 284,  245 => 270,  232 => 249,  197 => 119,  212 => 224,  206 => 70,  267 => 5,  207 => 216,  244 => 140,  216 => 60,  210 => 97,  200 => 73,  186 => 111,  174 => 67,  1031 => 295,  1028 => 294,  1025 => 293,  1021 => 326,  1017 => 324,  1011 => 321,  1008 => 320,  1006 => 319,  1000 => 316,  992 => 315,  989 => 310,  987 => 313,  984 => 312,  978 => 310,  976 => 309,  973 => 308,  967 => 303,  965 => 305,  962 => 304,  956 => 302,  954 => 300,  951 => 300,  945 => 298,  943 => 297,  940 => 296,  938 => 293,  935 => 306,  932 => 291,  928 => 286,  922 => 261,  919 => 260,  916 => 280,  913 => 258,  909 => 301,  904 => 277,  896 => 277,  891 => 271,  887 => 293,  885 => 272,  881 => 290,  875 => 268,  873 => 267,  869 => 259,  867 => 282,  864 => 257,  861 => 256,  858 => 255,  853 => 286,  850 => 255,  847 => 277,  842 => 275,  840 => 255,  835 => 252,  833 => 251,  830 => 250,  827 => 252,  822 => 268,  819 => 244,  815 => 239,  811 => 240,  805 => 262,  800 => 236,  794 => 235,  782 => 221,  779 => 216,  775 => 231,  769 => 249,  762 => 227,  758 => 226,  750 => 242,  744 => 223,  741 => 222,  738 => 240,  735 => 239,  730 => 219,  727 => 218,  725 => 217,  722 => 216,  719 => 187,  712 => 214,  709 => 213,  706 => 212,  703 => 211,  697 => 210,  694 => 209,  691 => 208,  688 => 206,  681 => 169,  678 => 390,  672 => 203,  669 => 202,  665 => 220,  662 => 200,  659 => 217,  656 => 378,  650 => 197,  646 => 195,  632 => 186,  626 => 184,  623 => 183,  616 => 212,  613 => 243,  610 => 198,  608 => 210,  605 => 209,  602 => 208,  599 => 207,  593 => 247,  591 => 181,  587 => 123,  584 => 122,  577 => 329,  571 => 194,  569 => 325,  566 => 177,  563 => 176,  555 => 317,  552 => 168,  544 => 99,  533 => 151,  530 => 150,  526 => 147,  496 => 176,  490 => 287,  486 => 286,  470 => 278,  467 => 130,  446 => 75,  443 => 154,  438 => 152,  432 => 150,  428 => 172,  422 => 150,  418 => 148,  416 => 123,  405 => 114,  395 => 135,  385 => 225,  382 => 131,  372 => 127,  364 => 122,  361 => 207,  353 => 96,  346 => 33,  338 => 130,  333 => 93,  327 => 126,  311 => 85,  297 => 84,  289 => 163,  256 => 74,  248 => 100,  239 => 97,  234 => 64,  225 => 87,  192 => 86,  175 => 77,  20 => 11,  648 => 236,  637 => 214,  633 => 144,  625 => 361,  620 => 213,  614 => 133,  612 => 225,  607 => 349,  597 => 342,  590 => 338,  586 => 212,  583 => 334,  581 => 198,  575 => 328,  572 => 208,  568 => 207,  564 => 206,  560 => 205,  554 => 103,  545 => 200,  541 => 97,  538 => 197,  535 => 196,  532 => 195,  527 => 186,  523 => 172,  520 => 180,  516 => 294,  513 => 142,  510 => 293,  506 => 161,  499 => 159,  494 => 175,  483 => 127,  479 => 126,  472 => 79,  468 => 121,  464 => 275,  459 => 273,  456 => 118,  424 => 170,  421 => 244,  419 => 118,  415 => 116,  410 => 59,  401 => 137,  399 => 56,  367 => 102,  359 => 120,  348 => 118,  343 => 132,  334 => 26,  331 => 93,  328 => 111,  317 => 17,  291 => 80,  265 => 106,  253 => 85,  250 => 274,  237 => 262,  231 => 133,  205 => 90,  202 => 77,  185 => 66,  180 => 66,  127 => 76,  118 => 43,  392 => 107,  383 => 49,  377 => 47,  354 => 95,  352 => 94,  349 => 34,  342 => 116,  335 => 100,  332 => 88,  324 => 179,  315 => 173,  302 => 168,  299 => 116,  293 => 113,  287 => 5,  284 => 70,  282 => 161,  279 => 77,  276 => 67,  271 => 108,  263 => 89,  257 => 103,  233 => 83,  222 => 238,  211 => 81,  194 => 197,  146 => 147,  76 => 27,  12 => 36,  150 => 71,  195 => 51,  184 => 68,  139 => 139,  181 => 80,  178 => 184,  170 => 71,  167 => 41,  165 => 64,  148 => 64,  137 => 59,  104 => 67,  96 => 36,  90 => 27,  100 => 42,  188 => 84,  155 => 39,  129 => 59,  114 => 71,  83 => 37,  65 => 30,  318 => 83,  304 => 104,  300 => 13,  281 => 110,  277 => 109,  274 => 125,  270 => 157,  266 => 90,  262 => 105,  259 => 149,  242 => 269,  161 => 71,  157 => 57,  153 => 55,  120 => 45,  84 => 39,  37 => 16,  97 => 63,  81 => 32,  70 => 24,  522 => 181,  519 => 91,  515 => 238,  512 => 237,  505 => 88,  502 => 87,  449 => 287,  445 => 286,  441 => 153,  433 => 96,  391 => 109,  389 => 133,  386 => 239,  330 => 23,  326 => 21,  321 => 109,  303 => 175,  292 => 82,  288 => 79,  236 => 129,  218 => 97,  191 => 196,  160 => 57,  124 => 108,  113 => 44,  110 => 48,  34 => 16,  190 => 69,  152 => 92,  145 => 54,  134 => 56,  126 => 121,  77 => 27,  74 => 52,  58 => 19,  52 => 21,  53 => 10,  23 => 18,  480 => 166,  474 => 80,  469 => 160,  461 => 290,  457 => 289,  453 => 288,  444 => 263,  440 => 148,  437 => 70,  435 => 151,  430 => 255,  427 => 65,  423 => 250,  413 => 241,  409 => 132,  407 => 238,  402 => 237,  398 => 232,  393 => 230,  387 => 132,  384 => 158,  381 => 48,  379 => 130,  374 => 217,  368 => 99,  365 => 141,  362 => 39,  360 => 38,  355 => 145,  341 => 131,  337 => 27,  322 => 101,  314 => 16,  312 => 106,  309 => 120,  305 => 119,  298 => 12,  294 => 81,  285 => 111,  283 => 95,  278 => 160,  268 => 107,  264 => 84,  258 => 86,  252 => 283,  247 => 273,  241 => 131,  229 => 105,  220 => 128,  214 => 231,  177 => 61,  169 => 74,  140 => 52,  132 => 58,  128 => 49,  111 => 41,  107 => 52,  61 => 2,  273 => 92,  269 => 6,  254 => 147,  246 => 99,  243 => 98,  240 => 139,  238 => 84,  235 => 250,  230 => 82,  227 => 81,  224 => 241,  221 => 77,  219 => 84,  217 => 75,  208 => 124,  204 => 78,  179 => 107,  159 => 70,  143 => 59,  135 => 81,  131 => 55,  119 => 95,  108 => 40,  102 => 38,  71 => 15,  67 => 19,  63 => 20,  59 => 23,  47 => 17,  94 => 35,  89 => 40,  85 => 32,  79 => 37,  75 => 27,  68 => 31,  56 => 40,  50 => 20,  201 => 213,  196 => 211,  183 => 189,  171 => 102,  166 => 100,  163 => 42,  158 => 62,  156 => 93,  151 => 56,  142 => 61,  138 => 57,  136 => 138,  123 => 46,  121 => 75,  117 => 57,  115 => 50,  105 => 47,  101 => 25,  91 => 34,  69 => 50,  62 => 29,  49 => 9,  28 => 14,  87 => 35,  72 => 33,  66 => 29,  55 => 18,  41 => 19,  31 => 22,  38 => 32,  26 => 20,  25 => 12,  24 => 13,  35 => 16,  29 => 21,  21 => 11,  19 => 11,  98 => 44,  93 => 45,  88 => 60,  78 => 53,  46 => 15,  44 => 15,  32 => 12,  27 => 13,  22 => 12,  43 => 33,  40 => 19,  209 => 223,  203 => 122,  199 => 212,  193 => 83,  189 => 71,  187 => 69,  182 => 69,  176 => 178,  173 => 177,  168 => 62,  164 => 72,  162 => 60,  154 => 67,  149 => 148,  147 => 90,  144 => 144,  141 => 143,  133 => 61,  130 => 57,  125 => 47,  122 => 25,  116 => 42,  112 => 176,  109 => 69,  106 => 86,  103 => 46,  99 => 37,  95 => 43,  92 => 61,  86 => 33,  82 => 28,  80 => 36,  73 => 26,  64 => 28,  60 => 15,  57 => 22,  54 => 23,  51 => 38,  48 => 21,  45 => 19,  42 => 18,  39 => 13,  36 => 12,  33 => 11,  30 => 15,);
    }
}
