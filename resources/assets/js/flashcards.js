$('#editCard').on('show.bs.modal', function(event) {
	var button = $(event.relatedTarget);
	var data = button.data('info');

	var modal = $(this);
  modal.find('input[type=text]').val(data.question);
  modal.find('textarea').val(data.answer);

  console.log(data);
});