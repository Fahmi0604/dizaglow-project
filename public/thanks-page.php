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

    <div class=" mt-[70px] bg-custom-black py-[7.5%] px-[10%] lg:py-[10%] lg:px-[7.5%] font-Proxima">
        <div class="flex items-center flex-col text-center">
            <h1 class="text-white text-4xl font-bold mb-14">Thank You for Your Order</h1>
            <svg width="160" height="180" viewBox="0 0 160 180" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_244_1617)">
                <path d="M23.1802 37.3426L110.457 36.1218L138.651 179.999H10.7968C4.21156 179.999 -0.83933 175.082 0.116413 169.6L23.1802 37.3426Z" fill="#FFA0B0"/>
                <path d="M110.457 36.1218L127.249 37.3426L159.248 167.637C160.815 174.017 155.023 179.999 147.278 179.999H138.651L110.457 36.1218Z" fill="#FF6881"/>
                <path d="M59.6921 36.8929L55.4941 36.8311C55.5025 36.4603 55.7264 27.655 59.6446 18.7037C64.9991 6.46744 74.6615 1.80286e-06 87.5878 1.80286e-06C87.9558 1.80286e-06 97.3817 -0.0276621 105.571 6.77057C113.3 13.1862 117.219 23.3106 117.219 36.8611H113.021C113.021 24.3341 109.545 15.0756 102.692 9.34271C95.8103 3.58629 87.762 3.53155 87.6088 3.53155H87.6067C60.7311 3.53155 59.6977 36.5592 59.6914 36.8929H59.6921Z" fill="#FFBEC9"/>
                <path d="M99.1071 48.0031C97.9478 48.0031 97.0081 47.2127 97.0081 46.2374C97.0081 29.21 92.5442 16.4764 84.1 9.41274C77.0998 3.55802 69.8862 3.54096 69.5882 3.53213C40.5919 3.53213 39.4879 45.8371 39.4795 46.2644C39.462 47.2303 38.5258 48.0037 37.3812 48.0037C37.37 48.0037 37.3595 48.0037 37.349 48.0037C36.1903 47.9896 35.2647 47.1873 35.2815 46.2126C35.2892 45.7482 35.5285 34.7098 39.6908 23.4771C45.3833 8.11784 55.7131 -8.39875e-06 69.5651 -8.39875e-06C69.8856 -8.39875e-06 78.665 -0.0435645 86.9427 6.81058C96.4071 14.6477 101.206 27.9128 101.206 46.2368C101.206 47.2121 100.266 48.0025 99.1071 48.0025V48.0031Z" fill="#FFDBE1"/>
                </g>
                <defs>
                <clipPath id="clip0_244_1617">
                <rect width="159.505" height="180" fill="white"/>
                </clipPath>
                </defs>
            </svg>
            <p class="text-white text-base my-6">Pesanan anda telah dikonfirmasi! <br>Klik tombol dibawah untuk mengetahui cara pembayaran</p>
        
            <button class="bg-secondary text-white w-fit py-2 px-6 text-sm border border-secondary rounded-md mb-4">
                Lihat Cara Pembayaran
            </button>
        </div>
    </div>

    <!-- footer -->
    <?php include 'component/footer.php' ?>
</body>

    <script id="js-jquery.min.js" src="https://app-dev.merchant.my.id/assets/store/assets/js/jquery.min.js"></script>
    <script src="../src/js/dizaglow.js"></script>
</html>