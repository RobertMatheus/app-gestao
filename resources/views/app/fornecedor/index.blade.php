<h3>fornecedor</h3>
{{--comemtario--}}
@isset($fornecedores)
    fornecedor:{{$fornecedores[0]['nome']}}<br>
    status:{{$fornecedores[0]['status']}}<br>
    CNPJ:{{$fornecedores[0]['cnpj']}}<br>
    telefone:{{$fornecedores[0]['ddd']}}{{$fornecedores[0]['telefone']}}
    
@endisset
<br>
@for ($i = 0; $i < $count; $i++)
    
@endfor