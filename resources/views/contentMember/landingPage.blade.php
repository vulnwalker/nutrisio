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
                      <h3 class="mb-0">LANDING PAGE</h3>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive" data-toggle="list" data-list-values='["name", "budget", "status", "completion"]'>
                      <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col" class="sort" data-sort="name">No</th>
                            <th scope="col" class="sort" data-sort="budget">Judul</th>
                            <th scope="col" class="sort" data-sort="status">Url</th>
                          </tr>
                        </thead>
                        <tbody class="list">
                          <?php
                            $no = 1;
                          ?>
                        @foreach($dataArtikels as $dataArtikel)
                          <tr>
                            <th scope="row">
                              <?php echo $no; ?>
                            </th>
                            <td class="budget">
                             {{ $dataArtikel->judul }}
                            </td>
                            <td class="budget">
                              <span>{{ $urlWeb[0]->isi}}artikel/{{ $dataArtikel->id }}/?ref={{ $email}}</span>
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
