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

if ($_POST["submit"]) {
		
				require 'vendor/autoload.php';
				//write the xls file

				$spreadsheet = new Spreadsheet();


				$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
				

				$path='out.xlsx';
				$spreadsheet = $reader->load($path);


				$sheet = $spreadsheet->getActiveSheet();
				$month=$_GET['month'];
				$year=$_GET['year'];
				$days=cal_days_in_month(CAL_GREGORIAN, $month, $year);
				for ($i=11; $i<$days+11 ; $i++) { 
					if(!empty($_POST[$i.'_sch'])){
						$sheet->setCellValue('E'.$i, grstrtoupper($_POST[$i.'_sch']));
					}
					if(!empty($_POST[$i.'_abs'])){
						if(empty($_POST[$i.'_sch'])){
							$sheet->setCellValue('E'.$i, "");
						}
						$sheet->setCellValue('I'.$i, grstrtoupper($_POST[$i.'_abs']));
						$sheet->setCellValue('H'.$i, grstrtoupper($_POST[$i.'_habs']));
					}

				}



				$writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);

				$writer->save('final.xlsx');

				header('Location: http://localhost/CrtParousilogio/teliko.php');


	}
			

 	



 

 




?>