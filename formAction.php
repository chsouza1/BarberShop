<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/formAction.css">
    <title>Receber Dados Agendamento</title>
    <script>
        function getQueryParams() {
            const params = {};
            const queryString = window.location.search.substring(1);
            const queries = queryString.split('&');
            queries.forEach(query => {
                let [key, value] = query.split('=');
                key = decodeURIComponent(key.replace(/\+/g, ' '));
                value = decodeURIComponent(value.replace(/\+/g, ' '));
                params[key] = value;
            });
            return params;
        }

        function formatDateToBR(dateString) {
            const date = new Date(dateString);
            return date.toLocaleDateString('pt-BR');
        }

        function capitalizeFirstLetter(string) {
            return string.toLowerCase().replace(/\b\w/g, char => char.toUpperCase());
        }

        function displayParams() {
            const params = getQueryParams();
            const output = document.getElementById('output');
            output.innerHTML = '';

            for (const key in params) {
                if (params.hasOwnProperty(key)) {
                    const p = document.createElement('p');
                    let value = params[key];
                    if (key.toLowerCase().includes('data')) {
                        value = formatDateToBR(value);
                    }
                    if (key.toLowerCase() === 'nome') {
                        value = capitalizeFirstLetter(value);
                    }
                    p.textContent = `${capitalizeFirstLetter(key)}: ${value}`;
                    output.appendChild(p);
                }
            }
        }

        window.onload = displayParams;
    </script>
</head>
<body>
    <h1>Agendamento Feito Com Sucesso 😁</h1>
    <div id="output"></div>
    <button onclick="window.location.href='index.html'">Voltar ao Menu Principal</button>
</body>
</html>
