

    <!-- Header -->
    <header id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="intro-text">
                        <span class="skills"><strong>DATA BOOKING</strong></span>
                    </div>
                    <br><br>
                    <div class="tabel">
                    <form action="" method="post" role="form" action="<?php echo base_url(); ?>booking">
                        <table border="0" class="table-responsive">
                            <tr >
                                <td>Kode Penyewa</td>
                                <td>:&nbsp;&nbsp;</td>
                                <td><textarea class="form-controlx" name="kd_penyewa" type="text" required><?php echo $kd_data_penyewa; ?></textarea></td>
                                <td width="20"></td>
                                <td>Kode Booking&nbsp;&nbsp;</td>
                                <td>:&nbsp;&nbsp;</td>
                                <td><input class="form-controlx" name="kd_booking" type="text" required>
                                    
                                 </td>
                            </tr>
                            <tr >
                                <td>Nama</td>
                                <td>:&nbsp;&nbsp;</td>
                                <td><textarea disabled="true" class="form-controlx" name="nama_penyewa" type="text" required><?php echo $nama_penyewa; ?></textarea></td>
                                <td width="20"></td>
                                <td>Kode Gedung&nbsp;&nbsp;</td>
                                <td>:&nbsp;&nbsp;</td>
                                <td><select name="gedung">
                                    <?php
                                        foreach ($gedung as $row)
                                        {
                                            echo "<option value='$row->kd_gedung'>$row->nama_gedung</option>";
                                        }
                                    ?>
                                    </select></td>
                            </tr>
                            <tr>
                                <td >Alamat</td>
                                <td>:&nbsp;&nbsp;</td>
                                <td><textarea disabled="true" class="form-controlx" name="alamat" type="text" required><?php echo $alamat; ?></textarea></td>
                                <td width="20"></td>
                                <td>Kode Sewa&nbsp;&nbsp;</td>
                                <td>:&nbsp;&nbsp;</td>
                                
                                <td><select name="tipe_sewa">
                                    <?php
                                        foreach ($tipe_sewa as $row)
                                        {
                                            echo "<option value='$row->kd_tipe_sewa'>$row->nama_tipe_sawa</option>";
                                        }
                                    ?>
                                    </select>
                                </td>
                            </tr>
                            
                            <tr>
                                <td >Telepon&nbsp;&nbsp;</td>
                                <td>:&nbsp;&nbsp;</td>
                                <td><textarea disabled="true" class="form-controlx" name="no_telp" type="text" required><?php echo $no_telp; ?></textarea></td>
                                <td width="20"></td>
                                <td>Harga&nbsp;&nbsp;</td>
                                <td>:&nbsp;&nbsp;</td>
                                <td><input class="form-controlx" name="harga" type="text" required></td>
                            </tr>

                            <tr>
                                <td >Tanggal Sewa&nbsp;&nbsp;</td>
                                <td>:&nbsp;&nbsp;</td>
                                <td><input class="form-controlx datepicker" name="tanggal_booking" type="text" required></td>
                                <td width="20"></td>
                                <td >Durasi&nbsp;&nbsp;</td>
                                <td>:&nbsp;&nbsp;</td>
                                <td><input class="form-controlx" name="durasi" type="text" required value="1"></td>
                            </tr>
                            <tr>
                                <td>Tanggal Booking&nbsp;&nbsp;</td>
                                <td>:&nbsp;&nbsp;</td>
                                <td><input class="form-controlx" name="tanggal_sewa" type="text" required value="<?php echo date('Y-m-d H:i:s ', time()+60*60*5); ?>"></td>
                                
                                <td width="20"></td>
                                <td>Jumlah Tamu&nbsp;&nbsp;</td>
                                <td>:&nbsp;&nbsp;</td>
                                <td>
                                    <select name="jumlah_tamu">
                                    <option value="100"> 100 orang</option>
                                    <option value="150"> 150 orang</option>
                                    <option value="200"> 200 orang</option>
                                    <option value="250"> 250 orang</option>
                                    </select>
                                    <!-- <input class="form-controlx" name="jumlah_tamu" type="text" required> -->
                                </td>
                            </tr>
                            <tr>
                                <td >Keterangan&nbsp;&nbsp;</td>
                                <td>:&nbsp;&nbsp;</td>
                                <td><input class="form-controlx" name="keterangan" type="text" required></td>
                                <td width="20"></td>
                                <td>Lunas&nbsp;&nbsp;</td>
                                <td>:&nbsp;&nbsp;</td>
                                <td><select name="lunas">
                                    <option value="0">Belum Lunas</option>
                                    <option value="1">Lunas</option>
                                    </select>
                                    <!-- <input class="form-controlx" name="lunas" type="text" required> --></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td><br><input type="submit" class="btn btn-primary" name="add" id="submit" value="PROSES"></td>
                            </tr>
                            
                        </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>

    <script>
  $(function() {
    $( ".datepicker" ).datepicker(
        {
            dateFormat:'yy-mm-dd'
        });
  });
  </script>