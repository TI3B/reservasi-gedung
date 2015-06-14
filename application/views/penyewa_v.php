

    <!-- Header -->
    <header id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="intro-text">
                        <span class="skills"><strong>DATA PEMESAN</strong></span>
                    </div>
                    <br><br>
                    <div class="tabel">
                    <form action="" method="post" role="form" action="<?php echo base_url(); ?>booking">
                        <table border="0" class="table-responsive">
                            <tr >
                                <td>Kode Penyewa</td>
                                <td>:&nbsp;&nbsp;</td>
                                <td><input class="form-controlx" name="kd_penyewa" type="text" required></td>
                                
                            </tr>
                            <tr >
                                <td>Nama</td>
                                <td>:&nbsp;&nbsp;</td>
                                <td><input class="form-controlx" name="nama_penyewa" type="text" required></td>
                                
                            </tr>
                            <tr>
                                <td >Alamat</td>
                                <td>:&nbsp;&nbsp;</td>
                                <td><input class="form-controlx" name="alamat" type="text" required></td>
                                
                            </tr>
                            <tr>
                                <td >Telepon&nbsp;&nbsp;</td>
                                <td>:&nbsp;&nbsp;</td>
                                <td><input class="form-controlx" name="no_telp" type="text" required></td>
                                
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><br><input type="submit" class="btn btn-primary" name="add" id="submit" value="PROSES"></td>
                            </tr>
                        </table>

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
                    </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>

    