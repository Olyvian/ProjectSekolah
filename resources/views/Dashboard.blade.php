<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script src="https://kit.fontawesome.com/399218ad26.js" crossorigin="anonymous"></script>
    @viteReactRefresh
    @vite('resources/js/app.jsx')
    <title>Dashboard | GetVoucher</title>
</head>
<body>
    <div id="root" >
    </div>
    <div class="container mt-3">
    <h2>Data Voucher</h2>
    <a class="btn btn-primary mb-2" href="/insertvoucher" type="button">Tambah Data +</a>
    <table class="table table-borderless datatable display" id="myTable">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Gambar Voucher</th>
                <th scope="col">Nama Voucher</th>
                <th scope="col">Kode</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Testing</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td><button class="btn btn-success btn-lg me-1"><i class="bi bi-pencil-square"></i></button><button class="btn btn-danger btn-lg"><i class="bi bi-trash3"></i></button></td>
            </tr>
        </tbody>
    </table>

</div>
</body>
<script>
    let table = new DataTable('#myTable', {

});
</script>
</html>
