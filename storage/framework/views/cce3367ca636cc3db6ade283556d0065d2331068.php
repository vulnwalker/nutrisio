<?php /* /var/www/html/nutrisio.rm-rf.studio/resources/views/contentMember/profile.blade.php */ ?>


<?php $__env->startSection('content'); ?>
<div class="header pb-6 d-flex align-items-center" style="min-height: 122px; background-image: url(../../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">

      </div>
    </div>

<div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-4 order-xl-2">
          <div class="card card-profile">
            <img src="https://lh3.googleusercontent.com/YMhbUU-qcpvTGYLMMQv5FkBIPPY7qFpa7J9Q5m4klDBAl_LiMqn9RYD3nhQMFQtvRxjGjWb98P6RmtC62fucVw=s0" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="https://png.pngtree.com/element_origin_min_pic/20/04/20/165716f6669e9fd.jpg" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
              </div>
            </div>
            <div class="card-body pt-0" style="margin-top: 10%;">
              
              <div class="text-center">
                <h5 class="h3">
                  <?php echo e(Auth::user()->nama); ?><span class="font-weight-light">, <?php echo e(Auth::user()->status); ?> </span>
                </h5>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i><?php echo e(Auth::user()->alamat); ?> 
                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>No Telp : <?php echo e(Auth::user()->nomor_telepon); ?>  
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i>Email : <?php echo e(Auth::user()->email); ?>   
                </div>
              </div>
            </div>
          </div>
          <!-- Progress track -->
        
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">Edit profile </h3>
                </div>
                <div class="col-4 text-right">
                  <a href="" onclick="event.preventDefault();document.getElementById('Update-form').submit();" class="btn btn-sm btn-success">Save</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form id="Update-form" action="<?php echo e(route('profileUpdate')); ?>" method="POST">
              	 <?php echo e(csrf_field()); ?>

                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Nama</label>
                        <input type="text" id="nama" name="nama" class="form-control"  value="<?php echo e(Auth::user()->nama); ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" class="form-control" value="<?php echo e(Auth::user()->email); ?>" readonly>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Nama Bank</label>
                        <?php if(Auth::user()->nama_bank == ""): ?>
                       		 <input type="text" name="nama_bank" class="form-control" value="">
                        <?php else: ?>
                        	 <input type="text" name="nama_bank" class="form-control" value="<?php echo e(Auth::user()->nama_bank); ?>" readonly>
                        <?php endif; ?>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">No Rekening</label>
                        <?php if(Auth::user()->nomor_rekening == ""): ?>
                       		 <input type="text" name="nomor_rekening" class="form-control" value="">
                        <?php else: ?>
                        	 <input type="text" name="nomor_rekening" class="form-control" value="<?php echo e(Auth::user()->nomor_rekening); ?>" readonly>
                        <?php endif; ?>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">No Telpn</label>
                        <input type="text" name="nomor_telepon" class="form-control" placeholder="First name" value="<?php echo e(Auth::user()->nomor_telepon); ?>">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Alamat</label>
                        <input name="alamat" class="form-control" placeholder="Home Address" value="<?php echo e(Auth::user()->alamat); ?>" type="text">
                      </div>
                    </div>
                  </div>
                </div>
       
              </form>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>