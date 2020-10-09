<div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ old('title') ?? $post->title }}"">
    @error('title')
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