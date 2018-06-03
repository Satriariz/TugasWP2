
 <div class="container">
    <div class="row">
        <div class="col-md-12">
			<div class="table-scrol" style="margin-top:100px">
				<h4 align="center"><b> ~.Mahasiswa.~ </b></h4>
					<div class="table-responsive">
						<table class="table table-bordered table-hover table-striped" style="table-layout: fixed">
							<thead>
							<tr>
									<th>NIM Mahasiswa</th>
									<th>Nama Mahasiswa</th>
									<th>Kelas Mahasiswa</th>
									<th>Alamat mahasiswa</th>
									<th>Status Mahasiswa</th>  
									<th>Hapus Data</th>
								</tr>
							</thead>
								<tr>
							<?php  
					        include("koneksi.php");
					        $view_users_query="select * from mahasiswa where nim";//select query for viewing users.  
					        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.    
					        while($row=mysqli_fetch_array($run))//
						        {  
						            $a=$row[0];
									$b=$row[1];  
						            $c=$row[2];    
						            $d=$row[3];
						            $e=$row[4];    
					        ?>   
						        <tr>  
									<td><?php echo $a;  ?></td> 
						            <td><?php echo $b;  ?></td>  
						            <td><?php echo $c;  ?></td>
						            <td><?php echo $d;  ?></td>  
						            <td><?php echo $e;  ?></td>  
						            <td>
						    	    <a href="rubah.php?edit=<?php echo $a ?>"><button class="btn btn-success btn-sm  ">Sunting</button></a>
						    	    <a href="hapus.php?del=<?php echo $a ?>"><button class="btn btn-danger btn-sm  ">Hapus</button></a>
						    	    </td>
						        </tr>
						        <?php } ?>
						 </table>
					</div>
				</div> 
			</div>
		</div>
	</div>
</div>
