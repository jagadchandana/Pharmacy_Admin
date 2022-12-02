  @push('styles')
      <link href="{{ asset('css/profile.css') }}" rel="stylesheet" type="text/css" />
  @endpush
  <x-layouts.app-layout>
      <x-slot name="slot">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between">
              <h1 class="h3 mb-0 text-gray-800">Profile</h1>
          </div>
          <div class="container rounded bg-white mt-5 mb-5">

             @livewire('user-update-form')

          </div>
      </x-slot>
  </x-layouts.app-layout>
  @push('scripts')
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"></script>
  @endpush
