<section>
    <div class="telaCadastro">
        <form class="form" action="<?=URL?>/usuarios/cadastrar" method="POST">
            <div class="container-form">
                <div class="nome">
                    <label for="nome">Nome <b>*</b></label>
                    <input type="text" id="nome" name="nome" placeholder="Nome Completo" />
                </div>
                <div class="nome">
                    <label for="email">E-mail <b>*</b></label>
                    <input type="text" id="email" name="email" placeholder="email.teste@gmail.com" />
                </div>
                <div class="nome">
                    <label for="cel">Telefone <b>*</b></label>
                    <input type="text" id="cel" name="cel" placeholder="(11) 9-9999-9999" />
                </div>
                <div class="nome">
                    <label for="sexo">Sexo <b>*</b></label>
                    <input type="text" id="sexo" name="sexo" placeholder="M, F ou E" />
                </div>
                <div class="botoes">
                    <div class="avancar">
                        <button type="submit">
                            <div class="icon">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                                    <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                    <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                                </svg>
                            </div>
                            <p>Enviar</p>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>