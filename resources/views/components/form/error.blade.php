@props(['name', 'class' => ''])

@error($name)
    <p {{ $attributes->merge(['class' => 'text-red-600 text-sm mt-1 ' . $class]) }}>
        {{ $message }}
    </p>
@enderror