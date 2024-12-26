
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>En Mantenimiento</title>
    <style>
        /* Estilo para o overlay (fundo escurecido) */
        .overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.1); /* Opacidade do fundo ajustada */
            z-index: 9999;
            justify-content: center;
            align-items: center;
        }

        /* Estilo para o conteúdo do pop-up */
        .popup {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            width: 80%;
            max-width: 600px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Estilo para o título em vermelho */
        .popup h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #FF0000; /* Cor vermelha para o título */
        }

        .popup p {
            font-size: 18px;
            line-height: 1.5;
        }
    </style>
</head>
<body>
    <!-- Overlay de fundo -->
    <div class="overlay" id="popupOverlay">
        <!-- Conteúdo do pop-up -->
        <div class="popup">
            <img src="https://mapa.iberculturaviva.org/assets/img/logo-site.img.10zlshu.png" alt="Logo" width="200">
            <h2>en mantenimiento</h2>
            <p>volveremos pronto</p>
        </div>
    </div>

    <script>
        // Função para mostrar o pop-up
        function showPopup() {
            const popupOverlay = document.getElementById('popupOverlay');
            popupOverlay.style.display = 'flex';
        }

        // Exibir o pop-up assim que a página for carregada
        window.onload = function() {
            showPopup();
        };
    </script>
</body>
</html>
