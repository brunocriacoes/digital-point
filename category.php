<?php get_header(); ?>
<?php
$cat = new Category("servicos");
$urlTema = get_template_directory_uri();
?>
<div>
    <div class="w-full text-white min-h-[150px] font-black text-center flex justify-center content-center text-xl lg:text-4xl pt-[50px] bg-hero-page">
        SERVIÇOS
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
</div>
<?php get_footer(); ?>