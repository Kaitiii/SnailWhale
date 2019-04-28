<!-- adds base -->
@extends('base')
<!-- defines url title -->
@section('title')
    Snailwhale.wal
@endsection

@section('header css')
    <script src="jqueary-1.10.2.min.js"></script>
<style>
    /* displays video panel and controls */
    div.main
    {
        width: 602px;
        height: 350px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        overflow: hidden;
    }
    /* video panel css */
    /*div.videoPanel*/
    /*{*/
        /*position: absolute;*/
        /*top: 50%;*/
        /*left: 50%;*/
        /*transform: translate(-50%,-50%);*/
    /*}*/
    #videoPanel {
        position: relative;
        display: inline-block;
    }
    /* video controls css*/
    div.controls
    {
        height: 40px;
        width: 97%;
        padding: 10px;
        position: absolute;
        top:90%;
        left: 50%;
        transform: translate(-50%, -50%);
        transition: all .5s;
    }
    div.seek-bar
    {
        width: 100%;
        height: 10px;
        background-color: gray;
        display: flex;
        position: absolute;
        top: 0px;
        left: 0px;
    }
    div.fill
    {
        height: 10px;
        widht: 10px;
        background-color: #DBA74A;
    }
    div.main:hover
    {
        top: 92%;
    }
    div.fill
    {
        height: 10px;
        background-color: #DBA74A;
    }
    div.currentTime
    {
        font-family: monospace;
        font-size: 14px;
        color: #9561e2;
    }
    div.playBtn
    {
        cursor: pointer;
    }
    input[type=range]
    {
        -webkit-appearance : none !important;
        background-color: #333;
        height: 4px;
        border-radius: 4px;
        outline: none;
    }
    input[type=range]::-webkit-slider-thumb
    {
        -webkit-appearance: none !important;
        background-color: #DBA74A;
        height: 15px;
        width: 15px;
        border-radius: 15px;
        cursor: pointer;
    }

    #controls {
        text-align: left;
    }

    .player-footer {
        position: absolute;
        bottom: 30px;
        left: 0;
        right: 0;
        height: auto;
    }

</style>
@endsection

@section('content')
    <!-- frames the video in driftwood border -->
    <div id="frame"></div>
    <!-- displays the video-->
    <div id="main">
        <center>
            <div id="videoPanel">
                <video id="myVideo" width="625" height="400" src=" {!! $video !!}"></video>
                <div class="player-footer">
                    <div id="controls">
                        <div id="seek-bar">
                            <div class="fill"></div>
                        </div>
                    </div>
                    <table border="1">
                        <tr>
                            <td width="55%">
                                <div id="currentTime">00:00 / 00:00</div>
                            </td>
                            <td width="30%">
                                <img src="{!! url("Assets/Animations/playerAssets/Play.png") !!}" onclick="playPause()" id="playBtn">
                            </td>
                            <td>
                                <img src="{!! url("Assets/Animations/playerAssets/Speaker.png") !!}" id="speaker">
                            </td>
                            <td>
                                <input type="range" id="volume" min="0" max="1" value="0.40" step="0.20" onchange="changeVolume()">
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </center>
    </div>
@endsection

@section('footer script')
<script>
    var vid = document.getElementById("myVideo");
    var fillBar = document.querySelector('div.fill');//document.getElementById("fill");
    var currentTime = document.getElementById("currentTime");
    var volumeSlider = document.getElementById("volume");
    var playBtn = document.getElementById("playBtn");

    function playPause()
    {
        if(vid.paused)
        {
            vid.play();
            playBtn.src = "{!! url("Assets/Animations/playerAssets/Pause.png") !!}";
        }
        else
        {
            vid.pause();
            playBtn.src = "{!! url("Assets/Animations/playerAssets/Play.png") !!}";
        }
    }

    vid.addEventListener('timeupdate', function()
    {
        var position = vid.currentTime / vid.duration;
        fillBar.style.width = position * 100 + '%';
        convertTime(Math.round(vid.currentTime));

        if(vid.ended)
        {
            $("#playBtn").attr("src", "Play.png");
        }
    });

    function convertTime(seconds)
    {
        var min = Math.floor(seconds / 60);
        var sec = seconds % 60;

        min = (min < 10) ? "0" + min : min;
        sec = (sec < 10) ? "0" + sec : sec;
        currentTime.textContent = min + ":" + sec;

        totalTime(Math.round(vid.duration));
    }

    function totalTime(seconds)
    {
        var min = Math.floor(seconds / 60);
        var sec = seconds % 60;

        min = (min < 10) ? "0" + min : min;
        sec = (sec < 10) ? "0" + sec : sec;
        currentTime.textContent += " / " + min + ":" + sec;
    }

    function changeVolume()
    {
        vid.volume = volumeSlider.value;

        if(volumeSlider.value == 0)
        {
            speaker.src = "{!! url("Assets/Animations/playerAssets/Mute.png") !!}";
        }
        else
        {
            speaker.src = "{!! url("Assets/Animations/playerAssets/Speaker.png") !!}";
        }
    }
</script>
@endsection