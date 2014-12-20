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
			question: this.newQuestion.question(),
			type:ko.observable(this.newQuestion.type()),
			answers:ko.observableArray(answersClone),
			edit:ko.observable(false),
		};
			this.questions.push(newQuestion);
	},

	removeQuestion: function(item){
		ViewModel.questions.remove(item);
	},

	editQuestion: function(){
		this.edit(true);
	},

	cancelEdit:function(){
		this.edit(false);
	
	},

	saveEdit: function(){
		this.edit(false);

	}
	
};

ko.applyBindings(ViewModel);
