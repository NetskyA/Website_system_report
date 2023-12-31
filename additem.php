<?php
// require_once("config/connector.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sagon Nutrition | Add item</title>
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

<body onload="startTime()" class=" dark:bg-dark">
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
                <ul class="content-center mt-5 h-32 border rounded-xl hover:bg-gray-300">
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
                    <div class="header w-64 text-4xl font-semibold ps-3 pt-2">Add items</div>
                    <div class="chose w-full flex ms-5">
                        <button type="submit" value="Login" id="btnind" name="login" class="w-60 h-14 mb-5 ms-3 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] text-white border-2 hover:bg-slate-100 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-2xl dark:text-white text-center hover:text-black">Ingredients</button>
                        <button type="submit" value="Login" id="btnmn" name="login" class="w-60 h-14 mb-5 ms-3 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] text-white border-2 hover:bg-slate-100 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-2xl dark:text-white text-center hover:text-black">Menu</button>
                        <button type="submit" value="Login" id="btnotr" name="login" class="w-60 h-14 mb-5 ms-3 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] text-white border-2 hover:bg-slate-100 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-2xl dark:text-white text-center hover:text-black">Other</button>
                        <button type="submit" value="Login" id="btnsmn" name="login" class="w-60 h-14 mb-5 ms-3 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] text-white border-2 hover:bg-slate-100 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-2xl dark:text-white text-center hover:text-black">Comming soon</button>
                    </div>
                </div>
                <div id="ingridents" class="w-11/12">
                    <div class="flex-row border-2 rounded-2xl dark:text-white w-1/1" id="team">
                        <div class="flex mb-2">
                            <div class="text-2xl font-semibold pt-2 ps-3 dark:text-white">
                                Type :
                            </div>
                            <select style="height: 4vh; width:10vw; border:none; background: transparent;">
                                <option value="Select"> </option>}
                                <option value="Vineet">Food</option>
                                <option value="Sumit">Non Food</option>
                            </select>
                            <button type="submit" value="Login" name="login" class="addcol w-40 h-10 mb-5 ms-32 mt-2 mr-1 dark:text-white text-black border-2 bg-slate-100 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-2xl text-center hover:bg-primary hover:text-white" style="background: transparent;">Add column</button>
                        </div>
                        <div class="flex">
                            <div class="text-2xl dark:text-white font-semibold pt-2 ps-3">
                                <label for="Date of Birth" class="dark:text-white">
                                    Enter Date:
                                    <input type="date" class="text-2xl  ms-8 font-semibold dark:text-white" style="border: none; background: transparent;" name="date">
                                </label>
                            </div>
                        </div>
                    </div>
                    <table class="w-full table table-bordered border-solid mt-4">
                        <thead>
                            <form action="">
                                <tr>
                                    <th class="w-1/1 font-semibold dark:text-white">No</th>
                                    <th class="w-1/1 font-semibold dark:text-white">Ingredients</th>
                                    <th class="w-1/1 font-semibold dark:text-white">Weight</th>
                                    <th class="w-1/1 font-semibold dark:text-white">Prize</th>
                                    <th class="w-1/1 font-semibold dark:text-white">Suppliers</th>
                                    <th class="w-1/1 font-semibold dark:text-white">Notes</th>
                                </tr>
                                <tr>
                                    <th class="font-semibold pb-2 dark:text-white">1</th>
                                    <td><input type="text" class="text-2xl dark:text-white " style="border: none; background: transparent;" name="Name Food"></td>
                                    <td class="flex"><input type="text" class="text-2xl dark:text-white" style="border: none; width:10vw; background: transparent;" name="Weight">
                                        <select style=" border:none; background: transparent;">
                                            <option value="Vineet" class="text-2xl dark:text-white">Gr</option>
                                            <option value="Select" class="text-2xl dark:text-white">Kg</option>
                                            <option value="Vineet" class="text-2xl dark:text-white">Ons</option>
                                            <option value="Vineet" class="text-2xl dark:text-white">Krat</option>
                                        </select>
                                    </td>
                                    <td><input type="text" class="text-2xl dark:text-white" style="border: none; background: transparent;" name="Prize" placeholder="Rp. "></td>
                                    <td><input type="text" class="text-2xl dark:text-white" style="border: none; background: transparent;" name="Suppliers"></td>
                                    <td><input type="text" class="text-2xl dark:text-white" style="border: none; background: transparent;" name="Note"></td>
                                </tr>
                                <tr>
                                    <th class="font-semibold pb-2 dark:text-white">2</th>
                                    <td><input type="text" class="text-2xl dark:text-white" style="border: none; background: transparent;" name="Name Food"></td>
                                    <td class="flex"><input type="text" class="text-2xl dark:text-white" style="border: none; width:10vw; background: transparent;" name="Weight">
                                        <select style=" border:none; background: transparent;">
                                            <option value="Vineet" class="text-2xl dark:text-white">Gr</option>
                                            <option value="Select" class="text-2xl dark:text-white">Kg</option>
                                            <option value="Vineet" class="text-2xl dark:text-white">Ons</option>
                                            <option value="Vineet" class="text-2xl dark:text-white">Krat</option>
                                        </select>
                                    </td>
                                    <td><input type="text" class="text-2xl dark:text-white" style="border: none; background: transparent;" name="Prize" placeholder="Rp. "></td>
                                    <td><input type="text" class="text-2xl dark:text-white" style="border: none; background: transparent;" name="Suppliers"></td>
                                    <td><input type="text" class="text-2xl dark:text-white" style="border: none; background: transparent;" name="Note"></td>
                                </tr>
                                <tr class="slidecol">
                                    <th class="font-semibold pb-2 dark:text-white">3</th>
                                    <td><input type="text" class="text-2xl dark:text-white" style="border: none; background: transparent;" name="Name Food"></td>
                                    <td class="flex"><input type="text" class="text-2xl dark:text-white" style="border: none; width:10vw;background: transparent;" name="Weight">
                                        <select style=" border:none; background: transparent;">
                                            <option value="Vineet" class="text-2xl dark:text-white">Gr</option>
                                            <option value="Select" class="text-2xl dark:text-white">Kg</option>
                                            <option value="Vineet" class="text-2xl dark:text-white">Ons</option>
                                            <option value="Vineet" class="text-2xl dark:text-white">Krat</option>
                                        </select>
                                    </td>
                                    <td><input type="text" class="text-2xl dark:text-white" style="border: none; background: transparent;" name="Prize" placeholder="Rp. "></td>
                                    <td><input type="text" class="text-2xl dark:text-white" style="border: none; background: transparent;" name="Suppliers"></td>
                                    <td><input type="text" class="text-2xl dark:text-white" style="border: none; background: transparent;" name="Note"></td>
                                </tr>
                            </form>
                        </thead>
                    </table>
                    <div class="w-1/5 flex mt-20">
                        <button type="submit" value="Login" name="login" class="w-40 h-13 mb-5 flex shadow-xl text-black border-4 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-2xl text-center">
                            <img src="dist/asset/navbar/save1.png" class="m-2" alt="save">
                            <p class="pt-4 ps-2 pr-3">Save</p>
                        </button>
                    </div>
                </div>
                <div id="menu" class="w-11/12">
                    <div class="flex-row border-2 rounded-2xl w-1/1 mb-3" id="team">
                        <div class="flex mb-2">
                            <div class="text-2xl font-semibold pt-2 ps-3 dark:text-white">
                                Food types :
                            </div>
                            <select style="height: 4vh; width:10vw; border:none; background: transparent;" class="dark:text-white">
                                <option value="Vineet">Food</option>
                                <option value="Sumit">Drink</option>
                            </select>
                            <button type="submit" value="Login" name="login" class="addcol w-40 h-10 mb-3 mt-2 ms-30 text-black border-2 dark:text-white dark:bg-dark bg-slate-100 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-2xl text-center hover:bg-primary hover:text-white">Add column</button>
                        </div>
                        <div class="flex mb-2">
                            <div class="text-2xl font-semibold pt-2 ps-3 dark:text-white">
                                Dish type :
                            </div>
                            <select style="height: 4vh; width:10.8vw; border:none; background: transparent;" class="dark:text-white">
                                <option value="Vineet">Dessert</option>
                                <option value="Sumit">Jus</option>
                                <option value="Sumit">Salad</option>
                                <option value="Sumit">Noodles</option>
                                <option value="Sumit">Pies</option>
                                <option value="Sumit">Soups</option>
                                <option value="Sumit">Cereals</option>
                                <option value="Sumit">Seafood</option>
                                <option value="Sumit">Pasta</option>
                                <option value="Sumit">Stews</option>
                            </select>
                        </div>
                        <div class="flex mb-8">
                            <div class="text-2xl font-semibold pt-2 ps-3 dark:text-white">
                                <label for="Date of Birth" style="background: transparent;">
                                    Enter Date:
                                    <input type="date" class="text-2xl ms-8 font-semibold" style="border: none; background: transparent;" name="date">
                                </label>
                            </div>
                        </div>
                    </div>
                    <table class="w-full table table-bordered">
                        <thead>
                            <form action="">
                                <tr>
                                    <th class="w-1/1 font-semibold dark:text-white">No</th>
                                    <th class="w-48 font-semibold dark:text-white">Conditions</th>
                                    <th class="w-1/1 font-semibold dark:text-white">Name Food</th>
                                    <th class="w-1/1 font-semibold dark:text-white">Ingredients</th>
                                    <th class="w-1/1 font-semibold dark:text-white">Qty</th>
                                    <th class="w-38 font-semibold dark:text-white">Weight</th>
                                    <th class="w-1/1 font-semibold dark:text-white">Purchase Price</th>
                                </tr>
                                <tr>
                                    <th class="font-semibold pb-2 dark:text-white">1</th>
                                    <td class="flex">
                                        <select style=" border:none; background: transparent;">
                                            <option value="Vineet" class="dark:text-white">Display</option>
                                            <option value="Sumit" class="dark:text-white">W.House</option>
                                        </select>
                                    </td>
                                    <td><input type="text" class="text-2xl w-full dark:text-white" style="border: none; background: transparent;" name="name" placeholder="Name"></td>
                                    <td><input type="text" class="text-2xl dark:text-white" style="border: none; width:10vw;background: transparent;" name="Bahan" placeholder="Ingredients"> </td>
                                    <td><input type="text" class="text-2xl w-full dark:text-white" style="border: none;background: transparent;" name="Qty" placeholder="Quantity"></td>
                                    <td class="flex">
                                        <input type="text" class="text-2xl dark:text-white" style="border: none; width:10vw;background: transparent;" name="Weight">
                                        <select style=" border:none; background: transparent;">
                                            <option value="Vineet" class="text-2xl dark:text-white">Gr</option>
                                            <option value="Select" class="text-2xl dark:text-white">Kg</option>
                                            <option value="Vineet" class="text-2xl dark:text-white">Ons</option>
                                            <option value="Vineet" class="text-2xl dark:text-white">Krat</option>
                                            <option value="Vineet" class="text-2xl dark:text-white">Ml</option>
                                            <option value="Vineet" class="text-2xl dark:text-white">Liter</option>
                                        </select>
                                    </td>
                                    <td><input type="number" id="inputAngka1" class="text-2xl w-full" style="border: none;background: transparent;" name="Prize" placeholder="Raw price"></td>
                                </tr>
                                <tr>
                                    <th> </th>
                                    <td onselectstart="return false"> </td>
                                    <td onselectstart="return false"></td>
                                    <td><input type="text" class="text-2xl dark:text-white" style="border: none; width:10vw;background: transparent;" name="Bahan" placeholder="Ingredients"> </td>
                                    <td><input type="text" class="text-2xl w-full dark:text-white" style="border: none;background: transparent;" name="Qty" placeholder="Quantity"></td>
                                    <td class="flex">
                                        <input type="text" class="text-2xl dark:text-white" style="border: none; width:10vw;background: transparent;" name="Weight">
                                        <select style=" border:none; background: transparent;">
                                            <option value="Vineet" class="text-2xl dark:text-white">Gr</option>
                                            <option value="Select" class="text-2xl dark:text-white">Kg</option>
                                            <option value="Vineet" class="text-2xl dark:text-white">Ons</option>
                                            <option value="Vineet" class="text-2xl dark:text-white">Krat</option>
                                            <option value="Vineet" class="text-2xl dark:text-white">Ml</option>
                                            <option value="Vineet" class="text-2xl dark:text-white">Liter</option>
                                        </select>
                                    </td>
                                    <td><input type="number" id="inputAngka2" class="text-2xl w-full dark:text-white" style="border: none;background: transparent;" name="Prize" placeholder="Raw price"></td>
                                </tr>
                                <tr>
                                    <th> </th>
                                    <td onselectstart="return false"> </td>
                                    <td onselectstart="return false"></td>
                                    <td><input type="text" class="text-2xl dark:text-white" style="border: none; width:10vw;background: transparent;" name="Bahan" placeholder="Ingredients"> </td>
                                    <td><input type="text" class="text-2xl w-full dark:text-white" style="border: none; background: transparent;" name="Qty" placeholder="Quantity"></td>
                                    <td class="flex">
                                        <input type="text" class="text-2xl" style="border: none; width:10vw;background: transparent;" name="Weight">
                                        <select style=" border:none;background: transparent;">
                                            <option value="Vineet" class="text-2xl dark:text-white">Gr</option>
                                            <option value="Select" class="text-2xl dark:text-white">Kg</option>
                                            <option value="Vineet" class="text-2xl dark:text-white">Ons</option>
                                            <option value="Vineet" class="text-2xl dark:text-white">Krat</option>
                                            <option value="Vineet" class="text-2xl dark:text-white">Ml</option>
                                            <option value="Vineet" class="text-2xl dark:text-white">Liter</option>
                                        </select>
                                    </td>
                                    <td><input type="number" id="inputAngka3" class="text-2xl w-full dark:text-white" style="border: none;background: transparent;" name="Prize" placeholder="Raw price"></td>
                                </tr>
                                <tr>
                                    <th> </th>
                                    <td onselectstart="return false"> </td>
                                    <td onselectstart="return false"></td>
                                    <td><input type="text" class="text-2xl dark:text-white" style="border: none; width:10vw;background: transparent;" name="Bahan" placeholder="Ingredients"> </td>
                                    <td><input type="text" class="text-2xl w-full dark:text-white" style="border: none;background: transparent;" name="Qty" placeholder="Quantity"></td>
                                    <td class="flex">
                                        <input type="text" class="text-2xl dark:text-white" style="border: none; width:10vw;background: transparent;" name="Weight">
                                        <select style=" border:none;background: transparent;">
                                            <option value="Vineet" class="text-2xl dark:text-white">Gr</option>
                                            <option value="Select" class="text-2xl dark:text-white">Kg</option>
                                            <option value="Vineet" class="text-2xl dark:text-white">Ons</option>
                                            <option value="Vineet" class="text-2xl dark:text-white">Krat</option>
                                            <option value="Vineet" class="text-2xl dark:text-white">Ml</option>
                                            <option value="Vineet" class="text-2xl dark:text-white">Liter</option>
                                        </select>
                                    </td>
                                    <td><input type="number" id="inputAngka4" class="text-2xl dark:text-white w-full" style="border: none;background: transparent;" name="Prize" placeholder="Raw price"></td>
                                </tr>
                                <tr class="bar2">
                                    <td> </td>
                                    <td onselectstart="return false"> </td>
                                    <td onselectstart="return false"> </td>
                                    <td><input type="text" class="text-2xl dark:text-white" style="border: none; width:10vw;background: transparent;" name="Bahan" placeholder="Ingredients"> </td>
                                    <td><input type="text" class="text-2xl dark:text-white w-full" style="border: none;background: transparent;" name="Qty" placeholder="Quantity"></td>
                                    <td class="flex">
                                        <input type="text" class="text-2xl dark:text-white" style="border: none; width:10vw;background: transparent;" name="Weight">
                                        <select style=" border:none;background: transparent;">
                                            <option value="Vineet" class="text-2xl dark:text-white">Gr</option>
                                            <option value="Select" class="text-2xl dark:text-white">Kg</option>
                                            <option value="Vineet" class="text-2xl dark:text-white">Ons</option>
                                            <option value="Vineet" class="text-2xl dark:text-white">Krat</option>
                                            <option value="Vineet" class="text-2xl dark:text-white">Ml</option>
                                            <option value="Vineet" class="text-2xl dark:text-white">Liter</option>
                                        </select>
                                    </td>
                                    <td><input type="text" id="nilaiInput" class="text-2xl dark:text-white w-full" style="border: none; background: transparent;" name="Prize" placeholder="Raw price"></td>
                                </tr>
                                <tr>
                                    <th colspan="5" onselectstart="return false"> </th>
                                    <td class="w-30 font-semibold text-end pt-2 dark:text-white" style="padding-top: 1.8vh;">Services cost</td>
                                    <td><input type="number" id="inputAngka5" class="text-2xl dark:text-white w-full" style="border: none; background: transparent;" name="Prize" placeholder="Other cost"></td>
                                </tr>
                            </form>
                            <tr>
                                <td colspan="5"></td>
                                <td class="w-30 font-semibold text-end pt-2 dark:text-white" style="padding-top: 1.8vh; background: transparent;">Tax cost</td>
                                <td>
                                    <input type="number" id="inputAngka6" class="text-2xl dark:text-white w-full" style="border: none; background: transparent;" name="tax" placeholder="Max 0.08%">
                                </td>
                            </tr>
                        </thead>
                    </table>
                    <tr>
                        <td>
                            <p class="text-2xl font-semibold text-red-700 pt-2 ps-3 dark:text-primary">*Mohon cek kembali HPP</p>
                        </td>
                        <td>
                            <input type="text" class="text-2xl w-full mb-8 dark:text-white border border-gray-300" style="background: transparent;" name="Nt" placeholder="Catatan">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="7">
                            <button type="submit" id="btnsubmit" value="Login" onclick="totalMenu()" name="login" class="w-48 h-14 float-right shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] text-white bg-primary focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-2xl dark:text-white">Submit</button>
                        </td>
                    </tr>
                    <div class="mt-20" style="width: 25vw;">
                        <table class="table table-bordered border-solid">
                            <tr>
                                <th class="dark:text-white">Total Price</th>
                                <td>
                                    <p id="hargaAsli" class="dark:text-white"></p>
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 8vw;" class="dark:text-white">Estimated sell</th>
                                <td style="width: 15vw;" class="dark:text-white">
                                    <div id="hargaTambah" class="dark:text-whitedark:text-white"></div>
                                </td>
                            </tr>
                            <tr>
                                <th class="dark:text-white">Net sales</th>
                                <td>
                                    <div id="hargaJual" class="dark:text-white"></div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
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