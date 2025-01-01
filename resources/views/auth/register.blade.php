<x-layouts>
    <x-slot:heading>
        Register
    </x-slot:heading>
    <div class="isolate bg-white px-6 py-5 sm:py-10 lg:px-8">
        <form action="/register" method="POST" class="mx-auto max-w-xl sm:mt-20">
            @csrf
            <div class="sm:col-span-2 ">
                <div>
                    <x-form-label for="name">Name</x-form-label>
                    <div class="mt-2.5">
                        <x-form-input type="text" name="name" id="name" autocomplete="name" :value="old('name')" required></x-form-input>
                        <x-form-error name="name"/>
                    </div>
                </div>
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
                <div class="pt-3 sm:col-span-2">
                    <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                    <div class="mt-2.5">
                        <x-form-input type="password" name="password_confirmation" id="password_confirmation" required></x-form-input>
                        <x-form-error name="password_confirmation"/>
                    </div>
                </div>
            </div>
            <div class="mt-10 mb-5">
                <x-form-button>Register</x-form-button>
            </div>
        </form>
    </div>
</x-layouts>
