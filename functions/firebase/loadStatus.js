function fetchAll(item, device_id){
    var ref = firebase.database().ref('devices').child(device_id);
    ref.once('value', function(snapshot){
      status = snapshot.val();
      const temperatureInfo = item.getElementById("temperatureInfo");
      const lightHrsInfo = item.getElementById("lightHrsInfo");
      const lightStatusInfo = item.getElementById("lightStatusInfo");
      
      var currTemp = status.currTemp.split("=")[1];
      var totalLight = status.totalLight.split("=")[1];
      var currLight = status.currLight.split("=")[1];
      if  (currTemp == "null")
          temperatureInfo.innerHTML = "N/A";
      else
          temperatureInfo.innerHTML = currTemp;

      if  (totalLight == "null")
          lightHrsInfo.innerHTML = "N/A";
      else 
          lightHrsInfo.innerHTML = totalLight;

      if  (currLight == "null")
          lightStatusInfo.innerHTML = "N/A";
      else
          lightStatusInfo.innerHTML = currLight;
      
    });    
  }

function listenAll(item, device_id){
    var ref = firebase.database().ref('devices').child(device_id);
    ref.on('child_changed', function(snapshot){
        var attr = snapshot.val().split("=")[0];
        var res = snapshot.val().split("=")[1];
        
        const temperatureInfo = item.getElementById("temperatureInfo");
        const lightHrsInfo = item.getElementById("lightHrsInfo");
        const lightStatusInfo = item.getElementById("lightStatusInfo");

        switch  (attr){
            case "currTemp": if (res=="null")temperatureInfo.innerHTML ="N/A"; else temperatureInfo.innerHTML = res;
                    break;
            case "currLight": if (res=="null")lightStatusInfo.innerHTML ="N/A"; else lightStatusInfo.innerHTML = res;
                    break;
            case "totalLight": if (res=="null")lightHrsInfo.innerHTML ="N/A"; else lightHrsInfo.innerHTML = res;
                    break;
        }
    });
}

function writeData(data){
    firebase.database().ref("devices").child("AX001").set({
        device: "device=AX001",
        owner: "owner=john",
        minTemp:  "minTemp=15",
        maxTemp: "maxTemp=35",
        lightStart: "lightStart=8",
        totalLight: "totalLight=16",
        currTemp: "currTemp=null",
        currLight: "currLight=null"

    }, function(error){
        if  (error){
            alert("Write Data Failed. Error: "+error);
        }else{
            alert("Write Success")
        }
    });   
}