<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link href="/output.css" rel="stylesheet">
</head>
<body class="
bg-gray-50
min-h-screen bg-[url('wave.svg')]
bg-no-repeat bg-bottom bg-fixed
">
<div class="flex justify-between items-center p-6">
    <a href="#" class="flex items-center gap-2">
        <svg class="h-10 text-green-600"
             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
            <path fill-rule="evenodd"
                  d="M12.516 2.17a.75.75 0 0 0-1.032 0 11.209 11.209 0 0 1-7.877 3.08.75.75 0 0 0-.722.515A12.74 12.74 0 0 0 2.25 9.75c0 5.942 4.064 10.933 9.563 12.348a.749.749 0 0 0 .374 0c5.499-1.415 9.563-6.406 9.563-12.348 0-1.39-.223-2.73-.635-3.985a.75.75 0 0 0-.722-.516l-.143.001c-2.996 0-5.717-1.17-7.734-3.08Zm3.094 8.016a.75.75 0 1 0-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 0 0-1.06 1.06l2.25 2.25a.75.75 0 0 0 1.14-.094l3.75-5.25Z"
                  clip-rule="evenodd"/>
        </svg>
        <span class="text-xl font-black">Security</span>
    </a>
    <div>
        <a class="rounded-md bg-green-600 py-2 px-4
        text-white font-semibold shadow-lg hover:shadow-xl focus:shadow-xl
hover:bg-green-700 focus:outline-none focus:ring-2
focus:ring-green-500 focus:ring-offset-2
transition duration-150 ease-in-out" href="#">Sign Up</a>
    </div>

</div>
<div class="flex flex-col justify-center p-6 pb-12">
    <div class="mx-auto max-w-md">

        <svg class="h-12 text-green-600 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0 0 13.5 3h-6a2.25 2.25 0 0 0-2.25 2.25v13.5A2.25 2.25 0 0 0 7.5 21h6a2.25 2.25 0 0 0 2.25-2.25V15m3 0 3-3m0 0-3-3m3 3H9" />
        </svg>


        <h2 class="mt-2 sm:mt-6 text-2xl sm:text-3xl font-bold text-gray-900">Welcome back!</h2>
    </div>
    <div class="bg-white/60 backdrop-blur-xl mt-6 sm:mt-10 mx-auto p-6 sm:p-10 rounded-xl shadow-xl w-full max-w-md">
        <form action="#" autocomplete="off" class="space-y-6">

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <div class="relative rounded-md shadow-sm mt-1 inset-y-o flex items-center">
                    <div class="absolute left-0 pl-3">
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                        </svg>

                    </div>
                    <input type="email" id="email" name="email" placeholder="join@doe"
                           class="pl-10 border-gray-300 rounded-md focus:border-green-500 focus:ring-green-500
                            text-sm caret-green-600 w-full"
                    >
                </div>
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <div class="relative rounded-md shadow-sm mt-1 inset-y-o flex items-center">
                    <div class="absolute left-0 pl-3">
                        <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                        </svg>
                    </div>
                    <input type="password" id="password" name="password" minlength="8" placeholder="Password"
                           class="pl-10 border-gray-300 rounded-md focus:border-green-500 focus:ring-green-500
                            text-sm caret-green-600 w-full"
                    >
                </div>
            </div>

            <div class="flex justify-between items-center">
                <div class="flex items-center gap-2">
                    <input class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-green-500" type="checkbox" id="remember" name="remember">
                    <label class="text-sm text-gray-900" for="remember">Remember me</label>
                </div>
                <a href="#" class="font-medium text-sm text-green-600 hover:text-green-400">Forgot you password</a>
            </div>
            <div>
                <a class="flex justify-center items-center rounded-md bg-green-600 py-2 px-4
                text-white font-semibold shadow-lg hover:shadow-xl focus:shadow-xl
                hover:bg-green-700 focus:outline-none focus:ring-2
                focus:ring-green-500 focus:ring-offset-2
                transition duration-150 ease-in-out" href="#">Sign In</a>
            </div>
        </form>

    </div>
</div>

</body>
</html>