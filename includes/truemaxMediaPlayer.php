<div id="media-player">

    <video id="videoPlayer" preload="none" poster="img/videocover.jpg" controls>
        <source src="media/TRUEMAXvideo.mp4" type="video/mp4" />
        Tu navegador no soporta este elemento de video.
    </video>

    <div class="media-controls">

        <div id="playControls">
            <button type="button" name='Play' class="btn glyphicon glyphicon-play" id="play_btn"></button>
            <button type="button" name='Stop' class="btn glyphicon glyphicon-stop" id="stop_btn"></button>
        </div>

        <div id="progressContainer">
             <span id='progress-bar' class="progress-bar" role="progressbar" aria-valuenow="0"  aria-valuemin="0" aria-valuemax="100"></span>
        </div>

        <div id="timeContainer">
            <span id='currentTime'>00:00</span>
        </div>

        <div id="volumeControls">
            <!--<span class="tooltip"></span>-->
            <div id="sliderContainer"><div id="slider"></div></div>
            <!--<span class="volume"></span>-->
            <button id='volumeInc_btn' name='Volume' class="btn icon-volume-up"></button>
            <button id='replay_btn' name='Replay' class="btn glyphicon glyphicon-repeat"></button>

        </div>

    </div>

</div>
