$(document).ready(function() {
    $('#fullpage').fullpage({
        sectionsColor: ['#ff9933', '#0099ff', '#00cc66'],
        menu: '#menu',
        anchors: ['firstPage', 'secondPage', 'thirdPage'],
        navigation: true,
        navigationPosition: 'right',
        navigationTooltips: ['Dashboard', 'Upcoming', 'Table']
    });

    $('#sign-in-button').click(function(){
        $('#sign-in-dialog').modal('show');
    });

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
