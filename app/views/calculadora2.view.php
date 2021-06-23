<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Calculadora Estágio </title>

    <link rel="stylesheet" href="../../public/css/styles.css">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="../../public/css/categorias.css" rel="stylesheet">
</head>

<body>
    <h4 class="cabecalho"> ARTHUR DIAS VIEIRA MOREIRA (32) 998228846 ESTAGIO MEDMAIS </h4>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="mb-4">
            <h2>Criar Anotação</h2>
            <form action="/anotacao/create" method="POST">
                <div class="form-group">
                    <label for="inputAddress">Anotações</label>
                    <input type="text" name="nome" class="form-control" id="inputAddress" placeholder="Digite aqui a anotação" required>
                </div>
                <button type="submit" class="btn btn-primary">Criar</button>
            </form>
        </div>



        <h2>Anotações e resultados</h2>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th class="id">#</th>
                        <th class="anotação">Anotação</th>
                        <th class="categoriaeditar">Deletar</th>

                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($resultado as $res) : ?>
                        <?php require 'modal-delete.php' ?>
                        <tr>
                            <td class="id"><?= $res->id ?> </td>
                            <td class="name"><?= $res->name ?> </td>
                            <td class="categoriadeletar"><input type="image" data-toggle="modal" data-target="#delete<?= $res->id ?>" src="https://img.icons8.com/offices/30/000000/delete-sign.png"></input></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="calculadora">
                <h1>Calculadora</h1>
                <p id="result"> </p>
                <table>
                    <tr>
                        <td><button class="botao" onclick="clean()">C</button></td>
                        <td><button class="botao" onclick="delet('<')"><</button>                                
                        </td>
                        <td><button class="botao" onclick="insert('/')">/</button></td>
                        <td><button class="botao" onclick="insert('*')">X</button></td>
                    </tr>
                    <tr>
                        <td><button class="botao" onclick="insert('7')">7</button></td>
                        <td><button class="botao" onclick="insert('8')">8</button></td>
                        <td><button class="botao" onclick="insert('9')">9</button></td>
                        <td><button class="botao" onclick="insert('-')">-</button></td>
                    </tr>
                    <tr>
                        <td><button class="botao" onclick="insert('4')">4</button></td>
                        <td><button class="botao" onclick="insert('5')">5</button></td>
                        <td><button class="botao" onclick="insert('6')">6</button></td>
                        <td><button class="botao" onclick="insert('+')">+</button></td>
                    </tr>
                    <tr>
                        <td><button class="botao" onclick="insert('1')">1</button></td>
                        <td><button class="botao" onclick="insert('2')">2</button></td>
                        <td><button class="botao" onclick="insert('3')">3</button></td>
                        <td rowspan="2"><button class="botao" style="height:106px;" onclick="calcula()">=</button></td>

                    </tr>
                    <tr>
                        <td colspan="2"><button class="botao" style="width:106px;" onclick="insert('0')">0</button></td>
                        <td><button class="botao" onclick="insert('.')">.</button></td>
                    </tr>
                </table>

            </div>
        </div>
        <?php require 'script.php' ?>
        </div>
    </main>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace()
    </script>

</body>

</html>