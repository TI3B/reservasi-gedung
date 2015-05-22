

    <!-- Header -->
    <header id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="intro-text">
                        <span class="skills"><strong>DATA TRANSAKSI</strong></span>
                    </div>
                    <br><br>
                    <div class="tabel">
                    <form action="" method="post" role="form" action="<?php echo base_url(); ?>booking">
                        <table border="0" class="table-responsive">
                            

                        </table>

                        <table class="table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Kode Booking</th>
                                <th>Nama Penyewa</th>
                                <th>Nama Gedung</th>
                                <th>Tipe Sewa</th>
                                <th>Tanggal Sewa</th>
                                <th>Tanggal Booking</th>
                                <th>Durasi</th>
                                <th>Jumlah Tamu</th>
                                <th>Keterangan</th>
                                <th>Lunas</th>
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

    