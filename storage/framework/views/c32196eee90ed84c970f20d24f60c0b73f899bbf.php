<?php /* /var/www/html/nutrisio.rm-rf.studio/resources/views/home.blade.php */ ?>
<?php $__env->startSection('content'); ?>
        <div class="header pb-6">
          <div class="container-fluid" style="margin-top: 2%;">
            <div class="row">
                <div class="col-xl-3 col-md-6">
                  <div class="card bg-gradient-primary border-0">
                    <!-- Card body -->
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <h5 class="card-title text-uppercase text-muted mb-0 text-white">MEMBER REKUT</h5>
                          <span class="h2 font-weight-bold mb-0 text-white"><?php echo e($memberRekut); ?></span>
                          <div class="progress progress-xs mt-3 mb-0">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                          </div>
                        </div>
                      </div>
                      <p class="mt-3 mb-0 text-sm">
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6">
                  <div class="card bg-gradient-info border-0">
                    <!-- Card body -->
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <h5 class="card-title text-uppercase text-muted mb-0 text-white">KOMISI REFERRAL</h5>
                          <span class="h2 font-weight-bold mb-0 text-white"><?php echo e(number_format( $komisiReferal,0," ",".")); ?></span>
                          <div class="progress progress-xs mt-3 mb-0">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                          </div>
                        </div>
                      </div>
                      <p class="mt-3 mb-0 text-sm">
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6">
                  <div class="card bg-gradient-danger border-0">
                    <!-- Card body -->
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <h5 class="card-title text-uppercase text-muted mb-0 text-white"> TEAM SALES KOMISI</h5>
                          <span class="h2 font-weight-bold mb-0 text-white"><?php echo e(number_format( $komisiTeam,0," ",".")); ?></span>
                          <div class="progress progress-xs mt-3 mb-0">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                          </div>
                        </div>
                      </div>
                      <p class="mt-3 mb-0 text-sm">
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-xl-3 col-md-6">
                  <div class="card bg-gradient-default border-0">
                    <!-- Card body -->
                    <div class="card-body">
                      <div class="row">
                        <div class="col">
                          <h5 class="card-title text-uppercase text-muted mb-0 text-white">TOTAL KOMISI</h5>
                          <span class="h2 font-weight-bold mb-0 text-white"><?php echo e(number_format( $komisiTeam + $komisiReferal,0," ",".")); ?></span>
                          <div class="progress progress-xs mt-3 mb-0">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                          </div>
                        </div>
                      </div>
                      <p class="mt-3 mb-0 text-sm">
                       
                      </p>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>

        <div class="container-fluid mt--6">
              <div class="row">
                <div class="col">
                  <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                      <h3 class="mb-0">LEADS</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive" data-toggle="list" data-list-values='["name", "budget", "status", "completion"]'>
                      <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col" class="sort" data-sort="name">No</th>
                            <th scope="col" class="sort" data-sort="budget">Tanggal</th>
                            <th scope="col" class="sort" data-sort="status">Nama</th>
                            <th scope="col">Email</th>
                          </tr>
                        </thead>
                        <tbody class="list">
                          <?php
                            $no = 1;
                          ?>
                        <?php $__currentLoopData = $dataMember; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataMembers): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                            <th scope="row">
                              <?php echo $no; ?>
                            </th>
                            <td class="budget">
                             <?php echo e($dataMembers['tanggal_join']); ?>

                            </td>
                            <td class="budget">
                              <?php echo e($dataMembers['nama']); ?>

                            </td>
                            <td class="budget">
                              <?php echo e($dataMembers['email']); ?>

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