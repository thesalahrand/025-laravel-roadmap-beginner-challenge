<x-app-layout>
  <x-slot name="header">
    <ul class="flex items-center">
      <li class="inline-flex items-center">
        <a href="{{ route('home') }}" class="text-sm text-gray-600 hover:text-blue-500 font-medium">
          {{ __('Home') }}
        </a>
      </li>
    </ul>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
          <section>
            <header class="flex justify-between items-center">
              <h2 class="text-lg font-medium text-gray-900">
                {{ __('Posts') }}
              </h2>
            </header>

            <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4 mt-6">
              @foreach ($posts as $post)
                <article class="max-w-xs">
                  <a href="{{ route('posts.show', $post->id) }}">
                    <img src="{{ asset('storage/' . $post->image) }}" class="mb-5 h-48 w-full object-cover rounded-lg"
                      alt="Image 1">
                  </a>
                  <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900">
                    {{ $post->title }}
                  </h2>
                  <p class="mb-4 font-light text-gray-500">{{ str_limit($post->full_text, 100) }}
                  </p>
                  <a href="{{ route('posts.show', $post->id) }}"
                    class="inline-flex items-center font-medium underline underline-offset-4 text-blue-600  hover:no-underline">
                    Read more
                  </a>
                </article>
              @endforeach
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
