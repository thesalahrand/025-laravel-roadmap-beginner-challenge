<x-app-layout>
  <x-slot name="header">
    <ul class="flex items-center">
      <li class="inline-flex items-center">
        <a href="{{ route('about') }}" class="text-sm text-gray-600 hover:text-blue-500 font-medium">
          {{ __('About') }}
        </a>
      </li>
    </ul>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
          <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi porttitor enim nulla, a
            interdum ante posuere
            pharetra. Curabitur non diam felis. Nunc condimentum lobortis massa eget dignissim. Donec dolor mi, molestie
            rhoncus metus in, feugiat placerat justo. Donec molestie, ex blandit sodales eleifend, eros sapien ultricies
            urna, nec pulvinar enim leo non mauris. Donec imperdiet nunc non commodo elementum. Maecenas ultricies
            suscipit aliquet. Vestibulum posuere scelerisque est vitae efficitur. Nam varius iaculis elit et posuere.
            Donec ac dolor eu ante posuere accumsan venenatis non leo. Duis dui risus, vehicula sit amet mi a, fringilla
            interdum massa. Integer pretium vitae lacus in facilisis. Integer ut risus volutpat, aliquet urna vel,
            posuere
            erat.</p>

          <p class="mb-3">Etiam id nibh ac est tempus imperdiet a scelerisque lorem. Phasellus volutpat tortor et
            auctor fringilla.
            Integer venenatis, orci nec tempus bibendum, augue sapien ultricies nisl, non feugiat mi tortor a metus.
            Integer in lacus pellentesque, consectetur leo vel, rutrum tellus. Aliquam egestas urna elit, sed pulvinar
            magna tristique vitae. Nullam rhoncus at ipsum non ullamcorper. Donec diam orci, blandit vel urna ac,
            faucibus
            fringilla ipsum. Etiam vitae nunc arcu. Nulla at mi et nulla interdum eleifend quis id lacus. Etiam feugiat
            augue arcu, sollicitudin accumsan erat convallis sed. Suspendisse et rhoncus metus, a malesuada massa. Donec
            venenatis erat dui. Sed gravida aliquet mauris, ac consectetur massa fringilla vel. In euismod nunc id
            semper
            scelerisque. Morbi bibendum, ex non cursus pharetra, urna metus porta sem, placerat lobortis enim enim sit
            amet lacus. Nunc mauris ex, tincidunt pharetra lobortis in, dignissim ac orci.</p>

          <p class="mb-3">Sed bibendum ex at urna gravida, ut venenatis ex sagittis. Nunc imperdiet venenatis justo ut
            consequat. Etiam
            nec metus ut neque venenatis egestas non non odio. Duis sapien lorem, interdum vel diam id, ullamcorper
            auctor
            mauris. Ut vehicula molestie ipsum cursus vulputate. Ut volutpat posuere ligula non scelerisque. Nullam
            lorem
            lacus, convallis et posuere non, tristique vel augue. Donec euismod leo at arcu placerat ornare. Ut viverra
            congue orci, vitae ultrices sapien lobortis nec. Pellentesque metus metus, ultrices sit amet ante in, rutrum
            congue est. In hac habitasse platea dictumst. Nulla vehicula orci ut ligula porta pharetra. In ac urna eget
            nunc gravida malesuada. Donec vel mollis elit, sed aliquam sapien. Aenean in varius leo. Morbi maximus at
            leo
            at feugiat.</p>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
