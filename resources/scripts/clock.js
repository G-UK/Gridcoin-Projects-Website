$(function(){
    setInterval(function(){
      var divUtc = $('#divUTC');
      var divLocal = $('#divLocal');  
      //put UTC time into divUTC  
      divUtc.text(moment.utc().format('YYYY-MM-DD HH:mm:ss'));      
      
      //get text from divUTC and convert to local timezone  
      var localTime  = moment.utc(divUtc.text()).toDate();
      localTime = moment(localTime).format('YYYY-MM-DD HH:mm:ss');
      divLocal.text(localTime);  
    
    },1000);
});