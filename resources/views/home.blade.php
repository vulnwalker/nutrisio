@extends('layouts.app')

@section('content')
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
                          <span class="h2 font-weight-bold mb-0 text-white">{{ $memberRekut}}</span>
                          <div class="progress progress-xs mt-3 mb-0">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                          </div>
                        </div>
                      </div>
                      <p class="mt-3 mb-0 text-sm">
                        <a href="#!" class="text-nowrap text-white font-weight-600">See details</a>
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
                          <span class="h2 font-weight-bold mb-0 text-white">{{ number_format( $komisiReferal,0," ",".") }}</span>
                          <div class="progress progress-xs mt-3 mb-0">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                          </div>
                        </div>
                      </div>
                      <p class="mt-3 mb-0 text-sm">
                        <a href="#!" class="text-nowrap text-white font-weight-600">See details</a>
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
                          <span class="h2 font-weight-bold mb-0 text-white">{{ number_format( $komisiTeam,0," ",".") }}</span>
                          <div class="progress progress-xs mt-3 mb-0">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                          </div>
                        </div>
                      </div>
                      <p class="mt-3 mb-0 text-sm">
                        <a href="#!" class="text-nowrap text-white font-weight-600">See details</a>
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
                          <span class="h2 font-weight-bold mb-0 text-white">{{ number_format( $komisiTeam + $komisiReferal,0," ",".") }}</span>
                          <div class="progress progress-xs mt-3 mb-0">
                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                          </div>
                        </div>
                      </div>
                      <p class="mt-3 mb-0 text-sm">
                        <a href="#!" class="text-nowrap text-white font-weight-600">See details</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>

        <div class="container-fluid mt--6">
            <div class="row">
                    <div class="col-md-12">
                      <div class="card">
                        <div class="card-header bg-transparent">
                          <div class="row align-items-center">
                            <div class="col">
                              <h6 class="text-uppercase text-muted ls-1 mb-1">Performance</h6>
                              <h5 class="h3 mb-0">Total orders</h5>
                            </div>
                          </div>
                        </div>
                        <div class="card-body">

                        </div>
                      </div>
                </div>
            </div>
        </div>
@endsection
