<?php
session_start();
include_once("db/koneksi.php");
if (!isset($_SESSION['id'])) {
    echo "<script>alert('Anda harus login terlebih dahulu!');</script>";
    echo "<script>window.location.href = '../login.php';</script>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link href="./output.css" rel="stylesheet">
</head>

<body class="bg-pink-100 ">

    <!-- Navbar -->
    <nav class="bg-transparent text-black fixed top-4 w-[70%] left-0 right-0 z-20 mx-auto transition-all duration-500 ease-in-out" id="navbar">
        <div class="px-4 flex justify-around h-[80px]">

            <div class="flex items-center">
                <h1 class="text-3xl font-bold text-center text-text">BreadItuRoti</h1>
            </div>

            <div class=" navigation-menu duration-300 flex items-center  ">
                <ul class="flex gap-8 text-black  cursor-pointer">
                    <li class="relative group hover:text-pink-600">
                        <a href="bakery.php">Home</a>
                        <div class="absolute bottom-0 left-0 w-0 h-[2px] bg-pink-600 transition-all duration-300 group-hover:w-full"></div>
                    </li>
                    <li class="relative group hover:text-pink-600">
                        <a href="menu.php">Menu</a>
                        <div class="absolute bottom-0 left-0 w-0 h-[2px] bg-pink-600 transition-all duration-300 group-hover:w-full"></div>
                    </li>
                    <li class="relative group hover:text-pink-600">
                        <a href="#">About Us</a>
                        <div class="absolute bottom-0 left-0 w-0 h-[2px] bg-pink-600 transition-all duration-300 group-hover:w-full"></div>
                    </li>
                    <li class="relative group hover:text-pink-600">
                        <a href="order.php">Order</a>
                        <div class="absolute bottom-0 left-0 w-0 h-[2px] bg-pink-600 transition-all duration-300 group-hover:w-full"></div>
                    </li>
                    <li class="relative group hover:text-pink-600">
                        <a href="contact.php">Contact</a>
                        <div class="absolute bottom-0 left-0 w-0 h-[2px] bg-pink-600 transition-all duration-300 group-hover:w-full"></div>
                    </li>
                </ul>
            </div>

            <div class="flex justify-center items-center gap-2">
                <a href="login.php">
                    <button class="bg-button text-white font-semibold h-11 w-36 px-2 pb-1 rounded-full transition-transform duration-300 ">
                        Login
                    </button>
                </a>
                <a href="action/action_logout.php" class="bg-button text-white font-semibold h-11 w-36 px-2 pb-1 rounded-full transition-transform duration-300 text-center flex justify-center items-center">Log Out</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Header Section -->
    <header class="text-center py-10 mt-24">
        <h1 class="text-5xl font-extrabold text-pink-800 drop-shadow-md">Toko Roti Yang Membuat Roti</h1>
        <p class="text-2xl text-pink-600 mt-4 font-semibold">Fresh & Tasty</p>
    </header>
    <!-- Header End -->


    <!-- Promotion Section -->
    <section class="bg-pink-200 py-16 mt-10">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-extrabold text-pink-800 mb-6">Special Promotions</h2>
            <div class="container mx-auto px-4 flex justify-center gap-8 mt-16 mb-10">
                <div class="product-card w-[300px] rounded-md shadow-xl overflow-hidden z-10 relative cursor-pointer snap-start shrink-0 py-8 px-6 bg-pink-300 flex flex-col items-center justify-center gap-3 transition-all duration-300 group">
                    <div class="para uppercase text-center leading-none z-40">
                        <p style="-webkit-text-stroke: 1px rgb(0, 0, 0); -webkit-text-fill-color: transparent;" class="z-10 font-bold text-2xl -mb-5 tracking-wider text-pink-700">PAI</p>
                        <p class="font-bold text-4xl tracking-wider  z-10 text-pink-700">PAI</p>
                    </div>
                    <div class="w-[200px] aspect-square relative z-20 after:absolute after:h-1 after:w-full after:opacity-0 after:bg-[#ff1e92d1] after:top-8 after:left-0 after:group-hover:opacity-100 after:translate-x-1/2 after:translate-y-1/2 after:-z-20 after:group-hover:w-full after:transition-all after:duration-300 after:group-hover:origin-right after:group-hover:-translate-x-1/2 group-hover:translate-x-1/2 transition-all duration-300">
                        <img src="../public/assets/kue/pai3d.png" alt="" class="w-[90%] h-full object-cover" />
                        <div class="tooltips absolute top-0 left-0 -translate-x-[150%] p-2 flex flex-col items-start gap-10 transition-all duration-300 group-hover:-translate-x-full">
                            <p class="text-text font-bold text-2xl uppercase group-hover:delay-1000 transition-all opacity-0 group-hover:opacity-100 group-hover:transition-all group-hover:duration-500 ">
                                Buy 1 Get 1
                            </p>
                            <ul class="flex flex-col items-start gap-2">
                                <li class="inline-flex gap-2 items-center justify-center group-hover:delay-200 transition-all opacity-0 group-hover:opacity-100 group-hover:transition-all group-hover:duration-500">
                                    <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="3" class="stroke-[#ff5ae9]" stroke="#000000" fill="none" viewBox="0 0 24 24" height="15" width="15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>
                                    <p class="text-base font-semibold text-[#495c48]">Bahan Alamai</p>
                                </li>
                                <li class="inline-flex gap-2 items-center justify-center group-hover:delay-300 transition-all opacity-0 group-hover:opacity-100 group-hover:transition-all group-hover:duration-500">
                                    <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="3" class="stroke-[#ff5ae9]" stroke="#000000" fill="none" viewBox="0 0 24 24" height="15" width="15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>
                                    <p class="text-base font-semibold text-[#495c48]">
                                        Bebas Pengawet
                                    </p>
                                </li>
                                <li class="inline-flex gap-2 items-center justify-center group-hover:delay-400 transition-all opacity-0 group-hover:opacity-100 group-hover:transition-all group-hover:duration-500">
                                    <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="3" class="stroke-[#ff5ae9]" stroke="#000000" fill="none" viewBox="0 0 24 24" height="15" width="15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>
                                    <p class="text-base font-semibold text-[#495c48]">Tahan Lama</p>
                                </li>
                                <li class="inline-flex gap-2 items-center justify-center group-hover:delay-500 transition-all opacity-0 group-hover:opacity-100 group-hover:transition-all group-hover:duration-500">
                                    <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="3" class="stroke-[#ff5ae9]" stroke="#000000" fill="none" viewBox="0 0 24 24" height="15" width="15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>
                                    <p class="text-xs font-semibold text-[#495c48]">Mudah Di Sajikan</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="product-card w-[300px] rounded-md shadow-xl overflow-hidden z-10 relative cursor-pointer snap-start shrink-0 py-8 px-6 bg-pink-300 flex flex-col items-center justify-center gap-3 transition-all duration-300 group">
                    <div class="para uppercase text-center leading-none z-40">
                        <p style="-webkit-text-stroke: 1px rgb(0, 0, 0); -webkit-text-fill-color: transparent;" class="z-10 font-bold text-2xl -mb-5 tracking-wider text-pink-700">ROTI</p>
                        <p class="font-bold text-4xl tracking-wider  z-30 text-pink-700">ROTI</p>
                    </div>
                    <div class="w-[200px] aspect-square relative z-20 after:absolute after:h-1 after:w-full after:opacity-0 after:bg-[#ff1e92d1] after:top-8 after:left-0 after:group-hover:opacity-100 after:translate-x-1/2 after:translate-y-1/2 after:-z-20 after:group-hover:w-full after:transition-all after:duration-300 after:group-hover:origin-right after:group-hover:-translate-x-1/2 group-hover:translate-x-1/2 transition-all duration-300">
                        <img src="../public/assets/kue/roti3d.png" alt="" class="w-[90%] h-full object-cover" />
                        <div class="tooltips absolute top-0 left-0 -translate-x-[150%] p-2 flex flex-col items-start gap-10 transition-all duration-300 group-hover:-translate-x-full">
                            <p class="text-text font-bold text-2xl uppercase group-hover:delay-1000 transition-all opacity-0 group-hover:opacity-100 group-hover:transition-all group-hover:duration-500 ">
                                Diskon 15%
                            </p>
                            <ul class="flex flex-col items-start gap-2">
                                <li class="inline-flex gap-2 items-center justify-center group-hover:delay-200 transition-all opacity-0 group-hover:opacity-100 group-hover:transition-all group-hover:duration-500">
                                    <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="3" class="stroke-[#ff5ae9]" stroke="#000000" fill="none" viewBox="0 0 24 24" height="15" width="15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>
                                    <p class="text-base font-semibold text-[#495c48]">Bahan Alamai</p>
                                </li>
                                <li class="inline-flex gap-2 items-center justify-center group-hover:delay-300 transition-all opacity-0 group-hover:opacity-100 group-hover:transition-all group-hover:duration-500">
                                    <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="3" class="stroke-[#ff5ae9]" stroke="#000000" fill="none" viewBox="0 0 24 24" height="15" width="15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>
                                    <p class="text-base font-semibold text-[#495c48]">
                                        Bebas Pengawet
                                    </p>
                                </li>
                                <li class="inline-flex gap-2 items-center justify-center group-hover:delay-400 transition-all opacity-0 group-hover:opacity-100 group-hover:transition-all group-hover:duration-500">
                                    <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="3" class="stroke-[#ff5ae9]" stroke="#000000" fill="none" viewBox="0 0 24 24" height="15" width="15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>
                                    <p class="text-base font-semibold text-[#495c48]">Tahan Lama</p>
                                </li>
                                <li class="inline-flex gap-2 items-center justify-center group-hover:delay-500 transition-all opacity-0 group-hover:opacity-100 group-hover:transition-all group-hover:duration-500">
                                    <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="3" class="stroke-[#ff5ae9]" stroke="#000000" fill="none" viewBox="0 0 24 24" height="15" width="15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>
                                    <p class="text-xs font-semibold text-[#495c48]">Mudah Di Sajikan</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="product-card w-[300px] rounded-md shadow-xl overflow-hidden z-10 relative cursor-pointer snap-start shrink-0 py-8 px-6 bg-pink-300 flex flex-col items-center justify-center gap-3 transition-all duration-300 group">
                    <div class="para uppercase text-center leading-none z-40">
                        <p style="-webkit-text-stroke: 1px rgb(0, 0, 0); -webkit-text-fill-color: transparent;" class="z-10 font-bold text-2xl -mb-5 tracking-wider text-pink-700">SUS</p>
                        <p class="font-bold text-4xl tracking-wider  z-30 text-pink-700">SUS</p>
                    </div>
                    <div class="w-[200px] aspect-square relative z-20 after:absolute after:h-1 after:w-full after:opacity-0 after:bg-[#ff1e92d1] after:top-8 after:left-0 after:group-hover:opacity-100 after:translate-x-1/2 after:translate-y-1/2 after:-z-20 after:group-hover:w-full after:transition-all after:duration-300 after:group-hover:origin-right after:group-hover:-translate-x-1/2 group-hover:translate-x-1/2 transition-all duration-300">
                        <img src="../public/assets/kue/kuesus.png" alt="" class="w-[90%] h-full object-cover" />
                        <div class="tooltips absolute top-0 left-0 -translate-x-[150%] p-2 flex flex-col items-start gap-10 transition-all duration-300 group-hover:-translate-x-full">
                            <p class="text-text font-bold text-2xl uppercase group-hover:delay-1000 transition-all opacity-0 group-hover:opacity-100 group-hover:transition-all group-hover:duration-500 ">
                                Diskon 15%
                            </p>
                            <ul class="flex flex-col items-start gap-2">
                                <li class="inline-flex gap-2 items-center justify-center group-hover:delay-200 transition-all opacity-0 group-hover:opacity-100 group-hover:transition-all group-hover:duration-500">
                                    <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="3" class="stroke-[#ff5ae9]" stroke="#000000" fill="none" viewBox="0 0 24 24" height="15" width="15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>
                                    <p class="text-base font-semibold text-[#495c48]">Bahan Alamai</p>
                                </li>
                                <li class="inline-flex gap-2 items-center justify-center group-hover:delay-300 transition-all opacity-0 group-hover:opacity-100 group-hover:transition-all group-hover:duration-500">
                                    <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="3" class="stroke-[#ff5ae9]" stroke="#000000" fill="none" viewBox="0 0 24 24" height="15" width="15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>
                                    <p class="text-base font-semibold text-[#495c48]">
                                        Bebas Pengawet
                                    </p>
                                </li>
                                <li class="inline-flex gap-2 items-center justify-center group-hover:delay-400 transition-all opacity-0 group-hover:opacity-100 group-hover:transition-all group-hover:duration-500">
                                    <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="3" class="stroke-[#ff5ae9]" stroke="#000000" fill="none" viewBox="0 0 24 24" height="15" width="15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>
                                    <p class="text-base font-semibold text-[#495c48]">Tahan Lama</p>
                                </li>
                                <li class="inline-flex gap-2 items-center justify-center group-hover:delay-500 transition-all opacity-0 group-hover:opacity-100 group-hover:transition-all group-hover:duration-500">
                                    <svg stroke-linejoin="round" stroke-linecap="round" stroke-width="3" class="stroke-[#ff5ae9]" stroke="#000000" fill="none" viewBox="0 0 24 24" height="15" width="15" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                                    </svg>
                                    <p class="text-xs font-semibold text-[#495c48]">Mudah Di Sajikan</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- Promotion Section End -->

    <!-- Newsletter Signup Section -->
    <section class="bg-pink-300 py-12" id="komentar">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-extrabold text-pink-800 mb-4">Berikan Masukan Ke Kami Jika ada Something</h2>
            <p class="text-lg text-pink-600 mb-8">Roti Hati, Roti Mati, Roti Nggak Bisa Ganti</p>
            <form action="action/action_validasi.php" method="POST" class="flex flex-row justify-center gap-4">
                <input type="text" name="komen" placeholder="Kirim Masukan saran dan kritikan" class="w-full md:w-[50%] p-3 rounded-lg shadow-md border border-pink-600">
                <button type="submit" class="bg-button text-white font-semibold px-8 py-3 rounded-lg hover:bg-pink-700 transition-all duration-300">
                    Kirim
                </button>
            </form>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="bg-white py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-extrabold text-pink-800 mb-6">Komenan Viewers</h2>
            <div class="flex flex-wrap justify-center gap-8">
                <div class="testimonial-card bg-pink-100 rounded-lg shadow-md p-6 max-w-md">
                    <p class="text-gray-600 italic">"Rotinya Enak Banget, Sangan Menendang kek di tendang beneran</p>
                    <h4 class="text-pink-800 font-bold mt-4">- Betot Le</h4>
                </div>
                <div class="testimonial-card bg-pink-100 rounded-lg shadow-md p-6 max-w-md">
                    <p class="text-gray-600 italic">"Rotinya Enak Banget, Sangat Meninju kek di tinju beneran"</p>
                    <h4 class="text-pink-800 font-bold mt-4">Ricardo John</h4>
                </div>
                <div class="testimonial-card bg-pink-100 rounded-lg shadow-md p-6 max-w-md">
                    <p class="text-gray-600 italic">"Rotinya Enak Banget, Sangat sangat kek di sangat beneran"</p>
                    <h4 class="text-pink-800 font-bold mt-4">Willi asju</h4>
                </div>
            </div>
        </div>
    </section>





    <footer class="text-center mt-16 p-4 bg-pink-200">
        <p class="text-pink-800 text-lg">"Cocok Buat Orang Yang Diabetes"</p>
        <p class="text-gray-700 text-sm mt-2">3.73 ⭐️ Memberi Rating Dan 4350 reviews.</p>
    </footer>




    <div class="hidden " id="myModalKasar">
        <div class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-40">
            <div class="bg-pink-400 w-[250px] flex flex-col p-4 relative items-center justify-center shadow-lg rounded-2xl">
                <div class="text-center p-3 flex-auto justify-center">
                    <h2 class="text-xl font-bold py-4">Di Komen Anda ada Kata Kasar?</h2>
                    <p class="text-sm  px-2">
                        Jika masih ada kata kasar, maka kami akan menghapus komentar anda.
                    </p>
                </div>
                <div class="p-2 mt-2 text-center space-x-1 md:block">
                    <button class="mb-2 md:mb-0 bg-gray-700 px-5 py-2 text-sm shadow-sm font-medium tracking-wider border-2 border-gray-600 hover:border-gray-700 text-gray-300 rounded-full hover:shadow-lg hover:bg-gray-800 transition ease-in duration-300" onclick="hideModal(modalKasar)">
                        Cancel
                    </button>
                    <button class="bg-green-400 hover:bg-green-500 px-5 ml-4 py-2 text-sm shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-green-300 hover:border-green-500 text-white rounded-full transition ease-in duration-300" onclick="hideModal(modalKasar)">
                        Confirm
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="hidden" id="myModalNggaKasar">
        <div class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-40">
            <div class="bg-pink-400 w-[250px] flex flex-col p-4 relative items-center justify-center shadow-lg rounded-2xl">
                <div class="text-center p-3 flex-auto justify-center">
                    <h2 class="text-xl font-bold py-4">Terimakasih Atas Saran Dan Kritikan nya</h2>
                    <p class="text-sm  px-2">
                        Silahkan berikan saran dan kritikan yang membangun. dan jika sudah aman bisa klik confirm
                    </p>
                </div>
                <div class="p-2 mt-2 text-center space-x-1 md:block">
                    <button class="mb-2 md:mb-0 bg-gray-700 px-5 py-2 text-sm shadow-sm font-medium tracking-wider border-2 border-gray-600 hover:border-gray-700 text-gray-300 rounded-full hover:shadow-lg hover:bg-gray-800 transition ease-in duration-300" onclick="hideModal(modalNggaKasar)">
                        Cancel
                    </button>
                    <button class="bg-green-400 hover:bg-green-500 px-5 ml-4 py-2 text-sm shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-green-300 hover:border-green-500 text-white rounded-full transition ease-in duration-300" onclick="hideModal(modalNggaKasar)">
                        Confirm
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script src="js/validasi.js"></script>
    <script src="js/nav.js"></script>
</body>

</html>