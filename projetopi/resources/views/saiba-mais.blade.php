@extends('layouts.sobre')

@section('title', 'Saiba Mais')

@section('content')

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content" data-aos="fade-up">
            <h1>Potencialize seus Treinos com Creatina e Whey Protein!</h1>
            <p>Descubra os benefícios e escolha o suplemento ideal para você.</p>
            <a href="#benefits" class="btn">Saiba Mais</a>
        </div>
    </section>

    <!-- Benefícios da Creatina -->
    <section id="benefits" class="benefits creatina">
        <h2 data-aos="fade-right">Benefícios da Creatina</h2>
        <div class="benefit-content">
            <img src="https://cdn.awsli.com.br/2672/2672806/arquivos/66e4b3e4-281c-4051-a8ca-cd31a82c331d___3b34e331b00afb840805c1157d58747d.png" alt="Creatina" data-aos="zoom-in">
            <ul>
                <li data-aos="fade-left"><i class="fa-solid fa-bolt"></i> Melhora a força e explosão muscular</li>
                <li data-aos="fade-left"><i class="fa-solid fa-dumbbell"></i> Auxilia no ganho de massa muscular</li>
                <li data-aos="fade-left"><i class="fa-solid fa-heartbeat"></i> Aumenta a resistência em treinos intensos</li>
            </ul>
        </div>
    </section>

    <!-- Benefícios do Whey Protein -->
    <section class="benefits whey">
        <h2 data-aos="fade-right">Benefícios do Whey Protein</h2>
        <div class="benefit-content">
            <img src="https://static.ndmais.com.br/2024/12/super-whey-800x495.jpeg" alt="Whey Protein" data-aos="zoom-in">
            <ul>
                <li data-aos="fade-left"><i class="fa-solid fa-sync-alt"></i> Ajuda na recuperação muscular</li>
                <li data-aos="fade-left"><i class="fa-solid fa-weight-hanging"></i> Promove o ganho de massa magra</li>
                <li data-aos="fade-left"><i class="fa-solid fa-vial"></i> Alta absorção e valor biológico</li>
            </ul>
        </div>
    </section>

    <!-- FAQs -->
    <section class="faq">
        <h2 data-aos="fade-up">Perguntas Frequentes</h2>
        <div class="faq-item" data-aos="fade-up">
            <button class="faq-question">A creatina causa retenção de líquidos? <i class="fa fa-chevron-down"></i></button>
            <div class="faq-answer">Sim, mas é uma retenção intramuscular que melhora o desempenho.</div>
        </div>
        <div class="faq-item" data-aos="fade-up">
            <button class="faq-question">Qual a melhor hora para tomar whey protein? <i class="fa fa-chevron-down"></i></button>
            <div class="faq-answer">O pós-treino é ideal para maximizar a recuperação muscular.</div>
        </div>
    </section>

    <!-- Chamada para Ação -->
    <section class="cta" data-aos="zoom-in">
        <h2>Transforme seus Treinos Hoje Mesmo!</h2>
        <a href="#" class="btn">Adquira Seus Suplementos</a>
    </section>

    <script src="scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
    </script>


<script>

const questions = document.querySelectorAll('.faq-question');

questions.forEach(question => {
    question.addEventListener('click', () => {
        const answer = question.nextElementSibling;
        answer.style.display = answer.style.display === 'block' ? 'none' : 'block';
        question.querySelector('i').classList.toggle('fa-chevron-down');
        question.querySelector('i').classList.toggle('fa-chevron-up');
    });
});

</script>

@endsection