<?php

phpinfo();

if (mail("neijssen@hotmail.com","subject","body","From: info@gema.site11.com"))
    echo "mail sent";
  else
    echo "mail not sent";
	  
mail("neijssen@hotmail.com","subject","body","From: info@gema.site11.com");			

?>