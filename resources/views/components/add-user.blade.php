<div>
    <a href="{{ $href }}" data-toggle="modal" {{ $attributes->merge(['class' => 'btn btn-success']) }}>
        {{ $slot }}
    </a>
</div>