<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type='text/css' href='assets/bootstrap.min.css'>
    <link rel='stylesheet' type='text/css' href='stylesheet.css'/>
</head>
<body>
	<div class="container">
		<div class="addpoll">
			<form class="form-horizontal" role="form">
				<div class="form-group">
					<label for="newQuestion" class="col-sm-2 control-label"><span class="circle" data-bind=" text: questions().length +1"></span>Question</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="newQuestion" data-bind="value: newQuestion.question">
					</div>
				</div>
				<div class="form-group">
					<b class="col-sm-2 control-label">Answers</b>
					<div class="col-sm-10">
						<div class="radio">
							<label>
								<input type="radio" name="type" value="yesno" data-bind= "checked: newQuestion.type">
								Yes/No form
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="type" value="multiple" data-bind="checked: newQuestion.type">
								Multiple Choice form
							</label>
						</div>
						<div data-bind ="visible: (newQuestion.type() == 'multiple')">
							<!-- ko foreach: newQuestion.answers -->
							<div class="form-group">
								<label class="col-sm-2 control-label">
									<div class="text-left">Choise #<span data-bind="text: $index()+1"></span></div>
								</label>
								<div class="col-sm-10">
									<div class="input-group">
										<input type="text" class="form-control" data-bind="value:name">
										<span class="input-group-btn">
											<button class="btn btn-default" data-bind="click: $root.removeAnswer">
												<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
											</button>
										</span>
									</div>
								</div>
							</div>
							<!--/ko -->
							<div class="col-sm-offset-2">
								<button type="button" class="btn btn-link" data-bind="click:addNewAnswer">
									<span class="glyphicon glyphicon-plus"></span>
									Add new Choice
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success" data-bind="click: addQuestion">Add Pool</button>
					</div>
				</div>	
			</form>
		</div>
	
		<br></br>
		<div class="editedpoll">
			<!-- ko foreach: questions -->
			<div class="form-horizontal" data-bind="visible: !edit()">
				<div class="form-group">
					<b class= "col-sm-2 control-label"><span class="circle" data-bind="text: $index()+1"></span>Question:</b>
					<div class="col-sm-8">
						<span data-bind="text: question"></span>
					</div>
					<div class="col-sm-1">
						<button type="button" class="btn btn-link" data-bind="click:$root.editQuestion">
							<span class="glyphicon glyphicon-pencil"></span>
						</button>
					</div>
					<div class="col-sm-1">
						<button type="button" class="btn btn-link" data-bind="click:">
							<span class="glyphicon glyphicon-remove" data-bind="click:$root.removeQuestion"></span>
						</button>
					</div>
				</div>
				<div class="form-group">
					<b class="col-sm-2 control-label">Answer:</b>
					<ul class="col-sm-10" >
					<!-- ko foreach: answers-->
						<li data-bind="text:name"></li>
					<!-- /ko-->
					</ul>
					
				</div>
			</div>
			
			<div class="editablepoll" data-bind="visible:edit">
				<form class="form-horizontal">
					<div class="form-group">
						<label for="" class="col-sm-2 control-label"><span class="circle" data-bind="text: $index()+1"></span>Question: </label>
						<div class="col-sm-10">
							<input type="text" class="form-control" data-bind= "value:question" id="newQuestion">
						</div>
					</div>
					<div class="form-group">
					<b class="col-sm-2 control-label">Answers</b>
					<div class="col-sm-10">
						<div class="radio">
							<label>
								<input type="radio" name="type" value="yesno" data-bind= "checked:type">
								Yes/No form
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="type" value="multiple" data-bind="checked:type">
								Multiple Choice form
							</label>
						</div>
						
						<div data-bind ="visible: (type() == 'multiple')">
							<!-- ko foreach:answers-->
							<div class="form-group">
								<label class="col-sm-2 control-label">
									<div class="text-left">Choise #<span data-bind="text: $index()+1"></span></div>
								</label>
								<div class="col-sm-10">
									<div class="input-group">
										<input type="text" class="form-control" data-bind="value:name">
										<span class="input-group-btn">
											<button class="btn btn-default" data-bind="click: $root.removeEditAnswer.bind($parent.answers)">
												<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
											</button>
										</span>
									</div>
								</div>
							</div>
							<!--/ko -->
							<div class="col-sm-offset-2">
								<button type="button" class="btn btn-link" data-bind="click: $root.addEditAnswer">
									<span class="glyphicon glyphicon-plus"></span>
									Add new Choice
								</button>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-10">
								<button type="submit" class="btn btn-success" data-bind="click: $root.saveEdit">Edit Pool</button>
								<button type='button' class='btn btn-link' data-bind="click: $root.cancelEdit"> Cancel</button>
							</div>
						</div>
					</div>
				</div>

				</form>
			</div>
			<!--/ko -->
		</div>

	</div>
	<script type='text/javascript' src='assets/knockout-3.2.0.js'></script>
	<script type='text/javascript' src='assets/jquery-1.11.1.min.js'></script>
	<script type='text/javascript' src='assets/bootstrap.min.js'></script>
	<script type='text/javascript' src="function.js"></script>
</body>
</html>

