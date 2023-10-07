!(function (i) {
  "use strict";
  var e = function () {};
  (e.prototype.init = function () {
    i(".easy-pie-chart-1").easyPieChart({
      easing: "easeOutBounce",
      barColor: "#8CC152",
      lineWidth: 3,
      onStep: function (e, t, n) {
        i(this.el).find(".percent").text(Math.round(n));
      },
    }),
      i(".easy-pie-chart-2").easyPieChart({
        easing: "easeOutBounce",
        barColor: "#F6BB42",
        lineWidth: 3,
        trackColor: !1,
        lineCap: "butt",
        onStep: function (e, t, n) {
          i(this.el).find(".percent").text(Math.round(n));
        },
      }),
      i(".easy-pie-chart-3").easyPieChart({
        easing: "easeOutBounce",
        barColor: "#E9573F",
        lineWidth: 10,
        lineCap: "square",
        onStep: function (e, t, n) {
          i(this.el).find(".percent").text(Math.round(n));
        },
      }),
      i(".easy-pie-chart-4").easyPieChart({
        easing: "easeOutBounce",
        barColor: "#3BAFDA",
        lineWidth: 20,
        onStep: function (e, t, n) {
          i(this.el).find(".percent").text(Math.round(n));
        },
      });
  }),
    (i.EasyPieChart = new e()),
    (i.EasyPieChart.Constructor = e);
})(window.jQuery),
  (function (e) {
    "use strict";
    window.jQuery.EasyPieChart.init();
  })();
