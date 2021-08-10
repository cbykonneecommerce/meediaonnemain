var $ = jQuery.noConflict();
$(document).ready(function() {
    const showLgpd = localStorage.getItem('showLgpd');
    if (showLgpd != 'false') {
        $("#privacy-pop-up").css({
            "display": "flex"
        });
    }
    $('#exit-popup').click(function() {
        $("#privacy-pop-up").css({
            "display": "none"
        });
        localStorage.setItem('showLgpd', 'false');
    });
});


$(".buttons_lp").click(function () {
    $("#click_origin").val($(this).attr("data-id"));
    $('#top-banner-form-inner')[0].scrollIntoView(true);
});

$("#btn-submit").click(function () {
    var name = $("#name").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var company = $("#company").val();
    var click_origin = $("#click_origin").val();

    var isValid = validateFields(name, email, phone, company);
    if (isValid == 4) {

        $("#btn-submit").prop("disabled", true);

        var formData = {
            'name': name,
            'email': email,
            'phone': phone,
            'company': company,
            'click_origin': click_origin
        };

        $.ajax({
            url: "/actions/submit2.php",
            type: "POST",
            data: formData,
            success: function (data) {
                var status = JSON.parse(data).status
                if (status == 201) {
                    $("#click_origin").before('<div style="background-color: green;color: white;text-align: center;font-family: \'fonte-regular\';font-size: 13px;padding: 8px;border-radius: 9px;">ENTRAREMOS EM CONTATO O MAIS BREVE POSSÍVEL :)</div>');
                } else {
                    $("#click_origin").before('<div style="background-color:#F52929;color:white;text-align:center;font-family:\'fonte-regular\';">OCORREU UM ERRO TENTE NOVAMENTE</div>');
                }
                $("#btn-submit").prop("disabled", false);
                clearFileds();
            }
        });
    }
});

function validateFields(name, email, phone, company) {
    var valid = 4;

    if (name == "") {
        $("#name").css('border', 'solid red 3px');
        valid--;
    } else {
        $("#name").css('border', 'none');
    }

    if (email == "") {
        $("#email").css('border', 'solid red 3px');
        valid--;
    } else {
        $("#email").css('border', 'none');
    }

    if (phone == "") {
        $("#phone").css('border', 'solid red 3px');
        valid--;
    } else {
        $("#phone").css('border', 'none');
    }

    if (company == "") {
        $("#company").css('border', 'solid red 3px');
        valid--;
    } else {
        $("#company").css('border', 'none');
    }

    return valid;
}

function clearFileds() {
    $("#name").val("");
    $("#email").val("");
    $("#phone").val("");
    $("#company").val("");
}
