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

		var newQuestion = {
			question: ko.observable (this.newQuestion.question()),
			type: ko.observable(this.newQuestion.type()),
			answers: ko.observableArray(answersClone)
		};
			this.questions.push(newQuestion);
	},

	removeQuestion: function(item){
		ViewModel.questions.remove(item);
	},

	edit: ko.observable(false),
	editQuestion: function(){
		ViewModel.edit(true);
	},

	cancelEdit:function(){
		ViewModel.edit(false);
		this.newQuestion.question(this.newQuestion.question);
		this.type(this.newQuestion.type);
		this.answers(this.answers);
	},

	saveEdit: function(){
		ViewModel.edit(false);
	}
	
};

ko.applyBindings(ViewModel);
