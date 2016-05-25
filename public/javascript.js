// Sets up the scroll-page functionality
$(document).ready(function() {
     $('#fullpage').fullpage({
         sectionsColor: ['#ff9933', '#0099ff', '#00cc66'],
         menu: '#menu',
         anchors: ['firstPage', 'secondPage', 'thirdPage'],
         navigation: true,
         navigationPosition: 'right'
     });
 });

// CAN WE MAKE THIS ONE METHOD SOME HOW??
// Controls the updating of the progress bar (top)
$(document).ready(function() {
    var progression = 0,
    progress = setInterval(function()
    {
       $('.progress_e .progress-bar_e').css({'width':progression+'%'});
       if(progression == emelieScore) {
          clearInterval();
       }
       else {
          progression += 1;
       }
   }, 20);
 });

 // Controls the updating of the progress bar (bottom)
 $(document).ready(function() {
     var progression = 0,
     progress = setInterval(function()
     {
        $('.progress_r .progress-bar_r').css({'width':progression+'%'});
        if(progression == robScore) {
           clearInterval();
        }
        else {
           progression += 1;
        }
    }, 20);
  });
