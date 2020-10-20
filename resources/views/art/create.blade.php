@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('art.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="name">Title</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" name="name" required>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="subject">Subject</label>
                <select name="subject" class="form-control @error('subject') is-invalid @enderror" value="{{ old('subject') }}" required>
                    <option value="">-</option>
                    @foreach($subject as $subject)
                        <option value="{{ $subject->name }}">{{ $subject->name }}</option>
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
                <input type="text" class="form-control @error('city') is-invalid @enderror" value="{{ old('city') }}" name="city" required>

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
                        <option value="{{ $category->name }}">{{ $category->name }}</option>
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
                        <option value="{{ $style->name }}">{{ $style->name }}</option>
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
                        <option value="{{ $medium->name }}">{{ $medium->name }}</option>
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
                        <option value="{{ $material->name }}">{{ $material->name }}</option>
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
                        <option value="{{ $size->name }}">{{ $size->name }}</option>
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
                <input type="number" class="form-control @error('height') is-invalid @enderror" name="height" placeholder="(in cm)" min="0" value="{{ old('height') }}" required>

                @error('height')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group col-md-2">
                <label for="width">Width</label>
                <input type="number" class="form-control @error('width') is-invalid @enderror" name="width" placeholder="(in cm)" min="0" value="{{ old('width') }}" required>

                @error('width')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group col-md-2">
                <label for="depth">Depth</label>
                <input type="number" class="form-control @error('depth') is-invalid @enderror" name="depth" placeholder="(in cm)" min="0" value="{{ old('depth') }}">

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
                    <input type="number" class="form-control @error('price') is-invalid @enderror" name="price" min="0" value="{{ old('price') }}" required>

                    @error('price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control @error('description') is-invalid @enderror" rows="5" required>{{ old('description') }}</textarea>

            @error('description')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="row">
            <div class="form-group col-md-6">
                <label for="attachment">Upload Artwork Photo</label>
                <div class="custom-file mb-3">
                    <input type="file" class="form-control-file @error('file') is-invalid @enderror" name="file" onchange="readURL(this);"  aria-describedby="Product Image" value="{{ old('attachment') }}">

                    @error('file')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mt-2">
                    <a href="{{ url()->previous() }}" class="btn border-none">Cancel</a>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <img id="imageView" src="" style="max-width:300px; max-height: 500px;"/>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
