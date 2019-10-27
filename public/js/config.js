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
    $('#horario').mask('00:00');
    $('.uf').mask('SS');

});
