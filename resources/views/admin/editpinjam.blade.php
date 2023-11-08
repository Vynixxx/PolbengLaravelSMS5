<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">    
    <title>Edit Data Peminjaman</title>
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="/">Politeknik Negeri Bengkalis | D-IV Keamanan Sistem Informasi</a>
        </div>
    </nav>
    <div class="container">
        <a href="{{ route('admin.pinjam') }}">
            <i class="bi-arrow-left h1"></i>
        </a>
        <div class="container mt-3">
            @if (Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil!</strong> {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @if (Session::get('failed'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Gagal!</strong> {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="card mt-4" style="width: 800px">
                    <div class="card-body">
                        <h5 class="card-title text-center">Update Data Peminjaman</h5>
                        <form action="/postEditPinjam/{{ $data->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mt-4">
                                <label class="text-secondary mb-2">Tanggal Peminjaman</label>
                                <input type="text" class="form-control border border-secondary form-control" name="tanggalPinjam" required value="{{ $data->tanggal_pinjam }}">
                                <span class="text-danger">
                                    @error('tanggalPinjam')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Tanggal Kembali</label>
                                <input type="text" class="form-control border border-secondary form-control" name="tanggalKembali" required value="{{ $data->tanggal_kembali }}">
                                <span class="text-danger">
                                    @error('tanggalKembali')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Kode Buku</label>
                                <input type="text" class="form-control border border-secondary form-control" name="kodeBuku" required value="{{ $data->id_buku }}">
                                <span class="text-danger">
                                    @error('kodeBuku')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Kode User</label>
                                <input type="text" class="form-control border border-secondary form-control" name="idUser" required value="{{ $data->id_user }}">
                                <span class="text-danger">
                                    @error('idUser')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div><br>
                            <div class="form-group mt-1"> <label class="text-secondary">Status Pengembalian</label><br>
                                <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="status" value="Belum Dikembalikan" @if ($data->status == 'Belum Dikembalikan') checked @endif> <label class="form-check-label" for="inlineRadio1">Belum Dikembalikan</label> </div>
                                <div class="form-check form-check-inline"> <input class="form-check-input" type="radio" name="status" value="Sudah Dikembalikan" @if ($data->status == 'Sudah Dikembalikan') checked @endif> <label class="form-check-label" for="inlineRadio2">Sudah Dikembalikan</label> </div>
                            </div><br>
                            <button type="submit" class="btn btn-success mt-5">Update Data Peminjaman</button>
                        </form>
                    </div>
                </div>
            </div>
        </div><br><br><br><br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html