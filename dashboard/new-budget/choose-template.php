<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoBudget</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/styles/styles.css">
    <link rel="stylesheet" href="../../assets/styles/login.css">
</head>
<body class="text-center" style="background: #FFF !important;">
    
    <div class="form-signin">
        <img src="../../assets/imgs/choose-template-placeholder.jpg" alt="" class="img-fluid">
        <h4 class="text-secondary"> Escolha o template a ser utilizado no orçamento. </h4>

        <div class="p-3 rounded bg-light mb-3">
            <img src="../../assets/imgs/template1-placeholder.jpg" alt="" class="img-fluid">
            <div class="d-flex justify-content-between mt-3">
                <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#modalExemplo1"> Ver modelo </a>
                <a href="template1/" class="btn btn-dark"> Usar modelo </a>
            </div>
        </div>

        <div class="p-3 rounded bg-light">
            <img src="../../assets/imgs/template2-placeholder.jpg" alt="" class="img-fluid">
            <div class="d-flex justify-content-between mt-3">
                <a href="#" class="btn btn-secondary" data-toggle="modal" data-target="#modalExemplo2"> Ver modelo </a>
                <a href="template2/" class="btn btn-dark"> Usar modelo </a>
            </div>
        </div>

    </div>


    <div class="modal" id="modalExemplo1" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Detalhes template 1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img src="../../assets/imgs/template1-placeholder.jpg" alt="" class="img-fluid"> 
      </div>
    </div>
  </div>
</div>

<div class="modal" id="modalExemplo2" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Detalhes template 2</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img src="../../assets/imgs/template2-placeholder.jpg" alt="" class="img-fluid"> 
      </div>
    </div>
  </div>
</div>



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>