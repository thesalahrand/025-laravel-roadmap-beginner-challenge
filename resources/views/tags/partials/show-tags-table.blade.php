<section>
  <header class="flex justify-between items-center">
    <h2 class="text-lg font-medium text-gray-900">
      {{ __('Tags') }}
    </h2>
    <a href="{{ route('tags.create') }}">
      <x-primary-button>{{ __('Create Tag') }}</x-primary-button>
    </a>
  </header>

  <div class="relative overflow-x-auto mt-6">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="px-6 py-3">
            ID
          </th>
          <th scope="col" class="px-6 py-3">
            Name
          </th>
          <th scope="col" class="px-6 py-3">
            Actions
          </th>
        </tr>
      </thead>
      <tbody>
        @forelse ($tags as $tag)
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
              {{ $tag->id }}
            </th>
            <td class="px-6 py-4">
              {{ $tag->name }}
            </td>
            <td class="px-6 py-4">
              <a href="{{ route('tags.edit', $tag->id) }}">
                <x-primary-button class="mr-2">{{ __('Edit') }}</x-primary-button>
              </a>
              <form method="POST" class="inline" action="{{ route('tags.destroy', $tag->id) }}">
                @csrf
                @method('DELETE')

                <x-primary-button>{{ __('Delete') }}</x-primary-button>
              </form>
            </td>
          </tr>
        @empty
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <td colspan="3" class="px-6 py-4 text-center">No tags found</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</section>
