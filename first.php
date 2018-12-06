<?php
error_reporting(E_ERROR | E_PARSE);

use PhpOffice\PhpSpreadsheet\Spreadsheet;

//sanity checking the afm of the teacher before proceeding
function grstrtoupper($string) {
		$latin_check = '/[\x{0030}-\x{007f}]/u';
		if (preg_match($latin_check, $string))
		{
			$string = strtoupper($string);
		}
		$letters  								= array('α', 'β', 'γ', 'δ', 'ε', 'ζ', 'η', 'θ', 'ι', 'κ', 'λ', 'μ', 'ν', 'ξ', 'ο', 'π', 'ρ', 'σ', 'τ', 'υ', 'φ', 'χ', 'ψ', 'ω');
		$letters_accent 						= array('ά', 'έ', 'ή', 'ί', 'ό', 'ύ', 'ώ');
		$letters_upper_accent 					= array('Ά', 'Έ', 'Ή', 'Ί', 'Ό', 'Ύ', 'Ώ');
		$letters_upper_solvents 				= array('ϊ', 'ϋ');
		$letters_other 							= array('ς');
		$letters_to_uppercase					= array('Α', 'Β', 'Γ', 'Δ', 'Ε', 'Ζ', 'Η', 'Θ', 'Ι', 'Κ', 'Λ', 'Μ', 'Ν', 'Ξ', 'Ο', 'Π', 'Ρ', 'Σ', 'Τ', 'Υ', 'Φ', 'Χ', 'Ψ', 'Ω');
		$letters_accent_to_uppercase 			= array('Α', 'Ε', 'Η', 'Ι', 'Ο', 'Υ', 'Ω');
		$letters_upper_accent_to_uppercase 		= array('Α', 'Ε', 'Η', 'Ι', 'Ο', 'Υ', 'Ω');
		$letters_upper_solvents_to_uppercase 	= array('Ι', 'Υ');
		$letters_other_to_uppercase 			= array('Σ');
		$lowercase = array_merge($letters, $letters_accent, $letters_upper_accent, $letters_upper_solvents, $letters_other);
		$uppercase = array_merge($letters_to_uppercase, $letters_accent_to_uppercase, $letters_upper_accent_to_uppercase, $letters_upper_solvents_to_uppercase, $letters_other_to_uppercase);
		$uppecase_string = str_replace($lowercase, $uppercase, $string);
		return $uppecase_string;
}
$afm=$_POST['afm'];
if ($_POST["submit"]) {
			
			
	 	 if(strlen($afm)!=9 || !is_numeric($afm)){
			$error="Μη έγκυρος ΑΦΜ!!";	 	 	
	 	 }
			
	 	 
	 	 
			
	 	 if ($error) {
			 $result='<div class="alert alert-danger"><strong>'.$error.'</div>';

	 	 } else {
	 	 	

			# include parseCSV class.
			require_once('parsecsv.lib.php');
			# create new parseCSV object.
			$csv = new parseCSV();
			# Parse '_books.csv' using automatic delimiter detection...
			$csv->encoding('iso8859-7','UTF-8');
			#if the first digit of $inputAfm is zero then it will be trimmed in the csv
			#this is a trick to bypass this
			// if($inputAfm.substr(0,1)=="0"){
			// 	$inputAfm=$inputAfm.substr(1);
			// }
			// echo $inputAfm;
			$csv->conditions = 'inputAfm is '.$afm;
			$csv->auto('ESPA.csv');
			$parsed = $csv->data;
			$afm=$parsed[0][inputAfm];
			$surname=$parsed[0][inputSurname];
			$praksi=$parsed[0][praksi];
			$name=$parsed[0][name];
			$eidikotita=$parsed[0][eidikotita];

			if($surname==""){
				$result='<div class="alert alert-danger"> H/O συγκεκριμένος Εκπαιδευτικός δεν υπάρχει στην Βάση των Αναπληρωτών Εκπαιδευτικών ΕΣΠΑ </div>';
			}else{
				//vrethike to afm opote simplironoume to excel me ta mexri tora stoixeia kai kanoyme redirect sti deuteri selida
				require 'vendor/autoload.php';

				

				//metablites formas
				$school=grstrtoupper($_POST['school']);
				$code=$_POST['code'];
				$phone=$_POST['phone'];
				$address=grstrtoupper($_POST['address']);
				$director=grstrtoupper($_POST['director']);
				$month=$_POST['month'];
				$year=$_POST['year'];
				$monday=$_POST['monday'];
				$tuesday=$_POST['tuesday'];
				$wednesday=$_POST['wednesday'];
				$thursday=$_POST['thursday'];
				$friday=$_POST['friday'];

				//write the xls file

				$spreadsheet = new Spreadsheet();


				$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
				
				if ($eidikotita="ΠΕ23"or $eidikotita="ΠΕ25" or $eidikotita="ΔΕ01" or $eidikotita="ΠΕ29" or $eidikotita="ΠΕ29" or $eidikotita="ΠΕ21" or $eidikotita="ΠΕ30") {
					if ($praksi="Εξατομικευμένη 2018-2019 (MIS 5031883)"){
						$praksi="eksatomikeumeni_eep_evp";
					}
					else if ($praksi="Εξειδικευμένη 2018-2019 (MIS 5031892)") {
						$praksi="exeidikeumeni_eep_evp";
					}
				}
				$path='parousiologia\\'.$praksi.'.xlsx';
				$spreadsheet = $reader->load($path);


				$sheet = $spreadsheet->getActiveSheet();
				$sheet->setCellValue('C2', $month);
				$sheet->setCellValue('F5', 'Σχολείο:'.$school);
				$sheet->setCellValue('I5', 'Κωδικός Σχολείου:'.$code);
				$sheet->setCellValue('B6', 'Ταχ. Δ/νση Σχολείου:'.$address);
				$sheet->setCellValue('F6', 'Τηλ. Σχολείου:'.$phone);
				$sheet->setCellValue('B7', 'Ονοματεπώνυμο Διευθυντή του  Σχολείου:'.$director);
				$sheet->setCellValue('B8', 'Ονοματεπώνυμο Εκπ/κού:'.$name.' '.$surname);
				$sheet->setCellValue('G8', 'Ειδικότητα:'.$eidikotita);
				$sheet->setCellValue('I8', 'ΑΦΜ:'.$afm);
				


				$program = array($monday,$tuesday,$wednesday,$thursday,$friday);
				//ipologismos imeron mina
				$days=cal_days_in_month(CAL_GREGORIAN, $month, $year)+11;

				for ($i=11; $i <$days ; $i++) { 
					switch ($sheet->getCell('B'.$i)->getFormattedValue()) {
						case 'Mon':
						$sheet->setCellValue('D'.$i, $program[0]);
						$sheet->setCellValue('E'.$i, $program[0]);
							break;
						case 'Tue':
						$sheet->setCellValue('D'.$i, $program[1]);
						$sheet->setCellValue('E'.$i, $program[1]);
							break;
						case 'Wed':
						$sheet->setCellValue('D'.$i, $program[2]);
						$sheet->setCellValue('E'.$i, $program[2]);
							break;
						case 'Thu':
						$sheet->setCellValue('D'.$i, $program[3]);
						$sheet->setCellValue('E'.$i, $program[3]);
							break;
						case 'Fri':
						$sheet->setCellValue('D'.$i, $program[4]);
						$sheet->setCellValue('E'.$i, $program[4]);
							break;
					}
				}




				$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);

				$writer->save('out.xlsx');

				//redirect to finalize the application

				header('Location: http://localhost/CrtParousilogio/apousia.php?month='.$month.'&year='.$year);
			}
			

 	} 



 }

 




?>