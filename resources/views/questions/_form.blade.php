@csrf
<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" value="{{ old('title',$question->title) }}" class="form-control  $errors->has('title') ? 'is-invalid': '' }}" id="question-title">
    @if ($errors->has('title'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('title')}}</strong>
    </div>
    @endif
</div>
<div class="form-group">
    <label for="body">Explanation</label>
    <textarea name="body" id="question-body" cols="30" rows="10" class="form-control {{ $errors->has('body') ? 'is-invalid': ''}}">{{ old('title',$question->body)}}</textarea>
    @if ($errors->has('body'))
    <div class="invalid-feedback">
        <strong>{{ $errors->first('body')}}</strong>
    </div>
    @endif
</div>
<div class="form-group">
    <button type="submit" class="btn btn-outline-primary btn-lg">{{ $buttonText }}</button>
</div>
