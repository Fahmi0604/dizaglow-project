<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/style.css">

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree&family=Prata&display=swap" rel="stylesheet">
</head>
<body>

    <!-- header -->
    <?php include 'component/header.php' ?>

    <div class="mt-[70px] pb-[44px] lg:pb-[88px] bg-custom-black py-[7.5%] px-[24px] md:px-[10%] lg:py-[10%] lg:px-[7.5%] font-Proxima">
        <div class="w-full flex justify-center">
            <form class="w-full lg:w-[40%] flex items-center flex-col">
                <h1 class="text-white text-[32px] font-bold mb-10">Login</h1>
                
                <input type="text" class="block w-full py-3 pl-3 text-sm text-white border border-white rounded-md bg-transparent outline-none mb-4" placeholder="Nomor Telepon / E-mail">
                <input type="password" class="block w-full py-3 pl-3 text-sm text-white border border-white rounded-md bg-transparent outline-none mb-4" placeholder="Password">
                <div class="w-full flex justify-start mb-6">
                    <p class="text-white text-xs">Forgot your password?</p>
                </div>
                
                <button class="bg-secondary text-white w-full py-3 text-xs font-bold border border-secondary rounded-md mb-4">
                    Login
                </button>

                <p class="text-xs text-white">Don't have any account yet?<a class="text-secondary font-bold"> Sign up</a></p>
            </form>
        </div>
    </div>

    <!-- footer -->
    <?php include 'component/footer.php' ?>
</body>

    <script id="js-jquery.min.js" src="https://app-dev.merchant.my.id/assets/store/assets/js/jquery.min.js"></script>
    <script src="../src/js/dizaglow.js"></script>
</html>