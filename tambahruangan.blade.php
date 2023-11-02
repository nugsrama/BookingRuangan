@extends('layout.mainlayout')

@section('title','ruangan')

@section('content')

<div class="container">
    <div row>
        <form method="POST" action="insertruangan">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Kode Ruangan</label>
              <input type="text" name="Kode" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp"> </div>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Lokasi</label>
              <input type="text" name="lokasi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tanggal</label>
              <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text"></div>
           
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Kapasitas</label>
              <input type="number" name="Kapasitas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div>
              <input type="hidden"  name=Id value="0" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>

            <div class="mt-3">
                <button class="btn btn-success" type="submit">Tambah</button>
            </div>

        </form>

        </div> 

</div>

    </div>
</body>
@endsection