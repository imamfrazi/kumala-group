<template>
  <div>
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row mt-2 mb-2">
           <div class="content-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Property</h1>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </div>
        <div class="col-lg-12 col-xs-12">
          <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Add new</h3>
                  <div class="card-tools"><button type="button" class="btn btn-tool" data-widget="collapse"><i
                        class="fa fa-minus"></i></button></div>
                </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form @submit.prevent="editmode ? update() : create()" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Merek</label>
                  <select v-model="form.merek" :class="{ 'is-invalid': form.errors.has('merek') }" name="merek" class="form-control">
                    <option value="primewood">Primewood Mansion</option>
                    <option value="ruko">Ruko</option>
                    <option value="retail">Retail</option>
                  </select>
                  <has-error :form="form" field="merek"></has-error>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Nama</label>
                        <input
                            v-model="form.nama"
                            type="text"
                            name="nama"
                            placeholder="Nama"
                            class="form-control"
                            :class="{ 'is-invalid': form.errors.has('nama') }"
                        >
                        <has-error :form="form" field="nama"></has-error>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Name</label>
                        <input
                            v-model="form.name"
                            type="text"
                            name="name"
                            placeholder="Name"
                            class="form-control"
                            :class="{ 'is-invalid': form.errors.has('name') }"
                        >
                        <has-error :form="form" field="name"></has-error>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Quantity</label>
                        <input
                            v-model="form.quantity"
                            type="number"
                            name="quantity"
                            placeholder="Quantity"
                            class="form-control"
                            :class="{ 'is-invalid': form.errors.has('quantity') }"
                        >
                        <has-error :form="form" field="quantity"></has-error>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label>Price</label>
                        <input
                            v-model="form.price"
                            type="number"
                            name="price"
                            placeholder="Price"
                            class="form-control"
                            :class="{ 'is-invalid': form.errors.has('price') }"
                        >
                        <has-error :form="form" field="price"></has-error>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        <label>Input the image</label>    <br>              
                        <input type="file" @change="upload" name="gambar" id="gambar" class="form-input">
                        <has-error :form="form" field="gambar"></has-error>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <label>Input the image</label>    <br>              
                        <input type="file" @change="upload2" name="gambar2" id="gambar2" class="form-input">
                        <has-error :form="form" field="gambar2"></has-error>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <label>Input the image</label>    <br>              
                        <input type="file" @change="upload3" name="gambar3" id="gambar3" class="form-input">
                        <has-error :form="form" field="gambar3"></has-error>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                  <label>Description in indonesia</label>
                  <textarea v-model="form.deskripsi" :class="{ 'is-invalid': form.errors.has('deskripsi') }" name="deskripsi" class="textarea" placeholder="Place some text here"
                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  <has-error :form="form" field="deskripsi"></has-error>
                </div>
                <div class="form-group">
                  <label>Description in English</label>
                  <textarea v-model="form.desc" :class="{ 'is-invalid': form.errors.has('desc') }" name="desc" class="textarea" placeholder="Place some text here"
                    style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  <has-error :form="form" field="desc"></has-error>
                </div>
                <button v-show="!editmode" type="submit" class="btn btn-primary mt-3">Save</button>
                <button v-show="editmode" type="submit" class="btn btn-success mt-3">Update</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row mt-5">
        <div class="col-lg-12 col-xs-12">
         <div class="card">
                    <div class="card-header">
                        <div class="col-md-4">
                          <div class="form-group">
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option value="primewood">Primewood Mansion</option>
                              <option value="ruko">Ruko</option>
                              <option value="retail">Retail</option>
                            </select>
                          </div>
                        </div>
                      <div class="card-tools"><button type="button" class="btn btn-tool" data-widget="collapse"><i
                            class="fa fa-minus"></i></button></div>
                      <br>

                    </div>
            <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
                      <table class="table table-hover">
                          <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Merek</th>
                            <th>Gambar</th>
                            <th>Deskripsi indonesia</th>
                            <th>English description</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Modify</th>
                          </tr>
                <tr v-for="property in propertys.data" :key="property.id">
                  <td>{{property.id}}</td>
                  <td>{{property.nama}} / {{property.name}}</td>
                  <td>{{property.merek}}</td>
                  <td>
                    <img :src="'img/property/' + property.gambar" width="150px" alt>
                  </td>
                  <td>{{property.deskripsi}}</td>
                  <td>{{property.desc}}</td>
                  <td>{{property.quantity}}</td>
                  <td>{{property.price}}</td>
                  <td>
                    <a @click="deleteproperty(property.id)" class="btn btn-social-icon btn-pinterest">
                       <i class="fa fa-trash red"></i>
                    </a>
                    <a @click="editproperty(property)" class="btn btn-social-icon btn-dropbox">                       
                      <i class="fa fa-edit blue"></i>
                    </a>
                  </td>
                </tr>
              </table>
            </div>
            <div class="card-footer clearfix">
              <pagination align="right" :data="propertys" @pagination-change-page="getResults"></pagination>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>
<script>

export default {
  data() {
    return {
      propertys: {},
      editmode: false,
      form: new Form({
        id: "",
        nama: "",
        name: "",
        merek: "",
        gambar: "",
        gambar2: "",
        gambar3: "",
        deskripsi: "",
        desc: "",
        price: "",
        quantity: ""
      }),
    };
  },
  methods: {
    load() {
      axios.get("api/property").then(({ data }) => (this.propertys = data));
    },
    deleteproperty(id) {
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
            .delete("api/property/" + id)
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
      axios.get("api/property?page=" + page).then(response => {
        this.propertys = response.data;
      });
    },
    editproperty(property) {
      this.form.reset();
      this.form.fill(property);
      this.editmode = true;
    },
    update() {
      this.$Progress.start();
      this.form
        .put("api/property/" + this.form.id)
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
    create() {
      this.$Progress.start();

      this.form
        .post("api/property")
        .then(() => {
          Fire.$emit("AfterCreate");

          toast({
            type: "success",
            title: "Berhasil membuat property baru"
          });
          this.$Progress.finish();
        })
        .catch(e => {
          console.log(e);
          this.$Progress.fail();
        });
    },
    upload(e) {
      let file = e.target.files[0];
      let reader = new FileReader();

      let limit = 1024 * 1024 * 2;
      if (file["size"] > limit) {
        swal({
          type: "error",
          title: "Oops...",
          text: "You are uploading a large file"
        });
        return false;
      }

      reader.onloadend = file => {
        this.form.gambar = reader.result;
      };
      reader.readAsDataURL(file);
    },
    upload2(e) {
      let file = e.target.files[0];
      let reader = new FileReader();

      let limit = 1024 * 1024 * 2;
      if (file["size"] > limit) {
        swal({
          type: "error",
          title: "Oops...",
          text: "You are uploading a large file"
        });
        return false;
      }

      reader.onloadend = file => {
        this.form.gambar2 = reader.result;
      };
      reader.readAsDataURL(file);
    },
    upload3(e) {
      let file = e.target.files[0];
      let reader = new FileReader();

      let limit = 1024 * 1024 * 2;
      if (file["size"] > limit) {
        swal({
          type: "error",
          title: "Oops...",
          text: "You are uploading a large file"
        });
        return false;
      }

      reader.onloadend = file => {
        this.form.gambar3 = reader.result;
      };
      reader.readAsDataURL(file);
    },
  },
  created() {
    Fire.$on('searching',() => {
        let query = this.$parent.search;
        axios.get('api/findproperty?q=' + query)
        .then((data) => {
            this.propertys = data.data
        })
        .catch(() => {

        })
    })
    this.load();
    Fire.$on("AfterCreate", () => {
      this.load();
    });
  }
};
</script>