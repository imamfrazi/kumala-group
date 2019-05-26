<template>
  <div class="container">
    <div class="card mt-5">
      <div class="card-header">
        <h3 class="card-title">Slider</h3>
        <div class="card-tools">
          <button class="btn btn-info" @click="newModal">
            <i class="fa fa-plus"></i> Tambah Slider
          </button>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive">
        <table class="table table-bordered">
          <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Gambar</th>
            <th>Action</th>
          </tr>
          <tr v-for="slider in sliders.data" :key="slider.id">
            <td>•</td>
            <td>{{slider.judul}}</td>
            <td>{{slider.deskripsi}}</td>
            <td>
              <img :src="'img/slider/'+slider.gambar" width="150px" alt>
            </td>
            <td>
              <a @click="editModal(slider)" class="btn btn-social-icon btn-dropbox">
                <i class="fa fa-edit green"></i>
              </a>
              <a @click="deleteslider(slider.id)" class="btn btn-social-icon btn-pinterest">
                <i class="fa fa-times red"></i>
              </a>
            </td>
          </tr>
        </table>
      </div>
      <!-- /.card-body -->
      <div class="card-footer clearfix">
        <pagination align="right" :data="sliders" @pagination-change-page="getResults"></pagination>
      </div>
    </div>
    <!-- /.card -->
    <!-- Modal -->
    <div
      class="modal fade"
      id="addNew"
      tabindex="-1"
      role="dialog"
      aria-labelledby="addNewLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" v-show="!editmode" id="addNewLabel">Add New</h5>
            <h5 class="modal-title" v-show="editmode" id="addNewLabel">Update User's Info</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form @submit.prevent="editmode ? updateslider() : createslider()">
            <div class="modal-body">
              <div class="form-group">
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
                <textarea
                  v-model="form.deskripsi"
                  name="deskripsi"
                  id="deskripsi"
                  placeholder="Deskripsi"
                  class="form-control"
                  :class="{ 'is-invalid': form.errors.has('deskripsi') }"
                ></textarea>
                <has-error :form="form" field="deskripsi"></has-error>
              </div>

              <div class="form-group">
                <input type="file" @change="upload" name="gambar" id="gambar" class="form-input">
                <has-error :form="form" field="gambar"></has-error>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <button v-show="editmode" type="submit" class="btn btn-success">Update</button>
              <button v-show="!editmode" type="submit" class="btn btn-primary">Create</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      sliders: {},
      editmode: false,
      form: new Form({
        id: "",
        judul: "",
        gambar: "",
        deskripsi: ""
      })
    };
  },
  methods: {
    getResults(page = 1) {
      axios.get("api/slider?page=" + page).then(response => {
        this.sliders = response.data;
      });
    },
    loadslider() {
      axios.get("api/slider").then(({ data }) => (this.sliders = data));
    },
    newModal() {
      this.editmode = false;
      this.form.reset();
      $("#addNew").modal("show");
    },
    editModal(slider) {
      this.editmode = true;
      this.form.reset();
      $("#addNew").modal("show");
      this.form.fill(slider);
    },
    createslider() {
      this.$Progress.start();

      this.form
        .post("api/slider")
        .then(() => {
          Fire.$emit("AfterCreate");
          $("#addNew").modal("hide");

          toast({
            type: "success",
            title: "Berhasil membuat slider baru"
          });
          this.$Progress.finish();
        })
        .catch(e => {
          console.log(e);
          this.$Progress.fail();
        });
    },
    updateslider() {
      this.$Progress.start();
      this.form
        .put("api/slider/" + this.form.id)
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
    deleteslider(id) {
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
            .delete("api/slider/" + id)
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
    upload(e) {
      let file = e.target.files[0];
      let reader = new FileReader();

      let limit = 1024 * 1024 * 4;
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
    this.loadslider();
    Fire.$on("AfterCreate", () => {
      this.loadslider();
    });
  }
};
</script>
