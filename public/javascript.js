$(document).ready(function() {
     $('#fullpage').fullpage({
         sectionsColor: ['#ff9933', '#0099ff', '#00cc66'],
         menu: '#menu',
         anchors: ['firstPage', 'secondPage', 'thirdPage'],
         navigation: true,
         navigationPosition: 'right'
     });
 });

$(document).ready(function() {
    var progression = 0,
    progress = setInterval(function()
    {
       $('#progress .progress-bar').css({'width':progression+'%'});
       if(progression == 100) {      //this number would be the sent in score of either of us
          clearInterval();
       }
       else {
          progression += 1;
       }
   }, 20);
 });
