<?php
// require_once("config/connector.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sagon Nutrition | Stock</title>
    <link rel="shortcut icon" href="dist/asset/logo/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="dist/output.css" />
    <link rel="stylesheet" href="style/styles.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <script src="dist/asset/js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js">
    </script>
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>

    <!--Regular Datatables CSS-->
    <script src="dist/asset/js/data_stock_barang.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
    <script>
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

            $(".stock").hide();
            $(".iventory").hide();
            $(".wallet").hide();

            $(".btnStk").dblclick(function() {
                $(".stock").show("slow");
                $(".btnIve").hide("slow");
                $(".btnWall").hide("slow");
            });
            $(".btnStk").click(function() {
                $(".stock").hide("slow");
                $(".btnIve").show("slow");
                $(".btnWall").show("slow");
            });

            $(".btnIve").dblclick(function() {
                $(".iventory").show("slow");
                $(".btnWall").hide("slow");
                $(".btnStk").hide("slow");
                $(".stock").hide("slow");
            });
            $(".btnIve").click(function() {
                $(".iventory").hide("slow");
                $(".btnWall").show("slow");
                $(".btnStk").show("slow");
                $(".stock").hide("slow");
            });


            $(".btnWall").dblclick(function() {
                $(".wallet").show("slow");
                $(".btnStk").hide("slow");
                $(".btnIve").hide("slow");
            });
            $(".btnWall").click(function() {
                $(".wallet").hide("slow");
                $(".btnStk").show("slow");
                $(".btnIve").show("slow");
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
            <div class="w-2/3 flex">
                <div class="header w-40 text-4xl font-semibold pt-2">Export</div>
                <div class="chose w-full flex">
                    <button type="submit" value="Login" id="btnmn" name="login" class="btnStk w-60 h-14 mb-5 ms-3 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] text-white border-2 hover:bg-slate-100 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-2xl dark:text-white text-center hover:text-black">Stock</button>
                    <button type="submit" value="Login" id="btnmn" name="login" class="btnIve w-60 h-14 mb-5 ms-3 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] text-white border-2 hover:bg-slate-100 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-2xl dark:text-white text-center hover:text-black">Iventory</button>
                    <button type="submit" value="Login" id="btnmn" name="login" class="btnWall w-60 h-14 mb-5 ms-3 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] text-white border-2 hover:bg-slate-100 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-2xl dark:text-white text-center hover:text-black">Wallet</button>
                </div>
            </div>
            <div class="data w-full mt-3 mb-44">
                <!-- Table -->
                <div class="stock p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                    <table class="table table-striped table-bordered table-paginate" id="mauexport" cellspacing="0" width="100%" onmousedown="return false" onselectstart="return false">
                        <thead>
                            <tr>
                                <th class="font-semibold w-5">No</th>
                                <th class="font-semibold w-1/6">Name Food</th>
                                <th class="font-semibold w-1/6">Number Food</th>
                                <th class="font-semibold w-1/6">Chief</th>
                                <th class="font-semibold w-1/6">Create</th>
                                <th class="font-semibold w-1/6">Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>noodles</td>
                                <td>IBX12KHO5OG</td>
                                <td>Wade Molina</td>
                                <td>Mar 22, 2023</td>
                                <td>2:41 AM</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>salads</td>
                                <td>BKG52YTP8WS</td>
                                <td>Tucker Koch</td>
                                <td>May 5, 2023</td>
                                <td>4:02 PM</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>salads</td>
                                <td>YBJ70OZJ8IR</td>
                                <td>Ifeoma Mcdonald</td>
                                <td>Apr 19, 2023</td>
                                <td>10:49 PM</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>pies</td>
                                <td>NWZ84VKG1GW</td>
                                <td>Elliott Coffey</td>
                                <td>Feb 5, 2024</td>
                                <td>9:55 PM</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>pies</td>
                                <td>FZX57EOU3VT</td>
                                <td>Adele Stone</td>
                                <td>Sep 23, 2022</td>
                                <td>10:49 PM</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>pies</td>
                                <td>BQF58CCC0VZ</td>
                                <td>Steel Hardin</td>
                                <td>Dec 18, 2022</td>
                                <td>2:41 AM</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>soups</td>
                                <td>NAI73UPE6VY</td>
                                <td>Colt Noel</td>
                                <td>Dec 16, 2023</td>
                                <td>2:41 AM</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>pies</td>
                                <td>DWD97KJA1YD</td>
                                <td>Mary Bartlett</td>
                                <td>Apr 20, 2023</td>
                                <td>4:02 PM</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>stews</td>
                                <td>RFC36WDQ5ME</td>
                                <td>Kevyn Parsons</td>
                                <td>May 24, 2023</td>
                                <td>9:55 PM</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>cereals</td>
                                <td>XYO37EAX0FO</td>
                                <td>Neville Gross</td>
                                <td>Jan 21, 2024</td>
                                <td>4:02 PM</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>cereals</td>
                                <td>YGR59ENC6OE</td>
                                <td>Armand Gentry</td>
                                <td>Jan 11, 2024</td>
                                <td>2:41 AM</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>salads</td>
                                <td>MRK88VQZ8LR</td>
                                <td>Ulric Riley</td>
                                <td>Nov 9, 2022</td>
                                <td>1:53 PM</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>stews</td>
                                <td>SSP74WXI8JE</td>
                                <td>Lavinia Kline</td>
                                <td>Jul 15, 2024</td>
                                <td>9:55 PM</td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>salads</td>
                                <td>OMY48UKC3QG</td>
                                <td>Guinevere Mason</td>
                                <td>Jun 7, 2023</td>
                                <td>10:49 PM</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>seafood</td>
                                <td>WYK13TRF8UW</td>
                                <td>Ronan Massey</td>
                                <td>Jan 30, 2023</td>
                                <td>4:02 PM</td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>cereals</td>
                                <td>OJQ44DHM6CP</td>
                                <td>Pascale Hammond</td>
                                <td>Jan 30, 2024</td>
                                <td>2:41 AM</td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>stews</td>
                                <td>LIY63VGI5GC</td>
                                <td>Joshua Brock</td>
                                <td>Apr 27, 2023</td>
                                <td>2:41 AM</td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>pies</td>
                                <td>SSR11ZKR8BV</td>
                                <td>Daryl Ellis</td>
                                <td>Jul 20, 2024</td>
                                <td>4:02 PM</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>salads</td>
                                <td>MFF23MQI1VX</td>
                                <td>Magee Holmes</td>
                                <td>Sep 8, 2022</td>
                                <td>10:49 PM</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>cereals</td>
                                <td>DEZ59YTU8TN</td>
                                <td>Jasper Smith</td>
                                <td>Jun 7, 2024</td>
                                <td>9:55 PM</td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td>salads</td>
                                <td>CJP15SEI4QN</td>
                                <td>Amery Gordon</td>
                                <td>Nov 19, 2023</td>
                                <td>1:53 PM</td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>noodles</td>
                                <td>XWH86UDW6RO</td>
                                <td>Jamalia Navarro</td>
                                <td>Mar 30, 2023</td>
                                <td>1:53 PM</td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td>pasta</td>
                                <td>AJW42KOC2ES</td>
                                <td>Brett Whitaker</td>
                                <td>May 30, 2023</td>
                                <td>9:55 PM</td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td>pasta</td>
                                <td>EOM50FMF5JM</td>
                                <td>Aimee Ewing</td>
                                <td>Feb 10, 2023</td>
                                <td>10:49 PM</td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td>sandwiches</td>
                                <td>LNN82JWW5WW</td>
                                <td>Valentine Hensley</td>
                                <td>Jun 25, 2023</td>
                                <td>4:02 PM</td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td>soups</td>
                                <td>UGK32VPR7FP</td>
                                <td>Aidan Powell</td>
                                <td>Jun 30, 2023</td>
                                <td>2:41 AM</td>
                            </tr>
                            <tr>
                                <td>27</td>
                                <td>pasta</td>
                                <td>ZQM44XFH3LS</td>
                                <td>Sophia Hensley</td>
                                <td>Jul 21, 2023</td>
                                <td>9:55 PM</td>
                            </tr>
                            <tr>
                                <td>28</td>
                                <td>sandwiches</td>
                                <td>PWQ32YUU8ZO</td>
                                <td>Dieter Rowe</td>
                                <td>Aug 7, 2023</td>
                                <td>5:05 AM</td>
                            </tr>
                            <tr>
                                <td>29</td>
                                <td>pies</td>
                                <td>DHO09DOK2HU</td>
                                <td>Justina Rodgers</td>
                                <td>Sep 7, 2022</td>
                                <td>2:18 AM</td>
                            </tr>
                            <tr>
                                <td>30</td>
                                <td>stews</td>
                                <td>YBU83UGO6GI</td>
                                <td>Sydney Mclaughlin</td>
                                <td>Feb 9, 2024</td>
                                <td>2:18 AM</td>
                            </tr>
                            <tr>
                                <td>31</td>
                                <td>noodles</td>
                                <td>DLK65COS9OI</td>
                                <td>Caldwell Walker</td>
                                <td>Feb 2, 2024</td>
                                <td>10:49 PM</td>
                            </tr>
                            <tr>
                                <td>32</td>
                                <td>soups</td>
                                <td>EWT15HIN7DX</td>
                                <td>Quamar Skinner</td>
                                <td>Aug 29, 2023</td>
                                <td>2:41 AM</td>
                            </tr>
                            <tr>
                                <td>33</td>
                                <td>seafood</td>
                                <td>UQP27PES7DL</td>
                                <td>Harding Luna</td>
                                <td>Jan 23, 2024</td>
                                <td>10:49 PM</td>
                            </tr>
                            <tr>
                                <td>34</td>
                                <td>noodles</td>
                                <td>KIC55GVP1NV</td>
                                <td>Imelda Cooper</td>
                                <td>Dec 16, 2023</td>
                                <td>2:18 AM</td>
                            </tr>
                            <tr>
                                <td>35</td>
                                <td>salads</td>
                                <td>HSQ43SEC4KV</td>
                                <td>Daquan Key</td>
                                <td>Dec 13, 2023</td>
                                <td>1:53 PM</td>
                            </tr>
                            <tr>
                                <td>36</td>
                                <td>stews</td>
                                <td>OBQ51BLC7IN</td>
                                <td>Shana Sherman</td>
                                <td>Jan 4, 2023</td>
                                <td>4:19 PM</td>
                            </tr>
                            <tr>
                                <td>37</td>
                                <td>seafood</td>
                                <td>XPD28GUP3UI</td>
                                <td>Winifred Tate</td>
                                <td>Sep 27, 2023</td>
                                <td>2:53 AM</td>
                            </tr>
                            <tr>
                                <td>38</td>
                                <td>desserts</td>
                                <td>XFE32SPX8DT</td>
                                <td>Igor Moss</td>
                                <td>May 21, 2024</td>
                                <td>9:46 AM</td>
                            </tr>
                            <tr>
                                <td>39</td>
                                <td>desserts</td>
                                <td>MCY37BJT8ME</td>
                                <td>Mark Moss</td>
                                <td>Feb 29, 2024</td>
                                <td>1:07 AM</td>
                            </tr>
                            <tr>
                                <td>40</td>
                                <td>salads</td>
                                <td>FHW73KIP8LD</td>
                                <td>Howard Eaton</td>
                                <td>May 25, 2024</td>
                                <td>7:24 AM</td>
                            </tr>
                            <tr>
                                <td>41</td>
                                <td>noodles</td>
                                <td>VFJ28EIG8YX</td>
                                <td>Myles Bush</td>
                                <td>Jan 31, 2024</td>
                                <td>3:45 AM</td>
                            </tr>
                            <tr>
                                <td>42</td>
                                <td>cereals</td>
                                <td>GQI73SBS1JM</td>
                                <td>Catherine Yates</td>
                                <td>Jun 30, 2024</td>
                                <td>3:20 AM</td>
                            </tr>
                            <tr>
                                <td>43</td>
                                <td>sandwiches</td>
                                <td>WOC74XPS7MW</td>
                                <td>Maia Roberson</td>
                                <td>Apr 12, 2023</td>
                                <td>5:16 AM</td>
                            </tr>
                            <tr>
                                <td>44</td>
                                <td>salads</td>
                                <td>CNH44SXG4QO</td>
                                <td>Dillon Mosley</td>
                                <td>Oct 12, 2023</td>
                                <td>6:54 AM</td>
                            </tr>
                            <tr>
                                <td>45</td>
                                <td>pasta</td>
                                <td>CLX39LYB5YQ</td>
                                <td>Rahim Medina</td>
                                <td>Jul 8, 2024</td>
                                <td>12:09 AM</td>
                            </tr>
                            <tr>
                                <td>46</td>
                                <td>stews</td>
                                <td>ONJ93JBY8XQ</td>
                                <td>Shay Holloway</td>
                                <td>Mar 16, 2024</td>
                                <td>12:07 AM</td>
                            </tr>
                            <tr>
                                <td>47</td>
                                <td>soups</td>
                                <td>KLN73HRS6JM</td>
                                <td>Bruno Winters</td>
                                <td>Mar 6, 2024</td>
                                <td>3:34 AM</td>
                            </tr>
                            <tr>
                                <td>48</td>
                                <td>seafood</td>
                                <td>HMK61DIF6ZS</td>
                                <td>Marcia Guerrero</td>
                                <td>Sep 16, 2023</td>
                                <td>10:40 AM</td>
                            </tr>
                            <tr>
                                <td>49</td>
                                <td>pasta</td>
                                <td>DCS56KVY2SH</td>
                                <td>Cyrus Daniels</td>
                                <td>Jul 20, 2023</td>
                                <td>8:21 PM</td>
                            </tr>
                            <tr>
                                <td>50</td>
                                <td>desserts</td>
                                <td>YJF12YBG8RM</td>
                                <td>Bert Alvarez</td>
                                <td>Oct 12, 2022</td>
                                <td>2:54 PM</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="iventory p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                    <table class="table table-striped table-bordered table-paginate" id="mauexport2" cellspacing="0" width="100%" onmousedown="return false" onselectstart="return false">
                        <thead>
                            <tr>
                                <th class="font-semibold w-5">No</th>
                                <th class="font-semibold w-1/6">Name Food</th>
                                <th class="font-semibold w-1/6">Number Food</th>
                                <th class="font-semibold w-1/6">Chief</th>
                                <th class="font-semibold w-1/6">Create</th>
                                <th class="font-semibold w-1/6">Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>noodles</td>
                                <td>IBX12KHO5OG</td>
                                <td>Wade Molina</td>
                                <td>Mar 22, 2023</td>
                                <td>2:41 AM</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>salads</td>
                                <td>BKG52YTP8WS</td>
                                <td>Tucker Koch</td>
                                <td>May 5, 2023</td>
                                <td>4:02 PM</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>salads</td>
                                <td>YBJ70OZJ8IR</td>
                                <td>Ifeoma Mcdonald</td>
                                <td>Apr 19, 2023</td>
                                <td>10:49 PM</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>pies</td>
                                <td>NWZ84VKG1GW</td>
                                <td>Elliott Coffey</td>
                                <td>Feb 5, 2024</td>
                                <td>9:55 PM</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>pies</td>
                                <td>FZX57EOU3VT</td>
                                <td>Adele Stone</td>
                                <td>Sep 23, 2022</td>
                                <td>10:49 PM</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>pies</td>
                                <td>BQF58CCC0VZ</td>
                                <td>Steel Hardin</td>
                                <td>Dec 18, 2022</td>
                                <td>2:41 AM</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>soups</td>
                                <td>NAI73UPE6VY</td>
                                <td>Colt Noel</td>
                                <td>Dec 16, 2023</td>
                                <td>2:41 AM</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>pies</td>
                                <td>DWD97KJA1YD</td>
                                <td>Mary Bartlett</td>
                                <td>Apr 20, 2023</td>
                                <td>4:02 PM</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>stews</td>
                                <td>RFC36WDQ5ME</td>
                                <td>Kevyn Parsons</td>
                                <td>May 24, 2023</td>
                                <td>9:55 PM</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>cereals</td>
                                <td>XYO37EAX0FO</td>
                                <td>Neville Gross</td>
                                <td>Jan 21, 2024</td>
                                <td>4:02 PM</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>cereals</td>
                                <td>YGR59ENC6OE</td>
                                <td>Armand Gentry</td>
                                <td>Jan 11, 2024</td>
                                <td>2:41 AM</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>salads</td>
                                <td>MRK88VQZ8LR</td>
                                <td>Ulric Riley</td>
                                <td>Nov 9, 2022</td>
                                <td>1:53 PM</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>stews</td>
                                <td>SSP74WXI8JE</td>
                                <td>Lavinia Kline</td>
                                <td>Jul 15, 2024</td>
                                <td>9:55 PM</td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>salads</td>
                                <td>OMY48UKC3QG</td>
                                <td>Guinevere Mason</td>
                                <td>Jun 7, 2023</td>
                                <td>10:49 PM</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>seafood</td>
                                <td>WYK13TRF8UW</td>
                                <td>Ronan Massey</td>
                                <td>Jan 30, 2023</td>
                                <td>4:02 PM</td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>cereals</td>
                                <td>OJQ44DHM6CP</td>
                                <td>Pascale Hammond</td>
                                <td>Jan 30, 2024</td>
                                <td>2:41 AM</td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>stews</td>
                                <td>LIY63VGI5GC</td>
                                <td>Joshua Brock</td>
                                <td>Apr 27, 2023</td>
                                <td>2:41 AM</td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>pies</td>
                                <td>SSR11ZKR8BV</td>
                                <td>Daryl Ellis</td>
                                <td>Jul 20, 2024</td>
                                <td>4:02 PM</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>salads</td>
                                <td>MFF23MQI1VX</td>
                                <td>Magee Holmes</td>
                                <td>Sep 8, 2022</td>
                                <td>10:49 PM</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>cereals</td>
                                <td>DEZ59YTU8TN</td>
                                <td>Jasper Smith</td>
                                <td>Jun 7, 2024</td>
                                <td>9:55 PM</td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td>salads</td>
                                <td>CJP15SEI4QN</td>
                                <td>Amery Gordon</td>
                                <td>Nov 19, 2023</td>
                                <td>1:53 PM</td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>noodles</td>
                                <td>XWH86UDW6RO</td>
                                <td>Jamalia Navarro</td>
                                <td>Mar 30, 2023</td>
                                <td>1:53 PM</td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td>pasta</td>
                                <td>AJW42KOC2ES</td>
                                <td>Brett Whitaker</td>
                                <td>May 30, 2023</td>
                                <td>9:55 PM</td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td>pasta</td>
                                <td>EOM50FMF5JM</td>
                                <td>Aimee Ewing</td>
                                <td>Feb 10, 2023</td>
                                <td>10:49 PM</td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td>sandwiches</td>
                                <td>LNN82JWW5WW</td>
                                <td>Valentine Hensley</td>
                                <td>Jun 25, 2023</td>
                                <td>4:02 PM</td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td>soups</td>
                                <td>UGK32VPR7FP</td>
                                <td>Aidan Powell</td>
                                <td>Jun 30, 2023</td>
                                <td>2:41 AM</td>
                            </tr>
                            <tr>
                                <td>27</td>
                                <td>pasta</td>
                                <td>ZQM44XFH3LS</td>
                                <td>Sophia Hensley</td>
                                <td>Jul 21, 2023</td>
                                <td>9:55 PM</td>
                            </tr>
                            <tr>
                                <td>28</td>
                                <td>sandwiches</td>
                                <td>PWQ32YUU8ZO</td>
                                <td>Dieter Rowe</td>
                                <td>Aug 7, 2023</td>
                                <td>5:05 AM</td>
                            </tr>
                            <tr>
                                <td>29</td>
                                <td>pies</td>
                                <td>DHO09DOK2HU</td>
                                <td>Justina Rodgers</td>
                                <td>Sep 7, 2022</td>
                                <td>2:18 AM</td>
                            </tr>
                            <tr>
                                <td>30</td>
                                <td>stews</td>
                                <td>YBU83UGO6GI</td>
                                <td>Sydney Mclaughlin</td>
                                <td>Feb 9, 2024</td>
                                <td>2:18 AM</td>
                            </tr>
                            <tr>
                                <td>31</td>
                                <td>noodles</td>
                                <td>DLK65COS9OI</td>
                                <td>Caldwell Walker</td>
                                <td>Feb 2, 2024</td>
                                <td>10:49 PM</td>
                            </tr>
                            <tr>
                                <td>32</td>
                                <td>soups</td>
                                <td>EWT15HIN7DX</td>
                                <td>Quamar Skinner</td>
                                <td>Aug 29, 2023</td>
                                <td>2:41 AM</td>
                            </tr>
                            <tr>
                                <td>33</td>
                                <td>seafood</td>
                                <td>UQP27PES7DL</td>
                                <td>Harding Luna</td>
                                <td>Jan 23, 2024</td>
                                <td>10:49 PM</td>
                            </tr>
                            <tr>
                                <td>34</td>
                                <td>noodles</td>
                                <td>KIC55GVP1NV</td>
                                <td>Imelda Cooper</td>
                                <td>Dec 16, 2023</td>
                                <td>2:18 AM</td>
                            </tr>
                            <tr>
                                <td>35</td>
                                <td>salads</td>
                                <td>HSQ43SEC4KV</td>
                                <td>Daquan Key</td>
                                <td>Dec 13, 2023</td>
                                <td>1:53 PM</td>
                            </tr>
                            <tr>
                                <td>36</td>
                                <td>stews</td>
                                <td>OBQ51BLC7IN</td>
                                <td>Shana Sherman</td>
                                <td>Jan 4, 2023</td>
                                <td>4:19 PM</td>
                            </tr>
                            <tr>
                                <td>37</td>
                                <td>seafood</td>
                                <td>XPD28GUP3UI</td>
                                <td>Winifred Tate</td>
                                <td>Sep 27, 2023</td>
                                <td>2:53 AM</td>
                            </tr>
                            <tr>
                                <td>38</td>
                                <td>desserts</td>
                                <td>XFE32SPX8DT</td>
                                <td>Igor Moss</td>
                                <td>May 21, 2024</td>
                                <td>9:46 AM</td>
                            </tr>
                            <tr>
                                <td>39</td>
                                <td>desserts</td>
                                <td>MCY37BJT8ME</td>
                                <td>Mark Moss</td>
                                <td>Feb 29, 2024</td>
                                <td>1:07 AM</td>
                            </tr>
                            <tr>
                                <td>40</td>
                                <td>salads</td>
                                <td>FHW73KIP8LD</td>
                                <td>Howard Eaton</td>
                                <td>May 25, 2024</td>
                                <td>7:24 AM</td>
                            </tr>
                            <tr>
                                <td>41</td>
                                <td>noodles</td>
                                <td>VFJ28EIG8YX</td>
                                <td>Myles Bush</td>
                                <td>Jan 31, 2024</td>
                                <td>3:45 AM</td>
                            </tr>
                            <tr>
                                <td>42</td>
                                <td>cereals</td>
                                <td>GQI73SBS1JM</td>
                                <td>Catherine Yates</td>
                                <td>Jun 30, 2024</td>
                                <td>3:20 AM</td>
                            </tr>
                            <tr>
                                <td>43</td>
                                <td>sandwiches</td>
                                <td>WOC74XPS7MW</td>
                                <td>Maia Roberson</td>
                                <td>Apr 12, 2023</td>
                                <td>5:16 AM</td>
                            </tr>
                            <tr>
                                <td>44</td>
                                <td>salads</td>
                                <td>CNH44SXG4QO</td>
                                <td>Dillon Mosley</td>
                                <td>Oct 12, 2023</td>
                                <td>6:54 AM</td>
                            </tr>
                            <tr>
                                <td>45</td>
                                <td>pasta</td>
                                <td>CLX39LYB5YQ</td>
                                <td>Rahim Medina</td>
                                <td>Jul 8, 2024</td>
                                <td>12:09 AM</td>
                            </tr>
                            <tr>
                                <td>46</td>
                                <td>stews</td>
                                <td>ONJ93JBY8XQ</td>
                                <td>Shay Holloway</td>
                                <td>Mar 16, 2024</td>
                                <td>12:07 AM</td>
                            </tr>
                            <tr>
                                <td>47</td>
                                <td>soups</td>
                                <td>KLN73HRS6JM</td>
                                <td>Bruno Winters</td>
                                <td>Mar 6, 2024</td>
                                <td>3:34 AM</td>
                            </tr>
                            <tr>
                                <td>48</td>
                                <td>seafood</td>
                                <td>HMK61DIF6ZS</td>
                                <td>Marcia Guerrero</td>
                                <td>Sep 16, 2023</td>
                                <td>10:40 AM</td>
                            </tr>
                            <tr>
                                <td>49</td>
                                <td>pasta</td>
                                <td>DCS56KVY2SH</td>
                                <td>Cyrus Daniels</td>
                                <td>Jul 20, 2023</td>
                                <td>8:21 PM</td>
                            </tr>
                            <tr>
                                <td>50</td>
                                <td>desserts</td>
                                <td>YJF12YBG8RM</td>
                                <td>Bert Alvarez</td>
                                <td>Oct 12, 2022</td>
                                <td>2:54 PM</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="wallet p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                    <table class="table table-striped table-bordered table-paginate" id="mauexport3" cellspacing="0" width="100%" onmousedown="return false" onselectstart="return false">
                        <thead>
                            <tr>
                                <th class="font-semibold w-5">No</th>
                                <th class="font-semibold w-1/6">Name Food</th>
                                <th class="font-semibold w-1/6">Number Food</th>
                                <th class="font-semibold w-1/6">Chief</th>
                                <th class="font-semibold w-1/6">Create</th>
                                <th class="font-semibold w-1/6">Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>noodles</td>
                                <td>IBX12KHO5OG</td>
                                <td>Wade Molina</td>
                                <td>Mar 22, 2023</td>
                                <td>2:41 AM</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>salads</td>
                                <td>BKG52YTP8WS</td>
                                <td>Tucker Koch</td>
                                <td>May 5, 2023</td>
                                <td>4:02 PM</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>salads</td>
                                <td>YBJ70OZJ8IR</td>
                                <td>Ifeoma Mcdonald</td>
                                <td>Apr 19, 2023</td>
                                <td>10:49 PM</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>pies</td>
                                <td>NWZ84VKG1GW</td>
                                <td>Elliott Coffey</td>
                                <td>Feb 5, 2024</td>
                                <td>9:55 PM</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>pies</td>
                                <td>FZX57EOU3VT</td>
                                <td>Adele Stone</td>
                                <td>Sep 23, 2022</td>
                                <td>10:49 PM</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>pies</td>
                                <td>BQF58CCC0VZ</td>
                                <td>Steel Hardin</td>
                                <td>Dec 18, 2022</td>
                                <td>2:41 AM</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>soups</td>
                                <td>NAI73UPE6VY</td>
                                <td>Colt Noel</td>
                                <td>Dec 16, 2023</td>
                                <td>2:41 AM</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>pies</td>
                                <td>DWD97KJA1YD</td>
                                <td>Mary Bartlett</td>
                                <td>Apr 20, 2023</td>
                                <td>4:02 PM</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>stews</td>
                                <td>RFC36WDQ5ME</td>
                                <td>Kevyn Parsons</td>
                                <td>May 24, 2023</td>
                                <td>9:55 PM</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>cereals</td>
                                <td>XYO37EAX0FO</td>
                                <td>Neville Gross</td>
                                <td>Jan 21, 2024</td>
                                <td>4:02 PM</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>cereals</td>
                                <td>YGR59ENC6OE</td>
                                <td>Armand Gentry</td>
                                <td>Jan 11, 2024</td>
                                <td>2:41 AM</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>salads</td>
                                <td>MRK88VQZ8LR</td>
                                <td>Ulric Riley</td>
                                <td>Nov 9, 2022</td>
                                <td>1:53 PM</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>stews</td>
                                <td>SSP74WXI8JE</td>
                                <td>Lavinia Kline</td>
                                <td>Jul 15, 2024</td>
                                <td>9:55 PM</td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>salads</td>
                                <td>OMY48UKC3QG</td>
                                <td>Guinevere Mason</td>
                                <td>Jun 7, 2023</td>
                                <td>10:49 PM</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>seafood</td>
                                <td>WYK13TRF8UW</td>
                                <td>Ronan Massey</td>
                                <td>Jan 30, 2023</td>
                                <td>4:02 PM</td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>cereals</td>
                                <td>OJQ44DHM6CP</td>
                                <td>Pascale Hammond</td>
                                <td>Jan 30, 2024</td>
                                <td>2:41 AM</td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>stews</td>
                                <td>LIY63VGI5GC</td>
                                <td>Joshua Brock</td>
                                <td>Apr 27, 2023</td>
                                <td>2:41 AM</td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>pies</td>
                                <td>SSR11ZKR8BV</td>
                                <td>Daryl Ellis</td>
                                <td>Jul 20, 2024</td>
                                <td>4:02 PM</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>salads</td>
                                <td>MFF23MQI1VX</td>
                                <td>Magee Holmes</td>
                                <td>Sep 8, 2022</td>
                                <td>10:49 PM</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>cereals</td>
                                <td>DEZ59YTU8TN</td>
                                <td>Jasper Smith</td>
                                <td>Jun 7, 2024</td>
                                <td>9:55 PM</td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td>salads</td>
                                <td>CJP15SEI4QN</td>
                                <td>Amery Gordon</td>
                                <td>Nov 19, 2023</td>
                                <td>1:53 PM</td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>noodles</td>
                                <td>XWH86UDW6RO</td>
                                <td>Jamalia Navarro</td>
                                <td>Mar 30, 2023</td>
                                <td>1:53 PM</td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td>pasta</td>
                                <td>AJW42KOC2ES</td>
                                <td>Brett Whitaker</td>
                                <td>May 30, 2023</td>
                                <td>9:55 PM</td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td>pasta</td>
                                <td>EOM50FMF5JM</td>
                                <td>Aimee Ewing</td>
                                <td>Feb 10, 2023</td>
                                <td>10:49 PM</td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td>sandwiches</td>
                                <td>LNN82JWW5WW</td>
                                <td>Valentine Hensley</td>
                                <td>Jun 25, 2023</td>
                                <td>4:02 PM</td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td>soups</td>
                                <td>UGK32VPR7FP</td>
                                <td>Aidan Powell</td>
                                <td>Jun 30, 2023</td>
                                <td>2:41 AM</td>
                            </tr>
                            <tr>
                                <td>27</td>
                                <td>pasta</td>
                                <td>ZQM44XFH3LS</td>
                                <td>Sophia Hensley</td>
                                <td>Jul 21, 2023</td>
                                <td>9:55 PM</td>
                            </tr>
                            <tr>
                                <td>28</td>
                                <td>sandwiches</td>
                                <td>PWQ32YUU8ZO</td>
                                <td>Dieter Rowe</td>
                                <td>Aug 7, 2023</td>
                                <td>5:05 AM</td>
                            </tr>
                            <tr>
                                <td>29</td>
                                <td>pies</td>
                                <td>DHO09DOK2HU</td>
                                <td>Justina Rodgers</td>
                                <td>Sep 7, 2022</td>
                                <td>2:18 AM</td>
                            </tr>
                            <tr>
                                <td>30</td>
                                <td>stews</td>
                                <td>YBU83UGO6GI</td>
                                <td>Sydney Mclaughlin</td>
                                <td>Feb 9, 2024</td>
                                <td>2:18 AM</td>
                            </tr>
                            <tr>
                                <td>31</td>
                                <td>noodles</td>
                                <td>DLK65COS9OI</td>
                                <td>Caldwell Walker</td>
                                <td>Feb 2, 2024</td>
                                <td>10:49 PM</td>
                            </tr>
                            <tr>
                                <td>32</td>
                                <td>soups</td>
                                <td>EWT15HIN7DX</td>
                                <td>Quamar Skinner</td>
                                <td>Aug 29, 2023</td>
                                <td>2:41 AM</td>
                            </tr>
                            <tr>
                                <td>33</td>
                                <td>seafood</td>
                                <td>UQP27PES7DL</td>
                                <td>Harding Luna</td>
                                <td>Jan 23, 2024</td>
                                <td>10:49 PM</td>
                            </tr>
                            <tr>
                                <td>34</td>
                                <td>noodles</td>
                                <td>KIC55GVP1NV</td>
                                <td>Imelda Cooper</td>
                                <td>Dec 16, 2023</td>
                                <td>2:18 AM</td>
                            </tr>
                            <tr>
                                <td>35</td>
                                <td>salads</td>
                                <td>HSQ43SEC4KV</td>
                                <td>Daquan Key</td>
                                <td>Dec 13, 2023</td>
                                <td>1:53 PM</td>
                            </tr>
                            <tr>
                                <td>36</td>
                                <td>stews</td>
                                <td>OBQ51BLC7IN</td>
                                <td>Shana Sherman</td>
                                <td>Jan 4, 2023</td>
                                <td>4:19 PM</td>
                            </tr>
                            <tr>
                                <td>37</td>
                                <td>seafood</td>
                                <td>XPD28GUP3UI</td>
                                <td>Winifred Tate</td>
                                <td>Sep 27, 2023</td>
                                <td>2:53 AM</td>
                            </tr>
                            <tr>
                                <td>38</td>
                                <td>desserts</td>
                                <td>XFE32SPX8DT</td>
                                <td>Igor Moss</td>
                                <td>May 21, 2024</td>
                                <td>9:46 AM</td>
                            </tr>
                            <tr>
                                <td>39</td>
                                <td>desserts</td>
                                <td>MCY37BJT8ME</td>
                                <td>Mark Moss</td>
                                <td>Feb 29, 2024</td>
                                <td>1:07 AM</td>
                            </tr>
                            <tr>
                                <td>40</td>
                                <td>salads</td>
                                <td>FHW73KIP8LD</td>
                                <td>Howard Eaton</td>
                                <td>May 25, 2024</td>
                                <td>7:24 AM</td>
                            </tr>
                            <tr>
                                <td>41</td>
                                <td>noodles</td>
                                <td>VFJ28EIG8YX</td>
                                <td>Myles Bush</td>
                                <td>Jan 31, 2024</td>
                                <td>3:45 AM</td>
                            </tr>
                            <tr>
                                <td>42</td>
                                <td>cereals</td>
                                <td>GQI73SBS1JM</td>
                                <td>Catherine Yates</td>
                                <td>Jun 30, 2024</td>
                                <td>3:20 AM</td>
                            </tr>
                            <tr>
                                <td>43</td>
                                <td>sandwiches</td>
                                <td>WOC74XPS7MW</td>
                                <td>Maia Roberson</td>
                                <td>Apr 12, 2023</td>
                                <td>5:16 AM</td>
                            </tr>
                            <tr>
                                <td>44</td>
                                <td>salads</td>
                                <td>CNH44SXG4QO</td>
                                <td>Dillon Mosley</td>
                                <td>Oct 12, 2023</td>
                                <td>6:54 AM</td>
                            </tr>
                            <tr>
                                <td>45</td>
                                <td>pasta</td>
                                <td>CLX39LYB5YQ</td>
                                <td>Rahim Medina</td>
                                <td>Jul 8, 2024</td>
                                <td>12:09 AM</td>
                            </tr>
                            <tr>
                                <td>46</td>
                                <td>stews</td>
                                <td>ONJ93JBY8XQ</td>
                                <td>Shay Holloway</td>
                                <td>Mar 16, 2024</td>
                                <td>12:07 AM</td>
                            </tr>
                            <tr>
                                <td>47</td>
                                <td>soups</td>
                                <td>KLN73HRS6JM</td>
                                <td>Bruno Winters</td>
                                <td>Mar 6, 2024</td>
                                <td>3:34 AM</td>
                            </tr>
                            <tr>
                                <td>48</td>
                                <td>seafood</td>
                                <td>HMK61DIF6ZS</td>
                                <td>Marcia Guerrero</td>
                                <td>Sep 16, 2023</td>
                                <td>10:40 AM</td>
                            </tr>
                            <tr>
                                <td>49</td>
                                <td>pasta</td>
                                <td>DCS56KVY2SH</td>
                                <td>Cyrus Daniels</td>
                                <td>Jul 20, 2023</td>
                                <td>8:21 PM</td>
                            </tr>
                            <tr>
                                <td>50</td>
                                <td>desserts</td>
                                <td>YJF12YBG8RM</td>
                                <td>Bert Alvarez</td>
                                <td>Oct 12, 2022</td>
                                <td>2:54 PM</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- Table -->
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
    <script src="controller/export-data.js"></script>
    <script src=" controller/time-date.js"></script>

    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>


    <!-- End js link -->
</body>

</html>