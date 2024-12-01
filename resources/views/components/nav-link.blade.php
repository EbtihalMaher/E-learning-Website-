@props(['active' => false])
<a class="{{ $active ? 'bg-slate-800 text-white' : 'text-slate-300 hover:bg-slate-700 hover:text-white'  }} rounded-md px-3 py-2 text-sm font-medium "
   aria-current="{{ $active ? 'page' : 'false' }}"
   {{ $attributes }}
>{{ $slot  }}</a>
