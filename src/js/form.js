// Função básica para 'passar' o conteúdo da página, será aprimorado com o tempo

let section = 0;

$(document).ready(function() {

    $('.card-plan').click(function() {
        $('.card-plan').css("box-shadow", "");
        $(this).css("box-shadow", "-1px 2px 21px 15px rgba(8,77,22,1)");
        $("#bt-next").show();
    });

    $('#premium').click(function() {
        $("#selected-plan[value=Normal]").removeAttr('checked');
        $("#selected-plan[value=Premium]").attr('checked', 'checked');
    });

    $('#normal').click(function() {
        $("#selected-plan[value=Premium]").removeAttr('checked');
        $("#selected-plan[value=Normal]").attr('checked', 'checked');
    });

    $("#choose-a-plan").hide();
    $("#map-a-bikee").hide();

    $("#bt-next").on("click", function () {

        section++;

        if (section === 1) {
            $("#description").hide();
            $("#choose-a-plan").show();
            $("#bt-next").hide();
        }
        
        else {
            if (section === 2) {
                $("#choose-a-plan").hide();
                $("#map-a-bikee").show();
                $("#bt-next").hide();
            }
        }

    });

});
