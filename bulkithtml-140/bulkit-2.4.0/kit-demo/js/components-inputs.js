/*! components-inputs.js | Bulkit | CSS Ninja */

/* ==========================================================================
special inputs JS file
========================================================================== */

$(document).ready(function($) {

    "use strict";

    //Material select
    if ($('.material-select').length) {
        $('.material-select .material-input').on('focus', function(){
            $(this).closest('.material-select').addClass('is-active');
        })
        $('.material-select .dropdown-list .option').on('click', function(){
            var optionName = $(this).text();
            console.log(optionName);
            $(this).siblings('.option').removeClass('selected');
            $(this).addClass('selected');
            $(this).closest('.material-select').find('.material-input').val(optionName);
            $(this).closest('.material-select').removeClass('is-active').addClass('has-value');
        })
        $(document).click(function (e) {
            var target = e.target;
            if (!$(target).is('.material-select') && !$(target).parents().is('.field')) {
                $('.material-select').removeClass('is-active');
            }
        });
    }

    //Basic autocomplete
    if ($('#basic-autocpl').length) {
        var options = {
            url: "assets/data/persons.json",
            getValue: function(element) {
                return element.name;
            },
            highlightPhrase: false,
            list: {
                maxNumberOfElements: 5,
                showAnimation: {
                    type: "fade", //normal|slide|fade
                    time: 400,
                    callback: function() {}
                },
                match: {
                    enabled: true
                }
            },
        };

        $("#basic-autocpl").easyAutocomplete(options);
    }

    //Description autocomplete
    if ($('#desc-autocpl').length) {
        var options = {
            url: "assets/data/persons.json",
            getValue: function(element) {
                return element.name;
            },
            template: {
                type: "description",
                fields: {
                    description: "position"
                }
            },
            highlightPhrase: false,
            list: {
                maxNumberOfElements: 5,
                showAnimation: {
                    type: "fade", //normal|slide|fade
                    time: 400,
                    callback: function() {}
                },
                match: {
                    enabled: true
                }
            },
        };

        $("#desc-autocpl").easyAutocomplete(options);
    }

    //Users autocomplete
    if ($('#users-autocpl').length) {
        var usersOptions = {
            url: "assets/data/persons.json",
            getValue: "name",
            template: {
                type: "custom",
                method: function(value, item) {
                    return "<div class=" + 'template-wrapper' + "><img class=" + 'autocpl-avatar' + " src='" + item.pic + "' /><div class=" + 'entry-text' + ">" + value + "<br><span>" + item.email + "</span></div></div> ";
                }
            },
            highlightPhrase: false,
            list: {
                maxNumberOfElements: 3,
                showAnimation: {
                    type: "fade", //normal|slide|fade
                    time: 400,
                    callback: function() {}
                },
                match: {
                    enabled: true
                }
            },
        };

        $("#users-autocpl").easyAutocomplete(usersOptions);
    }

    //datepicker init
    $('[data-toggle="datepicker"]').datepicker();

    //wickedpicker 12 hours init
    $('.timepicker-12').wickedpicker();

    //wickedpicker 24 hours init
    $('.timepicker-24').wickedpicker({
        twentyFour: true,
        timeSeparator: ':'
    });

    //Bubble range input
    if ($('#input-range').length) {

        var input = $('#input-range');

        input.bind('input', function(){
            getRangeValue(input);
        }).bind('change', function(){
            getRangeValue(input);	/* for IE */
        });

        function getRangeValue(e){
            var value = $(e).val();
            $('.value').text(value);
            $('.range').attr('data-value', value);
            input.attr('value', value);
        }

    }
    //Tags input initialization
    if ($('.tag-input').length) {
        $('.tag-input').tagsInput({
            'width': '100%',
            'height': '120px',
            'defaultText':'Add a tag',
            'placeholderColor' : '#999'
        });
    }

    //Combo boxes
    initComboBox();
    initImageComboBox();
    initStackedComboBox();

    //Simple combo box
    function initComboBox() {
        $('.is-combo .combo-box').on('click', function () {
            $(this).toggleClass('is-active');
        })

        $('.combo-box .box-dropdown li').on('click', function (e) {

            var target = e.target;
            //Get selected item data
            var itemIconClass = $(this).find('.item-icon i').attr('class');
            var itemIcon = $(this).find('.item-icon i');
            var itemIconClass = $(this).find('.item-icon i').attr('class');
            var itemSvgIcon = $(this).find('.item-icon').html();
            var itemName = $(this).find('.item-name').text();
            var iconTemplate = '<i class="' + itemIconClass + '"></i>'
            var template = '';

            console.log(itemSvgIcon);

            if (!$(target).is('.box-dropdown li, body') && !$(target).parents().is('.box-dropdown')) {
                $('.box-dropdown').removeClass('is-active');
            }
            if ($(target).is('body')) {
                $('.box-dropdown').removeClass('is-active');
            }

            //Handle dropdown item active state toggle
            $(this).siblings('li.is-active').removeClass('is-active');
            $(this).addClass('is-active');
            //Update combo box selected value
            if (itemIcon.length) {
                $(this).closest('.combo-box').find('.combo-item i').remove();
                $(this).closest('.combo-box').find('.combo-item svg').remove();
                $(this).closest('.combo-box').find('.combo-item').prepend(iconTemplate);
                $(this).closest('.combo-box').find('.combo-item .selected-item').text(itemName);
            } else {
                $(this).closest('.combo-box').find('.combo-item i').remove();
                $(this).closest('.combo-box').find('.combo-item').prepend(itemSvgIcon);
                $(this).closest('.combo-box').find('.combo-item .selected-item').text(itemName);
            }
        });
    }

    //Image combo box
    function initImageComboBox() {
        $('.is-combo .image-combo-box').on('click', function () {
            $(this).toggleClass('is-active');
        })

        $('.image-combo-box .box-dropdown li').on('click', function (e) {

            var target = e.target;
            //Get selected item data
            var itemPic = $(this).find('.item-icon img').attr('src');
            var itemName = $(this).find('.item-name').text();

            if (!$(target).is('.box-dropdown li, body') && !$(target).parents().is('.box-dropdown')) {
                $('.box-dropdown').removeClass('is-active');
            }
            if ($(target).is('body')) {
                $('.box-dropdown').removeClass('is-active');
            }

            //Handle dropdown item active state toggle
            $(this).siblings('li.is-active').removeClass('is-active');
            $(this).addClass('is-active');
            //Update combo box selected value
            $(this).closest('.image-combo-box').find('.combo-item img').attr('src', itemPic);
            $(this).closest('.image-combo-box').find('.combo-item .selected-item').text(itemName);
        })
    }

    //Stacked Combo box
    function initStackedComboBox() {
        $('.is-combo .stacked-combo-box').on('click', function () {
            $(this).toggleClass('is-active');
        })

        $('.stacked-combo-box .box-dropdown li').on('click', function (e) {
            var target = e.target;
            //Get selected item data
            var itemPic = $(this).find('.item-icon img').attr('src');
            var itemName = $(this).find('.item-name').text();
            var itemRef = $(this).attr('data-skill');
            var initialText = 'Select one or more skills';

            var skillTemplate = `
                    <img id="${itemRef}" class="is-stacked" src="${itemPic}">
                `

            if (!$(target).is('.box-dropdown li, body') && !$(target).parents().is('.box-dropdown')) {
                $('.box-dropdown').removeClass('is-active');
            }
            if ($(target).is('body')) {
                $('.box-dropdown').removeClass('is-active');
            }

            //Handle dropdown item active state toggle
            $(this).toggleClass('is-active');
            console.log(skillTemplate);

            if (($('.stacked-combo-box li.is-active').length) == 0) {
                $('#' + itemRef).remove();
                $('#img-placeholder').removeClass('is-hidden');
                $(this).closest('.stacked-combo-box').find('.selected-item').text(initialText);
            } else {
                $('#img-placeholder').addClass('is-hidden');
                $(this).closest('.stacked-combo-box').find('.selected-item').text('');
                if ($('#' + itemRef).length) {
                    $('#' + itemRef).remove();
                } else {
                    $(this).closest('.stacked-combo-box').find('.combo-item').prepend(skillTemplate);
                }
            }
        })
    }

});


