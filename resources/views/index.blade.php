@extends('layouts.container')

@section('body')
<section class="intro">
    <div class="bg-image h-100" style="background-image: url('https://mdbootstrap.com/img/Photos/new-templates/tables/img2.jpg');">
      <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0,0,0,.25);">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="card bg-dark shadow-2-strong">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-dark table-borderless mb-0">
                      <thead>
                        <tr>
                          <th scope="col">NO</th>
                          <th scope="col">Nama Pemain</th>
                          <th scope="col">Nomor Punggung</th>
                          <th scope="col">Posisi</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($pemain as $item)
                        <tr>
                          <th>{{ $item -> id }}</th>
                          <td>{{ $item -> nama_pemain }}</td>
                          <td>{{ $item -> no_punggung }}</td>
                          <td>{{ $item -> posisi }}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection