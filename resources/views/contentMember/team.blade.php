@extends('layouts.app')


@section('content')
     <script type="text/javascript">
        $(document).ready(function(){
          $(".dropdown-toggle").dropdown();
        });
     </script>
     
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
                    <div class="table-responsive" >
                      <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                          <tr>
                            <th scope="col">No</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Downline</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                            $no = 1;
                          ?>
                        @foreach($paginatedItems as $dataMembers)
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
                            <td class="budget">
                             {{ $dataMembers['downline']}}
                            </td>

                          </tr>
                          <?php
                            $no++;
                          ?>
                        @endforeach

                        </tbody>
                      </table>
                      {{ $paginatedItems->links() }}
                    </div>
                  </div>
                </div>
              </div>
        </div>
@endsection
