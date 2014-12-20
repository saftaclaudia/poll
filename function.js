function Answer(name){
	this.name=name;
}
var ViewModel = {
	questions: ko.observableArray([]),
	newQuestion: {
		question: ko.observable(''),
		type: ko.observable('multiple'),
		answers: ko.observableArray([new Answer('')]),
	},
	
	addNewAnswer: function(){
		this.newQuestion.answers.push(new Answer(''));
	},
	removeAnswer: function(item){
		ViewModel.newQuestion.answers.remove(item);
	},

	addEditAnswer: function(){
		var answer = new Answer('');
		answer.name= ko.observable('');
		this.answers.push(answer);
	},
	removeEditAnswer: function(item){
		this.remove(item);
	},

	addQuestion: function () {
		var answersClone = this.newQuestion.answers().map(function(item) {
			return {
				name: ko.observable(item.name)
			};
		});

		var questionToBeAddedToArray = {
			question: ko.observable(this.newQuestion.question()),
			type:ko.observable(this.newQuestion.type()),
			answers:ko.observableArray(answersClone),
			edit:ko.observable(false),
		};

		this.questions.push(questionToBeAddedToArray);
	},


	removeQuestion: function(item){
		ViewModel.questions.remove(item);
	},

	editQuestion: function(){
		this.edit(true);

		var answersClone = this.answers().map(function(item) {
			return {
				name: item.name
			};
		});

		var questionToBeEdited = {
			question: this.question(),
			type: this.type(),
			answers: answersClone
		};

		this.clone = questionToBeEdited;
	},

	cancelEdit:function(){
		var self = this;

		this.question( this.clone.question );
		this.type( this.clone.type );
		this.answers.removeAll();

		this.clone.answers.forEach(function(item) {
			self.answers.push(item );
		});

		this.edit(false);
	},

	saveEdit: function(){
		this.edit(false);

	}
	
};

ko.applyBindings(ViewModel);
