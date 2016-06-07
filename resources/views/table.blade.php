<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <div id=table-div>
    <table id="whole">
       <tr id ="top-row">
          <td id="tl">
          </td>
          <td id="arsenal" onclick="onClickAway(arsenal)">
            <div class="teams-a arsenal"></div>
          </td>
          <td id="bournemouth" onclick="onClickAway(bournemouth)">
              <div class="teams-a bournemouth"></div>
          </td>
          <td id="burnley" onclick="onClickAway(burnley)">
              <div class="teams-a burnley"></div>
          </td>
          <td id="chelsea" onclick="onClickAway(chelsea)">
              <div class="teams-a chelsea"></div>
          </td>
          <td id="crystal-palace" onclick="onClickAway(crystal-palace)">
              <div class="teams-a crystal-palace"></div>
          </td>
          <td id="everton" onclick="onClickAway(everton)">
            <div class="teams-a everton"></div>
          </td>
          <td id="hull" onclick="onClickAway(hull)">
            <div class="teams-a hull"></div>
          </td>
          <td id="leicester" onclick="onClickAway(leicester)">
            <div class="teams-a leicester"></div>
          </td>
          <td id="liverpool" onclick="onClickAway(liverpool)">
            <div class="teams-a liverpool"></div>
          </td>
          <td id="manchester-city" onclick="onClickAway(manchester-city)">
            <div class="teams-a manchester-city"></div>
          </td>
          <td id="manchester-united" onclick="onClickAway(manchester-united)">
            <div class="teams-a manchester-united"></div>
          </td>
          <td id="middlesbrough" onclick="onClickAway(middlesbrough)">
            <div class="teams-a middlesbrough"></div>
          </td>
          <td id="southampton" onclick="onClickAway(southampton)">
            <div class="teams-a southampton"></div>
          </td>
          <td id="stoke" onclick="onClickAway(stoke)">
            <div class="teams-a stoke"></div>
          </td>
          <td id="sunderland" onclick="onClickAway(sunderland)">
            <div class="teams-a sunderland"></div>
          </td>
          <td id="swansea" onclick="onClickAway(swansea)">
            <div class="teams-a swansea"></div>
          </td>
          <td id="tottenham" onclick="onClickAway(tottenham)">
            <div class="teams-a tottenham"></div>
          </td>
          <td id="watford" onclick="onClickAway(watford)">
            <div class="teams-a watford"></div>
          </td>
          <td id="west-brom" onclick="onClickAway(west-brom)">
            <div class="teams-a west-brom"></div>
          </td>
          <td id="west-ham" onclick="onClickAway(west-ham)">
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
          <td class="col-1" id="arsenal1" onclick="onClickHome(arsenal1)">
            <div class="teams-h arsenal"></div>
          </td>
          @for ($i = 0; $i < 20; $i++)
          <td id="aa">
            <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
          </td>
         @endfor
       </tr>
       <tr>
         <td class="col-1" id="bournemouth1" onclick="onClickHome(bournemouth1)">
           <div class="teams-h bournemouth"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr>
       <tr>
         <td class="col-1" id="burnley1" onclick="onClickHome(burnley1)">
           <div class="teams-h burnley"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr>
       <tr>
         <td class="col-1" id="chelsea1" onclick="onClickHome(chelsea1)">
           <div class="teams-h chelsea"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr>
       <tr>
         <td class="col-1" id="crystal-palace1" onclick="onClickHome(crystal-palace1)">
           <div class="teams-h crystal-palace"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr>
       <tr>
         <td class="col-1" id="everton1" onclick="onClickHome(everton1)">
           <div class="teams-h everton"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr>
       <tr>
         <td class="col-1" id="hull1" onclick="onClickHome(hull1)">
           <div class="teams-h hull"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr>
       <tr>
         <td class="col-1" id="leicester1" onclick="onClickHome(leicester1)">
           <div class="teams-h leicester"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr>
       <tr>
         <td class="col-1" id="liverpool1" onclick="onClickHome(liverpool1)">
           <div class="teams-h liverpool"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr>
       <tr>
         <td class="col-1" id="manchester-city1" onclick="onClickHome(manchester-city1)">
           <div class="teams-h manchester-city"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr>
       <tr>
         <td class="col-1" id="manchester-united1" onclick="onClickHome(manchester-united1)">
           <div class="teams-h manchester-united"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr>
       <tr>
         <td class="col-1" id="middlesbrough1" onclick="onClickHome(middlesbrough1)">
           <div class="teams-h middlesbrough"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr>
       <tr>
         <td class="col-1" id="southampton1" onclick="onClickHome(southampton1)">
           <div class="teams-h southampton"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr>
       <tr>
         <td class="col-1" id="stoke1" onclick="onClickHome(stoke1)">
           <div class="teams-h stoke"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr>
       <tr>
         <td class="col-1" id="sunderland1" onclick="onClickHome(sunderland1)">
           <div class="teams-h sunderland"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr>
       <tr>
         <td class="col-1" id="swansea1" onclick="onClickHome(swansea1)">
           <div class="teams-h swansea"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr><tr>
         <td class="col-1" id="tottenham1" onclick="onClickHome(tottenham1)">
           <div class="teams-h tottenham"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr>
       <tr>
         <td class="col-1" id="watford1" onclick="onClickHome(watford1)">
           <div class="teams-h watford"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr>
       <tr>
         <td class="col-1" id="west-brom1" onclick="onClickHome(west-brom1)">
           <div class="teams-h west-brom"></div>
         </td>
         @for ($i = 0; $i < 20; $i++)
         <td id="aa">
           <span id="a"> 1-0 3-0 </span> <span id="b"> 2-0 </span>
         </td>
        @endfor
       </tr>
       <tr>
         <td class="col-1" id="west-ham1" onclick="onClickHome(west-ham1)">
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
