<div class="modal fade" id="editCard" tabindex="-1" role="dialog" aria-labelledby="addCardLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addCardLabel">Edit Question</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      {{ Form::open(['action' => ['FlashcardsController@update', $card->id]]) }}
        <div class="modal-body">
          {{ Form::hidden('category_id', $category->id) }}
          <div class="form-group">
            {{ Form::label('question', 'Question')}}
            {{ Form::text('question', null, ['class' => 'form-control']) }}
          </div>
          <div class="form-group">
            {{ Form::label('answer', 'Answer')}}
            {{ Form:: textarea('answer', null, ['class' => 'form-control']) }}
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Create Flashcard</button>
        </div>
      {{ Form::close() }}
    </div>
  </div>
</div>