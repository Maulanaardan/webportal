<x-layout>
    <x-slot:tittle>
        {{$tittle}}
    </x-slot>
    <section class="bg-white dark:bg-gray-900 py-8 lg:py-16">
        
    <x-search/>
    <div class="py-4 px-4 mx-auto">
        {{ $posts->links() }}
    </div>
            <div class="py-4 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                <div class="grid gap-8 lg:grid-cols-3">
    @foreach ($posts as $post)
    <!-- <h2 class="text-2xl mt-5 text-blue-400">{{$post['judul']}}</h2>
    <div>
        by
        <a href="/authors/{{$post->author->username}}"><p>{{$post->author->name}} | 1 Januari 2024</p></a>
        in
        <a href="/categories/{{$post->category->slug}}"><p>{{$post->category->name}} | 1 Januari 2024</p></a>
        <p>{{Str::limit($post['body'], 100)}}</p>
        <a href="/post/{{$post['slug']}}">Read more</a> -->
        
                <article class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <span class="bg-primary-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                            <svg class="mr-1 w-3 h-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 6a2 2 0 012-2h6a2 2 0 012 2v8a2 2 0 01-2 2H4a2 2 0 01-2-2V6zM14.553 7.106A1 1 0 0014 8v4a1 1 0 00.553.894l2 1A1 1 0 0018 13V7a1 1 0 00-1.447-.894l-2 1z"></path></svg>
                            Tutorial
                        </span>
                        <span class="text-sm">14 days ago</span>
                    </div>
                    <a href="/post/{{$post['slug']}}"><h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$post['judul']}}</h2></a>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{$post['body']}}</p>
                    <div class="flex justify-between items-center">
                        <a href="/post?author={{$post->author->slug}}" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                        <div class="flex items-center space-x-4">
                            <img class="w-7 h-7 rounded-full" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="Jese Leos avatar" />
                            <span class="font-medium dark:text-white">
                            {{$post->author->name}}
                            </span>
                        </div>
                        </a>
                        <a href="/post?category={{$post->category->slug}}" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                            {{$post->category->name}}
                        </a>
                        <a href="/post/{{$post['slug']}}" class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                            Read more
                            <svg class="ml-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                </article>                   
    <!-- </div> -->
    @endforeach
            </div>  
        </div>
    </section>
</x-layout>