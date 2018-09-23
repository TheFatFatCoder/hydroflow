function pageLoad(item){
    const logged_id = item;
    var ref = firebase.database().ref('devices').child("AX001");
    ref.on('value', function(snapshot){
      var logged_value = snapshot.val();
      //console.log(logged_value);
      logged_id.innerHTML = logged_value.owner;
    });
}

function getStatus(){
    const logged_id = document.getElementById("logged_id");
    var ref = firebase.database().ref('devices').child("AX001");
    ref.on('child_changed', function(snapshot){
        /*snapshot.forEach(function(childSnapshot){
          var childData = childSnapshot.val();
          console.log(childData);
      });*/
      console.log(snapshot.val());
      logged_id.innerHTML = snapshot.val();
    });
}
getStatus();

function writeData(data){
    firebase.database().ref("devices").child("AX001").set({
        device: "AX001",
        owner: "sysdev",
        minTemp: 15,
        maxTemp: 35,
        minHr: "08.00",
        maxHr: "22.00"
    }, function(error){
        if  (error){
            alert("Write Data Failed. Error: "+error);
        }else{
            alert("Write Success")
        }
    });   
}