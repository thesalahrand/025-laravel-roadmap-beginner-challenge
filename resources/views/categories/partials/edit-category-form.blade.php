<section>
  <header>
    <h2 class="text-lg font-medium text-gray-900">
      {{ __('Edit Category') }}
    </h2>
  </header>

  <form method="post" action="{{ route('categories.update', $category->id) }}" class="mt-6 space-y-6">
    @csrf
    @method('PUT')

    <div>
      <x-input-label for="name" :value="__('Name')" />
      <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $category->name)" required
        autofocus autocomplete="name" />
      <x-input-error class="mt-2" :messages="$errors->get('name')" />
    </div>

    <x-primary-button>{{ __('Edit') }}</x-primary-button>
  </form>
</section>
