<div class="col-sm-8">
         <h4>Dados Pessoais</h4>
         <form action="pagamento/" method="POST">
          <div class="form-row">
            <div class="form-group col-sm-6">
              <label>Nome</label>
              <input type="text" name="nome" class="form-control" required/>
            </div>

            <div class="form-group col-sm-6">
              <label>Sobrenome</label>
              <input type="text" name="sobrenome" class="form-control" required/>
            </div>

            <div class="form-group col-sm-6">
              <label>Email</label>
              <input type="email" name="email" class="form-control" required/>
            </div>

            <div class="form-group col-sm-6">
              <label>Telefone</label>
              <input type="text" name="telefone" class="form-control" required/>
            </div>
          </div>
      </div>

      <div class="col-sm-4">
        <h4>Valores e pagamento</h4>
        <label>Quanto deseja pagar?</label>
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <label class="input-group-text">R$</label>
          </div>
          <input type="text" name="valor" class="form-control" required/>
        </div>
        <input type="submit" value="Ir para pagamento" class="btn btn-outline-success btn-lg btn-block">
         </form>
      </div>