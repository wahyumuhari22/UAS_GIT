<div class="modal fade" id="modaledit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('Mahasiswa/updatedata', ['class' => 'formmahasiswa']) ?>
            <?= csrf_field(); ?>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                    <div class="col-sm-10">
                        <input type="hidden" class="form-control" id="id_mahasiswa046" name="id_mahasiswa046" value="<?= $id_mahasiswa046 ?>" readonly>
                        <input type="text" class="form-control" id="nim" name="nim" value="<?= $nim046 ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $nama046 ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tmplahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="tmplahir" name="tmplahir" value="<?= $tmplahir046 ?>">
                    </div>
                    <label for="tgllahir" class="col-sm-1 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-4">
                        <input type="date" class="form-control" id="tgllahir" name="tgllahir" value="<?= $tgllahir046 ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="jenkel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <select name="jenkel" id="jenkel" class="form-control">
                            <option value="">------Silahkan Pilih------</option>
                            <option value="Laki - Laki" <?php if ($jenkel046 == 'Laki - Laki') echo "selected" ;?>>Laki-Laki</option>
                            <option value="Perempuan" <?php if ($jenkel046 == 'Perempuan') echo "selected" ;?>>Perempuan</option>
                        </select>
                        <div class="invalid-feedback errorjenkel"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary btnsimpan" id="tombolsimpan">Update</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>

<div class="position-fixed align-items-center" style="position :absolute; top:50%; left: 50%;">
    <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000">
        <div class="toast-header">
            <!-- <img src="..." class="rounded mr-2" alt="..."> -->
            <strong class="mr-auto">Simpan</strong>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Clse">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body">
            Data Berhasil Disimpan
        </div>

    </div>

</div>



<script>
    $(document).ready(function() {
        $('.formmahasiswa').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                type: "post",
                url: $(this).attr('action'),
                data: $(this).serialize(),
                dataType: "json",
                beforeSend: function() {
                    $('.btnsimpan').attr('disabled', 'disabled');
                    $('.btnsimpan').html('<i class="bi bi-arrow-repeat"></i>');
                },
                complete: function() {
                    $('.btnsimpan').removeAttr('disabled');
                    $('.btnsimpan').html('Update');
                },
                success: function(response) {
                    // Check for validation errors

                    // jika tidak ada error, tampilkan swal dan tutup modal
                    swal.fire({
                        icon: "success",
                        title: "Berhasil",
                        text: response.sukses,
                    });
                    $('#modaledit').modal('hide');
                    // Optionally, you can reload the table or perform other actions
                    datamahasiswa();

                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });
            return false;
        });
    });
</script>