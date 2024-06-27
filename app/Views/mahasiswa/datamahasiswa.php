<table class="table table-sm table-striped" id="datamahasiswa">
    <thead>
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama Lengkap</th>
            <th>Tempat - Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor = 0;
        foreach ($tampildata as $row) : $nomor++; ?>
            <tr>
                <td><?= $nomor; ?></td>
                <td><?= $row['nim046'] ?></td>
                <td><?= $row['nama046'] ?></td>
                <td><?= $row['tmplahir046'] ?> - <?= $row['tgllahir046'] ?></td>
                <td><?= $row['jenkel046'] ?></td>
                <td>
                    <button type="button" class="btn btn-info btn-sm" onclick="edit
                    ('<?= $row['id_mahasiswa046'] ?>')">
                        <i class="fa fa-tags"></i>
                    </button>|
                    <button type="button" class="btn btn-danger btn-sm" onclick="hapus
                    ('<?= $row['id_mahasiswa046'] ?>')">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<script>
    $(document).ready(function() {
        $('#datamahasiswa').DataTable(); // Initialize DataTable
    });

    function edit(id_mahasiswa046) {
        $.ajax({
            type: "post",
            url: "<?= site_url('mahasiswa/formedit') ?>",
            data: {
                id_mahasiswa046: id_mahasiswa046
            },
            dataType: "json",
            success: function(response) {
                if (response.sukses) {
                    $('.viewmodal').html(response.sukses).show();
                    $('#modaledit').modal('show');
                }
            },
            error: function(xhr, ajaxOption, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
    }

    function hapus(id_mahasiswa046) {
        Swal.fire({
            title:"Hapus ?",
            text: "Yakin mau dihapus ?!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: 'ya',
            cancelButtonText: 'Tidak',
        }).then((result)=>{
            if(result.isConfirmed){
                 $.ajax({
            type: "post",
            url: "<?= site_url('mahasiswa/hapus') ?>",
            data: {
                id_mahasiswa046: id_mahasiswa046
            },
            dataType: "json",
            success: function(response) {
                if (response.sukses) {
                   Swal.fire({
                    icon:"success",
                    title: "Berhasil",
                    text: response.sukses,
                   })
                   datamahasiswa();
                }
            },
            error: function(xhr, ajaxOption, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
    }
        });
    }
</script>