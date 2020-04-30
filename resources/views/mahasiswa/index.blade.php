<!DOCTYPE html>
<html>
    <head>
        <title</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
                   <h1>Data Mahasiswa Kampus</h1>
                </div>
                <div class="col-6">
                <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
                     Add Name
                </button>

                
         </div>
                
                <table class="table table-hover">
                <thead class="thead-dark" bgcolor=#DCDCDC>
                    <tr>
                         <th>Nama</th>
                         <th>NPM</th>
                         <th>Jenis Kelamin</th>
                         <th>Umur</th>
                         <th>Jurusan</th>
                         <th>Agama</th>
                         <th>Alamat</th>
                         <th>Aksi</th>
                         <th></th>
                     </tr>
                     @foreach($data_mahasiswa as $mahasiswa)
                     <tr>
                         <td>{{$mahasiswa->nama}}</td>
                         <td>{{$mahasiswa->npm}}</td>
                         <td>{{$mahasiswa->jenis kelamin}}</td>
                         <td>{{$mahasiswa->umur}}</td>
                         <td>{{$mahasiswa->jurusan}}</td>
                         <td>{{$mahasiswa->agama}}</td>
                         <td>{{$mahasiswa->alamat}}</td>
                         <td><a href="/mahasiswa/{{$mahasiswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a></td>
                         <td><a href="/mahasiswa/{{$mahasiswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Di Hapus ?')">Delete</a></td>
                    </tr>
                 @endforeach
                </table>
            </div>
        </div>

        <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Silahkan di input</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form action="{{ action('MahasiswaController@create') }}" method="POST">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
                          </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">NPM</label>
                            <input name="npm" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NPM">
                          </div>

                                <div class="form-group">
                                <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                                <select name="jenis kelamin" class="form-control" id="exampleFormControlSelect1">
                                    <option value="perempuan">Perempuan</option>
                                    <option value="laki-laki">Laki-Laki</option>   
                                </select>
                            </div>

                            <div class="form-group">
                            <label for="exampleInputEmail1">Umur</label>
                            <input name="umur" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Umur">
                          </div>

                          <div class="form-group">
                            <label for="exampleInputEmail1">Jurusan</label>
                            <input name="jurusan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jurusan">
                          </div>

                            <div class="form-group">
                            <label for="exampleInputEmail1">Pilih Agama</label>
                            <select name="agama" class="form-control" id="exampleFormControlSelect1">
                                    <option value="islam">Islam</option>
                                    <option value="nasrani">Nasrani</option>   
                                </select>
                            </div>

                          <div class="form-group">
                             <label for="exampleFormControlTexta">Alamat</label>
                            <textarea name="alamat" class="form-control" id="exampleFormControlTextareal" rows="3"></textarea>
                          </div>



                      
                        
                    </div>
                    
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>