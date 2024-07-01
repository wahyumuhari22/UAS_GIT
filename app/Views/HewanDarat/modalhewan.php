<div class="modal fade" id="modalhewan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Hewan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('HewanDarat/updatedata', ['class' => 'formhewandarat']) ?>
            <?= csrf_field(); ?>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="nim" class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-10">
                        <input type="hidden" class="form-control" id="id_hewan" name="id_hewan" value="<?= $id_hewan ?>" readonly>
                        <input type="text" class="form-control" id="id" name="id" value="<?= $id ?>" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Hewan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $nama ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="habitat" class="col-sm-2 col-form-label">Habitat</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="habitat" name="habitat" value="<?= $habitat ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pola_makan" class="col-sm-2 col-form-label">Pola Makan</label>
                    <div class="col-sm-10">
                        <select name="pola_makan" id="pola_makan" class="form-control is-valid">
                            <option value="">------Silahkan Pilih------</option>
                            <option value="Karnivora" <?php if ($pola_makan == 'Karnivora') echo "selected"; ?>>Karnivora</option>
                            <option value="Herbivora" <?php if ($pola_makan == 'Herbivora') echo "selected"; ?>>Herbivora</option>
                            <option value="Omnivora" <?php if ($pola_makan == 'Omnivora') echo "selected"; ?>>Omnivora</option>
                        </select>
                        <div class="invalid-feedback errorpola_makan"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="status" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select name="status" id="status" class="form-control is-valid">
                            <option value="">------Silahkan Pilih------</option>
                            <option value="Dilindungi" <?php if ($status == 'Dilindungi') echo "selected"; ?>>Dilindungi</option>
                            <option value="Terancam" <?php if ($status == 'Terancam') echo "selected"; ?>>Terancam</option>
                            <option value="Punah" <?php if ($status == 'Punah') echo "selected"; ?>>Punah</option>
                            <option value="Aman" <?php if ($status == 'Aman') echo "selected"; ?>>Aman</option>

                        </select>
                        <div class="invalid-feedback errorstatus"></div>
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
        $('.formhewandarat').on('submit', function(e) {
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
                    $('#modalhewan').modal('hide');
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