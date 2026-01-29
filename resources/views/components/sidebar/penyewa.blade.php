<!-- resources/views/components/sidebar/pengelola.blade.php -->
<nav class="w-64 bg-[#53AD9F] text-white min-h-screen px-4 fixed inset-y-0 left-0 py-10 rounded-r-lg">
    <div class="mb-8 text-center">
        <div class="flex gap-2 items-end justify-center mb-4">
            <img src="{{ asset('assets/logo.png') }}" alt="KOSTKU" class="w-12 h-10">
            <h2 class="text-xl font-bold">KOSTKU</h2>
        </div>
        <p class="text-sm">{{ auth()->user()->name }}</p>
    </div>

    <ul class="space-y-4">
        <li class="flex gap-1 items-center justify-start px-2 hover:bg-[#B1C3C066] rounded">
            <img src="{{ asset('assets/dasboard.png') }}" alt="" class="w-6 h-6">
            <a href="/dashboard" class="text-lg font-extralight flex items-center p-2">
                Dashboard
            </a>
        </li>
        <li class="flex gap-1 items-center justify-start px-2 hover:bg-[#B1C3C066]">
            <img src="{{ asset('assets/data-kamar.png') }}" alt="" class="w-6 h-6">
            <a href="/dashboard" class="text-lg font-extralight flex items-center p-2">
                Data Kamar
            </a>
        </li>
        <li class="flex gap-1 items-center justify-start px-2 hover:bg-[#B1C3C066]">
            <img src="{{ asset('assets/riwayat-pembayaran.png') }}" alt="" class="w-6 h-6">
            <a href="/dashboard" class="text-lg font-extralight flex items-center p-2">
                Riwayat Pembayaran
            </a>
        </li>

        <form class="mt-52">
            @csrf
            <h2 class="text-lg flex items-center justify-start p-2">LOGOUT</h2>
            <hr>
            <a href="#" class="w-full flex gap-2 hover:bg-[#B1C3C066] rounded items-end justify-start p-2 mt-6">
                <img src="{{ asset('assets/logout.png') }}" alt="" class="w-6 h-6">
                <p class="text-lg font-extralight">Keluar</p>
            </a>
            <!-- <button type="submit" class="w-full flex items-center p-2 hover:bg-red-600 rounded">
                
            </button> -->
        </form>
</nav>