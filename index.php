<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/dist/output.css">
    <title>Página Institucional</title>
</head>

<body>
    <header>
        <nav
            class="flex py-2 px-4 md:px-8 bg-[#0e2347] min-h-[68px] relative z-20"
            aria-label="Main navigation">
            <div class="max-w-7xl mx-auto flex flex-wrap items-center gap-4 w-full">
                <div class="flex-1 flex">
                    <a href="#"
                        class="min-w-9 inline-block focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">
                        <h1 class="text-xl font-bold text-white">Ensino Médio SESC SENAC</h1>
                    </a>
                </div>
                <div id="collapseMenu" tabindex="-1"
                    class="hidden lg:block max-lg:bg-white dark:max-lg:bg-neutral-900 max-lg:border-l max-lg:border-slate-300 dark:max-lg:border-neutral-700 max-lg:w-1/2 max-lg:fixed max-lg:top-0 max-lg:right-0 max-lg:h-full max-lg:shadow-md max-lg:overflow-auto max-sm:w-full z-50 outline-none">
                    <div
                        class="py-2 px-4 flex justify-between items-center border-b border-slate-300 sticky top-0 bg-white dark:border-neutral-700 dark:bg-neutral-900 lg:hidden max-lg:min-h-[68px]">
                        <a href="#"
                            class="inline-block focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">
                            <h1 class="text-xl font-bold text-white">Ensino Médio SESC SENAC</h1>
                        </a>
                        <button type="button" aria-controls="collapseMenu" id="toggleClose"
                            class="cursor-pointer focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">
                            <span class="sr-only">Close main menu</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-4 fill-slate-900 dark:fill-slate-50"
                                aria-hidden="true" viewBox="0 0 329.269 329">
                                <path
                                    d="M194.8 164.77 323.013 36.555c8.343-8.34 8.343-21.825 0-30.164-8.34-8.34-21.825-8.34-30.164 0L164.633 134.605 36.422 6.391c-8.344-8.34-21.824-8.34-30.164 0-8.344 8.34-8.344 21.824 0 30.164l128.21 128.215L6.259 292.984c-8.344 8.34-8.344 21.825 0 30.164a21.27 21.27 0 0 0 15.082 6.25c5.46 0 10.922-2.09 15.082-6.25l128.21-128.214 128.216 128.214a21.27 21.27 0 0 0 15.082 6.25c5.46 0 10.922-2.09 15.082-6.25 8.343-8.34 8.343-21.824 0-30.164zm0 0"
                                    data-original="#000000" />
                            </svg>
                        </button>
                    </div>
                    <ul class="flex flex-col gap-8 font-semibold text-sm text-slate-900 dark:text-slate-50 lg:flex-row max-lg:p-6">
                        <li>
                            <a href="#sobre-nos"
                                class="hover:text-orange-500 focus:outline-none focus-visible:ring-2 rounded"
                                aria-current="page">Sobre nós</a>
                        </li>
                        <li>
                            <a href="#clubes"
                                class="hover:text-orange-500 focus:outline-none focus-visible:ring-2 rounded">Clubes</a>
                        </li>
                        <li>
                            <a href="#feiras"
                                class="hover:text-orange-500 focus:outline-none focus-visible:ring-2 rounded">Feiras</a>
                        </li>
                        <li>
                            <a href="#extra"
                                class="hover:text-orange-500 focus:outline-none focus-visible:ring-2 rounded">Extra Curriculares</a>
                        </li>
                        <li>
                            <a href="#eventos"
                                class="hover:text-orange-500 focus:outline-none focus-visible:ring-2 rounded">Eventos</a>
                        </li>
                        <li>
                            <a href="#depoimentos"
                                class="hover:text-orange-500 focus:outline-none focus-visible:ring-2 rounded">Depoimentos</a>
                        </li>
                        <li>
                            <a href="#inscricao"
                                class="hover:text-orange-500 focus:outline-none focus-visible:ring-2 rounded">Inscrição</a>
                        </li>
                    </ul>
                </div>
                <div class="flex items-center gap-4 lg:ml-4">
                    <button type="button" aria-controls="collapseMenu" aria-expanded="false" aria-haspopup="true" id="toggleOpen"
                        class="cursor-pointer lg:hidden focus:outline-none focus-visible:ring-2 focus-visible:ring-blue-500 rounded">
                        <span class="sr-only">Open main menu</span>
                        <svg class="size-7 fill-slate-900 dark:fill-slate-50" aria-hidden="true" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="container w-full mx-auto max-w-full">
            <section class="relative h-[500px] md:h-[600px] overflow-hidden" name="video">
                <!-- Vídeo de fundo -->
                <video
                    class="absolute inset-0 w-full h-full object-cover"
                    autoplay
                    muted
                    loop
                    playsinline>
                    <source src="seu-video.mp4" type="video/mp4" />
                    Seu navegador não suporta vídeo.
                </video>
                <!-- Overlay escuro -->
                <div class="absolute inset-0 bg-black/50">
                    <img src="./assets/img/image.png" alt="Imagem de destaque" class="w-full h-full object-cover">
                </div>
                <!-- Texto sobre o vídeo -->
                <div class="relative z-10 flex items-center justify-center h-full px-6 text-center">
                    <div class="max-w-4xl">
                        <h1 class="text-4xl md:text-6xl font-bold text-white leading-tight">
                            Bem Vindo ao Ensino Médio SESC SENAC
                        </h1>
                        <p class="mt-4 text-lg md:text-xl text-white/90">
                            Explore nossas oportunidades acadêmicas e extracurriculares
                            para desenvolver habilidades essenciais para o futuro.
                        </p>
                        <a href="#sobre-nos" class="inline-block mt-6 px-6 py-3 rounded-md bg-blue-600 hover:bg-blue-700 text-white font-semibold transition">
                            Sobre nós
                        </a>
                    </div>
                </div>
            </section>
            <section class="bg-[#f8f5f0] px-5 md:px-10 lg:px-16 py-12" name="sobre-nos" id="sobre-nos">
                <div class="max-w-7xl mx-auto">
                    <!-- Cabeçalho -->
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-16 items-start">
                        <div>
                            <p class="text-[#c59645] text-xs md:text-sm tracking-[0.25em] uppercase font-medium">
                                Ensino Médio Integrado ao Técnico em Informática
                            </p>
                            <h1 class="mt-5 text-5xl md:text-6xl font-bold text-[#071d41] leading-tight">
                                O Ensino Médio
                            </h1>
                        </div>
                        <div class="lg:col-span-2">
                            <p class="text-xl md:text-2xl leading-relaxed text-[#4d4d4d] max-w-4xl">
                                Aqui, a formação vai além dos conteúdos tradicionais. A teoria e a prática caminham juntas para desenvolver competências que fazem a diferença na vida pessoal e profissional.
                            </p>
                        </div>
                    </div>
                    <!-- Categorias -->
                    <?php
                    $categorias = [
                        'INFORMÁTICA',
                        'EMPREENDENDO IDEIAS',
                        'PORTUGUÊS',
                        'INGLÊS',
                        'MATEMÁTICA',
                        'EDUCAÇÃO FINANCEIRA',
                        'FÍSICA',
                        'QUÍMICA',
                        'BIOLOGIA',
                        'HISTÓRIA',
                        'FILOSOFIA',
                        'SOCIOLOGIA',
                        'ARTES'
                    ];
                    ?>
                    <div class="mt-14 flex flex-wrap gap-2">
                        <?php foreach ($categorias as $index => $categoria): ?>
                            <button
                                type="button"
                                class="
                        px-4 py-2.5
                        border
                        text-xs
                        md:text-sm
                        tracking-wider
                        transition
                        duration-200
                        <?php echo $index === 0
                                ? 'bg-[#071d41] text-white hover:bg-orange-500 rounded-xl font-semibold hover:text-white'
                                : 'bg-[#071d41] text-white hover:bg-orange-500 rounded-xl font-semibold hover:text-white';
                        ?>
                        ">
                                <?= $categoria ?>
                            </button>
                        <?php endforeach; ?>
                    </div>
                    <!-- Curso -->
                    <div class="mt-8 border border-[#ddd8d0] bg-white">
                        <div class="grid grid-cols-1 lg:grid-cols-2">
                            <!-- Imagem -->
                            <div class="relative h-[320px] md:h-[420px] lg:h-[420px] overflow-hidden">
                                <!-- Overlay -->
                                <div class="absolute inset-0 bg-[#071d41]/20">
                                    <img src="./assets/img/image copy.png" alt="sala de informática" class="w-full h-full object-cover">
                                </div>
                            </div>
                            <!-- Conteúdo -->
                            <div class="flex items-center p-8 md:p-12 lg:p-16">
                                <div>
                                    <h2 class="text-2xl md:text-5xl font-bold text-[#071d41]">
                                        Curso Técnico
                                    </h2>
                                    <p class="mt-5 text-base md:text-lg leading-relaxed text-[#666] max-w-xl">
                                        Formação profissional com diploma de Curso Técnico em Informática para Aplicações Web
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="bg-[#f8f5f0] px-5 md:px-10 lg:px-16 py-16" name="clubes" id="clubes">
                <div class="max-w-7xl mx-auto">
                    <!-- Cabeçalho -->
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-16 items-start">
                        <div>
                            <h2 class="text-5xl md:text-6xl font-bold text-[#071d41] leading-tight">
                                Clubes
                            </h2>
                        </div>
                    </div>
                    <?php
                    $clubes = [
                        [
                            'categoria' => 'Clube de Ciências',
                            'numero' => '#01',
                            'titulo' => 'Clube de Ciências BrisaMAR',
                            'descricao' => 'Students explore the phases of mitosis — prophase, metaphase, anaphase, and telophase — through live microscopy sessions and animated cell models.',
                            'nivel' => 'Grade 10',
                            'duracao' => '3 weeks',
                            'cor' => '#7ED9FC',
                            'bg_categoria' => '#e8f1ed'
                        ],
                        [
                            'categoria' => 'Literatura',
                            'numero' => '#04',
                            'titulo' => 'Clube do Livro',
                            'descricao' => 'An in-depth examination of industrialization in Britain and its spread worldwide, covering labor movements, urbanization, and long-term economic consequences.',
                            'nivel' => 'Grade 9',
                            'duracao' => '4 weeks',
                            'cor' => '#D6A20F',
                            'bg_categoria' => '#f4ebe3'
                        ],
                        [
                            'categoria' => 'Informativo',
                            'numero' => '#05',
                            'titulo' => 'Clube Jornal Escolar',
                            'descricao' => 'An in-depth examination of industrialization in Britain and its spread worldwide, covering labor movements, urbanization, and long-term economic consequences.',
                            'nivel' => 'Grade 9',
                            'duracao' => '4 weeks',
                            'cor' => '#0021E0',
                            'bg_categoria' => '#f4ebe3'
                        ],
                    ];
                    ?>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-14">
                        <?php foreach ($clubes as $clube): ?>
                            <article
                                class="relative bg-[#faf8f4] border border-[#ddd8d0] p-6 md:p-7 min-h-[310px] flex flex-col">
                                <!-- Barra superior -->
                                <div
                                    class="absolute top-0 left-0 right-0 h-[6px]"
                                    style="background-color: <?= $clube['cor'] ?>;"></div>
                                <!-- Categoria + número -->
                                <div class="flex items-center justify-between mt-1">
                                    <span
                                        class="inline-block px-2 py-1 text-xs font-medium tracking-[0.15em]"
                                        style="
                                color: <?= $clube['cor'] ?>;
                                background-color: <?= $clube['bg_categoria'] ?>;
                                ">
                                        <?= $clube['categoria'] ?>
                                    </span>
                                    <span class="text-xs text-[#555]">
                                        <?= $clube['numero'] ?>
                                    </span>
                                </div>
                                <!-- Título -->
                                <h3 class="mt-4 text-xl md:text-2xl font-bold text-[#071d41] leading-tight">
                                    <?= $clube['titulo'] ?>
                                </h3>
                                <!-- Descrição -->
                                <p class="mt-8 text-[15px] leading-relaxed text-[#666]">
                                    <?= $clube['descricao'] ?>
                                </p>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
            <section class="bg-[#f8f5f0] px-5 md:px-10 lg:px-16 py-16" name="feiras" id="feiras"> <!-- Título -->
                <div class="max-w-[1200px] mx-auto">
                    <h2 class="mt-5 text-5xl md:text-6xl font-bold text-[#071d41] leading-tight"> Feiras </h2>
                </div> <!-- Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 max-w-[1200px] mx-auto mt-8"> <!-- Card 1 -->
                    <div class="relative h-[280px] overflow-hidden group"> <img src="./assets/img/image copy 2.png" alt="Semana Literaria" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#061c3c] via-[#061c3c]/30 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-4 text-white">
                            <h2 class="text-base font-bold">Feira Cultural</h2>
                            <p class="text-sm text-yellow-400 mt-1">9 a 15 de agosto</p>
                        </div>
                    </div> <!-- Card 2 -->
                    <div class="relative h-[280px] overflow-hidden group"> <img src="https://images.unsplash.com/photo-1546519638-68e109498ffc?auto=format&fit=crop&w=700&q=80" alt="Atletismo" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#061c3c] via-[#061c3c]/30 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-4 text-white">
                            <h2 class="text-base font-bold">Feira do Empreendedorismo</h2>
                            <p class="text-sm text-yellow-400 mt-1"> 32 times universitários </p>
                        </div>
                    </div> <!-- Card 3 -->
                    <div class="relative h-[280px] overflow-hidden group"> <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?auto=format&fit=crop&w=700&q=80" alt="Artes e Teatro" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#061c3c] via-[#061c3c]/20 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-4 text-white">
                            <h2 class="text-base font-bold">Feira do Conhecimento</h2>
                            <p class="text-sm text-yellow-400 mt-1"> 3 produções anuais </p>
                        </div>
                    </div> <!-- Card 4 -->
                    <div class="relative h-[280px] overflow-hidden group"> <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=700&q=80" alt="Serviço Comunitário" class="absolute inset-0 w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#061c3c] via-[#061c3c]/30 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 p-4 text-white">
                            <h2 class="text-base font-bold">Projeto Integrador</h2>
                            <p class="text-sm text-yellow-400 mt-1"> 12.000 horas/ano </p>
                        </div>
                    </div>
                </div>
            </section>
            <section id="extra" class="bg-[#0e2347] text-white py-20" name="extra-curriculares">
                <div class="max-w-[1200px] mx-auto px-6">
                    <!-- Cabeçalho -->
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 lg:gap-16 items-start">
                        <div>
                            <h2 class="text-5xl md:text-6xl font-bold text-[#f8f5f0] leading-tight">
                                Extracurriculares
                            </h2>
                        </div>
                    </div>
                    <?php
                    $extra = [
                        [
                            'categoria' => 'Esportes',
                            'numero' => '#01',
                            'titulo' => 'Atividades Esportivas',
                            'descricao' => 'Students explore the phases of mitosis — prophase, metaphase, anaphase, and telophase — through live microscopy sessions and animated cell models.',
                            'nivel' => 'Grade 10',
                            'duracao' => '3 weeks',
                            'cor' => '#CC2525',
                            'bg_categoria' => '#e8f1ed'
                        ],
                        [
                            'categoria' => 'Literatura',
                            'numero' => '#02',
                            'titulo' => 'Jovens Autores',
                            'descricao' => 'Introduction to differential calculus, exploring limits, the definition of the derivative, and real-world applications such as velocity and optimization problems.',
                            'nivel' => 'Grade 11–12',
                            'duracao' => '4 weeks',
                            'cor' => '#8A4B18',
                            'bg_categoria' => '#e9edf5'
                        ],
                        [
                            'categoria' => 'Escrita',
                            'numero' => '#03',
                            'titulo' => 'Oficina de Redação',
                            'descricao' => 'An in-depth examination of industrialization in Britain and its spread worldwide, covering labor movements, urbanization, and long-term economic consequences.',
                            'nivel' => 'Grade 9',
                            'duracao' => '4 weeks',
                            'cor' => '#7800E0',
                            'bg_categoria' => '#f4ebe3'
                        ],
                    ];
                    ?>

                    <!-- Cards -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-14">

                        <?php foreach ($extra as $extras): ?>

                            <article
                                class="relative bg-[#faf8f4] border border-[#ddd8d0] p-6 md:p-7 min-h-[310px] flex flex-col">

                                <!-- Barra superior -->
                                <div
                                    class="absolute top-0 left-0 right-0 h-[6px]"
                                    style="background-color: <?= $extras['cor'] ?>;">
                                </div>

                                <!-- Categoria + número -->
                                <div class="flex items-center justify-between mt-1">

                                    <span
                                        class="inline-block px-2 py-1 text-xs font-medium tracking-[0.15em]"
                                        style="
                                color: <?= $extras['cor'] ?>;
                                background-color: <?= $extras['bg_categoria'] ?>;
                            ">
                                        <?= $extras['categoria'] ?>
                                    </span>

                                    <span class="text-xs text-[#555]">
                                        <?= $extras['numero'] ?>
                                    </span>

                                </div>

                                <!-- Título -->
                                <h3 class="mt-4 text-xl md:text-2xl font-bold text-[#071d41] leading-tight">
                                    <?= $extras['titulo'] ?>
                                </h3>

                                <!-- Descrição -->
                                <p class="mt-8 text-[15px] leading-relaxed text-[#666]">
                                    <?= $extras['descricao'] ?>
                                </p>

                            </article>

                        <?php endforeach; ?>

                    </div>

                </div>

            </section>
            <section id="eventos" class="bg-[#faf9f5] py-20" name="eventos" id="eventos">
                <div class="max-w-[1050px] mx-auto px-6">

                    <!-- CABEÇALHO -->
                    <div class="flex flex-col md:flex-row
                justify-between items-start md:items-end
                mb-10">
                        <div>
                            <span class="text-[9px]
                        tracking-[2px]
                        text-[#c8a64d]">
                                FACULTY
                            </span>
                            <h2 class="serif text-4xl font-bold leading-none mt-2">
                                Eventos proporcionados pela<br>
                                instituição
                            </h2>
                        </div>

                        <p class="text-xs leading-5
                    text-gray-500
                    max-w-[210px]
                    mt-5 md:mt-0">
                            Our faculty hold advanced degrees from
                            leading universities. 75% have active
                            research or creative practices in their fields.
                        </p>
                    </div>

                    <!-- PROFESSORES -->
                    <div class="grid grid-cols-1 sm:grid-cols-2
                lg:grid-cols-4 gap-5">

                        <!-- PROFESSOR 1 -->
                        <article>
                            <img
                                src="img/faculty1.jpg"
                                alt="Professor"
                                class="w-full h-[200px] object-cover">
                            <span class="block text-[8px]
                        text-[#c5a347]
                        uppercase mt-2">
                                Head of Sciences
                            </span>
                            <h3 class="serif text-sm font-bold">
                                Dr. Amara Ortiz
                            </h3>
                            <p class="text-[8px]
                        text-gray-600 mt-1">
                                “Curiosity is the engine of discovery.”
                            </p>
                        </article>

                        <!-- PROFESSOR 2 -->
                        <article>
                            <img
                                src="img/faculty2.jpg"
                                alt="Professor"
                                class="w-full h-[200px] object-cover">
                            <span class="block text-[8px]
                        text-[#c5a347]
                        uppercase mt-2">
                                Head of Humanities
                            </span>
                            <h3 class="serif text-sm font-bold">
                                Prof. Rachel Hart
                            </h3>
                            <p class="text-[8px]
                        text-gray-600 mt-1">
                                “I illuminate students to understand the world.”
                            </p>
                        </article>

                        <!-- PROFESSOR 3 -->
                        <article>
                            <img
                                src="img/faculty3.jpg"
                                alt="Professor"
                                class="w-full h-[200px] object-cover">
                            <span class="block text-[8px]
                        text-[#c5a347]
                        uppercase mt-2">
                                Director of Technology
                            </span>
                            <h3 class="serif text-sm font-bold">
                                Mr. Kevin Watanabe
                            </h3>
                            <p class="text-[8px]
                        text-gray-600 mt-1">
                                “Code is how we shape the future.”
                            </p>
                        </article>

                        <!-- PROFESSOR 4 -->
                        <article>
                            <img
                                src="img/faculty4.jpg"
                                alt="Professor"
                                class="w-full h-[200px] object-cover">
                            <span class="block text-[8px]
                        text-[#c5a347]
                        uppercase mt-2">
                                Head of Development
                            </span>
                            <h3 class="serif text-sm font-bold">
                                Dr. Mireille Dupont
                            </h3>
                            <p class="text-[8px]
                        text-gray-600 mt-1">
                                “Every language is a new window on the world.”
                            </p>
                        </article>
                    </div>
                </div>
            </section>
            <section id="depoimentos" class="bg-[#f5f2eb] py-20" name="depoimentos" id="depoimentos">
                <div class="max-w-[1050px] mx-auto px-6">

                    <!-- CABEÇALHO -->
                    <div class="flex justify-between
                items-end mb-8">
                        <div>
                            <span class="text-[9px]
                        tracking-[2px]
                        text-[#c8a64d]">
                                NEWS
                            </span>
                            <h2 class="serif text-4xl font-bold">
                                Depoimentos
                            </h2>
                        </div>

                        <a
                            href="#"
                            class="text-[8px]
                    uppercase
                    tracking-wider
                    text-[#c8a64d]">
                            All Stories →
                        </a>
                    </div>

                    <!-- CARDS -->
                    <div class="grid grid-cols-1
                md:grid-cols-3 gap-6">

                        <!-- DEPOIMENTO 1 -->
                        <article>
                            <img
                                src="img/news1.jpg"
                                alt="Evento"
                                class="w-full h-[125px] object-cover">
                            <div class="mt-2">
                                <span class="text-[8px]
                            text-[#c8a64d]
                            uppercase">
                                    Achievement
                                </span>
                                <span class="text-[8px]
                            text-gray-400 ml-2">
                                    August 5, 2026
                                </span>
                            </div>
                            <h3 class="serif text-sm
                        font-bold mt-1">
                                Westbrook Heights Team Wins Regional
                                Championship for Third Consecutive Year
                            </h3>
                        </article>

                        <!-- DEPOIMENTO 2 -->
                        <article>
                            <img
                                src="img/news2.jpg"
                                alt="Campus"
                                class="w-full h-[125px] object-cover">
                            <div class="mt-2">
                                <span class="text-[8px]
                            text-[#c8a64d]
                            uppercase">
                                    Campus
                                </span>
                                <span class="text-[8px]
                            text-gray-400 ml-2">
                                    July 22, 2026
                                </span>
                            </div>
                            <h3 class="serif text-sm
                        font-bold mt-1">
                                New Innovation Hub Opens Its Doors
                                to Students This Fall Semester
                            </h3>
                        </article>

                        <!-- DEPOIMENTO 3 -->
                        <article>
                            <img
                                src="img/news3.jpg"
                                alt="Aluno estudando"
                                class="w-full h-[125px] object-cover">
                            <div class="mt-2">
                                <span class="text-[8px]
                            text-[#c8a64d]
                            uppercase">
                                    Academic
                                </span>
                                <span class="text-[8px]
                            text-gray-400 ml-2">
                                    July 10, 2026
                                </span>
                            </div>
                            <h3 class="serif text-sm
                        font-bold mt-1">
                                AP Physics Earns High All-Time
                                Rate at 94% School-Wide
                            </h3>
                        </article>
                    </div>
                </div>
            </section>
            <section id="inscricao" class="bg-[#0d2348] text-white py-20  ">
                <div class="columns-2xl gap-14">
                    <div class="card-left p-10 flex flex-col">
                        <h2 class="text-4xl font-bold mt-1">
                            CONTATO
                        </h2>
                        <p class="text-xl text-[#d8d5cc] mt-4 mb-4">
                            Precisa de ajuda? Entre em contato conosco!
                        </p>
                        <div class="mt-6">
                            <div class="border-b border-[#284066] py-3">
                                <span class="text-base text-[#c9a84f] uppercase">
                                    Endereço
                                </span>
                                <span class="text-base ml-8 text-gray-300">
                                    Rua Dr. José Pinto Rebelo Júnior / n° 91, Matinhos - PR
                                </span>
                            </div>
                            <div class="border-b border-[#284066] py-3">
                                <span class="text-base text-[#c9a84f] uppercase">
                                    Telefone SESC
                                </span>
                                <span class="text-base ml-8 text-gray-300">
                                    (41) 3452-8950
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="card-right p-10">
                        <div class="mt-6">
                            <div class="border-b border-[#284066] py-3">
                                <span class="text-base text-[#c9a84f] uppercase">
                                    Telefone SENAC
                                </span>
                                <span class="text-base ml-8 text-gray-300">
                                    (41) 3452-8050
                                </span>
                            </div>
                        </div>
                        <div class="mt-6">
                            <div class="flex">
                                <span class="pr-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                        <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334" />
                                    </svg>
                                </span>
                                <span class="pr-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                        <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951" />
                                    </svg>
                                </span>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                        <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="mt-6">
                            <span class="text-base text-[#c9a84f] uppercase">
                                Administradores
                            </span>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <footer class="w-full bg-[#142c52] border-t text-[#d8d5cc] border-[#284066]">
        <div class="max-w-7xl mx-auto px-6 py-16 flex flex-col items-center">
            <div class="flex items-center space-x-3 mb-6">
                <p class="text-center max-w-xl text-sm font-normal leading-relaxed">
                    Ensino Médio Integrado ao Técnico de Informática SESC SENAC ©2026. Todos os direitos reservados.
                </p>
            </div>
        </div>
    </footer>
</body>
</html>