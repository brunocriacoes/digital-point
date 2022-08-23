<?php get_header(); ?>
<div class="hidden">
<?php
$urlTema = get_template_directory_uri();
$cat = new Category("servicos", 3);
?>
</div>
<div class="flex items-center mx-auto  min-h-[70vh] bg-hero-home w-full p-8 relative bg-cover bg-top">
	<div>
		<h1 class="font-black text-base  lg:text-4xl bg-verde text-white inline p-4">Olá! Somos a Digital Point.</h1>
		<h2 class="font-black text-xl  lg:text-4xl text-azul mt-8">Criamos robôs para que você <br class="hidden lg:block" /> não se torne um.</h2>
	</div>
	<img class="absolute right-0 bottom-0 w-[150px] lg:w-auto" src="<?= $urlTema ?>/assets/logo/mascote.png">
</div>
<div class="w-full">
	<div class="container mx-auto py-8">
		<h3 class="text-center uppercase px-8 mb-8 text-azul text-xl lg:text-4xl font-black">
			Serviços / Processos
		</h3>
		<div class="grid grid-cols-1 lg:grid-cols-3">
			<div class="text-center pb-8">
				<img class="mx-auto pb-2" src="<?= $urlTema ?>/assets/servicos/funil.png" alt="">
				<strong> Organização Documental </strong>
				<p class="w-[60%] mx-auto">Todos o processo de armazenamento e classificação de documentos.</p>
			</div>
			<div class="text-center pb-8">
				<img class="mx-auto pb-2" src="<?= $urlTema ?>/assets/servicos/files.png" alt="">
				<strong> Digitalização de Documentos </strong>
				<p class="w-[60%] mx-auto"> Escaneamento de documentos em lote com qualidade profissional. </p>
			</div>
			<div class="text-center ">
				<img class="mx-auto pb-2" src="<?= $urlTema ?>/assets/servicos/upload.png" alt="">
				<strong> Armazenamento Digital </strong>
				<p class="w-[60%] mx-auto"> Seus documentos sempre disponível quando você mais precisa. </p>
			</div>
		</div>
	</div>
</div>
<div class="bg-[#F5EEEE] py-20">
	<div class="container mx-auto">
		<div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
			<?php foreach( $cat->data as $item ) :?>
				<a class="relative" href="<?= $item->link ?>">
					<span class="absolute bottom-0 left-0 w-full text-right font-black text-white p-4 bg-gradient-to-t from-azul h-full flex flex-row-reverse items-end"><?= $item->title ?></span>
					<img class="w-full object-cover h-[250px]" src="<?= $item->image ?>">
				</a>
			<?php endforeach;?>
		</div>
		<a class="mt-4 block uppercase border-solid border-2 border-verde text-verde font-black text-center p-2 w-[120px] mx-auto" href="<?= site_url() ?>/category/servicos/">
			VER TODOS
		</a>
	</div>
</div>
<section class="w-full">
	<div class="container mx-auto py-8">
		<h3 class="text-center uppercase px-8 mb-8 text-azul text-xl lg:text-4xl font-black">
			Confiada pelas principais empresas do mundo
		</h3>
		<div class="grid grid-cols-2 lg:grid-cols-6 content-center">
			<div> <img class="mx-auto" src="<?= $urlTema ?>/assets/clientes/amil.png"> </div>
			<div> <img class="mx-auto" src="<?= $urlTema ?>/assets/clientes/day.png"> </div>
			<div> <img class="mx-auto" src="<?= $urlTema ?>/assets/clientes/honda.png"> </div>
			<div> <img class="mx-auto" src="<?= $urlTema ?>/assets/clientes/hut.png"> </div>
			<div> <img class="mx-auto" src="<?= $urlTema ?>/assets/clientes/tam.png"> </div>
			<div> <img class="mx-auto" src="<?= $urlTema ?>/assets/clientes/wolks.png"> </div>
		</div>
	</div>
</section>
<?php get_footer(); ?>