<x-app bg="bg-slate-50">
    <x-dashboard.header-alt />
    <div class="bg-slate-50">
        <div class="mx-auto flex flex-col justify-between gap-0 px-5 md:max-w-screen-xl md:flex-row md:gap-10 md:px-0">
            <div class="w-full py-8">
                <span class="text-lg font-bold md:text-xl">Edit Account</span>
                <div
                    class="mt-5 w-full items-center justify-between rounded-xl border border-slate-200 bg-white px-5 py-7 md:px-6 md:py-10">
                    <form method="POST" action="{{ route('edit-acount') }}">
                        @csrf
                        <div class="w-full space-y-4">
                            <img src="/img/ui/user-icon.jpg"
                                class="mb-7 aspect-square h-16 rounded-lg border border-slate-200 bg-white object-cover object-center">
                            <x-forms.input name="name" id="name" label="Edit Username"
                                value="{{ $user->name }}" />
                            <x-forms.input name="email" id="email" label="Edit Email"
                                value="{{ $user->email }}" />
                            <div class="pt-2 md:pt-3">
                                <x-buttons.big-button-alt type="submit">
                                    <i class="ri-save-3-line"></i> Save Changes
                                </x-buttons.big-button-alt>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="mb-10 w-full py-0 md:mb-0 md:py-8">
                <span class="text-lg font-bold md:text-xl">Change Password</span>
                <div
                    class="mt-5 w-full items-center justify-between rounded-xl border border-slate-200 bg-white px-5 py-7 md:px-6 md:py-10">
                    <form method="POST" action="{{ route('edit-password') }}">
                        @csrf
                        <x-dashboard.error-popup />
                        <div class="w-full space-y-4">
                            <x-forms.input type="password" name="current_password" id="current_password"
                                label="Old Password" />
                            <x-forms.input type="password" name="password" id="password" label="New Password" />
                            <x-forms.input type="password" name="password_confirmation" id="password_confirmation"
                                label="New Password Confirmation" />

                            <div class="pt-2 md:pt-3">
                                <x-buttons.big-button-alt type="submit">
                                    <i class="ri-save-3-line"></i> Update Password
                                </x-buttons.big-button-alt>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <x-dashboard.success-popup />
</x-app>

