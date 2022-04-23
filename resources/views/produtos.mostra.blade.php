<html>
<head>
<link href="/css/app.css" rel="stylesheet">
<title>Controle de estoque</title>
</head>
<body>
<div class="container">

    
    <h1>Listagem de Produtos</h1>
    <table class="table table-striped table-bordered table-hover">
    <tbody>
        <tr>
            <a href="/produtos/mostra/?id=1"></a>
        </tr>
    </tbody>
    </table>

    <a href="/produtos/mostra/?id={{$p->id}}">
        <span class="glyphicon glyphicon-search"></span>
    </a>


</div>
</body>
</html>
