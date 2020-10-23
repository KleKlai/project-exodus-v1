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

<!-- Update Art Modal -->
<div class="modal fade" id="updateArtModal" tabindex="-1" role="dialog" aria-labelledby="updateArtModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateArtModal">Change Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form method="POST" action="{{ url('art.status', $art) }}">
                @csrf
                @method('PATCH')

                <div class="modal-body">
                    <div class="form-group">
                        <label class="text-muted" for="name">Status</label>
                        <select name="status" class="form-control @error('status') is-invalid @enderror">
                            @foreach($status as $data)
                                <option value="{{ $data->name }}" {{ ($data->name == $art->status ? 'selected' : '') }}>
                                    {{ $data->name }}
                                </option>
                            @endforeach
                        </select>

                        @error('status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="text-muted" for="remark">Remarks</label>
                        <textarea class="form-control @error('remark') is-invalid @enderror" name="remark" name="remark" rows="2"></textarea>

                        @error('remark')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link text-decoration-none" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>

            </form>
        </div>
    </div>
</div>
