<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Edit Post
        </h2>
    </x-slot>

    <div class="py-12">
        <form action="{{ route('loby.posts.update', $post->id) }}" method="POST" class="max-w-4xl mx-auto">
            @csrf
            @method('PUT')

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <input type="text" name="judul" value="{{ old('judul', $post->judul) }}" placeholder="Judul"
                    class="border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring focus:border-blue-300">

                <input type="text" name="slug" value="{{ old('slug', $post->slug) }}" placeholder="Slug"
                    class="border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring focus:border-blue-300">
            </div>

            <div class="mt-4">
                <select name="category_id"
                    class="w-full border border-gray-300 rounded px-4 py-2 bg-white focus:outline-none focus:ring focus:border-blue-300">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                            {{ $post->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mt-4">
                <textarea name="body" rows="6" placeholder="Isi artikel"
                    class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring focus:border-blue-300">{{ old('body', $post->body) }}</textarea>
            </div>

            <div class="mt-4">
                <button type="submit"
                    class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition">Update</button>
                <a href="{{ route('loby.posts.index') }}" class="ml-4 text-gray-600 hover:underline">Kembali</a>
            </div>
        </form>
    </div>
</x-app-layout>
