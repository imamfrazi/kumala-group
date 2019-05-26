<template>
  <div>
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row mt-5">
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
                  <select v-model="form.type" :class="{ 'is-invalid': form.errors.has('type') }" name="type" class="form-control">
                    <option value="berita">Berita</option>
                    <option value="promo">Promo</option>
                  </select>
                  <has-error :form="form" field="type"></has-error>
                </div>
                <div class="form-group">
                  <label>Judul </label>
                  <input
                    v-model="form.judul"
                    type="text"
                    name="judul"
                    placeholder="Judul"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.has('judul') }"
                  >
                  <has-error :form="form" field="judul"></has-error>
                </div>
                <div class="form-group">
                  <label>Heading</label>
                  <input
                    v-model="form.heading"
                    type="text"
                    name="heading"
                    placeholder="Heading"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.has('heading') }"
                  >
                  <has-error :form="form" field="heading"></has-error>
                </div>
                <div class="form-group">
                  <label>Input the image</label>    <br>              
                  <input type="file" @change="upload" name="gambar" id="gambar" class="form-input">
                  <has-error :form="form" field="gambar"></has-error>
                </div>
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
                            <th>Type</th>
                            <th>Gambar</th>
                            <th>Deskripsi</th>
                            <th>Description</th>
                            <th>Modify</th>
                          </tr>
                <tr v-for="berita in beritas.data" :key="berita.id">
                  <td>•</td>
                  <td>{{berita.judul}} / {{berita.heading}}</td>
                  <td>{{berita.type}}</td>
                  <td>
                    <img :src="'img/berita/' + berita.gambar" width="150px" alt>
                  </td>
                  <td>{{berita.deskripsi}}</td>
                  <td>{{berita.desc}}</td>
                  <td>
                    <a @click="deleteBerita(berita.id)" class="btn btn-social-icon btn-pinterest">
                       <i class="fa fa-trash red"></i>
                    </a>
                    <a @click="editBerita(berita)" class="btn btn-social-icon btn-dropbox">                       
                      <i class="fa fa-edit blue"></i>
                    </a>
                  </td>
                </tr>
              </table>
            </div>
            <div class="card-footer clearfix">
              <pagination align="right" :data="beritas" @pagination-change-page="getResults"></pagination>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>
<script>
import ClassicEditor from "@ckeditor/ckeditor5-build-classic";

export default {
  data() {
    return {
      beritas: {},
      editmode: false,
      form: new Form({
        id: "",
        judul: "",
        gambar: "",
        deskripsi: "",
        desc: "",
        heading: "",
        type: ""
      }),
    };
  },
  methods: {
    load() {
      axios.get("api/berita").then(({ data }) => (this.beritas = data));
    },
    deleteBerita(id) {
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
            .delete("api/berita/" + id)
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
      axios.get("api/berita?page=" + page).then(response => {
        this.beritas = response.data;
      });
    },
    editBerita(berita) {
      this.form.reset();
      this.form.fill(berita);
      this.editmode = true;
    },
    update() {
      this.$Progress.start();
      this.form
        .put("api/berita/" + this.form.id)
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
        .post("api/berita")
        .then(() => {
          Fire.$emit("AfterCreate");

          toast({
            type: "success",
            title: "Berhasil membuat berita baru"
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
    }
  },
  created() {
    Fire.$on('searching',() => {
        let query = this.$parent.search;
        axios.get('api/findberita?q=' + query)
        .then((data) => {
            this.beritas = data.data
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