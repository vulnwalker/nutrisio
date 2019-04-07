<?php /* /var/www/html/nutrisio.rm-rf.studio/resources/views/contentMember/detailPenjualan.blade.php */ ?>
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
                      <h3 class="mb-0">Order Status <?php echo e($atasNama); ?></h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive" data-toggle="list">
                      <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col" class="sort">No </th>
                            <th scope="col" class="sort">OrderID : Tanggal</th>
                            <th scope="col" class="sort">Nama Produk</th>
                            <th scope="col" class="sort">Nama Pelanggan</th>
                            <th scope="col" class="sort">Jumlah</th>
                            <th scope="col" class="sort">Harga</th>
                            <th scope="col" class="sort">Total</th>
                            <!-- <th scope="col" class="sort">Status</th> -->
                          </tr>
                        </thead>
                        <tbody class="list">
                          <?php
                            $no = 1;
                          ?>
                        <?php $__currentLoopData = $dataPenjualans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detailPenjualan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                            <th scope="row">
                              <?php echo $no; ?>
                            </th>
                            <td class="budget">
                             <?php echo e($detailPenjualan->id); ?> : <?php echo e($detailPenjualan->tanggal); ?>

                            </td>
                            <td class="budget">
                             <?php echo e($detailPenjualan->nama_produk); ?>

                            </td>
                            <td class="budget">
                             <?php echo e($detailPenjualan->nama_pembeli); ?>

                            </td>
                            <td class="budget">
                             <?php echo e($detailPenjualan->jumlah); ?>

                            </td>
                            <td class="budget">
                             <?php echo e(number_format( $detailPenjualan->harga,0," ",".")); ?>

                            </td>
                            <td class="budget">
                             <?php echo e(number_format( $detailPenjualan->jumlah * $detailPenjualan->harga,0," ",".")); ?>  
                            </td>
<!--                             <td class="budget" style="text-align: center;">
                             <?php if($detailPenjualan->status == "PENDING"): ?>
                              <span class="text-red "> PENDING </span>
                             <?php elseif($detailPenjualan->status == "SUKSES"): ?>
                             <span class="text-green "> SUKSES </span>
                             <?php endif; ?>
                            </td> -->

                          </tr>
                          <?php
                            $no++;
                          ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                        <tfoot>
                          <tr>
                            <td colspan="6" style="text-align: right;">SUBTOTAL :</td>
                            <td> <?php echo e(number_format( $getTotal,0," ",".")); ?></td>
                          </tr>
                          <tr>
                            <td colspan="6" style="text-align: right;">ONGKIR :</td>
                            <td> <?php echo e(number_format( $getOngkir[0]->ongkir,0," ",".")); ?></td>
                          </tr>
                          <tr>
                            <td colspan="6" style="text-align: right;"> <b> TOTAL :</b></td>
                            <td> <b> <?php echo e(number_format( $getTotal +  $getOngkir[0]->ongkir,0," ",".")); ?></b> </td>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>