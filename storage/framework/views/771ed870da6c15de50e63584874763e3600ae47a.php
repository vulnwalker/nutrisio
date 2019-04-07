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
                      <h3 class="mb-0">TRAFIC</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive" data-toggle="list" data-list-values='["name", "budget", "status", "completion"]'>
                      <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Uniq ID</th>
                            <th scope="col">Url</th>
                            <th scope="col">Artikel</th>
                          </tr>
                        </thead>
                        <tbody class="list">
                          <?php
                            $no = 1;
                          ?>
                        <?php $__currentLoopData = $dataTrafics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataTrafic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                            <th scope="row">
                              <?php echo $no; ?>
                            </th>
                            <td class="budget">
                             <?php echo e($dataTrafic->unique_id); ?>

                            </td>
                            <td class="budget">
                             <?php echo e($dataTrafic->tanggal); ?>

                            </td>
                            <td class="budget">
                             <?php echo e($dataTrafic->judul); ?>

                            </td>

                          </tr>
                          <?php
                            $no++;
                          ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </tbody>
                      </table>
                      <?php echo e($dataTrafics->links()); ?>

                    </div>
                  </div>
                </div>
              </div>
        </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /var/www/html/nutrisio.rm-rf.studio/resources/views/contentMember/trafic.blade.php */ ?>