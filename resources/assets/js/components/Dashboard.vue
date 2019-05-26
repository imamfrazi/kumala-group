<template>
    <div class="container">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard overview</h1>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-4 col-6">
              <div class="info-box">
                <span class="info-box-icon bg-info elevation-1"><i class="fa fa-users"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Karir</span>
                  <span class="info-box-number">
                    {{karir}}
                  </span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <div class="col-lg-4 col-6">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-shopping-cart"></i></span>

                <div class="info-box-content">
                  <span class="info-box-text">Incoming</span>
                  <span class="info-box-number">{{incoming}}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- ./col -->
            <div class="col-lg-4 col-6">
              <div class="info-box mb-3">
                <span class="info-box-icon bg-success elevation-1">
                  <ion-icon name="help-buoy"></ion-icon>
                </span>

                <div class="info-box-content">
                  <span class="info-box-text">Test Drive</span>
                  <span class="info-box-number">{{drive}}</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
              <!-- Custom tabs (Charts with tabs)-->
              <div class="card">
                <div class="card-header d-flex p-0">
                  <h3 class="card-title p-3">
                    <i class="fa fa-pie-chart mr-1"></i>
                    Sales
                  </h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content p-0">
                    <!-- Morris chart - Sales -->
                    <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                    </div>
                    <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;"></div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            <section class="col-lg-5 connectedSortable">
              <!-- Map card -->
              <div class="card bg-primary-gradient">
                <div class="card-header no-border">
                  <h3 class="card-title">
                    <ion-icon name="eye"></ion-icon>
                    Visitors
                  </h3>
                  <!-- card tools -->
                  <div class="card-tools">
                    <button type="button" class="btn btn-primary btn-sm" data-widget="collapse" data-toggle="tooltip"
                      title="Collapse">
                      <i class="fa fa-minus"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <div class="card-body">
                  <p style="font-size: 100px;">200</p>
                </div>
                <!-- /.card-body-->
              </div>
              <!-- /.card -->
            </section>
            <!-- right col -->
          </div>
          <!-- /.row (main row) -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
</template>

<script>
    export default {
        data() {
            return {
                karir:0,
                incoming:0,
                drive:0
            }
        },
        created() {
            axios.get("api/karirc").then(({data}) => this.karir = data ).catch(e=>console.log(e));
            axios.get("api/comec").then(({data}) => this.incoming = data ).catch(e=>console.log(e));
            axios.get("api/testc").then(({data}) => this.drive = data ).catch(e=>console.log(e));
        }
    }
</script>
