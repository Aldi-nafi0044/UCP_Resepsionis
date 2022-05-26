@extends('layouts.app')
@section('content')
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<body>
    <div class="container">
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
            {{session('sukses')}}
        </div>
        @endif

        <div class="row">
            <form action="/tamu/{{$tamu->id}}/update" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input name="nama" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="EmailHelp" placeholder="Nama Tamu" value="{{$tamu->nama}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">NIK</label>
                    <input name="nik" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="EmailHelp" placeholder="NIK" value="{{$tamu->nik}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"
                        placeholder="Alamat tamu">{{$tamu->alamat}}</textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">UMUR</label>
                    <input name="umur" type="text" class="form-control" id="exampleInputEmail1"
                        aria-describedby="EmailHelp" placeholder="UMUR" value="{{$tamu->umur}}">
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
                                <input name="jenis_kelamin" class="form-check-input" type="radio"id="flexRadioDefault2">
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
                                <input name="status" class="form-check-input" type="radio"id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                Check out
                                </label>
                            </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">WAKTU</label>
                    <input name="waktu" type="time" class="form-control timepicker" id="exampleInputEmail1"
                        aria-describedby="EmailHelp" placeholder="waktu"  value="{{$tamu->waktu}}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-warning">Update</button>
                </div>
            </form>
        </div>
        </form>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>


</body>
@endsection