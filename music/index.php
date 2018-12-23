<!-- Einfach STRG + P war's bei mir -->

<?php
    function svg ( $name = '404', $color = '#333' ) {
    	$path = 'image/' . $name . '.svg';
    	ob_start();

    	include $path;
    	$content = ob_get_contents();

    	ob_end_clean();
    	$content = str_replace( array( '#333333', '#333', '#000', '#000000' ), $color, $content );

    	return $content;
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Youtube Musik App</title>
        <link rel="stylesheet" href="style/index.min.css">
        <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,700" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script>
            function content () {

            }
            $( document ).ready( function () {
                $( 'body.website footer' ).click( function () {
                    // $( 'body.website footer' ).toggleClass( 'expanded');
                });
                $( 'body.website footer .toggle' ).click( function () {
                    $( this ).toggleClass( 'playing' );
                });
            });
        </script>
    </head>
    <body class="document website">
        <header>
            <div class="container">
                <div class="company">
                    <?=svg( 'logo' )?>
                    <span>Name</span>
                </div>
                <div class="menu">
                    <div class="home">
                        <?=svg( 'home', '#EEE' )?>
                        <span>Startseite</span>
                    </div>
                    <div class="library">
                        <?=svg( 'playlists', '#EEE' )?>
                        <span>Bibliothek</span>
                    </div>
                    <div class="settings">
                        <?=svg( 'settings', '#EEE' )?>
                        <span>Einstellungen</span>
                    </div>
                </div>
                <div class="search">
                    <?=svg( 'search', '#EEE' )?>
                </div>
            </div>
        </header>
        <main class="content--wrapper">

        </main>
        <footer class="song expanded">
            <div class="wrapper">
                <div class="container">
                    <div class="playlist">
                        <span class="playlist">Playlist<span class="process">4</span><span class="sum">172</span></span>
                    </div>
                    <!-- <div class="cover">
                        <img src="https://images.8tracks.com/cover/i/002/724/613/Coldplay___Ghost_Stories_Live_2014-2485.jpg?rect=0,0,512,512&q=98&fm=jpg&fit=max" />
                    </div> -->
                    <img class="cover" src="https://images.8tracks.com/cover/i/002/724/613/Coldplay___Ghost_Stories_Live_2014-2485.jpg?rect=0,0,512,512&q=98&fm=jpg&fit=max" />
                    <div class="wrapper">
                        <div class="track">
                            <span class="title">Titel</span>
                            <span class="interprete">Interpret</span>
                        </div>
                        <div class="operations">
                            <div class="previous">
                                <?=svg( 'previous', '#EEE' )?>
                            </div>
                            <div class="toggle playing">
                                <div class="play">
                                    <?=svg( 'play', '#EEE' )?>
                                </div>
                                <div class="pause">
                                    <?=svg( 'pause', '#EEE' )?>
                                </div>
                            </div>
                            <div class="next">
                                <?=svg( 'previous', '#EEE' )?>
                            </div>
                        </div>
                        <div class="time layout float">
                            <div class="process float--left">
                                <span>3:12</span>
                            </div>
                            <div class="bar float--center">

                            </div>
                            <div class="length float--right">
                                <span>4:28</span>
                            </div>
                        </div>
                        <div class="icons">
                            <div class="random">
                                <?=svg( 'random', '#EEE' )?>
                            </div>
                            <div class="repeat">
                                <?=svg( 'repeat', '#EEE' )?>
                            </div>
                            <div class="favourite">
                                <?=svg( 'favourite', '#EEE' )?>
                            </div>
                            <div class="connect">
                                <?=svg( 'bluetooth', '#EEE' )?>
                            </div>
                            <div class="volume">
                                <?=svg( 'volume', '#EEE' )?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
