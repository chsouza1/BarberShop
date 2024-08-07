<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/agenda.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Agendamento - Barber Shop</title>
</head>
<body>
    <header>
        <nav id="navbar">
            <div class="nav-logo">
                <i class="fa-solid fa-shop"></i>
            </div>

            <ul class="nav-list">
                <li class="nav-item">
                    <a href="index.html">Início</a>
                </li>

                <li class="nav-item">
                    <a href="ava.html">Avaliações</a>
                </li>

                <li class="nav-item">
                    <a href="about.html">Sobre nós</a>
                </li>
            </ul>

            <button class="btn-default">
                <a href="form.html">Agendar horário</a> 
            </button>

            <button class="btn-mobile">
                <i class="fa-solid fa-bars"></i>
            </button>
        </nav>

        <div id="mobile_menu">
            <ul class="nav-list-mobile">
                <li class="nav-item">
                    <a href="index.html">Início</a>
                </li>

                <li class="nav-item">
                    <a href="ava.html">Avaliações</a>
                </li>

                <li class="nav-item">
                    <a href="about.html">Sobre nós</a>
                </li>
            </ul>

            <button class="btn-default">
                <a href="form.html">Agendar horário</a> 
            </button>
        </div>
    </header>

    <main>
        <section class="form-section">
            <h1>Agendar Horário</h1>
            <form id="agenda-form" action="formAction.html" method="get">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="telefone">Telefone:</label>
                    <input type="tel" id="telefone" name="telefone" required>
                </div>
                <div class="form-group">
                    <label for="data">Data:</label>
                    <input type="date" id="data" name="data" required>
                </div>
                <div class="form-group">
                    <label for="horario">Horário:</label>
                    <input type="time" id="horario" name="horario" required>
                </div>
                <button type="submit" class="btn-default">Agendar</button>
            </form>
        </section>
    </main>

    <footer>
        <p>© 2024 Barber Shop | ATP1 - PUCPR - Todos os direitos reservados.</p>
    </footer>

    <script src="src/js/script.js"></script>
</body>
</html>
