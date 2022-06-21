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
                            id="invoice"
                        >

                        <p class="text-danger d-none" id="empty-cargo"></p>
                        <button class="search-cargo" id="Search">
                            Найти
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

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
