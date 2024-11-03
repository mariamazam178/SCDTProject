<x-web-layout>
  <div class="relative">
    <img style="width: 100%; height: 562px; filter: brightness(0.5); z-index:-1 position:absolute"
      src="{{ asset('images/background.webp') }}" alt="bg Image">
    <!-- inserting an image with low brightness in the background -->
    <div style="position:absolute; top: 45%; left: 50%; transform: translate(-55%, -50%);">
      <h1 style="color:white; font-size: 175px; padding-left: 65px;">BLEND</h1><br> <!-- Writing a heading -->
      <h1 style="color:white; padding-left:75px">"Life happens, coffee helps."</h1> <!-- Writing a quote-->
    </div>
  </div>
</x-web-layout>