$.ajax({
    url: "send/general",
    dataType: "json",
    success: function (data) {
      //console.log(data);
      const total_phao = data['total_phao'];
      const active_phao = data['active_phao'];
      const warning_data = data['warning_data'];
      const low_battery = data['low_battery_data'];

      $('#total_p').text(total_phao['total_phao']);
      $('#active_p').text(active_phao['active_phao']);
      $('#warning_p').text(warning_data.length);
      $('#low_bat').text(low_battery.length);
    },
    error: function () {
      console.log("lỗi");
    },
  });