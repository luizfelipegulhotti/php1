<?php
$page_title = "Secretaria da Igreja";
$current_page = "home";
include 'includes/header.php';
?>

<section class="hero">
    <div class="hero-content">
        <div class="hero-text">
            <h1 class="subtitle">Paróquia Santo Estêvão</h1>
            <h2>Bem vindo ao Site</h2>
            <p>Aqui você pode ver eventos, horários, e marcar reuniões com padres.</p>
            <div class="buttons">
                <button class="photo-btn">Galeria de Fotos</button>
                <button class="video-btn"><i class="ri-play-circle-line"></i> Vídeos</button>
            </div>
        </div>
        <div class="hero-image">
            <img src="img/Captura de Tela (52).png" alt="">
        </div>
    </div>
</section>

<div class="cards">
    <div class="card">
        <a a href="agendamente.php" <?php echo (isset($_GET['page']) && $_GET['page'] == 'agendamento') ? 'class="active"' : ''; ?>>
            <i class="ri-map-pin-line"></i>
            <h3>agendamento</h3>
        </a>
    </div>
    <div class="card">
        <a href="?page=horarios">
            <i class="bi bi-clock"></i>
            <h3>horarios</h3>
        </a>
    </div>
    <div class="card">
        <a href="eventos.php">
            <i class="bi bi-calendar-event"></i>
            <h3>Eventos</h3>
        </a>
    </div>
    <div class="card">
        <a href="?page=dizimo">
            <i class="bi bi-heart"></i>
            <h3>dizimo</h3>
        </a>
    </div>
</div>

<div class="sobre">
    <h2 class="sobre">Sobre Nós</h2>
    <hr>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita doloribus rem corrupti quasi itaque et tenetur
        quam maxime pariatur, eius architecto id libero culpa illum quidem suscipit. Saepe, nisi at.</p>
</div>

<!-- grid -->
<div class="container">
    <div class="row">
        <div class="col-sm">
            <h2>seu titulo</h2>
            <img src="img/download (13).jfif" width="500px">
            <p>mais texto caso queira isso é só um esboço do esqueleto do site, vc vai vendo e avaliando oq acha</p>
        </div>
        <div class="col-sm">
            <h2>outro titulo interessante de boas</h2>
            <p>algum texto informativo ou curiosidade de sua escolha</p>
            <p> aqui pode ser um video, ou musica que gravaram</p>
            <img src="img/_Já está na hora de você se tornar quem você disse que seria__ Chega de… _ José Carlos Cavalcante.jfif" width="500px" height="500px">
        </div>
    </div>
</div>

<!-- carrosel -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="img/ab67706c0000da849dd6bce0d9e1e3373b475b7f.jfif" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://media.istockphoto.com/id/185005145/pt/foto/fundo-escuro-textura-de-tecido-preto.jpg?s=612x612&w=0&k=20&c=tyEJM9KUxVxQH0jnfqON5DxYLR-5QkYCV0szcjc6QsY=" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://media.istockphoto.com/id/185005145/pt/foto/fundo-escuro-textura-de-tecido-preto.jpg?s=612x612&w=0&k=20&c=tyEJM9KUxVxQH0jnfqON5DxYLR-5QkYCV0szcjc6QsY=" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="bg-fixed">
    <p>bd-fixed</p>
</div>

<h2 class="nossa">Nossa equipe</h2>
<hr>

<div class="carousel-container2">
    <div class="carousel2">
        <div class="card2" data-index="0">
            <div class="card-img2"><img src="img/milton-gregory-greco-12-02-2024-08-08-45 copy.jpg" alt=""></div>
            <h3>Título do Card 1</h3>
            <p>Descrição do card com algumas informações importantes sobre o conteúdo.</p>
        </div>
        <div class="card2" data-index="1">
            <div class="card-img2" style="background-color: #e74c3c;">Card 2</div>
            <h3>Título do Card 2</h3>
            <p>Descrição do card com algumas informações importantes sobre o conteúdo.</p>
        </div>
        <div class="card2" data-index="2">
            <div class="card-img2" style="background-color: #2ecc71;">Card 3</div>
            <h3>Título do Card 3</h3>
            <p>Descrição do card com algumas informações importantes sobre o conteúdo.</p>
        </div>
        <div class="card2" data-index="3">
            <div class="card-img2" style="background-color: #f39c12;">Card 4</div>
            <h3>Título do Card 4</h3>
            <p>Descrição do card com algumas informações importantes sobre o conteúdo.</p>
        </div>
        <div class="card2" data-index="4">
            <div class="card-img2" style="background-color: #9b59b6;">Card 5</div>
            <h3>Título do Card 5</h3>
            <p>Descrição do card com algumas informações importantes sobre o conteúdo.</p>
        </div>
    </div>
    <div class="navigation2">
        <button id="prev">Anterior</button>
        <button id="next">Próximo</button>
    </div>
    <div class="dots"></div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const cards = document.querySelectorAll('.card2');
        const dotsContainer = document.querySelector('.dots');
        const prevBtn = document.getElementById('prev');
        const nextBtn = document.getElementById('next');
        let currentIndex = 0;
        const totalCards = cards.length;

        // Criar os dots para navegação
        for (let i = 0; i < totalCards; i++) {
            const dot = document.createElement('div');
            dot.classList.add('dot');
            if (i === 0) dot.classList.add('active');
            dot.addEventListener('click', () => goToCard(i));
            dotsContainer.appendChild(dot);
        }

        // Inicialização
        updateCards();

        // Event listeners
        prevBtn.addEventListener('click', goToPrev);
        nextBtn.addEventListener('click', goToNext);

        // Funções
        function goToNext() {
            currentIndex = (currentIndex + 1) % totalCards;
            updateCards();
        }

        function goToPrev() {
            currentIndex = (currentIndex - 1 + totalCards) % totalCards;
            updateCards();
        }

        function goToCard(index) {
            currentIndex = index;
            updateCards();
        }

        function updateCards() {
            cards.forEach((card, index) => {
                card.classList.remove('active', 'prev', 'next', 'far-prev', 'far-next');

                // Calcular posição relativa ao card atual
                let position = (index - currentIndex + totalCards) % totalCards;

                if (position === 0) {
                    card.classList.add('active');
                } else if (position === 1 || position === (totalCards - 1)) {
                    card.classList.add(position === 1 ? 'next' : 'prev');
                } else if (position === 2 || position === (totalCards - 2)) {
                    card.classList.add(position === 2 ? 'far-next' : 'far-prev');
                }
            });

            // Atualizar dots
            document.querySelectorAll('.dot').forEach((dot, index) => {
                dot.classList.toggle('active', index === currentIndex);
            });
        }

        // Touch events para dispositivos móveis
        let touchStartX = 0;
        let touchEndX = 0;

        document.querySelector('.carousel-container2').addEventListener('touchstart', e => {
            touchStartX = e.changedTouches[0].screenX;
        }, false);

        document.querySelector('.carousel-container2').addEventListener('touchend', e => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        }, false);

        function handleSwipe() {
            if (touchEndX < touchStartX) {
                goToNext();
            } else if (touchEndX > touchStartX) {
                goToPrev();
            }
        }
    });
</script>

<?php include 'includes/footer.php'; ?>