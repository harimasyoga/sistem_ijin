@extends('partial.header')
@section('konten')

    

    <div >
       
        <tr>
            <td>
                <a style="font-size: 30px">Data Customer</a><br><br>
            </td>
        </tr>
    </div>


    <div class="table-responsive col-lg-8">
        <table class="table table-striped table-sm">
          <thead>
            <tr style="background-color: rgb(134, 154, 199); ">
              <th style="width: 10%" scope="col">Id</th>
              <th style="width: 30%" scope="col">Nama</th>
              <th style="width: 20%" scope="col">Izin</th>
              <th style="width: 40%" scope="col">Aksi</th>
            </tr>
          </thead>
          @foreach ($isi_cs as $isi_data)
          <tbody>
            <tr>
              <td>{{ $isi_data->id }}</td>
              <td>{{ $isi_data->user }}</td>
              <td>{{ $isi_data->izin }}</td>
              <td>
                  <a href="" class="text-decoration-none"><i class="bi bi-eye"></i>&nbsp;&nbsp;&nbsp;</a>
                  <a href="" class="text-decoration-none"><i class="bi bi-pencil">&nbsp;&nbsp;&nbsp;</i></a>
                  <a href="" class="text-decoration-none"><i class="bi bi-trash">&nbsp;&nbsp;&nbsp;</i></a>
              </td>
            </tr>
            
          </tbody>
          
    @endforeach
        </table>
      </div>

    

@endsection