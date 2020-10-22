@extends('layouts.app')


@section('content')
<div class="container">

    <div class="container">
        <div class="row">
            <div class="col">

                <h1>Export</h1>

                <div class="accordion" id="accordionExample">
                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            {{ "User" }}
                          </button>
                        </h2>
                      </div>
                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <form action="{{ route('user.export.custom') }}" method="post">

                                @csrf
                                <div class="form-group">
                                    <label for="fields" class="font-weight-bold">Meta Field</label>

                                    @foreach($userfields as $field)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="{{ $field }}" name="{{ $field }}">
                                            <label class="form-check-label" for="defaultCheck1">
                                                {{ $field }}
                                            </label>
                                        </div>
                                    @endforeach
                                    <small id="format" class="form-text text-muted">{{ "Select the user meta keys to export." }}</small>
                                </div>

                                <div class="form-group">
                                    <label for="format" class="font-weight-bold">Format</label>
                                    <select class="form-control" name="format" required>
                                        <option value="xlsx">Excel</option>
                                        <option value="csv">CSV</option>
                                        <option value="html">HTML</option>
                                        <option value="ods">ODS</option>
                                        <option value="tsv">TSV</option>
                                    </select>
                                    <small id="format" class="form-text text-muted">This settings allows you to specify the format in which you would like the export.</small>
                                </div>

                                <div class="form-group">
                                    <a class="card-link mb-2" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                        Advance Options
                                    </a>

                                    <div class="collapse mt-2" id="collapseExample">
                                        <div class="form-group">
                                            <label for="roles" class="font-weight-bold">Roles</label>
                                            @foreach($role as $role)
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="{{ $role->name }}" name="role[]">
                                                    <label class="form-check-label" for="defaultCheck1">
                                                        {{ $role->name }}
                                                    </label>
                                                </div>
                                            @endforeach

                                            <small id="format" class="form-text text-muted">{{ "Select the user role meta keys to export." }}</small>
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success">Export</button>
                                <a href="{{ route('user.export.default') }}" class="btn btn-outline-info">Default</a>
                            </form>
                        </div>
                      </div>
                    </div>

                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            {{ "Art" }}
                          </button>
                        </h2>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <form action="{{ route('art.export.custom') }}" method="post">

                                @csrf
                                <div class="form-group">
                                    <label for="">Meta Field</label>

                                    @foreach($artfields as $art)
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="{{ $art }}" name="{{ $art }}">
                                            <label class="form-check-label" for="defaultCheck1">
                                                {{ $art }}
                                            </label>
                                        </div>
                                    @endforeach
                                    <small id="format" class="form-text text-muted">{{ "Select the user meta keys to export." }}</small>
                                </div>

                                <div class="form-group">
                                    <label for="format">Format</label>
                                    <select class="form-control" name="format">
                                        <option value="xlsx">Excel</option>
                                        <option value="csv">CSV</option>
                                        <option value="html">HTML</option>
                                        <option value="ods">ODS</option>
                                        <option value="tsv">TSV</option>
                                    </select>
                                    <small id="format" class="form-text text-muted">This settings allows you to specify the format in which you would like the export.</small>
                                </div>

                                <button type="submit" class="btn btn-success">Export</button>
                                <a href="{{ route('art.export.default') }}" class="btn btn-outline-info">Default</a>
                            </form>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
