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
                    <li class="font-bold">Akun Saya</li>
                    <li class="py-2">Riwayat Pesanan</li>
                    <li>Favorit</li>
                </ul>

                <p class="text-custom-red font-bold text-xl">Logout</p>
            </aside>

            <!-- Akun saya -->
            <section class="hidden w-[80%] pl-8 font-Proxima text-white">
                <h2 class="text-2xl font-bold mb-4">Akun Saya</h2>

                <h3 class="text-xl font-bold mb-2">Personal info</h3>
                <div class="flex mb-2">
                    <p class="w-[15%]">Nama</p>
                    <p class="font-bold">Umar ikhsan</p>
                </div>
                <div class="flex mb-2">
                    <p class="w-[15%]">Enail</p>
                    <p class="font-bold">Testemail@gmail.com</p>
                </div>
                <div class="flex">
                    <p class="w-[15%]">No Hp</p>
                    <p class="font-bold">0895637865082</p>
                </div>

                <button class="text-secondary underline text-xs my-6">Edit Personal Info</button>

                <h3 class="text-xl font-bold mb-2">Personal info</h3>
                <p>Change your current password</p>

                <button class="text-secondary underline text-xs my-6">Edit Password</button>
            </section>

            <!-- change account -->
            <section class="hidden w-[80%] pl-8 font-Proxima text-white">
                
                <div class="w-[50%]">
                    <div class="flex justify-between items-center mb-8">
                        <button class="w-[15%] flex items-center justify-between">
                            <svg width="6" height="8" viewBox="0 0 6 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.44824 6.89656L1.55169 4.00001L4.44824 1.10345" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
    
                            <span class="text-xs">Kembali</span>
                        </button>
                        <h2 class="text-2xl font-bold">Change Profile</h2>
                    </div>
                    
                    <form>
                        <input type="text" class="block w-full py-3 pl-3 text-sm text-white border border-white rounded-md bg-transparent outline-none mb-4" placeholder="Nama" value="Umar Ikhsan">
                        <input type="email" class="block w-full py-3 pl-3 text-sm text-white border border-white rounded-md bg-transparent outline-none mb-4" placeholder="Email" value="testemail@gmail.com">
                        <input type="tel" class="block w-full py-3 pl-3 text-sm text-white border border-white rounded-md bg-transparent outline-none mb-4" placeholder="Telp" value="62895637865082">
                        
                        <button class="bg-secondary text-white w-full py-3 text-xs border border-secondary rounded-md mb-4">
                            Submit
                        </button>
                    </form>
                </div>
            </section>

            <!-- change password -->
            <section class="w-[80%] pl-8 font-Proxima text-white">
                
                <div class="w-[50%]">
                    <div class="flex justify-between items-center mb-8">
                        <button class="w-[15%] flex items-center justify-between">
                            <svg width="6" height="8" viewBox="0 0 6 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.44824 6.89656L1.55169 4.00001L4.44824 1.10345" stroke="white" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
    
                            <span class="text-xs">Kembali</span>
                        </button>
                        <h2 class="text-2xl font-bold">Change Password</h2>
                    </div>
                    
                    <form>
                        <input type="password" class="block w-full py-3 pl-3 text-sm text-white border border-white rounded-md bg-transparent outline-none mb-4" placeholder="Password Lama">
                        <input type="password" class="block w-full py-3 pl-3 text-sm text-white border border-white rounded-md bg-transparent outline-none mb-4" placeholder="Password Baru">
                        <input type="password" class="block w-full py-3 pl-3 text-sm text-white border border-white rounded-md bg-transparent outline-none mb-4" placeholder="Konfirmasi Password">
                        
                        <button class="bg-secondary text-white w-full py-3 text-xs border border-secondary rounded-md mb-4">
                            Submit
                        </button>
                    </form>
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