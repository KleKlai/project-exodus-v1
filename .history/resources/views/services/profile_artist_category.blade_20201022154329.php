<!-- Register Category Modal -->
<div class="modal fade" id="registerCategory" tabindex="-1" aria-labelledby="registerCategory" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="registerCategory">Create</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="{{ route('artist.category.store') }}" method="post">
            <div class="modal-body">
                @csrf
                <div class="form-group">
                    <label for="name">Category</label>
                    <input type="text" class="form-control @error('category ') is-invalid @enderror" name="category" required>

                    @error('category')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Sub-Category</label>
                    <input type="text" class="form-control @error('subcategory ') is-invalid @enderror" name="subcategory">

                    @error('subcategory')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
    </div>
  </div>
</div>
