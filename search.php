<?php get_header(); ?>
<?php
$cat = new Category();
$urlTema = get_template_directory_uri();
?>
<div>
    <div class="w-full text-white min-h-[150px] font-black text-center flex justify-center content-center text-xl lg:text-4xl pt-[50px] bg-hero-page">
        Busca: <?= $_REQUEST["s"] ?>
    </div>
    <div class="container mx-auto py-12">
        <div class="grid grid-cols-1 lg:grid-cols-[1fr_1fr_1fr] gap-8">
            <?php foreach ($cat->data as $item) : ?>
                <a href="<?= $item->link ?>" class="bg-[#ECE9E9] text-azul grid grid-cols-[100px_1fr]">
                    <img src="<?= $item->image ?>" class="w-full object-cover h-[120px]">
                    <div class="block p-3">
                        <strong class=""> <?= $item->title ?> </strong>
                        <p> <?= substr($item->resumo, 0, 67)  ?>... </p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
    <?php if( empty( $cat->data )): ?>
    <div class="w-full relative flex pt-0 pb-20">
        <div class="w-full">
            <h1 class="text-center uppercase px-8 mb-8 text-azul text-xl lg:text-4xl font-black ">
                Não a resultado para essa busca
            </h1>
            <a href="<?= site_url() ?>" class="block w-[250px] p-4 text-white bg-verde text-center uppercase font-black mx-auto">
                Voltar a página inicial
            </a>
        </div>
    </div>
    <?php endif; ?>
</div>
<?php get_footer(); ?>