<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- link font-awesome e css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    
    <link rel="stylesheet" href="src/css/styles.css">
    <link rel="stylesheet" href="src/css/header.css">
    <link rel="stylesheet" href="src/css/custom.css">

    <title>Barber Shop Website</title>
</head>
<body>
    <!-- topo da página com o menu de navegação -->
    <header>
        <nav id="navbar">
            <div class="nav-logo">
                <i class="fa-solid fa-shop"></i>
            </div>

            <ul class="nav-list">
                <li class="nav-item-active">
                    <a href="#home">Início</a>
                </li>

                <li class="nav-item">
                    <a href="ava.php">Avaliações</a>
                </li>

                <li class="nav-item">
                    <a href="about.php">Sobre nós</a>
                </li>
            </ul>

            <button class="btn-default">
                <a href="form.php">Agendar horário</a> 
            </button>

            <!-- botão para página responsiva / mobile -->
            <button class="btn-mobile">
                <i class="fa-solid fa-bars"></i>
            </button>
        </nav>

        <!-- menu responsivo / mobile -->
        <div id="mobile_menu">
            <ul class="nav-list-mobile">
                <li class="nav-item">
                    <a href="#home">Início</a>
                </li>

                <li class="nav-item">
                    <a href="#">Avaliações</a>
                </li>

                <li class="nav-item">
                    <a href="#">Sobre nós</a>
                </li>
            </ul>

            <button class="btn-default">
                <a href="form.php">Agendar horário</a> 
            </button>
        </div>
    </header>

    <!-- tela principal da landing page -->
    <main id="content">

        <!-- parte principal com título e descrição da página -->
        <section id="hero">
            <div class="hero-content">
                <div class="left-section">
                    <h2 class="title">
                        Bem-vindo à Barber Shop
                    </h2>
                    <p class="description">
                        Na Barber Shop, tradição e modernidade se encontram. Oferecemos cortes clássicos e estilos contemporâneos, realizados por barbeiros especialistas que utilizam produtos de alta qualidade. Nosso ambiente é acolhedor e sofisticado, garantindo conforto e satisfação em cada visita.
                    </p>
                </div>

                <img src="src/images/barbershop.jpg" alt="Barber Shop">
            </div>
        </section>

        <!-- seção de avaliações e depoimentos de clientes -->
        <section id="testimonials">
            <p class="testimonials-title">
                Avaliações
            </p>

            <h2 class="testimonials-description">
                Confira as avaliações e descubra por que somos a escolha preferida de muitos
            </h2>

            <div class="items-testimonials">
                <!-- primeiro cliente -->
                <div class="item">
                    <img src="src/images/man1.jpg" alt="Foto de cliente">

                    <p class="name">
                        Gustavo Almeida

                        <span>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </span>
                    </p>
                    <p class="testimonial">
                        Serviço excelente! Os barbeiros são muito atenciosos e os cortes sempre ficam perfeitos. Recomendo a todos!
                    </p>
                </div>

                <!-- segundo cliente -->
                <div class="item">
                    <img src="src/images/man2.jpg" alt="Foto de cliente">

                    <p class="name">
                        Felipe Costa

                        <span>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </span>
                    </p>
                    <p class="testimonial">
                        Ambiente incrível e profissionais de primeira. Saio sempre satisfeito e com um visual impecável.
                    </p>
                </div>
                
                <!-- terceiro cliente -->
                <div class="item">
                    <img src="src/images/man3.jpg" alt="Foto de cliente">
                    
                    <p class="name">
                        Ricardo Silva

                        <span>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </span>
                    </p>
                    <p class="testimonial">
                        Melhor barbearia da cidade! Atendimento excelente e ambiente super agradável. Recomendo a todos.
                    </p>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>© 2024 Barber Shop | ATP1 - PUCPR -  Todos os direitos reservados.</p>
    </footer>
</body>
</html>
