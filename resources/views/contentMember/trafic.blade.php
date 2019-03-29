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
                      <h3 class="mb-0">TRAFIC</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive" data-toggle="list" data-list-values='["name", "budget", "status", "completion"]'>
                      <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col" class="sort" data-sort="name">No</th>
                            <th scope="col" class="sort" data-sort="budget">Uniq ID</th>
                            <th scope="col" class="sort" data-sort="status">Url</th>
                            <th scope="col" class="sort" data-sort="status">Artikel</th>
                          </tr>
                        </thead>
                        <tbody class="list">
                          <?php
                            $no = 1;
                          ?>
                        @foreach($dataTrafics as $dataTrafic)
                          <tr>
                            <th scope="row">
                              <?php echo $no; ?>
                            </th>
                            <td class="budget">
                             {{ $dataTrafic->unique_id }}
                            </td>
                            <td class="budget">
                             {{ $dataTrafic->tanggal }}
                            </td>
                            <td class="budget">
                             {{ $dataTrafic->judul }}
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
