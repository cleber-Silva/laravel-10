<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Nova Duvida</h1>
    <form method="post" action="{{ route('supports.store') }}">
        <!-- <input type="hidden" name="_token" value="{{  csrf_token() }}"/> -->
        @csrf();
        <input type="text" placeholder="Assunto" name="subject" value="" required >
        <textarea name="body" id="" cols="30" rows="5" placeholder="Descricao"></textarea>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>