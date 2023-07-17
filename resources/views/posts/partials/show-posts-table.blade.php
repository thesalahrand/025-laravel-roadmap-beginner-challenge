<section>
  <header class="flex justify-between items-center">
    <h2 class="text-lg font-medium text-gray-900">
      {{ __('Posts') }}
    </h2>
    <a href="{{ route('posts.create') }}">
      <x-primary-button>{{ __('Create Post') }}</x-primary-button>
    </a>
  </header>

  <div class="relative overflow-x-auto mt-6">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="min-w-[50px] px-6 py-3">
            ID
          </th>
          <th scope="col" class="min-w-[100px] px-6 py-3">
            Title
          </th>
          <th scope="col" class="min-w-[100px] px-6 py-3">
            Category
          </th>
          <th scope="col" class="min-w-[100px] px-6 py-3">
            Tags
          </th>
          <th scope="col" class="min-w-[100px] px-6 py-3">
            Created at
          </th>
          <th scope="col" class="min-w-[100px] px-6 py-3">
            Last Updated
          </th>
          <th scope="col" class="px-6 py-3">
            Actions
          </th>
        </tr>
      </thead>
      <tbody>
        @forelse ($posts as $post)
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row"
              class="min-w-[50px] px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
              {{ $post->id }}
            </th>
            <td class="min-w-[100px] px-6 py-4">
              {{ $post->title }}
            </td>
            <td class="min-w-[100px] px-6 py-4">
              {{ $post->category->name }}
            </td>
            <td class="min-w-[100px] px-6 py-4">
              {{ $post->tags->pluck('name')->implode(', ') }}
            </td>
            <td class="min-w-[100px] px-6 py-4">
              {{ $post->created_at->format('jS M, Y \a\t h:i A') }}
            </td>
            <td class="min-w-[100px] px-6 py-4">
              {{ $post->updated_at->format('jS M, Y \a\t h:i A') }}
            </td>
            <td class="px-6 py-4">
              <div class="flex flex-nowrap">
                <a href="{{ route('posts.edit', $post->id) }}">
                  <x-primary-button class="mr-2">{{ __('Edit') }}</x-primary-button>
                </a>
                <form method="POST" class="inline" action="{{ route('posts.destroy', $post->id) }}">
                  @csrf
                  @method('DELETE')

                  <x-primary-button>{{ __('Delete') }}</x-primary-button>
                </form>
              </div>
            </td>
          </tr>
        @empty
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <td colspan="3" class="px-6 py-4 text-center">No posts found</td>
          </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</section>
