<x-app title="Update Password">
    <x-register-login.register-login>
        <div>
            <div class="text-center">
                <h1 class="block text-2xl font-bold text-slate-800">Update Password</h1>
                <p class="mb-5 mt-2 text-sm text-slate-600">
                    Belum Punya Akun?
                    <a class="font-medium text-[#196ECD] decoration-2 hover:underline focus:underline focus:outline-none"
                        href="/register">
                        Register di sini
                    </a>
                </p>
            </div>

            <form action="{{ route('password.update', ['token' => $token]) }}" method="POST">
                @csrf
                <x-dashboard.error-popup />
                <div class="grid gap-y-4">
                    <x-forms.input type="email" name="email" id="email" label="Email" />
                    <x-forms.input type="password" name="password" id="password" label="Password" />
                    <x-forms.input type="password" name="password_confirmation" id="password_confirmation"
                        label="Konfirmasi Password" />
                    <x-buttons.big-button-alt type="submit">Update Password</x-buttons.big-button-alt>
                </div>
            </form>
        </div>
    </x-register-login.register-login>
    <x-dashboard.success-popup />
    <x-dashboard.error-popup />
</x-app>

