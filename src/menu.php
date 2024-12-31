<?php
session_start();
include_once("db/koneksi.php");
if (!isset($_SESSION['id'])) {
    echo "<script>alert('Anda harus login terlebih dahulu!');</script>";
    echo "<script>window.location.href = 'login.php';</script>";
    exit;
}

$sql = "SELECT id_roti, jenis, nama AS title, deskripsi AS description, harga AS price, gambar AS image FROM bakery";
$result = $conn->query($sql);

$items = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $items[] = $row;
    }
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Bakery</title>
    <link href="./output.css" rel="stylesheet">
</head>

<body style="background-image: url(../public/assets/bgmenu.jpg);">
    <!-- Nav Start -->
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
                        <a href="#">Menu</a>
                        <div class="absolute bottom-0 left-0 w-0 h-[2px] bg-pink-600 transition-all duration-300 group-hover:w-full"></div>
                    </li>
                    <li class="relative group hover:text-pink-600">
                        <a href="about.php">About Us</a>
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
    <!-- Nav Start End-->


    <!-- Menu Start -->
    <div class=" mx-auto p-6 mt-24 z-10">
        <h1 class="text-3xl font-bold mb-8 text-center text-text mt-6">Menu Bakery</h1>
        <form method="GET" class="flex justify-between items-center mb-6" id="filter-form">
            <div>
                <select name="category" id="filter-category" class="px-4 py-2 border rounded-lg">
                    <option value="all">Semua Jenis</option>
                    <?php
                    $categories = array_unique(array_column($items, 'jenis'));
                    foreach ($categories as $categoryOption): ?>
                        <option value="<?= $categoryOption ?>" <?= isset($_GET['category']) && $_GET['category'] === $categoryOption ? 'selected' : '' ?>>
                            <?= ucfirst($categoryOption) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <input name="search" type="text" placeholder="Cari nama roti..." class="px-4 py-2 border rounded-full" value="<?= isset($_GET['search']) ? $_GET['search'] : '' ?>">
                <button type="submit" class="bg-button text-white px-4 py-2 rounded-full">
                    Cari
                </button>
            </div>
        </form>

        <!-- Menu Container -->
        <div id="menu-container" class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
            <?php if (!empty($items)): ?>
                <?php foreach ($items as $item): ?>
                    <div class="menu-item m-2 group px-10 py-5 bg-white rounded-lg flex flex-col items-center justify-center gap-2 relative after:absolute after:h-full after:bg-pink-600 z-10 shadow-lg after:-z-20  after:inset-0 after:rounded-lg transition-all duration-300 hover:transition-all hover:duration-300 after:transition-all after:duration-500 after:hover:transition-all after:hover:duration-500 overflow-hidden cursor-pointer after:-translate-y-full after:hover:translate-y-0 " data-category="<?= $item['jenis'] ?>" data-title="<?= strtolower($item['title']) ?>">
                        <img src="<?= $item['image'] ?>" alt="<?= $item['title'] ?>" class="h-24">
                        <p class="cardtxt font-semibold text-gray-800 tracking-wider group-hover:text-white text-lg">
                            <?= $item['title'] ?>
                        </p>
                        <p class="blueberry font-semibold text-gray-600 text-xs group-hover:text-gray-200">
                            <?= $item['description'] ?>
                        </p>
                        <div class="ordernow flex flex-row justify-between items-center w-full">
                            <p class="ordernow-text text-pink-600 font-semibold group-hover:text-white">
                                Rp <?= number_format($item['price'], 0, ',', '.') ?>
                            </p>
                            <a href="order.php?id_jenis=<?= urlencode($item['id_roti']) ?>">
                                <p class="btun4 lg:inline-flex items-center gap-3 group-hover:bg-pink-800 bg-pink-600 shadow-[10px_10px_150px_#f78db3] cursor-pointer py-2 px-4 text-sm font-semibold text-white rounded-full butn transition-all mt-2">
                                    Order Now
                                </p>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p class="text-center text-gray-500">Tidak ada data yang ditemukan.</p>
            <?php endif; ?>
        </div>

    </div>
    <!-- Menu End -->
    <script src="js/filter.js"></script>
    <script src="js/nav.js"></script>
</body>

</html>