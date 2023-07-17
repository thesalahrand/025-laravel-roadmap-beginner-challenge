<section>
  <header>
    <h2 class="text-lg font-medium text-gray-900">
      {{ __('Create Tag') }}
    </h2>
  </header>

  <form method="post" action="{{ route('tags.store') }}" class="mt-6 space-y-6">
    @csrf

    <div>
      <x-input-label for="name" :value="__('Name')" />
      <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name')" required
        autofocus autocomplete="name" />
      <x-input-error class="mt-2" :messages="$errors->get('name')" />
    </div>

    <x-primary-button>{{ __('Create') }}</x-primary-button>
  </form>
</section>
