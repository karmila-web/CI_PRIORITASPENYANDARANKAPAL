
				<!-- Begin Page Content -->
				<div class="container-fluid">

					<!-- Page Heading -->
					<h1 class="h3 mb-2 text-gray-800" align="center">Data Pengguna Sistem</h1><hr>
					<p class="mb-4">
						<a href="<?= base_url() ?>controller_utama/dashboard" class="btn btn-warning btn-sm"><i class="fa fa-home"></i><b> Home</b></a>
						<a href="<?= base_url() ?>controller_utama/v_tambahuser" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> <b>Tambah Data Pengguna</b></a>
					</p>

					<!-- DataTales Example -->
					<div class="card shadow mb-4">
						<div class="card-header py-3">
							<h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
									<thead>
										<tr align="center">
											<th>No</th>
											<th>Nama User</th>
											<th>Status User</th>
											<th>Jabatan</th>
											<th>Username</th>
											<th>Password</th>
											<th>Aksi</th>							
										</tr>
									</thead>
									<tfoot>
										<tr align="center">
											<th>No</th>
											<th>Nama User</th>
											<th>Status User</th>
											<th>Jabatan</th>
											<th>Username</th>
											<th>Password</th>
											<th>Aksi</th>
										</tr>
									</tfoot>
									<tbody>
										<?php 
											$no=1;
											foreach ($user as $usr) :
										?>
										<tr>
											<td><?= $no++; ?></td>
											<td><?= $usr->nama_user ?></td>
											<td><?= $usr->status_user ?></td>
											<td><?= $usr->jabatan ?></td>
											<td><?= $usr->username ?></td>
											<td><?= $usr->password ?></td>
											<td align="center"><a class="btn btn-danger"  href="<?= base_url() ?>controller_utama/hapus_datauser/<?= $usr->id_user?>" role="button"><i class="fa fa-trash"></i></a> || <a class="btn btn-warning" href="<?= base_url() ?>controller_utama/v_edituser/<?= $usr->id_user ?>"><i class="fa fa-edit"></i></a></td>
										</tr> 
										<?php endforeach; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>

				</div>
				<!-- /.container-fluid -->

			</div>
			<!-- End of Main Content -->