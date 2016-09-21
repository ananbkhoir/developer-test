<!DOCTYPE html>
<html>
	<head>
		<title>Developer Test</title>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-2" style="margin-top: 20px;">
					<form method="post" action="process.php">
						<div class="form-group">
							<label for="city">City</label>
							<select name="city" class="form-control" id="city">
								<option>Aceh</option>
								<option>Palembang</option>
								<option>Jakarta</option>
								<option>Surabaya</option>
								<option>Bali</option>
								<option>Maluku</option>
								<option>Papua</option>
							</select>
						</div>
						<input type="submit" value="Go!" class="btn btn-primary">
					</form>
				</div>
			</div>
		</div>
	</body>
</html>