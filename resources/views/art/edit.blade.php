@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('art.update', $art)}}" method="POST" enctype="multipart/form-data">
        <div class="card card-body">

        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $art->title) }}" name="title" required>

            @error('title')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="subject">Subject</label>
                <select name="subject" class="form-control @error('subject') is-invalid @enderror" value="{{ old('subject', $art->subject) }}" required>
                    <option value="">-</option>
                    @foreach($subject as $subject)
                        <option value="{{ $subject->name }}" {{ ($art->subject == $subject->name ? "selected":"") }}>
                            {{ $subject->name }}
                        </option>
                    @endforeach
                </select>

                @error('subject')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="form-group col-md-4">
                <label for="city">City</label>
                <input type="text" class="form-control @error('city') is-invalid @enderror" value="{{ old('city', $art->city) }}" name="city" required>

                @error('city')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="form-group col-md-4">
                <label for="category">Category</label>
                <select name="category" class="form-control @error('category') is-invalid @enderror" value="{{ old('category') }}" required>
                    <option value="">-</option>
                    @foreach($category as $category)
                        <option value="{{ $category->name }}" {{ ($art->category == $category->name ? "selected":"") }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>

                @error('subject')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="style">Style</label>
                <select name="style" class="form-control @error('style') is-invalid @enderror" value="{{ old('style') }}" required>
                    <option value="">-</option>
                    @foreach($style as $style)
                        <option value="{{ $style->name }}" {{ ($art->style == $style->name ? "selected":"") }}>
                            {{ $style->name }}
                        </option>
                    @endforeach
                </select>

                @error('style')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <label for="medium">Medium</label>
                <select name="medium" class="form-control @error('medium') is-invalid @enderror" value="{{ old('medium') }}" required>
                    <option value="">-</option>
                    @foreach($medium as $medium)
                        <option value="{{ $medium->name }}" {{ ($art->medium == $medium->name ? "selected":"") }}>
                            {{ $medium->name }}
                        </option>
                    @endforeach
                </select>

                @error('medium')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group col-md-4">
                <label for="material">Material</label>
                <select name="material" class="form-control @error('material') is-invalid @enderror" value="{{ old('material') }}" required>
                    <option value="">-</option>
                    @foreach($material as $material)
                        <option value="{{ $material->name }}" {{ ($art->material == $material->name ? "selected":"") }}>
                            {{ $material->name }}
                        </option>
                    @endforeach
                </select>

                @error('material')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="size">Size <span class="text-muted">( Optional )</span></label>
                <select name="size" class="form-control @error('size') is-invalid @enderror" value="{{ old('size') }}">
                    <option value="">-</option>
                    @foreach($size as $size)
                        <option value="{{ $size->name }}" {{ ($art->size == $size->name ? "selected":"-") }}>
                            {{ $size->name }}
                        </option>
                    @endforeach
                </select>

                @error('size')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group col-md-2">
                <label for="height">Height</label>
                <input type="number" value="{{ old('height', $art->height) }}" class="form-control @error('height') is-invalid @enderror" name="height" placeholder="(in cm)" min="0" required>

                @error('height')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group col-md-2">
                <label for="width">Width</label>
                <input type="number" value="{{ old('width', $art->width) }}"  class="form-control @error('width') is-invalid @enderror" name="width" placeholder="(in cm)" min="0" required>

                @error('width')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group col-md-2">
                <label for="depth">Depth</label>
                <input type="number" value="{{ old('depth', $art->depth) }}" class="form-control @error('depth') is-invalid @enderror" name="depth" placeholder="(in cm)" min="0">

                @error('depth')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group col-md-3">
                <label for="price">Price</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                    <div class="input-group-text">₱</div>
                    </div>
                    <input type="number" value="{{ old('price', $art->price) }}" class="form-control @error('price') is-invalid @enderror" name="price" min="0" required>

                    @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-7">

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="5" required>{{ old('description', $art->description) }}</textarea>

                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="attachment">Change Artwork Photo</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input @error('file') is-invalid @enderror" name="file" onchange="readURL(this);" aria-describedby="Product Image" value="{{ old('attachment', $art->attachment) }}">
                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                            <small class="form-text text-muted">{{ "Leave blank if you don't want attachment to be changed." }}</small>

                            @error('file')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
            </div>
            <div class="col-5">
                <h4 class="">Preview</h4>
                <img class="picture" src="{{ url('storage/artwork/'.$art->attachment) }}" alt="Artwork {{ $art->attachment }}" height="300px">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <div class="mt-2">
                    <a href="{{ url()->previous() }}" class="btn border-none">Cancel</a>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </div>
        </div>
    </form>
</div>
@endsection
