<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
            <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Material+Icons" rel="stylesheet">
           
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/vuetify/dist/vuetify.min.css" rel="stylesheet">

        <!-- Styles -->
      
    </head>
    <body>
            <div id="app">
                    <v-app>
                            <v-content>
                                    <v-toolbar flat dark color="teal darken-2">
                                            <v-toolbar-side-icon></v-toolbar-side-icon>
                                            <v-toolbar-title>OPL</v-toolbar-title>
                                            <v-spacer></v-spacer>
                                            <v-toolbar-items class="hidden-sm-and-down">
                                              <v-btn to="/" flat>Home</v-btn>
                                              <v-btn to="/teams" flat>Teams</v-btn>
                                              <v-btn to="/about" flat>About</v-btn>
                                              <v-btn to="/contact" flat>Contact</v-btn>
                                            </v-toolbar-items>
                                          </v-toolbar>
                              <v-container>
                                  
                                    <router-view></router-view>
                            </v-container>
                            </v-content>
                          </v-app>
                  
                           
                      
                      
            </div>



            <script src="/js/app.js"></script>
           
    </body>
</html>
