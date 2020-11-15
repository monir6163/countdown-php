function component(x, v){
    return Math.floor(x / v);
}
countdownorder(1);
function countdownorder(i){    
  // the difference timestamp
  var timestamp = (Number($("#timestamp_id").val())+(Number($("#preparetime_id").val())*60))*1000-Date.now();  
  timestamp /= 1000; // from ms to seconds
  if(timestamp>0){
  var $div = $('.div'+i);
 var intervalid = setInterval(function(e) { // execute code each second
      timestamp--; // decrement timestamp with one second each second
      if(timestamp<=0){
        // updateReady(i);
        clearInterval(intervalIDarr[i]);
      }else{
        var days    = component(timestamp, 24 * 60 * 60),      // calculate days from timestamp
            hours   = component(timestamp,      60 * 60) % 24, // hours
            minutes = component(timestamp,           60) % 60, // minutes
            seconds = component(timestamp,            1) % 60; // seconds
            if(minutes<=9){
              minutes = '0'+minutes;
            }
            if(seconds<=9){
              seconds = '0'+seconds;
            }
        $div.html(hours + ":" + minutes + ":" + seconds); // display
      }
  }, 1000); // interval each second = 1000 ms
  }else{
    //updateReady(i);
  }
  intervalIDarr[i] = intervalid;
}
