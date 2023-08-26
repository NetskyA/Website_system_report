<?php
if (isset($_POST["login"])) {
    $login = false;
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == "" || $password == "") {
        echo "<script>alert('Please input form')</script>";
    } else if ($username == "admin" && $password == "nimda") {
        header("Location: landing-page.php");
    }
}
?>




<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sagon Nutrition | Login Admin</title>
    <link rel="stylesheet" href="dist/output.css" />
    <link rel="stylesheet" href="style/styles.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <link rel="canonical" href="https://alexcican.com/post/single-post" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.tailwindcss.com/3.3.0"></script>
    <script>
        tailwind.config = {
            darkMode: "class",
            theme: {
                fontFamily: {
                    sans: ["Roboto", "sans-serif"],
                    body: ["Roboto", "sans-serif"],
                    mono: ["ui-monospace", "monospace"],
                },
            },
            corePlugins: {
                preflight: false,
            },
        };
        // Initialization for ES Users
        import {
            Input,
            Ripple,
            initTE,
        } from "tw-elements";

        initTE({
            Input,
            Ripple
        });
    </script>
</head>

<body class="bg-primary">
    <container>
        <table>
            <div class="w-full">
                <section>
                    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0" data-aos="zoom-in">
                        <div class="w-full rounded-lg mt-5 shadow-[rgba(0,_0,_0,_0.24)_0px_3px_8px] md:mt-0 sm:max-w-md xl:p-0 bg-gray-800">
                            <div class="p-6 space-y-4 md:space-y-6 sm:p-8 mb-5">
                                <img src="dist/asset/login/profile.png" class="mx-auto" alt="Admin">
                                <h1 class="font-semibold text-center text-primary text-2xl text-medium_purple mb-2">Admin</h1>
                                <form class="space-y-4 md:space-y-6" action="" method="post">
                                    <div>
                                        <label for="username" class="block mb-2 text-sm font-medium text-primary">Username</label>
                                        <input type="username" name="username" id="username" placeholder="username" class="bg-gray-50 border-gray-300 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  placeholder-gray-400 focus:ring-blue-500 focus:border-blue-500" placeholder="name@company.com" required="">
                                    </div>
                                    <div>
                                        <label for="password" class="block text-sm font-medium text-primary">Password</label>
                                        <input type="password" name="password" id="password" placeholder="••••••••" class="form-control bg-gray-50 border border-gray-300 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5   placeholder-gray-400  focus:ring-blue-500 focus:border-blue-500" required="">
                                    </div>
                                    <div class="flex items-center">
                                        <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" required="">
                                    </div>
                                    <button type="submit" value="Login" name="login" class="w-full mt-3 text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-xl px-5 py-2.5 text-center bg-gray-400 hover:bg-primary">login</button>
                                    <a href="#" class="text-sm font-medium hover:underline text-primary">Forgot password?</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </table>
    </container>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/tw-elements.umd.min.js"></script>

    <script>
        AOS.init();
    </script>
</body>

</html>