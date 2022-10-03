<?php
require_once 'Lingkaran.php';
require_once 'PersegiPanjang.php';
require_once 'SegitigaSamaKaki.php';

$lingkaran = new lingkaran(12);
$persegiPanjang = new persegiPanjang(5,3);
$segitiga = new segitiga(3,4);

// $suara_hewan = [$tom, $shaun, $scooby ];

    // echo '<br/>'.$lingkaran->namaBidang();
    // echo '<br/>'.$lingkaran->luasBidang();
    // echo '<br/>'.$lingkaran->kelilingBidang();
    // echo '<br/>'.$persegiPanjang ->namaBidang();
    // echo '<br/>'.$persegiPanjang ->luasBidang();
    // echo '<br/>'.$persegiPanjang ->kelilingBidang();
    // echo '<br/>'.$segitiga ->namaBidang();
    // echo '<br/>'.$segitiga ->luasBidang();
    // echo '<br/>'.$segitiga ->kelilingBidang();

// $namaBidang =[$lingkaran->namaBidang(),$persegiPanjang ->namaBidang(),$segitiga ->namaBidang()] 

    ?>



    <h2 align="center">Kumpulan Bidang Bentuk 2D</h2>
        <table align="center" cellpadding="" width="90%" border="1px" class="table table-bordered">
			<thead>
				<tr bgcolor="tomato">
					<th>No</th>
					<th>Nama Bidang</th>
					<th>Keterangan</th>
                    <th>Luas Bidang</th>
                    <th>Keliling Bidang</th>
                    
				</tr>
		</thead> 
        <tbody>
        
        
                    <tr bgcolor="aqua">
                    <td><?= 1?> </td>
                    <td><?= $lingkaran->namaBidang(); ?> </td>
                    <td>Jari jari = 12 <br> Phi = 3.14</td>
                    <td><?= $lingkaran->luasBidang(); ?> </td>
                    <td><?= $lingkaran->kelilingBidang(); ?> </td>

                    
                </tr> 
                <tr bgcolor="aqua">
                    <td><?= 2; ?> </td>
                    <td><?= $persegiPanjang->namaBidang(); ?> </td>
                    <td>P = 5 <br> L = 3 </td>
                    <td><?= $persegiPanjang->luasBidang(); ?> </td>
                    <td><?= $persegiPanjang->kelilingBidang(); ?> </td>

                    
                </tr>  
                <tr bgcolor="aqua">
                    <td><?= 3; ?> </td>
                    <td><?= $segitiga->namaBidang(); ?> </td>
                    <td>Alas = 3 <br> Tinggi = 4 <br> Sisi Miring = <?= $segitiga->sisiMiring()?></td>
                    <td><?= $segitiga->luasBidang(); ?> </td>
                    <td><?= $segitiga->kelilingBidang(); ?> </td>

                    
                </tr>  

        </tbody>

        </table>


