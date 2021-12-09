<script>
import Sidebar from "@/components/sidebar/Sidebar";
import { sidebarWidth } from "@/components/sidebar/state";
export default {
  setup() {
    return { sidebarWidth };
  },
  inject: ['users'],
  data() {
    return {
      signin_form: null,
      signup_form: null,
    };
  },
  components: { Sidebar },
  methods: {
    home_page(status) {
      if (status === 200) {
        this.signin_form = !this.signin_form;
        
      }
    },
    signupForm() {
      this.signin_form = !this.signin_form;
      this.signup_form = !this.signup_form;
    },
    signup(){
      this.signin_form = !this.signin_form;
    }
  },
  mounted() {
    if (window.localStorage.getItem("login") !== null) {
      this.signin_form = !this.signin_form;
    }
  },
};
</script>
  <template>
  <section>
    <div class="sign-from" v-if="signin_form === null">
      <signin-form @user="home_page" @singup="signupForm"></signin-form>
    </div>
    <div class="signup-form" v-else-if="signup_form !== null">
      <signup-form
      @signup_user="signup"
      ></signup-form>
    </div>
    <div class="sidebar" v-else>
      <Sidebar></Sidebar>
      <div :style="{ 'margin-left': sidebarWidth }">
        <router-view @user_signout="signout"></router-view>
      </div>
    </div>
  </section>
</template>
<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
}

#nav {
  padding: 30px;
}

#nav a {
  font-weight: bold;
  color: #2c3e50;
}

#nav a.router-link-exact-active {
  color: #42b983;
}
</style>
