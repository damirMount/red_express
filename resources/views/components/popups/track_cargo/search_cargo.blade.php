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
                       <input type="text" class="search-input" id="invoice">
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




<!-- Including in app.blade.php -->
