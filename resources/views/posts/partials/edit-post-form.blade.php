<section>
  <header>
    <h2 class="text-lg font-medium text-gray-900">
      {{ __('Edit Post') }}
    </h2>
  </header>

  <form method="post" action="{{ route('posts.update', $post->id) }}" class="mt-6 space-y-6" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div>
      <x-input-label for="title" :value="__('Title')" />
      <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title', $post->title)" required
        autofocus autocomplete="title" />
      <x-input-error class="mt-2" :messages="$errors->get('title')" />
    </div>
    <div>
      <x-input-label for="full_text" :value="__('Full Text')" />
      <textarea id="full_text" name="full_text"
        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full"
        :value="old('full_text')" required autocomplete="full_text" rows="5">{{ old('full_text', $post->full_text) }}</textarea>
      <x-input-error class="mt-2" :messages="$errors->get('full_text')" />
    </div>
    <div>
      <x-input-label for="category_id" :value="__('Category')" />
      <select name="category_id" id="category_id"
        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm mt-1 block w-full"
        required>
        <option value="">-- Select an option --</option>
        @foreach ($categories as $category)
          <option {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}
            value="{{ $category->id }}">
            {{ $category->name }}</option>
        @endforeach
      </select>
      <x-input-error class="mt-2" :messages="$errors->get('category_id')" />
    </div>
    <div>
      <x-input-label class="mb-2" :value="__('Tags')" />

      <div class="flex flex-wrap gap-2">
        @foreach ($tags as $tag)
          <div class="flex items-center">
            <input
              {{ (is_array(old('tags')) && in_array($tag->id, old('tags'))) || $post->tags->contains('id', $tag->id) ? 'checked' : '' }}
              name="tags[]" id="tag-{{ $tag->id }}" type="checkbox" value="{{ $tag->id }}"
              class="w-4 h-4 mr-2 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <x-input-label for="tag-{{ $tag->id }}" :value="__($tag->name)" />
          </div>
        @endforeach
      </div>

      <x-input-error class="mt-2" :messages="$errors->get('tags')" />
      <x-input-error class="mt-2" :messages="$errors->get('tags.0')" />
    </div>
    <div>
      <x-input-label for="image" :value="__('Upload an image (Optional)')" />
      @if (!is_null($post->image))
        <img class="object-cover w-full h-64 my-3 rounded-md" src="{{ asset('storage/' . $post->image) }}"
          alt="{{ $post->title }}">
      @endif
      <x-text-input id="image" name="image" type="file" class="mt-1 block w-full border py-[5px] px-3" />
      <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">PNG or JPG (MAX. 1 MB).</p>
      <x-input-error class="mt-2" :messages="$errors->get('image')" />
    </div>

    <x-primary-button>{{ __('Edit') }}</x-primary-button>
  </form>
</section>
