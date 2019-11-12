/**
 * Created by Daniel on 20/03/2018.
 */

$(function () {
    var SPMaskBehavior = function (val) {
            return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
        spOptions = {
            onKeyPress: function(val, e, field, options) {
                field.mask(SPMaskBehavior.apply({}, arguments), options);
            }
        };

    $('.phone').mask(SPMaskBehavior, spOptions);
    $('.date').mask('00/00/0000');
    $('.money').mask('000.000.000.000.000,00', {reverse: true});
    $('#horario').mask('00:00');
    $('.uf').mask('SS');

});


$('#cidades').select2({
    language: "pt-BR",
    theme: "bootstrap",
    width: '100%',
    minimumInputLength: 3,
    ajax: {
        url: '/cidades_select',
        dataType: 'json',
        data: function(params) {
            var query = {
                'term': params.term
                , 'page': params.page || 1
            };
            return query;
        },
        processResults: function (data, params) {
            params.page = params.page || 1;
            var datos = $.map(data.results, function (obj) {
                obj.id = obj.text;
                return obj;
            });
            return {
                results: datos,
                pagination: {
                    more: data.pagination.more
                }
            };
        },
        cache: true
    }
}).on('change', function() {
    var $selected = $(this).find('option:selected');
    var $container = $(this).siblings('#cidades-container');

    var $list = $('<ul>');
    $selected.each(function(k, v) {
        var $li = $('<li class="tag-selected">' + $(v).text() + '<a class="destroy-tag-selected">×</a></li>');
        $li.children('a.destroy-tag-selected')
            .off('click.select2-copy')
            .on('click.select2-copy', function(e) {
                var $opt = $(this).data('select2-opt');
                $opt.prop('selected', false);
                $opt.parents('select').trigger('change');
            }).data('select2-opt', $(v));
        $list.append($li);
    });
    $container.html('').append($list);
}).trigger('change');;
