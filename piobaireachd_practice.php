<!DOCTYPE html>
<html>
  <head>
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <title>Bagpipe Play Along</title>
    <link href="favicon.ico" rel="icon" type="image/x-icon">
    <meta content="Donald G Gray" name="author">
    <meta content="Audio playlist where the song titles change colour when they are played or paused." name="description">
    <meta property="og:image" content="http://audovia.com/image/Kelpies1280.jpg">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Bagpipe Play Along">
    <meta property="og:description" content="Audio playlist where the song titles change colour when they are played or paused.">
    <style type="text/css">
      span.composer {color: #817F73; font-family: Verdana; font-size: 18px;}
      span.song {color: #551A8B; cursor: pointer; font-family: Verdana; font-size: 18px; line-height: 1.5;}
      span.part {color: #551A8B; cursor: pointer; font-family: Verdana; font-size: 15px;}
    </style>
  </head>

  <body>
  <?php
  echo 'this is php';
  ?>
    <table width="300" border="0" cellpadding="4" cellspacing="0" style="line-height: 1.0;">
      <tbody>
        <tr>
          <td>
            <span title="Click to play or pause and double-click to rewind." onclick="playPause(songArray[1], audioArray[1])" ondblclick="onEnd(songArray[1], audioArray[1])" class="song" id="song1">I got a Kiss of the King's Hand</span>
          </td>
        </tr>
        <tr>
          <td>
            <span title="Click to play or pause and double-click to rewind." onclick="playPause(songArray[3], audioArray[3])" ondblclick="onEnd(songArray[3], audioArray[3])" class="part" id="song3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Urlar</span>
          </td>
        </tr>
        <tr>
          <td>
            <span title="Click to play or pause and double-click to rewind." onclick="playPause(songArray[4], audioArray[4])" ondblclick="onEnd(songArray[4], audioArray[4])" class="part" id="song4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Variation</span>
          </td>
        </tr>
        <tr>
          <td>
            <span title="Click to play or pause and double-click to rewind." onclick="playPause(songArray[5], audioArray[5])" ondblclick="onEnd(songArray[5], audioArray[5])" class="part" id="song5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Variation Doubling</span>
          </td>
        </tr>
        <tr>
          <td>
            <span title="Click to play or pause and double-click to rewind." onclick="playPause(songArray[6], audioArray[6])" ondblclick="onEnd(songArray[6], audioArray[6])" class="part" id="song6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Taorluath</span>
          </td>
        </tr>
        <tr>
          <td>
            <span title="Click to play or pause and double-click to rewind." onclick="playPause(songArray[7], audioArray[7])" ondblclick="onEnd(songArray[7], audioArray[7])" class="part" id="song7">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Taorluath Doubling</span>
          </td>
        </tr>
        <tr>
          <td>
            <span title="Click to play or pause and double-click to rewind." onclick="playPause(songArray[8], audioArray[8])" ondblclick="onEnd(songArray[8], audioArray[8])" class="part" id="song8">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Crunluath</span>
          </td>
        </tr>
        <tr>
          <td>
            <span title="Click to play or pause and double-click to rewind." onclick="playPause(songArray[9], audioArray[9])" ondblclick="onEnd(songArray[9], audioArray[9])" class="part" id="song9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Crunluath Doubling</span>
          </td>
        </tr>
        <tr>
          <td>
            <span title="Click to play or pause and double-click to rewind." onclick="playPause(songArray[10], audioArray[10])" ondblclick="onEnd(songArray[10], audioArray[10])" class="part" id="song10">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Crunluath A Mach</span>
          </td>
        </tr>
        <tr>
          <td>

          </td>
        </tr>
        <tr>
          <td>
            <span title="Click to play or pause and double-click to rewind." onclick="playPause(songArray[2], audioArray[2])" ondblclick="onEnd(songArray[2], audioArray[2])" class="song" id="song2">The Glen is Mine</span>
          </td>
        </tr>
        <tr>
          <td>
            <span title="Click to play or pause and double-click to rewind." onclick="playPause(songArray[11], audioArray[11])" ondblclick="onEnd(songArray[11], audioArray[11])" class="part" id="song11">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Urlar</span>
          </td>
        </tr>
        <tr>
          <td>
            <span title="Click to play or pause and double-click to rewind." onclick="playPause(songArray[12], audioArray[12])" ondblclick="onEnd(songArray[12], audioArray[12])" class="part" id="song12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Variation 1</span>
          </td>
        </tr>
        <tr>
          <td>
            <span title="Click to play or pause and double-click to rewind." onclick="playPause(songArray[13], audioArray[13])" ondblclick="onEnd(songArray[13], audioArray[13])" class="part" id="song13">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Variation 2</span>
          </td>
        </tr>
        <tr>
          <td>
            <span title="Click to play or pause and double-click to rewind." onclick="playPause(songArray[14], audioArray[14])" ondblclick="onEnd(songArray[14], audioArray[14])" class="part" id="song14">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Variation 3</span>
          </td>
        </tr>
        <tr>
          <td>
            <span title="Click to play or pause and double-click to rewind." onclick="playPause(songArray[15], audioArray[15])" ondblclick="onEnd(songArray[15], audioArray[15])" class="part" id="song15">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Leamluath</span>
          </td>
        </tr>
        <tr>
          <td>
            <span title="Click to play or pause and double-click to rewind." onclick="playPause(songArray[16], audioArray[16])" ondblclick="onEnd(songArray[16], audioArray[16])" class="part" id="song16">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Leamluath Doubling</span>
          </td>
        </tr>
        <tr>
          <td>
            <span title="Click to play or pause and double-click to rewind." onclick="playPause(songArray[17], audioArray[17])" ondblclick="onEnd(songArray[17], audioArray[17])" class="part" id="song17">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Taorluath</span>
          </td>
        </tr>
        <tr>
          <td>
            <span title="Click to play or pause and double-click to rewind." onclick="playPause(songArray[18], audioArray[18])" ondblclick="onEnd(songArray[18], audioArray[18])" class="part" id="song18">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Taorluath Doubling</span>
          </td>
        </tr>
        <tr>
          <td>
            <span title="Click to play or pause and double-click to rewind." onclick="playPause(songArray[19], audioArray[19])" ondblclick="onEnd(songArray[19], audioArray[19])" class="part" id="song19">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Crunluath</span>
          </td>
        </tr>
        <tr>
          <td>
            <span title="Click to play or pause and double-click to rewind." onclick="playPause(songArray[20], audioArray[20])" ondblclick="onEnd(songArray[20], audioArray[20])" class="part" id="song20">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Crunluath Doubling</span>
          </td>
        </tr>
        <tr>
          <td>
            <span title="Click to play or pause and double-click to rewind." onclick="playPause(songArray[21], audioArray[21])" ondblclick="onEnd(songArray[21], audioArray[21])" class="part" id="song21">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Crunluath A Mach</span>
          </td>
        </tr>
      </tbody>
    </table>

    <audio id="audio1" onended="onEnd(songArray[1], audioArray[1])" src="music/IGotAKissOfTheKingsHand.mp3"></audio>
    <audio id="audio3" onended="onEnd(songArray[3], audioArray[3])" src="music/IGotAKissOfTheKingsHandUrlar.mp3"></audio>
    <audio id="audio4" onended="onEnd(songArray[4], audioArray[4])" src="music/IGotAKissOfTheKingsHandVariation.mp3"></audio>
    <audio id="audio5" onended="onEnd(songArray[5], audioArray[5])" src="music/IGotAKissOfTheKingsHandVariationDoubling.mp3"></audio>
    <audio id="audio6" onended="onEnd(songArray[6], audioArray[6])" src="music/IGotAKissOfTheKingsHandTaorluath.mp3"></audio>
    <audio id="audio7" onended="onEnd(songArray[7], audioArray[7])" src="music/IGotAKissOfTheKingsHandTaorluathDoubling.mp3"></audio>
    <audio id="audio8" onended="onEnd(songArray[8], audioArray[8])" src="music/IGotAKissOfTheKingsHandCrunluath.mp3"></audio>
    <audio id="audio9" onended="onEnd(songArray[9], audioArray[9])" src="music/IGotAKissOfTheKingsHandCrunluathDoubling.mp3"></audio>
    <audio id="audio10" onended="onEnd(songArray[10], audioArray[10])" src="music/IGotAKissOfTheKingsHandCrunluathAMach.mp3"></audio>

    <audio id="audio2" onended="onEnd(songArray[2], audioArray[2])" src="music/TheGlenIsMine.mp3"></audio>
    <audio id="audio11" onended="onEnd(songArray[11], audioArray[11])" src="music/TheGlenIsMineUrlar.mp3"></audio>
    <audio id="audio12" onended="onEnd(songArray[12], audioArray[12])" src="music/TheGlenIsMineVariation1.mp3"></audio>
    <audio id="audio13" onended="onEnd(songArray[13], audioArray[13])" src="music/TheGlenIsMineVariation2.mp3"></audio>
    <audio id="audio14" onended="onEnd(songArray[14], audioArray[14])" src="music/TheGlenIsMineVariation3.mp3"></audio>
    <audio id="audio15" onended="onEnd(songArray[15], audioArray[15])" src="music/TheGlenIsMineLeamluath.mp3"></audio>
    <audio id="audio16" onended="onEnd(songArray[16], audioArray[16])" src="music/TheGlenIsMineLeamluathDoubling.mp3"></audio>
    <audio id="audio17" onended="onEnd(songArray[17], audioArray[17])" src="music/TheGlenIsMineTaorluath.mp3"></audio>
    <audio id="audio18" onended="onEnd(songArray[18], audioArray[18])" src="music/TheGlenIsMineTaorluathDoubling.mp3"></audio>
    <audio id="audio19" onended="onEnd(songArray[19], audioArray[19])" src="music/TheGlenIsMineCrunluath.mp3"></audio>
    <audio id="audio20" onended="onEnd(songArray[20], audioArray[20])" src="music/TheGlenIsMineCrunluathDoubling.mp3"></audio>
    <audio id="audio21" onended="onEnd(songArray[21], audioArray[21])" src="music/TheGlenIsMineCrunluathAMach.mp3"></audio>


    <script type="text/javascript">
      var audioArray = new Array();
      audioArray[0] = null;

      audioArray[1] = document.getElementById("audio1");
      audioArray[3] = document.getElementById("audio3");
      audioArray[4] = document.getElementById("audio4");
      audioArray[5] = document.getElementById("audio5");
      audioArray[6] = document.getElementById("audio6");
      audioArray[7] = document.getElementById("audio7");
      audioArray[8] = document.getElementById("audio8");
      audioArray[9] = document.getElementById("audio9");
      audioArray[10] = document.getElementById("audio10");

      audioArray[2] = document.getElementById("audio2");
      audioArray[11] = document.getElementById("audio11");
      audioArray[12] = document.getElementById("audio12");
      audioArray[13] = document.getElementById("audio13");
      audioArray[14] = document.getElementById("audio14");
      audioArray[15] = document.getElementById("audio15");
      audioArray[16] = document.getElementById("audio16");
      audioArray[17] = document.getElementById("audio17");
      audioArray[18] = document.getElementById("audio18");
      audioArray[19] = document.getElementById("audio19");
      audioArray[20] = document.getElementById("audio20");
      audioArray[21] = document.getElementById("audio21");

      var songArray = new Array();
      songArray[0] = null;

      songArray[1] = document.getElementById("song1");
      songArray[3] = document.getElementById("song3");
      songArray[4] = document.getElementById("song4");
      songArray[5] = document.getElementById("song5");
      songArray[6] = document.getElementById("song6");
      songArray[7] = document.getElementById("song7");
      songArray[8] = document.getElementById("song8");
      songArray[9] = document.getElementById("song9");
      songArray[10] = document.getElementById("song10");

      songArray[2] = document.getElementById("song2");
      songArray[11] = document.getElementById("song11");
      songArray[12] = document.getElementById("song12");
      songArray[13] = document.getElementById("song13");
      songArray[14] = document.getElementById("song14");
      songArray[15] = document.getElementById("song15");
      songArray[16] = document.getElementById("song16");
      songArray[17] = document.getElementById("song17");
      songArray[18] = document.getElementById("song18");
      songArray[19] = document.getElementById("song19");
      songArray[20] = document.getElementById("song20");
      songArray[21] = document.getElementById("song21");

      function onEnd(song, audio)
      {
        song.style.color = '#551A8B';
        audio.load();
      }

      function playPause(song, audio)
      {
        for (i = 1; i < songArray.length; i++)
        {
          if (song != songArray[i])
          {
            if (!audioArray[i].paused)
            {
              songArray[i].style.color = 'red';
              audioArray[i].pause();
            }
          }
        }

        if (audio.paused)
        {
          song.style.color = 'green';
          audio.play();
        }
        else
        {
          song.style.color = 'red';
          audio.pause();
        }
      }
    </script>
  </body>
</html>
