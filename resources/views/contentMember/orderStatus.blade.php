@extends('layouts.app')

@section('content')
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
                        @foreach($dataPenjualans as $dataPenjualan)
                          <tr>
                            <th scope="row">
                              <?php echo $no; ?>
                            </th>
                            <td class="budget">
                             {{ $dataPenjualan->id }} : {{ $dataPenjualan->tanggal  }}
                            </td>
                            <td class="budget">
                             {{ $dataPenjualan->nama_pembeli }}
                            </td>
                            <td class="budget">
                             {{ $dataPenjualan->total }}
                            </td>
                            <td class="budget" style="text-align: center;">
                             @if($dataPenjualan->status == "PENDING")
                              <span class="text-red "> PENDING </span>
                             @elseif($dataPenjualan->status == "PAID")
                             <span class="text-orange "> PAID </span>
                             @elseif($dataPenjualan->status == "DELIVERY")
                             <span class="text-pink "> DELIVERY </span>
                             @elseif($dataPenjualan->status == "SUKSES")
                             <span class="text-green "> SUKSES </span>
                             @endif
                            </td>
                            <td>
                           <button class="btn btn-info btn-sm" onclick="window.location.href='detailPenjualan/{{ $dataPenjualan->id }}'">Detail Info</button>
                            </td>

                          </tr>
                          <?php
                            $no++;
                          ?>
                        @endforeach

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
        </div>
@endsection
