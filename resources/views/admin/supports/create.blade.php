<h1>Nova dúvida</h1>

<form action="{{ route('supports.store') }}" method="POST">
    {{-- <input type="hidden" value="{{ csrf_token() }}" name="_token"> --}}
    @csrf
    <input type="text" placeholder="assunto" name="subject">
    <textarea name="body" rows="5" placeholder="descrição"></textarea>
    <button type="submit">Enviar</button>
</form>