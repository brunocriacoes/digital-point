<?php
$urlTema = get_template_directory_uri();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
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
                }
            }
        }
    </script>
</head>

<body>

    <div class="w-full flex items-center h-[100vh]">
        <div class="block w-[300px] mx-auto">
            <img src="<?php echo $urlTema; ?>/assets/logo/logo-tipo.png" class="mx-auto w-[160px]">
            <form action="javascript:void(0)">
                <label class="text-azul block">Usuário</label>
                <input type="text" class="bg-[#F4F2F2] text-azul mb-4 block w-full p-2">
                <label class="text-azul block">Senha</label>
                <input type="text" class="bg-[#F4F2F2] text-azul mb-4 block w-full p-2">
                <input type="submit" value="ENTRAR" class="w-full bg-azul font-black text-center text-white p-2">
            </form>
        </div>
    </div>

</body>

</html>