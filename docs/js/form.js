// Função básica para 'passar' o conteúdo da página, será aprimorado com o tempo

$(document).ready(function() {
    $("#choose-a-bikee").hide();
    $("#map-a-bikee").hide();
});

let idy = 0;

$(document).ready(function() {

    $("#bt-next").on("click", function () {

        idy++;

        if (idy === 1) { // Nota: Aqui também poderia ter sido usado o 'document.getElementById(el).style.display = 'none/block';'
            $("#description").hide();
            $("#choose-a-bikee").show();
        }
        
        else {
            $("#choose-a-bikee").hide();
            $("#map-a-bikee").show();
            $("#bt-next").hide();
        }

    });
});
