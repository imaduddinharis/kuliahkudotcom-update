<html>
<body>
<table class="table" width="100%" border="1px solid #FFF"  cellpadding="3" cellspacing="0">
            	<tr>
					<th bgcolor="blue">Tanggal <//th>
                	<th bgcolor="blue" >Nim</th>
                    <th bgcolor="blue" >Nilai</th>
					<th bgcolor="blue">keterangan</th>
                </tr>
                <?php
				include('config.php');
				$date=$_GET['tanggal'];
				$sql = mysql_query("SELECT p.tanggal, n.nim,n.score,t.status  FROM tb_pertemuan p, tb_trans_kehadiran t, tb_nilai n where p.tanggal='$date' and p.tanggal = t.tanggal_pertemuan and p.tanggal = n.tanggal ");
				if(mysql_num_rows($sql) > 0){
					$no = 1;
					while($data = mysql_fetch_assoc($sql)){
						echo '
						<tr bgcolor="#fff">
							<td align="center">'.$data['tanggal'].'</td>
							<td align="center">'.$data['nim'].'</td>
							<td align="center">'.$data['score'].'</td>
							<td align="center">'.$data['status'].'</td>
						</tr>
						';
						$no++;
					}
				}else{
					echo '
					<tr bgcolor="#fff">
						<td align="center" colspan="9" align="center">Tidak ada data!</td>
					</tr>
					';
				}
				?>
            </table><br><br><br>
</body>
</html>