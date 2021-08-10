<!-- CARROCEL -->
<section>
    <div class="banner">
        <img src="<?=URL?>/public/img/banner_chamada_01.png" style="width:100%">
    </div>
    <div class="banner-celular">
        <div class="img">
            <img src="<?=URL?>/public/img/banner_chamada_02.png" style="width:100%">
        </div>
    </div>
</section>

<!-- SOBRE A TECNICA -->
<section>
    <div class="sobre-tecnica">
        <div class="bloco">
            <h2>Técnica <p>fue</p></h2>
            <h3>Transplante capilar</h3>
            <h4>Sem cicatriz LInear</h4>
            <h5>Faça uma avaliação</h5>
        </div>
        <div class="img">
            <!--<img src="<?=URL?>/public/img/sobre_tecnica.png" alt="">-->
        </div>
    </div>
</section>

<!-- SERVICOS -->
<section>
    <div class="servicos">
        <div class="quadro">
            <a href="<?=URL?>/paginas/transplanteMasculino" class="img">
                <img src="<?=URL?>/public/img/transplante_masculino.png" alt="Transplante de sobrancelha">
            </a>
            <div class="texto">
                <p>Transplante Masculino</p>
            </div>
        </div>
        <div class="quadro">
            <a href="<?=URL?>/paginas/transplanteSombrancelha" class="img">
                <img src="<?=URL?>/public/img/sombrancelha_masculina.png" alt="Transplante de barba">
            </a>
            <div class="texto">
                <p>Transplante Sombrancelha</p>
            </div>
        </div>
        <div class="quadro">
            <a href="<?=URL?>/paginas/transplanteBarba" class="img">
                <img src="<?=URL?>/public/img/transplante_barba.png" alt="Cirurgia de redução de testa">
            </a>
            <div class="texto">
                <p>Transplante de Barba</p>
            </div>
        </div>
        <div class="quadro">
            <a href="<?=URL?>/paginas/usoPelosCorporais" class="img">
                <img src="<?=URL?>/public/img/body_haeir.png" alt="Transplante capilar feminino">
            </a>
            <div class="texto">
                <p>Uso de pelos corporais</p>
                <h2>Para pacientes com calvície extensa e <br />área doadora escassa</h2>
            </div>
        </div>
        <div class="quadro">
            <a href="<?=URL?>/paginas/mesoterapiaCapilar" class="img">
                <img src="<?=URL?>/public/img/transplante_capilar.png" alt="Transplante capilar feminino">
            </a>
            <div class="texto">
                <p>Mesoterapia Capilar</p>
                <h2>Substâncias injetáveis que <br />interrompem a queda capilar</h2>
            </div>
        </div>
        <div class="quadro">
            <a href="<?=URL?>/paginas/recesso" class="img">
                <img src="<?=URL?>/public/img/reducao_testa.png" alt="Transplante capilar feminino">
            </a>
            <div class="texto">
                <p>Recesso</p>
                <h2>Redução de testa <br /> e calvície feminina</h2>
            </div>
        </div>
    </div>
</section>

<!-- ENDERECO -->
<section>
    <div class="endereco">
        <div class="local">
            <h2>Região de antendimento</h2>
            <strong>Onde estamos</strong>
            <p>Situada no bairro Lapa, região nobre da cidade de São Paulo.</p>
            <h3>Rua Marcilio Dias, 109 - Lapa São Paulo/SP - 05077-120</h3>
            <h3><?=APP_CEL?></h3>
            <!--<a href="#">Conheça a nossa equipe</a>-->
            <a>Faça uma avaliação on-line ou agende uma consulta. <br/><br/>Lembramos que a avaliação on-line não substitui a consulta média pré cirúrgica.</a>
        </div>
        <div class="carrocel-endereco">
            <div class="img">
                <img src="<?=URL?>/public/img/slide_endereco_1.jpg" alt="<?=APP_ENDERECO?>">
            </div>
            <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.2159292484016!2d-46.71342288502278!3d-23.524734884701083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef888524e6fbd%3A0x4b689e8b5b607793!2sRua%20Marcilio%20Dias%2C%20109%20-%20Lapa%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2005077-120!5e0!3m2!1spt-BR!2sbr!4v1625872265955!5m2!1spt-BR!2sbr" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</section>

<!-- COMENTARIOS -->
<!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_quotes_slideshow -->
<section>
    <div class="comentarios">
        <h2>Depoimentos</h2>
        <div class="slideshow-container">

            <div class="postagens">
                <q>Deixo aqui minha mensagem de agradecimento a toda a equipe da Inter Transplante Capilar, vocês ajudaram a realizar um sonho que era de ter mais cabelos em minha entradas.</q>
                <p class="autor">C. A. L. <strong>34 anos</strong></p>
            </div>

            <div class="postagens">
                <q>Atendimento excelente e profissionais super qualificados!</q>
                <p class="autor">Renato Mello</p>
            </div>

            <div class="postagens">
                <q>Excelentes profissionais e os melhores resultados.</q>
                <p class="autor">Ricardo Aurélio</p>
            </div>

            <div class="postagens">
                <q>Profissionais incriveis e muito atenciosos!<br/>Super recomento!</q>
                <p class="autor">Bruno Mendes</p>
            </div>

            <div class="postagens">
                <q>Excelentes profissionais, gostaria de deixar meus parabens a toda a equipe da clínica.<br/>Recomento com certeza!</q>
                <p class="autor">Aluizio de Vasconcelos</p>
            </div>

            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a>

        </div>
    </div>
</section>

<!-- ACORDEON -->
<section id="acordeon">
    <div class="acordeon">
        <h2>Duvidas</h2>
        <button class="accordion">O cabelo transplantado pode cair com o passar dos anos?</button>
        <div class="panel">
            <p>Não, pois os folículos transplantados preservam a "memória" genética da região doadora, ou seja, mesmo sendo transplantado para a área calva, não afinam ou caem com o tempo.</p>
        </div>

        <button class="accordion">Meu cabelo ficará com o aspecto de “cabelo de boneca”?</button>
        <div class="panel">
            <p>NUNCA, pois a técnica utilizada é o transplante capilar de unidades foliculares, ou seja, imitamos o que acontece naturalmente com os seus fios. O resultado tipo “cabelo de boneca” acontece quando se utiliza a técnica de punch, já bastante ultrapassada, quando eram transplantados vários (10 a 20) folículos por orifício. Nossa meta é a naturalidade!</p>
        </div>

        <button class="accordion">Em quanto tempo o resultado da cirurgia ficará visível?</button>
        <div class="panel">
            <p>Saindo do centro cirúrgico o paciente terá uma pequena noção do resultado da cirurgia, em até 45 dias esses fios transplantados quebram na base, permanecendo no couro cabeludo as unidades foliculares que em até 90 dias produzirão novos fios. Quando esses fios começarem a crescer, seguirão o ritmo de crescimento normal dos cabelos do paciente, ou seja, 1 centímetro por mês. A visibilidade do resultado ocorre de forma gradativa, conforme os fios crescem. Entre o 5º e 6º mês, nota-se grande diferença em termos de repilação e perto do 9º mês o resultado já estará bem próximo do final. Que será finalizado com 12º meses.</p>
        </div>

        <button class="accordion">O que causa a calvície?</button>
        <div class="panel">
            <p>A causa mais comum é a hereditária (genética) e os homens são os mais afetados. Embora existam várias causas de queda de cabelo, ao redor de 90% do total de perda capilar é causada por uma doença conhecida como Alopecia Androgenética, em que há maior sensibilidade à ação hormonal da di-hidrotestosterona, o que estimula o afinamento dos fios. Após o seu início, em geral, o que ocorre é um quadro lento e progressivo de perda capilar.</p>
        </div>

        <button class="accordion">A cirurgia é dolorida? Há dor no pós-operatório?</button>
        <div class="panel">
            <p>Um anestésico local é administrado, que deve eliminar o desconforto durante o procedimento de transplante capilar. O desconforto durante o pós-operatório é controlado com a utilização de analgésicos e anti-inflamatórios nas primeiras horas após a cirurgia. A grande maioria dos pacientes relata que o processo é confortável, tanto durante como após a cirurgia. Após a cirurgia é fornecido um esquema de analgesia para a prevenção da dor ao paciente, para os primeiros dois dias de pós-operatório.</p>
        </div>

        <button class="accordion">Quantos fios serão colocados? De quantos fios eu preciso? Quantas sessões serão necessárias?</button>
        <div class="panel">
            <p>Essa resposta depende de quantos fios já foram perdidos, depende da densidade capilar do paciente e da avaliação da sua área doadora. Cada caso é individualmente avaliado, para avaliação das expectativas do paciente, da área a ser preenchida por novos fios e de quantas unidades foliculares o paciente pode doar (avaliação da área doadora). A ideia é sempre colocar o maior número possível de fios por sessão.</p>
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
<a href="https://api.whatsapp.com/send?phone=5511957787682&text=Ol%C3%A1%2C%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es%20sobre%20transplante%20capilar." target="_blank" class="botao-whatsapp">
    <div class="avaliacao-gratuita">
        <p>Avaliação on-line</p>
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

<!--
<div id="meuModal" class="modal">

  <div class="modal-content">
    <span class="fecharModal">&times;</span>
    
    <div class="campos">
        <div class="logo">
            <img src="<?=URL?>/public/img/logo_site_cortado.png" alt="<?=APP_NOME?>">
        </div>

        <form class="form" action="<?=URL?>/usuarios/cadastrar" method="POST">
            <div class="container">
                <div class="input">
                    <label for="nome">Nome <b>*</b></label>
                    <input type="text" id="nome" name="nome" placeholder="Nome Completo" value="<?=$dados['nome']?>" />
                </div>
                <div class="input">
                    <label for="email">E-mail <b>*</b></label>
                    <input type="text" id="email" name="email" placeholder="email.teste@gmail.com" value="<?=$dados['email']?>" />
                </div>
                <div class="input">
                    <label for="cel">Telefone <b>*</b></label>
                    <input type="text" id="cel" name="cel" placeholder="(11) 9-9999-9999" value="<?=$dados['cel']?>" />
                </div>
                <div class="input">
                    <label for="sexo">Sexo <b>*</b></label>
                    <input type="text" id="sexo" name="sexo" placeholder="M, F ou E" value="<?=$dados['sexo']?>" />
                </div>
                <div class="botoes">
                    <button type="submit">
                        <p>Cadastrar-se</p>
                    </button>
                </div>
            </div>
        </form>
    </div>

  </div>

</div>
-->