<?php
$Layout = new Layout();
$urlTema = get_template_directory_uri();
?>
</main>
<footer class="w-full bg-azul text-white border-t-8 border-solid border-verde pt-8 relative">
    <img src="<?= $Layout->logo("/marca.png") ?>" alt="<?= $Layout->title ?> " class="w-[60px] absolute left-[40%] lg:left-[50%] top-[-40px]">
    <div class="container mx-auto py-8">
        <div class="grid grid-cols-1 lg:grid-cols-3 text-center lg:text-left">
            <div>
                <img src="<?= $Layout->logo("/logo-white.png") ?>" alt="<?= $Layout->title ?> " class="w-[250px] mx-auto lg:mx-0">
                <a href="mailto:info@gdcbrasil.com" class="flex mt-4 justify-center lg:justify-start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    <span class="ml-2">info@gdcbrasil.com</span>
                </a>
                <a href="tel:+5511999999999" class="flex mt-4 justify-center lg:justify-start">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <span class="ml-2">+55 (11) 9 9999-9999</span>
                </a>
            </div>
            <div class="hidden lg:block">
                <h3 class="text-2xl mb-2 font-black">UM POUCO SOBRE</h3>
                <p>
                    GDC é o seu provedor de serviços em Enterprise Content Management (ECM)
                    com soluções em captura de dados e processamento de dados. Temos uma
                    estrutura especializada em serviços, com foco em cuidar e apoiar
                    as suas unidades de negócio.
                </p>
            </div>
            <div>
                <h3 class="text-2xl mb-2 font-black">NOSSAS REDES</h3>
                <div class="flex justify-center lg:justify-start">
                    <?php foreach ($Layout->social() as $item) : ?>
                        <a href="<?= $item["link"] ?>" title="<?= $item["text"] ?>" target="_blank" rel="noopener noreferrer">
                            <img src="<?= $Layout->ico($item["ico"]) ?>" alt="<?= $item["text"] ?>" class="block w-[28px] m-2">
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full bg-[#0006] py-4">
        <div class="container mx-auto">
            <div class="grid lg:flex items-center justify-center  lg:justify-between ">
                <span class="">
                    2022 - Todos os direitos reservados
                    <span class="hidden lg:inline"> a <?= $Layout->title ?> </span>
                </span>
                <span>
                    <?php foreach ($Layout->linkCopy() as $item) : ?>
                        <a href="<?= $item["link"] ?> " title="<?= $item["text"] ?>"> <?= $item["text"] ?> </a> -
                    <?php endforeach; ?>
                </span>
            </div>
        </div>
    </div>
</footer>
<a href="" target="_blank" class="fixed bottom-[30px] right-[30px] z-20">
    <img src="<?= $Layout->ico("/bt-whats.png") ?>" alt="whatsapp" class="w-[48px]">
</a>
<button onclick="Layout.toggleMenu()" class="flex lg:hidden fixed bottom-[30px] left-[30px] bg-azul text-white p-3 rounded-full drop-shadow-xl z-20">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
    </svg>
</button>
<?php wp_footer(); ?>
</body>

</html>