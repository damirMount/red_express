@foreach($questions as $question)
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed questions" type="button" data-bs-toggle="collapse"
                    data-bs-target="#flush-collapse-{{ $question->id }}" aria-expanded="false" aria-controls="flush-collapseOne">
                {{ $question->question }}
            </button>
        </h2>
        <div id="flush-collapse-{{ $question->id }}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
             data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                {{ $question->answer }}
            </div>
        </div>
    </div>
@endforeach
