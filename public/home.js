$(document).ready(function() {
    $('#fullpage').fullpage({
        sectionsColor: ['#ff9933', '#0099ff', '#404040'], //#00cc66
        menu: '#menu',
        anchors: ['firstPage', 'secondPage', 'thirdPage'],
        navigation: true,
        navigationPosition: 'right',
        navigationTooltips: ['Dashboard', 'Upcoming', 'Table'],

        // removes the navbar buttons when the chart page is directly accessed
        afterLoad: function(anchorLink, index) {
          var menu = document.querySelector('#menu');
          var signIn = document.querySelector('#sign-in-button');

          if(anchorLink == 'thirdPage') {
            menu.style.visibility = "hidden";
            signIn.style.visibility = "hidden";
          }
          else {
            menu.style.visibility = "visible";
            signIn.style.visibility = "visible";
          }
        },

        // removes the navbar buttons when the chard is accessed from scrolling
        onLeave: function(index, nextIndex, direction) {
          var menu = document.querySelector('#menu');
          var signIn = document.querySelector('#sign-in-button');
          if(index == 2 && direction == 'down')  {
            menu.style.visibility = "hidden";
            signIn.style.visibility = "hidden";
          }
          if(index == 3 && direction == 'up') {
            menu.style.visibility = "visible";
            signIn.style.visibility = "visible";
          }
        }
    });

    // Gets the scores to populate the progress bars
    $.ajax({
        type: "post",
        url: "./getScores",
        success: function(response){
            updateScores( response['em'], response['rob']);
        }
    });

    // Preloads the colored images that are shown when hovering over the headshots (not used)
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

var isClickedA = false;
var savedTeamA = "null";
function onClickAway(inputA) {
  if (inputA == savedTeamA || savedTeamA == "null")
  {
    isClickedA = !isClickedA;
    if (isClickedA)  {
      inputA.style.opacity = 0.4;
      savedTeamA = inputA;
    }
    else {
        inputA.style.opacity = 1;
        savedTeamA = "null";
      }
  }
  else {
    savedTeamA.style.opacity = 1;
    inputA.style.opacity = 0.4;
    savedTeamA = inputA;
    isClicked = true;
  }
}

var isClickedH = false;
var savedTeamH = "null";
function onClickHome(inputH) {
  if (inputH == savedTeamH || savedTeamH == "null")
  {
    isClickedH = !isClickedH;
    if (isClickedH)  {
      inputH.style.opacity = 0.4;
      savedTeamH = inputH;

    }
    else {
        inputH.style.opacity = 1;
        savedTeamH = "null";
      }
  }
}
