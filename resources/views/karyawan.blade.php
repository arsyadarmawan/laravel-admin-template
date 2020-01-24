{{-- @extends('layouts.global') --}}
{{-- @extends('layouts.head') --}}
{{-- @section('title')
    DASHBOARD
@endsection --}}
{{-- @section('content') --}}
    <div class="main-content">
        <section class="section">
        <div class="section-header">
                    <div class="col-md-12">
                {{-- <div class="row mb-3"></div> --}}
                <br>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="text-center" scope="col"><b>NIK</b></th>
                        <th class="text-center" scope="col"><b>Nama</b></th>
                        <th class="text-center" scope="col"><b>Golongan</b></th>
                        <th class="text-center" scope="col"><b>Jabatan</b></th>
                        <th class="text-center" scope="col"><b>Gaji</b></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{$item->nik}}</td>  
                            <td>{{$item->nama}}</td>
                            <td>{{$item->golongan}}</td>
                            <td>{{$item->jabatan}}</td>
                            <td>{{$item->gaji}}</td>          
                        </tr>                      
                    @endforeach

                </tbody>
            </table>
        </div>
        </div>

        <div class="section-body">
        </div>
        </section>
    </div>
{{-- @endsection --}}
{{--  --}}