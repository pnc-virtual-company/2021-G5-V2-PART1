<template>
    <section>
        <div class="mb-3 mt-3">
            <input type="text" placeholder="Enter title..." class="form-control" v-model="title"/>
        </div>
        <div class="mb-3 mt-3">
            <select id="category" name="category" class="form-control" v-model="category_id">
                <option value="" disabled selected hidden>Category</option>
                <option value="1">Game</option>
                <option value="2">Meeting</option>
                <option value="3">Comunication</option>
                <option value="4">Education</option>
            </select>
        </div>
        <div class="mb-3 mt-3">
            <input type="file" accept="image/*" class="form-control" @change="handleImageSelected"/>
        </div>
        <div class="dateTime mb-3 mt-3">
            <input type="date" placeholder="Start date..." class="form-control" v-model="start_date"/>
            <input type="time" placeholder="At..." class="form-control" v-model="start_at"/>
        </div>
        <div class="dateTime" mb-3 mt-3>
            <input type="date" placeholder="End date..." class="form-control" v-model="end_date"/>
            <input type="time" placeholder="At..." class="form-control" v-model="end_at"/>
        </div>
        <div class="mb-3 mt-3">
            <input type="text" placeholder="link join..." class="form-control" v-model="link_join"/>
        </div>
        <div class="mb-3 mt-3">
            <select id="country" name="country" class="form-control" v-model="city">
                <option value="" disabled selected hidden>Country</option>
                <option value="cambodia">Cambodia</option>
                <option value="china">China</option>
                <option value="america">America</option>
            </select>
        </div>
        <div class="mb-3 mt-3">
            <input type="text" placeholder="Description..." class="form-control" v-model="body"/>
        </div>
        <div class="modal-footer" >
            <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal" @click.prevent="clearForm">Cancel</button>
            <button type="submit" class="btn btn-outline-primary" data-bs-dismiss="modal" @click.prevent="handleDataInput(action)">Submit</button>
        </div>
    </section>
</template>

<script>
export default {
    props: {action: String, event: Object},
    emits: ["create-form", "edit-form"],
    data() {
        return {
            formInput: null,

            imageFile: null,
            user_id: 1,
            title: "",
            category_id: "",
            start_at: "",
            end_at: "",
            start_date: "",
            end_date: "",
            link_join: "",
            body: "",
            city: "",
        }
    },
    methods: {
        handleImageSelected(event) {
            const image = event.target.files[0];
            let reader = new FileReader();
            reader.onloadend = (e) => {
                this.previewProfile = e.target.result;
            };
            reader.readAsDataURL(image);
            this.imageFile = image;
            // console.log(this.imageFile);
            console.log(event)
        },
        handleDataInput(action){
            let fileUpload = new FormData();
            fileUpload.append("image", this.imageFile);
            fileUpload.append("user_id", this.user_id);
            fileUpload.append("category_id", this.category_id);
            fileUpload.append("title", this.title);
            fileUpload.append("body", this.body);
            fileUpload.append("city", this.city);
            fileUpload.append("link_join", this.link_join);
            fileUpload.append("start_at", this.start_at);
            fileUpload.append("start_date", this.start_at);
            fileUpload.append("end_at", this.end_at);
            fileUpload.append("end_date", this.end_date);
            this.formInput = fileUpload;
            console.log(this.action)
            if ( action === "create"){
                this.$emit('create-form', this.formInput);
                this.clearForm();
            }else if (action === "edit") {
                this.$emit('edit-form', this.formInput);
                this.clearForm()
            } 
        },
        clearForm(){
            this.imageFile = null;

            // this.user_id = 1
            this.title = ""
            this.category_id = null
            this.start_at = ""
            this.end_at = ""
            this.start_date = ""
            this.end_date = ""
            this.link_join = ""
            this.body = ""
            this.city = ""

        },
        getEvent(eventSeleted){
                console.log(eventSeleted)
                // this.title = eventSeleted.title
                // this.category_id = eventSeleted.category_id
                // this.start_at = eventSeleted.start_at
                // this.end_at = eventSeleted.end_at
                // this.start_date = eventSeleted.start_date
                // this.end_date = eventSeleted.end_date
                // this.link_join = eventSeleted.link_join
                // this.body = eventSeleted.body
                // this.city = eventSeleted.city
                // console.log(eventSeleted)
        
      
        },

    },
}
</script>

<style>
    .dateTime {
    display: flex;
    }
</style>