<x-app>
    <x-register-login.register-login>
        <a href="/" class="mt-5 flex justify-center md:mt-0 md:block">
            <img src="/img/ui/logo-bedlink.png" class="h-10 w-fit">
        </a>
        <div>
            <div class="text-center">
                <h1 class="block font-syne text-2xl font-bold text-slate-800">Register</h1>
                <p class="mb-5 mt-2 text-sm text-slate-500">
                    Welcome to bedlink.id please enter your infromation below to make an account and start using the app
                </p>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <x-dashboard.error-popup />
                <div class="grid gap-y-4">
                    <x-forms.input type="text" name="name" id="name" label="Username"
                        value="{{ old('name') }}" Placeholder="Your Username" />
                    <x-forms.input type="email" name="email" id="email" label="Email" Placeholder="Your Email"
                        value="{{ old('email') }}" />
                    <x-forms.input type="password" name="password" id="password" label="Password"
                        placeholder="Your Password" />
                    <x-forms.input type="password" name="password_confirmation" id="password_confirmation"
                        label="Password Confirmation" placeholder="Your Password Confirmation" />
                    <x-buttons.big-button-alt class="mt-2" type="submit">Register</x-buttons.big-button-alt>
                </div>
            </form>
        </div>
        <p class="mb-5 text-center text-sm text-slate-600 md:mb-0 md:text-start">
            Already have an account?
            <a href="{{ route('login') }}" class="ms-0.5 rounded-full bg-[#196ECD] px-2.5 py-1.5 text-white">Sign
                In</a>
        </p>
    </x-register-login.register-login>
</x-app>

