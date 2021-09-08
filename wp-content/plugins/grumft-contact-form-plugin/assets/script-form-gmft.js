/*var $ = jQuery.noConflict();*/

// jQuery(document).ready(function () {
//     const showLgpd = localStorage.getItem('showLgpd');
//     if (showLgpd != 'false') {
//         jQuery("#privacy-pop-up").css({
//             "display": "flex"
//         });
//     }
//     $('#exit-popup').click(function () {
//         jQuery("#privacy-pop-up").css({
//             "display": "none"
//         });
//         localStorage.setItem('showLgpd', 'false');
//     });
// });

// $(".buttons_lp").click(function () {
//     $("#click_origin").val($(this).attr("data-id"));
//     $('#top-banner-form-inner')[0].scrollIntoView(true);
// });

jQuery("#btn-submit").click(function () {
    var name = jQuery("#name").val();
    var email = jQuery("#email").val();
    var phone = jQuery("#phone").val();
    var company = jQuery("#company").val();
    var investment = jQuery("#investment").val();
    var click_origin = jQuery("#click_origin").val();

    var isValid = validateFields(name, email, phone, company, investment);
    if (isValid == 4) {

        jQuery("#btn-submit").prop("disabled", true);

        var formData = {
            'name': name,
            'email': email,
            'phone': phone,
            'company': company,
            'investment': investment,
            'click_origin': click_origin
        };

        jQuery.ajax({
            url: "/wp-json/register-form/send",
            type: "POST",
            data: formData,
            success: function (data) {
                /*var status = JSON.parse(data).status*/
                if (data.status == 201) {
                    jQuery("#click_origin").before('<div style="background-color: green;color: white;text-align: center;font-family: \'fonte-regular\';font-size: 13px;padding: 8px;border-radius: 9px;">ENTRAREMOS EM CONTATO O MAIS BREVE POSSÃVEL :)</div>');
                } else {
                    jQuery("#click_origin").before('<div style="background-color:#F52929;color:white;text-align:center;font-family:\'fonte-regular\';">OCORREU UM ERRO TENTE NOVAMENTE</div>');
                }
                jQuery("#btn-submit").prop("disabled", false);
                clearFileds();
            },
            error: function (xhr, ajaxOptions, thrownError) {
                jQuery("#click_origin").before('<div style="background-color:#F52929;color:white;text-align:center;font-family:\'fonte-regular\';">OCORREU UM ERRO TENTE NOVAMENTE</div>');
            }
        });
    }
});

function validateFields(name, email, phone, company, investment) {
    var valid = 4;

    if (name == "") {
        jQuery("#name").css('border', 'solid red 3px');
        valid--;
    } else {
        jQuery("#name").css('border', 'none');
    }

    if (email == "") {
        jQuery("#email").css('border', 'solid red 3px');
        valid--;
    } else {
        jQuery("#email").css('border', 'none');
    }

    if (phone == "") {
        jQuery("#phone").css('border', 'solid red 3px');
        valid--;
    } else {
        jQuery("#phone").css('border', 'none');
    }

    if (company == "") {
        jQuery("#company").css('border', 'solid red 3px');
        valid--;
    } else {
        jQuery("#company").css('border', 'none');
    }

    if (investment == "" || investment.includes("Média")) {
        jQuery("#investment").css('border', 'solid red 3px');
        valid--;
    } else {
        jQuery("#investment").css('border', 'none');
    }

    return valid;
}

function clearFileds() {
    jQuery("#email_subscriber").val("");
}

jQuery("#btn-submit-subscriber").click(function () {
    
    var email = jQuery("#email_subscriber").val();    
    var click_origin = jQuery("#click_origin_subscriber").val();

    var isValid = false;
    if (email == "") {
        isValid = false;
        jQuery("#email_subscriber").css('border', 'solid red 3px');        
    } else {
        isValid = true;
        jQuery("#email_subscriber").css('border', 'none');
    }

    if (isValid) {

        jQuery("#btn-submit-subscriber").prop("disabled", true);

        var formData = {            
            'email': email,            
            'click_origin': click_origin
        };

        jQuery.ajax({
            url: "/wp-json/email-subscriber/send",
            type: "POST",
            data: formData,
            success: function (data) {
                /*var status = JSON.parse(data).status*/
                if (data.status == 201) {
                    jQuery("#click_origin_subscriber").before('<div style="background-color: green;color: white;text-align: center;font-family: \'fonte-regular\';font-size: 13px;padding: 8px;border-radius: 9px;">ENTRAREMOS EM CONTATO O MAIS BREVE POSSÃVEL :)</div>');
                } else {
                    jQuery("#click_origin_subscriber").before('<div style="background-color:#F52929;color:white;text-align:center;font-family:\'fonte-regular\';">OCORREU UM ERRO TENTE NOVAMENTE</div>');
                }
                jQuery("#btn-submit-subscriber").prop("disabled", false);
                clearFileds();
            },
            error: function (xhr, ajaxOptions, thrownError) {
                jQuery("#click_origin_subscriber").before('<div style="background-color:#F52929;color:white;text-align:center;font-family:\'fonte-regular\';">OCORREU UM ERRO TENTE NOVAMENTE</div>');
            }
        });
    }
});