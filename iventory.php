<?php
// require_once("config/connector.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sagon Nutrition | Iventory</title>
    <link rel="shortcut icon" href="dist/asset/logo/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="dist/output.css" />
    <link rel="stylesheet" href="style/styles.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.8/dist/sweetalert2.all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="dist/asset/js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".addcol").hide();
            $("#ingridents").hide();
            $("#menu").hide();
            $("#team").hide();
            $(".slidecol").hide();
            $(".bar2").hide();

            $("#btnind").dblclick(function() {
                $("#ingridents").show("slow");
                $(".addcol").show("slow");
                $("#team").show("slow");
                $("#btnmn").hide("slow");
                $("#btnotr").hide("slow");
                $("#btnsmn").hide("slow");
                $("#btnind").click(function() {
                    $("#ingridents").hide("slow");
                    $(".addcol").hide("slow");
                    $("#team").hide("slow");
                    $("#btnmn").show("slow");
                    $("#btnotr").show("slow");
                    $("#btnsmn").show("slow");
                })
            });

            $("#btnmn").dblclick(function() {
                $("#menu").show("slow");
                $(".addcol").show("slow");
                $("#team").show("slow");
                $("#btnind").hide("slow");
                $("#btnotr").hide("slow");
                $("#btnsmn").hide("slow");
                $("#btnmn").click(function() {
                    $("#menu").hide("slow");
                    $(".addcol").hide("slow");
                    $("#team").hide("slow");
                    $("#btnind").show("slow");
                    $("#btnotr").show("slow");
                    $("#btnsmn").show("slow");
                })
            });

            $(".addcol").click(function() {
                $(".slidecol").show();
            })
            $(".addcol").click(function() {
                $(".bar2").show();
            })


            // darkmode
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
                        <a href="packet.php" style="text-decoration: none;">
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
                        <a href="export.php" style="text-decoration: none;">
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
                    <div class="w-64 mr-10 flex border-solid border-2 mt-1 border-primary rounded-lg hover:bg-gray-200">
                        <a href="landing-page.php">
                            <img src="dist/asset/navbar/staff.png" class="mt-2 mb-1 ms-2" style="width: 3.6vh;" alt="" srcset="">
                        </a>
                        <p class="text-2xl pt-3 ps-3 font-semibold text-slate-500">Admin</p>
                    </div>
                    <div class="mr-10 mt-2">
                        <a href="#" class="no-underline" data-modal-target="popup-modal" data-modal-toggle="popup-modal">
                            <img src="dist/asset/navbar/logout.png" alt="exit" />
                        </a>
                    </div>
                    <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative w-full max-w-md max-h-full">
                            <div class="relative rounded-lg shadow w-full dark:bg-gray-700" style="background-color: #f97316;">
                                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-600 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="popup-modal">
                                    <img src="dist/asset/login/close.png" class="w-3 h-3" alt="" srcset="">
                                    <span class="sr-only">Close modal</span>
                                </button>
                                <div class="p-6 text-center">
                                    <img src="dist/asset/login/warning.png" class="mx-auto mb-4 text-gray-400 w-16 h-16 dark:text-gray-200" alt="" srcset="">
                                    <h3 class="mb-5 text-2xl font-normal text-white dark:text-white">Are you sure you want to logout</h3>
                                    <div class="mt-6 flex justify-center gap-x-4">
                                        <a class="px-4 inline-flex justify-center " href="loginadmin.php" style="text-decoration: none;" />
                                        <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg text-sm font-medium px-5 py-2.5 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                            <p class="text-gray-800 dark:text-white text-xl">
                                                Logout
                                            </p>
                                        </button>
                                        </a>
                                        <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                            <p class="text-gray-800 dark:text-white text-xl">
                                                Cancel
                                            </p>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-44">
                <div class="w-2/3 flex">
                    <div class="header w-40 text-4xl font-semibold ps-3 pt-2">Wallet</div>
                    <div class="chose w-full flex ms-5">
                        <button type="submit" value="Login" id="btnind" name="login" class="w-60 h-14 mb-5 ms-3 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] text-white border-2 hover:bg-slate-100 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-2xl dark:text-white text-center hover:text-black">Income</button>
                        <button type="submit" value="Login" id="btnmn" name="login" class="w-60 h-14 mb-5 ms-3 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] text-white border-2 hover:bg-slate-100 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-2xl dark:text-white text-center hover:text-black">Expense</button>
                        <button type="submit" value="Login" id="btnotr" name="login" class="w-60 h-14 mb-5 ms-3 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] text-white border-2 hover:bg-slate-100 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-2xl dark:text-white text-center hover:text-black">Bonus</button>
                    </div>
                </div>
                <!-- Content -->

                <!-- END Content -->
            </div>
        </div>
    </header>
    <div class="footer mt-24 w-full">
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
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
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