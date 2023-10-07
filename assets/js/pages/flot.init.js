!function(s){"use strict";var a=function(){this.$body=s("body"),this.$realData=[]};a.prototype.createPlotGraph=function(a,t,o,e,r,i,l){s.plot(s(a),[{data:t,label:e[0],color:r[0]},{data:o,label:e[1],color:r[1]}],{series:{lines:{show:!0,fill:!0,lineWidth:1,fillColor:{colors:[{opacity:.5},{opacity:.5}]}},points:{show:!0},shadowSize:0},legend:{position:"nw",backgroundColor:"transparent"},grid:{hoverable:!0,clickable:!0,borderColor:i,borderWidth:1,labelMargin:10,backgroundColor:l},yaxis:{min:0,max:15,tickColor:"rgba(108, 120, 151, 0.1)",font:{color:"#5d727c"}},xaxis:{tickColor:"rgba(108, 120, 151, 0.1)",font:{color:"#5d727c"}},tooltip:!0,tooltipOpts:{content:"%s: Value of %x is %y",shifts:{x:-60,y:25},defaultTheme:!1}})},a.prototype.createPieGraph=function(a,t,o,e){var r=[{label:t[0],data:o[0]},{label:t[1],data:o[1]},{label:t[2],data:o[2]}],i={series:{pie:{show:!0}},legend:{show:!1},grid:{hoverable:!0,clickable:!0},colors:e,tooltip:!1,tooltipOpts:{defaultTheme:!1}};s.plot(s(a),r,i)},a.prototype.randomData=function(){for(0<this.$realData.length&&(this.$realData=this.$realData.slice(1));this.$realData.length<300;){var a=(0<this.$realData.length?this.$realData[this.$realData.length-1]:50)+10*Math.random()-5;a<0?a=0:100<a&&(a=100),this.$realData.push(a)}for(var t=[],o=0;o<this.$realData.length;++o)t.push([o,this.$realData[o]]);return t},a.prototype.createRealTimeGraph=function(a,t,o){return s.plot(a,[t],{colors:o,series:{lines:{show:!0,fill:!0,lineWidth:1,fillColor:{colors:[{opacity:.45},{opacity:.45}]}},points:{show:!1},shadowSize:0},grid:{borderColor:"rgba(108, 120, 151, 0.1)",borderWidth:1,labelMargin:15,backgroundColor:"transparent"},yaxis:{min:0,max:100,tickColor:"rgba(108, 120, 151, 0.1)",font:{color:"#5d727c"}},xaxis:{show:!1}})},a.prototype.createDonutGraph=function(a,t,o,e){var r=[{label:t[0],data:o[0]},{label:t[1],data:o[1]},{label:t[2],data:o[2]},{label:t[3],data:o[3]},{label:t[4],data:o[4]}],i={series:{pie:{show:!0,innerRadius:.5}},legend:{show:!1},grid:{hoverable:!0,clickable:!0},colors:e,tooltip:!1,tooltipOpts:{defaultTheme:!1}};s.plot(s(a),r,i)},a.prototype.createCombineGraph=function(a,t,o,e){var r=[{label:o[0],data:e[0],lines:{show:!0,fill:!0},points:{show:!0}},{label:o[1],data:e[1],lines:{show:!0},points:{show:!0}},{label:o[2],data:e[2],bars:{show:!0}}],i={yaxis:{tickColor:"rgba(108, 120, 151, 0.1)",font:{color:"#5d727c"}},xaxis:{ticks:t,tickColor:"rgba(108, 120, 151, 0.1)",font:{color:"#5d727c"}},series:{shadowSize:0},grid:{hoverable:!0,clickable:!0,tickColor:"#f9f9f9",borderWidth:1,borderColor:"rgba(108, 120, 151, 0.1)"},colors:["#3bc0c3","#1a2942","#615ca8"],tooltip:!0,tooltipOpts:{defaultTheme:!1},legend:{position:"nw",backgroundColor:"transparent"}};s.plot(s(a),r,i)},a.prototype.init=function(){this.createPlotGraph("#website-stats",[[0,9],[1,8],[2,5],[3,8],[4,5],[5,14],[6,10]],[[0,5],[1,12],[2,4],[3,3],[4,12],[5,11],[6,14]],["Visits","Pages/Visit"],["#3bc0c3","#1a2942"],"rgba(108, 120, 151, 0.1)","transparent");this.createPieGraph("#pie-chart #pie-chart-container",["Series 1","Series 2","Series 3"],[20,30,15],["#1a2942","#3bc0c3","#1ca8dd"]);var t=this.createRealTimeGraph("#flotRealTime",this.randomData(),["#1a2942"]);t.draw();var o=this;!function a(){t.setData([o.randomData()]),t.draw(),setTimeout(a,s("html").hasClass("mobile-device")?1e3:30)}();this.createDonutGraph("#donut-chart #donut-chart-container",["Series 1","Series 2","Series 3","Series 4","Series 5"],[35,20,10,15,20],["#1a2942","#3bc0c3","#615ca8","#ebc142","#1ca8dd"]);var a=[[[0,201],[1,520],[2,337],[3,261],[4,157],[5,95],[6,200],[7,250],[8,320],[9,500],[10,152],[11,214],[12,364],[13,449],[14,558],[15,282],[16,379],[17,429],[18,518],[19,470],[20,330],[21,245],[22,358],[23,74]],[[0,245],[1,492],[2,538],[3,332],[4,234],[5,143],[6,147],[7,63],[8,64],[9,43],[10,486],[11,201],[12,315],[13,397],[14,612],[15,281],[16,370],[17,279],[18,425],[19,53],[20,122],[21,355],[22,340],[23,801]],[[23,727],[22,128],[21,110],[20,92],[19,172],[18,63],[17,150],[16,592],[15,12],[14,246],[13,52],[12,149],[11,123],[10,2],[9,325],[8,10],[7,15],[6,89],[5,65],[4,77],[3,600],[2,200],[1,385],[0,200]]];this.createCombineGraph("#combine-chart #combine-chart-container",[[0,"22h"],[1,""],[2,"00h"],[3,""],[4,"02h"],[5,""],[6,"04h"],[7,""],[8,"06h"],[9,""],[10,"08h"],[11,""],[12,"10h"],[13,""],[14,"12h"],[15,""],[16,"14h"],[17,""],[18,"16h"],[19,""],[20,"18h"],[21,""],[22,"20h"],[23,""]],["Last 24 Hours","Last 48 Hours","Difference"],a)},s.FlotChart=new a,s.FlotChart.Constructor=a}(window.jQuery),function(a){"use strict";window.jQuery.FlotChart.init()}();