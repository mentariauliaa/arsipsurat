<div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view('templates/sidebar') ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <?php $this->load->view('templates/topbar') ?>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col text-center m-5">
                                <img src="<?= base_url('vendor/') ?>img/lambang.jpg" width="100"><br><small><i>Logo SMPN 4 Tambang</i></small><br><br>
                                <p style="text-align: justify;">Sekolah Menengah Pertama (SMP) Negeri 4 Tambang merupakan salah satu fasilitas dan sarana penunjang pendidikan di kalangan masyarakat, khususnya sekolah berlandaskan Negeri yang sudah terakreditasi A. Dalam penggunaan nya, Sekolah Menengah Pertama (SMP) Negeri 4 Tambang diperuntukkan bagi seluruh masyarakat guna mendapatkan pendidikan yang layak dan bermutu bagi generasi bangsa. Sekolah Menengah Pertama (SMP) Negeri 4 Tambang terletak di wilayah Kotamadya Pekanbaru, sekitar 17 km dari pusat kota Pekanbaru. Dengan menempati lahan seluas 10,031 meter persegi.</p>
                            </div>
                            <div class="col m-5">
                                <center>
                                    <h4>Visi dan Misi</h4>
                                </center>
                                <h3>Visi</h3>
                                <p>Unggul Dalam Pretasi Akademik Dan Non Akademik Yang Berwawasaan Lingkungan</p>
                                <h3>Misi</h3>
                                <ol>
                                    <li>Menciptkan lingkungan belajar yang kondusif sehingga dapat mengembangkan daya kreasi dan inovasi siswa.</li>
                                    <li>Memberikan layanan pendidikan sehingga setiap siswa dapat berkembang secara optimal.</li>
                                    <li>Menyiapkan siswa agar dapat melanjutkan ke Sekolah Menengah Atas favorit.</li>
                                    <li>Menumbuhkan kecintaan terhadap ajaran agama yang dianut dan dapat diwujudkan dalam kehidupan sehari-hari.</li>
                                    <li>Aktif mengikuti kegiatan yang bersifat ekstrakurikuler.</li>
                                    <li>Menciptakan sekolah berbudaya lingkungan.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <?php $this->load->view('templates/copyright') ?>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>