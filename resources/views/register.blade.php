<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')

    <title>login</title>
</head>

<body>
    <section class="bg-neutral-700">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl">
                <img class="w-40 mr-3" src="./img/logo.png" alt="logo">
            </a>
            <div class="w-full rounded-lg shadow border md:mt-0 sm:max-w-md xl:p-0 bg-neutral-600 border-yellow-500">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight md:text-2xl text-neutral-100">
                        Create an account
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="{{ route('register') }}" method="POST">
                        @csrf
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-neutral-100">Username
                                </label>
                            <input type="text" name="name" id="name"
                                class="sm:text-sm rounded-lg block w-full p-2.5 outline-none border bg-neutral-500 border-neutral-400 placeholder-neutral-200 text-white focus:ring-1 focus:ring-yellow-500 focus:border-yellow-500"
                                placeholder="name" required="">
                        </div>
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-neutral-100">Your
                                email</label>
                            <input type="email" name="email" id="email"
                                class="sm:text-sm rounded-lg block w-full p-2.5 outline-none border bg-neutral-500 border-neutral-400 placeholder-neutral-200 text-white focus:ring-1 focus:ring-yellow-500 focus:border-yellow-500"
                                placeholder="name@company.com" required="">
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-neutral-100">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="sm:text-sm rounded-lg block w-full p-2.5 outline-none border bg-neutral-500 border-neutral-400 placeholder-neutral-200 text-white focus:ring-1 focus:ring-yellow-500 focus:border-yellow-500"
                                required="">
                        </div>
                        <div>
                            <label for="confirm password"
                                class="block mb-2 text-sm font-medium text-neutral-100">Confirm password</label>
                            <input type="password" name="password_confirmation" id="Confirm password" placeholder="••••••••"
                                class="sm:text-sm rounded-lg block w-full p-2.5 outline-none border bg-neutral-500 border-neutral-400 placeholder-neutral-200 text-white focus:ring-1 focus:ring-yellow-500 focus:border-yellow-500"
                                required="">
                        </div>
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input id="terms" aria-describedby="terms" type="checkbox"
                                    class="w-4 h-4 border-none bg-black"
                                    required="">
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="terms" class="font-light text-gray-300">I accept the <a
                                        class="font-medium text-yellow-500 hover:underline dark:text-primary-500"
                                        href="#">Terms and Conditions</a></label>
                            </div>
                        </div>

                        <button type="submit"
                            id="exterms" disabled
                            class="w-full disabled:bg-yellow-600 outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-yellow-500 text-white">Create
                            an account</button>
                        <p class="text-sm font-light text-gray-300">
                            Already have an account? <a href="{{route('login')}}"
                                class="font-medium text-yellow-500 hover:underline">Login here</a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script type="text/javascript">
        const terms = document.getElementById('terms');
        const exterms = document.getElementById('exterms');
        console.log(terms.checked)
        terms.addEventListener('click',()=>{
            if(terms.checked){
                document.getElementById('exterms').disabled = false;
            }
            else{
                exterms.disabled = true;
            }
        })
    </script>
</body>


</html>
