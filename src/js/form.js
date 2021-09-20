// Função básica para 'passar' o conteúdo da página, será aprimorado com o tempo

let section = 0;

$(document).ready(function() {

    $("#choose-a-plan").hide();
    $("#map-a-bikee").hide();

    $("#bt-next").on("click", function () {

        section++;

        if (section === 1) {
            $("#description").hide();
            $("#choose-a-plan").show();
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
