
require('./bootstrap');

window.onload = function() {

  var skycons = new Skycons({"color": "black"});


  console.log($("#time-blocks > div").length);

  for(var i = 0; i < 49; i++ ) {
    skycons.set("" + i, $("#" + i).attr("class"));
  }

  skycons.play();


  const app = new Vue({
      el: 'body'
  });


}
