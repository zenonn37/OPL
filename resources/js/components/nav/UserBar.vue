<template>
  <div>
    <v-navigation-drawer v-model="drawer" :mini-variant="mini" absolute dark temporary>
      <v-list class="pa-1">
        <v-list-tile v-if="mini" @click.stop="mini = !mini">
          <v-list-tile-action>
            <v-icon>chevron_right</v-icon>
          </v-list-tile-action>
        </v-list-tile>

        <v-list-tile avatar tag="div">
          <v-list-tile-avatar>
            <img src="https://randomuser.me/api/portraits/men/85.jpg">
          </v-list-tile-avatar>

          <v-list-tile-content>
            <v-list-tile-title v-if="name">{{name.name}}</v-list-tile-title>
            <v-list-tile-title v-else>User</v-list-tile-title>
          </v-list-tile-content>

          <v-list-tile-action>
            <v-btn icon @click.stop="mini = !mini">
              <v-icon>chevron_left</v-icon>
            </v-btn>
          </v-list-tile-action>
        </v-list-tile>
      </v-list>

      <v-list class="pt-0" dense>
        <v-divider light></v-divider>

        <v-list-tile v-for="item in items" :key="item.title" :to="item.to" router exact>
          <v-list-tile-action>
            <v-icon>{{ item.icon }}</v-icon>
          </v-list-tile-action>

          <v-list-tile-content>
            <v-list-tile-title>{{ item.title }}</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>

        <v-list-tile>
          <v-list-tile-action>
            <v-icon>exit_to_app</v-icon>
          </v-list-tile-action>

          <v-list-tile-content>
            <v-list-tile-title class="point" @click="onLogout">Sign Out</v-list-tile-title>
          </v-list-tile-content>
        </v-list-tile>
      </v-list>
    </v-navigation-drawer>

    <v-toolbar flat dark color="black">
      <v-toolbar-side-icon @click.stop="drawer = !drawer"></v-toolbar-side-icon>
      <v-toolbar-title v-if="name">
        {{name.profile[0].team}}
        <small
          class="ml-3"
        >{{name.profile[0].wins}} - {{name.profile[0].loses}} - {{name.profile[0].ties}} | {{name.profile[0].points}}</small>
      </v-toolbar-title>
      <v-toolbar-title v-else>My Team</v-toolbar-title>
      <v-spacer></v-spacer>

      <v-toolbar-items class="hidden-sm-and-down">
        <v-btn v-if="name" to="/" flat>
          <v-icon left>account_circle</v-icon>
          {{name.name}}
        </v-btn>
        <v-btn v-if="name" to="/" flat>
          <v-icon left>stars</v-icon>
          {{name.profile[0].rank}}
        </v-btn>
        <v-btn v-else to="/" flat>
          <v-icon>account_circle</v-icon>
        </v-btn>

        <v-btn to="/schedule" flat>
          <v-icon>calendar_today</v-icon>
        </v-btn>
        <v-btn to="/league" flat>
          <v-icon>supervised_user_circle</v-icon>
        </v-btn>
        <v-btn to="/about" flat>
          <v-icon>info</v-icon>
        </v-btn>
        <v-btn to="/contact" flat>
          <v-icon>contact_support</v-icon>
        </v-btn>
        <v-btn @click="onLogout" flat>
          <v-icon>exit_to_app</v-icon>
        </v-btn>

        <v-menu transition="slide-y-transition" bottom>
          <template v-slot:activator="{ on }">
            <v-btn dark icon v-on="on">
              <v-icon>more_vert</v-icon>
            </v-btn>
          </template>

          <v-list>
            <v-list-tile v-for="(link,i) in links" :key="i" :to="link.to" router exact>
              <v-list-tile-action>
                <v-icon>{{ link.icon }}</v-icon>
              </v-list-tile-action>
              <v-list-tile-content>
                <v-list-tile-title>{{link.title}}</v-list-tile-title>
              </v-list-tile-content>
            </v-list-tile>
          </v-list>
        </v-menu>

        <!-- <v-btn to="/login" flat>Login</v-btn>
        <v-btn to="/register" flat>register</v-btn>-->
      </v-toolbar-items>
    </v-toolbar>
  </div>
</template>

<script>
import Drawer from "./Drawer";
export default {
  components: {
    Drawer
  },

  data: () => ({
    drawer: false,
    mini: false,
    right: null,
    links: [
      { title: "Invite Friends", icon: "account_circle", to: "/invite" },
      {
        title: "Current Invite",
        icon: "calendar_today",
        to: "/current_invites"
      },
      {
        title: "League Admin",
        icon: "supervised_user_circle",
        to: "/league_admin"
      }
    ],
    items: [
      { title: "Profile", icon: "account_circle", to: "/" },
      { title: "Schedule", icon: "calendar_today", to: "/schedule" },
      { title: "League", icon: "supervised_user_circle", to: "/league" },
      { title: "About", icon: "info", to: "/about" },
      { title: "Contact", icon: "contact_support", to: "/contact" }
    ]
  }),
  created() {
    this.$store.dispatch("GET_USER");
  },
  computed: {
    name() {
      return this.$store.getters.GET_USER;
    },
    stats() {
      return `${this.name.profile[0].wins}-${this.name.profile[0].loses}-${
        this.name.profile[0].ties
      } | ${this.name.profile[0].points}}`;
    }
  },
  methods: {
    onLogout() {
      this.$store.dispatch("LOGOUT").then(() => {
        this.$router.push("/login");
        localStorage.removeItem("token");
      });
    }
  }
};
</script>

<style>
</style>
