<h1>Dúvida: {{ $support->id }}</h1>

@if($errors->any())
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif

<form action="{{ route('supports.update', $support->id) }}" method="POST">
    {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
    @csrf
    @method('put')
    <input type="text" placeholder="assunto" name="subject" value="{{ $support->subject }}">
    <textarea name="body" rows="5" placeholder="descrição">{{ $support->body }}</textarea>
    <button type="submit">Enviar</button>
</form>