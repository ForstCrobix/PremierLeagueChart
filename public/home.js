$(document).ready(function() {
    $('#fullpage').fullpage({
        sectionsColor: ['#ff9933', '#0099ff', '#00cc66'],
        menu: '#menu',
        anchors: ['firstPage', 'secondPage', 'thirdPage'],
        navigation: true,
        navigationPosition: 'right',
        navigationTooltips: ['Dashboard', 'Upcoming', 'Table']
    });

    // Gets the scores to populate the progress bars
    $.ajax({
        type: "post",
        url: "./getScores",
        success: function(response){
            updateScores( response['em'], response['rob']);
        }
    });

    // Preloads the colored images that are shown when hovering over the headshots
    preload("images/headshots/rob_hover.png", "images/headshots/emelie_hover.png");

    // Shows the sign in dialog when the user clicks the 'sign in' button
    $('#sign-in-button').click(function(){
        $('#sign-in-dialog').modal('show');
    });

    // Submits the sign in form
    $('form').on('submit', function(e){
        e.preventDefault();

        $.ajax({
            type: 'post',
            url: './authenticate',
            data: $('form').serialize(),
            success: function (response) {
                if(response == 'OK') {
                    //Reload the page
                    location.reload(false);
                }
                else {
                    //Display error message
                    $('.form-group').addClass('has-error');
                    $('.help-block').removeClass('no-display');
                }
            },
            error: function() {
                alert('Unable to login.');
            }
        });
    });
});

function updateScores(emelieScore, robScore) {
    var progression = 0,
        progress = setInterval(function()
        {
            if(progression <= emelieScore) {
                $('.progress-e .progress-bar-e').css({'width':progression+'%'});
            }
            if(progression <= robScore) {
                $('.progress-r .progress-bar-r').css({'width':progression+'%'});
            }

            progression += 1;
            if (progression > emelieScore && progression > robScore) {
                clearInterval();
            }
        }, 20);
}

// preload images
var imgs = new Array()
function preload() {
    for (i = 0; i < preload.arguments.length; i++) {
        imgs[i] = new Image()
        imgs[i].src = preload.arguments[i]
    }
}
