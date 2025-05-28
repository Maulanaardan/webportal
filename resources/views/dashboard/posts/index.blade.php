<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
    <form action="{{ route('loby.posts.store') }}" method="POST" class="mb-6">
    @csrf
    <div class="grid grid-cols-1 md:grid-cols-5 gap-4 items-start">
        <input type="text" name="judul" placeholder="Judul"
            class="col-span-1 md:col-span-2 border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring focus:border-blue-300">

        <input type="text" name="slug" placeholder="Slug"
            class="col-span-1 md:col-span-2 border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring focus:border-blue-300">

        <select name="category_id"
            class="col-span-1 border border-gray-300 rounded px-4 py-2 bg-white focus:outline-none focus:ring focus:border-blue-300">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>

        <textarea name="body" placeholder="Isi artikel"
            class="md:col-span-5 border border-gray-300 rounded px-4 py-2 h-28 focus:outline-none focus:ring focus:border-blue-300 mt-2"></textarea>

        <button type="submit"
            class="bg-blue-600 text-white px-6 py-2 rounded hover:bg-blue-700 transition md:col-span-1">Simpan</button>
    </div>
</form>

{{-- Tabel Post User --}}
<div class="overflow-x-auto">
    <table class="min-w-full bg-white border border-gray-300">
        <thead class="bg-gray-100">
            <tr>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 border-b">id</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 border-b">Judul</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 border-b">Slug</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 border-b">Kategori</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 border-b">author</th>
                <th class="px-6 py-3 text-left text-sm font-medium text-gray-700 border-b">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr class="hover:bg-gray-50">
            <td class="px-6 py-4 border-b">{{ $post->id }}</td>
                <td class="px-6 py-4 border-b">{{ $post->judul }}</td>
                <td class="px-6 py-4 border-b">{{ $post->slug }}</td>
                <td class="px-6 py-4 border-b">{{ $post->category->name }}</td>
                <td class="px-6 py-4 border-b">{{ $post->author->name }}</td>
                <td class="px-6 py-4 border-b">
                <a href="{{ route('loby.posts.edit', $post->id) }}" class="text-blue-600 hover:underline">Edit</a>
                <form action="{{ route('loby.posts.destroy', $post->id) }}"  method="POST" class="inline">
                        @method('DELETE')
                        @csrf
                        <button type="submit" onclick="return confirm('Yakin hapus?')" class="text-red-600 hover:underline ml-2">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</x-app-layout>
