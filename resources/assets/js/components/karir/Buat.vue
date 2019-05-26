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
                  <label>Position</label>
                  <input
                    v-model="form.position"
                    type="text"
                    name="position"
                    placeholder="Position"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.has('position') }"
                  >
                  <has-error :form="form" field="position"></has-error>
                </div>
                <div class="form-group">
                  <label>Jumlah</label>
                  <input
                    v-model="form.jumlah"
                    type="text"
                    name="jumlah"
                    placeholder="Jumlah"
                    class="form-control"
                    :class="{ 'is-invalid': form.errors.has('jumlah') }"
                  >
                  <has-error :form="form" field="jumlah"></has-error>
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
                            <th>Position</th>
                            <th>Jumlah</th>
                            <th>Deskripsi</th>
                            <th>Description</th>
                            <th>Modify</th>
                          </tr>
                <tr v-for="karir in karirs.data" :key="karir.id">
                  <td>•</td>
                  <td>{{karir.position}}</td>
                  <td>
                    {{karir.jumlah}}
                  </td>
                  <td>{{karir.deskripsi}}</td>
                  <td>{{karir.desc}}</td>
                  <td>
                    <a @click="deletekarir(karir.id)" class="btn btn-social-icon btn-pinterest">
                       <i class="fa fa-trash red"></i>
                    </a>
                    <a @click="editkarir(karir)" class="btn btn-social-icon btn-dropbox">                       
                      <i class="fa fa-edit blue"></i>
                    </a>
                  </td>
                </tr>
              </table>
            </div>
            <div class="card-footer clearfix">
              <pagination align="right" :data="karirs" @pagination-change-page="getResults"></pagination>
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
      karirs: {},
      editmode: false,
      form: new Form({
        id: "",
        position: "",
        jumlah: "",
        deskripsi: "",
        desc: "",
      }),
    };
  },
  methods: {
    load() {
      axios.get("api/karir").then(({ data }) => (this.karirs = data));
    },
    deletekarir(id) {
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
            .delete("api/karir/" + id)
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
      axios.get("api/karir?page=" + page).then(response => {
        this.karirs = response.data;
      });
    },
    editkarir(karir) {
      this.form.reset();
      this.form.fill(karir);
      this.editmode = true;
    },
    update() {
      this.$Progress.start();
      this.form
        .put("api/karir/" + this.form.id)
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
        .post("api/karir")
        .then(() => {
          Fire.$emit("AfterCreate");

          toast({
            type: "success",
            title: "Berhasil membuat karir baru"
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
    this.load();
    Fire.$on("AfterCreate", () => {
      this.load();
    });
  }
};
</script>