<x-layout>
    <x-slot name="title">Kelola Data Pasien</x-slot>
    <x-slot name="card_title">Data Pasien Aktif</x-slot>

    @if(session('success'))
    <div class="alert alert-success">
            {{ session('success') }}
    </div>
    @endif
    <div>
        <a href="{{ route('pasien.create') }}" class="btn btn-primary">Tambah Pasien</a>    
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kode</th>
                <th scope="col">Nama</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Alamat</th>
                <th scope="col">Kelurahan</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list_pasien as $pasien)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{ $pasien->kode }}</td>
                <td>{{ $pasien->nama }}</td>
                <td>{{ $pasien->tmp_lahir }}</td>
                <td>{{ $pasien->tgl_lahir }}</td>
                <td>{{ $pasien->alamat }}</td>
                <td>{{ $pasien->kelurahan->nama }}</td>
                
                <td>
                    <a href=""><i class="fas fa-eye text-info"></i></a>&nbsp;
                    <a href="{{route('pasien.edit',$pasien->id)}}"><i class="fas fa-edit text-warning"></i></a>
                    <form action="{{route('pasien.destroy',$pasien->id)}}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-link"><i class="fas fa-trash text-danger"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>