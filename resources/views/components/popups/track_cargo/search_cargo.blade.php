<!-- Modal -->
<div
    class="modal fade modal-search"
    id="modalSearch"
    tabindex="2"
    aria-labelledby="modalSearch"
    aria-hidden="true"
>
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content border-0 shadow-sm">
            <div class="modal-header px-3 border-bottom-0">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-3">
                 <div class="row mx-0">
                   <h2 class="red-modal-title">
                     Онлайн-отслеживание груза
                   </h2>
                   <div class="col-6 mx-auto red-modal-line"></div>
                   <div class="col-12 mt-4 px-0">
                     <p class="red-modal-text">
                       Номер накладной
                     </p>
                     <div class="red-modal-form d-flex justify-content-between">
                       <input type="text" class="search-input" id="invoice" value="92.230311151750">
                       <button class="search-btn btn" id="Search">
                         Найти
                       </button>
                     </div>
                   </div>
                   <div class="col-12 px-0 my-4 red-modal-results">
                   </div>
                 </div>
            </div>
          </div>
    </div>
</div>



<script>
    $(document).on('click', '#Search', function (e) {
        let invoice = $('#invoice').val();
        $('#empty-cargo').text('');
        $.ajax({
            url: '{{ route('get.invoice') }}',
            method: 'get',
            data: {
                'invoice': invoice,
            },
            success: function (data) {
                    console.log(data);
                if (data.number_id) {
                    $('#cargo').text(data.number_id)
                    $('#status').text(data.status)
                    $('#country').text(data.country)
                    $('#time').text(data.time)

                    $('#invoice').val('');
                    $('#modalSearch').modal('toggle');
                    $('#modalResult').modal('show');
                }
                else {
                    $('#empty-cargo').text(data.status);
                    $('#empty-cargo').removeClass('d-none');
                }
                // console.log(data.country)
            },
            // error: function (error) {
            //     console.log(error);
            // }
        })
    })
</script>
<!-- Including in app.blade.php -->
