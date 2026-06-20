<div class="music-player">
    <audio id="bgMusic" controls loop>
        <source src="asset/music/JoyRide.mp3" type="audio/mpeg">
    </audio>
</div>

<script>
const music = document.getElementById("bgMusic");

window.addEventListener("load", () => {
    const savedTime = localStorage.getItem("musicTime");

    if(savedTime){
        music.currentTime = savedTime;
    }
});

window.addEventListener("beforeunload", () => {
    localStorage.setItem(
        "musicTime",
        music.currentTime
    );
});
</script>