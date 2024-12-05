<div>
    <a href="{{ url('/'.$role.'/'.$page) }}" {{ $attributes->merge(['class' => 'flex justify-start items-center gap-4 p-2 border-b-2 border-[#AEB7c1] hover:bg-BlueAccent hover:text-white']) }}>
        <p class="text-xl font-semibold">{{ $slot }}</p>
    </a>
</div>
