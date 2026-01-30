<x-layouts.app :title="$title ?? 'Dashboard'">
    <div class="min-h-screen flex">

        <!-- Sidebar -->
        @auth
        @if(auth()->user()->role === 'pengelola')
        <livewire:components.sidebar.pengelola />
        @else
        <livewire:components.sidebar.penyewa />
        @endif
        @endauth

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">

            <main class="flex-1 p-6 ml-64">
                {{ $slot }}
            </main>
        </div>
    </div>
</x-layouts.app>