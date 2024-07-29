<div class="relative">
    <div class="">
        <nav class="flex items-center justify-end bg-white py-3 px-4 text-blue drop-shadow-md">
            <div class="items-center -space-y-1 grid text-right">
                <span class="text-xl font-bold">Nama Siswa</span>
                <span class="text-sm font-light">Kelas</span>
            </div>
        </nav>
    </div>
    <div class="w-64 bg-blue-700 text-white min-h-screen fixed left-0 top-0 z-50">
        <div class="p-5 text-center">
            <h1 class="text-xl font-bold">E<span class="font-normal">-Raportku.</span></h1>
        </div>
        <hr class="w-4/5 mx-auto border-gray-300">
        <nav class="mt-6 pr-10 space-y-2 grid">
            <ul>
                <li class="grid space-y-2">
                    @foreach ($navitem as $item)
                        {{-- @if (isset($item['subItems']))
                            <a class="font-semibold rounded-r-full text-sm py-2.5 px-6 transition duration-300 ease-in-out hover:bg-slate-50 hover:text-blue-700" href="">{{$item['name']}}</a>
                            @foreach ($item['subItems'] as $dropdown)
                                <a class="font-semibold rounded-r-full text-sm py-2.5 px-6 transition duration-300 ease-in-out hover:bg-slate-50 hover:text-blue-700 {{ Request::is(trim($item['url'], '/')) ? 'bg-slate-50 text-blue-700' : 'bg-blue-700 text-slate-50' }}" href="{{$dropdown['url']}}">{{$dropdown['name']}}</a>
                            @endforeach
                            
                        @else --}}
                        <a class="font-semibold rounded-r-full text-sm py-2.5 px-6 transition duration-300 ease-in-out hover:bg-slate-50 hover:text-blue-700 {{ Request::is(trim($item['url'], '/')) ? 'bg-slate-50 text-blue-700' : 'bg-blue-700 text-slate-50' }}" href="{{ $item['url'] }}">{{ $item['name'] }}</a>
                        {{-- @endif --}}
                    @endforeach
                </li>
            </ul>
        </nav>
        <hr class="mt-6 w-4/5 mx-auto border-gray-300">
        <div class="mt-6 text-center">
            <a href="/logout" class="text-sm border font-semibold rounded-full py-2.5 px-8 transition duration-200 ease-in-out hover:border-0 hover:bg-slate-50 hover:text-blue-700">Logout</a>
        </div>
    </div>
</div>