$(document).ready(function () {

    $(document).on('click', '.js_panel_ajax-content', ajaxContent);
    $(document).on('submit', '.js_panel_form-ajax', submitFormAjax);
    $(document).on('click', '.js_panel_delete', deleteElement);
    $(document).on('change', '.js_panel_ajax-row :input', changeAjaxRowInput);
    $(document).on('click', '.js_panel_multiple-add', clickMultipleAdd);
    $(document).on('click', '.js_panel_multiple-remove', clickMultipleRemove);
    $(document).on('change', '.js_panel_images-upload', changeImagesInput);
    $(document).on('click', '.js_panel_images-remove', removeImages);
    $(document).on('click', '.js_panel_addable-input-button', clickAddableButton);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var langs = {
        ru: {
            bootbox: {
                locale: 'ru',
            },
            redactor: {
                locale: 'ru',
            },
            datepicker: {
                format: 'dd.mm.yyyy',
            },
            chosen: {
                no_results_text: "Ничего не найдено по запросу",
                placeholder_text_multiple: "Выберите из вариантов",
            },
            form: {
                success: 'Данные успешно сохранены',
                error: 'Ошибка сохранения данных',
            },
            deleting: {
                sure: 'Вы действительно хотите удалить?',
                success: 'Удаление прошло успешно',
            }
        },
        en: {
            bootbox: {
                locale: 'en',
            },
            redactor: {
                locale: 'en',
            },
            datepicker: {
                format: 'yyyy-mm-dd',
            },
            chosen: {
                no_results_text: "Nothing to show",
                placeholder_text_multiple: "Choose one",
            },
            form: {
                success: 'Data successfully saved',
                error: 'Error saving data',
            },
            deleting: {
                sure: 'Are you sure?',
                success: 'Deleting was successful',
            }
        },
    };

    $.fn.enableAddable = function () {
        this.find('.js_panel_addable-input-button').prop('disabled', false);
        return this;
    };
    $.fn.disableAddable = function () {
        this.find('.js_panel_addable-input-button').prop('disabled', true);
        return this;
    };
    $.fn.setAddableExists = function () {
        var $wrappers = this;
        $wrappers.each(function() {
            var $wrapper = $(this);
            var $exists = $wrapper.find('.js_panel_addable-input-exists');
            var $new = $wrapper.find('.js_panel_addable-input-new');
            var $newButton = $wrapper.find('.js_panel_addable-input-button-new');
            var $existsButton = $wrapper.find('.js_panel_addable-input-button-exists');
            $exists.prop('disabled', false);
            if($wrapper.hasClass('js_panel_addable-input-enabled')) {
                $new.prop('disabled', false);
            } else {
                $new.prop('disabled', true);
            }
            $existsButton.insertBefore($newButton);
            $newButton.show();
            $existsButton.hide();
            $new.slideUp(150);
            $exists.slideDown(150);
            $wrapper.trigger('panel-addable-exists-click');
        });
        return this;
    };
    $.fn.setAddableNew = function () {
        var $wrappers = this;
        $wrappers.each(function() {
            var $wrapper = $(this);
            var $exists = $wrapper.find('.js_panel_addable-input-exists');
            var $new = $wrapper.find('.js_panel_addable-input-new');
            var $newButton = $wrapper.find('.js_panel_addable-input-button-new');
            var $existsButton = $wrapper.find('.js_panel_addable-input-button-exists');
            $new.prop('disabled', false);
            if($wrapper.hasClass('js_panel_addable-input-enabled')) {
                $exists.prop('disabled', false);
            } else {
                $exists.prop('disabled', true);
            }
            $newButton.insertBefore($existsButton);
            $existsButton.show();
            $newButton.hide();
            $exists.slideUp(150);
            $new.slideDown(150);
            $wrapper.trigger('panel-addable-new-click');
        });
        return this;
    };
    $.fn.initChosen = function () {
        this.chosen({
            no_results_text: langs.ru.chosen.no_results_text,
            placeholder_text_multiple: langs.ru.chosen.placeholder_text_multiple,
            search_contains: true,
            width: "100%"
        });
        return this;
    };

    function init() {

        $('[data-toggle="tooltip"]').tooltip();

        $('.dd.js_panel_nestable-order').nestable({
            maxDepth: 1
        }).on('change', updateOrder);

        initRedactor();
        initDatatable();
        initPhoneMask();
        initMask();
        initChosen();
        initSelect2();
        initAutocomplete();
        initDatepicker();
        initTimepicker();
        initClockpicker();
        initAddable();

        bootbox.setDefaults({
            locale: langs.ru.bootbox.locale,
            size: 'small',
            backdrop: true
        });
    }


    init();

    function refresh() {
        initRedactor();
        initDatatable();
        initPhoneMask();
        initMask();
        initChosen();
        initSelect2();
        initDatepicker();
        initTimepicker();
        initClockpicker();
        initAddable();
    }

    $(document).ajaxComplete(function () {
        refresh();
    });


    function initPhoneMask() {
        $('.js_panel_input-phone').inputmask('+375 (99) 999-99-99');
    }

    function initMask() {
        $('.js_panel_input-mask').each(function () {
            $(this).inputmask($(this).data('mask'));
        });
    }

    function initRedactor() {
        $('.js_panel_input-redactor').summernote();
    }


    function initDatatable() {
        $('.js_panel_datatable').each(function () {
            var $table = $(this);

            var order = [];
            var disabledSearch = [];
            var columnDefs = [];
            $table.find('thead th').each(function () {
                var cellOrder = $(this).data('datatable-order');
                if (cellOrder !== false) {
                    order.push([$(this).index(), cellOrder]);
                } else {
                    columnDefs.push({orderable: false, targets: $(this).index()});
                }
                var cellSearch = $(this).data('datatable-search');
                if (cellSearch === false) {
                    disabledSearch.push($(this).index());
                }
            });

            $table.find('tfoot th').each(function () {
                if (disabledSearch.indexOf($(this).index()) === -1) {
                    var title = $table.find('thead th:eq(' + $(this).index() + ')').text();
                    $(this).html('<input type="text" placeholder="&#128269; ' + title + '" class="form-control input-sm" />');
                }
            });

            var datatable = $table.DataTable({
                order: order,
                columnDefs: columnDefs,
                "dom": 'lTfigt',
                "tableTools": {
                    "sSwfPath": "/assets/panel/swf/dataTables/swf/copy_csv_xls_pdf.swf"
                }
            });

            datatable.columns().every(function () {
                var that = this;
                $('input', this.footer()).on('keyup change', function () {
                    if (that.search() !== this.value) {
                        that.search(this.value).draw();
                    }
                });
            });
        });
    }


    function initDatepicker() {
        $('.js_panel_input-date').datepicker({
            format: langs.ru.datepicker.format,
            todayHighlight: true
        });
    }

    function initTimepicker() {
        $('.js_panel_input-time').timepicker({
            minuteStep: 1,
            showSeconds: false,
            showMeridian: false,
            defaultTime: false
        });
    }

    function initClockpicker() {
        $('.js_panel_input-clock').clockpicker();

    }

    function initChosen() {
        $(".js_panel_input-chosen").each(function() {
            if($(this).closest('.js_panel_multiple-row-clone').length == 0) {
                $(this).initChosen();
            }
        });
    }

    function initSelect2() {
        $(".js_panel_input-select2").select2();
    }

    function initAutocomplete() {
        $('.js_panel_input-autocomplete').each(function () {
            var $input = $(this);
            if (!$input.parent().hasClass('input-group')) {
                $input.wrap("<div class='input-group'></div>");
                $input.before('<span class="input-group-addon"><span class="fa fa-ellipsis-h"></span></span>');
            }
            var url = $input.data('autocomplete-url');
            $input.devbridgeAutocomplete({
                serviceUrl: url
            });
        });
    }

    function initAddable() {
        var $wrappers = $('.js_panel_addable-input');
        $wrappers.each(function () {
            var $wrapper = $(this);
            var $exists = $wrapper.find('.js_panel_addable-input-exists');
            var $new = $wrapper.find('.js_panel_addable-input-new');
            $exists.prop('disabled', false);
            if($wrapper.hasClass('js_panel_addable-input-enabled')) {
                $new.prop('disabled', false);
            } else {
                $new.prop('disabled', true);
            }
            $wrapper.removeClass('js_panel_addable-input').addClass('input-group').height($exists.outerHeight());
            $wrapper.append('' +
                '<span class="input-group-btn">' +
                '<button class="btn btn-default js_panel_addable-input-button js_panel_addable-input-button-exists" type="button"><span class="fa fa-bars"></span></button>' +
                '<button class="btn btn-success js_panel_addable-input-button js_panel_addable-input-button-new" type="button"><span class="fa fa-plus"></span></button>' +
                '</span>'
            );
            if (!$exists.find('option').length) {
                $wrapper.setAddableNew().disableAddable();
            }
        });
    }

    window.showNotification = function (text, type) {
        if (typeof title === 'undefined') {
            title = '';
        }
        if (typeof type === 'undefined') {
            type = 'success';
        }
        toastr.options = {
            closeButton: true,
            progressBar: true,
            showMethod: 'slideDown',
            timeOut: 4000
        };
        toastr[type](text);
    };

    function ajaxContent(e) {
        e.preventDefault();
        var $link = $(this);
        var url = $link.attr('href');
        var wrapper = $link.data('wrapper');
        var $wrapper = $(wrapper);

        $.ajax({
            url: url,
            type: "GET",
            dataType: 'JSON',
            success: function (data) {
                if (data.result == 'success') {
                    $wrapper.html(data.view);
                    refresh();
                }
            }
        });
    }

    function submitFormAjax(e) {
        e.preventDefault(); // prevent native submit
        var $form = $(this);
        $form.append('<div class="loader"></div>');
        $form.find('.form-group').removeClass('has-error');
        $form.find('.error-block').html('');
        $form.ajaxSubmit({
            success: function (data) {
                $form.find('.loader').remove();
                if (data.result == 'success') {
                    if ($form.hasClass('js_panel_form-ajax-redirect')) {
                        setTimeout(function () {
                            window.location.href = data.link;
                        }, 2000);
                    }
                    if (data.message) {
                        window.showNotification(data.message, 'success');
                    } else {
                        window.showNotification(langs.ru.form.success, 'success');
                    }
                } else {
                    $.each(data.errors, function (input, errors) {
                        var inputArray = input.split('.');
                        var $input = $form.find(':input[name="' + input + '"]');
                        if (!$input.length && inputArray.length > 1) {
                            $input = $form.find(':input[name="' + inputArray[0] + '[]"]:eq(' + inputArray[1] + ')');
                        }
                        var text = '';
                        $.each(errors, function (i, error) {
                            text += error + "<br>";
                        });
                        if ($input.length) {
                            var $wrapper = $input.closest('.form-group');
                            var $error_block = $wrapper.find('.error-block');
                            $wrapper.addClass('has-error');
                            var $help_block = '<span class="help-block">' + text + '</span>';
                            $error_block.append($help_block);
                        } else {
                            window.showNotification(text, 'error');
                        }
                    });
                    window.showNotification(langs.ru.form.error, 'error');
                }
            }
        });
        return false;
    }

    function deleteElement(e) {
        e.preventDefault();
        var $link = $(this);
        var url = $link.attr('href');
        bootbox.confirm({
            message: langs.ru.deleting.sure,
            callback: function (result) {
                if (result) {
                    $.ajax({
                        url: url,
                        type: "GET",
                        dataType: 'JSON',
                        success: function (data) {
                            if (data.result == 'success') {
                                if ($link.hasClass('js_panel_delete-table-row')) {
                                    var $element = $link.closest('tr');
                                } else if ($link.data('delete')) {
                                    var $element = data('delete');
                                } else {
                                    var $element = $link.parent();
                                }
                                $element.remove();
                                window.showNotification(langs.ru.deleting.success, 'error');
                            }
                        }
                    });
                }
            }
        });
        return false;
    }

    function changeAjaxRowInput() {
        var $row = $(this).closest('tr');
        var link = $row.data('link');
        var dataObject = {};
        $row.find(':input').each(function () {
            var name = $(this).attr('name');
            var value = $(this).val();
            if ($(this).is(':checkbox')) {
                if ($(this).is(':checked')) {
                    value = 1;
                } else {
                    value = 0;
                }
            }
            dataObject[name] = value;
        });

        $.ajax({
            url: link,
            type: "POST",
            dataType: 'JSON',
            data: dataObject,
            success: function (data) {
                if (data.result == 'success') {
                    window.showNotification(langs.ru.form.success, 'success');
                }
            }
        });
    }

    function updateOrder(e) {
        var $list = $(this);

        $list.append('<div class="loader"></div>');

        var link = $list.data('link');

        $list.find('.dd-item').each(function () {
            var $li = $(this);
            var order = $li.index();
            $li.attr('data-order', order);
        });

        var tree = window.JSON.stringify($list.nestable('serialize'));

        $.ajax({
            url: link,
            type: "POST",
            dataType: 'JSON',
            data: {
                tree: tree
            },
            success: function (data) {
                if (data.result == 'success') {
                    $list.find('.loader').remove();
                    window.showNotification(langs.ru.form.success, 'success');
                }
            }
        });
    }

    function clickMultipleAdd(e) {
        e.preventDefault();
        var name = $(this).data('name');
        var $clone = $('.js_panel_multiple-row-clone[data-name="' + name + '"]');
        var $row = $clone.clone();
        var $inputs = $row.find(':input');
        $inputs.prop('disabled', false);
        $inputs.each(function() {
           var $input = $(this);
            if($input.hasClass('js_panel_input-chosen')) {
                $input.initChosen();
            }
        });
        $row.insertBefore($clone);
        $row.removeClass('js_panel_multiple-row-clone');
        $row.trigger('panel-multiple-added');
        return false;
    }

    function clickMultipleRemove(e) {
        e.preventDefault();
        var name = $(this).data('name');
        var $row = $(this).closest('.js_panel_multiple-row[data-name="' + name + '"]');
        $row.remove().trigger('panel-multiple-removed');
        return false;
    }

    function uploadImages($input, url, model, type, params, callback) {
        if ($input[0].files) {
            var data = new FormData();
            data.append('model', model);
            if ($.isArray(type)) {
                $.each(type, function (key, value) {
                    data.append('type[]', value);
                });
            } else {
                data.append('type', type);
            }
            data.append('params', params);
            $.each($input[0].files, function (key, value) {
                data.append('files[]', value);
            });
            var result = {};
            $.ajax({
                url: url,
                type: 'POST',
                data: data,
                processData: false,
                contentType: false,
                dataType: 'json',
                success: function (data) {
                    result.type = data.type;
                    if (data.type == 'success') {
                        result.files = data.files;
                    } else {
                        result.text = data.error;
                    }
                    $input.replaceWith($input.clone(true));
                    callback(result);
                }
            });
        }
    }


    function changeImagesInput() {
        var $wrapper = $(this).closest('.js_panel_images-upload-wrapper');

        var $loading = $wrapper.find('.js_panel_images-loading-col');
        $loading.fadeIn(100);

        var dataUrl = $wrapper.data('url');
        var dataModel = $wrapper.data('model');
        var dataType = $wrapper.data('type');
        var dataParams = $wrapper.data('params');
        var dataMultiple = $wrapper.data('multiple');

        var $row = $wrapper.find('.js_panel_images-row');
        uploadImages($(this), dataUrl, dataModel, dataType, dataParams, function (uploaded) {
            if (uploaded.type == 'success') {
                $.each(uploaded.files, function (i, file) {
                    if (!dataMultiple) {
                        $row.find('.js_panel_images-col').not('.js_panel_images-col-clone').remove();
                    }
                    var $col_clone = $row.find('.js_panel_images-col-clone');
                    var $col = $col_clone.clone();
                    var $image = $col.find('.js_panel_images-img');
                    var $input = $col.find('.js_panel_images-path');
                    var $main = $col.find('.js_panel_images-main');
                    var $zoom = $col.find('.js_panel_images-zoom');
                    $image.attr('src', file.path);
                    $zoom.attr('href', file.fullsize);
                    $input.val(file.filename).prop('disabled', false);
                    $main.prop('disabled', false);
                    $col.removeClass('js_panel_images-col-clone');
                    $col.insertBefore($col_clone);
                });
                $loading.fadeOut(100);
                resetMainImage($wrapper);
            } else {
                $loading.fadeOut(100);
            }
        });
    }

    function removeImages(e) {
        e.preventDefault();
        var $col = $(this).closest('.js_panel_images-col');
        var $wrapper = $col.closest('.js_panel_images-upload-wrapper');
        $col.remove();
        resetMainImage($wrapper);
    }

    function resetMainImage($wrapper) {
        var data_multiple = $wrapper.data('multiple');
        if (!data_multiple || (data_multiple && !$wrapper.find('.js_panel_images-main:enabled:checked').length)) {
            $wrapper.find('.js_panel_images-main:enabled:first').prop('checked', true);
        }
        var $cols = $wrapper.find('.js_panel_images-col').not('.js_panel_images-col-clone');
        $cols.each(function (i) {
            var $col = $(this);
            var $main = $col.find('.js_panel_images-main');
            $main.attr('value', i);
        });
    }


    function clickAddableButton(e) {
        e.preventDefault();
        var $button = $(this);
        var $wrapper = $button.closest('.input-group');
        if ($button.hasClass('js_panel_addable-input-button-new')) {
            $wrapper.setAddableNew();
        } else {
            $wrapper.setAddableExists();
        }
        return false;
    }
});