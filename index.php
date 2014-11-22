<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type='text/css' href='assets/bootstrap.min.css'>
</head>
<body>
	<div class="container">
		<div class="addpoll">
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label for="newQuestion" class="col-sm-2 control-label">Question</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="newQuestion">
					</div>
				</div>
				<div class="form-group">
					<b class="col-sm-2 control-label">Answers</b>
					<div class="col-sm-10">
						<div class="radio">
							<label>
								<input type="radio" name="type">
								Yes/No form
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="type">
								Multiple Choice form
							</label>
						</div>
							<div class="form-group">
								<label class="col-sm-2 control-label">
									<div class="text-left">Choise #<span></span></div>
								</label>
								<div class="col-sm-10">
									<div class="input-group">
										<input type="text" class="form-control">
										<span class="input-group-btn">
											<button class="btn btn-default">
												<span class="glyphicon glyphicon-remove"></span>
											</button>
										</span>
									</div>
								</div>
							</div>
							<div class="col-sm-offset-2">
								<button type="button" class="btn btn-link">
									<span class="glyphicon glyphicon-plus"></span>
									Add new Choice
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success">Add Pool</button>
					</div>
				</div>
			</form>
		</div>
	</div>
	<script type='text/javascript' src='assets/knockout-3.2.0.js'></script>
	<script type='text/javascript' src='assets/jquery-1.11.1.min.js'></script>
	<script type='text/javascript' src='assets/bootstrap.min.js'></script>
	<script type='text/javascript' src="function.js"></script>
</body>
</html>

