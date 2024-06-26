<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles\Styles.css">
    <title>Formulário</title>
    <link rel="shortcut icon" type="imagex/png" href="./img/5949930.png">
  </head>
  <body>

    <div class="custom-control custom-switch py-3" style="margin-left: 30px;">
      <input type="checkbox" class="custom-control-input" id="darkSwitch" />
      <label class="custom-control-label" for="darkSwitch">Modo Escuro</label>
    </div>

   
    
    <section>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-9">


            <form id="form" class="needs-validation" novalidate>
              <div class="form-group">
                <input class="form-control" placeholder="Nome" id="Nome" type="text" required />
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Idade" id="Idade" type="text" required />
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Email" id="Email" type="email" required/>
                
              </div>
              
              <button type="submit" class="btn btn-primary" onclick="validForm()">Enviar Form</button>
            </form>
          </div>
        </div>
      </div>
    </section>
  
    
    <section>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-10">
            <table id="infoTable" class="table">
              <thead>
                <tr>
                  <th>Nome</th>
                  <th>Idade</th>
                  <th>Email</th>
                </tr>
              </thead>
              <tbody>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>


    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <button id="clearButton" class="btn btn-primary">Limpar Informações</button>
        </div>
      </div>
    </div>


  
  <footer class="footer mt-auto py-3 bg-dark">
      <div class="container text-center">
          <p class="text_footer text-white mb-2">FORMS DO JEAN</p>
          <p class="text-muted">© 2024 Todos os direitos reservados</p>
          <div>
              <a href="./pages/termo.php" target="_blank" class="text-white">Termos de Serviço</a>
              <a target="_blank" class="text-white"> | </a> 
              <a href="./pages/politica.php" target="_blank" class="text-white">Política de Privacidade</a>
          </div>
      </div>
  </footer>
  
    

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="js\Main.js"></script>
  
  </body>
</html>
