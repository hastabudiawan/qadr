<!DOCTYPE html>
<html lang="en">

<head>
  @include('admin.css')
</head>

<body>
  <div class="container-scroller">
    
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    
    <!-- partial -->
    @include('admin.navbar')
    
    <div class="container-fluid page-body-wrapper my-3">
        <div class="container align-middle">
            <form action="">
                <div class="my-5 align-middle">
                    <label for="">Nama Dokter</label>
                    <input type="text" name="name" id="" placeholder="Nama Dokter" style="color:black;">
                </div>
                <div class="my-5 align-middle">
                    <label for="">Spesialis</label>
                    <select name="" id="" style="color:black;">
                        <option value="">Pilih Spesialis</option>
                        <option value="Anak">Anak</option>
                        <option value="Kandungan">Kandungan</option>
                        <option value="Mata">Mata</option>
                        <option value="Syaraf">Syaraf</option>
                        <option value="Bedah Umum">Bedah Umum</option>
                        <option value="THT">THT</option>
                        <option value="Gigi">Gigi</option>
                    </select>
                </div>
                <div class="my-5 align-middle">
                    <label for="">Tentang Dokter</label>
                    <Textarea name="name" id="" placeholder="Tentang Dokter" style="color:black;"></Textarea>                    
                </div>
                <div class="my-5 align-middle">
                    <label for="">Nomor Telepon</label>
                    <input type="text" name="name" id="" placeholder="Nomor Telepon" style="color:black;">
                </div>
                <div class="my-5 align-middle">
                    <label for="">Room No</label>
                    <input type="text" name="name" id="" placeholder="Room No" style="color:black;">
                </div>
                <div class="my-5 align-middle">
                    <label for="">Jadwal Dokter</label>
                    <input type="text" name="name" id="" placeholder="Jadwal Dokter" style="color:black;">
                </div>
                <div class="my-5 align-middle">
                    <label for="">Foto Dokter</label>
                    <input type="file" name="file">
                </div>
                <div class="my-5 align-middle">
                    <input type="submit" value="Simpan" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>
    
  </div>
  
  @include('admin.script')
</body>
</html>