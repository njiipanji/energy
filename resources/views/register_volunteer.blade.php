<!DOCTYPE html>
<html>
<head>
	<title>Register Volunteer</title>
</head>
<body>

<h1>Register Volunteer</h1>

<form action="{{ url('registervolunteer') }}" method="POST">
	{{ csrf_field() }}
	<label for="nama_volunteer" id="nama_volunteer">Nama</label><br>
	<input type="text" name="nama_volunteer" id="pass_volunteer"><br><br>

	<label for="pass_volunteer" id="pass_volunteer">Password</label><br>
	<input type="password" name="pass_volunteer" id="pass_volunteer"><br><br>

	<label for="no_ktp_volunteer">No KTP</label><br>
	<input type="text" name="no_ktp_volunteer"><br><br>

	<label for="email_volunteer" id="email_volunteer">Email</label><br>
	<input type="text" name="email_volunteer"><br><br>

	<label for="no_telp_volunteer" id="no_telp_volunteer">No Telp</label><br>
	<input type="text" name="no_telp_volunteer" id="no_telp_volunteer"><br><br>

	<input type="submit" name="submit" value="Submit">
</form>
</body>
</html>