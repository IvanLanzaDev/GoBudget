<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

    <div class="container-fluid">
        <div class="header-dashboard py-4 d-flex justify-content-between align-items-center">

            <h4 class="text-light">Olá <br><span>Cliente</span></h4>
            

            <div class="dropdown dropright">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Menu
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Alguma ação</a>
                    <a class="dropdown-item" href="#">Outra ação</a>
                    <a class="dropdown-item" href="#">Alguma coisa aqui</a>
                </div>
            </div>

        </div>

        <form class="form-inline d-flex justify-content-between">
            <div class="form-group col-10 px-0">
            <input type="text" class="form-control" id="inlineFormInputName2" placeholder="Buscar orçamento">
            </div>

            <div class="form-group">
            <button type="submit" class="btn btn-secondary"><i class="fas fa-search"></i></button>
            </div>

        </form>

    </div>

</body>
</html>