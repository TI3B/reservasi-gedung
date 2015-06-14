

    <!-- Header -->
    <header id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="intro-text">
                        <span class="skills"><strong>UPDATE DATA PENYEWA</strong></span>
                    </div>
                    <br><br>
                    <div class="tabel">
                    <form action="" method="post" role="form" action="<?php echo base_url(); ?>booking">
                        <table border="0" class="table-responsive">
                            <tr >
                                <td>Kode Penyewa</td>
                                <td>:&nbsp;&nbsp;</td>
                                <td><textarea class="form-controlx" name="kd_penyewa" type="text" required><?php echo $kd_data_penyewa; ?></textarea></td>
                                
                            </tr>
                            <tr >
                                <td>Nama</td>
                                <td>:&nbsp;&nbsp;</td>
                                <td><textarea class="form-controlx" name="nama_penyewa" type="text" required><?php echo $nama_penyewa; ?></textarea></td>
                                
                            </tr>
                            <tr>
                                <td >Alamat</td>
                                <td>:&nbsp;&nbsp;</td>
                                <td><textarea class="form-controlx" name="alamat" type="text" required><?php echo $alamat; ?></textarea></td>
                                
                            </tr>
                            <tr>
                                <td >Telepon&nbsp;&nbsp;</td>
                                <td>:&nbsp;&nbsp;</td>
                                <td><textarea class="form-controlx" name="no_telp" type="text" required><?php echo $no_telp; ?></textarea></td>
                                
                            </tr>
                            <tr>
                                <td></td>
                                
                                <td><br><input type="submit" class="btn btn-primary" name="update" id="submit" value="UPDATE"></td>
                                <td><br><input type="submit" class="btn btn-primary" name="delete" id="submit" value="DELETE"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                
                            </tr>
                        </table>
<!-- 
                        <table class="table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kode Penyewa</th>
                                <th>Nama Penyewa</th>
                                <th>Alamat</th>
                                <th>Telepon</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php echo isset($data) ? $data : ''; ?>
                        </tbody>
                    </table> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>

    