function fetchAll(item){
    var ref = firebase.database().ref();//'devices');
    ref.once('value', function(snapshot){
      const temperatureInfo = item.getElementById("temperatureInfo");
      const lightHrsInfo = item.getElementById("lightHrsInfo");
      const lightStatusInfo = item.getElementById("lightStatusInfo");
      const waterLevelInfo = item.getElementById("waterLevelInfo");
      console.log(snapshot.val());
      var currTemp = snapshot.val().currTemp.split("=")[1];
      var totalLight = snapshot.val().totalLight.split("=")[1];
      var currLight = snapshot.val().currLight.split("=")[1];
      var waterLevel = snapshot.val().waterLevel.split("=")[1];
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
    
      if  (waterLevel == "null")
          waterLevelInfo.innerHTML = "N/A";
      else
          waterLevelInfo.innerHTML = waterLevel;
      
    });    
  }

function listenAll(item){
    var ref = firebase.database().ref();
    ref.on('child_changed', function(snapshot){
        var attr = snapshot.val().split("=")[0];
        var res = snapshot.val().split("=")[1];
        
        const temperatureInfo = item.getElementById("temperatureInfo");
        const lightHrsInfo = item.getElementById("lightHrsInfo");
        const lightStatusInfo = item.getElementById("lightStatusInfo");
        const waterLevelInfo = item.getElementById("waterLevelInfo");

        switch  (attr){
            case "currTemp": if (res=="null")temperatureInfo.innerHTML ="N/A"; else temperatureInfo.innerHTML = res;
                    break;
            case "currLight": if (res=="null")lightStatusInfo.innerHTML ="N/A"; else lightStatusInfo.innerHTML = res;
                    break;
            case "totalLight": if (res=="null")lightHrsInfo.innerHTML ="N/A"; else lightHrsInfo.innerHTML = res;
                    break;
            case "waterLevel" : if (res=="null")waterLevelInfo.innerHTML ="N/A"; else waterLevelInfo.innerHTML = res;
                    break;
        }
    });
}

function writeData(){
    firebase.database().ref().set({
        device: "device=proto-001",
        owner: "owner=john",
        minTemp:  "minTemp=15",
        maxTemp: "maxTemp=35",
        lightStart: "lightStart=8",
        totalLight: "totalLight=16",
        currTemp: "currTemp=null",
        currLight: "currLight=null",
        waterLevel: "waterLevel=null"

    }, function(error){
        if  (error){
            alert("Write Data Failed. Error: "+error);
        }else{
            alert("Write Success")
        }
    });   
}
