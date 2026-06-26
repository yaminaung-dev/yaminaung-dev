<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Auto Play Test</title>
    <style>
        body { font-family: sans-serif; text-align: center; padding-top: 50px; background: #f4f4f4; }
        #status { font-size: 24px; font-weight: bold; color: blue; }
        #error { color: red; margin-top: 10px; }
    </style>
</head>
<body>

    <div id="status">Audio Loading...</div>
    <div id="error"></div>
   
    <button onclick="playAudio()" style="margin-top:20px; padding:10px 20px; font-size:18px;">
        Play Manually
    </button>

<audio id="alarm">
    <source src="doorbell.mp3" type="audio/mpeg">
</audio>

<script>
const audio = document.getElementById("alarm");
const statusDiv = document.getElementById("status");
const errorDiv = document.getElementById("error");

function playAudio() {
    audio.play().then(() => {
        statusDiv.innerText = "🔊 Audio is Playing Successfully!";
        statusDiv.style.color = "green";
       
        setTimeout(function () {
            location.reload();
        }, 5000);
       
    }).catch(err => {
        statusDiv.innerText = "❌ Autoplay Blocked!";
        statusDiv.style.color = "red";
        errorDiv.innerText = "Error details: " + err.message;
       
        setTimeout(function () {
            location.reload();
        }, 2000);
    });
}

window.onload = function () {
    playAudio();
};
</script>

</body>
</html>';