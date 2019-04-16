<?php


        print "Digite F ou M para informar seu sexo:\n";
    
        $sex = fgetc(STDIN);
    
        if($sex=="M"){
    
            print "O seu sexo é Masculino.\n";       
    
    }
    
    else
    
        if($sex== "F"){ 
    
            print "O seu sexo é Feminino.\n";    
    
    }

    else
    
    if($sex!= "F" or "M"){
    
        print "Inválido.\n";
    }
