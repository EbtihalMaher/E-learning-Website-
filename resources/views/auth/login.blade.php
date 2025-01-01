<x-layouts>
    <x-slot:heading>
        Login
    </x-slot:heading>
    <div class="isolate bg-white px-6 py-5 sm:py-10 lg:px-8">
        <form action="/login" method="POST" class="mx-auto max-w-xl sm:mt-20">
            @csrf
            <div class="sm:col-span-2 ">
                <div class="pt-3 sm:col-span-2">
                    <x-form-label for="email">Email</x-form-label>
                    <div class="mt-2.5">
                        <x-form-input type="email" name="email" id="email" autocomplete="email" :value="old('email')" required></x-form-input>
                        <x-form-error name="email"/>
                    </div>
                </div>
                <div class="pt-3 sm:col-span-2">
                    <x-form-label for="password">Password</x-form-label>
                    <div class="mt-2.5">
                        <x-form-input type="password" name="password" id="password" required></x-form-input>
                        <x-form-error name="password"/>
                    </div>
                </div>
            </div>
            <div class="mt-10 mb-5">
                <x-form-button>Login</x-form-button>
            </div>
        </form>
    </div>
</x-layouts>
