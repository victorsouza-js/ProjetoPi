@extends('layouts.sobre')

@section('title', 'Saiba Mais')

@section('content')

<header class="header">
        <h1>Desperte Sua Força com a Creatina!</h1>
        <p>Descubra como a creatina pode elevar seus treinos a outro nível.</p>
    </header>

    <!-- Seção: O que é a creatina -->
    <section class="section" id="about" data-aos="fade-up">
        <h2>O Que é a Creatina?</h2>
        <p>A creatina é um suplemento amplamente pesquisado que melhora o desempenho físico e aumenta a força muscular.</p>
        <img src="https://cdn.awsli.com.br/2672/2672806/arquivos/66e4b3e4-281c-4051-a8ca-cd31a82c331d___3b34e331b00afb840805c1157d58747d.png" alt="Creatina e alimentos ricos em creatina">
    </section>

    <!-- Seção: Benefícios da creatina -->
    <section class="section" id="benefits">
        <h2>Principais Benefícios</h2>
        <div class="benefit" data-aos="zoom-in">
            <i class="fas fa-dumbbell"></i>
            <h3>Aumento da Força Muscular</h3>
            <p>Melhora a capacidade de levantar cargas pesadas.</p>
        </div>
        <div class="benefit" data-aos="zoom-in" data-aos-delay="100">
            <i class="fas fa-chart-line"></i>
            <h3>Ganho de Massa Magra</h3>
            <p>Auxilia no crescimento muscular ao longo do tempo.</p>
        </div>
        <div class="benefit" data-aos="zoom-in" data-aos-delay="200">
            <i class="fas fa-bolt"></i>
            <h3>Melhora no Desempenho</h3>
            <p>Ideal para treinos intensos e explosões rápidas de energia.</p>
        </div>
        <div class="benefit" data-aos="zoom-in" data-aos-delay="300">
            <i class="fas fa-heartbeat"></i>
            <h3>Recuperação Rápida</h3>
            <p>Reduz a fadiga e acelera a recuperação pós-treino.</p>
        </div>
    </section>

    <!-- Seção: Vídeo Explicativo -->
    <section class="section video-section" data-aos="fade-up">
        <h2>Por que Usar Creatina?</h2>
        <div class="video-container">
            <iframe src="https://youtu.be/ayuajj4UrVo?si=36vrMWcWeuG_-18A" title="Vídeo explicativo sobre creatina" allowfullscreen></iframe>
        </div>
    </section>

    <!-- Seção: Perguntas Frequentes -->
    <section class="section faq" data-aos="fade-up">
        <h2>Perguntas Frequentes</h2>
        <div class="faq-item">
            <button class="faq-question">A creatina é segura? <i class="fas fa-chevron-down"></i></button>
            <div class="faq-answer">
                <p>Sim! Diversos estudos mostram que a creatina é segura para a maioria das pessoas quando consumida em doses adequadas.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">Como devo tomar creatina? <i class="fas fa-chevron-down"></i></button>
            <div class="faq-answer">
                <p>Recomenda-se 3 a 5 gramas por dia, preferencialmente após o treino com uma fonte de carboidratos.</p>
            </div>
        </div>
    </section>

    <!-- Seção: Call to Action -->
    <section class="cta" data-aos="fade-up">
        <h2>Pronto para Transformar Seus Treinos?</h2>
        <a href="#" class="cta-button">Compre Sua Creatina Agora!</a>
    </section>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="script.js"></script>
    <script>
        AOS.init();  // Inicializa a biblioteca de animações
    </script>



<script>

const faqQuestions = document.querySelectorAll(".faq-question");

faqQuestions.forEach((question) => {
    question.addEventListener("click", () => {
        const answer = question.nextElementSibling;
        answer.style.display = answer.style.display === "block" ? "none" : "block";
        question.querySelector("i").classList.toggle("fa-chevron-down");
        question.querySelector("i").classList.toggle("fa-chevron-up");
    });
});

</script>

<header class="header-whey">
        <h1>Maximize Seus Resultados com Whey Protein!</h1>
        <p>Saiba como o Whey Protein pode ajudar no ganho de massa muscular e na recuperação pós-treino.</p>
    </header>

    <!-- Seção: O que é Whey Protein -->
    <section class="section" id="about" data-aos="fade-up">
        <h2>O Que é Whey Protein?</h2>
        <p>Whey Protein é uma proteína de alta qualidade derivada do soro do leite, essencial para ganho de massa e recuperação muscular.</p>
        <img src="https://static.ndmais.com.br/2024/12/super-whey-800x495.jpeg" alt="Pote de Whey Protein e shake">
    </section>

    <!-- Seção: Benefícios do Whey Protein -->
    <section class="section" id="benefits">
        <h2>Principais Benefícios</h2>
        <div class="benefit" data-aos="zoom-in">
            <i class="fas fa-dumbbell"></i>
            <h3>Ganho de Massa Muscular</h3>
            <p>Fonte de proteína de rápida absorção para crescimento muscular.</p>
        </div>
        <div class="benefit" data-aos="zoom-in" data-aos-delay="100">
            <i class="fas fa-undo-alt"></i>
            <h3>Recuperação Muscular</h3>
            <p>Ajuda a reparar os músculos após treinos intensos.</p>
        </div>
        <div class="benefit" data-aos="zoom-in" data-aos-delay="200">
            <i class="fas fa-tachometer-alt"></i>
            <h3>Absorção Rápida</h3>
            <p>Proteína de fácil digestão para resultados rápidos.</p>
        </div>
        <div class="benefit" data-aos="zoom-in" data-aos-delay="300">
            <i class="fas fa-shield-alt"></i>
            <h3>Fortalecimento Imunológico</h3>
            <p>Contém aminoácidos que ajudam a fortalecer o sistema imunológico.</p>
        </div>
    </section>

    <!-- Seção: Vídeo Explicativo -->
    <section class="section video-section" data-aos="fade-up">
        <h2>Por que Usar Whey Protein?</h2>
        <div class="video-container">
            <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="Vídeo explicativo sobre Whey Protein" allowfullscreen></iframe>
        </div>
    </section>

    <!-- Seção: Perguntas Frequentes -->
    <section class="section faq" data-aos="fade-up">
        <h2>Perguntas Frequentes</h2>
        <div class="faq-item">
            <button class="faq-question">Qual é a melhor hora para tomar Whey Protein? <i class="fas fa-chevron-down"></i></button>
            <div class="faq-answer">
                <p>O Whey Protein é mais eficaz logo após os treinos, mas também pode ser consumido ao longo do dia.</p>
            </div>
        </div>
        <div class="faq-item">
            <button class="faq-question">Whey Protein ajuda a emagrecer? <i class="fas fa-chevron-down"></i></button>
            <div class="faq-answer">
                <p>Sim! Ele ajuda a manter a saciedade e preservar a massa magra durante o emagrecimento.</p>
            </div>
        </div>
    </section>

    <!-- Seção: Call to Action -->
    <section class="cta" data-aos="fade-up">
        <h2>Pronto para Elevar Seus Resultados?</h2>
        <a href="#" class="cta-button">Compre Seu Whey Protein Agora!</a>
    </section>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="script.js"></script>
    <script>
        AOS.init();  // Inicializa a biblioteca de animações
    </script>


<script>


const faqqQuestions = document.querySelectorAll(".faq-question");

faqQuestions.forEach((question) => {
    question.addEventListener("click", () => {
        const answer = question.nextElementSibling;
        answer.style.display = answer.style.display === "block" ? "none" : "block";
        question.querySelector("i").classList.toggle("fa-chevron-down");
        question.querySelector("i").classList.toggle("fa-chevron-up");
    });
});


</script>


@endsection