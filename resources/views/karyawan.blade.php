@extends('layout/karyawan')

@section('content')
    <div class="div ps-5" style="text-transform: uppercase;">
        <h1 class="fw-bold">karyawan</h1><br>
    </div>

    <div class="px-4">
        <a href="#" class="btn btn-primary px-4 myb-1">add</a>
    </div>

    <div class="row">
        <table class="table table-responsive table-hover table-striped text-center">    
        <thead>
                <tr class="judul">
                    <th>id</th>
                    <th>id karyawan</th>
                    <th>nama karyawan</th>
                    <th>alamat</th>
                    <th>no hp</th>
                    <th>tempat lahir</th>
                    <th>tanggal lahir</th>
                    <th>jenis kelamin</th>
                    <th>status</th>
                    <th>jumlah anak</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>p001</td>
                    <td>surdih sumarjing</td>
                    <td>rawa kenyot</td>
                    <td>0891278321908</td>
                    <td>arab</td>
                    <td>1945</td>
                    <td>cewo</td>
                    <td>pengangguran</td>
                    <td>11</td>
                    <td class="action">
                        <a href="#" class="btn btn-info">info</a>
					    <a href="#" class="btn btn-warning">edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection