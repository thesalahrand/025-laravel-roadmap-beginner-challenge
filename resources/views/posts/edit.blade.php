<x-app-layout>
  <x-slot name="header">
    <ul class="flex items-center">
      <li class="inline-flex items-center">
        <a href="{{ route('posts.index') }}" class="text-sm text-gray-600 hover:text-blue-500 font-medium">
          {{ __('Posts') }}
        </a>

        <svg class="w-5 h-auto fill-current mx-2 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
          <path d="M0 0h24v24H0V0z" fill="none" />
          <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z" />
        </svg>
      </li>

      <li class="inline-flex items-center">
        <a href="{{ route('posts.edit', $post->id) }}" class="text-sm text-gray-600 hover:text-blue-500 font-medium">
          {{ __('Edit') }}
        </a>
      </li>
    </ul>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
        <div class="max-w-xl">
          @include('posts.partials.edit-post-form')
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
