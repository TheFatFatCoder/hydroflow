function fetchAll(item){
    var ref = firebase.database().ref();//'devices');
    ref.once('value', function(snapshot){
        var attr = snapshot.val().split("=")[0];
        var res = snapshot.val().split("=")[1];
        
        const temperatureInfo = item.getElementById("temperatureInfo");
        const fanStatusInfo = item.getElementById("fanStatusInfo");
        const lightStatusInfo = item.getElementById("lightStatusInfo");
        const waterLevelInfo = item.getElementById("waterLevelInfo");
        const lastTransmissionInfo = item.getElementById("lastTransmissionInfo");

        switch  (attr){
            case "currTemp": if (res=="null")temperatureInfo.innerHTML ="N/A"; else temperatureInfo.innerHTML = res;
                    break;
            case "lightStatus": if (res=="null")lightStatusInfo.innerHTML ="N/A"; else lightStatusInfo.innerHTML = res;
                    break;
            case "fanStatus": if (res=="null")fanStatusInfo.innerHTML ="N/A"; else fanStatusInfo.innerHTML = res;
                    break;
            case "waterLevel": if (res=="null")waterLevelInfo.innerHTML ="N/A"; else waterLevelInfo.innerHTML = res;
                    break;
            case "lastTransmission": if (res=="null")lastTransmissionInfo.innerHTML ="Never"; else lastTransmissionInfo.innerHTML = res;
                    break;
        } 
    });
}
>>>>>>> 2008099c7789289d3d728d14a4e4ba43dbb8c942

function listenAll(item){
    var ref = firebase.database().ref();
    ref.on('child_changed', function(snapshot){
        var attr = snapshot.val().split("=")[0];
        var res = snapshot.val().split("=")[1];
        
        const temperatureInfo = item.getElementById("temperatureInfo");
        const fanStatusInfo = item.getElementById("fanStatusInfo");
        const lightStatusInfo = item.getElementById("lightStatusInfo");
        const waterLevelInfo = item.getElementById("waterLevelInfo");
<<<<<<< HEAD
=======
        const lastTransmissionInfo = item.getElementById("lastTransmissionInfo");
>>>>>>> 2008099c7789289d3d728d14a4e4ba43dbb8c942

        switch  (attr){
            case "currTemp": if (res=="null")temperatureInfo.innerHTML ="N/A"; else temperatureInfo.innerHTML = res;
                    break;
            case "lightStatus": if (res=="null")lightStatusInfo.innerHTML ="N/A"; else lightStatusInfo.innerHTML = res;
                    break;
            case "fanStatus": if (res=="null")fanStatusInfo.innerHTML ="N/A"; else fanStatusInfo.innerHTML = res;
                    break;
            case "waterLevel": if (res=="null")waterLevelInfo.innerHTML ="N/A"; else waterLevelInfo.innerHTML = res;
                    break;
            case "lastTransmission": if (res=="null")lastTransmissionInfo.innerHTML ="Never"; else lastTransmissionInfo.innerHTML = res;
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
<<<<<<< HEAD
        waterLevel: "waterLevel=null"
=======
        lightStatus: "lightStatus=null",
        fanStatus : "fanStatus=null",
        waterLevel: "waterLevel=null",
        lastTransmission: "lastTransmission=null"
>>>>>>> 2008099c7789289d3d728d14a4e4ba43dbb8c942

    }, function(error){
        if  (error){
            alert("Write Data Failed. Error: "+error);
        }else{
            alert("Write Success")
        }
    });   
}
