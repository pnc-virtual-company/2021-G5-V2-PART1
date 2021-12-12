  <template>
  <section>
    <section v-if="start === 'welcome'">
      <base-pnc>
        <start-page @action="action"></start-page>
      </base-pnc>
    </section>
    <section v-else-if="start === 'signin'">
      <base-pnc>
        <signin-form @action="action"> </signin-form>
      </base-pnc>
    </section>
    <section v-else-if="start === 'signup'">
      <base-pnc>
        <signup-form @action="action"></signup-form>
      </base-pnc>
    </section>
    <section v-else-if="start === 'myView'">
      <Sidebar @action="action"> </Sidebar>
      <div :style="{ 'margin-left': sidebarWidth }">
        <router-view />
      </div>
    </section>
  </section>
</template>



<script>
import Sidebar from "@/components/sidebar/Sidebar";
import { sidebarWidth } from "@/components/sidebar/state";

export default {
  setup() {
    return { sidebarWidth };
  },
  data() {
    return {
      start: "welcome",
    };
  },
  components: { Sidebar },
  methods: {
    action(act) {
      this.start = act;
    },
  },
  mounted() {
    if (localStorage.getItem("signin") !== null) {
      this.action("myView");
    }
  },
};
</script>

<style>
#app{
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  color: #2c3e50;
  overflow-x: hidden;
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
