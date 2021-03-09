<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PlusTimeIT EasyForm Examples</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{  asset('css/vendor/plustime-it/laravel-easyforms/example-form.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <v-app>
                <v-main>
                    <v-container class="text-center">                      
                        <v-row>
                            <v-col cols="12" class="title">
                                Laravel EasyForms
                            </v-col>
                            <v-col cols="6" class="mx-auto mb-4">
                                <v-row align="center" id="plustime-link">
                                    <v-col cols="1" class="text-left ml-auto">
                                        <a target="_blank" href="https://plustime.com.au/">
                                            <v-img width="32" height="32" src="https://plustime.com.au/images/brand/PTIT_logo_solo_transparent.webp"></v-img>        
                                        </a>
                                    </v-col>
                                    <v-col cols="2" class="text-left mr-auto font-weight-bold">
                                        <a target="_blank" href="https://plustime.com.au/">
                                            <span class="first">Plus</span><span class="second">Time</span><span class="third">IT</span> 
                                        </a>
                                    </v-col>
                                </v-row>
                            </v-col>
                        </v-row>
                        <v-row>
                            <v-col cols="12" class="pa-0">
                                <v-divider></v-divider>
                            </v-col>
                            <v-col cols="12">
                                <div class="links">
                                    <a href="/easyforms/example/">Home</a>
                                    <a href="/easyforms/example/1">Example 1</a>
                                    <a href="/easyforms/example/2">Example 2</a>
                                </div>
                            </v-col>
                            <v-col cols="12" class="pa-0">
                                <v-divider></v-divider>
                            </v-col>
                        </v-row>                        
                        <v-row>
                            <v-col cols="12" class="pa-0 title">
                                Lorem Ipsum!
                            </v-col>
                            <v-col cols="12" class="pa-0">
                                "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta 
                                sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia 
                                consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui 
                                dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora 
                                incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum 
                                exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem 
                                vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui 
                                dolorem eum fugiat quo voluptas nulla pariatur?"
                            </v-col>
                        </v-row>                        
                    </v-container>
                </v-main>
            </v-app>
        </div>
    </body>
    <script src="{{ asset('js/app.js') }}"></script>
</html>
