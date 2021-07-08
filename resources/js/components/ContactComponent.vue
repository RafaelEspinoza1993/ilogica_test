<template>
  <div class="card-page">
    <h3 class="fw-normal">Get in touch</h3>
    <div class="alert alert-success" role="alert" v-if='alert' @click='alert=false'>
      {{message}}
    </div>
    <form class="mt-3" @submit.prevent="SendMail">
      <div class="form-group">
        <label for="name" class="fw-medium fg-grey">Fullname</label>
        <input required type="text" class="form-control" id="name" />
      </div>

      <div class="form-group">
        <label for="email" class="fw-medium fg-grey">Email</label>
        <input required type="text" name='email' class="form-control" id="email" />
      </div>

      <div class="form-group">
        <label for="phone" class="fw-medium fg-grey">Phone(optional)</label>
        <input required type="number" name='phone' class="form-control" id="phone" />
      </div>

      <div class="form-group">
        <label for="message" class="fw-medium fg-grey">Message</label>
        <textarea rows="6" name='message' class="form-control" id="message"></textarea>
      </div>

      <p>*Your information will never be shared with any third party.</p>

      <div class="form-group mt-4">
        <button type="submit" class="btn btn-primary">Send Message</button>
      </div>
    </form>
  </div>
</template>

<script>
export default {
  data() {
    return {
      alert:false,
      message:''
    };
  },
  methods: {
    SendMail(e) {
      let data = {
        name: e.target.elements.name.value,
        email:e.target.elements.email.value,
        phone:e.target.elements.phone.value,
        message:e.target.elements.message.value,
      }
      axios.post("/send/email", data).then((response) => {
        console.log(response);
        if (response.data.status) {
          this.message = response.data.message;
          this.alert = true
        } else {
          console.log(response.data.message);
        }
      });
    },
  },
};
</script> 

<style>
</style>