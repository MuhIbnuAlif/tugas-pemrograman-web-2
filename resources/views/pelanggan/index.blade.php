<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    <ul class="list-group">
        @foreach ($pelanggans as $pelanggan)
            <li class="list-group-item">{{ $loop->iteration }}. {{ $pelanggan->nik }} -- {{ $pelanggan->name }}</li>
        @endforeach
    </ul>

</x-app>
