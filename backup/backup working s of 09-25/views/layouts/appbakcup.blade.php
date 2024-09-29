  <!-- Main Content -->
  <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Content -->
        <main class="container mx-auto py-16 px-6 lg:px-8">
            {{ $slot }}
        </main>
    </div>