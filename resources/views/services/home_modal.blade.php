<!-- Complete Profile -->
<div class="modal fade" id="completeProfile" tabindex="-1" role="dialog" aria-labelledby="completeProfile" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="completeProfile">Setup your artist profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="" method="post">
                <div class="form-group">
                    <label for="inputAddress">Mobile</label>
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">+63</div>
                        </div>

                        <input type="text" class="form-control @error('mobile') is-invalid @enderror"
                            name="mobile"
                            value=""
                            required
                            autofocus
                            maxlength="10"
                            minlength="10"
                        >

                        @error('mobile')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputAddress">Gallery</label>
                    <select name="category" class="form-control" name="category">
                        <option value="">-</option>
                        @foreach($gallery as $gallery)
                            <option value="{{ $gallery->name }}" {{ (Auth::user()->category == $gallery->name) ? 'selected' : '' }}>{{ $gallery->name }}</option>
                        @endforeach
                    </select>
                </div>
            </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
