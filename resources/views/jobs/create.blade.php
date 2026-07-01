<x-layout>
    <x-slot name="title">Create Job</x-slot>
    <h1>Create New Job</h1>
    <form action="/jobs" method="post">
        @csrf
        <div class="mb-4">
            <input type="text" name="title" placeholder="Job Title" value="{{ old('title') }}">
            @error('title')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-4">
            <input type="text" name="description" placeholder="Job Description" value="{{ old('description') }}">
            @error('description')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit">Create Job</button>
    </form>
</x-layout>