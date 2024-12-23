<x-app title="Sign In">
    <x-register-login.register-login>
        <a href="/" class="mt-5 flex justify-center md:mt-0 md:block">
            <img src="/img/ui/logo-bedlink.png" class="h-10 w-fit">
        </a>
        <div>
            <div class="text-center">
                <h1 class="block font-syne text-2xl font-bold text-slate-800">Sign in</h1>
                <p class="mb-5 mt-2 text-sm text-slate-500">
                    Welcome to bedlink.id please enter your login credintials below to start using the app
                </p>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <x-dashboard.error-popup />
                <div class="grid gap-y-4">
                    <x-forms.input type="email" name="email" id="email" label="Email"
                        placeholder="Your Email" />
                    <x-forms.input type="password" name="password" id="password" label="Password"
                        placeholder="Your Password" />
                    <p class="text-sm text-slate-600">
                        Forgot your password?
                        <a class="font-medium text-[#196ECD] decoration-2 hover:underline focus:underline focus:outline-none"
                            href="{{ route('password.request') }}">
                            Reset Here
                        </a>
                    </p>
                    <x-buttons.big-button-alt type="submit">Sign In</x-buttons.big-button-alt>
                </div>
            </form>
            <div class="my-4 flex items-center justify-center">
                <span class="h-[1px] w-full bg-slate-200"></span>
                <span class="mx-4 text-sm text-slate-600">Or</span>
                <span class="h-[1px] w-full bg-slate-200"></span>
            </div>
            <a href="/auth/redirect">
                <x-buttons.big-button-alt-secondary type="submit"><img class="h-4"
                        src="https://img.icons8.com/color/48/000000/google-logo.png"> Login With
                    Google</x-buttons.big-button-alt-secondary>
            </a>
        </div>
        <p class="mb-5 text-center text-sm text-slate-600 md:mb-0 md:text-start">
            Don't have an account?
            <a href="{{ route('register') }}"
                class="ms-0.5 rounded-full bg-[#196ECD] px-2.5 py-1.5 text-white">Register</a>
        </p>
    </x-register-login.register-login>
    <x-dashboard.success-popup />
    <x-dashboard.error-popup />
</x-app>

