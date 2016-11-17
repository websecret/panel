"use strict";$(document).ready(function(){function e(){$('[data-toggle="tooltip"]').tooltip(),$(".dd.js_panel_nestable-order").nestable({maxDepth:1}).on("change",x),i(),o(),l(),d(!1),n(),s(),f(),h(),_(),c(),u(),p(),g(),t(),m(),bootbox.setDefaults({locale:A.ru.bootbox.locale,size:"small",backdrop:!0})}function a(){i(),o(),l(),d(!0),n(),s(),f(),h(),c(),u(),p(),g(),t(),m(),_()}function t(){$(".js_panel_images-upload-wrapper").each(function(){var e=$(this);if(e.find("tbody").length){new Sortable(e.find("tbody")[0],{draggable:"tr",onUpdate:function(a){var t=e.find(".js_panel_images-col").not(".js_panel_images-col-clone");t.each(function(e){$(this).find(".js_panel_images-order").val(e)})}})}})}function n(){$(".js_panel_input-phone").inputmask("+375 (99) 999-99-99")}function s(){$(".js_panel_input-mask").each(function(){$(this).inputmask($(this).data("mask"))})}function i(){$(".js_panel_input-redactor").each(function(){$(this).initRedactor()})}function o(){$(".js_panel_input-redactorjs").each(function(){$(this).initRedactorJS()})}function l(){$(".js_panel_input-froala").each(function(){$(this).initFroala()})}function r(e,a){var t=a.data("model");data=new FormData,data.append("files[]",e),data.append("model",t);var n=a.data("type")||"",s=a.data("params")||"";data.append("type",n),data.append("params",s),$.ajax({data:data,type:"POST",url:urlUpload,cache:!1,contentType:!1,processData:!1,dataType:"json",success:function(e){var t=e.files[0],n=t.path;a.summernote("insertImage",n,function(t){t.attr("data-filename",n),e.type&&t.attr("data-type",e.type),e.params&&t.attr("data-params",e.params),t.css("width",Math.min(a.width(),t.width()))})}})}function d(e){e=e||!1,e&&$(".js_panel_datatable").dataTable().fnDestroy(),$(".js_panel_datatable").each(function(){var e=$(this),a=[],t=[],n=[];e.find("thead th").each(function(){var e=$(this).data("datatable-order");e!==!1?a.push([$(this).index(),e]):n.push({orderable:!1,targets:$(this).index()});var s=$(this).data("datatable-search");s===!1&&t.push($(this).index())}),e.find("tfoot th").each(function(){if(t.indexOf($(this).index())===-1){var a=e.find("thead th:eq("+$(this).index()+")").text();$(this).html('<input type="text" placeholder="&#128269; '+a+'" class="form-control input-sm" />')}});var s=e.DataTable({order:a,columnDefs:n,bDestroy:!0,dom:"lTfigt",tableTools:{sSwfPath:"/assets/panel/swf/dataTables/swf/copy_csv_xls_pdf.swf"}});s.columns().every(function(){var e=this;$("input",this.footer()).on("keyup change",function(){e.search()!==this.value&&e.search(this.value).draw()})})})}function c(){$(".js_panel_input-date").datepicker({format:A.ru.datepicker.format,todayHighlight:!0})}function u(){$(".js_panel_input-time").timepicker({minuteStep:1,showSeconds:!1,showMeridian:!1,defaultTime:!1})}function p(){$(".js_panel_input-clock").clockpicker()}function f(){$(".js_panel_input-chosen").each(function(){0==$(this).closest(".js_panel_multiple-row-clone").length&&$(this).initChosen()})}function h(){$(".js_panel_input-select2").select2()}function m(){$(".js_panel_input-select2-ajax").each(function(){$(this).initAjaxSelect2()})}function _(){$(".js_panel_input-autocomplete").each(function(){var e=$(this);e.parent().hasClass("input-group")||(e.wrap("<div class='input-group'></div>"),e.before('<span class="input-group-addon"><span class="fa fa-ellipsis-h"></span></span>'));var a=e.data("autocomplete-url");e.devbridgeAutocomplete({serviceUrl:a})})}function g(){var e=$(".js_panel_addable-input");e.each(function(){var e=$(this),a=e.find(".js_panel_addable-input-exists"),t=e.find(".js_panel_addable-input-new");a.prop("disabled",!1),e.hasClass("js_panel_addable-input-enabled")?t.prop("disabled",!1):t.prop("disabled",!0),e.removeClass("js_panel_addable-input").addClass("input-group"),e.append('<span class="input-group-btn"><button class="btn btn-default js_panel_addable-input-button js_panel_addable-input-button-exists" type="button"><span class="fa fa-bars"></span></button><button class="btn btn-success js_panel_addable-input-button js_panel_addable-input-button-new" type="button"><span class="fa fa-plus"></span></button></span>');var n=!0,s=a.find("option");s.length>0&&s.each(function(){var e=$(this);e.val()&&(n=!1)}),n&&e.setAddableNew().disableAddable()})}function b(e){e.preventDefault();var t=$(this),n=t.attr("href"),s=t.data("wrapper"),i=$(s);$.ajax({url:n,type:"GET",dataType:"JSON",success:function(e){"success"==e.result&&(i.html(e.view),a())}})}function j(e){e.preventDefault();var a=$(this);return a.trigger("panel-form-ajax-submitted"),a.append('<div class="loader"></div>'),a.find(".form-group").removeClass("has-error"),a.find(".error-block").html(""),a.ajaxSubmit({success:function(e){if(a.find(".loader").remove(),"success"==e.result){if(a.trigger("panel-form-ajax-success",[e]),a.hasClass("js_panel_form-ajax-redirect")){var t=e.link||e.redirect;setTimeout(function(){window.location.href=t},2e3)}if(a.hasClass("js_panel_form-ajax-popup")){var n=a.closest(".modal");n.modal("hide")}e.message?window.showNotification(e.message,"success"):window.showNotification(A.ru.form.success,"success")}else a.trigger("panel-form-ajax-error",[e]),$.each(e.errors,function(e,t){var n=e.split("."),s=a.find(':input[name="'+e+'"]');!s.length&&n.length>1&&(s=a.find(':input[name="'+n[0]+'[]"]:eq('+n[1]+")"));var i="";if($.each(t,function(e,a){i+=a+"<br>"}),s.length){var o=s.closest(".form-group"),l=o.find(".error-block");o.addClass("has-error");var r='<span class="help-block">'+i+"</span>";l.append(r)}else a.data("message-success")?window.showNotification(a.data("message-success"),"error"):window.showNotification(i,"error")}),e.message&&window.showNotification(e.message,"error"),a.data("message-error")?window.showNotification(a.data("message-error"),"error"):window.showNotification(A.ru.form.error,"error")}}),!1}function w(e){e.preventDefault();var a=$(this),t=a.attr("href");return bootbox.confirm({message:A.ru.deleting.sure,callback:function(e){e&&$.ajax({url:t,type:"GET",dataType:"JSON",success:function(e){if("success"==e.result){if(a.hasClass("js_panel_delete-table-row"))var t=a.closest("tr");else if(a.data("delete"))var t=e("delete");else var t=a.parent();t.remove(),window.showNotification(A.ru.deleting.success,"error")}}})}}),!1}function v(){if(!$(this).hasClass("js_panel_ajax-row-ignore")){var e=$(this).closest("tr"),a=e.data("link"),t={};e.find(":input").each(function(){if(!$(this).hasClass("js_panel_ajax-row-ignore")){var e=$(this).attr("name"),a=$(this).val();$(this).is(":checkbox")&&(a=$(this).is(":checked")?1:0),t[e]=a}}),$.ajax({url:a,type:"POST",dataType:"JSON",data:t,success:function(e){"success"==e.result?window.showNotification(A.ru.form.success,"success"):window.showNotification(e.message,"error")}})}}function x(e){var a=$(this);a.append('<div class="loader"></div>');var t=a.data("link");a.find(".dd-item").each(function(){var e=$(this),a=e.index();e.attr("data-order",a)});var n=window.JSON.stringify(a.nestable("serialize"));$.ajax({url:t,type:"POST",dataType:"JSON",data:{tree:n},success:function(e){"success"==e.result&&(a.find(".loader").remove(),window.showNotification(A.ru.form.success,"success"))}})}function y(e){e.preventDefault();var a=$(this).data("name"),t=$(this).closest('.js_panel_multiple-wrapper[data-name="'+a+'"]'),n=$('.js_panel_multiple-row-clone[data-name="'+a+'"]');t.length&&(n=t.find('.js_panel_multiple-row-clone[data-name="'+a+'"]'));var s=n.clone(!0),i=s.find(":input");return i.each(function(){var e=$(this);e.closest(".js_panel_multiple-row").data("name")==a&&(e.prop("disabled",!1),e.hasClass("js_panel_input-chosen")&&e.initChosen())}),s.insertBefore(n),s.removeClass("js_panel_multiple-row-clone"),s.trigger("panel-multiple-added"),!1}function k(e){e.preventDefault();var a=$(this).data("name"),t=$(this).closest('.js_panel_multiple-row[data-name="'+a+'"]'),n=t.parent();return t.remove(),n.trigger("panel-multiple-removed"),!1}function S(e,a,t){if(e[0].files){var n=new FormData;$.each(e[0].files,function(e,a){n.append("files[]",a)});var s={};$.ajax({url:a,type:"POST",data:n,processData:!1,contentType:!1,dataType:"json",success:function(a){s.result=a.result,"success"==a.result?s.files=a.files:s.text=a.error,e.replaceWith(e.clone(!0)),t(s)}})}}function T(){var e=$(this).closest(".js_panel_images-upload-wrapper"),a=e.find(".js_panel_images-loading-col");a.fadeIn(100);var t=e.data("multiple"),n=e.data("url"),s=e.find(".js_panel_images-row");S($(this),n,function(n){"success"==n.result?($.each(n.files,function(e,a){t||s.find(".js_panel_images-col").not(".js_panel_images-col-clone").remove();var n=s.find(".js_panel_images-col-clone"),i=n.clone(),o=i.find(".js_panel_images-img"),l=i.find(".js_panel_images-path"),r=i.find(".js_panel_images-zoom");o.attr("src",a.link),r.attr("href",a.link),l.val(a.path),i.find(":input").prop("disabled",!1),i.removeClass("js_panel_images-col-clone"),i.insertBefore(n)}),a.fadeOut(100),C(e)):a.fadeOut(100)})}function N(e){e.preventDefault();var a=$(this).closest(".js_panel_images-col"),t=a.closest(".js_panel_images-upload-wrapper");a.remove(),C(t)}function C(e){var a=e.data("multiple");(!a||a&&!e.find(".js_panel_images-main:enabled:checked").length)&&e.find(".js_panel_images-main:enabled:first").prop("checked",!0);var t=e.find(".js_panel_images-col").not(".js_panel_images-col-clone");t.each(function(e){var a=$(this),t=a.find(".js_panel_images-main");t.attr("value",e)})}function D(e){e.preventDefault();var a=$(this),t=a.closest(".input-group");return a.hasClass("js_panel_addable-input-button-new")?t.setAddableNew():t.setAddableExists(),!1}function O(){$(this).closest("form").addClass("js_panel_form-ajax-redirect")}function U(){$(this).closest("form").removeClass("js_panel_form-ajax-redirect")}function L(){var e=function(){return JSON.parse(localStorage.getItem("client-articles")||"[]")},a=function(a){var t=a.filter(function(a){return e().indexOf(a.entry_id)==-1}).map(function(e){return e.entry_id});$(".js-panel-client-news").html('\n                <a class="dropdown-toggle count-info js-client-news-link" data-toggle="dropdown" href="#">\n                    <i class="fa fa-envelope"></i>\n                    '+(t.length?'<span class="label label-warning">'+t.length+"</span>":"")+'\n                </a>\n                <ul class="dropdown-menu dropdown-messages">\n                    '+a.map(function(e){return'\n                        <li>\n                            <div class="dropdown-messages-box">\n                                <a href="#" class="pull-left" style="padding: 10px 15px;">\n                                    <img alt="image" class="img-circle" src="'+e.avatar+'" style="width: 50px; height: 50px;">\n                                </a>\n                                <div class="media-body">\n                                    <small class="pull-right">'+e.entry_date+"</small>\n                                    <strong>"+e.title+"</strong>\n                                    <p>\n                                        "+e.body_ru+'\n                                    </p>\n                                </div>\n                            </div>\n                        </li>\n                        <li class="divider"></li>\n                    '}).join()+"\n                </ul>\n            "),$(document).on("click",".js-client-news-link",function(){localStorage.setItem("client-articles",JSON.stringify(e().concat(t)))})};$.getJSON("http://websecret.by/api/client-news?domain="+location.host,function(e){a(e)})}$(document).on("click",".js_panel_ajax-content",b),$(document).on("submit",".js_panel_form-ajax",j),$(document).on("click",".js_panel_delete",w),$(document).on("change",".js_panel_ajax-row :input",v),$(document).on("click",".js_panel_multiple-add",y),$(document).on("click",".js_panel_multiple-remove",k),$(document).on("change",".js_panel_images-upload",T),$(document).on("click",".js_panel_images-remove",N),$(document).on("click",".js_panel_addable-input-button",D),$(document).on("click",".js_panel_form-submit-redirect",O),$(document).on("click",".js_panel_form-submit",U),$.ajaxSetup({headers:{"X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr("content")}});var A={ru:{bootbox:{locale:"ru"},redactor:{locale:"ru"},datepicker:{format:"dd.mm.yyyy"},chosen:{no_results_text:"Ничего не найдено по запросу",placeholder_text_multiple:"-Выберите из вариантов-",placeholder_text_single:"-Ничего не выбрано-"},form:{success:"Данные успешно сохранены",error:"Ошибка сохранения данных"},deleting:{sure:"Вы действительно хотите удалить?",success:"Удаление прошло успешно"}},en:{bootbox:{locale:"en"},redactor:{locale:"en"},datepicker:{format:"yyyy-mm-dd"},chosen:{no_results_text:"Nothing to show",placeholder_text_multiple:"Choose one"},form:{success:"Data successfully saved",error:"Error saving data"},deleting:{sure:"Are you sure?",success:"Deleting was successful"}}};$.fn.enableAddable=function(){return this.find(".js_panel_addable-input-button").prop("disabled",!1),this},$.fn.disableAddable=function(){return this.find(".js_panel_addable-input-button").prop("disabled",!0),this},$.fn.setAddableExists=function(){var e=this;return e.each(function(){var e=$(this),a=e.find(".js_panel_addable-input-exists"),t=e.find(".js_panel_addable-input-new"),n=e.find(".js_panel_addable-input-button-new"),s=e.find(".js_panel_addable-input-button-exists");a.prop("disabled",!1),e.hasClass("js_panel_addable-input-enabled")?t.prop("disabled",!1):t.prop("disabled",!0),s.insertBefore(n),n.show(),s.hide(),t.slideUp(150),a.slideDown(150),e.trigger("panel-addable-exists-click")}),this},$.fn.setAddableNew=function(){var e=this;return e.each(function(){var e=$(this),a=e.find(".js_panel_addable-input-exists"),t=e.find(".js_panel_addable-input-new"),n=e.find(".js_panel_addable-input-button-new"),s=e.find(".js_panel_addable-input-button-exists");t.prop("disabled",!1),e.hasClass("js_panel_addable-input-enabled")?a.prop("disabled",!1):a.prop("disabled",!0),n.insertBefore(s),s.show(),n.hide(),a.slideUp(150),t.slideDown(150),e.trigger("panel-addable-new-click")}),this},$.fn.initChosen=function(){var e=A.ru.chosen;return e.search_contains=!0,this.chosen(e),this},$.fn.initRedactor=function(){var e={lang:"ru-RU",height:300,toolbar:[["style",["style"]],["font",["bold","italic","underline","clear"]],["color",["color"]],["para",["ul","ol","paragraph"]],["height",["height"]],["table",["table"]],["insert",["link","picture","hr"]],["view",["fullscreen","codeview"]]],popover:{image:[["float",["floatLeft","floatRight","floatNone"]]]}},a=this;return a.data("base64")||(e.callbacks={onImageUpload:function(e){r(e[0],a)}}),a.summernote(e),this},$.fn.initRedactorJS=function(){var e=this,a={buttonSource:!0,linkNofollow:!0,lang:A.ru.redactor.locale,imageUpload:"undefined"!=typeof urlUploadRedactor?urlUploadRedactor:"/upload/redactor/images"},t=t=["source","alignment","table","fullscreen","properties","imagemanager"],n=e.data("links");n&&(t.push("definedlinks"),a.definedLinks=n);var s=e.data("links-ajax");s&&(t.push("definedlinks"),a.definedLinks=s);var i=e.data("images");i&&(a.imageManagerJson=i);var o=e.data("images-ajax");return s&&(a.imageManagerJson=o),a.plugins=t,e.redactor(a),this},$.fn.initFroala=function(){var e=this,a={language:A.ru.redactor.locale,imageUploadURL:"undefined"!=typeof urlUploadFroala?urlUploadFroala:"/upload/froala/images",htmlAllowComments:!1,imageInsertButtons:["imageBack","|","imageUpload","imageByURL"],linkList:[{text:window.location.hostname,href:window.location.hostname,target:"_blank",rel:"nofollow"}],toolbarButtons:["fullscreen","|","bold","italic","underline","strikeThrough","|","paragraphFormat","align","formatOL","formatUL","outdent","indent","quote","|","insertLink","insertImage","insertVideo","insertTable","|","undo","redo","|","clearFormatting","selectAll","|","html"],toolbarButtonsXS:["bold","italic","underline","|","align","|","undo","redo"],toolbarButtonsSM:["bold","italic","underline","strikeThrough","|","paragraphFormat","align","formatOL","formatUL","|","undo","redo","html"],toolbarButtonsMD:["fullscreen","bold","italic","underline","strikeThrough","|","paragraphFormat","align","formatOL","formatUL","outdent","indent","quote","|","insertLink","insertImage","insertVideo","insertTable","undo","redo","clearFormatting","selectAll","html"],quickInsertButtons:["image","table","ul","ol"]};return e.data("images-ajax")&&(a.imageManagerLoadURL=e.data("images-ajax"),a.imageInsertButtons.push("imageManager")),e.on("froalaEditor.initialized",function(e,a){if($(this).data("atwho")){var t=$(this).data("atwho").split(","),n={at:"$",data:t,limit:200};a.$el.atwho(n),a.events.on("keydown",function(e){if(e.which==$.FroalaEditor.KEYCODE.ENTER&&a.$el.atwho("isSelecting"))return!1},!0),console.log(t)}}).froalaEditor(a),this},$.fn.extend({initAjaxSelect2:function(){this.select2({placeholder:$(this).attr("data-placeholder")||"Поиск",ajax:{url:$(this).attr("data-url"),dataType:"json",delay:250,data:function(e){return{q:e.term}},processResults:function(e,a){return{results:e.items}}}})}}),e(),$(document).ajaxComplete(function(){a()}),window.showNotification=function(e,a){"undefined"==typeof title&&(title=""),"undefined"==typeof a&&(a="success"),toastr.options={closeButton:!0,progressBar:!0,showMethod:"slideDown",timeOut:4e3},toastr[a](e)},L()});