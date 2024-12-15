<x-layouts>
    <x-slot:heading>
        Contact page
    </x-slot:heading>
    <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-balance text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Contact Us</h2>
        </div>
        <form action="/contact" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
            @csrf
            <div class="sm:col-span-2 ">
                <div>
                    <label for="name" class="block text-sm/6 font-semibold text-gray-900">Name</label>
                    <div class="mt-2.5">
                        <input type="text" name="name" id="name" autocomplete="name" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600" required>
                        @error('name')
                            <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="pt-3 sm:col-span-2">
                    <label for="email" class="block text-sm/6 font-semibold text-gray-900">Email</label>
                    <div class="mt-2.5">
                        <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600" required>
                        @error('email')
                            <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="pt-3 sm:col-span-2">
                    <label for="message" class="block text-sm/6 font-semibold text-gray-900">Message</label>
                    <div class="mt-2.5">
                        <textarea name="message" id="message" rows="4" class="block w-full rounded-md bg-white px-3.5 py-2 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600" required></textarea>
                        @error('message')
                            <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                        @enderror
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
                <button type="submit" class="block w-full rounded-md bg-indigo-700 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Let's talk</button>
            </div>
        </form>
    </div>
</x-layouts>
