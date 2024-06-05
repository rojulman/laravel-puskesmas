<x-layout>
    <x-slot name="title">Daftar Kelurahan</x-slot>

    <div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Kelurahan</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($list_kelurahan as $kelurahan)
                <tr>
                    <th scope="row">{{ $kelurahan->id }}</th>
                    <td>{{ $kelurahan->nama }}</td>
                    <td>
                        <a href="{{ route('kelurahan.view',$kelurahan->id) }}"><i class="fas fa-eye text-info"></i></a>
                        
                        <a href=""><i class="fas fa-edit text-warning"></i></a>
                        <form action="" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>