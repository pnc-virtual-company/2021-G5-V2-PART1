<template>
  <section>
    <div class="mb-3 mt-3">
      <input
        type="text"
        placeholder="Enter title..."
        class="form-control"
        v-model="form.title"
      />
    </div>
    <div class="mb-3 mt-3">
      <select
        id="categories"
        name="categories"
        class="form-control"
        v-model="form.categories"
      >
        <option value="" disabled selected hidden>categories...</option>
        <option value="1">Game</option>
        <option value="2">Meeting</option>
        <option value="3">Comunication</option>
        <option value="4">Education</option>
      </select>
    </div>
    <div class="mb-3 mt-3">
      <input
        type="file"
        accept="image/*"
        class="form-control"
        @change="handleImageSelected"
      />
    </div>
    <div class="dateTime mb-3 mt-3">
      <input
        type="date"
        placeholder="Start date..."
        class="form-control"
        v-model="form.start_date"
      />
      <input
        type="time"
        placeholder="At..."
        class="form-control"
        v-model="form.start_at"
      />
    </div>
    <div class="dateTime" mb-3 mt-3>
      <input
        type="date"
        placeholder="End date..."
        class="form-control"
        v-model="form.end_date"
      />
      <input
        type="time"
        placeholder="At..."
        class="form-control"
        v-model="form.end_at"
      />
    </div>
    <div class="mb-3 mt-3">
      <input
        type="text"
        placeholder="link join..."
        class="form-control"
        v-model="form.link_join"
      />
    </div>
    <div class="mb-3 mt-3">
      <select
        id="country"
        name="country"
        class="form-control"
        v-model="form.city"
      >
        <option value="" disabled selected hidden>Country...</option>
        <option value="cambodia">Cambodia</option>
        <option value="china">China</option>
        <option value="america">America</option>
      </select>
    </div>
    <div class="mb-3 mt-3">
      <input
        type="text"
        placeholder="Description..."
        class="form-control"
        v-model="form.body"
      />
    </div>
    <div class="modal-footer">
      <button
        type="button"
        class="btn btn-outline-danger"
        data-bs-dismiss="modal"
        @click.prevent="clearForm"
      >
        Cancel
      </button>
      <button
        type="submit"
        class="btn btn-outline-primary"
        data-bs-dismiss="modal"
        @click.prevent="handleDataInput()"
      >
        Submit
      </button>
      
      
    </div>
  </section>
</template>

<script>
export default {
  props: ["event", "get_cate"],
  emits: ["event-form"],
  data() {
    return {
      name: null,
      email: null,
      form: {
        image: this.event?.image || null,
        user_id: this.event?.user_id || 1,
        title: this.event?.title || "",
        categories: this.event?.categories.name || "",
        start_at: this.event?.start_at || "",
        end_at: this.event?.end_at || "",
        start_date: this.event?.start_date || "",
        end_date: this.event?.end_date || "",
        link_join: this.event?.link_join || "",
        body: this.event?.body || "",
        city: this.event?.city || "",
      },
    };
  },
  methods: {
    handleImageSelected(event) {
      const file = event.target.files[0];
      let reader = new FileReader();
      reader.onloadend = (e) => {
        this.previewProfile = e.target.result;
      };
      reader.readAsDataURL(file);
      this.form.image = file;
      // console.log(this.imageFile);
      console.log(event);
      console.log(this.event);
    },
    handleDataInput() {
      let fileUpload = new FormData();
      fileUpload.append("image", this.form.image);
      fileUpload.append("user_id", this.form.user_id);
      fileUpload.append("categories_id", this.form.categories);
      fileUpload.append("title", this.form.title);
      fileUpload.append("body", this.form.body);
      fileUpload.append("city", this.form.city);
      fileUpload.append("link_join", this.form.link_join);
      fileUpload.append("start_at", this.form.start_at);
      fileUpload.append("start_date", this.form.start_date);
      fileUpload.append("end_at", this.form.end_at);
      fileUpload.append("end_date", this.form.end_date);

      console.log(this.form);
      console.log(fileUpload);
      this.$emit("event-form", fileUpload);
      this.clearForm();
    },
    clearForm() {
      this.imageFile = null;

      // this.user_id = 1
      this.title = "";
      this.categories_id = null;
      this.start_at = "";
      this.end_at = "";
      this.start_date = "";
      this.end_date = "";
      this.link_join = "";
      this.body = "";
      this.city = "";
    },
  },
  mounted() {
    let u = localStorage.getItem("signin");
    this.name = JSON.parse(u);
    this.email = this.name.user.email;
  },
};
</script>

<style>
.dateTime {
  display: flex;
}
</style>