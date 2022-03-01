<?php
    function validationOfEmail($userMail)
    {
        //Serverside validation of email,same as clientside validation
        if(preg_match("/^([a-zA-Z0-9\.-]{4,20})@([a-zA-Z0-9\-]{2,20}).([a-z]{2,5})(.[a-z]{2,5})?$/",$userMail))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function validationOfPassword($userPassword)
    {
        //Serverside validation of Password,same as clientside validation
        if(preg_match("/^(?=.*[0-9])(?=.*[!@%^&*])[a-zA-Z0-9!@%^&*]{7,15}$/",$userPassword))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function validationOfContactNumber($userContactNumber)
    {
        //Serverside validation of Contact number,same as clientside validation
        if(preg_match("/^([0-9]{5}[-\s][0-9]{6}||[6789]\d{9})$/",$userContactNumber))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function validationOfName($userName)
    {
        //Serverside validation of Name,same as clientside validation
        if(preg_match("/^[A-Za-z\s]{2,20}$/",$userName))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function validationOfCity($userCity)
    {
        //Serverside validation of City,same as clientside validation
        if(preg_match("/^[a-zA-Z\s.]{3,30}$/",$userCity))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function validationOfPincode($userPincode)
    {
        //Serverside validation of Pin code,same as clientside validation
        if(preg_match("/^[0-9]{6,6}$/",$userPincode))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
?>