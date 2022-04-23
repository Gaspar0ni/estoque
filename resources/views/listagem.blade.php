<head>
<link rel="stylesheet" href="/css/app.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
</head>


<h1>Listagem de produtos</h1>
<table class="table table-striped table-bordered table-hover">
    @dd($produtos)
    @foreach ($produtos as $p)
        <tr>
            <td>{{$p->nome }} </td>
            <td>{{$p->valor }} </td>-
            <td>{{$p->descricao }} </td>-
            <td>{{$p->quantidade }} </td>
            <td>
                <a href="/produtos/mostra>">
                    <span class="glyphicon glyphicon-search"></span>
                </a>
            </td>
        </tr>
    @endforeach
</table>

{{-- https://getbootstrap.com/docs/3.4/css/
• table-striped para zebrar as linhas
• table-bordered para adicionar bordas
• table-hover para efeito de hover --}}
