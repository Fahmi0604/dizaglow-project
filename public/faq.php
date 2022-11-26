<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
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
        <div class="flex items-center flex-col">
            <h1 class="text-white text-[32px] font-bold mb-12">FAQ</h1>
            
            <!-- accordion -->
            <div id="accordion-collapse" class="w-[75%]" data-accordion="collapse">
                <h2 id="accordion-faq-btn-1" class=" border-b border-secondary">
                    <button type="button" class="flex items-center justify-between w-full py-4 tex-xl font-bold text-left text-white" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-faq-body-1">
                        <span>How to Order?</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <svg data-accordion-icon class="hidden w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-faq-body-1" class="hidden" aria-labelledby="accordion-faq-1">
                    <p class="text-white py-4">
                    1. Choose selected items, then click ADD TO CART <br>
                    2. After that, click the CHECKOUT button <br>
                    3. Login first if you already have an account/register if you don't have an account
                    You can also use Guest Checkout if you don't want to register <br>
                    4. Click shopping cart then CHECKOUT
                    </p>
                </div>
                <h2 id="accordion-faq-btn-2" class=" border-b border-secondary">
                    <button type="button" class="flex items-center justify-between w-full py-4 tex-xl font-bold text-left text-white" data-accordion-target="#accordion-collapse-body-2" aria-expanded="true" aria-controls="accordion-faq-body-2">
                        <span>Shipping</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <svg data-accordion-icon class="hidden w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button>
                </h2>
                <div id="accordion-faq-body-2" class="hidden" aria-labelledby="accordion-faq-body-2">
                    <p class="text-white py-4">
                    1. Choose selected items, then click ADD TO CART <br>
                    2. After that, click the CHECKOUT button <br>
                    3. Login first if you already have an account/register if you don't have an account
                    You can also use Guest Checkout if you don't want to register <br>
                    4. Click shopping cart then CHECKOUT
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <?php include 'component/footer.php' ?>
</body>

    <script id="js-jquery.min.js" src="https://app-dev.merchant.my.id/assets/store/assets/js/jquery.min.js"></script>
    <script src="../src/js/dizaglow.js"></script>
</html>