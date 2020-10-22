<!-- Import User -->
<div class="modal fade" id="artImport" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="artImport">{{ "Import Arts" }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{ route('art.import') }}" method="post" enctype="multipart/form-data">
            <div class="modal-body">
            @csrf

            <div class="custom-file">
                <input type="file" class="custom-file-input" name="file" required>
                <label class="custom-file-label" for="file">Choose file</label>
                <small class="form-text text-muted">Make sure to use xlsx excel format.</small>
            </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Proceed</button>
            </div>
        </form>
    </div>
  </div>
</div>
