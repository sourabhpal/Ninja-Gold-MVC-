<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ninja Gold Game!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  	<!--<script type="text/javascript" src='script.js'></script> -->
  	<style>
		.col-sm-3 {
			border: solid 1px;
		}
		.form-group {
			text-align: center;
		}
		#gold {
			border: solid 1px;
			background-color: gold;
		}
		#ninja {
			text-align: center;
		}
		img {
			vertical-align: middle;
		}
		#message {
			text-align: center;
		}
  	</style>
</head>
<body>
	<div class="container"><div class="row"><div class="col-sm-3" id="gold"><h4>Your Gold: <?php echo $this->session->userdata('gold'); ?></h4></div></div>
		<div class="row" id="ninja"><h2>Where will your Ninja go??</h2></div>
		<div class="row" id="boxes">
			<div class="col-sm-3">
				<div class="form-group" id="farm"><h3>Farm</h3>
					<form role="form" action="/process_money" method="post">
						<input type="hidden" name="building" value="farm" />
						<input type="submit" value="Find Gold!"/>
					</form>
					<h5>(earns 10-20 golds)</h5>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="form-group" id="cave"><h3>Cave</h3>
					<form role="form" action="/process_money" method="post">
						<input type="hidden" name="building" value="cave" />
						<input type="submit" value="Find Gold!"/>
					</form>
					<h5>(earns 5-10 golds)</h5>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="form-group" id="house"><h3>House</h3>
					<form role="form" action="/process_money" method="post">
						<input type="hidden" name="building" value="house" />
						<input type="submit" value="Find Gold!"/>
					</form>	
					<h5>(earns 2-5 golds)</h5>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="form-group" id="casino"><h3>Casino</h3>
					<form role="form" action="/process_money" method="post">
						<input type="hidden" name="building" value="casino" />
						<input type="submit" value="Find Gold!"/>
					</form>
					<h5>(earns/takes 0-50 golds)</h5>
				</div>
			</div>
		</div>
		<div class="row" id="message">
			<p> <?php 
					foreach($this->session->userdata('messages') as $message)
					{
						echo $message;
					}
					// var_dump($this->session->userdata('messages'));
			 ?> </p>
		</div>
	</div>
</body>
</html>