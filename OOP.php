<?php

class Company{
    
    public $name;
    public $location;
    public $tot_employees;
    static public $avg_wage = 1500;
    static public $total_expense = 0;

    public function __construct($_name,$_location,$_tot_employees){

        $this->name = $_name;
        $this->location = $_location;
        $this->tot_employees = $_tot_employees;
    }

    public function StampaDipendenti(){
        if ($this->tot_employees) {
            echo "Il centro " . $this->name . " con sede a " . $this->location . " ha ben " . $this->tot_employees . " dipendenti in organico.\n";
        }
        else{
            echo "Il centro " . $this->name . " con sede a " . $this->location . " non ha dipendenti in organico.\n";
        }
    }

    public function Spese_Stipendi_Per_Sede(){
        $totale_annuale = $this->tot_employees * self::$avg_wage * 12;
        

        self::$total_expense += $totale_annuale;
        echo "La spesa salariale annuale per il centro " . $this->name . " con sede a " . $this->location . " è di €" . $totale_annuale . "\n";
    }

    public function Spese_Stipendi_Per_Tot_Mesi($mesi_media_salariale){

        $totale_per_x_mesi = $this->tot_employees * self::$avg_wage * $mesi_media_salariale;

        echo "La spesa totale per " . $mesi_media_salariale . " di tutte le aziende è di €" . $totale_per_x_mesi . "\n";
    }

    static public function Spesa_Stipendi_Totale(){
        echo "La spesa salariale per tutte le sedi Coop nel territorio italiano è di €" . self::$total_expense;
    }
}


$company1 = new Company("Coop Centrale" , "Milano" , 300);

$company2 = new Company("Coop in C.C. Forum" , "Palermo" , 120);

$company3 = new Company("IperCoop" , "Roma" , 250);

$company4 = new Company("Sede Coop Firenze" , "Firenze" , 130);

$company5 = new Company("Coop Napoli" , "Napoli" , 100);

$company1->StampaDipendenti();

$company2->StampaDipendenti();

$company3->StampaDipendenti();

$company4->StampaDipendenti();

$company5->StampaDipendenti();

$company1->Spese_Stipendi_Per_Sede();

$company2->Spese_Stipendi_Per_Sede();

$company3->Spese_Stipendi_Per_Sede();

$company4->Spese_Stipendi_Per_Sede();

$company5->Spese_Stipendi_Per_Sede();

$mesi_media_salariale = intval(readline("Per quanti mesi vuoi calcolare la media salariale? "));

$company1->Spese_Stipendi_Per_Tot_Mesi($mesi_media_salariale);

$company2->Spese_Stipendi_Per_Tot_Mesi($mesi_media_salariale);

$company3->Spese_Stipendi_Per_Tot_Mesi($mesi_media_salariale);

$company4->Spese_Stipendi_Per_Tot_Mesi($mesi_media_salariale);

$company5->Spese_Stipendi_Per_Tot_Mesi($mesi_media_salariale);

Company::Spesa_Stipendi_Totale();