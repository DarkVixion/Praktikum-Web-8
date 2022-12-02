<?= $this->extend('Main/Utama'); ?>
<?= $this->section('content'); ?>
<div class="content-header">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0"></h1>
            </div>
        </div>
    </div>
</div>

<?php
    class barang {
        private $no;
        private $img;
        private $Nama;
        private $Merk;
        private $jmlh;
        private $status;

        function __construct($no, $img, $Nama, $Merk, $jmlh, $status){
            $this->no = $no;
            $this->img = $img;
            $this->Nama = $Nama;
            $this->Merk = $Merk;
            $this->jmlh = $jmlh;
            $this->status = $status;
           
        }

        public function getno() {
            return $this->no;
        }
        public function getimg() {
            return $this->img;
        }
        public function getNama() {
            return $this->Nama;
        }
        public function getMerk() {
            return $this->Merk;
        }
        public function getjmlh() {
            return $this->jmlh;
        }
        public function getstatus() {
            return $this->status;
        }
    }
    $arr = array();
    $arr[0] = $barang1 = new Barang("1.","arduino.jpg","Arduino Uno","Arduino","10","1");
    $arr[1] = $barang2 = new Barang("2.","Pc.jpg","Pc Lab","HP","100","1");
    $arr[2] = $barang3 = new Barang("3.","arduino.jpg","Arduino Uno","Arduino","10","0");
    $arr[3] = $barang4 = new Barang("4.","Pc.jpg","Pc Lab","HP","100","0");


?>

<section class="content">
    <div class="container-fluid">
        <section>
            <div class="card">
                <div class="card-header">
                    <h2>
                        Daftar Barang
                    </h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No. </th>
                                <th>Gambar</th>
                                <th>Device Name</th>
                                <th>Merk</th>
                                <th>Jumlah</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($arr as $b) { ?>
                            <tr>
                                <td><?php echo $b->getno(); ?></td>
                                <td><?php echo $b->getimg(); ?></td>
                                <td><?php echo $b->getNama(); ?></td>
                                <td><?php echo $b->getMerk(); ?></td>
                                <td><?php echo $b->getjmlh(); ?></td>
                                <td><?php echo $b->getstatus(); ?></td>
                                <td><a href="#"><button class="btn-primary"> Detail </button></a></td>
                            </tr><?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </section>

    </div>
</section>
<?= $this->endSection(); ?>>