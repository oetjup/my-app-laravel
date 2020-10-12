<div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') ?? $post->title }}">
    @error('title')
        <div class="mt-2 text-danger">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group">
    <label for="category">Category</label>
    <select class="form-control select-category" id="category" name="category" data-value="{{ old('category') ?? $post->category }}">
        <option disabled selected>Choose one!</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
    </select>
    @error('category')
        <div class="mt-2 text-danger">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group">
    <label for="tags">Tags</label>
    <select class="form-control select2" id="tags" name="tags[]" multiple>
        @foreach ($tags as $tag)
            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
        @endforeach
    </select>
    @error('tags')
        <div class="mt-2 text-danger">
            {{ $message }}
        </div>
    @enderror
</div>
<div class="form-group">
    <label for="body">Body</label>
<textarea class="form-control" id="body" name="body" rows="3">{{ old('body') ?? $post->body }}</textarea>
    @error('body')
        <div class="mt-2 text-danger">
            {{ $message }}
        </div>
    @enderror
</div>
<button type="submit" class="btn btn-primary">{{ $submit ?? 'Update' }}</button>