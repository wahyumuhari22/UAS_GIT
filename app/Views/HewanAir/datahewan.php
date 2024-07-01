<table class="table table-sm table-striped" id="datahewan">
    <thead>
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama Hewan</th>
            <th>Habitat</th>
            <th>Pola Makan</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor = 0;
        foreach ($tampildata as $row) : $nomor++; ?>
            <tr>
                <td><?= $nomor; ?></td>
                <td><?= $row['id'] ?></td>
                <td><?= $row['nama'] ?></td>
                <td><?= $row['habitat'] ?></td>
                <td><?= $row['pola_makan'] ?></td>
                <td><?= $row['status'] ?></td>
                <td>
                    <button type="button" class="btn btn-info btn-sm" onclick="edit
                    ('<?= $row['id_hewan'] ?>')">
                        <i class="fa fa-tags"></i>
                    </button>|
                    <button type="button" class="btn btn-danger btn-sm" onclick="hapus
                    ('<?= $row['id_hewan'] ?>')">
                        <i class="fa fa-trash"></i>
                    </button>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<script>
    $(document).ready(function() {
        $('#datahewan').DataTable(); // Initialize DataTable
    });

    function edit(id_hewan) {
        $.ajax({
            type: "post",
            url: "<?= site_url('HewanAir/formedit') ?>",
            data: {
                id_hewan: id_hewan
            },
            dataType: "json",
            success: function(response) {
                if (response.sukses) {
                    $('.viewmodal').html(response.sukses).show();
                    $('#modalhewan').modal('show');
                }
            },
            error: function(xhr, ajaxOption, thrownError) {
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
    }

    function hapus(id_hewan) {
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
            url: "<?= site_url('HewanAir/hapus') ?>",
            data: {
                id_hewan: id_hewan
            },
            dataType: "json",
            success: function(response) {
                if (response.sukses) {
                   Swal.fire({
                    icon:"success",
                    title: "Berhasil",
                    text: response.sukses,
                   })
                   datahewan();
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