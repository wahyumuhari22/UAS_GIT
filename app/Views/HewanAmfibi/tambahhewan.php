<div class="modal fade" id="modalhewan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Hewan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?= form_open('HewanAmfibi/simpandata', ['class' => 'formHewanAmfibi']) ?>
            <div class="modal-body">
                <div class="form-group row">
                    <label for="id" class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control is-valid" id="id" name="id" placeholder="Masukan id">
                        <div class="invalid-feedback errorid"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama Hewan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control is-valid" id="nama" name="nama" value="<?= $nama ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="habitat" class="col-sm-2 col-form-label">Habitat</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control is-valid" id="habitat" name="habitat" value="<?= $habitat ?>">
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
                <button type="submit" class="btn btn-primary btnsimpan" id="tombolsimpan">Simpan</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            <?= form_close() ?>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.formHewanAmfibi').on('submit', function(e) {
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
                    $('.btnsimpan').html('Simpan');
                },
                success: function(response) {
                    // Check for validation errors
                    if (response.error) {
                        if (response.error.id) {
                            $('#id').addClass('is-invalid');
                            $('.errorid').html(response.error.id);
                        } else {
                            $('#id').removeClass('is-invalid');
                            $('.errorid').html('');
                        }

                        if (response.error.nama) {
                            $('#nama').addClass('is-invalid');
                            $('.errornama').html(response.error.nama);
                        } else {
                            $('#nama').removeClass('is-invalid');
                            $('.errornama').html('');
                        }

                        if (response.error.habitat) {
                            $('#habitat').addClass('is-invalid');
                            $('.errorhabitat').html(response.error.habitat);
                        } else {
                            $('#habitat').removeClass('is-invalid');
                            $('.errorhabitat').html('');
                        }

                        if (response.error.pola_makan) {
                            $('#pola_makan').addClass('is-invalid');
                            $('.errorpola_makan').html(response.error.pola_makan);
                        } else {
                            $('#pola_makan').removeClass('is-invalid');
                            $('.errorpola_makan').html('');
                        }

                        if (response.error.status) {
                            $('#status').addClass('is-invalid');
                            $('.errorstatus').html(response.error.status);
                        } else {
                            $('#status').removeClass('is-invalid');
                            $('.errorstatus').html('');
                        }
                    } else {
                        // jika tidak ada error, tampilkan swal dan tutup modal
                        swal.fire({
                            icon: "success",
                            title: "Berhasil",
                            text: response.sukses,
                        });
                        $('#modalhewan').modal('hide');
                        // Optionally, you can reload the table or perform other actions
                        datahewan();
                    }
                },
                error: function(xhr, ajaxOptions, thrownError) {
                    alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
                }
            });
        });
    });
</script>