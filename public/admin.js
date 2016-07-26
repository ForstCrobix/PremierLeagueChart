/* All the javascript required for admin users. It will only be loaded when the user is signed in for efficiency */
$(document).ready(function(){
    $('.team-select-dropdown').change(function(){
        var fixturesList = $('.fixtures-list');
        var selectedTeamID = this.value;
        if(selectedTeamID != 0)
        {
            GetTeamFixtures(selectedTeamID);
            if(fixturesList.hasClass('loading'))
                removeLoading(fixturesList);
            else
                addLoading(fixturesList);
        }
    });
});

function GetTeamFixtures(teamID){
    $('#fixtures').html("");
    $.ajax({
        type: 'post',
        url: './getTeamFixtures',
        data: {teamID : teamID},
        success: function(response){
            for(key in response) {
                if(response.hasOwnProperty(key)) {
                    $('#fixtures').append(
                        '<div class="fixture row">' +
                            '<div class="col-md-4">' +
                                    '<div class="col-md-4">' +
                                        '<div class="fixture-badge teams-h team-' + response[key].home_id + '">' + '</div>' +
                                    '</div>' +
                                    '<div class="col-md-4">' +
                                        '<p style="display:inline-block"> vs </p>' +
                                    '</div>' +
                                    '<div class="col-md-4">' +
                                        '<div class="fixture-badge teams-a team-' + response[key].away_id + '">' + '</div>' +
                                    '</div>' +
                            '</div>' +
                            '<form class="fixture-form form-horizontal" role="form" method="POST" action="/updateFixture">' +
                                '<input type="hidden" name="fixture_id" value="' + response[key].id + '">' +
                                '<div class="col-md-8 fixture-details-container">' +
                                        '<div class="row">' +
                                            '<label class="col-md-4">Date</label>' +
                                            '<input class="col-md-6" type="text" name="date" value="' + response[key].date.split(" ")[0] + '">' +
                                        '</div>' +
                                        '<div class="row">' +
                                            '<label class="col-md-4">Time</label>' +
                                            '<input class="col-md-6" type="text" name="time" value="' + response[key].date.split(" ")[1] + '">' +
                                        '</div>' +
                                        '<button type="submit" class="btn btn-success">Save</button>' +
                                '</div>' +
                            '</form>' +
                        '</div>'
                    );
                }
            }
            // Submits the sign in form
            $('.fixture-form').on('submit', function(e){
                e.preventDefault();
                var form = $(this);

                $.ajax({
                    type: 'post',
                    url: './updateFixture',
                    data: $(this).serialize(),
                    success: function (response) {
                        var button = form.find("button");
                        if(response == 'OK') {
                            button.html("All good!");
                            button.prop('disabled', true);
                        }
                        else {
                            button.removeClass('btn-success').addClass('btn-danger');
                            button.html("I've got a bad feeling about this...");
                            button.prop('disabled', true);
                        }
                    },
                    error: function() {
                        alert('Unable to save to database.');
                    }
                });
            });
        },
        error: function(){
            alert("Unable to retrieve fixture list from server.");
        },
        complete: function(){
            removeLoading($('.fixtures-list'));
        }
    })
}
