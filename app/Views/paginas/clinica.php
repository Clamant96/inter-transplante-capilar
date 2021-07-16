<section>
    <div class="pagina-servicos">
        <div class="banner-servicos">
            <p>A Clínica</p>
        </div>

        <div class="tipo-servico">
            <div class="texto-clinica">
                <h1>Quem somos</h1>
                <p>A equipe da <strong>Inter Capilar</strong> possui preocupação genuína em oferecer um atendimento humanizado e individualizado.</p>
                <p>A excelência está em nosso DNA, e comprometimento para atender as expectativas e necessidades dos pacientes. <br />Nosso objetivo é elevar a autoestima das pessoas que optam pela Inter Capilar, proporcionando-lhes uma melhor qualidade de vida. <br/>Nosso time é formado por profissionais capacitados e com ampla experiência em restauração capilar.</p>
                <p class="frase">Inter Capilar, é excelencia em resultado que você procura, com o cuidado que você merece!</p>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="telaCadastro">
        <h2>Entre em contato</h2>
        <form class="form" action="<?=URL?>/usuarios/cadastrar" method="POST">
            <div class="container-form">
                <div class="nome">
                    <label for="nome">Nome <b>*</b></label>
                    <input type="text" id="nome" name="nome" placeholder="Nome" value="<?=$dados['nome']?>" />
                </div>
                <div class="nome">
                    <label for="email">E-mail <b>*</b></label>
                    <input type="text" id="email" name="email" placeholder="E-mail" value="<?=$dados['email']?>" />
                </div>
                <div class="nome">
                    <label for="cel">Telefone <b>*</b></label>
                    <input type="text" id="cel" name="cel" placeholder="DDD + Telefone" value="<?=$dados['cel']?>" />
                </div>
                <div class="nome">
                    <label for="msg">Mensagem <b>*</b></label>
                    <textarea type="text" id="msg" name="msg" rows="10" placeholder="Escreva sua mensagem..." value="<?=$dados['msg']?>" ></textarea>
                </div>
                <!--<div class="nome">
                    <label for="senha">Senha <b>*</b></label>
                    <input type="password" id="senha" name="senha" placeholder="Senha" value="<?=$dados['senha']?>" />
                </div>
                <div class="nome">
                    <label for="confirmaSenha">Confirmar Senha <b>*</b></label>
                    <input type="password" id="confirmaSenha" name="confirmaSenha" placeholder="Confirmar Senha" value="<?=$dados['confirmar_senha']?>" />
                </div>-->
                <div class="botoes">
                    <div class="avancar">
                        <button type="submit">
                            <p>Enviar</p>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

<!-- BOTAO WHATSAPP -->
<a href="https://api.whatsapp.com/send?phone=5511972228292&text=Ol%C3%A1%20visitante%2C%20seja%20bem-vindo%20logo%20irei%20lhe%20atender.%20" target="_blank" class="botao-whatsapp">
    <div class="avaliacao-gratuita">
        <p>Agende avaliação gratuita</p>
        <div class="triangulo">

        </div>
    </div>
    <div class="dados-whatsapp">
        <div class="icon">
            <svg id="ativarModal" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
            </svg>
        </div>
        <p>WhatsApp</p>
    </div>
</a>