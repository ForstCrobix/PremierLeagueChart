/* All the javascript required for admin users. It will only be loaded when the user is signed in for efficiency */
$(document).ready(function(){
    $('.team-select-dropdown').change(function(){
        var fixturesList = $('.fixtures-list');
        var selectedTeamID = this.selectedIndex;
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
                        '<p>' + response[key].home_team_id + ' vs ' + response[key].away_team_id + '</p>'
                    );
                }
            }
        },
        error: function(){
            alert("Unable to retrieve fixture list from server.");
        },
        complete: function(){
            removeLoading($('.fixtures-list'));
        }
    })
}
