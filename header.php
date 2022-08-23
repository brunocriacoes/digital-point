<?php
$Layout = new Layout();
$urlTema = get_template_directory_uri();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital Point</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="<?php echo $urlTema; ?>/assets/logo/ico.png" type="image/x-icon">
    <link rel="stylesheet" href="https://tailwindcss.com/docs/functions-and-directives/">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        azul: '#285A84',
                        verde: '#85C872',
                    },
                    backgroundImage: {
                        'hero-home': "url('<?= $urlTema ?>/assets/bg/home.png')"
                    }
                }
            }
        }
    </script>
    <script src="<?= $Layout->js('/main.js') ?>" type="module" defer async></script>
    <?php wp_head(); ?>
</head>

<body class="pt-[57px]">
    <?php wp_body_open(); ?>
    <div class="flex lg:hidden justify-center bg-white fixed left-0 top-0 w-full">
        <img class="h-[40px] m-2 " src="<?= $Layout->logo("/logo.png") ?>" alt="<?= $Layout->title ?>">
    </div>
    <header class="hidden lg:flex fixed left-0 top-0 h-[100vh] lg:h-auto w-full z-10 bg-verde lg:bg-[#f5f5f5] js-menu">
        <div class="container mx-auto">
            <nav class="block lg:flex items-center justify-between">
                <div class="hidden lg:block">
                    <img class=" h-[40px] m-2" src="<?= $Layout->logo("/logo.png") ?>" alt="<?= $Layout->title ?>">
                </div>
                <div class="block lg:hidden">
                    <img class=" h-[40px] my-4 mx-auto" src="<?= $Layout->logo("/logo-white.png") ?>" alt="<?= $Layout->title ?>">
                </div>
                <form action="" method="get" class="hidden lg:flex items-center border-2  rounded-3xl border-azul border-solid text-azul  bg-white p-1 pr-2">
                    <input type="search" name="s" class="block bg-transparent px-2" placeholder="O que você procura?">
                    <label>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                        </svg>
                        <button type="submit" hidden></button>
                    </label>
                </form>
                <div class=" grid  lg:flex items-center">
                    <?php foreach ($Layout->linkMenu() as $menu) : ?>
                        <div class="group">
                            <a href="<?= $menu["link"] ?>" title="<?= $menu["text"] ?>" class="block text-white lg:text-azul uppercase w-[100vw] lg:w-auto text-center p-4 hover:bg-[#CCC] h-100 border-b-2   border-transparent hover:border-verde border-solid">
                                <?= $menu["text"] ?>
                            </a>
                            <?php if ($menu["sub"]) : ?>
                                <div class="hidden group-hover:lg:flex w-[100vw] fixed left-0 top-[57px] bg-[#CCC] min-h-[70vh] p-10 z-1">
                                    <div class="container mx-auto">
                                        <div class="grid grid-cols-4 gap-8">
                                            <?php foreach ($menu["sub"] as $sub) : ?>
                                                <a href="<?= $sub["link"] ?>" title="Sobre" class="">
                                                    <b class="block"><?= $sub["text"] ?></b>
                                                    <span class="">
                                                        <?= $sub["short"] ?>
                                                    </span>
                                                </a>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
                <a href="<?= $Layout->site ?>/entrar" title="entrar" class="hidden lg:flex bg-verde text-white p-2 rounded ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    <b class="mx-2">ENTRAR</b>
                </a>
            </nav>
        </div>
    </header>
    <main class="w-full">