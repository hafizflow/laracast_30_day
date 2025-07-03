@props(['name'])

@error($name)
    <p class="font-semibold text-red-500 mt-2 text-xs">{{ $message }}</p>
@enderror
