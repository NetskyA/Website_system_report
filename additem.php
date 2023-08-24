<?php
// require_once("config/connector.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add item</title>
    <link rel="stylesheet" href="dist/output.css" />
    <link rel="stylesheet" href="style/styles.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
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

        });
    </script>

</head>

<body onload="startTime()">
    <!-- Navbar -->
    <header class="flex">
        <div class="w-32 lg:w-36 overflow-hidden bg-transparent">
            <div class="nav fixed m-4 rounded-lg bg-white" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
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
            </div>
        </div>
        <div class="w-full mr-5 self-start">
            <div class="w-full mb-10 h-24 mt-5 mr-5 rounded-lg shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px]">
                <div class="mt-4 font-semibold text-sm text-gray-500 m-2 flex float-right">
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
            <div class="mb-44">
                <div class="w-2/3 flex">
                    <div class="header w-64 text-4xl font-semibold ps-3 pt-2">Add items</div>
                    <div class="chose w-full flex ms-5">
                        <button type="submit" value="Login" id="btnind" name="login" class="w-60 h-14 mb-5 ms-3 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] text-white border-2 hover:bg-slate-100 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-2xl text-center hover:text-black">Ingredients</button>
                        <button type="submit" value="Login" id="btnmn" name="login" class="w-60 h-14 mb-5 ms-3 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] text-white border-2 hover:bg-slate-100 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-2xl text-center hover:text-black">Menu</button>
                        <button type="submit" value="Login" id="btnotr" name="login" class="w-60 h-14 mb-5 ms-3 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] text-white border-2 hover:bg-slate-100 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-2xl text-center hover:text-black">Other</button>
                        <button type="submit" value="Login" id="btnsmn" name="login" class="w-60 h-14 mb-5 ms-3 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] text-white border-2 hover:bg-slate-100 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-2xl text-center hover:text-black">Comming soon</button>
                    </div>
                </div>
                <div id="ingridents" class="w-1/2">
                    <div class="flex-row border-2 rounded-2xl w-3/5" id="team">
                        <div class="flex mb-2">
                            <div class="text-2xl font-semibold pt-2 ps-3">
                                Type :
                            </div>
                            <select style="height: 4vh; width:10vw; border:none;">
                                <option value="Select"> </option>}
                                <option value="Vineet">Food</option>
                                <option value="Sumit">Non Food</option>
                            </select>
                            <button type="submit" value="Login" name="login" class="addcol w-40 h-10 mb-5 ms-32 mt-2 mr-1 text-black border-2 bg-slate-100 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-2xl text-center hover:bg-primary hover:text-white">Add column</button>
                        </div>
                        <div class="flex">
                            <div class="text-2xl font-semibold pt-2 ps-3">
                                <label for="Date of Birth">
                                    Enter Date:
                                    <input type="date" class="text-2xl ms-8 font-semibold" style="border: none;" name="date">
                                </label>
                            </div>
                        </div>
                    </div>
                    <table class="w-full mt-5 table table-bordered border-solid">
                        <thead>
                            <form action="">
                                <tr>
                                    <th class="w-1/1 font-semibold">No</th>
                                    <th class="w-1/1 font-semibold">Ingredients</th>
                                    <th class="w-1/1 font-semibold">Weight</th>
                                    <th class="w-1/1 font-semibold">Prize</th>
                                    <th class="w-1/1 font-semibold">Suppliers</th>
                                    <th class="w-1/1 font-semibold">Notes</th>
                                </tr>
                                <tr>
                                    <th class="font-semibold pb-2">1</th>
                                    <td><input type="text" class="text-2xl" style="border: none;" name="Name Food"></td>
                                    <td class="flex"><input type="text" class="text-2xl" style="border: none; width:10vw" name="Weight">
                                        <select style=" border:none;">
                                            <option value="Vineet" class="text-2xl"> </option>
                                            <option value="Vineet" class="text-2xl">Gr</option>
                                            <option value="Select" class="text-2xl">Kg</option>
                                            <option value="Vineet" class="text-2xl">Ons</option>
                                            <option value="Vineet" class="text-2xl">Krat</option>
                                        </select>
                                    </td>
                                    <td><input type="text" class="text-2xl" style="border: none;" name="Prize" placeholder="Rp. "></td>
                                    <td><input type="text" class="text-2xl" style="border: none;" name="Suppliers"></td>
                                    <td><input type="text" class="text-2xl" style="border: none;" name="Note"></td>
                                </tr>
                                <tr>
                                    <th class="font-semibold pb-2">2</th>
                                    <td><input type="text" class="text-2xl" style="border: none;" name="Name Food"></td>
                                    <td class="flex"><input type="text" class="text-2xl" style="border: none; width:10vw" name="Weight">
                                        <select style=" border:none;">
                                            <option value="Vineet" class="text-2xl"> </option>
                                            <option value="Vineet" class="text-2xl">Gr</option>
                                            <option value="Select" class="text-2xl">Kg</option>
                                            <option value="Vineet" class="text-2xl">Ons</option>
                                            <option value="Vineet" class="text-2xl">Krat</option>
                                        </select>
                                    </td>
                                    <td><input type="text" class="text-2xl" style="border: none;" name="Prize" placeholder="Rp. "></td>
                                    <td><input type="text" class="text-2xl" style="border: none;" name="Suppliers"></td>
                                    <td><input type="text" class="text-2xl" style="border: none;" name="Note"></td>
                                </tr>
                                <tr class="slidecol">
                                    <th class="font-semibold pb-2">3</th>
                                    <td><input type="text" class="text-2xl" style="border: none;" name="Name Food"></td>
                                    <td class="flex"><input type="text" class="text-2xl" style="border: none; width:10vw" name="Weight">
                                        <select style=" border:none;">
                                            <option value="Vineet" class="text-2xl"> </option>
                                            <option value="Vineet" class="text-2xl">Gr</option>
                                            <option value="Select" class="text-2xl">Kg</option>
                                            <option value="Vineet" class="text-2xl">Ons</option>
                                            <option value="Vineet" class="text-2xl">Krat</option>
                                        </select>
                                    </td>
                                    <td><input type="text" class="text-2xl" style="border: none;" name="Prize" placeholder="Rp. "></td>
                                    <td><input type="text" class="text-2xl" style="border: none;" name="Suppliers"></td>
                                    <td><input type="text" class="text-2xl" style="border: none;" name="Note"></td>
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
                    <div class="flex-row border-2 rounded-2xl w-1/3 mb-3" id="team">
                        <div class="flex mb-2">
                            <div class="text-2xl font-semibold pt-2 ps-3">
                                Food types :
                            </div>
                            <select style="height: 4vh; width:10vw; border:none;">
                                <option value="Select"> </option>}
                                <option value="Vineet">Food</option>
                                <option value="Sumit">Drink</option>
                            </select>
                            <button type="submit" value="Login" name="login" class="addcol w-40 h-10 mb-3 mt-2 ms-32 text-black border-2 bg-slate-100 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-2xl text-center hover:bg-primary hover:text-white">Add column</button>
                        </div>
                        <div class="flex mb-2">
                            <div class="text-2xl font-semibold pt-2 ps-3">
                                Dish type :
                            </div>
                            <select style="height: 4vh; width:10.8vw; border:none;">
                                <option value="Select"> </option>}
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
                            <div class="text-2xl font-semibold pt-2 ps-3">
                                <label for="Date of Birth">
                                    Enter Date:
                                    <input type="date" class="text-2xl ms-8 font-semibold" style="border: none;" name="date">
                                </label>
                            </div>
                        </div>
                    </div>
                    <table class="w-full table table-bordered">
                        <thead>
                            <form action="">
                                <tr>
                                    <th class="w-1/1 font-semibold">No</th>
                                    <th class="w-48 font-semibold">Conditions</th>
                                    <th class="w-1/1 font-semibold">Name Food</th>
                                    <th class="w-1/1 font-semibold">Ingredients</th>
                                    <th class="w-1/1 font-semibold">Qty</th>
                                    <th class="w-38 font-semibold">Weight</th>
                                    <th class="w-1/1 font-semibold">Purchase Price</th>
                                </tr>
                                <tr>
                                    <th class="font-semibold pb-2">1</th>
                                    <td class="flex">
                                        <select style=" border:none;">
                                            <option value="Select"> </option>}
                                            <option value="Vineet">Display</option>
                                            <option value="Sumit">W.House</option>
                                        </select>
                                    </td>
                                    <td><input type="text" class="text-2xl w-full" style="border: none;" name="name" placeholder="Name"></td>
                                    <td><input type="text" class="text-2xl" style="border: none; width:10vw" name="Bahan" placeholder="Ingredients"> </td>
                                    <td><input type="text" class="text-2xl w-full" style="border: none;" name="Qty" placeholder="Quantity"></td>
                                    <td class="flex">
                                        <input type="text" class="text-2xl" style="border: none; width:10vw" name="Weight">
                                        <select style=" border:none;">
                                            <option value="Vineet" class="text-2xl"> </option>
                                            <option value="Vineet" class="text-2xl">Gr</option>
                                            <option value="Select" class="text-2xl">Kg</option>
                                            <option value="Vineet" class="text-2xl">Ons</option>
                                            <option value="Vineet" class="text-2xl">Krat</option>
                                            <option value="Vineet" class="text-2xl">Ml</option>
                                            <option value="Vineet" class="text-2xl">Liter</option>
                                        </select>
                                    </td>
                                    <td><input type="text" type="number" id="inputAngka1" class="text-2xl w-full" style="border: none;" name="Prize" placeholder="Raw price"></td>
                                </tr>
                                <tr>
                                    <th> </th>
                                    <td onselectstart="return false"> </td>
                                    <td onselectstart="return false"></td>
                                    <td><input type="text" class="text-2xl" style="border: none; width:10vw" name="Bahan" placeholder="Ingredients"> </td>
                                    <td><input type="text" class="text-2xl w-full" style="border: none;" name="Qty" placeholder="Quantity"></td>
                                    <td class="flex">
                                        <input type="text" class="text-2xl" style="border: none; width:10vw" name="Weight">
                                        <select style=" border:none;">
                                            <option value="Vineet" class="text-2xl"> </option>
                                            <option value="Vineet" class="text-2xl">Gr</option>
                                            <option value="Select" class="text-2xl">Kg</option>
                                            <option value="Vineet" class="text-2xl">Ons</option>
                                            <option value="Vineet" class="text-2xl">Krat</option>
                                            <option value="Vineet" class="text-2xl">Ml</option>
                                            <option value="Vineet" class="text-2xl">Liter</option>
                                        </select>
                                    </td>
                                    <td><input type="text" type="number" id="inputAngka2" class="text-2xl w-full" style="border: none;" name="Prize" placeholder="Raw price"></td>
                                </tr>
                                <tr>
                                    <th> </th>
                                    <td onselectstart="return false"> </td>
                                    <td onselectstart="return false"></td>
                                    <td><input type="text" class="text-2xl" style="border: none; width:10vw" name="Bahan" placeholder="Ingredients"> </td>
                                    <td><input type="text" class="text-2xl w-full" style="border: none;" name="Qty" placeholder="Quantity"></td>
                                    <td class="flex">
                                        <input type="text" class="text-2xl" style="border: none; width:10vw" name="Weight">
                                        <select style=" border:none;">
                                            <option value="Vineet" class="text-2xl"> </option>
                                            <option value="Vineet" class="text-2xl">Gr</option>
                                            <option value="Select" class="text-2xl">Kg</option>
                                            <option value="Vineet" class="text-2xl">Ons</option>
                                            <option value="Vineet" class="text-2xl">Krat</option>
                                            <option value="Vineet" class="text-2xl">Ml</option>
                                            <option value="Vineet" class="text-2xl">Liter</option>
                                        </select>
                                    </td>
                                    <td><input type="text" type="number" id="inputAngka3" class="text-2xl w-full" style="border: none;" name="Prize" placeholder="Raw price"></td>
                                </tr>
                                <tr>
                                    <th> </th>
                                    <td onselectstart="return false"> </td>
                                    <td onselectstart="return false"></td>
                                    <td><input type="text" class="text-2xl" style="border: none; width:10vw" name="Bahan" placeholder="Ingredients"> </td>
                                    <td><input type="text" class="text-2xl w-full" style="border: none;" name="Qty" placeholder="Quantity"></td>
                                    <td class="flex">
                                        <input type="text" class="text-2xl" style="border: none; width:10vw" name="Weight">
                                        <select style=" border:none;">
                                            <option value="Vineet" class="text-2xl"> </option>
                                            <option value="Vineet" class="text-2xl">Gr</option>
                                            <option value="Select" class="text-2xl">Kg</option>
                                            <option value="Vineet" class="text-2xl">Ons</option>
                                            <option value="Vineet" class="text-2xl">Krat</option>
                                            <option value="Vineet" class="text-2xl">Ml</option>
                                            <option value="Vineet" class="text-2xl">Liter</option>
                                        </select>
                                    </td>
                                    <td><input type="text" type="number" id="inputAngka4" class="text-2xl w-full" style="border: none;" name="Prize" placeholder="Raw price"></td>
                                </tr>
                                <tr class="bar2">
                                    <td> </td>
                                    <td onselectstart="return false"> </td>
                                    <td onselectstart="return false"> </td>
                                    <td><input type="text" class="text-2xl" style="border: none; width:10vw" name="Bahan" placeholder="Ingredients"> </td>
                                    <td><input type="text" class="text-2xl w-full" style="border: none;" name="Qty" placeholder="Quantity"></td>
                                    <td class="flex">
                                        <input type="text" class="text-2xl" style="border: none; width:10vw" name="Weight">
                                        <select style=" border:none;">
                                            <option value="Vineet" class="text-2xl"> </option>
                                            <option value="Vineet" class="text-2xl">Gr</option>
                                            <option value="Select" class="text-2xl">Kg</option>
                                            <option value="Vineet" class="text-2xl">Ons</option>
                                            <option value="Vineet" class="text-2xl">Krat</option>
                                            <option value="Vineet" class="text-2xl">Ml</option>
                                            <option value="Vineet" class="text-2xl">Liter</option>
                                        </select>
                                    </td>
                                    <td><input type="text" id="nilaiInput" class="text-2xl w-full" style="border: none;" name="Prize" placeholder="Raw price"></td>
                                </tr>
                                <tr>
                                    <th colspan="5" onselectstart="return false"> </th>
                                    <td class="w-30 font-semibold text-end pt-2" style="padding-top: 1.8vh;">Services cost</td>
                                    <td><input type="text" type="number" id="inputAngka5" class="text-2xl w-full" style="border: none;" name="Prize" placeholder="Other cost"></td>
                                </tr>
                            </form>
                            <tr>
                                <td colspan="5"></td>
                                <td class="w-30 font-semibold text-end pt-2" style="padding-top: 1.8vh;">Tax cost</td>
                                <td>
                                    <input type="text" type="number" id="inputAngka6" class="text-2xl w-full" style="border: none;" name="tax" placeholder="Max 8%">
                                </td>
                            </tr>
                        </thead>
                    </table>
                    <tr>
                        <td colspan="7">
                            <button type="submit" id="btnsubmit" value="Login" onclick="totalMenu()" name="login" class="w-48 h-14 float-right shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] text-white bg-primary focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-2xl">Submit</button>
                        </td>
                    </tr>
                    <div class="mt-20" style="width: 25vw;">
                        <table class="table table-bordered border-solid">
                            <tr>
                                <th>Total Price</th>
                                <td>
                                    <p id="hargaAsli"></p>
                                </td>
                            </tr>
                            <tr>
                                <th style="width: 8vw;">Estimated sell</th>
                                <td style="width: 15vw;">
                                    <div id="hargaTambah"></div>
                                </td>
                            </tr>
                            <tr>
                                <th>Net sales</th>
                                <td>
                                    <div id="hargaJual"></div>
                                </td>
                            </tr>
                            <tr>
                                <th>Market price</th>
                                <td>
                                    <div id="hargaPasar"></div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class=" footer mt-24 absolute w-full">
        <div class="coverfooter h-24 w-full">
            <p class="font-semibold text-3xl text-white float-left mt-8 ms-10">PT. Sagon Nutrition (Sulawesi Selatan)</p>
            <div class=" footerleft float-right mt-8">
                <div class="watch flex">
                    <div id="txt" class="text-2xl mr-7 text-white font-semibold"></div>
                    <div id="tanggalBulanTahun" class="text-2xl mr-10 text-white font-semibold"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navbar -->

    <!-- js link -->
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js">
    </script>
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