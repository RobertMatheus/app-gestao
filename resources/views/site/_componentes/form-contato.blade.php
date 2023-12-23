{{$slot}}
<div class="contato-principal">
    <form>
        <input name="nome" type="text" placeholder="Nome" class="borda-preta">
        <br>
        <input name="nub" type="nunber" placeholder="Telefone" class="borda-preta">
        
        <br>
        <input name="tell" type="email" placeholder="E-mail" class="borda-preta">
        <br>
        <select name="motivo-contato" class="borda-preta">
            <option value="1">Qual o motivo do contato?</option>
            <option value="2">Dúvida</option>
            <option value="3">Elogio</option>
            <option value="4">Reclamação</option>
        </select>
        <br>
        <textarea name="menssagem" class="borda-preta">Preencha aqui a sua mensagem</textarea>
        <br>
        <button type="submit" class="borda-preta">ENVIAR</button>
    </form>
</div>