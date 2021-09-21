// Função básica para 'passar' o conteúdo da página, será aprimorado com o tempo

let section = 0;

$(document).ready(function() {

    $('.card-plan').click(function() {

        // Change radio buttons

        var isChecked = $('#selected-plan').attr('checked');

        if ($(this).is('#premium')) {
            if (typeof isChecked !== typeof undefined && isChecked !== false) {
                $("#selected-plan").removeAttr('checked');
              }
            $("#selected-plan[value=Premium]").attr('checked', 'checked');
        }

        else {
            if (typeof isChecked !== typeof undefined && isChecked !== false) {
                $("#selected-plan").removeAttr('checked');
              }
            $("#selected-plan[value=Normal]").attr('checked', 'checked');
        }

        // Add effect in clicked card 

        if ($('.card-plan').hasClass('selected')) {
            $('.card-plan').removeClass('selected').addClass('not-selected');
            $(this).removeClass('not-selected').addClass('selected');

            $("#bt-next").show();
        }

        else {
            $(this).removeClass('not-selected').addClass('selected');

            $("#bt-next").show();
        }

    });

    // Passing sections

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
