<div class="mb-2">
    <label for="{{ $label_for }}" class="font-semibold">{{ $slot }}</label> <br>
    <input {{ $attributes->merge(['type' => 'text', 'class' => 'w-full outline-none border-2 border-gray-300']) }}>
</div>
