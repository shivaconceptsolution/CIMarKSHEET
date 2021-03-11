<?php

class MarksheetController extends CI_Controller
{

    function index()
    {

    	$this->load->view('marksheetview');
    }
    function markslogic()
    {
    	$sub1 = $this->input->post('txtsub1');
    	$sub2 = $this->input->post('txtsub2');
    	$sub3 = $this->input->post('txtsub3');
    	$sub4 = $this->input->post('txtsub4');
    	$sub5 = $this->input->post('txtsub5');
    	$m1 = $this->input->post('txtmark1');
    	$m2 = $this->input->post('txtmark2');
    	$m3 = $this->input->post('txtmark3');
    	$m4 = $this->input->post('txtmark4');
    	$m5 = $this->input->post('txtmark5');

    	$data = array($sub1=>$m1,$sub2=>$m2,$sub3=>$m3,$sub4=>$m4,$sub5=>$m5);
    	//	print_r($data);	
         $result="";
        $c=0;
        $total=0;
        $sub="";
        $g=0;
        $dist="";
    	foreach($data as $s=>$m)
    	{
                if($m<33)
             	{ 
             	$c++;
             	$sub = $sub.$s. " ";	
             	$g=$m;
                }
                if($m>=75)
                {
                	$dist.=$s." ";
                }
               	$total+=$m;
                
    	}

    	if($c==0 || $c==1 && $g>=28)
    	{
    		if($c==0)
    		$per = $total/5;
    	    else
    	    $per = ($total + (33-$g))/5;	

    		 if($per>=33 && $per<45)
    		 {
    		 	$result=$result. "Congratulation You are Pass in III Division with $per %";
    		 }
    		 else if($per<60)
    		 {
    		 	$result=$result. "Congratulation You are Pass in II Division with $per %";
    		 }
    		 else
    		 {
    		 	$result=$result. "Congratulation You are Pass in I Division with $per %";
    		 }

    		 if($c==1)
    		 {
    		 	$result=$result. "<hr>	You are Pass by grace and grace subject is ".$sub. "and grace mark is ".(33-$g);
    		 }

    		 if($dist!="")
    		 {
    		 	$result=$result."<hr>Ditinction Subject name is ".$dist;
    		 }
              
    	}
       else if($c==1)
       {
          $result=$result. "Try Again You are Suppl in $sub";
       }
       else
       {
          $result=$result. "Sorry!! You have Failed in $sub";
       }

       $this->load->view('resultview',array("res"=>$result));
    }
}






?>