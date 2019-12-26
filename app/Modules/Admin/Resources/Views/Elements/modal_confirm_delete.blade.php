<div class="modal fade" id="modal-confirm-delete" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">
                    {{ __('confirmation to delete record') }}
                </h4>
            </div>
            <div class="modal-body">
                <p></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">
                    {{ __('cancel') }}
                </button>
                <button type="button" class="btn btn-primary" id="delete-btn">
                    {{ __('delete') }}
                </button>
            </div>
        </div>
    </div>
</div>