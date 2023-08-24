<?php
// require_once("config/connector.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="dist/output.css" />
    <link rel="stylesheet" href="style/styles.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="dist/asset/js/script.js"></script>

    <script>
        // $(document).ready(function() {     $('#tabel-data').DataTable(); });
        $(document).ready(function() {
            $('#tabel-data').dataTable({
                "aLengthMenu": [
                    [
                        10, 30, 50, -1
                    ],
                    [
                        10, 30, 50, "All"
                    ]
                ],
                "pageLength": 10
            });
        });
        $(document).ready(function() {
            $(".terang").show();
            $(".gelap").hide();
            $(".namedark").hide();
            $(".namelight").show();
            $(".terang").click(function() {
                $(".gelap").show("slow");
                $(".terang").hide("slow");
                $(".namedark").show("slow");
                $(".namelight").hide("slow");
            });
            $(".gelap").click(function() {
                $(".gelap").hide("slow");
                $(".terang").show("slow");
                $(".namedark").hide("slow");
                $(".namelight").show("slow");
            });
        });
    </script>
</head>

<body onload="startTime()" class="w-full dark:bg-dark">
    <!-- Navbar -->
    <header class="flex">
        <div class="w-32 lg:w-36 overflow-hidden bg-transparent">
            <div class="nav fixed m-4 rounded-lg bg-white dark:bg-dark" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                <ul class="content-center mt-5 border rounded-xl hover:bg-gray-300">
                    <li class="content-center m-2 hover:text-white">
                        <a href="landing-page.php" style="text-decoration: none;">
                            <img src="dist/asset/navbar/home.png" class="mx-auto" alt="add item" />
                            <p class="namenav text-lg pt-1 ps-1 text-center font-semibold">Home</p>
                        </a>
                    </li>
                </ul>
                <ul class="content-center mt-5 border rounded-xl hover:bg-gray-300">
                    <li class="content-center m-2 hover:text-white">
                        <a href="additem.php" style="text-decoration: none;">
                            <img src="dist/asset/navbar/more.png" class="mx-auto" alt="add item" />
                            <p class="namenav text-lg pt-1 ps-1 text-center font-semibold">Items</p>
                        </a>
                    </li>
                </ul>
                <ul class="content-center mt-5 border rounded-xl hover:bg-gray-300">
                    <li class="content-center m-2 hover:text-white">
                        <a href="iventory.php" style="text-decoration: none;">
                            <img src="dist/asset/navbar/wallet.png" class="mx-auto" alt="add item" />
                            <p class="namenav text-lg pt-1 ps-1 text-center font-semibold">Wallet</p>
                        </a>
                    </li>
                </ul>
                <ul class="content-center mt-5 border rounded-xl hover:bg-gray-300">
                    <li class="content-center m-2 hover:text-white">
                        <a href="landing-page.php" style="text-decoration: none;">
                            <img src="dist/asset/navbar/package.png" class="mx-auto" alt="add item" />
                            <p class="namenav text-lg pt-1 ps-1 text-center font-semibold">Packet</p>
                        </a>
                    </li>
                </ul>
                <ul class="content-center mt-5 border rounded-xl hover:bg-gray-300">
                    <li class="content-center m-2 hover:text-white">
                        <a href="stock.php" style="text-decoration: none;">
                            <img src="dist/asset/navbar/warehouse.png" class="mx-auto" alt="add item" />
                            <p class="namenav text-lg pt-1 ps-1 text-center font-semibold">Stok</p>
                        </a>
                    </li>
                </ul>
                <ul class="content-center mt-5 border rounded-xl hover:bg-gray-300">
                    <li class="content-center m-2 hover:text-white">
                        <a href="landing-page.php" style="text-decoration: none;">
                            <img src="dist/asset/navbar/printer.png" class="mx-auto" alt="add item" />
                            <p class="namenav text-lg pt-1 ps-1 text-center font-semibold">Export</p>
                        </a>
                    </li>
                </ul>
                <ul class="content-cente mt-5 h-32 border rounded-xl hover:bg-gray-300">
                    <li class="mx-auto mt-3 h-10 mb-14 flex items-center lg:mt-0">
                        <input type="checkbox" class="hidden" id="dark-toggle" />
                        <label for="dark-toggle">
                            <div class="h-6 w-11 cursor-pointer items-center rounded-full">
                                <img src="dist/asset/navbar/light_mode.png" class="terang m-5" alt="" srcset="">
                                <p class="namelight text-xl ps-4 t text-center font-semibold" style="color: #f97316;">Light</p>
                            </div>
                            <div class="h-6 w-11 cursor-pointer lg:m-0 items-center rounded-full" style="color: #f97316; margin-top:-2vh">
                                <img src="dist/asset/navbar/night_mode.png" class="gelap m-5" alt="" srcset="">
                                <p class="namedark text-xl ps-4 text-center font-semibold">Dark</p>
                            </div>
                        </label>
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-full mr-5 self-start">
            <div class="w-full mb-10 h-24 mt-5 mr-5 bg-white dark:bg-dark rounded-lg shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] dark:border-2 dark:border-gray-500/50 dark:rounded-b-2xl dark:shadow-[inset_-12px_-8px_40px_#46464620]">
                <div class="mt-4 font-semibold text-sm text-gray-500 m-2 flex float-right">
                    <div id="tanggalBulanTahun" class="text-2xl mr-10 mt-4 font-semibold" style="color: #f97316;"></div>
                    <div class="w-64 mr-10 flex border-solid border-2 border-primary rounded-lg hover:bg-gray-200">
                        <a href="landing-page.php">
                            <img src="dist/asset/navbar/staff.png" class="mt-2 ms-2" style="width: 3.6vh;" alt="" srcset="">
                        </a>
                        <p class="text-2xl pt-3 ps-3 font-semibold text-slate-500">Admin</p>
                    </div>
                    <div class="mr-10 mt-2">
                        <a href="loginadmin.php" class="no-underline">
                            <img src="dist/asset/navbar/logout.png" alt="exit" />
                        </a>
                    </div>
                </div>
            </div>
            <div class="w-full dark:border-2 dark:border-solid dark:border-gray-500/50 dark:rounded-2xl dark:shadow-[inset_-12px_-8px_40px_#46464620]" style="height: 71vh;">
                <div class="header w-42 text-4xl font-semibold ps-3 pt-2">Walcome to Admin
                </div>
                <div class="header w-42 mt-5 text-4xl font-semibold ps-3 pt-2" style="color: grey;">Notes :
                </div>
            </div>
        </div>
    </header>

    <div class="footer mt-24 absolute w-full">
        <div class="coverfooter h-24 w-full">
            <p class="font-semibold text-3xl text-white float-left mt-8 ms-10">PT. Sagon Nutrition (Sulawesi Selatan)</p>
            <div class="footerleft float-right mt-8">
                <div class="watch flex">
                    <div id="txt" class="text-2xl mr-7 text-white font-semibold"></div>
                    <div class="font-semibold text-2xl mr-10 text-gray">V.01.25</div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navbar -->

    <!-- js link -->
    <script src="dist/asset/js/dark_mode.js"></script>
    <script src=" controller/time-date.js"></script>
    <script>
        $(document).ready(function() {
            $('#export_data').DataTable({
                dom: 'Bfrtip',
                buttons: ['excel', 'pdf']
            });
        });
    </script>
    <!-- End js link -->
</body>

</html>