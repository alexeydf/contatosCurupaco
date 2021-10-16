<section class="formulario">
  <div class="titulo">
    <h3>Envie uma mensagem</h3>
  </div>

  <form method="POST" action="index.php?menuop=receber" class="form">
    <input type="text" name="nome" placeholder="Nome" id="">
    <input type="text" name="ddd" placeholder="DDD" id="">
    <input type="tel" name="telefone" placeholder="Telefone" id="">
    <input type="email" name="email" placeholder="E-mail" id="">
    <select name="assunto" id="">
      <option value="">-- Assunto --</option>
      <option value="Orçamento">Orçamento</option>
      <option value="Informações">Informações</option>
      <option value="Dúvidas">Dúvidas</option>
      <option value="Outros">Outros</option>
    </select>
    <textarea placeholder="Digite sua menssagem..." name="mensagem" id="" cols="30" rows="10"></textarea>
    <button type="submit">Enviar</button>
  </form>
</section>