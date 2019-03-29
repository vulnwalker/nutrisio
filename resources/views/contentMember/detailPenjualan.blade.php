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
                      <h3 class="mb-0">Order Status {{ $atasNama }}</h3>
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
                            <th scope="col" class="sort">Status</th>
                          </tr>
                        </thead>
                        <tbody class="list">
                          <?php
                            $no = 1;
                          ?>
                        @foreach($dataPenjualans as $detailPenjualan)
                          <tr>
                            <th scope="row">
                              <?php echo $no; ?>
                            </th>
                            <td class="budget">
                             {{ $detailPenjualan->id }} : {{ $detailPenjualan->tanggal  }}
                            </td>
                            <td class="budget">
                             {{ $detailPenjualan->nama_produk }}
                            </td>
                            <td class="budget">
                             {{ $detailPenjualan->nama_pembeli }}
                            </td>
                            <td class="budget">
                             {{ $detailPenjualan->jumlah }}
                            </td>
                            <td class="budget">
                             {{ $detailPenjualan->harga }}
                            </td>
                            <td class="budget">
                             {{ $detailPenjualan->total }}
                            </td>
                            <td class="budget" style="text-align: center;">
                             @if($detailPenjualan->status == "PENDING")
                              <span class="text-red "> PENDING </span>
                             @elseif($detailPenjualan->status == "SUKSES")
                             <span class="text-green "> SUKSES </span>
                             @endif
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
