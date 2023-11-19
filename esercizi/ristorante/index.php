<body>

    <a href="./catalogo.html" class="icon-link">
    </a>


    <div class="contenitore">
        <div class="zona_sinistra">
        
    
            <div class="profile_text">
                
                <h2> <span> antipasti</span></h2>
                <div class="imgBx">
                    <img
                        src="https://pescheria.scelteperte.it/wp-content/uploads/2020/03/calamari-ripieni.jpg">
                </div>
            
    
            </div>
    
            <div class="profile_text">
                
                <h2> <span> primi piatti </span></h2>
                <div class="imgBx">
                    <img
                        src="https://www.danielibassano.it/wp-content/uploads/2020/05/tonnarelli-alla-gricia.jpg">
                </div>

                <br>
                <div class="imgBx">
                    <img
                        src="https://www.dolcesalato.com/wp-content/uploads/sites/5/2017/06/tagliatelle-cover.jpg">
                </div>
           
            </div>
    
            <div class="profile_text">
                <h2> <span> secondi piatti  </span></h2>
                <div class="imgBx">
                    
                    <img
                       src="https://www.danielibassano.it/wp-content/uploads/2022/03/home-tartare.jpg">
               
               
                    </div>
            </div>
    
            <div class="profile_text">
                <div class="imgBx">
                    <img
                        src="https://blog.giallozafferano.it/lareginadelfocolare/wp-content/uploads/2020/10/millefoglie-di-parmigiano-zucca-e-castagne-ev.jpg">
                </div>
            </div>
    
            <div class="profile_text">
                <h2> <span> dolci  </span></h2>
                <div class="imgBx">
                    <img
                        src="https://primochef.it/wp-content/uploads/2019/04/SH_Millefoglie_cioccolato.jpg">
                </div>
                
            </div>
    
    
    
    
            
        </div>
            <div class="zona_destra">

<<<<<<< HEAD
            <h2 class="title2"> Menu del Ristorante </h2>
    
       
            <h2 class="title2"> Menu del Ristorante "Il Paperotto" </h2>
=======
            <h1 class="title2"> Ristorante "Il Paperotto" </h1>
>>>>>>> 1430cc6 (mm)

            <div class="menu">

        <?php
        
        $piatti = array( 
            "ANTIPASTI " => array(
                array("Nome" => "BRUSCHETTA", "Descrizione" => "pane tostato con pomodoro fresco, basilico e condimento a scelta", "Prezzo" => 6.50),
                array("Nome" => "CALAMARO ALLA FRANCESE ", "Descrizione" => "calamaro ripieno di Tonno, Avocado, Noci pecan e Vinaigrette asiatica", "Prezzo" => 13.75),
                array("Nome" => "PATATA AL PAPEROTTO 3.0.", "Descrizione" => "Purè, crema di Asiago, Uovo dorato e Tartufo nero", "Prezzo" => 11.00),

                            ),
            "PRIMI" => array(
                array("Nome" => "GNOCCHETTI ALLA FARINA DI CASTAGNE", "Descrizione" => "gnocchi fatti in casa conditi con  prosciutto di Zocca croccante e rosmarino ", "Prezzo" => 14.00),
                array("Nome" => "TAGLIATELLE AL CONTRARIO", "Descrizione" => "Tagliatelle di grano Saragolla con ragù di lombo al coltello e saba ", "Prezzo" => 13.00),
               array("Nome" => "CRESPELLA IN ORIENTE", "Descrizione" => "crespella con Cavolo nero, Gamberi, Besciamella al Cocco e Shiso", "Prezzo" => 15.00),
                array("Nome" => "CREMA DI TOPINAMBUR", "Descrizione" => "con Lenticchie Beluga al Garam Masala e Olio all’Aneto", "Prezzo" => 13.00),
            ),

            "SECONDI" => array(
                array("Nome" => "IMPRIGIONATA ALLA PETROLIANA", "Descrizione" => "cotoletta ripiena con prosciutto di Zocca e Parmigiano Reggiano", "Prezzo" => 15.50),
                array("Nome" => "waffle salato alla zucca", "Descrizione" => "Radicchio brasato, Cavolo romanesco e Chutney di Lampone e Cardamomo", "Prezzo" => 18.00),
                array("Nome" => "MOUSSELINE DI POLLO", "Descrizione" => "con Millefoglie di Zucca e Castagne al Balsamico", "Prezzo" => 20.00),
                array("Nome" => "TAGLIATA DI MANZO", "Descrizione" => "con Patate e Verdure al Forno", "Prezzo" => 21.00),
                array("Nome" => "3P BURGER", "Descrizione" => "con Kale, Cheddar, Cipolla rossa (a parte), Bacon, Chips e salse homemade", "Prezzo" => 17.00),
                array("Nome" => "CAESAR SALAD", "Descrizione" => "con bocconcini di Pollo, Bacon, Uova strapazzate, Formaggio, crostini e dressing a parte", "Prezzo" => 12.00),
            ),


            "DOLCI" => array(
                array("Nome" => "MILLEFOGLIE ALLA BOSCAIOLA", "Descrizione" => "Millefoglie al cacao, crema di ricotta e frutta di stagione", "Prezzo" => 7.00),
                array("Nome" => "BISCOTTI AL PAPEROTTO", "Descrizione" => "Biscotti di grani antichi e cagnina romagnola", "Prezzo" => 3.00),
                array("Nome" => "TORTA SABBIOSA", "Descrizione" => "con Crema al mascarpone e agrumi", "Prezzo" => 4.00),
                array("Nome" => "BIGNÈ CRAQUELIN ALLA BANANA", "Descrizione" => "con Caramello salato e Arachidi", "Prezzo" => 7.50),


            )
        );
        foreach ($piatti as $categoria => $piatti_categoria) {
            echo "<div class='section'>";
            echo "<h3>$categoria</h3>";
            foreach ($piatti_categoria as $piatto) {
                echo "<div class='dish'>";
                echo "<strong>{$piatto['Nome']}</strong> - {$piatto['Descrizione']} - Prezzo: {$piatto['Prezzo']}€";
                echo "</div>";
            }
            echo "</div>";
        }
        ?>

    </div>


    </div>

            

            
       
        

            </div>
        </div>
</body>

<style>
    body {
        background-color: rgb(253, 253, 254);
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .contenitore {
        position: relative;
        width: 100%;
        max-width: 1000px;
        min-height: 1000px;
        background-color: rgb(252, 249, 249);
        margin: 50px;
        display: grid;
        grid-template-columns: 1fr 2fr;
        box-shadow: 0 35px 55px rgba(0, 0, 0, 0.1);
    }

    .contenitore .zona_sinistra {
        position: relative;
        background-color:wheat;
        padding: 40px;
        
    }

    .profile_text {
        position: relative;
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-bottom: 20px;
        border-bottom: 1px solid rgba(225, 225, 255, 0.2);
    }

    .profile_text .imgBx
    {
        position: relative;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        overflow: hidden;
    }

    .profile_text .imgBx img 
    {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    .profile_text h2 {
        color: rgb(252, 249, 249);
        font-size: 1.5em;
        margin-top: 20px;
        text-transform: uppercase;
        text-align: center;
        font-weight: 600;
        line-height: 1.4em;
        color: #4d100c;
    }

    .profile_text span
    {
        font-size: 0.8em;
        font-weight: 300;
    }

    

    .title {
        color: #f6f7f7;
        text-transform: uppercase;
        font-weight: 600;
        letter-spacing: 1px;
    }

   

    .contenitore .zona_destra {
        position: relative;
        background: #f6f8f8;
        padding: 40px;
        
    }

   

    .title2 {
        color: #4d100c;
        text-transform: uppercase;
        letter-spacing: 1px;
        margin-bottom: 10px;
    }

    

</style>