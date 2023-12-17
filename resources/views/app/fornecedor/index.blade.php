<h3>fornecedor</h3>
{{--comemtario--}}
@isset($fornecedores)
     @foreach($fornecedores as $indice => $key)    
        fornecedor:{{$indice['nome']}}<br>
        status:{{$indice['status']}}<br>
        CNPJ:{{$indice['cnpj']}}<br>
        telefone:{{$indice['ddd']}}{{$indice['telefone']}}
        <br>
    @endforeach
@endisset
<br>
