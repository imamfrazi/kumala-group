<template>
  <div>
          <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">REPORT DATA KARIR</h1>
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
          <div class="row">
            <div class="container">
              <div class="row mt-5" v-if="$gate.isAdminOrAuthor()">
                <div class="col-md-12">
                  <div class="card">
                    <div class="card-header">
                      <div class="card-tools">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-tool" data-widget="collapse"><i
                            class="fa fa-minus"></i></button>
                      </div>
                      <br>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover">
                        <tbody>
                          <tr>
                            <th>ID</th>
                            <th>Nama Lengkap</th>
                            <th>E-mail</th>
                            <th>No. Telepon</th>
                            <th>Alamat</th>
                            <th>Foto</th>
                            <th>CV</th>
                            <th>Lamaran</th>
                            <th>Action</th>
                            <th>Delete</th>
                          </tr>


                          <tr v-for="test in tests.data" :key="test.id">
                            <td>{{test.id}}</td>
                            <td>{{test.nama}}</td>
                            <td>
                              {{test.email}}
                            </td>
                            <td>{{test.hp}}</td>
                            <td>{{test.alamat}}</td>
                            <td>{{test.foto}}</td>
                            <td>{{test.cv}}</td>
                            <td>{{test.pelamar}}</td>

                            <td>
                              <label class="switch">
                                <input @change="update(test.id)" type="checkbox">
                                <span class="slider round"></span>
                              </label>
                            </td>
                            <td>
                              <a href="#" @click="deletetest(test.id)">
                                <i class="fa fa-trash red"></i>
                              </a>
                            </td>
                          </tr>
                          
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <pagination :data="tests" @pagination-change-page="getResults"></pagination>
                    </div>
                  </div>
                  <!-- /.card -->

                  <div class="card">
                    <div class="card-header">
                      <h3>Verified Career</h3>
                      <div class="card-tools">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-tool" data-widget="collapse"><i
                            class="fa fa-minus"></i></button>
                      </div>
                      <br>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                      <table class="table table-hover">
                        <tbody>
                          <tr>
                            <th>ID</th>
                            <th>Nama Lengkap</th>
                            <th>E-mail</th>
                            <th>No. Telepon</th>
                            <th>Alamat</th>
                            <th>Foto</th>
                            <th>CV</th>
                            <th>Lamaran</th>
                          </tr>
                          
                          <tr v-for="test in drives.data" :key="test.id">
                            <td>{{test.id}}</td>
                            <td>{{test.nama}}</td>
                            <td>
                              {{test.email}}
                            </td>
                            <td>{{test.hp}}</td>
                            <td>{{test.alamat}}</td>
                            <td>{{test.foto}}</td>
                            <td>{{test.cv}}</td>
                            <td>{{test.pelamar}}</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                      <pagination :data="drives" @pagination-change-page="getResult"></pagination>
                    </div>
                  </div>
                  <!-- /.card -->
                </div>
              </div>

              <div v-if="!$gate.isAdminOrAuthor()">
                <not-found></not-found>
              </div>
            </div><!-- main row -->
          </div>
        </div>
          <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
  </div>
</template>
<script>
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";

export default {
  data() {
    return {
      tests: {},
      drives: {},
      form: new Form({
        id: "",
        verify: ""
      }),
    };
  },
  methods: {
    load() {
      axios.get("api/lamar").then(({ data }) => (this.tests = data));
      axios.get("api/pelamar").then(({ data }) => (this.drives = data));
    },
    deletetest(id) {
      swal({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!"
      }).then(result => {
        // Send request to the server
        if (result.value) {
          this.form
            .delete("api/lamar/" + id)
            .then(() => {
              swal("Deleted!", "Your file has been deleted.", "success");
              Fire.$emit("AfterCreate");
            })
            .catch(() => {
              swal("Failed!", "There was something wronge.", "warning");
            });
        }
      });
    },
    getResults(page = 1) {
      axios.get("api/lamar?page=" + page).then(response => {
        this.tests = response.data;
      });
    },
    getResult(page = 1) {
      axios.get("api/pelamar?page=" + page).then(response => {
        this.drives = response.data;
      });
    },
    update(id) {
      this.$Progress.start();
      this.form
        .put("api/lamar/" + id)
        .then(() => {
          $("#addNew").modal("hide");
          swal("Updated!", "Information has been updated.", "success");
          this.$Progress.finish();
          Fire.$emit("AfterCreate");
        })
        .catch(() => {
          this.$Progress.fail();
        });
    },
  },
  created() {
    this.load();
    Fire.$on("AfterCreate", () => {
      this.load();
    });
  }
};
</script>

<style scope>
.atas {
  margin-top: 100px;
}

.small {
  font-size: 16px;
}

button a {
  text-decoration: none;
  color: white;
}

button a :hover {
  text-decoration: none;
  color: white;
}



/* warna latar */

.latar {
  background-color: #f5f5f5;
}

.bg-teal-darken {
  background-color: #00897b;
}

.bg-teal-darken h3,
p {
  color: white;
}

.bg-dark {
  color: #000000;
}

.bg-dark h3,
p {
  color: white;
}

.bg-org {
  background-color: #f4511e;
}

.bg-org h3,
p {
  color: white;
}

/* login form CSS */
.login-form {
  padding: 16px;
  background-color: white;
}

.login-form img {
  margin-top: -60px;
  padding: 8px;
  background-color: #cb9456;
}

.login-form form {
  margin: 25px;
}

.nav-item .active p {
  color: black;
}

/* Switch toggle */

.switch {
  position: relative;
  display: inline-block;
  width: 40px;
  height: 24px;
}

/* Hide default HTML checkbox */
.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 18px;
  width: 18px;
  left: 2px;
  bottom: 3px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked+.slider {
  background-color: #2196F3;
}

input:focus+.slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked+.slider:before {
  -webkit-transform: translateX(18px);
  -ms-transform: translateX(18px);
  transform: translateX(18px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
