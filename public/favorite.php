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

    <div class="min-h-screen mt-[70px] bg-custom-black py-[7.5%] px-[10%] lg:py-[5%] lg:px-[7.5%]">
        <div class="w-full font-Proxima mb-14">
            <h1 class="text-white font-bold text-[28px]">Hi, Umar ikhsan</h1>
            <div class="w-fit px-3 py-2 bg-primary text-white text-xs rounded-md">0 point</div>
        </div>

        <!-- container -->
        <div class="flex font-Proxima">

            <!-- side category -->
            <aside class="w-[20%] font-Proxima">
                <ul class="text-white text-base mb-8">
                    <li>Akun Saya</li>
                    <li class="py-2">Riwayat Pesanan</li>
                    <li class="font-bold">Favorit</li>
                </ul>

                <button class="text-custom-red font-bold text-xl">Logout</button>
            </aside>

            <!-- content -->
            <section class="w-[80%] pl-8 font-Proxima">
                <!-- container card -->
                <div class="w-full flex flex-wrap">
                    <!-- card 3 -->
                    <div class="relative w-[22.5%] mx-[1.25%] group/card mb-8">
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
                    <div class="relative w-[22.5%] mx-[1.25%] group/card mb-8">
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
                </div>
            </section>

            <!-- empty favorite -->
            <section class="hidden w-[80%] pl-8 font-Proxima text-white">
                <div class="flex items-center flex-col">
                    <svg width="258" height="180" viewBox="0 0 258 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_244_579)">
                        <rect width="231.864" height="61.0169" rx="6" fill="#FF6881"/>
                        <path d="M210.811 12.2706C207.658 12.2734 204.636 13.5085 202.408 15.7045C201.307 14.6023 199.996 13.7255 198.55 13.1246C197.104 12.5237 195.551 12.2107 193.981 12.2035C192.411 12.1963 190.856 12.4951 189.404 13.0828C187.952 13.6704 186.633 14.5351 185.522 15.6272C184.411 16.7192 183.531 18.0169 182.933 19.4454C182.334 20.8739 182.029 22.405 182.034 23.9502C182.04 25.4955 182.356 27.0244 182.965 28.4488C183.573 29.8732 184.462 31.1648 185.581 32.2492L202.408 48.8135L219.234 32.2492C220.897 30.611 222.028 28.5243 222.485 26.253C222.943 23.9818 222.705 21.628 221.804 19.4895C220.902 17.3509 219.376 15.5236 217.42 14.2386C215.463 12.9537 213.163 12.2688 210.811 12.2706ZM216.42 29.4983L202.408 43.2921L188.395 29.4983C187.659 28.7732 187.074 27.9124 186.676 26.965C186.277 26.0177 186.072 25.0023 186.072 23.9769C186.072 22.9514 186.277 21.936 186.676 20.9887C187.074 20.0413 187.659 19.1805 188.395 18.4554C189.132 17.7303 190.006 17.1552 190.969 16.7628C191.931 16.3703 192.962 16.1684 194.004 16.1684C195.046 16.1684 196.077 16.3703 197.04 16.7628C198.002 17.1552 198.876 17.7303 199.613 18.4554L202.408 21.2259L205.202 18.4749C206.714 17.0556 208.722 16.2638 210.811 16.2638C212.9 16.2638 214.909 17.0556 216.42 18.4749C217.157 19.1997 217.742 20.0604 218.141 21.0078C218.54 21.9553 218.745 22.9708 218.745 23.9964C218.745 25.022 218.54 26.0375 218.141 26.9849C217.742 27.9323 217.157 28.793 216.42 29.5178V29.4983Z" fill="white"/>
                        <path d="M185.368 180H247.251L257.286 127.668C257.286 127.668 257.719 114.678 245.826 109.234C233.933 103.791 212.686 98.5949 212.686 98.5949V49.6338C212.686 44.0141 208.124 39.4583 202.496 39.4583C196.869 39.4583 192.307 44.0141 192.307 49.6338V138.926L174.219 112.451C174.219 112.451 169.263 105.523 161.087 109.729C152.91 113.935 157.618 123.091 157.618 123.091L185.369 180H185.368Z" fill="#FFBEC9"/>
                        <rect x="10.1699" y="12.2034" width="36.6102" height="36.6102" rx="4" fill="white"/>
                        <rect x="61.0166" y="12.2034" width="93.5593" height="10.1695" rx="2" fill="white"/>
                        <rect x="61.0166" y="28.4746" width="93.5593" height="6.1017" rx="2" fill="white"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_244_579">
                        <rect width="257.288" height="180" fill="white"/>
                        </clipPath>
                        </defs>
                    </svg>
                    <h1 class="text-white text-2xl font-bold my-4">Empty Favorite</h1>
                    <p class="text-white text-base mb-8">You don't have favorite item yet.</p>

                    <button class="bg-secondary text-white w-fit py-2 px-8 text-xs border border-secondary rounded-md mb-4">
                        Shop Now
                    </button>
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