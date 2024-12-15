<x-layouts>
    <x-slot:heading>
        Courses
    </x-slot:heading>
    <div>
        @foreach($courses as $course)
            <a href="/courses/{{ $course['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
                <strong>{{ $course->title }}</strong>, duration hours: {{ $course->duration_hours}}, level: {{ $course->level }}
            </a>
            <br>
        @endforeach
        <div>
            {{ $courses->links() }}
        </div>
    </div>

</x-layouts>
