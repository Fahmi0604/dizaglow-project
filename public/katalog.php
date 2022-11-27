<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree&family=Prata&display=swap" rel="stylesheet">
</head>
<body>

    <!-- header -->
    <?php include 'component/header.php' ?>

    <div class="min-h-screen mt-[70px] bg-custom-black py-[7.5%] px-[24px] md:px-[10%] lg:py-[5%] lg:px-[7.5%]">
        <div class="w-full mb-6">
            <h1 class="text-white font-bold font-Proxima text-2xl">Category</h1>
        </div>

        <!-- container -->
        <div class="flex font-Proxima">

            <!-- side category -->
            <aside class="w-[20%] mt-3">
                <div id="accordion-collapse" class="border-t border-white" data-accordion="collapse">
                    <h2 id="accordion-collapse-heading-1">
                        <button type="button" class="flex items-center justify-between w-full py-4 font-medium text-left text-white" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                            <span>Body Care</span>
                            <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            <svg data-accordion-icon class="hidden w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                        <div class="py-4 flex flex-col">
                            <div class="flex items-center mb-4">
                                <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4">
                                <label for="default-radio-1" class="ml-2 text-xs font-medium text-white">Cleanser</label>
                            </div>
                            <div class="flex items-center mb-4">
                                <input checked id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4">
                                <label for="default-radio-2" class="ml-2 text-xs font-medium text-white ">Cleanser</label>
                            </div>
                            <div class="flex items-center mb-4">
                                <input checked id="default-radio-3" type="radio" value="" name="default-radio" class="w-4 h-4">
                                <label for="default-radio-3" class="ml-2 text-xs font-medium text-white ">Cleanser</label>
                            </div>
                            <div class="flex items-center">
                                <input checked id="default-radio-4" type="radio" value="" name="default-radio" class="w-4 h-4">
                                <label for="default-radio-4" class="ml-2 text-xs font-medium text-white ">Cleanser</label>
                            </div>
                        </div>
                    </div>
                    <h2 id="accordion-collapse-heading-2">
                        <button type="button" class="flex items-center justify-between w-full py-4 font-medium text-left text-white" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                        <span>Face Care</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </h2>
                    <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                        <div class="py-4 flex flex-col">
                            <div class="flex items-center mb-4">
                                <input id="default-radio-1" type="radio" value="" name="default-radio2" class="w-4 h-4">
                                <label for="default-radio-1" class="ml-2 text-xs font-medium text-white">Cleanser</label>
                            </div>
                            <div class="flex items-center mb-4">
                                <input checked id="default-radio-2" type="radio" value="" name="default-radio2" class="w-4 h-4">
                                <label for="default-radio-2" class="ml-2 text-xs font-medium text-white ">Cleanser</label>
                            </div>
                            <div class="flex items-center mb-4">
                                <input checked id="default-radio-3" type="radio" value="" name="default-radio2" class="w-4 h-4">
                                <label for="default-radio-3" class="ml-2 text-xs font-medium text-white ">Cleanser</label>
                            </div>
                            <div class="flex items-center">
                                <input checked id="default-radio-4" type="radio" value="" name="default-radio2" class="w-4 h-4">
                                <label for="default-radio-4" class="ml-2 text-xs font-medium text-white ">Cleanser</label>
                            </div>
                        </div>
                    </div>
                    <h2 id="accordion-collapse-heading-3">
                        <button type="button" class="flex items-center justify-between w-full py-4 font-medium text-left text-white" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                        <span>Face Care</span>
                        <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                    </h2>
                    <div div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                        <div class="py-4 flex flex-col">
                            <div class="flex items-center mb-4">
                                <input id="default-radio-1" type="radio" value="" name="default-radio3" class="w-4 h-4">
                                <label for="default-radio-1" class="ml-2 text-xs font-medium text-white">Cleanser</label>
                            </div>
                            <div class="flex items-center mb-4">
                                <input checked id="default-radio-2" type="radio" value="" name="default-radio3" class="w-4 h-4">
                                <label for="default-radio-2" class="ml-2 text-xs font-medium text-white ">Cleanser</label>
                            </div>
                            <div class="flex items-center mb-4">
                                <input checked id="default-radio-3" type="radio" value="" name="default-radio3" class="w-4 h-4">
                                <label for="default-radio-3" class="ml-2 text-xs font-medium text-white ">Cleanser</label>
                            </div>
                            <div class="flex items-center">
                                <input checked id="default-radio-4" type="radio" value="" name="default-radio3" class="w-4 h-4">
                                <label for="default-radio-4" class="ml-2 text-xs font-medium text-white ">Cleanser</label>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

            <!-- content -->
            <section class="w-[80%] pl-8 font-Proxima">
                <div class="w-full flex items-center mb-6">
                    <span class="text-white text-xs">Sort By: </span>
                    <select id="sort-by" class="bg-transparent text-white font-bold text-xs block w-fit px-2.5">
                        <option selected>High Prize</option>
                        <option value="US">High Prize</option>
                        <option value="CA">High Prize</option>
                        <option value="FR">High Prize</option>
                        <option value="DE">High Prize</option>
                    </select>
                </div>
                <!-- container card -->
                <div class="w-full flex flex-wrap justify-between">
                    <!-- card 1 -->
                    <div class="relative w-[22.5%] group/card mb-8">
                        <span class="absolute top-3 left-4 px-2 py-3 text-white text-[10px] font-bold bg-secondary rounded-full">65%</span>
                        <svg class="absolute top-5 right-5" width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.9467 0.500005C15.0908 0.501639 13.3115 1.24021 12 2.55334C11.3523 1.89428 10.5806 1.36997 9.72926 1.01066C8.87794 0.651353 7.96391 0.464151 7.03988 0.459854C6.11585 0.455556 5.20012 0.634249 4.34549 0.985625C3.49087 1.337 2.71427 1.85411 2.06049 2.50711C1.40672 3.16012 0.888696 3.93611 0.536313 4.79032C0.18393 5.64453 0.00415822 6.56005 0.00736641 7.48408C0.0105746 8.40811 0.1967 9.32237 0.555006 10.1741C0.913312 11.0258 1.43671 11.7982 2.095 12.4467L12 22.3517L21.905 12.4467C22.8834 11.467 23.5494 10.2192 23.8186 8.86108C24.0878 7.50294 23.9482 6.09546 23.4174 4.81666C22.8867 3.53786 21.9886 2.44518 20.8368 1.67682C19.685 0.908451 18.3312 0.498915 16.9467 0.500005ZM20.2483 10.8017L12 19.05L3.75167 10.8017C3.31809 10.3681 2.97415 9.85335 2.7395 9.28685C2.50485 8.72035 2.38408 8.11318 2.38408 7.5C2.38408 6.88683 2.50485 6.27966 2.7395 5.71316C2.97415 5.14665 3.31809 4.63192 3.75167 4.19834C4.18525 3.76476 4.69999 3.42082 5.26649 3.18617C5.83299 2.95152 6.44016 2.83074 7.05334 2.83074C7.66651 2.83074 8.27369 2.95152 8.84019 3.18617C9.40669 3.42082 9.92142 3.76476 10.355 4.19834L12 5.85501L13.645 4.21C14.5347 3.36129 15.7171 2.88778 16.9467 2.88778C18.1763 2.88778 19.3586 3.36129 20.2483 4.21C20.6822 4.64341 21.0264 5.15809 21.2613 5.72462C21.4961 6.29114 21.617 6.8984 21.617 7.51167C21.617 8.12494 21.4961 8.7322 21.2613 9.29873C21.0264 9.86525 20.6822 10.3799 20.2483 10.8133V10.8017Z" fill="white"/>
                        </svg>

                        <img src="assets/produk1.png" alt="produk1" class="w-full">
                        <h2 class="text-white text-xl font-bold text-center mt-7 mb-2">Body Scrub</h2>
                        
                        <div class="flex justify-evenly mb-7">
                            <span class="text-custom-muted"><s>Rp 50,000</s></span>
                            <span class="text-secondary">Rp 25,000</span>
                        </div>
                        
                        <button class="invisible group-hover/card:visible hover:bg-secondary hover:text-white text-secondary w-full py-3  text-xs  border border-secondary rounded-md">
                            Tambahkan ke keranjang
                        </button>
                    </div>
                    <!-- card 2 -->
                    <div class="relative w-[22.5%] group/card mb-8">
                        <span class="absolute top-5 left-4 px-2 text-white text-[10px] font-bold bg-secondary rounded-full">Sold out</span>

                        <img src="assets/produk2.png" alt="produk1" class="w-full">
                        <h2 class="text-white text-xl font-bold text-center mt-7 mb-2">Body Scrub</h2>
                        
                        <div class="flex justify-evenly mb-7">
                            <span class="text-white">Rp 25,000</span>
                        </div>
                        
                        <button class="invisible group-hover/card:invisible hover:bg-secondary hover:text-white text-secondary w-full py-3  text-xs  border border-secondary rounded-md">
                            Tambahkan ke keranjang
                        </button>
                    </div>
                    <!-- card 3 -->
                    <div class="relative w-[22.5%] group/card mb-8">
                        <span class="absolute top-5 left-4 px-2 text-white text-[10px] font-bold bg-primary rounded-full">New Items</span>
                        <svg class="absolute top-5 right-5" width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.5 0.5L11 3L4 0.5L0 4.5L1 9.5L11 20L21 10L21.5 5.5L19.5 2.5L15.5 0.5Z" fill="white"/>
                        </svg>

                        <img src="assets/produk3.png" alt="produk1" class="w-full">
                        <h2 class="text-white text-xl font-bold text-center mt-7 mb-2">Body Scrub</h2>
                        
                        <div class="flex justify-evenly mb-7">
                            <span class="text-custom-muted"><s>Rp 50,000</s></span>
                            <span class="text-secondary">Rp 25,000</span>
                        </div>
                        
                        <button class="invisible group-hover/card:visible hover:bg-secondary hover:text-white text-secondary w-full py-3  text-xs  border border-secondary rounded-md">
                            Tambahkan ke keranjang
                        </button>
                    </div>
                    <!-- card 4 -->
                    <div class="relative w-[22.5%] group/card mb-8">
                        <svg class="absolute top-5 right-5" width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16.9467 0.500005C15.0908 0.501639 13.3115 1.24021 12 2.55334C11.3523 1.89428 10.5806 1.36997 9.72926 1.01066C8.87794 0.651353 7.96391 0.464151 7.03988 0.459854C6.11585 0.455556 5.20012 0.634249 4.34549 0.985625C3.49087 1.337 2.71427 1.85411 2.06049 2.50711C1.40672 3.16012 0.888696 3.93611 0.536313 4.79032C0.18393 5.64453 0.00415822 6.56005 0.00736641 7.48408C0.0105746 8.40811 0.1967 9.32237 0.555006 10.1741C0.913312 11.0258 1.43671 11.7982 2.095 12.4467L12 22.3517L21.905 12.4467C22.8834 11.467 23.5494 10.2192 23.8186 8.86108C24.0878 7.50294 23.9482 6.09546 23.4174 4.81666C22.8867 3.53786 21.9886 2.44518 20.8368 1.67682C19.685 0.908451 18.3312 0.498915 16.9467 0.500005ZM20.2483 10.8017L12 19.05L3.75167 10.8017C3.31809 10.3681 2.97415 9.85335 2.7395 9.28685C2.50485 8.72035 2.38408 8.11318 2.38408 7.5C2.38408 6.88683 2.50485 6.27966 2.7395 5.71316C2.97415 5.14665 3.31809 4.63192 3.75167 4.19834C4.18525 3.76476 4.69999 3.42082 5.26649 3.18617C5.83299 2.95152 6.44016 2.83074 7.05334 2.83074C7.66651 2.83074 8.27369 2.95152 8.84019 3.18617C9.40669 3.42082 9.92142 3.76476 10.355 4.19834L12 5.85501L13.645 4.21C14.5347 3.36129 15.7171 2.88778 16.9467 2.88778C18.1763 2.88778 19.3586 3.36129 20.2483 4.21C20.6822 4.64341 21.0264 5.15809 21.2613 5.72462C21.4961 6.29114 21.617 6.8984 21.617 7.51167C21.617 8.12494 21.4961 8.7322 21.2613 9.29873C21.0264 9.86525 20.6822 10.3799 20.2483 10.8133V10.8017Z" fill="white"/>
                        </svg>

                        <img src="assets/produk4.png" alt="produk4" class="w-full">
                        <h2 class="text-white text-xl font-bold text-center mt-7 mb-2">Body Scrub</h2>
                        
                        <div class="flex justify-evenly mb-7">
                            <span class="text-white">Rp 50,000</span>
                        </div>
                        
                        <button class="invisible group-hover/card:visible hover:bg-secondary hover:text-white text-secondary w-full py-3  text-xs  border border-secondary rounded-md">
                            Tambahkan ke keranjang
                        </button>
                    </div>
                    <!-- card 5 -->
                    <div class="relative w-[22.5%] group/card mb-8">
                        <span class="absolute top-5 left-4 px-2 text-white text-[10px] font-bold bg-primary rounded-full">New Items</span>
                        <svg class="absolute top-5 right-5" width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.5 0.5L11 3L4 0.5L0 4.5L1 9.5L11 20L21 10L21.5 5.5L19.5 2.5L15.5 0.5Z" fill="white"/>
                        </svg>

                        <img src="assets/produk3.png" alt="produk1" class="w-full">
                        <h2 class="text-white text-xl font-bold text-center mt-7 mb-2">Body Scrub</h2>
                        
                        <div class="flex justify-evenly mb-7">
                            <span class="text-custom-muted"><s>Rp 50,000</s></span>
                            <span class="text-secondary">Rp 25,000</span>
                        </div>
                        
                        <button class="invisible group-hover/card:visible hover:bg-secondary hover:text-white text-secondary w-full py-3  text-xs  border border-secondary rounded-md">
                            Tambahkan ke keranjang
                        </button>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <!-- footer -->
    <?php include 'component/footer.php' ?>
</body>

    <script id="js-jquery.min.js" src="https://app-dev.merchant.my.id/assets/store/assets/js/jquery.min.js"></script>
    <script src="../src/js/dizaglow.js"></script>
</html>