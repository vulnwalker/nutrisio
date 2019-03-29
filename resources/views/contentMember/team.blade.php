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
                      <h3 class="mb-0">MY TEAM</h3>
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
                        @foreach($dataMember as $dataMembers)
                          <tr>
                            <th scope="row">
                              <?php echo $no; ?>
                            </th>
                            <td class="budget">
                             {{ $dataMembers['tanggal_join']}}
                            </td>
                            <td class="budget">
                              {{ $dataMembers['nama']}}
                            </td>
                            <td class="budget">
                              {{ $dataMembers['email']}}
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
