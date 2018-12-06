<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include("final.php");

  ?>

<!DOCTYPE html>
    <head>
        <title>Εφαρμογή Αυτόματης Δημιουργίας Παρουσιολογίων</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href='custom.css' rel='stylesheet' type='text/css'>
    </head>
    <body>
      <?php
          session_start();

          $_SESSION['school'] = $_POST['school'];
          // echo $_POST['school'];
          $year=$_GET['year'];
          $month=$_GET['month'];
          function showd($d,$m,$y){
            $str=$m."/".$d."/".$y;
            $d=strtotime($str);
            echo date("l",$d). ", ".date("d/m/Y",$d);
          }
          
        ?>

        <center><img src="maindipechan1.png" alt="ΔΙΕΥΘΥΝΣΗ Π.Ε. ΧΑΝΙΩΝ"></center>
        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-lg-offset-2">

                    <center><h2>Εφαρμογή Αυτόματης Δημιουργίας Παρουσιολογίων Αναπληρωτών Εκπαιδευτικών Δ/νσης Π.Ε. Χανίων</h2> </center>

                   <br>
                   <p> Συμπληρώστε τα παρακάτω πεδία <b>μόνο</b> για τις ημέρες που το σχολείο δεν λειτούργησε, γράφοντας την αιτιολογία στην αντίστοιχη μέρα στο πεδίο <strong> "Αιτιολογία Μη Λειτουργίας" </strong>(π.χ εθνική εορτή, τοπική εορτή, διακοπές Χριστουγέννων/Πάσχα, καιρικές συνθήκες, εκλογές κλπ.). </p>
                    </p>Επίσης στο πεδίο <strong> "Αιτιολογία Απουσίας Εκπαιδευτικού" </strong> συμπληρώνουμε <strong>μόνο</strong> για τις ημέρες που απουσίαζε η/ο Εκπαιδευτικός την Αιτιολογία (άδεια, απεργία/στάση εργασίας, απουσία) και στο διπλανό πεδίο συμπληρώνουμε το πλήθος των ωρών απουσίας. Υπενθυμίζουμε ότι οι άδειες ασθένειας-κύησης-λοχείας πρέπει να αναφέρονται στη Αιτιολογία ακόμα και για ημέρες που το σχολείο δεν λειτουργεί (αργίες, σαββατοκύριακα, διακοπές Χριστουγέννων κλπ.)</p>
                    <p>Εάν δεν υπάρχουν απουσίες Εκπαιδευτικού και το Σχολείο λειτούργησε όλο τον μήνα μπορείτε να κατεβάσετε το παρουσιολόγιο απευθείας από <strong><a href="out.xlsx"> <font size="6"> εδώ </font> </a> </strong>. Ειδάλλως συμπληρώστε τα παρακάτω πεδία και πατήστε το κουμπί "ΛΗΨΗ ΠΑΡΟΥΣΙΟΛΟΓΙΟΥ"
                    <form id="contact-form" method="post" role="form">

                        <div class="messages"></div>

                        <div class="controls">

                          <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <p> <strong> Ημερομηνία </strong> </p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                         <p> <strong> Αιτιολογία Μη Λειτουργίας Σχολείου   </strong> </p>
                                    </div>
                                </div>
                           
                                <div class="col-md-3">
                                    <div class="form-group">
                                      <p> <strong> Αιτιολογία Απουσίας Εκπαιδευτικού </strong> </p>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                      <p> <strong> Ώρες Απουσίας Εκπαιδευτικού</strong> </p>
                                    </div>
                                </div>
                          </div>
<hr>
                          <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong><br><?php showd('1',$month,$year); ?> </strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_1_sch" name="1_sch" class="form-control" placeholder="Αιτιολογία Μη Λειτουργίας " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_1_abs" name="1_abs" class="form-control" placeholder="Αιτιολογία Απουσίας Εκπαιδευτικού " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_1_habs" type="text" name="1_habs" class="form-control" placeholder="Ώρες Απουσίας">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                          </div>
<hr>
                         <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong><br><?php showd('2',$month,$year); ?> </strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_2_sch" name="2_sch" class="form-control" placeholder="Αιτιολογία Μη Λειτουργίας " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_2_abs" name="2_abs" class="form-control" placeholder="Αιτιολογία Απουσίας Εκπαιδευτικού " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_2_habs" type="text" name="2_habs" class="form-control" placeholder="Ώρες Απουσίας">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                          </div>
<hr>

                         <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong><br><?php showd('3',$month,$year); ?> </strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_3_sch" name="3_sch" class="form-control" placeholder="Αιτιολογία Μη Λειτουργίας " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_3_abs" name="3_abs" class="form-control" placeholder="Αιτιολογία Απουσίας Εκπαιδευτικού " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_3_habs" type="text" name="3_habs" class="form-control" placeholder="Ώρες Απουσίας">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                          </div>
<hr>

                         <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong><br><?php showd('4',$month,$year); ?> </strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_4_sch" name="4_sch" class="form-control" placeholder="Αιτιολογία Μη Λειτουργίας " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_4_abs" name="4_abs" class="form-control" placeholder="Αιτιολογία Απουσίας Εκπαιδευτικού " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_4_habs" type="text" name="4_habs" class="form-control" placeholder="Ώρες Απουσίας">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                          </div>
<hr>


                         <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong><br><?php showd('5',$month,$year); ?> </strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_5_sch" name="5_sch" class="form-control" placeholder="Αιτιολογία Μη Λειτουργίας " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_5_abs" name="5_abs" class="form-control" placeholder="Αιτιολογία Απουσίας Εκπαιδευτικού " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_5_habs" type="text" name="5_habs" class="form-control" placeholder="Ώρες Απουσίας">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                          </div>
<hr>


                         <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong><br><?php showd('6',$month,$year); ?> </strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_6_sch" name="6_sch" class="form-control" placeholder="Αιτιολογία Μη Λειτουργίας " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_6_abs" name="6_abs" class="form-control" placeholder="Αιτιολογία Απουσίας Εκπαιδευτικού " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_6_habs" type="text" name="6_habs" class="form-control" placeholder="Ώρες Απουσίας">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                          </div>
<hr>



                         <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong><br><?php showd('7',$month,$year); ?> </strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_7_sch" name="7_sch" class="form-control" placeholder="Αιτιολογία Μη Λειτουργίας " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_7_abs" name="7_abs" class="form-control" placeholder="Αιτιολογία Απουσίας Εκπαιδευτικού " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_7_habs" type="text" name="7_habs" class="form-control" placeholder="Ώρες Απουσίας">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                          </div>
<hr>


                         <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong><br><?php showd('8',$month,$year); ?> </strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_8_sch" name="8_sch" class="form-control" placeholder="Αιτιολογία Μη Λειτουργίας " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_8_abs" name="8_abs" class="form-control" placeholder="Αιτιολογία Απουσίας Εκπαιδευτικού " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_8_habs" type="text" name="8_habs" class="form-control" placeholder="Ώρες Απουσίας">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                          </div>
<hr>


                         <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong><br><?php showd('9',$month,$year); ?> </strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_9_sch" name="9_sch" class="form-control" placeholder="Αιτιολογία Μη Λειτουργίας " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_9_abs" name="9_abs" class="form-control" placeholder="Αιτιολογία Απουσίας Εκπαιδευτικού " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_9_habs" type="text" name="9_habs" class="form-control" placeholder="Ώρες Απουσίας">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                          </div>
<hr>


                         <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong><br><?php showd('10',$month,$year); ?> </strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_10_sch" name="10_sch" class="form-control" placeholder="Αιτιολογία Μη Λειτουργίας " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_10_abs" name="10_abs" class="form-control" placeholder="Αιτιολογία Απουσίας Εκπαιδευτικού " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_10_habs" type="text" name="10_habs" class="form-control" placeholder="Ώρες Απουσίας">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                          </div>
<hr>


                         <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong><br><?php showd('11',$month,$year); ?> </strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_11_sch" name="11_sch" class="form-control" placeholder="Αιτιολογία Μη Λειτουργίας " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_11_abs" name="11_abs" class="form-control" placeholder="Αιτιολογία Απουσίας Εκπαιδευτικού " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_11_habs" type="text" name="11_habs" class="form-control" placeholder="Ώρες Απουσίας">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                          </div>
<hr>

                         <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong><br><?php showd('12',$month,$year); ?> </strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_12_sch" name="12_sch" class="form-control" placeholder="Αιτιολογία Μη Λειτουργίας " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_12_abs" name="12_abs" class="form-control" placeholder="Αιτιολογία Απουσίας Εκπαιδευτικού " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_12_habs" type="text" name="12_habs" class="form-control" placeholder="Ώρες Απουσίας">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                          </div>
<hr>

                         <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong><br><?php showd('13',$month,$year); ?> </strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_13_sch" name="13_sch" class="form-control" placeholder="Αιτιολογία Μη Λειτουργίας " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_13_abs" name="13_abs" class="form-control" placeholder="Αιτιολογία Απουσίας Εκπαιδευτικού " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_13_habs" type="text" name="13_habs" class="form-control" placeholder="Ώρες Απουσίας">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                          </div>
<hr>

                         <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong><br><?php showd('14',$month,$year); ?> </strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_14_sch" name="14_sch" class="form-control" placeholder="Αιτιολογία Μη Λειτουργίας " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_14_abs" name="14_abs" class="form-control" placeholder="Αιτιολογία Απουσίας Εκπαιδευτικού " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_14_habs" type="text" name="14_habs" class="form-control" placeholder="Ώρες Απουσίας">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                          </div>
<hr>

                         <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong><br><?php showd('15',$month,$year); ?> </strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_15_sch" name="15_sch" class="form-control" placeholder="Αιτιολογία Μη Λειτουργίας " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_15_abs" name="15_abs" class="form-control" placeholder="Αιτιολογία Απουσίας Εκπαιδευτικού " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_15_habs" type="text" name="15_habs" class="form-control" placeholder="Ώρες Απουσίας">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                          </div>
<hr>

                         <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong><br><?php showd('16',$month,$year); ?> </strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_16_sch" name="16_sch" class="form-control" placeholder="Αιτιολογία Μη Λειτουργίας " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_16_abs" name="16_abs" class="form-control" placeholder="Αιτιολογία Απουσίας Εκπαιδευτικού " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_16_habs" type="text" name="16_habs" class="form-control" placeholder="Ώρες Απουσίας">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                          </div>
<hr>

                         <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong><br><?php showd('17',$month,$year); ?> </strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_17_sch" name="17_sch" class="form-control" placeholder="Αιτιολογία Μη Λειτουργίας " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_17_abs" name="17_abs" class="form-control" placeholder="Αιτιολογία Απουσίας Εκπαιδευτικού " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_17_habs" type="text" name="17_habs" class="form-control" placeholder="Ώρες Απουσίας">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                          </div>
<hr>

                         <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong><br><?php showd('18',$month,$year); ?> </strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_18_sch" name="18_sch" class="form-control" placeholder="Αιτιολογία Μη Λειτουργίας " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_18_abs" name="18_abs" class="form-control" placeholder="Αιτιολογία Απουσίας Εκπαιδευτικού " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_18_habs" type="text" name="18_habs" class="form-control" placeholder="Ώρες Απουσίας">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                          </div>
<hr>

                         <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong><br><?php showd('19',$month,$year); ?> </strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_19_sch" name="19_sch" class="form-control" placeholder="Αιτιολογία Μη Λειτουργίας " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_19_abs" name="19_abs" class="form-control" placeholder="Αιτιολογία Απουσίας Εκπαιδευτικού " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_19_habs" type="text" name="19_habs" class="form-control" placeholder="Ώρες Απουσίας">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                          </div>
<hr>

                         <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong><br><?php showd('20',$month,$year); ?> </strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_20_sch" name="20_sch" class="form-control" placeholder="Αιτιολογία Μη Λειτουργίας " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_20_abs" name="20_abs" class="form-control" placeholder="Αιτιολογία Απουσίας Εκπαιδευτικού " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_20_habs" type="text" name="20_habs" class="form-control" placeholder="Ώρες Απουσίας">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                          </div>
<hr>

                         <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong><br><?php showd('21',$month,$year); ?> </strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_21_sch" name="21_sch" class="form-control" placeholder="Αιτιολογία Μη Λειτουργίας " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_21_abs" name="21_abs" class="form-control" placeholder="Αιτιολογία Απουσίας Εκπαιδευτικού " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_21_habs" type="text" name="21_habs" class="form-control" placeholder="Ώρες Απουσίας">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                          </div>
<hr>

                         <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong><br><?php showd('22',$month,$year); ?> </strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_22_sch" name="22_sch" class="form-control" placeholder="Αιτιολογία Μη Λειτουργίας " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_22_abs" name="22_abs" class="form-control" placeholder="Αιτιολογία Απουσίας Εκπαιδευτικού " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_22_habs" type="text" name="22_habs" class="form-control" placeholder="Ώρες Απουσίας">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                          </div>
<hr>

                         <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong><br><?php showd('23',$month,$year); ?> </strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_23_sch" name="23_sch" class="form-control" placeholder="Αιτιολογία Μη Λειτουργίας " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_23_abs" name="23_abs" class="form-control" placeholder="Αιτιολογία Απουσίας Εκπαιδευτικού " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_23_habs" type="text" name="23_habs" class="form-control" placeholder="Ώρες Απουσίας">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                          </div>
<hr>

                         <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong><br><?php showd('24',$month,$year); ?> </strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_24_sch" name="24_sch" class="form-control" placeholder="Αιτιολογία Μη Λειτουργίας " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_24_abs" name="24_abs" class="form-control" placeholder="Αιτιολογία Απουσίας Εκπαιδευτικού " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_24_habs" type="text" name="24_habs" class="form-control" placeholder="Ώρες Απουσίας">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                          </div>
<hr>

                         <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong><br><?php showd('11',$month,$year); ?> </strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_25_sch" name="25_sch" class="form-control" placeholder="Αιτιολογία Μη Λειτουργίας " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_25_abs" name="25_abs" class="form-control" placeholder="Αιτιολογία Απουσίας Εκπαιδευτικού " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_25_habs" type="text" name="25_habs" class="form-control" placeholder="Ώρες Απουσίας">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                          </div>
<hr>

                         <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong><br><?php showd('26',$month,$year); ?> </strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_26_sch" name="26_sch" class="form-control" placeholder="Αιτιολογία Μη Λειτουργίας " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_26_abs" name="26_abs" class="form-control" placeholder="Αιτιολογία Απουσίας Εκπαιδευτικού " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_26_habs" type="text" name="26_habs" class="form-control" placeholder="Ώρες Απουσίας">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                          </div>
<hr>

                         <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong><br><?php showd('27',$month,$year); ?> </strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_27_sch" name="27_sch" class="form-control" placeholder="Αιτιολογία Μη Λειτουργίας " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_27_abs" name="27_abs" class="form-control" placeholder="Αιτιολογία Απουσίας Εκπαιδευτικού " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_27_habs" type="text" name="27_habs" class="form-control" placeholder="Ώρες Απουσίας">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                          </div>
<hr>

                         <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong><br><?php showd('28',$month,$year); ?> </strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_28_sch" name="28_sch" class="form-control" placeholder="Αιτιολογία Μη Λειτουργίας " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_28_abs" name="28_abs" class="form-control" placeholder="Αιτιολογία Απουσίας Εκπαιδευτικού " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_28_habs" type="text" name="28_habs" class="form-control" placeholder="Ώρες Απουσίας">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                          </div>
<hr>

                         <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong><br><?php showd('29',$month,$year); ?> </strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_29_sch" name="29_sch" class="form-control" placeholder="Αιτιολογία Μη Λειτουργίας " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_29_abs" name="29_abs" class="form-control" placeholder="Αιτιολογία Απουσίας Εκπαιδευτικού " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_29_habs" type="text" name="29_habs" class="form-control" placeholder="Ώρες Απουσίας">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                          </div>
<hr>

                         <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <strong><br><?php showd('30',$month,$year); ?> </strong>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_30_sch" name="30_sch" class="form-control" placeholder="Αιτιολογία Μη Λειτουργίας " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <textarea id="form_30_abs" name="30_abs" class="form-control" placeholder="Αιτιολογία Απουσίας Εκπαιδευτικού " rows="2" ></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               <div class="col-md-3">
                                    <div class="form-group">
                                        <input id="form_30_habs" type="text" name="30_habs" class="form-control" placeholder="Ώρες Απουσίας">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                          </div>
<hr>


<?php if(cal_days_in_month(CAL_GREGORIAN, $month, $year)>30){
  echo " <div class='row'>
                                <div class='col-md-3'>
                                    <div class='form-group'>
                                        <br><strong>".showd('31',$month,$year)."  </strong>
                                    </div>
                                </div>
                                <div class='col-md-3'>
                                    <div class='form-group'>
                                        <textarea id='form_31_sch' name='31_sch' class='form-control' placeholder='Αιτιολογία Μη Λειτουργίας ' rows='2' ></textarea>
                                        <div class='help-block with-errors'></div>
                                    </div>
                                </div>
                                <div class='col-md-3'>
                                    <div class='form-group'>
                                        <textarea id='form_31_abs' name='31_abs' class='form-control' placeholder='Αιτιολογία Απουσίας Εκπαιδευτικού ' rows='2' ></textarea>
                                        <div class='help-block with-errors'></div>
                                    </div>
                                </div>
                               <div class='col-md-3'>
                                    <div class='form-group'>
                                        <input id='form_31_habs' type='text' name='31_habs' class='form-control' placeholder='Ώρες Απουσίας'>
                                        <div class='help-block with-errors'></div>
                                    </div>
                                </div>
                          </div>
<hr>
  ";
}
?>

                            

                                <div class="col-md-12">
                                    <input type="submit" name='submit' class="btn btn-success btn-send" value="ΛΗΨΗ ΠΑΡΟΥΣΙΟΛΟΓΙΟΥ">
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <br>
                                    Τα προσωπικά δεδομένα που καταχωρούνται στην συγκεκριμένη εφαρμογή αποθηκεύονται σύμφωνα με τους όρους χρήσης που ορίζονται στον Κανονισμό Γενικής Προστασίας Δεδομένων (GDPR) και αναφέρονται στον παρακάτω <a href="http://dipechan.blogspot.gr/p/blog-page_2.html" target="_blank"> σύνδεσμο </a>. Πατώντας Yποβολή ο χρήστης αποδέχεται τους παραπάνω όρους.
                                     <br>
                                <a href="http://dipechan.blogspot.com"> Διεύθυνση Πρωτοβάθμιας Εκπαίδευσης N. Χανίων </a> <br>
                                Ανάπτυξη, Υποστήριξη Ιστοσελίδας: Χαραλαμπάκης Στέργιος <br> </p>
                                 
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
