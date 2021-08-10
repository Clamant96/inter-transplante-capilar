<!-- IMPLEMENTAR RESPONSIVE TOP NAV -->
<!-- https://www.w3schools.com/howto/tryit.asp?filename=tryhow_js_topnav -->
<header>
    <!-- HEADER BARRA SUPERIOR -->
    <div class="header-top">
        <div class="informacao">
            <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg>
            </div>
            <div class="texto">
                <p>Rua Marcilio Dias, 109 - Lapa <strong>São Paulo/SP</strong></p>
            </div>
        </div>
        <div class="contatos">
            <div class="bloco">
                <div class="icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                    </svg>
                </div>
                <p>Avaliação On-line</p>
            </div>
        </div>
    </div>
    <!-- HEADER MENU -->
    
    <div class="header-menu">
        <a href="<?=URL?>/paginas/home" class="logo home-celular">
            <img src="<?=URL?>/public/img/logo_site_cortado.png" alt="<?=APP_NOME?>">
        </a>
        <!--<div class="menu">
            <ul>
                <a href="#"><li>Home</li></a>
                <a href="#"><li>Equipe Médica</li></a>
                <a href="#"><li>Clínica</li></a>
                <a href="#"><li>Tratamentos</li></a>
                <a href="#"><li>Entre em Contato</li></a>
            </ul>
        </div>-->
        <div class="topnav" id="menuResposivo">
            <a href="<?=URL?>/paginas/home" class="logo-celular" >
                <img src="<?=URL?>/public/img/logo_site_cortado.png" alt="<?=APP_NOME?>">
            </a>
            <a href="<?=URL?>/paginas/home" class="home-celular">Home</a>
            <a href="<?=URL?>/paginas/sobreClinica">A Clínica</a>
            <a class="redimencionado" href="#">Transplante masculino</a>
            <a class="redimencionado" href="#">Transplante sombrancelha</a>
            <a class="redimencionado" href="#">Transplante de barba</a>
            <a class="redimencionado" href="#">Uso de pelos corporais</a>
            <a class="redimencionado" href="#">Mesoterapia capilar</a>
            <a class="redimencionado" href="#">Recesso</a>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Tratamento</a>
                <div class="dropdown-content">
                    <a href="<?=URL?>/paginas/transplanteMasculino">Transplante masculino</a>
                    <a href="<?=URL?>/paginas/transplanteSombrancelha">Transplante sobrancelhas</a>
                    <a href="<?=URL?>/paginas/transplanteBarba">Transplante de barba</a>
                    <a href="<?=URL?>/paginas/usoPelosCorporais">Uso de pelos corporais</a>
                    <a href="<?=URL?>/paginas/mesoterapiaCapilar">Mesoterapia capilar</a>
                    <a href="<?=URL?>/paginas/recesso">Recesso</a>
                </div>
            </li>
            <a href="<?=URL?>/paginas/home#acordeon" >Dúvidas</a>
            <a href="#footer">Contato</a>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
            </a>
        </div>
    
    </div>
</header>