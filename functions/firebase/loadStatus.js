function fetchAll(item){
    var ref = firebase.database().ref();//'devices');
    ref.once('value', function(snapshot){
        /*
        console.log(snapshot);
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
        */
        const temperatureInfo = item.getElementById("temperatureInfo");
        const fanStatusInfo = item.getElementById("fanStatusInfo");
        const lightStatusInfo = item.getElementById("lightStatusInfo");
        const waterLevelInfo = item.getElementById("waterLevelInfo");
        const lastTransmissionInfo = item.getElementById("lastTransmissionInfo");
        console.log(snapshot.val());
        var currTemp = snapshot.val().currTemp.split("=")[1];
        var lightStatus = snapshot.val().lightStatus.split("=")[1];
        var fanStatus = snapshot.val().fanStatus.split("=")[1];
        var lastTransmission = snapshot.val().lastTransmission.split("=")[1];
        var waterLevel = snapshot.val().waterLevel.split("=")[1];
        if      (currTemp == "null")
                temperatureInfo.innerHTML = "N/A";
        else
                temperatureInfo.innerHTML = currTemp;

        if      (lightStatus == "null")
                lightStatusInfo.innerHTML = "N/A";
        else    {
                if      (lightStatus==1)
                        lightStatusInfo.innerHTML = "ON";
                else    
                        lightStatusInfo.innerHTML = "OFF";
        }
        if      (fanStatus == "null")
                fanStatusInfo.innerHTML = "N/A";
        else    {
                if      (fanStatus==1)
                        fanStatusInfo.innerHTML = "ON";
                else
                        fanStatusInfo.innerHTML = "OFF";
        }
        if      (lastTransmission=="null")
                lastTransmissionInfo.innerHTML ="Never"; 
        else 
                lastTransmissionInfo.innerHTML = lastTransmission;

        if      (waterLevel=="null")
                waterLevelInfo.innerHTML ="N/A"; 
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
        const fanStatusInfo = item.getElementById("fanStatusInfo");
        const lightStatusInfo = item.getElementById("lightStatusInfo");
        const waterLevelInfo = item.getElementById("waterLevelInfo");
        const lastTransmissionInfo = item.getElementById("lastTransmissionInfo");

        switch  (attr){
            case "currTemp": if (res=="null")temperatureInfo.innerHTML ="N/A"; else temperatureInfo.innerHTML = res;
                    break;
            case "lightStatus": if (res=="null")lightStatusInfo.innerHTML ="N/A"; else { if (res==1)lightStatusInfo.innerHTML = "ON"; else lightStatusInfo.innerHTML ="OFF";};
                    break;
            case "fanStatus": if (res=="null")fanStatusInfo.innerHTML ="N/A"; else { if (res==1)fanStatusInfo.innerHTML = "ON"; else fanStatusInfo.innerHTML ="OFF";};
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
        lightStatus: "lightStatus=null",
        fanStatus : "fanStatus=null",
        waterLevel: "waterLevel=null",
        lastTransmission: "lastTransmission=null"
    }, function(error){
        if  (error){
            alert("Write Data Failed. Error: "+error);
        }else{
            alert("Write Success")
        }
    });   
}
