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
                    <a href="#"
                        class="py-2 px-3.5 text-sm rounded-md font-semibold cursor-pointer text-white bg-orange-500 hover:bg-orange-600 transition-all focus:outline-none focus-visible:ring-2 focus-visible:ring-orange-500">Entrar
                    </a>
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
            <section id="inscricao"
                class="bg-[#0d2348] text-white py-20">
                <div class="max-w-[1050px] mx-auto px-6">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-14">
                        <!-- INFORMAÇÕES -->
                        <div>
                            <span class="text-[8px]
                        tracking-[2px]
                        text-[#c9a84f]">
                                CONTACT
                            </span>
                            <h2 class="serif text-4xl
                        font-bold mt-1">
                                Formulário de Inscrição
                            </h2>
                            <p class="text-xs
                        leading-5
                        text-[#d8d5cc]
                        mt-4
                        max-w-[300px]">
                                Whether you're a prospective student,
                                parent, or community member, we'd love
                                to hear from you.
                            </p>

                            <!-- INFORMAÇÕES -->
                            <div class="mt-6">

                                <div class="border-b
                            border-[#284066]
                            py-3">
                                    <span class="text-[7px]
                                text-[#c9a84f]
                                uppercase">
                                        Endereço
                                    </span>
                                    <span class="text-[8px]
                                ml-8
                                text-gray-300">
                                        Rua Dr. José Pinto Rebelo Júnior / n° 91, Matinhos - PR
                                    </span>
                                </div>

                                <div class="border-b
                            border-[#284066]
                            py-3">
                                    <span class="text-[7px]
                                text-[#c9a84f]
                                uppercase">
                                    </span>
                                    <span class="text-[8px]
                                ml-4
                                text-gray-300">
                                        
                                    </span>
                                </div>

                                <div class="border-b
                            border-[#284066]
                            py-3">
                                    <span class="text-[7px]
                                text-[#c9a84f]
                                uppercase">
                                        General Inquiries
                                    </span>
                                    <span class="text-[8px]
                                ml-4
                                text-gray-300">
                                        info@westbrookacademy.edu
                                    </span>
                                </div>

                                <div class="border-b
                            border-[#284066]
                            py-3">
                                    <span class="text-[7px]
                                text-[#c9a84f]
                                uppercase">
                                        Office Hours
                                    </span>
                                    <span class="text-[8px]
                                ml-5
                                text-gray-300">
                                        Mon-Fri 8:00 AM–5:00 PM
                                    </span>
                                </div>
                            </div>
                        </div>

                        <!-- FORMULÁRIO -->
                        <div>
                            <form action="#" method="POST">

                                <div class="grid grid-cols-2 gap-3">

                                    <!-- NOME -->
                                    <div>
                                        <label class="block
                                    text-[7px]
                                    text-[#c9a84f]
                                    uppercase
                                    mb-1">
                                            First Name
                                        </label>
                                        <input
                                            type="text"
                                            name="nome"
                                            required
                                            class="w-full
                                    h-9
                                    bg-[#162e55]
                                    border
                                    border-[#284066]
                                    px-3
                                    text-xs
                                    outline-none
                                    focus:border-[#c9a84f]">
                                    </div>

                                    <!-- SOBRENOME -->
                                    <div>
                                        <label class="block
                                    text-[7px]
                                    text-[#c9a84f]
                                    uppercase
                                    mb-1">
                                            Last Name
                                        </label>
                                        <input
                                            type="text"
                                            name="sobrenome"
                                            required
                                            class="w-full
                                    h-9
                                    bg-[#162e55]
                                    border
                                    border-[#284066]
                                    px-3
                                    text-xs
                                    outline-none
                                    focus:border-[#c9a84f]">
                                    </div>
                                </div>

                                <!-- EMAIL -->
                                <div class="mt-4">
                                    <label class="block
                                text-[7px]
                                text-[#c9a84f]
                                uppercase
                                mb-1">
                                        Email
                                    </label>
                                    <input
                                        type="email"
                                        name="email"
                                        required
                                        class="w-full
                                h-9
                                bg-[#162e55]
                                border
                                border-[#284066]
                                px-3
                                text-xs
                                outline-none
                                focus:border-[#c9a84f]">
                                </div>

                                <!-- TIPO -->
                                <div class="mt-4">
                                    <label class="block
                                text-[7px]
                                text-[#c9a84f]
                                uppercase
                                mb-1">
                                        Inquiry Type
                                    </label>
                                    <select
                                        name="tipo"
                                        class="w-full
                                h-9
                                bg-[#162e55]
                                border
                                border-[#284066]
                                px-3
                                text-xs">
                                        <option>
                                            Admissions
                                        </option>
                                        <option>
                                            Events
                                        </option>
                                        <option>
                                            General Information
                                        </option>
                                    </select>
                                </div>

                                <!-- MENSAGEM -->
                                <div class="mt-4">
                                    <label class="block
                                text-[7px]
                                text-[#c9a84f]
                                uppercase
                                mb-1">
                                        Message
                                    </label>
                                    <textarea
                                        name="mensagem"
                                        rows="4"
                                        required
                                        class="w-full
                                bg-[#162e55]
                                border
                                border-[#284066]
                                px-3
                                py-2
                                text-xs
                                outline-none
                                resize-none
                                focus:border-[#c9a84f]"></textarea>
                                </div>

                                <!-- BOTÃO -->
                                <button
                                    type="submit"
                                    class="w-full
                            h-9
                            mt-4
                            bg-[#d0ad4e]
                            text-[#0d2348]
                            text-[8px]
                            font-bold
                            uppercase
                            tracking-wider
                            hover:bg-[#e0c16a]
                            transition">
                                    Send Message
                                </button>
                            </form>
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