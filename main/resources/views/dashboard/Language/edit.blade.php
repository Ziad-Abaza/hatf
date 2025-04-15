@extends('dashboard.layout.main')


@section('main')
    <div class="container">
        <h1 style="direction:rtl;">{{ __('languages/edit.Language_Translations_Page') }} ({{$slug}})</h1>

        <form action="{{ route('dashboard.languages.update', ['locale' =>'ar','key' => $key, 'language' => $language, 'slug' => $slug]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="value">{{ __('languages/edit.Translation_for') }}: <strong>{{ $key }}</strong></label>
                <textarea name="value" id="value" class="form-control" rows="5" required>{{ $value }}</textarea>
            </div>

            <button type="submit" class="btn btn-success">{{ __('languages/edit.Save') }}</button>
            <a href="{{ route('dashboard.languages.index', ['key' => $key, 'language' => 'en']) }}" class="btn btn-secondary">{{ __('languages/edit.Cancel') }}</a>
        </form>
    </div>
@endsection
