  <!-- Modal -->
    <div
        class="modal fade modal-search"
        id="modalSearch"
        tabindex="2"
        aria-labelledby="modalSearch"
        aria-hidden="true"
    >
    <div class="modal-dialog modal-sm modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header border-0">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="first-step">
                <p class="modal-text text-center">
                    Номер накладной
                </p>
                <div class="text-center">

                <input
                    type="text"
                    class="search-input"
                >
                <button class="search-cargo" id="Search">
                    Найти
                </button>
                </div>
            </div>
            <div class="second-steps d-none">
                @include('.components.popups.track_cargo.result')
            </div>
        </div>
      </div>
    </div>
  </div>

@section('scripts')
  <script>
        const searchBtn = document.querySelector('#Search');
        const firstStep = document.querySelector('.modal-search .first-step');
        const secondStep = document.querySelector('.modal-search .second-step');

        searchBtn.addEventListener('click', () => {
            console.log('work');
            firstStep.classList.toggle('d-none');
            secondStep.classList.toggle('d-none');
        })

  </script>


  <script>
      $(document).on('click', '.search-cargo', function (e){
          console.log('hello')
      })
  </script>
@endsection
<!-- Including in app.blade.php -->
