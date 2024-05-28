<x-layout>
    @isset($pasien->id)
    <x-slot name="title">Edit Pasien</x-slot>
    @else
    <x-slot name="title">Tambah Pasien</x-slot>
    @endisset

    <x-slot name="card_title">Form Pasien</x-slot>
    <form method="post" action="{{route('pasien.store')}}">
        @csrf
        <div class="mb-3">
            <label for="kode" class="form-label">Kode</label>
            <input type="text" class="form-control" id="kode" name="kode" 
            value="{{$pasien->kode}}" required>
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" 
            value="{{$pasien->nama}}"  required>
        </div>

        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <input type="radio" name="gender" value="L" @if($pasien->gender=='L') checked @endif> Laki-laki
            <input type="radio" name="gender" value="P" @if($pasien->gender=='P') checked @endif> Perempuan
        </div>

        <div class="mb-3">
            <label for="tmp_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" id="tmp_lahir"
            value="{{$pasien->tmp_lahir}}" name="tmp_lahir" required>
        </div>
        <div class="mb-3">
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
            value="{{$pasien->tgl_lahir}}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="tgl_lahir" name="email"
            value="{{$pasien->email}}">
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat">{{$pasien->alamat}}"</textarea>
        </div>
        <div class="mb-3">
            <label for="kelurahan" class="form-label">Kelurahan</label>
            <select name="kelurahan_id" id="kelurahan" class="form-control" required>
                <option>--pilih--</option>
                @foreach($list_kelurahan as $kelurahan)
                <option value="{{$kelurahan->id}}" 
                       @isset($pasien->kelurahan)  
                          {{ $kelurahan->id == $pasien->kelurahan->id ? 'selected' : ''}}
                       @endisset >
                      {{$kelurahan->nama}}
                </option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
        <input type="hidden" value="{{$pasien->id}}" name="id">
        <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</x-layout>