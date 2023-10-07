function updateTable(data) {
  $("#tableBody").empty();
  $.each(data, function (index, item) {
    var row =
      "<tr>" +
      "<td>" +
      item.id +
      "</td>" +
      "<td>" +
      item.name +
      "</td>" +
      '<td><a href="https://www.google.com/maps/place/' +
      item.location +
      '" style="color:red;" target="_blank">' +
      item.location +
      "</a></td>" +
      "<td>" +
      '<span class="badge badge-' +
      item.color +
      '">' +
      item.status +
      "</span>" +
      "</td>" +
      '<td class="text-center">' +
      '<span data-plugin="peity-pie" data-colors="' +
      (item.bat_cap < 25 ? "#f72548" : "#3bc0c3") +
      ',#ebeff2" data-width="30" data-height="30">' +
      item.bat_cap +
      "/100</span>" +
      "</td>" +
      '<td class="text-center">' +
      '<a type="button" href="detail.html?id=' +
      item.token +
      '" class="btn btn-icon waves-effect btn-info"><i class="fas fa-angle-double-right"></i></a>' +
      "</td>" +
      "</tr>";

    $("#tableBody").append(row);
  });
}

$(document).ready(function () {
  $.ajax({
    url: "send/getList",
    dataType: "json",
    success: function (data) {
      console.log(data);
      updateTable(data);
    },
    error: function () {
      console.log("Lỗi");
    },
  });
});
 

Pusher.logToConsole = true;

var pusher = new Pusher("654311a90dc38cfbce19", {
  cluster: "ap1",
});

var channel = pusher.subscribe("getPhao");
channel.bind("update", function (e) {
  location.reload();
});
