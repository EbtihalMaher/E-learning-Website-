<x-layouts>
    <x-slot:heading>
        Contact page
    </x-slot:heading>
    <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-balance text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Contact Us</h2>
        </div>
        <form action="/contact-messages" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
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
                    <x-form-label for="message">Message</x-form-label>
                    <div class="mt-2.5">
                        <textarea name="message" id="message" rows="4" :value="old('message')" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600" required></textarea>
                        <x-form-error name="message"/>
                    </div>
                </div>
            </div>
{{--            <div class="mt-10">--}}
{{--                @if($errors->any())--}}
{{--                    <ul>--}}
{{--                        @foreach($errors->all() as $error)--}}
{{--                            <li class="text-red-500 "> {{ $error }}</li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                @endif--}}
{{--            </div>--}}
            <div class="mt-10">
                <x-form-button>Let's talk</x-form-button>
            </div>
        </form>
    </div>
</x-layouts>
