<x-layouts>
    <x-slot:heading>
        Course
    </x-slot:heading>
    <p>
        <strong>{{ $course->title }}</strong>, duration hours: {{ $course->duration_hours}}, level: {{ $course->level }}
    </p>
   <p>
       description: {{ $course->description }}
   </p>
</x-layouts>
