<button {{ $attributes->merge(['class' => 'bg-[#76a1cc] text-white font-semibold px-5 hover:bg-[#76a1cc] hover:bg-opacity-80', 'type' => 'button']) }}>
    {{ $slot }}
</button>
