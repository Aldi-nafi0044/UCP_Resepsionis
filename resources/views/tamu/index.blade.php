<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap
/4.1.3/css/bootstrap.min.css" integrity="sha384-
MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="an
onymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
        @endif
        <div class="row">
            <div class="col-6">
                <h1>Data Tamu</h1>
            </div>
            <div class="col-6">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal"
                    data-target="#exampleModal">
                    Tambah Data
                </button>
            </div>
            <table class="table table-hover">
                <tr>
                    <th>NAMA</th>
                    <th>NIK</th>
                    <th>ALAMAT</th>
                    <th>UMUR</th>
                    <th>JENIS KELAMIN</th>
                    <th>STATUS</th>
                    <th>WAKTU</th>
                    <th>AKSI</th>
                </tr>
                @foreach($data_tamu as $tamu)
                <tr>
                    <td>{{$tamu->nama}}</td>
                    <td>{{$tamu->nik}}</td>
                    <td>{{$tamu->alamat}}</td>
                    <td>{{$tamu->umur}}</td>
                    <td>{{$tamu->jenis_kelamin}}</td>
                    <td>{{$tamu->status}}</td>
                    <td>{{$tamu->waktu}}</td>
                    <td><a href="/tamu/{{$tamu->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <td>
                    <td><a href="/tamu/delete/{{$tamu->id}}" class="btn btn-danger btn-sm"
                            onclick="return confirm('yakin mau menghapusnya')">Delete</a>
                    <td>

                </tr>
                @endforeach
            </table>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="/tamu/create" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input name="nama" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="EmailHelp" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">NIK</label>
                            <input name="nik" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="EmailHelp" placeholder="NIK">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1"
                                rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">UMUR</label>
                            <input name="umur" type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="EmailHelp" placeholder="umur">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">JENIS KELAMIN</label>
                            <div class="form-check">
                                <input name="jenis_kelamin" class="form-check-input" type="radio" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Laki-Laki
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="jenis_kelamin" class="form-check-input" type="radio" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Perempuan
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="jenis_kelamin" class="form-check-input" type="radio"id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Aneh
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Status</label>
                            <div class="form-check">
                                <input name="status" class="form-check-input" type="radio" id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                Check In
                                </label>
                            </div>
                            <div class="form-check">
                                <input name="status" class="form-check-input" type="radio"id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                Check out
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">WAKTU</label>
                            <input name="waktu" type="time" class="form-control timepicker" id="exampleInputEmail1"
                                aria-describedby="EmailHelp" placeholder="waktu">
                        </div>
                </div>

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-
q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="an
onymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.m
in.js" integrity="sha384-
ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="an
onymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.
js" integrity="sha384-
ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="an
onymous"></script>
</body>

</html>