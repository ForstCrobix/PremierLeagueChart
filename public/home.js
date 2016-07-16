$(document).ready(function() {
    $('#fullpage').fullpage({
        sectionsColor: ['#ff9933', '#0099ff', '#404040', '#FF4B33'],
        menu: '#menu',
        anchors: ['firstPage', 'secondPage', 'thirdPage', 'fourthPage'],
        navigation: true,
        navigationPosition: 'right',
        navigationTooltips: ['Dashboard', 'Upcoming', 'Table', 'Fixtures'],

        // removes the navbar buttons when the chart page is directly accessed
        afterLoad: function(anchorLink, index) {
          var menu = $('#menu');
          var signIn = $('#sign-in-button');

          if(anchorLink == 'thirdPage') {
            menu.addClass('no-display'); // = "hidden";
            if (signIn != null) {
                signIn.addClass('no-display');
            }
          }
          else {
              menu.removeClass('no-display');
              if (signIn != null) {
                  signIn.removeClass('no-display');
              }
          }
        },

        // removes the navbar buttons when the chard is accessed from scrolling
        onLeave: function(index, nextIndex, direction) {
          var menu = $('#menu');
          var signIn = $('#sign-in-button');
          if(index == 2 && direction == 'down' ||
             index == 4 && direction == 'up')  {
              menu.addClass('no-display');
              if (signIn != null) {
                  signIn.addClass('no-display');
              }
          }
          if(index == 3 && direction == 'up') {
              menu.removeClass('no-display');
              if (signIn != null) {
                  signIn.removeClass('no-display');
              }
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
        imgs[i] = new Image();
        imgs[i].src = preload.arguments[i]
    }
}

var isClickedA = false;
var savedTeamA = "null";
var awayID = 100, homeID = 100;
function onClickAway(inputA, id) {
  awayID = id;
  if (inputA == savedTeamA || savedTeamA == "null")  {
    isClickedA = !isClickedA;
    if (isClickedA)  {
      inputA.style.opacity = 0.4;
      savedTeamA = inputA;
    }
    else {
        inputA.style.opacity = 1;
        savedTeamA = "null";
        awayID = 100;
      }
  }
  else {
    savedTeamA.style.opacity = 1;
    inputA.style.opacity = 0.4;
    savedTeamA = inputA;
  }
  setHighlighted();
}

var isClickedH = false;
var savedTeamH = "null";
function onClickHome(inputH, id) {
      homeID = id;
  if (inputH == savedTeamH || savedTeamH == "null") {
    isClickedH = !isClickedH;
    if (isClickedH)  {
      inputH.style.opacity = 0.4;
      savedTeamH = inputH;
    }
    else {
        inputH.style.opacity = 1;
        savedTeamH = "null";
        homeID = 100;
      }
  }
  else {
    savedTeamH.style.opacity = 1;
    inputH.style.opacity = 0.4;
    savedTeamH = inputH;
  }
  setHighlighted();
}

function getCell(row, cell) {
    var tableElement = document.getElementById('whole');
    return tableElement.rows[row].cells[cell];
}

var previousCell = null, previousRow = null, previousCol = null;
var maxRow = 21, minRow = 2, maxCol = 20, minCol = 1;
function setHighlighted() {
    var cellToHighlight;

    if (previousCell != null) {
        previousCell.style.color = "#404040";
        previousCell = null;
    }
    if (previousRow != null) {
        for (var i = minRow; i <= maxRow; i++) {
            var highlightedCell = getCell(i, previousRow + 1);
            highlightedCell.style.color = "#404040";
        }
        previousRow = null;
    }
    if (previousCol != null) {
        for (var i = minCol; i <= maxCol; i++) {
            var highlightedCell = getCell(previousCol + 2, i);
            highlightedCell.style.color = "#404040";
        }
        previousCol = null;
    }

    if (awayID != 100) {
        for (var i = minRow; i <= maxRow; i++) {
            var highlightedCell = getCell(i, awayID + 1);
            highlightedCell.style.color = "#FFF";
            previousRow = awayID;
        }
    }
    if (homeID != 100) {
        for (var i = minCol; i <= maxCol; i++) {
            var highlightedCell = getCell(homeID + 2, i);
            highlightedCell.style.color = "#FFF";
            previousCol = homeID;
        }
    }

    if (awayID != 100 && homeID != 100) {
        cellToHighlight = getCell(homeID + 2, awayID + 1);
        previousCell = cellToHighlight;
        cellToHighlight.style.color = "#FFF000";
    }
}


function addLoading(element){
    element.addClass('loading');
}

function removeLoading(element){
    element.removeClass('loading');
}
