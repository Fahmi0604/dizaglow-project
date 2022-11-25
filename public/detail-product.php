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

    <div class="min-h-screen mt-[70px] bg-custom-black py-[7.5%] px-[10%] lg:py-[5%] lg:px-[7.5%] font-Proxima">
        
        <section class="flex mb-12">
            <div class="w-[40%]">
                <img src="assets/produk1.png" alt="detail-produk1" class="w-full">
                
                <div class="w-full flex mt-6">
                    <img src="assets/produk1.png" alt="detail-produk1" class="w-[20%]">
                    <img src="assets/produk1.png" alt="detail-produk1" class="w-[20%] ml-4">
                </div>
            </div>
            <div class="w-[60%] ml-[10%]">
                <h1 class="text-white font-bold text-[32px]">Acne Cream Night</h1>
                <div class="flex mt-4 mb-6">
                    <span class="text-custom-muted text-2xl mr-4"><s>Rp 50,000</s></span>
                    <span class="text-secondary text-2xl font-bold">Rp 25,000</span>
                </div>
                <div class="flex items-center mb-6">
                    <svg class="mr-4" width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.9467 0.500005C15.0908 0.501639 13.3115 1.24021 12 2.55334C11.3523 1.89428 10.5806 1.36997 9.72926 1.01066C8.87794 0.651353 7.96391 0.464151 7.03988 0.459854C6.11585 0.455556 5.20012 0.634249 4.34549 0.985625C3.49087 1.337 2.71427 1.85411 2.06049 2.50711C1.40672 3.16012 0.888696 3.93611 0.536313 4.79032C0.18393 5.64453 0.00415822 6.56005 0.00736641 7.48408C0.0105746 8.40811 0.1967 9.32237 0.555006 10.1741C0.913312 11.0258 1.43671 11.7982 2.095 12.4467L12 22.3517L21.905 12.4467C22.8834 11.467 23.5494 10.2192 23.8186 8.86108C24.0878 7.50294 23.9482 6.09546 23.4174 4.81666C22.8867 3.53786 21.9886 2.44518 20.8368 1.67682C19.685 0.908451 18.3312 0.498915 16.9467 0.500005ZM20.2483 10.8017L12 19.05L3.75167 10.8017C3.31809 10.3681 2.97415 9.85335 2.7395 9.28685C2.50485 8.72035 2.38408 8.11318 2.38408 7.5C2.38408 6.88683 2.50485 6.27966 2.7395 5.71316C2.97415 5.14665 3.31809 4.63192 3.75167 4.19834C4.18525 3.76476 4.69999 3.42082 5.26649 3.18617C5.83299 2.95152 6.44016 2.83074 7.05334 2.83074C7.66651 2.83074 8.27369 2.95152 8.84019 3.18617C9.40669 3.42082 9.92142 3.76476 10.355 4.19834L12 5.85501L13.645 4.21C14.5347 3.36129 15.7171 2.88778 16.9467 2.88778C18.1763 2.88778 19.3586 3.36129 20.2483 4.21C20.6822 4.64341 21.0264 5.15809 21.2613 5.72462C21.4961 6.29114 21.617 6.8984 21.617 7.51167C21.617 8.12494 21.4961 8.7322 21.2613 9.29873C21.0264 9.86525 20.6822 10.3799 20.2483 10.8133V10.8017Z" fill="white"/>
                    </svg>
                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.9999 16.3333C20.3106 16.3379 19.6309 16.4951 19.0096 16.7937C18.3883 17.0922 17.8409 17.5247 17.4066 18.06L11.4566 15.3183C11.7364 14.4617 11.7364 13.5383 11.4566 12.6817L17.4066 9.94001C18.1085 10.787 19.087 11.3588 20.1694 11.5545C21.2519 11.7502 22.3687 11.5573 23.3227 11.0097C24.2767 10.4622 25.0067 9.59523 25.3837 8.56187C25.7608 7.52852 25.7607 6.39519 25.3834 5.3619C25.0062 4.32861 24.2761 3.46179 23.322 2.91442C22.3678 2.36705 21.251 2.17432 20.1686 2.37023C19.0862 2.56615 18.1078 3.13813 17.4061 3.98522C16.7043 4.8323 16.3244 5.90005 16.3333 7.00001C16.3368 7.27794 16.3641 7.55507 16.4149 7.82834L10.2549 10.6633C9.59819 10.0212 8.76655 9.58711 7.8642 9.41551C6.96186 9.2439 6.02894 9.3424 5.18232 9.69866C4.33571 10.0549 3.61305 10.6531 3.1049 11.4182C2.59674 12.1834 2.32568 13.0815 2.32568 14C2.32568 14.9185 2.59674 15.8166 3.1049 16.5818C3.61305 17.3469 4.33571 17.9451 5.18232 18.3014C6.02894 18.6576 6.96186 18.7561 7.8642 18.5845C8.76655 18.4129 9.59819 17.9788 10.2549 17.3367L16.4149 20.1717C16.3641 20.4449 16.3368 20.7221 16.3333 21C16.3333 21.923 16.607 22.8252 17.1197 23.5927C17.6325 24.3601 18.3614 24.9582 19.2141 25.3114C20.0668 25.6647 21.0051 25.7571 21.9104 25.577C22.8156 25.3969 23.6471 24.9525 24.2998 24.2998C24.9524 23.6472 25.3969 22.8157 25.5769 21.9104C25.757 21.0052 25.6646 20.0669 25.3114 19.2142C24.9582 18.3614 24.36 17.6326 23.5926 17.1198C22.8252 16.607 21.9229 16.3333 20.9999 16.3333ZM20.9999 4.66667C21.4614 4.66667 21.9125 4.80352 22.2963 5.05991C22.68 5.3163 22.979 5.68072 23.1557 6.10708C23.3323 6.53344 23.3785 7.00259 23.2884 7.45522C23.1984 7.90784 22.9762 8.3236 22.6498 8.64992C22.3235 8.97625 21.9078 9.19847 21.4551 9.28851C21.0025 9.37854 20.5334 9.33233 20.107 9.15573C19.6806 8.97912 19.3162 8.68005 19.0598 8.29634C18.8034 7.91262 18.6666 7.4615 18.6666 7.00001C18.6666 6.38117 18.9124 5.78768 19.35 5.35009C19.7876 4.91251 20.3811 4.66667 20.9999 4.66667ZM6.99993 16.3333C6.53844 16.3333 6.08732 16.1965 5.7036 15.9401C5.31989 15.6837 5.02082 15.3193 4.84421 14.8929C4.66761 14.4666 4.6214 13.9974 4.71143 13.5448C4.80146 13.0922 5.02369 12.6764 5.35002 12.3501C5.67634 12.0238 6.0921 11.8015 6.54472 11.7115C6.99734 11.6215 7.4665 11.6677 7.89286 11.8443C8.31922 12.0209 8.68364 12.32 8.94003 12.7037C9.19642 13.0874 9.33326 13.5385 9.33326 14C9.33326 14.6188 9.08743 15.2123 8.64985 15.6499C8.21226 16.0875 7.61877 16.3333 6.99993 16.3333ZM20.9999 23.3333C20.5384 23.3333 20.0873 23.1965 19.7036 22.9401C19.3199 22.6837 19.0208 22.3193 18.8442 21.8929C18.6676 21.4666 18.6214 20.9974 18.7114 20.5448C18.8015 20.0922 19.0237 19.6764 19.35 19.3501C19.6763 19.0238 20.0921 18.8015 20.5447 18.7115C20.9973 18.6215 21.4665 18.6677 21.8929 18.8443C22.3192 19.0209 22.6836 19.32 22.94 19.7037C23.1964 20.0874 23.3333 20.5385 23.3333 21C23.3333 21.6188 23.0874 22.2123 22.6498 22.6499C22.2123 23.0875 21.6188 23.3333 20.9999 23.3333Z" fill="white"/>
                    </svg>
                </div>

                <div class="flex w-1/2">
                    <!-- counter produk -->
                    <div class="w-[40%] border border-white rounded-md mr-4">
                        <div class="flex flex-row h-10 w-full rounded-lg relative bg-transparent text-base">
                            <button id="decrement" class="bg-custom-black text-white h-full w-20 rounded-l cursor-pointer outline-none">
                                <span class="m-auto font-medium">−</span>
                            </button>
                            <input type="number" class="outline-none focus:outline-none text-center w-full bg-custom-black font-semibold text-md focus:text-black  md:text-basecursor-default flex items-center text-white " id="counter-product" value="0"></input>
                            <button id="increment" class="bg-custom-black text-white h-full w-20 rounded-r cursor-pointer">
                                <span class="m-auto font-medium">+</span>
                            </button>
                        </div>
                    </div>

                    <button class="bg-secondary text-white w-full py-3  text-xs  border border-secondary rounded-md">
                        Tambahkan ke keranjang
                    </button>
                </div>
            </div>
        </section>

        <section>
            <h2 class="text-white text-2xl font-bold mb-4">Deskripsi</h2>
            <p class="text-white text-xl">
                Lorem ipsum dolor sit amet consectetur. Cursus eu justo odio id sit. Vitae blandit massa tellus ullamcorper tellus. <br><br>
                Dolor laoreet dolor sapien auctor gravida adipiscing enim. Quam sed venenatis amet purus pellentesque id velit blandit nec. Magna rhoncus elit id dolor eget eget elit purus. Amet phasellus mi vivamus quis facilisis suscipit nibh dictum. Sem aliquet amet integer volutpat pharetra odio. Commodo fames malesuada eu condimentum nunc nisl porttitor. Libero nibh rhoncus ac sit facilisi in risus ut sed. Nec eu sed consequat viverra.<br><br>
                Congue elit tincidunt eu semper sed. Proin diam urna amet sagittis. Turpis mi eget quis auctor ipsum. Faucibus eu tempus sit tortor ut. Quisque id elementum tincidunt id imperdiet tortor. 
            </p>
        </section>
    </div>

    <!-- footer -->
    <?php include 'component/footer.php' ?>
</body>

    <script id="js-jquery.min.js" src="https://app-dev.merchant.my.id/assets/store/assets/js/jquery.min.js"></script>
    <script src="../src/js/dizaglow.js"></script>
</html>