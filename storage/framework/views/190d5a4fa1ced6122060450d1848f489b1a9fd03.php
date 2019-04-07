<?php /* /var/www/html/nutrisio.rm-rf.studio/resources/views/contentMember/landingPage.blade.php */ ?>
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
                      <h3 class="mb-0">LANDING PAGE</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive" data-toggle="list" data-list-values='["name", "budget", "status", "completion"]'>
                      <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Url</th>
                          </tr>
                        </thead>
                        <tbody class="list">
                          <?php
                            $no = 1;
                          ?>
                        <?php $__currentLoopData = $dataArtikels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dataArtikel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr>
                            <th scope="row">
                              <?php echo $no; ?>
                            </th>
                            <td class="budget">
                             <?php echo e($dataArtikel->judul); ?>

                            </td>
                            <td class="budget">
                              <span><?php echo e($urlWeb[0]->isi); ?>artikel/<?php echo e($dataArtikel->id); ?>/?ref=<?php echo e($email); ?></span>
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