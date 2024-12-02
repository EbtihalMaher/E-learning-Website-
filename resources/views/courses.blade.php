<x-layouts>
    <x-slot:heading>
        Courses
    </x-slot:heading>
    <ul>
        @foreach($courses as $course)
            <li>
                <a href="/courses/{{ $course['id'] }}">
                    <strong>{{ $course['title'] }}</strong>, duration: {{ $course['duration'] }}, instructor: {{ $course['instructor'] }}, price: {{ $course['price'] }}
                </a>
            </li>
            <br>
        @endforeach
    </ul>

</x-layouts>
