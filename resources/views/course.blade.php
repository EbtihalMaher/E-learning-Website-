<x-layouts>
    <x-slot:heading>
        Course
    </x-slot:heading>
    <p>
        <strong>{{ $course['title'] }}</strong>, duration: {{ $course['duration'] }}, instructor: {{ $course['instructor'] }}, price: {{ $course['price'] }}
    </p>
</x-layouts>
