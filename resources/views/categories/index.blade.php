<x-app-layout>
  <x-slot name="header">
    <ul class="flex items-center">
      <li class="inline-flex items-center">
        <a href="{{ route('categories.index') }}" class="text-sm text-gray-600 hover:text-blue-500 font-medium">
          {{ __('Categories') }}
        </a>
      </li>
    </ul>
  </x-slot>

  {{-- <x-toast> --}}
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
        @include('categories.partials.show-categories-table')
      </div>
    </div>
  </div>

</x-app-layout>
