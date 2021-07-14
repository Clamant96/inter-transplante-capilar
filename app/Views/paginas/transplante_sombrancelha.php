<section>
    <div class="pagina-servicos">
        <div class="banner-servicos">
            <p>Transplante de Sobrancelhas</p>
        </div>

        <div class="tipo-servico">
            <div class="img">
                <img src="<?=URL?>/public/img/sombrancelha_masculina.png" alt="Transplante de Sombrancelha">
            </div>
            <div class="texto">
                <h1>Transplante de Sobrancelhas</h1>
                <p>As sobrancelhas são elementos importantes na harmonização e expressão facial, afinal,  preenche, dá volume e destaca o olhar com bastante naturalidade. Entretanto, percebe-se inúmeros relatos de homens e mulheres com queixas relacionadas à assimetria ou falhas na região dos supercílios, resultando em constante insatisfação.</p>
                <p>Seja por falhas decorrentes de cicatrizes, excesso de retirada dos fios ou hipotireoidismo, essa situação é bastante comum. A boa notícia nesses casos é que, embora ainda pouco conhecido, já existe a possibilidade de aproveitar os benefícios do transplante capilar para preencher falhas ou aumentar e até mesmo diminuir o volume das sobrancelhas.</p>
                <p>Para isso, são utilizadas unidades foliculares com raízes individuais, retiradas do couro cabeludo e transplantadas fio a fio na região das sobrancelhas, considerando a direção e angulação do rosto de cada paciente. Por ser realizado a partir do próprio pelo da pessoa, deixa um aspecto natural.</p>
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
                    <label for="mensagem">Mensagem <b>*</b></label>
                    <textarea type="text" id="mensagem" name="mensagem" rows="10" placeholder="Escreva sua mensagem..." ></textarea>
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