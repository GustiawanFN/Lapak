<!DOCTYPE html>
<html>

<head>
  <title>Laporan Bulanan</title>
  <style type="text/css">
    #outtable {
      padding: 20px;
      border: 1px solid #e3e3e3;
      width: 920px;
      border-radius: 5px;
    }

    .short {
      width: 50px;
    }

    .normal {
      width: 150px;
    }

    table {
      border-collapse: collapse;
      font-family: arial;
      color: #5E5B5C;
    }

    thead th {
      text-align: left;
      padding: 10px;
    }

    tbody td {
      border-top: 1px solid #e3e3e3;
      padding: 10px;
    }

    tbody tr:nth-child(even) {
      background: #F6F5FA;
    }

    tbody tr:hover {
      background: #EAE9F5
    }
  </style>
</head>

<body>

  <center>
    <h5>Laporan Bulanan</h5>

  </center>
  <div id="outtable">
    <table>
      <thead>
        <tr>
            <th class="short">No</th>
			<th class="normal">Tanggal</th>
			<th class="normal">Lapak</th>
			<th class="normal">Lokasi Lapak</th>
			<th class="normal">Pedagang</th>
			<th class="normal">Jumlah</th>
        </tr>
      </thead>
      <tbody>

          <?php
			$no = 1;
			foreach ($dataku as $dataku) { ?>

			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $dataku['tanggal']; ?></td>
				<td><?php echo $dataku['kode_lapak']; ?></td>
				<td><?php echo $dataku['lokasi_lapak']; ?></td>
				<td><?php echo $dataku['nama_pedagang']; ?></td>
				<td>
				<?php echo $dataku['jumlah']; ?>
				</td>

			</tr>
			<?php } ?>
      </tbody>
    </table>
  </div>
</body>

</html>
