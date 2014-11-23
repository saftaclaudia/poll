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
	addQuestion: function () {
		var newQuestion = {
			question: this.newQuestion.question(),
			type: this.newQuestion.type(),
			answers: this.newQuestion.answers()
		};
		this.questions.push(newQuestion);
	}
};

ko.applyBindings(ViewModel);
