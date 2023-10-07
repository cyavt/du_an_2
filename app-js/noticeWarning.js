$.ajax({
  url: "send/warning",
  dataType: "json",
  success: function (data) {
    data.forEach((Arr) => {
      if (Arr["water_state"] == 4) {
        // setTimeout(function () {
        //   location.reload();
        // }, 15000);
        warning(Arr["name"]);
        playAudio("assets/warning.mp3", 0.6, 2);
        var interval = setInterval(function () {
          warning(Arr["name"]);
          if (Arr["water_state"] != 4) {
            clearInterval(interval);
          }
        }, 5000);
      }
      // } else {
      //   setTimeout(function () {
      //     location.reload();
      //   }, 20000);
      // }
    });
  },
  error: function () {
    console.log("lỗi");
  },
});

function playAudio(url, volume, repeatCount) {
  var audio = new Audio(url);
  audio.volume = volume;
  audio.play();

  audio.onended = function () {
    if (repeatCount > 0) {
      setTimeout(function () {
        playAudio(url, volume, repeatCount - 1);
      }, 10000);
    }
  };
}
