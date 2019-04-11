<?php $__env->startSection('content'); ?>
        <div class="header pb-6">
          <div class="container-fluid" style="margin-top: 2%;">
          </div>
        </div>
        <div class="container-fluid mt--6">
              <div class="row">
                <div class="col">
                  <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                      <h3 class="mb-0">Order Status</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive" data-toggle="list" >
                      <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col" class="sort">No </th>
                            <th scope="col" class="sort">OrderID : Tanggal</th>
                            <th scope="col" class="sort">Nama Pelanggan</th>
                            <th scope="col" class="sort">Total</th>
                            <th scope="col" class="sort">Status</th>
                            <th scope="col" class="sort">Action</th>
                          </tr>
                        </thead>
                        <tbody class="list">
                          <?php
                            $no = 1;
                          ?>
                        <?php $__currentLoopData = $dataPenjualans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataPenjualan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                            <th scope="row">
                              <?php echo $no; ?>
                            </th>
                            <td class="budget">
                             <?php echo e($dataPenjualan->id); ?> : <?php echo e($dataPenjualan->tanggal); ?>

                            </td>
                            <td class="budget">
                             <?php echo e($dataPenjualan->nama_pembeli); ?>

                            </td>
                            <td class="budget">
                             <?php echo e($dataPenjualan->total); ?>

                            </td>
                            <td class="budget" style="text-align: center;">
                             <?php if($dataPenjualan->status == "PENDING"): ?>
                              <span class="text-red "> PENDING </span>
                             <?php elseif($dataPenjualan->status == "PAID"): ?>
                             <span class="text-orange "> PAID </span>
                             <?php elseif($dataPenjualan->status == "DELIVERY"): ?>
                             <span class="text-pink "> DELIVERY </span>
                             <?php elseif($dataPenjualan->status == "SUKSES"): ?>
                             <span class="text-green "> SUKSES </span>
                             <?php endif; ?>
                            </td>
                            <td>
                           <button class="btn btn-info btn-sm" onclick="window.location.href='detailPenjualan/<?php echo e($dataPenjualan->id); ?>'">Detail Info</button>
                            </td>

                          </tr>
                          <?php
                            $no++;
                          ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /var/www/html/nutrisio.rm-rf.studio/resources/views/contentMember/orderStatus.blade.php */ ?>