<?php
	include("../include/firebase-script.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Homepage Param</title>
	<!--<?php echo $firebase_script; ?>-->

	<script src='https://www.gstatic.com/firebasejs/5.0.4/firebase.js'></script>
	<script>
	  // Initialize Firebase
	  var config = {
		 apiKey: 'AIzaSyDWX7BJq7uv7KbMwm4b-psUKTGqMnY_FLM',
		 authDomain: 'arduino-temp-fdfdf.firebaseapp.com',
		 databaseURL: 'https://arduino-temp-fdfdf.firebaseio.com',
		 projectId: 'arduino-temp-fdfdf',
		 storageBucket: '',
		 messagingSenderId: '1086503642000'
	  };
	  firebase.initializeApp(config);
	</script>
</head>
<body>
	<table>
		<thead>
		<tr>
			<th>ID</th>
			<th><input type="text" name="id" id="user_id"></th>
		</tr>
		<tr>
			<th>Name</th>
			<th><input type="text" name="name" id="user_name"></th>
		</tr>
		<tr>
			<td align="center" colspan="2">
				<input type="button" value="Save User" onclick="save_user();">
				<input type="button" value="Update User" onclick="update_user();">
				<input type="button" value="Delete User" onclick="delete_user();">
			</td>
		</tr>
		</thead>
	</table>	
	<hr>
	<h3>Users List</h3>
	<table id="tbl_users_list" align="center">
		<thead>
			<tr>
				<th>#ID</th>
				<th>NAME</th>
			</tr>
		</thead>
		<tbody>

		</tbody>
	</table>
	<hr>
	<script>
		const tbl_users_list = document.getElementById("tbl_users_list");
		var databaseRef = firebase.database().ref("users");
		var rowIndex = 0;

		databaseRef.on('value', function(snapshot) {
			document.getElementsByTagName('tbody')[0].parentNode.removeChild(document.getElementsByTagName('tbody')[0]);
			var table_body = document.createElement('tbody');
			rowIndex = 0;
			snapshot.forEach(function(childSnapshot) {
				var childKey = childSnapshot.key;
				var childData = childSnapshot.val();
				var row = table_body.insertRow(rowIndex);
				var cellID = row.insertCell(0);
				var cellName = row.insertCell(1);
				cellID.appendChild(document.createTextNode(childKey));
				cellName.appendChild(document.createTextNode(childData.user_name));				

				rowIndex++;
				});
			tbl_users_list.appendChild(table_body);
		});

		function save_user(){
			var uid = firebase.database().ref().child("users").push().key;
			var user_name = document.getElementById("user_name").value;

			var data = {
				user_id: uid,
				user_name: user_name
			};

			var updates = {};
			updates['/users/'+uid] = data;
			firebase.database().ref().update(updates);

			alert('User is created');
			user_id = "";
			user_name = "";

			//reload_page();
		}

		function update_user(){
			var user_id = document.getElementById("user_id").value;
			var user_name = document.getElementById("user_name").value;
	
			var data = {
				user_id: user_id,
				user_name: user_name
			};
			
			var updates = {};
			updates['/users/'+user_id] = data;
			firebase.database().ref().update(updates);
			alert("User Info Updated");

			reload_page();
		}

		function delete_user(){
			var user_id = document.getElementById("user_id").value;

			firebase.database().ref().child('/users/'+user_id).remove();
			alert("User Removed");
			//reload_page();
		}

		function reload_page(){
			window.location.reload();
		}
	</script>
</body>
</html>
