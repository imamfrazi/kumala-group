<template>
  <div class="container">
    <div class="card mt-5">
      <div class="card-header">
        <h3 class="card-title">Partnership</h3>
        <div class="card-tools">
          <button class="btn btn-info" @click="newModal">
            <i class="fa fa-plus"></i> Tambah Partnership
          </button>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive">
        <table class="table table-bordered">
          <tr>
            <th width="10px;">No</th>
            <th>Gambar</th>
            <th width="50px">Action</th>
          </tr>
          <tr v-for="galeri in galeris.data" :key="galeri.id">
            <td width="10px;">•</td>
            <td>
              <img :src="'img/partner/' + galeri.gambar" width="150px" alt>
            </td>
            <td width="50px;">
              <a @click="editModal(galeri)" class="btn btn-social-icon btn-dropbox">
                <i class="fa fa-edit green"></i>
              </a>
              <a @click="deletegaleri(galeri.id)" class="btn btn-social-icon btn-pinterest">
                <i class="fa fa-times red"></i>
              </a>
            </td>
          </tr>
        </table>
      </div>
      <!-- /.card-body -->
      <div class="card-footer clearfix">
        <pagination align="right" :data="galeris" @pagination-change-page="getResults"></pagination>
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
          <form
            @submit.prevent="editmode ? updategaleri() : creategaleri()"
            enctype="multipart/form-data"
          >
            <div class="modal-body">
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
      galeris: {},
      editmode: false,
      form: new Form({
        id: "",
        gambar: ""
      })
    };
  },
  methods: {
    getResults(page = 1) {
      axios.get("api/partner?page=" + page).then(response => {
        this.galeris = response.data;
      });
    },
    loadgaleri() {
      axios.get("api/partner").then(({ data }) => (this.galeris = data));
    },
    newModal() {
      this.editmode = false;
      this.form.reset();
      $("#addNew").modal("show");
    },
    editModal(galeri) {
      this.editmode = true;
      this.form.reset();
      $("#addNew").modal("show");
      this.form.fill(galeri);
    },
    creategaleri() {
      this.$Progress.start();

      this.form
        .post("api/partner")
        .then(() => {
          Fire.$emit("AfterCreate");
          $("#addNew").modal("hide");

          toast({
            type: "success",
            title: "Berhasil membuat partner baru"
          });
          this.$Progress.finish();
        })
        .catch(e => {
          console.log(e);
          this.$Progress.fail();
        });
    },
    updategaleri() {
      this.$Progress.start();
      this.form
        .put("api/partner/" + this.form.id)
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
    deletegaleri(id) {
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
            .delete("api/partner/" + id)
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
    this.loadgaleri();
    Fire.$on("AfterCreate", () => {
      this.loadgaleri();
    });
  }
};
</script>
