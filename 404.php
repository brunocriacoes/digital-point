<?php get_header(); ?>
<?php
$urlTema = get_template_directory_uri();
?>

<div class="w-full bg-hero-404 min-h-[70vh] relative flex">
    <div class="pt-20 w-full">
        <h1 class="text-center uppercase px-8 mb-8 text-azul text-xl lg:text-4xl font-black ">
            404 Página não encontrada :/
        </h1>
        <a href="<?= site_url() ?>" class="block w-[250px] p-4 text-white bg-verde text-center uppercase font-black mx-auto">
            Voltar a página inicial
        </a>
    </div>
    <img class="absolute  left-[10px] lg:left-[100px] bottom-[-50px] lg:bottom-[-100px] w-[100px] lg:w-auto z-10" src="<?= $urlTema ?>/assets/logo/mascote.png">
</div>

<?php get_footer(); ?>