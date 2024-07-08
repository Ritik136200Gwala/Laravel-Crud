<div>
    <a href="{{ $href }}" data-toggle="modal" {{ $attributes->merge(['class' => 'btn btn-danger']) }}>
        {{ $slot }}
    </a>
</div>