<?php get_header(); ?>
<?php
$cat = new Category("servicos", 6);
$post = new Single();
?>
<div>
    <div class="w-full text-white min-h-[150px] font-black text-center flex justify-center content-center text-xl lg:text-4xl pt-[50px]" style="background-image: url(<?= $post->image ?>) ;">
        <?= $post->title ?>
    </div>
    <div class="container mx-auto py-12">
        <div class="grid grid-cols-1 lg:grid-cols-[1fr_400px] gap-8">
            <div>
                <?= $post->content ?>
            </div>
            <div>
                <div class="grid gap-4">
                    <?php foreach( $cat->data as $item) : ?>
                        <a href="<?= $item->link ?>" class="bg-[#ECE9E9] text-azul grid grid-cols-[100px_1fr]">
                            <img src="<?= $item->image ?>" class="w-full object-cover h-[120px]">
                            <div class="block p-3">
                                <strong class=""> <?= $item->title ?> </strong>
                                <p> <?= substr($item->resumo, 0, 67 )  ?>... </p>
                            </div>
                        </a>
                    <?php endforeach; ?>
                </div>
                <a class="mt-4 block uppercase border-solid border-2 border-azul text-azul font-black text-center p-2 w-[120px] mx-auto" href="<?= site_url() ?>/category/servicos/">
                    VER TODOS
                </a>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>