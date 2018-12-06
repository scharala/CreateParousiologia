<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);

include("first.php");

  ?>

<html>
    <head>
        <title>Εφαρμογή Αυτόματης Δημιουργίας Παρουσιολογίων</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href='custom.css' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <center><img src="maindipechan1.png" alt="ΔΙΕΥΘΥΝΣΗ Π.Ε. ΧΑΝΙΩΝ"></center>
        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-lg-offset-2">

                    <center><h2>Εφαρμογή Αυτόματης Δημιουργίας Παρουσιολογίων Αναπληρωτών Εκπαιδευτικών Δ/νσης Π.Ε. Χανίων</h2> </center>

                   <br>

                    <form id="contact-form" method="post" role="form">

                        <div class="messages"></div>

                        <div class="controls">

                          <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_school">Σχολείο *</label>
                                        <input id="form_school" type="text" name="school" class="form-control" placeholder="Παρακαλούμε εισάγετε την ονομασία του Σχολείου *" required="required" data-error="Το Σχολείο απαιτείται." value="<?php echo $_POST['school']; ?>">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_code">Κωδικός Σχολείου *</label>
                                        <input id="form_code" type="text" name="code" class="form-control" placeholder="Παρακαλούμε εισάγετε το Επώνυμό σας *" required="required" data-error="Το Επώνυμο απαιτείται." value="<?php echo $_POST['code']; ?>">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_address">Ταχ. Διεύθυνση Σχολείου *</label>
                                        <input id="form_address" type="" e="text" name="address" class="form-control" placeholder="Παρακαλούμε εισάγετε την ταχ. δ/νση του Σχολείου *" required="required" data-error="Η ταχ. δ/νση του Σχολείου απαιτείται." value="<?php echo $_POST['address']; ?>">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Τηλέφωνο Σχολείου *</label>
                                        <input id="form_phone" type="text" name="phone" class="form-control" placeholder="Παρακαλούμε εισάγετε το τηλέφωνο του Σχολείου *" required="required" data-error="Το τηλέφωνο του Σχολείου απαιτείται." value="<?php echo $_POST['phone']; ?>">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_director">Ονοματεπώνυμο Διευθυντή Σχολείου *</label>
                                        <input id="form_director" type="text" name="director" class="form-control" placeholder="Παρακαλούμε εισάγετε το ονοματεπώνυμο του Διευθυντή" required="required" data-error="Το ονοματεπώνυμο Διευθυντή απαιτείται." value="<?php echo $_POST['director']; ?>">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>                            

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_afm">ΑΦΜ Αναπληρωτή Εκπαιδευτικού *</label>
                                        <input id="form_afm" type="text" name="afm" class="form-control" placeholder="Παρακαλούμε εισάγετε το ΑΦΜ του Αναπληρωτή Εκπαιδευτικού" required="required" data-error="Το ΑΦΜ απαιτείται." value="<?php echo $_POST['afm']; ?>">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <?php echo $result; ?>
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_month">Μήνας Παρουσιολογίου *</label>
                                        <select id="form_month" type="text" name="month" class="form-control" placeholder="Επιλέξτε το μήνα *" required="required" data-error="Ο μήνας απαιτείται." >
                                              <option <?php if ($_POST['month'] == 9 ) echo 'selected' ; ?>>9</option>
                                              <option <?php if ($_POST['month'] == 10 ) echo 'selected' ; ?>>10</option>
                                              <option <?php if ($_POST['month'] == 11) echo 'selected' ; ?>>11</option>
                                              <option <?php if ($_POST['month'] == 12 ) echo 'selected' ; ?>>12</option>
                                              <option <?php if ($_POST['month'] == 1 ) echo 'selected' ; ?>>1</option>
                                              <option <?php if ($_POST['month'] == 2 ) echo 'selected' ; ?>>2</option>
                                              <option <?php if ($_POST['month'] == 3 ) echo 'selected' ; ?>>3</option>
                                              <option <?php if ($_POST['month'] == 4 ) echo 'selected' ; ?>>4</option> 
                                              <option <?php if ($_POST['month'] == 5 ) echo 'selected' ; ?>>5</option>
                                              <option <?php if ($_POST['month'] == 6 ) echo 'selected' ; ?>>6</option>     
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_year">Έτος *</label>
                                        <select id="form_year" type="text" name="year" class="form-control" placeholder="Επιλέξτε το έτος *" required="required" data-error="Το έτος απαιτείται." >
                                              <option <?php if ($_POST['year'] == 2018 ) echo 'selected' ; ?>>2018</option>
                                              <option <?php if ($_POST['year'] == 2019 ) echo 'selected' ; ?>>2019</option>
                                              <option <?php if ($_POST['year'] == 2020 ) echo 'selected' ; ?>>2020</option>
                                              <option <?php if ($_POST['year'] == 2021 ) echo 'selected' ; ?>>2021</option>
                                              <option <?php if ($_POST['year'] == 2022 ) echo 'selected' ; ?>>2022</option>                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                            </div>
                            <hr>
                            <!-- <p id="HelpBlock" class="form-text"> -->
                                <h3> <center>
                              Εισάγετε Το Ωρολόγιο Πρόγραμα Του Εκπαιδευτικού Επιλέγοντας Το Πλήθος Των Ωρών Διδασκαλίας Για Κάθε Ημέρα </h3> </center>
                            <!-- </p> -->

                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="form_monday">Δευτέρα</label>
                                        <select id="form_monday" type="text" name="monday" class="form-control" >
                                               <option <?php if ($_POST[''] == 0 ) echo 'selected' ; ?>>0</option>
                                              <option <?php if ($_POST['monday'] == 5 ) echo 'selected' ; ?>>5</option>
                                              <option <?php if ($_POST['monday'] == 4 ) echo 'selected' ; ?>>4</option>
                                              <option <?php if ($_POST['monday'] == 3 ) echo 'selected' ; ?>>3</option>
                                              <option <?php if ($_POST['monday'] == 2 ) echo 'selected' ; ?>>2</option>
                                              <option <?php if ($_POST['monday'] == 1 ) echo 'selected' ; ?>>1</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="form_tuesday">Τρίτη</label>
                                        <select id="form_tuesday" type="text" name="tuesday" class="form-control" >
                                              <option <?php if ($_POST['tuesday'] == 0 ) echo 'selected' ; ?>>0</option>
                                              <option <?php if ($_POST['tuesday'] == 5 ) echo 'selected' ; ?>>5</option>
                                              <option <?php if ($_POST['tuesday'] == 4 ) echo 'selected' ; ?>>4</option>
                                              <option <?php if ($_POST['tuesday'] == 3 ) echo 'selected' ; ?>>3</option>
                                              <option <?php if ($_POST['tuesday'] == 2 ) echo 'selected' ; ?>>2</option>
                                              <option <?php if ($_POST['tuesday'] == 1 ) echo 'selected' ; ?>>1</option>       </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="form_wednesday">Τετάρτη</label>
                                        <select id="form_wednesday" type="text" name="wednesday" class="form-control">
                                              <option <?php if ($_POST['wednesday'] == 0 ) echo 'selected' ; ?>>0</option>
                                              <option <?php if ($_POST['wednesday'] == 5 ) echo 'selected' ; ?>>5</option>
                                              <option <?php if ($_POST['wednesday'] == 4 ) echo 'selected' ; ?>>4</option>
                                              <option <?php if ($_POST['wednesday'] == 3 ) echo 'selected' ; ?>>3</option>
                                              <option <?php if ($_POST['wednesday'] == 2 ) echo 'selected' ; ?>>2</option>
                                              <option <?php if ($_POST['wednesday'] == 1 ) echo 'selected' ; ?>>1</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="form_thursday">Πέμπτη</label>
                                        <select input type="text" id="form_thursday" name="thursday" class="form-control">
                                              <option <?php if ($_POST['thursday'] == 0 ) echo 'selected' ; ?>>0</option>
                                              <option <?php if ($_POST['thursday'] == 5 ) echo 'selected' ; ?>>5</option>
                                              <option <?php if ($_POST['thursday'] == 4 ) echo 'selected' ; ?>>4</option>
                                              <option <?php if ($_POST['thursday'] == 3 ) echo 'selected' ; ?>>3</option>
                                              <option <?php if ($_POST['thursday'] == 2 ) echo 'selected' ; ?>>2</option>
                                              <option <?php if ($_POST['thursday'] == 1 ) echo 'selected' ; ?>>1</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <!-- <?php echo $_POST['thursday']; ?> -->
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="form_friday">Παρασκευή</label>
                                        <select id="form_friday" type="text" name="friday" class="form-control" >
                                              <option <?php if ($_POST['friday'] == 0 ) echo 'selected' ; ?>>0</option>
                                              <option <?php if ($_POST['friday'] == 5 ) echo 'selected' ; ?>>5</option>
                                              <option <?php if ($_POST['friday'] == 4 ) echo 'selected' ; ?>>4</option>
                                              <option <?php if ($_POST['friday'] == 3 ) echo 'selected' ; ?>>3</option>
                                              <option <?php if ($_POST['friday'] == 2 ) echo 'selected' ; ?>>2</option>
                                              <option <?php if ($_POST['friday'] == 1 ) echo 'selected' ; ?>>1</option>
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                            </div>



                                <div class="col-md-12">
                                    <input type="submit" name="submit" class="btn btn-success btn-send" value="ΕΠΟΜΕΝΗ ΣΕΛΙΔΑ">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <br>
                                    Τα προσωπικά δεδομένα που καταχωρούνται στην συγκεκριμένη εφαρμογή αποθηκεύονται σύμφωνα με τους όρους χρήσης που ορίζονται στον Κανονισμό Γενικής Προστασίας Δεδομένων (GDPR) και αναφέρονται στον παρακάτω <a href="http://dipechan.blogspot.gr/p/blog-page_2.html" target="_blank"> σύνδεσμο </a>. Πατώντας Yποβολή ο χρήστης αποδέχεται τους παραπάνω όρους.
                                    <p class="text-muted"><br><strong>*</strong> Αυτά τα πεδία απαιτούνται <br>
                                <a href="http://dipechan.blogspot.com"> Διεύθυνση Πρωτοβάθμιας Εκπαίδευσης N. Χανίων </a> <br>
                                Ανάπτυξη, Υποστήριξη Ιστοσελίδας: Χαραλαμπάκης Στέργιος <br> </p>
                                 
                                </div>
                            </div>

                        </div>

                    </form>

                </div><!-- /.8 -->

            </div> <!-- /.row-->

        </div> <!-- /.container-->

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
        <!-- <script src="contact.js"></script> -->
    </body>
</html>
