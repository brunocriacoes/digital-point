<?php
$Layout = new Layout();

$urlTema = get_template_directory_uri();
?>

<!DOCTYPE html>
<html lang="en">

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
          }
        }
      }
    }
  </script>
  <script src="<?= $Layout->js('/main.js')?>" type="module" defer async></script>
</head>

<body class="pt-[60px]">
  <div class="flex lg:hidden justify-center bg-white fixed left-0 top-0 w-full">
    <img class="h-[40px] m-2 " src="<?= $Layout->logo("/logo.png") ?>" alt="<?= $Layout->title ?>">
  </div>
  <header class="hidden fixed left-0 top-0 h-[100vh] lg:h-auto w-full z-10 bg-verde lg:bg-[#f5f5f5] js-menu">
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
                    <?php foreach ($menu["sub"] as $sub) : ?>
                      <div class="grid grid-cols-4">
                        <a href="<?= $sub["link"] ?>" title="Sobre" class="">
                          <b class="block"><?= $sub["text"] ?></b>
                          <span class="">
                            <?= $sub["short"] ?>
                          </span>
                        </a>
                      </div>
                    <?php endforeach; ?>
                  </div>
                </div>
              <?php endif; ?>
            </div>
          <?php endforeach; ?>
        </div>
        <a href="" title="entrar" class="hidden lg:flex bg-verde text-white p-2 rounded ">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
          </svg>
          <b class="mx-2">ENTRAR</b>
        </a>
      </nav>
    </div>
  </header>
  <main class="w-full">
    <div class="container mx-auto min-h-[70vh]">
      conteúdo ....
    </div>
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
</body>

</html>