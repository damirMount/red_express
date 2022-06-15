<button id="searchBtn" type="button" class='btn {{$class}}' data-bs-toggle="modal" data-bs-target="#modalSearch">
    {{ $text }}
</button>

@section('scripts')
    <script>
        const searchBtn = document.getElementById('searchBtn');
        const modal = document.querySelector('.modal-search');
        const firstStep = document.querySelector('.modal-search .first-step');
        const secondStep = document.querySelector('.modal-search .second-step');

        searchBtn.addEventListener('click', () => {
            if(modal.classList.contains('show')){
                firstStep.classList.toggle('d-none');
                secondStep.classList.toggle('d-none');
            }
            console.log('work')
        })
    </script>
@endsection
