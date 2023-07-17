<x-app-layout>
  <x-slot name="header">
    <ul class="flex items-center">
      <li class="inline-flex items-center">
        <a href="{{ route('home') }}" class="text-sm text-gray-600 hover:text-blue-500 font-medium">
          {{ __('Posts') }}
        </a>

        <svg class="w-5 h-auto fill-current mx-2 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <path d="M0 0h24v24H0V0z" fill="none" />
          <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z" />
        </svg>
      </li>

      <li class="inline-flex items-center">
        <a href="{{ route('posts.show', $post->id) }}" class="text-sm text-gray-600 hover:text-blue-500 font-medium">
          {{ str_limit($post->title, 20) }}
        </a>
      </li>
    </ul>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
        <article>
          <h2 class="text-2xl font-medium text-gray-900">{{ $post->title }}</h2>
          <img src="{{ is_null($post->image) ? 'https://placehold.co/600x400' : asset('storage/' . $post->image) }}"
            class="my-6 h-96 w-full object-cover rounded-lg" alt="Image 1">
          <p class="mb-4 font-light text-gray-500">{{ $post->full_text }}</p>
          <p class="mb-4">
            <span class="text-gray-700 font-medium">Category:</span>
            <span class="text-gray-500 font-light">{{ $post->category->name }}</span>
          </p>
          <p class="mb-4">
            <span class="text-gray-700 font-medium">Tags:</span>
            <span class="inline-flex space-x-1">
              @foreach ($post->tags as $tag)
                <span class="text-gray-500 font-light">
                  {{ $tag->name }}{{ !$loop->last ? ',' : '' }}
                </span>
              @endforeach
            </span>
          </p>
        </article>
      </div>
    </div>
  </div>
</x-app-layout>
