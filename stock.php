<?php
require_once("config/connector.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock</title>
    <link rel="stylesheet" href="dist/output.css" />
    <link rel="stylesheet" href="style/styles.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="dist/asset/js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <!--Regular Datatables CSS-->
    <script src="dist/asset/js/data_stock_barang.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">

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
            <div class="data w-full mt-5 mb-44">
                <div class="header w-42 text-4xl font-semibold mb-4">Stock</div>
                <div id='recipients' class="p-8 mt-6 lg:mt-0 rounded shadow bg-white">
                    <table id="example" class="stripe hover" width="100%" cellspacing="0" onmousedown="return false" onselectstart="return false">
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
    <script>

    </script>
    <!-- js link -->
    <script src=" controller/time-date.js"></script>
    <!-- jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <!--Datatables -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>

    <!-- End js link -->
</body>

</html>