<h1>Nova dúvida</h1>

@if($errors->any())
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif

<form action="{{ route('supports.store') }}" method="POST">
    {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
    @csrf
    <input type="text" placeholder="assunto" name="subject" value="{{ old('subject') }}">
    <textarea name="body" rows="5" placeholder="descrição">{{ old('body') }}</textarea>
    <button type="submit">Enviar</button>
</form>