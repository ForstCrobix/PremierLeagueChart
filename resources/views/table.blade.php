<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <div id=table-div>
    <table id="whole">
       <tr id ="top-row">
          <td id="tl">
          </td>
          <td id="arsenal" onclick="onClickAway(arsenal, 0)">
            <div class="teams-a arsenal"></div>
          </td>
          <td id="bournemouth" onclick="onClickAway(bournemouth, 1)">
              <div class="teams-a bournemouth"></div>
          </td>
          <td id="burnley" onclick="onClickAway(burnley, 2)">
              <div class="teams-a burnley"></div>
          </td>
          <td id="chelsea" onclick="onClickAway(chelsea, 3)">
              <div class="teams-a chelsea"></div>
          </td>
          <td id="crystalpalace" onclick="onClickAway(crystalpalace, 4)">
              <div class="teams-a crystal-palace"></div>
          </td>
          <td id="everton" onclick="onClickAway(everton, 5)">
            <div class="teams-a everton"></div>
          </td>
          <td id="hull" onclick="onClickAway(hull, 6)">
            <div class="teams-a hull"></div>
          </td>
          <td id="leicester" onclick="onClickAway(leicester, 7)">
            <div class="teams-a leicester"></div>
          </td>
          <td id="liverpool" onclick="onClickAway(liverpool, 8)">
            <div class="teams-a liverpool"></div>
          </td>
          <td id="manchestercity" onclick="onClickAway(manchestercity, 9)">
            <div class="teams-a manchester-city"></div>
          </td>
          <td id="manchesterunited" onclick="onClickAway(manchesterunited, 10)">
            <div class="teams-a manchester-united"></div>
          </td>
          <td id="middlesbrough" onclick="onClickAway(middlesbrough, 11)">
            <div class="teams-a middlesbrough"></div>
          </td>
          <td id="southampton" onclick="onClickAway(southampton, 12)">
            <div class="teams-a southampton"></div>
          </td>
          <td id="stoke" onclick="onClickAway(stoke, 13)">
            <div class="teams-a stoke"></div>
          </td>
          <td id="sunderland" onclick="onClickAway(sunderland, 14)">
            <div class="teams-a sunderland"></div>
          </td>
          <td id="swansea" onclick="onClickAway(swansea, 15)">
            <div class="teams-a swansea"></div>
          </td>
          <td id="tottenham" onclick="onClickAway(tottenham, 16)">
            <div class="teams-a tottenham"></div>
          </td>
          <td id="watford" onclick="onClickAway(watford, 17)">
            <div class="teams-a watford"></div>
          </td>
          <td id="westbrom" onclick="onClickAway(westbrom, 18)">
            <div class="teams-a west-brom"></div>
          </td>
          <td id="westham" onclick="onClickAway(westham, 19)">
            <div class="teams-a west-ham"></div>
          </td>
       </tr>
       <tr id="blank-row">
          <td>hello</td>
          @for ($i = 0; $i < 20; $i++)
           <td></td>
          @endfor
       </tr>
       <tr>
          <td class="col-1" id="arsenal1" onclick="onClickHome(arsenal1, 0)">
            <div class="teams-h arsenal"></div>
          </td>
          @for ($i = 0; $i < 20; $i++)
          <td id="aa">
            @if($i <= 2)
                <span id="a"> {{$ars[$i]->em_pred }} {{ $ars[$i]->rob_pred }} </span> <span id="b"> {{ $ars[$i]->score }} </span>
            @else
                <span id="a"> 2-1 0-2 </span> <span id="b"> 2-0 </span>
            @endif
          </td>
         @endfor
       </tr>
       <tr>
         <td class="col-1" id="bournemouth1" onclick="onClickHome(bournemouth1, 1)">
           <div class="teams-h bournemouth"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr>
       <tr>
         <td class="col-1" id="burnley1" onclick="onClickHome(burnley1, 2)">
           <div class="teams-h burnley"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr>
       <tr>
         <td class="col-1" id="chelsea1" onclick="onClickHome(chelsea1, 3)">
           <div class="teams-h chelsea"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr>
       <tr>
         <td class="col-1" id="crystalpalace1" onclick="onClickHome(crystalpalace1, 4)">
           <div class="teams-h crystal-palace"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr>
       <tr>
         <td class="col-1" id="everton1" onclick="onClickHome(everton1, 5)">
           <div class="teams-h everton"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr>
       <tr>
         <td class="col-1" id="hull1" onclick="onClickHome(hull1, 6)">
           <div class="teams-h hull"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr>
       <tr>
         <td class="col-1" id="leicester1" onclick="onClickHome(leicester1, 7)">
           <div class="teams-h leicester"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr>
       <tr>
         <td class="col-1" id="liverpool1" onclick="onClickHome(liverpool1, 8)">
           <div class="teams-h liverpool"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr>
       <tr>
         <td class="col-1" id="manchestercity1" onclick="onClickHome(manchestercity1, 9)">
           <div class="teams-h manchester-city"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr>
       <tr>
         <td class="col-1" id="manchesterunited1" onclick="onClickHome(manchesterunited1, 10)">
           <div class="teams-h manchester-united"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr>
       <tr>
         <td class="col-1" id="middlesbrough1" onclick="onClickHome(middlesbrough1, 11)">
           <div class="teams-h middlesbrough"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr>
       <tr>
         <td class="col-1" id="southampton1" onclick="onClickHome(southampton1, 12)">
           <div class="teams-h southampton"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr>
       <tr>
         <td class="col-1" id="stoke1" onclick="onClickHome(stoke1, 13)">
           <div class="teams-h stoke"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr>
       <tr>
         <td class="col-1" id="sunderland1" onclick="onClickHome(sunderland1, 14)">
           <div class="teams-h sunderland"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr>
       <tr>
         <td class="col-1" id="swansea1" onclick="onClickHome(swansea1, 15)">
           <div class="teams-h swansea"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr><tr>
         <td class="col-1" id="tottenham1" onclick="onClickHome(tottenham1, 16)">
           <div class="teams-h tottenham"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr>
       <tr>
         <td class="col-1" id="watford1" onclick="onClickHome(watford1, 17)">
           <div class="teams-h watford"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr>
       <tr>
         <td class="col-1" id="westbrom1" onclick="onClickHome(westbrom1, 18)">
           <div class="teams-h west-brom"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr>
       <tr>
         <td class="col-1" id="westham1" onclick="onClickHome(westham1, 19)">
           <div class="teams-h west-ham"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr>
    </table>
  </div>
  </body>
</html>
